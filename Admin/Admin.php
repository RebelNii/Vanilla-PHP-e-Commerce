<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Css Link-->
    <link rel="stylesheet" href="Admin.css">

    <title>Administrative Panel</title>
</head>
<body>
    <header>
        <div class="head">
            <a href="/Admin/Admin.php">Rebel Hut</a>
        </div>
        <div class="logs">
            <a href="">Login</a>
        </div>
    </header>

    <nav>
        <div id="navbar">
            <div class="nav">
                <ul>
                    <li><button id="nav-btn" class="btn"><a href="Admin.php?insert">Insert Products</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="Admin.php?cat">Insert Categories</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">All Orders</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">View products</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">Users</a></button><li>
                    <li><button id="nav-btn" class="btn"><a href="">Insert Brands</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">Login</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">Logout</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">Payments</a></button></li>
                    <li><button id="nav-btn" class="btn"><a href="">Products</a></button></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="php">
            <?php
                if(isset($_GET['insert'])){
                    include ('insert.php');
                }

                if(isset($_GET['cat'])){
                    include ('category.php');
                }
            ?>
        </div>
    </main>

    <!--Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>