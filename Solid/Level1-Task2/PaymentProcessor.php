<?php
require_once  'Payment.php';

class PaymentProcessor
{
    protected $gateway;

    public function __construct(Payment $payMethod)
    {
        $this->gateway = $payMethod;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}

?>