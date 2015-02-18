<?php

namespace Darknd\Core;

require_once __DIR__.'/../../vendor/autoload.php';

abstract class AbstractModel
{
    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
    }

    public function insert($data)
    {
        $query = $this->_app['db']->insertInto('user', $data);
        return $query->execute();
    }

    public function listData()
    {
        $query = $this->_app['db']->from('user');
        return $query->fetchAll();
    }

    public function test(){
        return $this->_app['Model'] = 'Model, ';
    }

}