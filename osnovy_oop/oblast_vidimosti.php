<?php
class Oblast_vodimosti
{
    public  $color = 'Зеленый' ;

    protected function getColor(){
        return $this->color;
    }

    public function changeColor($color){
        $this->color = $color;

    }

}

$obj = new Oblast_vodimosti();
echo $obj->getColor();