<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="head">
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Etc</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div>
            <div>
                <h1 class="top">DStore</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nobis sunt
                    vel cupiditate fugit, officia velit explicabo ullam, sequi repudiandae architecto hic molestias!
                    Provident quas saepe nemo, maxime dicta doloribus.</p>
                <button class="btn" type="button">Products</button>
            </div>
        </div>
        <div class="prod">
            <div class="row">
                <div>
                    <img src="assets/donut.jpg" width="170px" height="150px">
                    <h2>Donuts</h2>
                    <p>Donuts</p>
                    <p><a class="btn" href="#">Buy Now &raquo;</a></p>
                </div>
                <div>
                    <div>
                        <img src="assets/donut.jpg" width="170px" height="150px">
                        <h2>Drinks</h2>
                        <p>Drinks</p>
                        <p><a class="btn" href="#">Buy Now &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div>
                    <img src="https://i.pinimg.com/736x/68/a7/ac/68a7aca2ca222f71b72b743adc07fb08.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Donuts</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias, a repellendus
                        explicabo nulla dignissimos! Minus non, animi ratione distinctio neque quos nesciunt quis.
                        Laboriosam veritatis eos non voluptatem fugiat!</p>
                    <button class="btn" type="button">Products</button>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; Donut Store</span>
        </div>

    </footer>
</body>

</html>