<?php


$guest = getIPAddress();

//sql to add to cart table
if(isset($_POST['special_cart'])){
    $itemid = addslashes($_POST['products_id']);
    $userid = addslashes($_POST['user_id']);
    $ip = addslashes($_POST['ip']);
    $qty = 1;

    $get = "SELECT * FROM `cart` WHERE `product_id`='$itemid'";
    $carts = $db->query($get);
    if($carts->num_rows !== 0){
        echo"<script>alert('Product has already been added!')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    }else{
    $sqli = "INSERT INTO `cart` SET `user_id`='$userid', `product_id`='$itemid',`ip`='$ip',`quantity`='$qty'";
    $done = $db->query($sqli);

    if(!$done){
        exit('SERVER SIDE ERROR');
    }else{
        echo '<script>window.location.href="../../products.php"</script>';
    }
} 
}



$sql = "SELECT * FROM `products` ORDER BY rand()";

$result = $db->query($sql);




?>


<!--Best Buy-->
<section id="best-sale">
            <h4>Top Sales</h4>
            <hr>
            <div class="owl-carousel owl-theme sales">
                <?php while($array = $result->fetch_array()): ?>
                <div class="cards">
                    <a href="<?php printf('%s?product_id=%s','product_details.php',$array['product_id']) ?>"><img class="img" loading="lazy" src="<?= $array['product_image'];?>" alt=""></a>
                    <h4><?= $array['product_name'];?> </h4>
                    <p>Made By <?= $array['product_brand'];?></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente?</p>
                    <h6>$<?= $array['product_price'];?></h6>
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                    <form action="" method="POST">
                            <input type="hidden" name="products_id" value="<?php echo $array['product_id']; ?>">
                            <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];}else{echo 0;} ?>">
                            <input type="hidden" name="ip" value="<?php echo $guest; ?>">
                        <button class="btn-1" name="special_cart">
                            Cart &nbsp;<i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </form>
                </div>

                
                <?php endwhile ?>
            </div>
        </section>