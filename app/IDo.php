<?php


namespace App\app;


class IDo
{
    public  function walk($y = false){
        if ($y){
            echo "Не идем\n";
        }
        else{
            echo "идем\n";
        }
    }

}