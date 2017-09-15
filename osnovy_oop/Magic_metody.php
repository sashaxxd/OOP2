<?php


class Magic_metody
{
    public  function __construct(){
        echo 'loc';
    }

    /**
     * Обращаемся к объекту как к функции
     */
    public function __invoke(){
        echo 'loc';
    }
    /**
     * Обращаемся к объекту как к строке
     */

    public function __toString(){
        return 'Отобразить строку';
    }

}

$obj = new Magic_metody();
echo '<br>';
$obj();//Обратились как к функции

echo '<br>';
echo $obj;//Обратились как к строке