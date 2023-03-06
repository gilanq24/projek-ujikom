<?php
require '../functions.php';

$datas = query("SELECT * FROM pelanggan");

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
<div style="padding:1rem">
    <h2>Pelanggan</h2><br>
    <p>Berikut Adalah List Pelanggan</p>
</div>
<center>
    <button type="button" id="tambah" class="btn btn-primary"><a href="index.php?menu=tambahPelanggan">Tambah</a></button><br><br>
    <div style="width:100%; height:600px; overflow:auto;">
        <table id="example" class="display nowrap" style="width:100%" border="1">
            <thead>
                <th>Kode</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Aksi</th>

            </thead>
            <tbody>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <td><?= $data['kode']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['no_hp']; ?></td>
                        <td>
                            <button type="button" class="btn btn-success"><a href="index.php?menu=editPelanggan">Ubah</a></button>
                            &nbsp;
                            <button type="button" class="btn btn-danger"><a href="index.php?menu=hapusPelanggan&id=<?= $data['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a></button>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</center>