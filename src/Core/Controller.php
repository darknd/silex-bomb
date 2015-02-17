<?php

namespace Darknd\Core;

abstract class Controller
{
    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
        
    }

    public function test(){
        return $this->_app['Controller'] = 'Controller ';
    }

}