<?php
include 'function.php';

if (hapus("tb_karyawan", "id_karyawan", $_GET['id_karyawan'])) {
	echo "<script> alert('Data Berhasil Dihapus !!');
	window.location = 'tampil_karyawan.php' </script>";
} else {
	echo "<script>alert('Data Gagal Dihapus !!');
	window.location = 'tampil_karyawan.php'</script>";
}
?>