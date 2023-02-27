<?php

require '../functions.php';

$data = query("SELECT DISTINCT kategori FROM barang");

if (isset($_POST['tambah'])) {
    if (tambahBarang($_POST) > 0) {
        echo "<script>
            alert('Barang Berhasil Ditambahkan!');
            window.location.href = 'index.php?menu=barang';
            </script>
        ";
    } else {
        echo "<script>
        alert('Barang Gagal Ditambahkan!');
        window.location.href = 'index.php?menu=barang';
        </script>
    ";
    }
}elseif(isset($_POST['kembali'])) {
    # code...
    header("Location:./index.php?menu=barang");
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

        <label for="kode">Kode : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="kode" id="kode" required>
        <br><br>
        <label for="nama_barang">Nama Barang : </label>
        <input type="text" name="nama_barang" id="nama_barang" required>
        <br><br>
        <label for="harga">Harga : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="harga" id="harga" required>
        <br><br>
        <label for="stok">Stok : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="stok" id="stok" required>
        <br><br>
        <label for="kategori">Kategori : </label>
            <select name="kategori" required>
                <?php foreach ($data as $hasil) :?>
                    <option value="<?= $hasil['kategori']; ?>"><?= $hasil['kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>
        <button type="submit" name="tambah">Tambah</button>
        <button><a href="./index.php?menu=barang" style="color:black;">Kembali</button></a>
    </form><br> 

</center>