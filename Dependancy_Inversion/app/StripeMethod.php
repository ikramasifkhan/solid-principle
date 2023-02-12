<?php

require ("PaymentProcessInterface.php");

class StripeMethod implements PaymentProcessInterface{
    public function makePayment(){
        return "Stripe payment method";
    }
}