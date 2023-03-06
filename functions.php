<?php


// fungsi query
$conn = mysqli_connect("localhost", "root", "", "toserba");

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

// Fungsi Fungsi tambah

function tambahBarang($data)
{

    global $conn;
    $kode = $data['kode'];
    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $kategori = $data['kategori'];


    $query = "INSERT INTO barang(kode_barang,nama_barang,kategori,stok,harga) VALUES('$kode','$nama','$kategori',$stok,$harga)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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

function tambahPelanggan($data)
{

    global $conn;
    $kode = $data['kode'];
    $nama = $data['nama_pelanggan'];
    $nohp = $data['no_hp'];

    $query = "INSERT INTO pelanggan(kode,nama,no_hp) VALUES('$kode','$nama','$nohp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi Fungsi Tambah Berakhir

// Fungsi Fungsi Hapus
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

function hapus_pelanggan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pelanggan WHERE id=$id");
    return mysqli_affected_rows($conn);
}
// Fungsi Fungsi Hapus berakhir

// Fungsi Edit Data


function editKategoriBarang($data)
{

    global $conn;

    $id = $data['id'];
    $kode = $data['kode'];
    $nama = $data['nama_kategori'];

    $query = "UPDATE kategori_barang SET kode_kategori = '$kode', nama_kategori = '$nama' WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function editBarang($data)
{

    global $conn;

    $id = $data['id'];
    $kode = $data['kode'];
    $nama = $data['nama_barang'];
    $kategori = $data['kategori'];
    $stok = $data['stok'];
    $harga = $data['harga'];

    $query = "UPDATE barang SET kode_barang = '$kode', nama_barang = '$nama', kategori = '$kategori', stok = $stok, harga = $harga WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi Edit Data Berakhir



function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, '0', ',', '.');
    return $hasil_rupiah;
}
