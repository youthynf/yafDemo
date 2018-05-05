<?php
/**
 * Created by PhpStorm.
 * User: youth
 * Date: 2018-05-03
 * Time: 17:14
 */
use Yaf\Controller_Abstract;
use Yaf\Dispatcher;
class ContactController extends Controller_Abstract
{
    public function indexAction()
    {//默认Action
        $this->getView();
    }

    public function test2Action(){
//        $this->getView()->assign("testcontent", "test hello");
        Dispatcher::getInstance()->disableView(0);
        echo 'Great,It Works! There is User test method.';
    }
}