<?php


class Static_motody
{
    public  static $loc = 'Лысый';

    public  static  function jek(){
        echo self::$loc;
    }

}

echo Static_motody::$loc; //Обращение через класс
echo '<br>';
$obj = new Static_motody();
$obj::jek(); //Обращение через объект