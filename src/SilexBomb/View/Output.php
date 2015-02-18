<?php

namespace Darknd\SilexBomb\View;

use Darknd\Core\View;

class Output extends View{

    public function showName($string){
        $string .= self::test();
        $route = explode("\\", get_class());
        $data = ['name' => $string];
        return self::render($route,$data);
    }

}