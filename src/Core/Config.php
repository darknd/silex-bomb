<?php

namespace Darknd\Core;

use Silex\Application;

class Config
{
    protected $_app;
    protected $_config = [];
    protected $_configFile = null;

    public function __construct($app, $configFile)
    {
        $this->_app = $app;
        $this->_configFile = $configFile;
        $this->_parseConfig();
    }

    protected function _parseConfig()
    {
        $configData = parse_ini_file($this->_configFile, true);
        $this->_config = [];

        if(array_key_exists('database', $configData)) {
            $this->_config[] = $configData['database'];
        }
        if(array_key_exists('debug', $configData)) {
            $this->_config[] = $configData['debug'];
        }
        $this->_app['config_silexBomb'] = $this->_config;
    }

}