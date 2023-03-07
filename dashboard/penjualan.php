<?php
require '../functions.php';
/* array(5) { 
array(6) { 

    ["kode"]=> string(3) "P01" 
    ["namapelanggan"]=> string(17) "Cristiano Ronaldo" 
    ["tanggal"]=> string(10) "2023-03-07" 
    ["barang"]=> string(4) "Odol" 
    ["qty"]=> string(1) "5" 
    ["tambah"]=> string(0) "" }

    */
// require '../functions.php';
// $id = $_GET['id'];
$datas = query("SELECT * FROM keranjang");

if (isset($_POST['tambah'])) {
    if (tambahKeranjang($_POST) > 0) {
        echo "<script>
                alert('Pesanan Berhasil Ditambahkan');
                window.location.href = 'index.php?menu=penjualan';
                </script>
            ";
    } else {
        echo "<script>
            alert('Pesanan Gagal Ditambahkan!');
            window.location.href = 'index.php?menu=penjualan';
            </script>
        ";
    }
} elseif (isset($_POST['kembali'])) {
    # code...
    header("Location:./index.php?menu=penjualan");
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
    <h2>Penjualan</h2><br>
    <p>Berikut Adalah Menu Penjualan</p>
</div>

<form action="" method="post">
    <label for="kode">Kode : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="height:40px;" type="text" placeholder="inputkan kode..." name="kode" id="kode">
    <br>
    <br>
    <label for="namaPel">Nama Pelanggan : </label>
    &nbsp;<select style="height:40px;" name="namapelanggan">
        <option>Pilih Pelanggan</option>
        <option>Cristiano Ronaldo</option>
        <option>Lionel Messi</option>
        <option>Eden Hazard</option>
    </select>
    <br>
    <br>
    <label for="tanggal">Tanggal : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="tanggal" id="tanggal" style="height:40px;">

    <hr style="background-color:gray;">

    <div class="inputan">

        <select style="height:40px;" name="barang">
            <option>Nama Barang</option>
            <option>Sabun Mandi</option>
            <option>Odol</option>
            <option>Shampo Didi</option>
        </select> &nbsp;&nbsp;&nbsp;&nbsp; Qty : <input type="number" name="qty" placeholder="jumlah..." style="width:80px;"> &nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" id="tambah" name="tambah" class="btn btn-success">Tambah</button>
    </div>

    <hr style="background-color:gray;">

    <div style="width:100%; height:600px; overflow:auto;">
        <table id="example" class="display nowrap" style="width:100%" border="1">
            <thead>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>Aksi</th>
            </thead>
            <tbody>


                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <td><?= $data['kode']; ?></td>
                        <td><?= $data['nama_barang']; ?></td>
                        <td><?= $data['qty']; ?></td>
                        <td><?= $data['harga_satuan']; ?></td>


                        <td>
                            <button type="button" class="btn btn-danger"><a href="hapus/hapus_keranjang.php?id=<?= $data['id']; ?>">Hapus</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <button>Simpan Data</button>
    </div>
</form>