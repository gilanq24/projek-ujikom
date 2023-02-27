<style>
    *::selection {
        background-color: gray;
    }

    table,
    th {
        text-align: center;
        width: 500px;
    }

    th {
        background-color: gray;
    }

    #tambah {

        margin-left: 1000px;
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
<?php
require '../functions.php';

$barang = query("SELECT * FROM barang");

?>

<div style="padding:1rem">
    <h2>Barang</h2><br>
    <p>Berikut Adalah List Barang</p>
</div>
<center>
    <center>
        <button type="button" id="tambah" class="btn btn-primary"><a href="index.php?menu=tambahBarang">Tambah</a></button><br><br>
        <div style="width:100%; height:600px; overflow:auto;">
            <table id="example" class="display nowrap" style="width:100%" border="1">
                <thead>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php foreach ($barang as $data) : ?>
                        <?php $harga = $data['harga'];?>
                        <tr>
                            <td><?= $data['kode_barang']; ?></td>
                            <td><?= $data['nama_barang']; ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td><?= $data['stok']; ?></td>
                            <td><?php echo rupiah($harga); ?></td>
                            <td>
                                <button type="button" class="btn btn-success"><a href="index.php?menu=editBarang&id=<?= $data['id']; ?>">Ubah</a></button>
                                &nbsp;
                                <button type="button" class="btn btn-danger"><a href="index.php?menu=hapusBarang&id=<?= $data['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a></button>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </center>