<?php
require '../functions.php';

$id = $_GET['id'];

if (hapus_pelanggan($id) > 0) {
    echo "

			<script>
			alert('Data Berhasil Dihapus');
			window.location.href = 'index.php?menu=pelanggan';
			</script>


		";
} else {
    echo "
			<script>
			alert('Data Gagal Dihapus');
			window.location.href = 'index.php?menu=pelanggan';
			</script>

		";
}
