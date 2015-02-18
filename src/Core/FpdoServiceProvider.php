<?php

namespace Darknd\Core;

use Silex\Application;
use Silex\ServiceProviderInterface;
use PDO;

CONST DB_NAME = 'silexBomb';
CONST DB_USER = 'root';
CONST DB_PASS = 'root';

class FpdoServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {

        $app['fpdo'] = $app->share(function (){
            $pdo = new PDO("mysql:dbname=".DB_NAME,DB_USER,DB_PASS);
            $fpdo = new \FluentPDO($pdo);
            return $fpdo;
        });
    }

    public function boot(Application $app)
    {
    }
}