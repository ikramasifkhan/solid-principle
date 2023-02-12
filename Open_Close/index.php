<?php

require_once("app/PaymentService.php");
require_once("app/StripePayment.php");
require_once("app/PaypalMethod.php");

echo "<pre>";
print_r([
    (new PaymentService())->getPaymentMethodInfo(new StripePayment(200, 500, 300, 400)),
    (new PaymentService())->getPaymentMethodInfo(new PaypalMethod(600, 700, 800, 900))
]);

