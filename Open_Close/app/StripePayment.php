<?php

require_once("PaymentMethodInterface.php");

class StripePayment implements PaymentMethodInterface{
    public $minDeposit;
    public $maxDeposit;
    public $minWithdraw;
    public $maxWithdraw;

    public function __construct($minDeposit, $maxDeposit, $minWithdraw, $maxWithdraw)
    {
        $this->minDeposit = $minDeposit;
        $this->maxDeposit = $maxDeposit;
        $this->minWithdraw = $minWithdraw;
        $this->maxWithdraw = $maxWithdraw;
    }
    public function paymentName(){
        return "Stripe";
    }
    public function getMinDeposit(){
        return $this->minDeposit;
    }
    public function getMaxDeposit(){
        return $this->maxDeposit;
    }
    public function getMinWithdraw(){
        return $this->minWithdraw;
    }
    public function getMaxWithdraw(){
        return $this->maxWithdraw;
    }
}