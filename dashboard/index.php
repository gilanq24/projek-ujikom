<?php

session_start();

if (!isset($_SESSION['userweb'])) {
    header("location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Toserba - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/b4.side-bar.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<style>
    .welcome {
        margin-left: 20px;
    }
</style>

<body>
    <div class="side-bar">
        <!-- add class "side-bar-light" here for light version -->
        <nav class="navbar navbar-inverse">

            <!-- toogle button -->
            <button class="navbar-toggler hidden-lg-up" type="button" id="toggler" aria-controls="list-container" aria-label="Toggle side-bar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- brand name goes below -->
            <a class="navbar-brand" href="index.php">TOSERBA</a>
            <div class="list-container">
                <ul>
                    <!-- list of side bar elements goes here,-->
                    <h1 style="color: white; font-size:20px; margin-left:50px;">Menu Admin</h1>
                    <hr style="background-color:white;">
                    <li><a href="index.php?menu=dashboard"><span class="navIcon"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
                    <li><a href="index.php?menu=katBarang"><span class="navIcon"><i class="fa fa-archive"></i></span>&nbsp;&nbsp;Kategori Barang</a></li>
                    <li><a href="index.php?menu=barang"><span class="navIcon"><i class="fa fa-briefcase"></i></span>&nbsp;&nbsp;Barang</a></li>
                    <li><a href="index.php?menu=pelanggan"><span class="navIcon"><i class="fa fa-user"></i></span>&nbsp;&nbsp;Pelanggan</a></li>
                    <li><a href="index.php?menu=penjualan"><span class="navIcon"><i class="fa fa-credit-card"></i></span>&nbsp;&nbsp;Penjualan</a></li>
                    <li><a href="index.php?menu=laporanPenjualan"><span class="navIcon"><i class="fa fa-bar-chart-o"></i></span>&nbsp;&nbsp;Laporan Penjualan</a></li>
                    <li><a href="index.php?menu=logout"><span class="navIcon"><i class="fa fa-eject"></i></span>&nbsp;&nbsp;Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="bodyContent">
        <div style="padding:1rem">
            <?php
            if (!isset($_GET['menu'])) {
                # code...
                header("Location:index.php?menu=dashboard");
            }

            if ($_GET['menu'] == "" || $_GET['menu'] == "dashboard") {
                include 'welcome.php';
            } elseif ($_GET['menu'] == "katBarang") {
                include 'kategoriBarang.php';
            } elseif ($_GET['menu'] == "barang") {
                include 'barang.php';
            } elseif ($_GET['menu'] == "pelanggan") {
                include 'pelanggan.php';
            } elseif ($_GET['menu'] == "penjualan") {
                include 'penjualan.php';
            } elseif ($_GET['menu'] == "laporanPenjualan") {
                include 'laporanPenjualan.php';
            } elseif ($_GET['menu'] == "logout") {
                include 'logout.php';
            } elseif ($_GET['menu'] == "tambahKategoriBarang") {
                include 'tambah/tambah_kat_barang.php';
            } elseif ($_GET['menu'] == "hapusKatBarang") {
                include 'hapus/hapus_kategori_barang.php';
            } elseif ($_GET['menu'] == "editKategoriBarang"){
                include 'edit/editKategori.php';
            } elseif ($_GET['menu'] == "tambahBarang") {
                include 'tambah/tambah_barang.php';
            }elseif ($_GET['menu'] == "editBarang") {
                include 'edit/editBarang.php';
            }elseif ($_GET['menu'] == "hapusBarang"){
                include 'hapus/hapus_barang.php';
            }else {
                echo "

                    <script>
                    alert('menu tidak ditemukan/tidak ada');
                    window.location.href = 'index.php';
                    </script>
                
                ";
            }


            ?>
        </div>
    </div>

    <!-- javascript includes -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="./js/b4.side-bar.js"></script>
</body>

</html>