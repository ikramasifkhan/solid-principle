<?php
require_once("PaymentMethodInterface.php");

/**
 * This class is closed for modification
 * 
 */
class PaymentService{
    public function getPaymentMethodInfo(PaymentMethodInterface $paymentMethod){
        return [
            'name'=>$paymentMethod->paymentName(),
            'deposit'=>$paymentMethod->getMinDeposit().' - '.$paymentMethod->getMaxDeposit(),
            'withdraw'=>$paymentMethod->getMinWithdraw().' - '.$paymentMethod->getMaxWithdraw(),
        ];
    }
}