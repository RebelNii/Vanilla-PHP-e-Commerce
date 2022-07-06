<?php

if(isset($_GET['total'])){
    $total = $_GET['total'];
}

require('././config.php');

4242424242424242
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vahalla</title>
</head>
<body>
    <main>
        <p id="stripe_response"></p>
        <section id="pay">
            <div class="pay">
                <form action="../web2.php" method="POST" id="stripe_form">
                    <label for="">Email</label><br>
                    <input type="text" name="pay_email" value="" placeholder="Email" class="pay_email"><br>
                    <label for="">Name</label><br>
                    <input type="text" name="pay_name" value="" class="pay_name"><br>
                    <label for="">Address</label><br>
                    <input type="text" value="" name="pay_address" class="pay_address"><br>
                    <label for="">Country</label><br>
                    <input type="text" name="pay_country" value="" class="pay_country"><br>
                    <label for="">City</label><br>
                    <input type="text" name="pay_city" value="" class="pay_city"><br>
                    <label for="">Amount</label><br>
                    <input type="text" name="pay_amounts" value="<?php echo $total  ?>" class="pay_amount" ><br>
                    
                        <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_51KqztJE0lh59A6dka3pDQ75MwE6DSD7TqyDjAtwN3f3EGM4f7aBp8CEDeeaDq6GYVsuceQbmhg2Yn4xoPiVymAyc00o62NiqiW"
                        data-amount="<?php echo $total * 100; ?>"
                        data-currency="usd"
                        data-locale="auto">
                        </script>
                </form>
            </div>
        </section>
    </main>

    
</body>
</html>

