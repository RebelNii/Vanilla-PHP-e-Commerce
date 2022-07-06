<?php
$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;
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
                    <input type="hidden" name="ip" value="<?php echo $ip ?>">
                    <label for="">First Name:</label>
                    <input type="text" name="first_name" value="" class="int-login" id="int-login" placeholder="First Name"><br>
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" value=""class="int-login" id="int-login" placeholder="Last Name"><br>
                    <label for="">Username:</label>
                    <input type="text" name="username" value="" class="int-login" id="int-login" placeholder="Username"> <br>
                    <label for="">Email:</label>
                    <input type="text" name="email" value="" class="int-login" id="int-login" placeholder="Email"><br>
                    <label for="">Password:</label>
                    <input type="password" name="password" value="" class="int-login" id="int-login" placeholder="Password"><br>
                    <label for="">Password:</label>
                    <input type="password" name="re_password" value="" class="int-login" id="int-login" placeholder="Enter Password Again"><br>
                    <button id="btn-reg" name="submit-reg" type="submit">Register</button><br>
                    <p>Already have an account? <a href="./Login.php">Login!</a></p>
                </form>
            </div>
        </section>
    </main>
</body>
</html>