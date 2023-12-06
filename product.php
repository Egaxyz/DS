<?php
require "conn.php";

$queryProd = mysqli_query($koneksi,"SELECT * FROM produk");
$jumlahProd = mysqli_num_rows($queryProd);

$queryKategori = mysqli_query($koneksi,"SELECT * FROM kategori");
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
                <li class="link"><a href="prod.php">Product</a></li>
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

        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <div class="mb-md-5 mt-3">
                        <h4>Foto</h4>
                        <label for="foto"></label>
                        <input type="file" name="foto" id="foto">
                    </div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" autocomplete="off">
                </div>
                <div class="mt-3">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <?php
                        while($data = mysqli_fetch_array($queryKategori)) {
                            ?>
                        <option value="<?php echo $data['id']?>"><?php echo $data['nama']?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <div class="mt-3">
                        <label for="haga">Harga</label>
                        <input type="number" class="form-control" name="harga">
                    </div>
                    <div class="mt-3">
                        <label for="qty">qty</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="stok">Stok</label>
                    <select name="stok" id="stok" class="form-control">
                        <option value="tersedia">tersedia</option>
                        <option value="habis">habis</option>
                    </select>
                </div>
                <div class="mt-1">
                    <button type="submit" class="btn">Tambah data</button>
                </div>
            </form>
        </div>
        <div class="ml-3 mt-3">
            <h2>List Product</h2>
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
                            <th>Harga
                                <hr>
                            </th>
                            <th>
                                qty
                                <hr>
                            </th>
                            <th>
                                Status
                                <hr>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($jumlahProd == 0) {
                        ?><tr>
                            <td colspan="2" class="text-center">Data Kategori tidak tersedia</td>
                        </tr>
                        <?php
                        } else {
                            $jumlah = 1;
                            while ($data = mysqli_fetch_array($queryProd)) {
                                ?>
                        <tr>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><?php echo $data['qty']; ?></td>
                            <td><?php echo $data['status']; ?></td>
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