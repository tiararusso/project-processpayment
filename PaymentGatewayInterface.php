<?php

interface PaymentGateway{

    public function processPayment($amount); //Cant de plata que procesa en el pago
    public function refundPayment($transactionId); // desembolsar el pago
    public function cancelPayment($transactionId); //cancelacion de pago


}
?>