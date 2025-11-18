<?php 
require_once 'Payment.php';

class StripePaymentGateway implements Payment
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}

?>