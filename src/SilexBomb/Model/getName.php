<?php

namespace Darknd\SilexBomb\Model;

use Darknd\Core\AbstractModel;

class getName extends AbstractModel
{

    public function whoIam()
    {
        $data = ['name' => 'Darknd'];
        echo self::insert($data);
        $string = self::listData();
        print_r($string);
        return self::test();
    }
}