<?php
include 'function.php';

if (hapus2("tb_jabatan", "kode_jabatan", $_GET['kode_jabatan'])) {
	echo "<script> alert('Data Berhasil Dihapus !!');
	window.location = 'tampil_jabatan.php' </script>";
} else {
	echo "<script>alert('Data Gagal Dihapus !!');
	window.location = 'tampil_jabatan.php'</script>";
}
?>