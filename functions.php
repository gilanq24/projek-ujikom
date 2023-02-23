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

function hapus_kategori_barang($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM kategori_barang WHERE id=$id");
    return mysqli_affected_rows($conn);
}
