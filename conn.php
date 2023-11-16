<?php
    $servernme = "localhost";
    $database = "ds";
    $username = "root";
    $password = "";
    //membuat koneksi ke database
    $koneksi = mysqli_connect($servernme, $username, $password, $database);

    //cek koneksi
    if(!$koneksi) {
        //apabila gagal akan ditampilkan kesalahan error
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    //apabila gagal akan ditampilkan kesalahan error 
    echo "Koneksi Berhasil";
?>