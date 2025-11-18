<?php
require_once  'BankTransfer.php';
require_once  'PaymentProcessor.php';
require_once  'PaypalPaymentGateway.php';
require_once  'StripePaymentGateway.php';

$paypalTransfer =  new PayPalPaymentGateway();

$bankTransfer = new BankTransfer();

$stripeTransfer = new StripePaymentGateway();

$paymentProcessor = new PaymentProcessor($paypalTransfer);

echo $paymentProcessor -> procesarPago(100)


?>