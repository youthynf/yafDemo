<?php
use Yaf\Controller_Abstract;
use Yaf\Dispatcher;
class UserController extends Controller_Abstract
{
    public function indexAction()
    {//默认Action
        $this->getView()->assign("content", "I am in application/controllers/User.php/indexAction");
    }

    public function test2Action(){
//        $this->getView()->assign("testcontent", "test hello");
        Dispatcher::getInstance()->disableView(0);
        echo 'Great,It Works! There is User test method.';
    }
}