<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 12:51
 */

namespace App\app;

use App\app\PaymentSystems\PaymentSystemsInterface;


class PaymentService
{
    public  function  payment(PaymentSystemsInterface $paymentSystems){
        $paymentSystems->payment();

    }

}