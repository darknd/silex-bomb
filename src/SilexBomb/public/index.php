<?php

include '../../../vendor/autoload.php';

use Darknd\SilexBomb\Controller\helloWorld;
use Darknd\SilexBomb\Bootstrap;

$bootstrap = new Bootstrap();
$bootstrap->getConfig();
$bootstrap->setDatabase();
$bootstrap->setDebug();
$app = $bootstrap->getApplication();
$hello = new helloWorld($app);
echo $hello->helloThere();