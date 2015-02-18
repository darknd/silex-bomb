<?php

namespace Darknd\Core;

use Silex\Provider\TwigServiceProvider;

abstract class View
{
    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
        $this->_app->register(new TwigServiceProvider(), array('twig.path' => __DIR__.'/../SilexBomb/Template',));
    }

    public function test(){
        return $this->_app['Views'] = 'and Views';
    }

    public function render($route, $data)
    {
        return $this->_app['twig']->render(end($route).'.twig',$data);
    }

}