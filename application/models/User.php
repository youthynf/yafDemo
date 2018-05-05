<?php

class UserModel extends Db_Mysql {
    private $table = 'user';

    public function __construct()
    {
        parent::__construct(Yaf_Application::app()->getConfig()->db, $this->table);
    }
}