<?php


$count = "SELECT count(*) FROM `cart` ";

$counted = $db->query($count);

$done = $counted->fetch_array();



?>


<main id="cart_section">
    <section id="cart">
        <h4>Shopping Cart</h4>
        <hr>
        <div class="cart">
            <div class="cart1">
                <?php  
                    if(isset($_SESSION['user_id'])){
                        $user = $_SESSION['user_id'];
                    };
                    $total = 0 ;
                    $guest = getIPAddress();

                    $sql = "SELECT * FROM `cart` WHERE `ip`='$guest' OR `user_id`='$user'"; 

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
                <div class="cart_img">
                <img src="<?php echo $row['product_image'] ?>" alt="">
                </div>
                <div class="dets">
                    <h5><?php echo $row['product_name'] ?></h5>
                    <p><small>Made By <?php echo $row['product_brand'] ?></small></p>
                    <div class="ratess">
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                </div>
                    <div class="qty-btns"> 
                        <div class="qty_btnss">
                            <button class="qty-up"><i class="fas fa-angle-up"></i></button>
                            <input type="text" value="1" name="qty" class="product_cart" id="product_cart">
                            <button class="qty-down"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                            <form action="../Backend_logic/actions/actions.php" method="POST">
                                <input type="hidden" name="cart_delete" value="<?php echo $row['product_id'] ?>">
                                <button class="btn-del" name="cart_dele">Delete</button>
                            </form>
                            <form action="">
                                <button class="btn-save">Save</button>
                            </form>
                            <form action="">
                                <button class="btn-upd">Update</button>
                            </form>
                    </div> 
                </div>
                <div class="price-list">
                    <h5>$<?php echo $row['product_price'] ?>.00</h5>
                </div>
                <?php }} ?>
            </div>
            <div class="cart2">
                <div class="side">
                    <h5>Your Order:</h5>
                    <hr>
                    <div class="subtotal">
                        <h5>Subtotal(<?php echo isset($done['count(*)']) ? $done['count(*)'] : 0 ?>): $<?php echo $total?>.00</h5>
                        <p><small>Tax charges included</small></p>
                    </div>
                    <form action="../Backend_logic/actions/actions.php" method="POST">
                        <input type="hidden" name="carts_pay" value="<?php if(isset($_SESSION['user_id'])){echo $userid = $_SESSION['user_id'];}{echo $guest;} ?>">
                        <button><a href="<?php printf('%s?total=%s','Pay.php',$total) ?>">Pay</a>
                    </button></form>
                </div>
            </div>
        </div>
        <hr>
    </section>
</main>