<?php

$conn = mysqli_connect("localhost", "root", "", "toserba_db");

function query($query)
{
    global $conn;

    $hasil = mysqli_query($conn, $query);
    $kotak = [];
    while ($data = mysqli_fetch_assoc($hasil)) {
        $kotak[] = $data;
    }
    return $kotak;
}

function tambah_kategori_barang($data)
{

    global $conn;
    $kode = $data['kode_kategori'];
    $nama = $data['nama_kategori'];

    $query = "INSERT INTO kategori_barang(kode_kategori,nama_kategori) VALUES('$kode','$nama')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_barang($data)
{

    global $conn;
    $kode = $data['kode_barang'];
    $nama = $data['nama_barang'];
    $kategori = $data['kategori'];
    $stok = $data['stok'];
    $harga = $data['harga'];

    $query = "INSERT INTO barang(kode_barang,nama_barang,kategori,stok,harga) VALUES('$kode','$nama','$kategori',$stok,$harga)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

function hapus_barang($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapus_kategori_barang($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM kategori_barang WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,'0',',','.');
	return $hasil_rupiah;

}