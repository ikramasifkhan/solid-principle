<?php

interface PaymentMethodInterface{
    public function paymentName();

    public function getMinDeposit();

    public function getMaxDeposit();

    public function getMinWithdraw();

    public function getMaxWithdraw();


}