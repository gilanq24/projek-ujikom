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
            <h2>Pelanggan</h2><br>
            <p>Berikut Adalah List Pelanggan</p>
</div>
<center>
<button type="button" id="tambah" class="btn btn-primary"><a href="#">Tambah</a></button><br><br>
<div style="width:100%; height:600px; overflow:auto;">
<table id="example" class="display nowrap" style="width:100%" border="1">
    <thead>
        <th>Kode</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Aksi</th>

    </thead>
    <tbody>

        <tr>
            <td>P01</td>
            <td>Eden Hazard</td>
            <td>0821727271972</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=barang&aksi=ubah">Ubah</a></button> 
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=barang&aksi=hapus">Hapus</a></button>
            </td>

        </tr>

        <tr>
            <td>BR01</td>
            <td>Lionel Messi</td>
            <td>0891727223972</td>
            <td>
            <button type="button" class="btn btn-success"><a href="index.php?id=1&menu=barang&aksi=ubah">Ubah</a></button>
&nbsp;
            <button type="button" class="btn btn-danger"><a href="index.php?id=1&menu=barang&aksi=hapus">Hapus</a></button>
            </td>
        </tr>

        <tr>
            <td>BR03</td>
            <td>Cristiano Rolando</td>
            <td>0871724127972</td>
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