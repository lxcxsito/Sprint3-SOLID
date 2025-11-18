<?php 
require_once 'Payment.php';

class BankTransfer implements Payment
{

    
    public function sendPayment(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
        
}
?>