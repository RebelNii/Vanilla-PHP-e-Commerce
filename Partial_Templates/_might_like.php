<?php
if(isset($_SESSION['username'])){
    $data = $_SESSION['data'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
}else{
    $data = "";
}

$guest = getIPAddress();

    //sql to add to cart table
    if(isset($_POST['might_cart'])){
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




$sql = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,3";

$result = $db->query($sql);

?>


<!--You Might Like-->
<section id="top-sales">
            <h4>You Might Like</h4>
            <hr>
            <div class=" top">
                <?php while($array = $result->fetch_array()): ?>
                <div class="card">
                    <div class="imgBx">
                        <a href=""><img src="<?php echo $array['product_image'] ?>" alt=""></a>
                    </div>
                    <div class="details">
                        <h4><?php echo $array['product_name'] ?></h4>
                        <hr>
                        <h6>Product Details</h6>
                        <p><span>Made By: Apple</span></p>
                        <p>Product description: Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit. Impedit error 
                            dicta sunt incidunt eius nobis assumenda esse in velit repudiandae.
                        </p>
                        <div class="price py-1">
                            <span>Price: $<?php echo $array['product_price'] ?></span>
                        </div>
                        <div class="add"><form action="" method="POST">
                        <button class="btn-add" name="might_cart">
                                <input type="hidden" name="products_id" value="<?php echo $array['product_id']; ?>">
                                <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['user_id'];}else{echo $guest;} ?>">
                                <input type="hidden" name="ip" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['ip_address'];}else{echo $guest;} ?>">
                            <div class="default-btn">
                                <svg class="css-i6dzq1" stroke-linejoin="round" 
                                stroke-linecap="round" fill="none" stroke-width="2" stroke="#FFF" height="20" width="20" 
                                viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle r="3" 
                                cy="12" cx="12"></circle></svg>
                                <span>Quick View</span>
                            </div>
                            <div class="hover-btn">
                                <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="#ffd300" height="20" 
                                width="20" viewBox="0 0 24 24"><circle r="1" cy="21" cx="9"></circle><circle r="1" 
                                cy="21" cx="20"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Shop Now</span>
                                </div>
                        </button></form>
                        </div>
                    </div>
                </div>
                <?php  endwhile ?>
            </div>
            <hr>
        </section>