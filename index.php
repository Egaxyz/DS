<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    <?php include "style.css"?>
    </style>
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav__logo"><a href="#" id="warna">DStore</a></div>
            <ul class="nav__links" id="nav-links">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="#choose">About</a></li>
                <li class="link"><a href="#donutt">Product</a></li>
            </ul>
            <div class="nav__menu__btn" id="menu-btn">
                <span><i class="ri-menu-line"></i></span>
            </div>
            <div class="nav__actions">
                <span><a href="admin.php">
                        <i class="ri-search-fill">
                            <button class="btn btn__primary">Login as Admin</button>
                        </i>
                    </a>
                </span>
            </div>
        </nav>
        <div class="section__container header__container" id="home">
            <h1>Donut Store</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab rerum itaque quae placeat nesciunt
                quisquam, enim soluta inventore voluptas architecto distinctio atque ipsa consequuntur id totam, vero
                voluptatibus, porro laborum.
            </p>

        </div>
    </header>

    <main>
        <section class="section__container choose__container" id="choose">
            <div class="choose__content">
                <h2 class="section__header">Donut Store is</h2>
                <p class="section__subheader">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut porro facilis quidem saepe? Obcaecati,
                    sit. Quam beatae a perspiciatis cupiditate totam, itaque, magnam dolore commodi odio aspernatur
                    dolorem repellendus optio.
                </p>
                <div class="choose__grid">
                    <div class="little-card c-b">
                        <span><i class="ri-truck-line"></i></span>
                        <h4>Fast & Free Shipping</h4>
                        <p>
                            Elevate your interior design with our Fast & Free Shipping service
                            without delay
                        </p>
                    </div>
                    <div class="little-card c-p">
                        <span><i class="ri-shopping-bag-3-line"></i></span>
                        <h4>Easy to Shop</h4>
                        <p>
                            Discover Effortless Elegance: Explore Our Easy-to-Shop Interior
                            Design Solutions
                        </p>
                    </div>
                    <div class="little-card c-p">
                        <span><i class="ri-customer-service-2-line"></i></span>
                        <h4>24/7 Support</h4>
                        <p>
                            my donut only 24/7 hours because
                            people likedonut like me loveyou
                            :3333333333
                        </p>
                    </div>
                    <div class="little-card c-b">
                        <span><i class="ri-loop-right-line"></i></span>
                        <h4>Buy And Get In Now!</h4>
                        <p>
                            I need money so buy more
                            donu is good for you
                            lets go buy now
                        </p>
                    </div>
                </div>
            </div>
            <div class="choose__image">
                <img src="assets/donud.jpg" alt="choose" />
            </div>
        </section>

        <section class="offer__container" id="offer">
            <div class="offer__grid__top">
                <img src="assets/offer1.jpg" alt="offer" />
                <img src="assets/offer7.jpg" alt="offer" />
                <img src="assets/offer3.jpg" alt="offer" />
                <div class="offer__content">
                    <h2 class="section__header">Our Product</h2>
                    <p class="section__subheader">
                        Explore exclusive deals to transform your body with donut
                    </p>
                    <button class="btn">Buy Now</button>
                </div>
            </div>
            <div class="offer__grid__bottom">
                <img src="assets/offer.jpg" alt="offer" />
                <img src="assets/offer4.jpg" alt="offer" />
                <img src="assets/offer6.jpg" alt="offer" />
            </div>
        </section>

        <footer class="footer">
            <div class="section__container footer__bar">
                <div class="footer__logo">
                    <h4><a href="#">Donut Store</a></h4>
                    <p>Copyright © 2023 Donut Store. All rights reserved.</p>
                </div>
                <ul class="footer__nav">
                    <li class="footer__link"><a href="#">Home</a></li>
                    <li class="footer__link"><a href="#">Products</a></li>
                    <li class="footer__link"><a href="#">Login</a></li>
                </ul>
            </div>
        </footer>

        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                                <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
</body>

</html>