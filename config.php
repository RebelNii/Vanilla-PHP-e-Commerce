<?php

require('./api.php');

require('./vendor/autoload.php');

\Stripe\Stripe::setApiKey(STRIPE_API_KEY);
?>