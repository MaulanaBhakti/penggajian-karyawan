<?php
error_reporting(0); 
include 'function.php';

$query = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_jabatan WHERE kode_jabatan='$_GET[kode_jabatan]'"));
$data = array(
'jabatan' => $query['jabatan'],
'gaji_perjabatan' => $query['gaji_perjabatan']
);
echo json_encode($data);

?>