<?php


   function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 



//Register account code
if(isset($_POST['submit-reg'])){
    require_once('../../connect.php');

    //we'll use addslashes to escape sql injections
    $first_name = addslashes($_POST['first_name']);
    $last_name = addslashes($_POST['last_name']);
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $ip = addslashes($_POST['ip']);
    $password = addslashes($_POST['password']);
    $password2 = addslashes($_POST['re_password']);
    $date = time();

    //make sure all fields are filled out
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['first_name']) || empty($_POST['last_name']) 
    || empty($_POST['email']) || empty($_POST['ip'])){
        exit("Please complete form.<script>window.location.href='../../products.php'</script>");
        
    }

    //make sure both passwords match
    if($_POST['password'] != $_POST['re_password']){
        exit("Please complete form.<script>window.location.href='../../products.php'</script>");
    }

    //encrypt password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //very if account hasn't been registered already
    $sqli = "SELECT * FROM `users`WHERE `email`='$email'";

    //make sure sql worked
    $result = $db->query($sqli); 

    if($result->num_rows === 0){
        $sql = "INSERT INTO `users` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', 
        `ip_address`='$ip', `password`='$hash', `username`='$username', `registration-date`='$date' ";

        $results = $db->query($sql);

        if(!$results){
            exit("SQL ERROR.<script>window.location.href='../../products.php'</script>");
        }else{
            exit("Completed.<script>window.location.href='../../products.php'</script>");
        }

        $db->close();
    }

}

if(isset($_POST['submit-log'])){

    require_once('../../connect.php');

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $email = addslashes($_POST['email']);

    //make sure all fields are filled out
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
        exit("Please complete form.<script>window.location.href='../../products.php'</script>");
        
    }

    $sqlii = "SELECT * FROM `users` WHERE `email`='$email'";

    $resultss = $db->query($sqlii);

    $array = $resultss->fetch_array();

    if($resultss->num_rows === 1){
        password_verify($password,$array['password']);
        session_start();
        $_SESSION['data'] = $array;
        $_SESSION['username'] = $array['username'];
        $_SESSION['email'] = $array['email'];
        $_SESSION['password'] = $array['password'];
        $_SESSION['first_name'] = $array['first_name'];
        $_SESSION['ip_address'] = $array['ip_address'];
        $_SESSION['user_id'] = $array['user_id'];
        if(isset($_POST['checked'])){
            setcookie('username',$username,time()+60*60*24*30);
            setcookie('email',$email,time()+60*60*24*30);
            setcookie('password',$password,time()+60*60*24*30);
        }else{
            setcookie('username',$username,time()-60*60*24*30);
            setcookie('email',$email,time()-60*60*24*30);
            setcookie('password',$password,time()-60*60*24*30);
        }
        echo "Welcome.<script>window.location.href='../../products.php'</script>";
    }else{
        exit("Account does not exists.<script>window.location.href='../../products.php'</script>");
    }

}


if(isset($_POST['cart_dele'])){
    require_once('../../connect.php');
    $product_id = addslashes($_POST['cart_delete']);

    $sql = "DELETE FROM `cart` WHERE `product_id`='$product_id'";

    $result = $db->query($sql);

    if($result){
        echo "<script>window.location.href='../../cart.php'</script>";
    }else{
        echo "<script>alert('SQL ERROR!')</script>";
    }
}











?>