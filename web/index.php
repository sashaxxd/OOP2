<?php
require_once __DIR__ . '/../vendor/autoload.php';






$paypal = new \App\app\PaymentSystems\PayPal();
$webmoney = new \App\app\PaymentSystems\Webmoney();


$payment = new \App\app\PaymentService();

$payment->payment($webmoney);


