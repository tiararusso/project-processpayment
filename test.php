<?php

include_once 'PaymentGatewayInterface.php';
include_once 'StripeGatewayClass.php';
include_once 'PayPalGatewayClass.php';


function processPayment(PaymentGateway $gateway, $amount) {
    // Common payment processing logic
    $gateway->processPayment($amount);
    // Additional application-specific logic

}
$paypalGateway = new PayPalGateway();

processPayment($paypalGateway, 100.00);

$stripeGateway=new StripeGateway() 
processPayment($stripeGateway, 50.00);

?>