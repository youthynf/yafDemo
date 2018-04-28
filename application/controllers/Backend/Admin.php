<?php
use Yaf\Controller_Abstract;
use Yaf\Dispatcher;
class AdminController extends Controller_Abstract
{
    public function indexAction()
    {//默认Action
        $this->getView()->assign("content", "I am in application/controllers/Backend/Admin/indexAction");
    }

    public function testAction(){
//        $this->getView()->assign("testcontent", "test hello");
        Dispatcher::getInstance()->disableView(0);
        echo 'Great,It Works!';
    }
}