<?php
/**
 * Created by PhpStorm.
 * User: youth
 * Date: 2018-05-05
 * Time: 14:16
 */

class Db_Mysql
{
    private $_options = array();

    private  $db;

    public static $poolsize = 0;

    private $statement;

    private static $_pools = [];

    private $_fetchMode = 2;

    private $lastInsertId = '';

    private $table;

    /**
     * 构造函数
     *
     * @param string $host
     * @param string $username
     * @param string $password
     * @param string $dbname
     * @param string $charset
     */
    function __construct($config, $table)
    {
        $host = $config->host;
        $username = $config->username;
        $password = $config->password;
        $dbname = $config->dbname;
        $charset = $config->charset;
        //初始化数据连接
        try {
            if(count(self::$_pools) <= 0) {
                $dns = 'mysql:dbname=' . $dbname . ';host=' . $host;
                $conn = new PDO($dns, $username, $password, array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_AUTOCOMMIT => 1));
                $conn->query('SET NAMES ' . $charset);
                array_push(self::$_pools,$conn);
                var_dump("kkk");
            }
            $this->table = $table;
        } catch (PDOException $e) {
            echo header("Content-type: text/html; charset=utf-8");
            echo '<pre />';
            echo '<b>Connection failed:</b>' . $e->getMessage();
            die;
        }
    }

    /**
     * 调用初始化MYSQL连接
     *
     * @param string $config
     * @return Aomp_Db_Mysql
     */
    static public function getInstance($config = '')
    {
        $db = new self($config);
        return $db;
    }

    /**
     * 获取多条数据
     *
     * @param string $sql
     * @param array $bind
     * @param string $fetchMode
     * @return multitype:
     */
    public function fetchAll($sql, $bind = array(), $fetchMode = null)
    {
        if($fetchMode === NULL){
            $fetchMode = $this->_fetchMode;
        }
        $conn = $this->getConnection();
        $stmt = $this->query($sql, $bind, $conn);
        $this->release($conn);
        $res = $stmt->fetchAll($fetchMode);

        return $res;
    }

    /**
     * 获取单条数据
     *
     * @param string $sql
     * @param array $bind
     * @param string $fetchMode
     * @return mixed
     */
    public function fetchRow($sql, array $bind = array(), $fetchMode = null)
    {
        if ($fetchMode === null) {
            $fetchMode = $this->_fetchMode;
        }
        $conn = $this->getConnection();
        $stmt = $this->query($sql, $bind, $conn);
        $this->release($conn);
        $result = $stmt->fetch($fetchMode);
        return $result;
    }


    /**
     * 获取统计或者ID
     *
     * @param string $sql
     * @param array $bind
     * @return string
     */
    public function fetchOne($sql, array $bind = array())
    {
        $conn = $this->getConnection();
        $stmt = $this->query($sql, $bind, $conn);
        $this->release($conn);
        $res = $stmt->fetchColumn(0);
        return $res;
    }

    /**
     * 增加
     *
     * @param string $table
     * @param array $bind
     * @return number
     */
    public function insert(array $bind)
    {
        $cols = array();
        $vals = array();

        foreach ($bind as $k => $v) {
            $cols[] = '`' . $k . '`';
            $vals[] = ':' . $k;
            unset($bind[$k]);
            $bind[':' . $k] = $v;
        }

        $sql = 'INSERT INTO '
            . $this->table
            . ' (' . implode(',', $cols) . ') '
            . 'VALUES (' . implode(',', $vals) . ')';

        $conn = $this->getConnection();
        $stmt = $this->query($sql, $bind, $conn);
        $this->lastInsertId = $conn->lastInsertId();
        $this->release($conn);

        $res = $stmt->rowCount();

        return $res;
    }

    /**
     * 删除
     *
     * @param string $table
     * @param string $where
     * @return boolean
     */
    public function delete($where = '')
    {
        $where = $this->_whereExpr($where);

        $sql = 'DELETE FROM '
            .  $this->table
            .  ($where ? ' WHERE ' .$where : '');

        $conn = $this->getConnection();
        $stmt = $this->query($sql, $conn);
        $this->release($conn);

        $res = $stmt->rowCount();

        return $res;
    }

    /**
     * 修改
     *
     * @param string $table
     * @param array $bind
     * @param string $where
     * @return boolean
     */
    public function update(array $bind, $where = '')
    {
        $set = array();

        foreach ($bind as $k => $v) {
            $bind[':' . $k] = $v;
            $v = ':' . $k;
            $set[] = $k . ' = ' . $v;
            unset($bind[$k]);
        }

        $where = $this->_whereExpr($where);

        $sql = 'UPDATE '
            .  $this->table
            .  ' SET ' . implode(',', $set)
            .  (($where) ? ' WHERE ' . $where : '');

        $conn = $this->getConnection();
        $stmt = $this->query($sql, $bind, $conn);
        $this->release($conn);

        $res = $stmt->rowCount();

        return $res;
    }

    /**
     * 获取新增ID
     *
     * @param string $tableName
     * @param string $primaryKey
     * @return string
     */
    public function InsertGetLastId()
    {
        return $this->lastInsertId;
    }

    public function query($sql, $bind = array(), $conn)
    {
        if(!is_array($bind)){
            $bind = array($bind);
        }
        $stmt = $this->prepare($sql, $conn);
        $stmt->execute($bind);
        $stmt->setFetchMode($this->_fetchMode);
        return $stmt;
    }

    public function prepare($sql = '', $conn)
    {
        if(empty($sql)){
            return false;
        }
        $this->statement = $conn->prepare($sql);
        return $this->statement;
    }

    public function execute($param = '')
    {
        if(is_array($param)){
            try {
                return $this->statement->execute($param);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }else {
            try {
                return $this->statement->execute();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }

    /**
     *
     * @param string $where
     * @return null|string
     */
    protected function _whereExpr($where)
    {
        if(empty($where)){
            return $where;
        }

        if(!is_array($where)){
            $where = array($where);
        }

        $where = implode(' AND ', $where);

        return $where;
    }

    /**
     * 关闭数据库操作
     */
    public function close()
    {
        $this->_db = null;
    }

    /**从连接池中获取数据库连接，连接池为空进行新建一个连接*/
    public function getConnection(){
        if (count(self::$_pools) > 0) {
            $one = array_pop(self::$_pools);
            return $one;
        } else {
            $config = Yaf_Application::app()->getConfig()->db;
            $dns = 'mysql:dbname=' . $config->dbname . ';host=' . $config->host;
            $conn = new PDO($dns, $config->username, $config->password, array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_AUTOCOMMIT => 1));
            return $conn;
        }
    }

    /**
     * 释放连接，将连接放回连接池
     */
    public function release($conn){
        array_push(self::$_pools, $conn);
        self::$poolsize ++;
    }
}