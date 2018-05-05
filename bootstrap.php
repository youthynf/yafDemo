<?php
//use Yaf\Bootstrap_Abstract;
//use Yaf\Dispatcher;
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

//require_once APP_PATH ."/application/library/Smarty/Adapter.php";
class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {
        $dispatcher->setDefaultModule("Index")->setDefaultController("index")->setDefaultAction("index");
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        $config = new Yaf_Config_Ini(APP_PATH . '/conf/routing.ini');
        $dispatcher->getRouter()->addConfig($config);
    }

    public function _initModules(Yaf_Dispatcher $dispatcher)
    {
        $app = $dispatcher->getApplication();

        $modules = $app->getModules();
        foreach ($modules as $module) {
            if ('index' == strtolower($module)) continue;

            require_once $app->getAppDirectory() . "/modules" . "/$module" . "/_init.php";
        }
    }

    public function _initSmarty(Yaf_Dispatcher $dispatcher) {
        Yaf_Loader::import( APP_PATH ."/application/library/smarty-3.1.32/libs/Adapter.php");
        $smarty = new Smarty_Adapter(null, Yaf_Application::app()->getConfig()->smarty);
        Yaf_Dispatcher::getInstance()->setView($smarty);
//        $dispatcher->setView($smarty);
    }

    public function _initView( Yaf_Dispatcher $dispatcher )
    {
        Yaf_Dispatcher::getInstance()->disableView(); //关闭其自动渲染
    }
}