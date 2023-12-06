<?php
require "conn.php";

$queryKategori = mysqli_query($koneksi,"SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <style>
    <?php include "style.css"?>
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="nav__logo"><a href="#" id="warna"><a href="index.php">DStore</a></div>
            <ul class="nav__links nav-kategori" id="nav-links">
                <li class="link"><a href="home-admin.php">Home</a></li>
                <li class="link"><a href="kategori.php">Kategori</a></li>
                <li class="link"><a href="product.php">Product</a></li>
            </ul>
            <div class="nav__actions">
                <span><a href="logout.php">
                        Logout
                    </a>
                </span>
            </div>
        </nav>
    </header>
    <main>
        <div class="ml-3 mt-3">
            <h2>List Kategori</h2>
            <div class="table-responsive mt-5 ml-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO.
                                <hr>
                            </th>
                            <th>Nama
                                <hr>
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($jumlahKategori== 0) {
                            ?>
                        <tr>
                            <td colspan="2" class="text-center">Data Kategori tidak tersedia</td>
                        </tr>
                        <?php
                        } else {
                            $jumlah = 1;
                            while ($data = mysqli_fetch_array($queryKategori)) {
                                ?>
                        <tr>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                        </tr>
                        <?php
                        $jumlah++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>