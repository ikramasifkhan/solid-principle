<?php

class PaymentSystem{

    public $paymentName;

    public function __construct(PaymentProcessInterface $paymentProcess)
    {
        $this->paymentName = $paymentProcess->makePayment();    
    }


    public function pay(){
        return $this->paymentName;
    }
}