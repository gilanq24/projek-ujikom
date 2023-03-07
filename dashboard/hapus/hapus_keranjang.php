
<?php
require '../../functions.php';

$id = $_GET['id'];

if (hapus_keranjang($id) > 0) {
    echo "

			<script>
			alert('Data Keranjang Berhasil Dihapus');
			window.location.href = '../index.php?menu=penjualan';
			</script>


		";
} else {
    echo "
			<script>
			alert('Data Keranjang Dihapus');
			window.location.href = '../index.php?menu=penjualan';
			</script>

		";
}
