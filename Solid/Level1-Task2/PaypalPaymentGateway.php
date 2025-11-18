<?php
//require_once 'Payment.php';

class PayPalPaymentGateway implements Payment
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}

?>