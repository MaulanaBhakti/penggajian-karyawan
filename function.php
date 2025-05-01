<?php

//Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "penggajian");

//function
function tampilData($data)
{
  global $conn;
  $query = "SELECT * FROM $data";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data, $tabel)
{
  global $conn;

  if ($tabel == 'tb_karyawan') {
    // bagian kiri sesuaikan tabel dan sebelah kanan sesuaikan name form tambah
    $id_karyawan = $data["id_karyawan"];
    $nama_karyawan = $data["nama_karyawan"];
    $no_telp = $data["no_telp"];
    $alamat = $data["alamat"];
    $kode_jabatan = $data["kd_jabatan"];

    $query = "INSERT INTO $tabel VALUES ('$id_karyawan','$nama_karyawan', '$no_telp', '$alamat', '$kode_jabatan')";
    $result = mysqli_query($conn, $query);
  }

  return $result;
}

function tambah1($data, $tabel)
{
  global $conn;

  if ($tabel == 'tb_jabatan') {
    // bagian kiri sesuaikan tabel dan sebelah kanan sesuaikan name form tambah
    $kode_jabatan = $data["kd_jabatan"];
    $jabatan = $data["jabatan"];
    $gaji_perjabatan = $data["total_gaji"];
    $query = "INSERT INTO $tabel VALUES ('$kode_jabatan', '$jabatan', '$gaji_perjabatan')";
    $result = mysqli_query($conn, $query);
  }

  return $result;
}

function detailData($tabel, $primary, $parameter)
{
  global $conn;
  $query = "SELECT * FROM $tabel where $primary=$parameter";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function detailjabatan($tabel, $primary, $parameter)
{
  global $conn;
  $query = "SELECT * FROM $tabel where $primary=$parameter";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function ubah($data, $tabel) //$data yang 
{
  global $conn;
  if ($tabel == 'tb_karyawan') {
    $id_karyawan = $data["id_karyawan"];
    $nama_karyawan = $data["nama_karyawan"];
    $no_telp = $data["no_telp"];
    $alamat = $data["alamat"];
    $kode_jabatan = $data["kd_jabatan"];


    $query = "UPDATE $tabel SET  
                                  nama_karyawan='$nama_karyawan', 
                                  no_telp = '$no_telp',
                                  alamat = '$alamat',
                                  kode_jabatan = '$kode_jabatan'
                            WHERE id_karyawan ='$id_karyawan'";
  } elseif ($tabel == 'tb_jabatan') {
    $kode_jabatan = $data["kd_jabatan"];
    $jabatan = $data["jabatan"];
    $total_gaji = $data["total_gaji"];

    $query = "UPDATE $tabel SET 
                             jabatan ='$jabatan',
                             total_gaji = '$total_gaji'
           WHERE kode_jabatan = '$kode_jabatan'";
  }
  $result = mysqli_query($conn, $query);
  return $result;
}

function hapus($tabel, $primary, $data)
{
  global $conn;
  $query = "DELETE FROM $tabel where $primary=$data";
  $result = mysqli_query($conn, $query);
  return $result;
}

//functions hapus data pada tabel master
function hapus2($tabel, $primary, $data)
{
  global $conn;
  $query = "DELETE FROM $tabel where $primary=$data";
  $result = mysqli_query($conn, $query);
  return $result;
}
function absen($data, $tabel)
{
  global $conn;
  if ($tabel == 'tb_presensi') {
    $id_presensi = $data["kode_presensi"];
    $id_karyawan = $data["id_karyawan"];
    $nama_karyawan = $data["nama_karyawan"];
    $tgl_presensi = $data["tanggal_presensi"];
    $keterangan = $data["ket"];
    $waktu_masuk = $data["wkt_masuk"];
    $waktu_keluar = $data["wkt_keluar"];
    $query = "INSERT INTO tb_presensi VALUES ('$id_presensi','$id_karyawan','$nama_karyawan','$tgl_presensi','$keterangan','$waktu_masuk','$waktu_keluar')";
    $result = mysqli_query($conn, $query);
  }
  return $result;
}

function tampil_penggajian()
{
  global $conn;
  $query = "SELECT * FROM tb_gaji as tg
                      INNER JOIN tb_karyawan tk ON tg.id_karyawan = tk.id_karyawan
                      INNER JOIN tb_jabatan Tj ON tg.kode_jabatan = tj.kode_jabatan";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tampil_presensi()
{
  global $conn;
  $query = "SELECT * FROM tb_presensi as tp
                      INNER JOIN tb_karyawan tk ON tp.id_karyawan = tk.id_karyawan";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function Auto_number($primary, $tabel)
{
  global $conn;
  $query = "SELECT MAX($primary) AS kd FROM $tabel";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id_presensi = $row['kd'];
  $nourut = (int) substr($id_presensi, 0);
  $nourut++;
  $id_presensi = sprintf("%03s", $nourut);
  return $id_presensi;
}


function total($data)
{
  global $conn;
  $query = "SELECT count(tgl_presensi) AS total FROM $data ";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) {
    $output = $row['total'];
  }
  return $output;
}


function total_presensi($tgl_awal, $tgl_akhir, $primary)
{
  global $conn;
  $query = "SELECT count(tgl_presensi) AS total FROM tb_presensi
              WHERE tgl_presensi between '$tgl_awal' and '$tgl_akhir' AND id_karyawan = $primary AND keterangan = 'hadir'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $output = $row['total'];
  }
  return $output;
}

function total_izin($tgl_awal, $tgl_akhir, $primary)
{
  global $conn;
  $query = "SELECT count(tgl_presensi) AS total FROM tb_presensi
              WHERE tgl_presensi between '$tgl_awal' and '$tgl_akhir' AND id_karyawan = $primary AND keterangan = 'izin'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $output = $row['total'];
  }
  return $output;
}

function total_tanpa_ket($tgl_awal, $tgl_akhir, $primary)
{
  global $conn;
  $query = "SELECT count(tgl_presensi) AS total FROM tb_presensi
              WHERE tgl_presensi between '$tgl_awal' and '$tgl_akhir' AND id_karyawan = $primary AND keterangan = 'ket'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $output = $row['total'];
  }
  return $output;
}



