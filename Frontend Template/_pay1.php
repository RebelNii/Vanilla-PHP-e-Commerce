<?php
//call stripe php library
require_once('../vendor/autoload.php');
require_once('./_cart.php');


//setup Api key
\Stripe\Stripe::setApiKey(STRIPE_API_KEY);

$response = array(
    'status' => 0,
    'error' => array(
        'message' => 'Something went wrong',
    )
);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $input = file_get_contents('php://input');
    $request = json_decode($input);
}

if(json_last_error() !== JSON_ERROR_NONE){
    http_response_code(400);
    echo json_encode($response);
    exit;
}

//
if(!empty($request->createCheckoutSession)){
    $stripeAmount = round($total * 100,2);

    //create new checkout session
    try{
        $checkOutSession = \Stripe\Checkout\Session::Create([
            'line_items' => [[
                'price_data' => [
                    'product_data' =>[
                        'name' => $row['product_name'],
                        'metadata' => [
                            'product_id' => $row['product_id'],
                            'product_price' => $row['product_price'],
                        ]
                    ],   
                    'unit_amount' => $stripeAmount,
                    'currency' => $currency,                 
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => STRIPE_SUCCESS_URL.'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => STRIPE_CANCEL_URL,
        ]);
    }catch(Exception $e){
        $api_error = $e->getMessage();
    }

        if(empty($api_error) && $checkOutSession){
        $response = array(
            'status' => 1,
            'sessionId' => $checkout_session->id,
            'message' => "check session successfully created!",
        );
    }else{
        $response = array(
            'status' => 0,
            'error' => array(
                'message' => $api_error,
            )
        );
    }

}












//define
//define('STRIPE_API_KEY','sk_test_51KqztJE0lh59A6dkMMlloiOEfIt8SZc6E3pBUKc4d9mS7H0yHZd0KCRnojX7p0E1QUSJAxK8Z2nU3WeoAwDCE9DC001tZseoOX');
//define('STRIPE_PUBLISHABLE_KEY','sk_test_51KqztJE0lh59A6dkMMlloiOEfIt8SZc6E3pBUKc4d9mS7H0yHZd0KCRnojX7p0E1QUSJAxK8Z2nU3WeoAwDCE9DC001tZseoOX');
//define('STRIPE_SUCCESS_URL','http://localhost/MySHOP/Success.php');
//define('STRIPE_CANCEL_URL','http://localhost/MySHOP/Cancel.php');

/*'payment_method_types' => ['card'],
            'line_items' => [[
                'name' => $row['product_name'],
                'description' => $row['product_description'],
                'images' => $row['product_image'],
                'amount' => $stripeAmount,
                'currency' => $currency,
                'quantity' => 1,
?>



