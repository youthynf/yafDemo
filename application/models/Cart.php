<?php
/**
 * Created by PhpStorm.
 * User: youth
 * Date: 2018-05-05
 * Time: 16:28
 */

class CartModel extends Db_Mysql {
    private $table = 'test';

    public function __construct()
    {
        parent::__construct(Yaf_Application::app()->getConfig()->db, $this->table);
    }
}