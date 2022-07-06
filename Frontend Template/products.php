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
                <a href="login.php">Login</a>
                <form action="">
                <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                </form>
            </div>
            <div class="search">
                <form action="" method="POST" class="search-bar">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit"><i class="fa-solid fa-search"></i></button>
                </form>
            </div>
        </div>
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
                        <a href="">
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

        <!--Banner-->
        <section id="banner">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assests/Ads/banner1-cr-500x150.jpg" alt="Banner1">
                </div>
                <div class="item">
                    <img src="./assests/Ads/whyswitch2.jpg" alt="Banner2">
                </div>
                <div class="item">
                    <img src="./assests/Ads/banner2-cr-500x150.jpg" alt="Banner3">
                </div>
                <div class="item">
                    <img src="./assests/Ads/pic12.jpg" alt="Banner4">
                </div>
                <div class="item">
                    <img src="./assests/Ads/hp2.jpg" alt="Banner4">
                </div>
            </div>
        </section>


        <!--Best Buy-->
        <section id="best-sale">
            <h4>Top Sales</h4>
            <hr>
            <div class="owl-carousel owl-theme sales">
                <div class="cards">
                    <a href=""><img class="img" src="./assests/products/Iphone 12.jpg" alt=""></a>
                    <h4>Iphone 10</h4>
                    <p>Made By Apple</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente?</p>
                    <h6>$1200</h6>
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                    <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="cards">
                    <a href=""></a><img class="img" src="./assests/products/laptop4.jpg" alt=""></a>
                    <h4>Iphone 10</h4>
                    <p>Made By Apple</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente?</p>
                    <h6>$1200</h6>
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                    <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="cards">
                    <a href=""><img class="img" src="./assests/products/Nike.jpg" alt=""></a>
                    <h4>Iphone 10</h4>
                    <p>Made By Apple</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente?</p>
                    <h6>$1200</h6>
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                    <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="cards">
                    <a href=""><img class="img" src="./assests/products/Nike coterz.jpg" alt=""></a>
                    <h4>Iphone 10</h4>
                    <p>Made By Apple</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente?</p>
                    <h6>$1200</h6>
                    <ul>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="fas fa-star"></li></span>
                        <span><li class="far fa-star"></li></span>
                    </ul>
                    <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </section>



        <!--New Arrival-->
        <section id="products">
            <div class="box">
                <h4>Specials</h4>
                <hr>
                <div class="button-group">
                    <button class="btn-special btn-1" data-filter="*">All Brands</button>
                    <button class="btn-special btn-1" data-filter=".Clothe">Clothes</button>
                    <button class="btn-special btn-1" data-filter=".Laptop">Laptops</button>
                    <button class="btn-special btn-1" data-filter=".Sneaker">Shoes</button>
                    <button class="btn-special btn-1" data-filter=".Phones">Phones</button>
                </div>
                <div class="grid">
                    <div class="grid-items Laptop">
                        <a href=""><img class="grids" src="./assests//products/laptop7.jpg" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                    <div class="grid-items Clothe">
                        <a href=""><img class="grids" src="./assests//products/Shirt.jpg" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                    <div class="grid-items Phones">
                        <a href=""><img class="grids" src="./assests//products/Samsung 10.jpg" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                    <div class="grid-items Clothe">
                        <a href=""><img class="grids" src="./assests//products/shirt9.jpg" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                    <div class="grid-items Clothe">
                        <a href=""><img class="grids" src="./assests//products/Shirt3.jpg" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                    <div class="grid-items Sneaker">
                        <a href=""><img class="grids" src="./assests//products/Addidas Sauve.png" alt=""></a>
                        <h4>MacBook Pro</h4>
                        <p>Made By Apple</p>
                        <h6>$1500.00</h6>
                        <ul>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="fas fa-star"></li></span>
                            <span><li class="far fa-star"></li></span>
                        </ul>
                        <button class="btn-1">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <!--You Might Like-->
        <section id="top-sales">
            <h4>You Might Like</h4>
            <hr>
            <div class=" top">
                <div class="card">
                    <div class="imgBx">
                        <a href="#"><img src="./assests/products/Iphone10.png" alt=""></a>
                    </div>
                    <div class="details">
                        <h4>Iphone 10</h4>
                        <hr>
                        <h6>Product Details</h6>
                        <p><span>Made By: Apple</span></p>
                        <p>Product description: Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit. Impedit error 
                            dicta sunt incidunt eius nobis assumenda esse in velit repudiandae.
                        </p>
                        <div class="price py-1">
                            <span>Price: $1200</span>
                        </div>
                        <div class="add">
                        <button class="btn-add">
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
                        </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <a href="#"><img src="./assests/products/Addidas.jpg" alt=""></a>
                    </div>
                    <div class="details">
                        <h4>Iphone 10</h4>
                        <hr>
                        <h6>Product Details</h6>
                        <p><span>Made By: Apple</span></p>
                        <p>Product description: Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit. Impedit error 
                            dicta sunt incidunt eius nobis assumenda esse in velit repudiandae.
                        </p>
                        <div class="price py-1">
                            <span>Price: $1200</span>
                        </div>
                        <div class="add">
                        <button class="btn-add">
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
                        </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <a href="#"><img src="./assests/products/laptop4.jpg" alt=""></a>
                    </div>
                    <div class="details">
                        <h4>Iphone 10</h4>
                        <hr>
                        <h6>Product Details</h6>
                        <p><span>Made By: Apple</span></p>
                        <p>Product description: Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit. Impedit error 
                            dicta sunt incidunt eius nobis assumenda esse in velit repudiandae.
                        </p>
                        <div class="price py-1">
                            <span>Price: $1200</span>
                        </div>
                        <div class="add">
                        <button class="btn-add">
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
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </section>



        <section id="footer">
            <div class="foot">
                <div class="columns">
                    <div class="col1">
                        <h4>Info</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum explicabo amet, qui 
                            voluptatem ad officiis delectus, excepturi odit maxime, iste voluptates voluptate 
                            repellendus doloremque tenetur iusto. Alias unde, molestias corporis inventore, doloremque 
                            commodi nam fuga voluptate minus aliquid tenetur quia! 
                            Fugit quae est optio tempora recusandae exercitationem laboriosam sed saepe.
                        </p>
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col2">
                        <h4>Subscribe To Newsletters</h4>
                        <div class="input-group">
                            <input type="email" class="input" id="Email" name="Email" placeholder="Email" 
                            autocomplete="off">
                            <input class="button--submit" value="Subscribe" type="submit">
                        </div>
                    </div>
                    <div class="col3">
                        <div class="links">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


  

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
    crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--isotope plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" 
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!--Custom JavaScript-->
    <script src="index.js"></script>
</body>

</html>