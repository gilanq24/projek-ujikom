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
            <h2>Penjualan</h2><br>
            <p>Berikut Adalah Menu Penjualan</p>
</div>


<label for="kode">Kode : </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="height:40px;" type="text" placeholder="inputkan kode..." name="kode" id="kode">
<br>
<br>
<label for="namaPel">Nama Pelanggan : </label>
&nbsp;<select style="height:40px;">
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

<select style="height:40px;">
    <option>Nama Barang</option>
    <option>Sabun Mandi</option>
    <option>Odol</option>
    <option>Shampo Didi</option>
</select> &nbsp;&nbsp;&nbsp;&nbsp; Qty : <input type="number" name="qty" placeholder="jumlah..." style="width:60px;"> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="tambah" class="btn btn-success"><a href="">Tambah</a></button>
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

        <tr>
            <td>BR01</td>
            <td>AHH SNACK</td>
            <td>10</td>
            <td>10.000</td>
            <td>
            <button type="button" class="btn btn-danger"><a href="#">Hapus</a></button>
            </td>

        </tr>

        <tr>
            <td>BR02</td>
            <td>CILOR</td>
            <td>5</td>
            <td>10.000</td>
            <td>
            <button type="button" class="btn btn-danger"><a href="#">Hapus</a></button>
            </td>
        </tr>

        <tr>
            <td>BR03</td>
            <td>SEBLAK ATI</td>
            <td>3</td>
            <td>10.000</td>
            <td>
            <button type="button" class="btn btn-danger"><a href="#">Hapus</a></button>
            </td>
        </tr>

    </tbody>
  </table>
</div>