<?php

namespace App\app\PaymentSystems;


interface PaymentSystemsInterface
{
    /**
     * Реализует механизм оплаты
     */
    public  function payment();


}