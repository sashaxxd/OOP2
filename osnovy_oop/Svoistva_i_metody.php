<?php


class Svoistva_i_metody
{
    public  $color = 'Зеленый' ;

    public function getColor(){
        return $this->color;
    }

    public function changeColor($color){
       $this->color = $color;

    }

}
$obj = new Svoistva_i_metody();
echo $obj->getColor();
$obj->changeColor('Красный');
echo $obj->getColor();


