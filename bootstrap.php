<?php
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
 
class Bootstrap extends Bootstrap_Abstract {
    public function _initConfig() {
        $config = Yaf\Application::app()->getConfig();
        Yaf\Registry::set("config", $config);
    }

    public function _initDefaultName(Dispatcher $dispatcher) {
        $dispatcher->setDefaultModule("Index")->setDefaultController("index")->setDefaultAction("index");
    }

    public function _initRoute(Dispatcher $dispatcher)
    {
        $config = new Yaf\Config\Ini(APP_PATH . '/conf/routing.ini');
        $dispatcher->getRouter()->addConfig($config);
    }

    public function _initModules(Yaf\Dispatcher $dispatcher)
    {
        $app = $dispatcher->getApplication();

        $modules = $app->getModules();
        foreach ($modules as $module) {
            if ('index' == strtolower($module)) continue;

            require_once $app->getAppDirectory() . "/modules" . "/$module" . "/_init.php";
        }
    }
}