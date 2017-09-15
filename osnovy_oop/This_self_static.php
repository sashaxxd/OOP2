<?php


class This_self_static
{
    public  static $name = 'loc';

    public function getLoc(){
       return static::$name;
    }

    public static function changeLoc($name){
       static::$name = $name;
    }



}

$obj = new This_self_static();

echo $obj->getLoc();

This_self_static::changeLoc('jek');
echo '<br>';
echo This_self_static::$name;