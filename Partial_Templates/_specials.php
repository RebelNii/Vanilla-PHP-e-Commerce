<?php


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
        echo "<script>window.location.href='../../products.php'</script>";
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





$sql = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,12";

$result = $db->query($sql);

?>
 
 
 
 <!--New Arrival-->
 <section id="products">
            <div class="box">
                <h4>Specials</h4>
                <hr>
                <div class="button-group">
                    <button class="btn-special btn-1" data-filter="*">All Brands</button>
                    <button class="btn-special btn-1" data-filter=".Clothing">Clothes</button>
                    <button class="btn-special btn-1" data-filter=".Laptop">Laptops</button>
                    <button class="btn-special btn-1" data-filter=".sneakers">Shoes</button>
                    <button class="btn-special btn-1" data-filter=".Phone">Phones</button>
                </div>
                <div class="grid">
                    <?php while($array = $result->fetch_array()): ?>
                    <div class="grid-items <?php echo $array['product_category'] ?>">
                        <a href="<?php printf('%s?product_id=%s','product_details.php',$array['product_id']) ?>"><img class="grids" src="<?php echo $array['product_image'] ?>" alt=""></a>
                        <h4><?php echo $array['product_name'] ?></h4>
                        <p>Made By <?php echo $array['product_brand'] ?></p>
                        <h6>$<?php echo $array['product_price'] ?></h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <form action="" method="POST">
                            <input type="hidden" name="products_id" value="<?php echo $array['product_id']; ?>">
                            <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['user_id'])){ echo $_SESSION['user_id'];}else{echo $guest;} ?>">
                            <input type="hidden" name="ip" value="<?php if(isset($_SESSION['ip_address'])){ echo $_SESSION['ip_address'];}else{echo $guest;} ?>">
                            <button class="btn-1" name="special_cart">
                            Cart &nbsp;<i class="fa-solid fa-cart-plus"></i>
                        </button></form>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>