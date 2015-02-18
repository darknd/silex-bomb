<?php

namespace Darknd\Core;
use Silex\Application;


abstract class Bootstrap
{
    protected $_app = null;
    protected $_filename = __FILE__;

    abstract public function getConfig();

    public function __construct()
    {
        $this->_app = new Application();
    }
}