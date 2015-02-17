<?php

namespace Darknd\Core;

require_once __DIR__.'/../../vendor/autoload.php';

use FluentPDO;
use PDO;
abstract class AbstractModel
{


    protected $_app;
    protected $_db;

    public function __construct($app)
    {
        $this->_app = $app;
        $pdo = new PDO("mysql:dbname=silexBomb", "root", "root");
        $fpdo = new \FluentPDO($pdo);
        $this->_db = $fpdo;
        //$this->_app->register(new FpdoServiceProvider($this->_app));
    }

    public function insert($data)
    {
        $query = $this->_db->insertInto('user', $data);
        return $query->execute();
    }

    public function listData()
    {
        $query = $this->_db->from('user');
        return $query->fetchAll();
    }

    public function test(){
        return $this->_app['Model'] = 'Model, ';
    }

}