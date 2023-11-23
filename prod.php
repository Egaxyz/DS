<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Store</title>
    <link rel="stylesheet" href="assets.bootstrap.min.css">
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
            <div class="nav__actions">
                <span>
                    <a href="admin.php" class="link-dark">
                        Login
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
            <form method="get" action="prod.php">
                <input type="text" placeholder="Search Donut" name="keyword" />
                <button class="btn btn-warning" type="submit">Telusuri</button>
            </form>
            <a href="#home"><i class="ri-arrow-down-double-line"></i></a>
        </div>
    </header>
    <main>
        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Kategori</h3>
                <div class="row mt-3" style="margin-left: 300px">
                    <div class="col-3">
                        <div class="highlighted-kategori img-donut d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a href="prod.php?kategori=Donat">Donuts</a></h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="highlighted-kategori img-drink d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Drinks</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-3">
                        <div class="card">
                            <img src="assets/offer2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
    </main>
    <!-- <footer class="footer">
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
    </footer> -->
</body>

</html>