<?php

namespace Darknd\Core;

use Silex\Application;
use Silex\ServiceProviderInterface;
use PDO;

class FpdoServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {

        $app['fpdo'] = $app->share(function (){
            $pdo = new PDO("mysql:dbname=silexBomb","root","root");
            $fpdo = new \FluentPDO($pdo);
            return $fpdo;
        });
    }

    public function boot(Application $app)
    {
    }
}