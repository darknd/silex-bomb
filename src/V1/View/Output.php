<?php

namespace SilexBomb\V1\View;

use SilexBomb\Core\Views;

class Output extends Views{

    public function showName($string){
        return 'Hello ' . $string;
    }

}