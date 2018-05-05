<?php
/**
 * Created by PhpStorm.
 * User: youth
 * Date: 2018-05-03
 * Time: 17:03
 */

class CartController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {//默认Action
        $this->getView()->assign('username', 'john');
        $this->getView()->assign('title',"购物车首页");

        $this->getView()->display("cart/index.phtml");
    }

    public function test2Action(){
//        $this->getView()->assign("testcontent", "test hello");
        Dispatcher::getInstance()->disableView(0);
        echo 'Great,It Works! There is User test method.';
    }
}