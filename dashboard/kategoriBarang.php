<style>
    *::selection {
        background-color: gray;
    }
    table, th {
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
    
    a:hover{

        color:white;

    }
    th {
    height: 50px;
    color: white;
    }
</style>
<div style="padding:1rem">
            <h2>Kategori Barang</h2><br>
            <p>Berikut Adalah List Kategori Barang</p>
</div>
<center>
<center>
<button type="button" id="tambah" class="btn btn-primary"><a href="index.php?id=1&menu=katBarang&aksi=tambah">Tambah</a></button><br><br>
<div style="width:100%; height:600px; overflow:auto;">
<table id="example" class="display nowrap" style="width:100%" border="1">
    <thead>
        <th>Kode</th>
        <th>Nama kategori</th>
        <th>Aksi</th>
    </thead>
    <tbody>

        <tr>
            <td>MAK</td>
            <td>MAKANAN</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=katBarang&aksi=ubah">Ubah</a></button> 
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=katBarang&aksi=hapus">Hapus</a></button>
            </td>

        </tr>

        <tr>
            <td>MIN</td>
            <td>MINUMAN</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=katBarang&aksi=ubah">Ubah</a></button>
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=katBarang&aksi=hapus">Hapus</a></button>
            </td>
        </tr>

        <tr>
            <td>SEM</td>
            <td>SEMBAKO</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=katBarang&aksi=ubah">Ubah</a></button>
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=katBarang&aksi=hapus">Hapus</a></button>
            </td>
        </tr>

    </tbody>
  </table>
</div>
</center>