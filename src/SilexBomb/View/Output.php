<?php

namespace Darknd\SilexBomb\View;

use Darknd\Core\Views;

class Output extends Views{

    public function showName($string){
        $string .= self::test();
        return $this->_app['twig']->render('test.twig',array('name' => $string ));
    }

}