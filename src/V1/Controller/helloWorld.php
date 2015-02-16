<?php

namespace SilexBomb\V1\Controller;

use SilexBomb\Core\Controller;
use SilexBomb\V1\Model\getName;
use SilexBomb\V1\View\Output;

class helloWorld extends Controller{

    public function helloThere(){
        $getName = new getName();
        $output = new Output();
        $name = $getName->whoIam();
        $result = $output->showName($name);
        echo $result;
    }
}