<?php
use Yaf\Controller_Abstract;
use Yaf\Dispatcher;
class TestController extends Controller_Abstract
{
    public function indexAction()
    {//默认Action
        $this->getView()->assign("content", "I am in application/modules/controllers/Admin/Test.php/indexAction");
    }

    public function testAction(){
//        $this->getView()->assign("testcontent", "test hello");
        Dispatcher::getInstance()->disableView(0);
        echo 'Great,It Works!';
    }
}