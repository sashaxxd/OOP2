<?php

namespace App\app;


use App\app\traits\GoodWorld;
use App\app\traits\HelloWorld;

class App
{


    use HelloWorld; //Наследуем трайт и нам доступны все его свойства и методы
    use GoodWorld;

    public function getJak(){
        echo 'jak';
    }

}