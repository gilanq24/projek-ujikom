<?php

require '../functions.php';
$id = $_GET['id'];

$data = query("SELECT * FROM kategori_barang WHERE id='$id'")[0];

if (isset($_POST['edit'])) {
    if (editKategoriBarang($_POST) > 0) {
        echo "<script>
            alert('Kategori Barang Berhasil Dirubah!');
            window.location.href = 'index.php?menu=katBarang';
            </script>
        ";
    } else {
        echo "<script>
        alert('Kategori Barang Gagal Dirubah!');s
        window.location.href = 'index.php?menu=katBarang';
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
        <label for="kode">Kode : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="kode" id="kode" required value="<?= $data['kode_kategori'];?>">
        <br><br>
        <label for="nama_kategori">Nama Kategori : </label>
        <input type="text" name="nama_kategori" id="nama_kategori" required value="<?= $data['nama_kategori'];?>">
        <br><br>
        <button type="submit" name="edit">Edit</button>
        <button><a href="./index.php?menu=katBarang" style="color:black;">Kembali</button></a>
    </form><br> 

</center>