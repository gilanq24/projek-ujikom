<?php

require '../functions.php';


$data2 = query("SELECT DISTINCT kategori FROM barang");

$id = $_GET['id'];
$data = query("SELECT * FROM barang WHERE id='$id'")[0];

if (isset($_POST['edit'])) {
    if (editBarang($_POST) > 0) {
        echo "<script>
            alert('Kategori Barang Berhasil Dirubah!');
            window.location.href = 'index.php?menu=barang';
            </script>
        ";
    } else {
        echo "<script>
        alert('Kategori Barang Gagal Dirubah!');
        window.location.href = 'index.php?menu=barang';
        </script>
    ";
    }
}elseif(isset($_POST['kembali'])) {
    # code...
    header("Location:./index.php?menu=katBarang");
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
    <h2>Edit Kategori</h2><br>
    <p>Silahkan Edit Kategori Data Barang</p>
    <br>
</div>

<center>
    <form action="" method="post">
        <input type="text" value="<?= $id;?>" hidden name="id">
        <label for="kode">Kode : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="kode" id="kode" required value="<?= $data['kode_barang'];?>">
        <br><br>
        <label for="nama_barang">Nama Barang : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="nama_barang" id="nama_barang" required value="<?= $data['nama_barang'];?>">
        <br><br>
        <label for="kategori">Nama Kategori : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="kategori" required>
                <?php foreach ($data2 as $hasil) :?>
                    <option value="<?= $hasil['kategori']; ?>"><?= $hasil['kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>
        <label for="stok">Stok : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="stok" id="stok" required value="<?= $data['stok'];?>">
        <br><br>
        <label for="harga">Harga : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="harga" id="harga" required value="<?= $data['harga'];?>">
        <br><br>
        <button type="submit" name="edit">Edit</button>
        <button><a href="./index.php?menu=barang" style="color:black;">Kembali</button></a>
    </form><br> 

</center>