<?php

require '../functions.php';

if (isset($_POST['tambah'])) {
    if (tambah_kategori_barang($_POST) > 0) {
        echo "<script>
            alert('Data Barang Berhasil Ditambahkan!');
            window.location.href = 'index.php?menu=katBarang';
            </script>
        ";
    } else {
        echo "<script>
        alert('Data Barang Berhasil Ditambahkan!');
        window.location.href = 'index.php?menu=katBarang';
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
    <h2>Tambah Kategori Barang</h2><br>
    <p>Silahkan Masukan Data Barang</p>
    <br>
</div>

<center>
    <form action="" method="post">

        <label for="kodekategori">Kode Kategori : </label>
        <input type="text" name="kode_kategori" id="kode_kategori" required><br><br>
        <label for="nama_kategori">Nama Kategori : </label>
        <input type="text" name="nama_kategori" id="nama_kategori" required>
        <br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>


</center>