function tampiladdabsen($data)
{
  global $conn;
  $query = "SELECT * FROM tb_karyawan WHERE id_karyawan IN (SELECT id_karyawan FROM tb_presensi)";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function gaji($data, $tabel)
{
  global $conn;
  if ($tabel == 'tb_gaji') {
    $id_gaji = $data["id_gaji"];
    $id_karyawan = $data["id_karyawan"];
    $kode_jabatan = $data["kode_jabatan"];
    $total_kehadiran = $data["kehadiran"];
    $total_izin_sakit = $data["izin"];
    $total_tanpa_ket = $data["ket"];
    $gaji_perjabatan = $data["gaji_perjabatan"];
    $potongan = $data["potongan"];
    $bonus = $data["bonus"];
    $periode_awal = $data["periode_awal"];
    $periode_akhir = $data["periode_akhir"];
    $total_gaji = ((($total_izin_sakit + $total_kehadiran) / 26) * $gaji_perjabatan) - $potongan + $bonus;
    $query = "INSERT INTO tb_gaji VALUES ('$id_gaji','$id_karyawan','$kode_jabatan',
                                          '$total_kehadiran','$total_izin_sakit',
                                          '$total_tanpa_ket','$gaji_perjabatan','$potongan','$bonus',
                                          '$periode_awal','$periode_akhir','$total_gaji')";
    $result = mysqli_query($conn, $query);
  }
  return $result;
}


function cetak($data)
{
  global $conn;
  $query = "SELECT * FROM tb_gaji tp
    INNER JOIN tb_karyawan tk ON tp.id_karyawan = tk.id_karyawan
    INNER JOIN tb_jabatan tb ON tp.kode_jabatan = tb.kode_jabatan
    WHERE tp.id_gaji = '$data'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function total_index($id, $data)
{
  global $conn;
  $query = "SELECT count($id) AS total FROM $data ";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) {
    $output = $row['total'];
  }
  return $output;
}
