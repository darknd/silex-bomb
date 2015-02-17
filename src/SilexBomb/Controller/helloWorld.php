<?php

namespace Darknd\SilexBomb\Controller;

use Darknd\Core\Controller;
use Darknd\SilexBomb\Model\getName;
use Darknd\SilexBomb\View\Output;

class helloWorld extends Controller{

    public function helloThere(){
        $getName = new getName($this->_app);
        $output = new Output($this->_app);
        $name = $getName->whoIam();
        $name .= self::test();
        $result = $output->showName($name);
        echo self::test();
        echo $result;
    }
}