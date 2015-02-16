<?php

namespace SilexBomb;

include __DIR__ . '/vendor/autoload.php';


use \SilexBomb\V1\Controller\helloWorld;
use Symfony\Component\Console\Application;

$app = new Application();

$new = new helloWorld();
$new->helloThere();


