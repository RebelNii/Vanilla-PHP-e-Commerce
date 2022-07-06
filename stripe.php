<?php
require('./config.php');






if(isset($_POST['payBtn'])){
    $email = $_POST['pay_email'];
    $amount = addslashes($_POST['pay_amounts']);
    $token = $_POST['stripeToken'];
    
    $customer = \Stripe\Charge::create([
        'amount' => $amount * 100,
        'currency' => 'usd',
        'email' => $email,
        'source' => $token,
        'description' => 'Test Charge',
    ]);
    if($customer){
        echo  "<script>window.location.href='./products.php'</script>";;
    }

}


    


?>