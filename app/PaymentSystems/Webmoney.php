<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 19:54
 */

namespace App\app\PaymentSystems;


class Webmoney implements PaymentSystemsInterface
{
    public  function  payment(){

        echo 'Система Webmoney выполнила платеж';

    }

}