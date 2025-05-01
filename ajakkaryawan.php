<?php
error_reporting(0); 
include 'function.php';

$query = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE id_karyawan='$_GET[id_karyawan]'"));
$data = array(
'nama_karyawan' => $query['nama_karyawan'],
'kode_jabatan' => $query['kode_jabatan']
);
echo json_encode($data);

?>