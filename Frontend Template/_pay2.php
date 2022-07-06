<?php

//define
define('STRIPE_API_KEY','sk_test_51KqztJE0lh59A6dkMMlloiOEfIt8SZc6E3pBUKc4d9mS7H0yHZd0KCRnojX7p0E1QUSJAxK8Z2nU3WeoAwDCE9DC001tZseoOX');
define('STRIPE_PUBLISHABLE_KEY','pk_test_51KqztJE0lh59A6dka3pDQ75MwE6DSD7TqyDjAtwN3f3EGM4f7aBp8CEDeeaDq6GYVsuceQbmhg2Yn4xoPiVymAyc00o62NiqiW');
define('STRIPE_SUCCESS_URL','http://localhost/MySHOP/Success.php');
define('STRIPE_CANCEL_URL','http://localhost/MySHOP/Cancel.php');





if(isset($_GET['product_id'])){
    $total = $_GET['product_id'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <main>
        <h4>Checkout Details</h4>
                <hr>
        <section id="checkout">
            <div class="checkout">
                <form action="./stripe.php" method="POST" id="checkouts">
                        <div class="name">
                            <label for="">Name:</label>
                            <input type="text" value="" placeholder="Name" name="check_name">
                        </div><br>
                        <div class="email">
                            <label for="">Email:</label>
                            <input type="text" class="check_email" name="check_email" value="" placeholder="">
                        </div><br>
                        <div class="address">
                            <label for="">Address:</label>
                            <input type="text" name="check_address" value="" placeholder="Address">
                        </div><br>
                        <div class="contact">
                            <label for="">Phone:</label>
                            <input type="text" name="check_num" value="" placeholder="Tel">
                        </div><br>
                        <div class="total">
                            <label for="">Total:</label>
                            <input type="text" name="check_total" value="<?php echo $total ?>" disabled>
                        </div>
                        <div class="get">
                        <?php
                            $total = 0 ;
                            $guest = getIPAddress();

                            $sql = "SELECT * FROM `cart` WHERE `ip`='$guest' ";

                            $result = $db->query($sql);

                            while($array = $result->fetch_array()){
                            $product_id = $array['product_id'];
                            $get = "SELECT * FROM `products` WHERE `product_id`='$product_id'";

                                $res = $db->query($get);

                            while($row = $res->fetch_array()){
                            $price_total = array($row['product_price']);
                            $sum_total = array_sum($price_total);
                            $total += $sum_total;
                            
                        ?>
                        <input type="hidden" name="check_id" value="<?php echo $row['product_id'] ?>">
                        </div>
                        <?php }} ?>
                        <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?php echo STRIPE_PUBLISHABLE_KEY; ?>"
                        data-amount="<?php echo $total * 100; ?>"
                        data-currency="usd"
                        data-locale="auto"
                        data-email="check_email.value"
                        >
                        </script>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

4242424242424242