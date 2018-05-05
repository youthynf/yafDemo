<?php

class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {//默认Action
//        $this->getView();
        $this->getView()->assign('username', 'john');
        $this->getView()->assign('title',"网站首页");
//        $this->render('world', array('content'=>'hello world'));
//        $this->getView()->assign("content", "Hello Hadoop! Welcome to Beijing!<br/>");

        $cart = new CartModel();

        $bind = [
            'name' => 'john',
        ];

        $cart->insert($bind);

        $row = $cart->InsertGetLastId();
        var_dump($row);
        exit();

        $this->getView()->display('index/index.phtml');
    }
}