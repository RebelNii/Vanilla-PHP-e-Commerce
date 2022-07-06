<?php
require_once('./connect.php');
require_once('./Backend_logic/actions/actions.php');
session_start();

$guest = getIPAddress();


$count = "SELECT count(*) FROM `cart` ";

$counted = $db->query($count);

$done = $counted->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom stripe LB -->
    <script src="https://js.stripe.com/v3/"></script>


    <!-- Css Link -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Vahalla Shop</title>
</head>

<body>
    <header>
        <div class="head">
            <div class="title">
                <a href="index.php">Vahalla Shop</a>
            </div>
            <div class="logs">
            <?php if(isset($_SESSION['username'])){echo "<a href='./Logout.php'>Logout</a>";}else{echo '<a href="./Login.php">Login</a>';} ?>
                <form action="./Backend_logic/actions/actions.php" method="GET">
                    <input type="hidden" name="cart_icon" value="">
                <span><a href="<?php printf('%s?ip=%s','cart.php',$guest) ?>"><span><small><?php echo isset($done['count(*)']) ? $done['count(*)'] : 0 ?></small></span><i class="fa-solid fa-cart-plus"></i></a></span>
                </form>
            </div>
            <div class="search">
                <form action="" method="GET" class="search-bar">
                    <input type="text" name="search" placeholder="Search" value="">
                    <button type="submit" name="search-btn"><i class="fa-solid fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="welcome"><h4>Welcome <?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}else{ echo "Guest";} ?></h4> </div>
        <div id="navbar">
            <nav>
                <ul>
                    <li class="list " style="--clr:#f44336">
                        <a href="">
                            <span class="icon"><i class="fa-solid fa-house"></i></span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="products.php">
                            <span class="icon"><i class="fa-solid fa-shop"></i></span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="Profile.php">
                            <span class="icon"><i class="fa-solid fa-user"></i></span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="">
                            <span class="icon"><i class="fa-solid fa-building"></i></span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="">
                            <span class="icon"><i class="fa-solid fa-gear"></i></span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            </nav>
        </div>
    </header>

    <main>