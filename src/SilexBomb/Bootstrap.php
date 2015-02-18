<?php

namespace Darknd\SilexBomb;

use Darknd\Core\Config;
use PDO;

class Bootstrap extends \Darknd\Core\Bootstrap{

    protected $_filename = __FILE__;

    public function setRoutes(){

    }

    public function getApplication()
    {
        return $this->_app;
    }

    public function setDatabase(){
        $pdo = new PDO("mysql:dbname=".$this->_app['config_silexBomb'][0]['database.name'],
                                       $this->_app['config_silexBomb'][0]['database.user'],
                                       $this->_app['config_silexBomb'][0]['database.password']);
        $fpdo = new \FluentPDO($pdo);
        return $this->_app['db'] = $fpdo;
    }

    public function setDebug(){
        return $this->_app['debug'] = $this->_app['config_silexBomb'][1]['debug'];
    }

    public function getConfig()
    {
        return new Config($this->_app, __DIR__ . '/config.ini');
    }

}