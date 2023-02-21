<style>
    *::selection {
        background-color: gray;
    }
    table, th {
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
    
    a:hover{

        color:white;

    }
    th {
        height: 50px;
        color: white;
    }
</style>
<div style="padding:1rem">
            <h2>Barang</h2><br>
            <p>Berikut Adalah List Barang</p>
</div>
<center>
<button type="button" id="tambah" class="btn btn-primary"><a href="index.php?id=1&menu=barang&aksi=tambah">Tambah</a></button><br><br>
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

        <tr>
            <td>BR01</td>
            <td>AHH SNACK</td>
            <td>Makanan</td>
            <td>100</td>
            <td>Rp.20.000</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=barang&aksi=ubah">Ubah</a></button> 
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=barang&aksi=hapus">Hapus</a></button>
            </td>

        </tr>

        <tr>
            <td>BR01</td>
            <td>CILOR</td>
            <td>Makanan</td>
            <td>100</td>
            <td>Rp.100.000</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=barang&aksi=ubah">Ubah</a></button>
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=barang&aksi=hapus">Hapus</a></button>
            </td>
        </tr>

        <tr>
            <td>BR03</td>
            <td>SEBLAK ATI</td>
            <td>Makanan</td>
            <td>100</td>
            <td>Rp.50.000</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=barang&aksi=ubah">Ubah</a></button>
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=barang&aksi=hapus">Hapus</a></button>
            </td>
        </tr>

    </tbody>
  </table>
</div>
</center>