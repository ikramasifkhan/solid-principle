<?php

/**
 * In that example class PaymentSystem is high level module and StripeMethod is a low level module
 * Both high level and low level module depens on the abstraction that is PaymentProcessInterface
 * 
 * 
 */
require_once ("app/StripeMethod.php");
require_once ("app/PaymentSystem.php");
require_once ("app/StripeMethod.php");


echo (new PaymentSystem(new StripeMethod()))->pay();

