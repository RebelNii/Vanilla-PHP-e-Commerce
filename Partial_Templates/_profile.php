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
        <section id="profile">
            <div class="profile">
                <div class="profile_grid">
                    <div class="pro_grid1">
                        <nav>
                            <ul>
                                <li><a href="../Profile.php?account">Account Details</a></li>
                                <li><a href="">Orders</a></li>
                                <li><a href="">Payment History</a></li>
                                <li><a href="">Order History</a></li>
                                <li><a href="">Return</a></li>
                                <li><a href="">Tickets</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="pro_grid2">
                        <?php if(isset($_GET['account'])){ include('./Partial_Templates/_profile/__account.php');}else{
                            include('./Partial_Templates/_profile/__account.php');
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>