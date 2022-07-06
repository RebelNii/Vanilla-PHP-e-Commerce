<?php
include('./config.php');
include('./header.php');

if(isset($_POST['stripeToken'])){
    require_once('./vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_51KqztJE0lh59A6dkMMlloiOEfIt8SZc6E3pBUKc4d9mS7H0yHZd0KCRnojX7p0E1QUSJAxK8Z2nU3WeoAwDCE9DC001tZseoOX');


    $customer = \Stripe\Customer::create(array(
        'email' => $_POST['pay_email'],
        'source' => $_POST['stripeToken'],
        'name' => $_POST['pay_name'],

    ));
    $order_num = rand(1000,9999);

    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount' => $_POST['pay_amounts'] * 100,
        'currency' => 'usd',
        'description' => 'Test charge',
        //'meta' => array(
            //'order_id' => $order_num
        //)
    ));
    $response = $charge->jsonSerialize();
    
}

?>