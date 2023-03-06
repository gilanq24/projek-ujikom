<?php

require '../functions.php';

$data = query("SELECT * FROM barang");

if (isset($_POST['tambah'])) {
    if (tambahPelanggan($_POST) > 0) {
        echo "<script>
            alert('Pelanggan Berhasil Ditambahkan!');
            window.location.href = './index.php?menu=pelanggan';
            </script>
        ";
    } else {
        echo "<script>
        alert('Pelanggan Gagal Ditambahkan!');
        window.location.href = './index.php?menu=pelanggan';
        </script>
    ";
    }
}

?>
<style>
    *::selection {
        background-color: gray;
    }

    table,
    th {
        text-align: center;
        width: 700px;
    }

    th {
        background-color: gray;
    }

    a {

        color: white;
        text-decoration: none !important;

    }

    a:hover {

        color: white;

    }

    th {
        height: 50px;
        color: white;
    }
</style>

<div style="padding:1rem">
    <h2>Tambah Pelanggan</h2><br>
    <p>Silahkan Masukan Data Pelanggan</p>
    <br>
</div>

<center>
    <form action="" method="post">

        <label for="kode">Kode : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="kode" id="kode" required>
        <br><br>
        <label for="nama_pelanggan">Nama Pelanggan : </label>&nbsp;&nbsp;
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" required>
        <br><br>
        <label for="no_hp">No HP : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="no_hp" id="no_hp" required>
        <br><br>
        <button type="submit" name="tambah">Tambah</button>
        <button><a href="index.php?menu=pelanggan" style="color:black;">Kembali</button></a>
    </form><br>

</center>