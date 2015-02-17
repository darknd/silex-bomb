<?php

namespace Darknd\Core;

use Twig_Environment;
use Silex\Provider\TwigServiceProvider;

abstract class Views
{
    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
        $this->_app->register(new TwigServiceProvider(), array('twig.path' => __DIR__.'/../SilexBomb/Templates',));
    }

    public function test(){
        return $this->_app['Views'] = 'and Views';
    }

}