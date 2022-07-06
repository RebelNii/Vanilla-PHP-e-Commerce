<?php
if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $first_name = $data['first_name'];
}else{
    $data = "";
}


//sql to add to cart table
if(isset($_POST['cart_add'])){
    $itemid = addslashes($_POST['products_id']);
    $userid = addslashes($_POST['user_id']);
    $ip = addslashes($_POST['ip']);
    $qty = 1;

    $get = "SELECT * FROM `cart` WHERE `product_id`='$itemid'";
    $carts = $db->query($get);
    if($carts->num_rows !== 0){
        echo"<script>alert('Product has already been added!')</script>";
        echo '<script>window.location.href="../../products.php"</script>';
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


//GET
$item_id = $_GET['product_id'] ?? 1;

$sql = "SELECT * FROM `products`";

$result = $db->query($sql);



while($array = $result->fetch_array()):
    if($array['product_id'] === $item_id):

?>



<main id="main">
    <section id="product_details">
        <div class="product">
            <div class="grid-a1">
                <img class="pro-img" src="<?php echo $array['product_image']; ?>" alt="">
                <div class="pro-btns"> 
                    <form action="" method="POST">
                        <input type="hidden" name="products_id" value="<?php echo $array['product_id']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
                        <input type="hidden" name="ip" value="<?php echo $data['ip_address']; ?>">
                        <button class="btn-detail" name="cart_add">Add To Cart</button>
                    </form>
                    <button class="btn-details">Checkout</button>
                </div>
            </div>
            <div class="grid-a2">
                <h4><?php echo $array['product_name']; ?></h4>
                <p>Made By <?php echo $array['product_brand']; ?></p>
                <div class="rates">
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                        &nbsp;&nbsp;(4.0)
                    </ul>
                    <span><a href="" class="review">100 reviews</a></span>
                </div>
                <hr>
                <div class="pro-price">
                    <table >
                        <tr>
                            <td>M.R.P:</td>
                            <td><strike>$1300</strike></td>
                        </tr>
                        <tr >
                            <td>Deal Price:&nbsp;</td>
                            <td><span class="text">$<?php echo $array['product_price']; ?></span><small>&nbsp;&nbsp;includes taxes</small></td>
                        </tr>
                        <tr>
                            <td>You Save:</td>
                            <td><span class="text-danger">$200.00</span></td>
                        </tr>
                    </table>
                </div>
                <div class="policy">
                    <div class="return">
                        <span><a href=""><i class="fa-solid fa-retweet returns"></i></a></span> <br>
                        <a href="">10 Days <br> Return Policy</a>
                    </div>
                    <div class="delivery">
                        <span><i class="fa-solid fa-truck-fast"></i></span> <br>
                        <a href="">Free shipping <br> Arrives by tomorrow</a>
                    </div>
                    <div class="pickup">
                        <span><i class="fa-solid fa-shop"></i></span> <br>
                        <a href="">Store <br> Pickup</a>
                    </div>
                    <div class="warranty">
                        <span><i class="fa-solid fa-1"></i></span> <br>
                        <a href="">One Year <br> Warranty</a>
                    </div>
                </div>
                <hr>
                <div class="options">
                    <form action="">
                        <select name="Color" id="">
                            <option value="">None</option>
                            <option value="">Red</option>
                            <option value="">Black</option>
                            <option value="">Grey</option>
                        </select>
                        <select name="Size" id="">
                            <option value="">None</option>
                            <option value="">50GB</option>
                            <option value="">75GB</option>
                            <option value="">126GB</option>
                            <option value="">256Gb</option>
                        </select>
                        <span>Apple Protection</span>
                        <input type="radio">
                    </form>
                </div>
                <div class="qty">
                        <span>QTY:&nbsp;</span>
                    <div class="qty-btn"><form action="" method="POST">  
                        <button class="qty-up"><i class="fas fa-angle-up"></i></button> 
                        <input type="text" value="1" name="qty-del" class="product_cart" id="product_cart">
                        <button class="qty-down"><i class="fa-solid fa-angle-down"></i></button></form>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</main>
<?php
endif;
endwhile; 
 ?>