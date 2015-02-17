<?php

include __DIR__ . '/vendor/autoload.php';

use Darknd\SilexBomb\Controller\helloWorld;
use Symfony\Component\Console\Application;

$app = new Silex\Application();
$new = new helloWorld($app);
$new->helloThere();
