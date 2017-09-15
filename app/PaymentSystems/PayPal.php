<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 12:55
 */

namespace App\app\PaymentSystems;


class PayPal implements PaymentSystemsInterface
{

    public  function  payment(){

        echo 'Система paypal выполнила платеж';

    }


}