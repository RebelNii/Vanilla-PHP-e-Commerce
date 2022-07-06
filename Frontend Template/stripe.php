<?php


require_once('../../connect.php');
require_once('../../Success.php');
    
    $total = addslashes($_POST['total']);
    $amount = addslashes($_POST['check_total']);
    $token = $_POST['stripeToken'];
    $tokenType = $_POST['stripeTokenType'];
    
    $customer = \Stripe\Charge::create([
        'amount' => $amount * 100,
        'currency' => 'usd',
        'email' => 'email@example.com',
        'source' => $token
    ]);


?>