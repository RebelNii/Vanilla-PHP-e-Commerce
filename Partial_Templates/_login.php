<?php
if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];
}else{
    $data = "";
}

if(isset($_COOKIE['username'])){
    $user = $_COOKIE['username'];
    $emails = $_COOKIE['email'];
    $password = $_COOKIE['password'];
}else{
    $user = "";
    $emails = "";
    $pass = "";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section id="login">
            <div class="login">
                <form action="../Backend_logic/actions/actions.php" method="POST">
                    <label for="">Username:</label>
                    <input type="text" name="username" value="<?php echo $user ?>" class="int-login" id="int-login" placeholder="username"> <br>
                    <label for="">Email:</label>
                    <input type="text" name="email" value="<?php echo $emails ?>" class="int-login" id="int-login" placeholder="email"><br>
                    <label for="">Password:</label>
                    <input type="password" name="password" value="<?php echo $pass ?>" class="int-login" id="int-login" placeholder="password"><br>
                    <button type="submit" name="submit-log" class="btn-login">Login</button><br>
                    <p class="check"><small>Remember?</small>&nbsp;<input checked="" class="check" type="checkbox" name="checked"></p><br>
                    <p>Don't have an account? <a href="./Register.php">Register!</a></p>
                </form>
            </div>
        </section>
    </main>
</body>
</html>