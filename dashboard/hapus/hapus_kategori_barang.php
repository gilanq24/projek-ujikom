<?php
require '../functions.php';

$id = $_GET['id'];

if (hapus_kategori_barang($id) > 0) {
    echo "

			<script>
			alert('Data Berhasil Dihapus');
			window.location.href = 'index.php?menu=katBarang';
			</script>


		";
} else {
    echo "
			<script>
			alert('Data Gagal Dihapus');
			window.location.href = 'index.php?menu=katBarang';
			</script>

		";
}
