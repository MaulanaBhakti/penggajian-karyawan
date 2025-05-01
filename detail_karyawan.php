<?php 
	include 'header.php';
	$data = detailData("tb_karyawan", "id_karyawan", $_GET["id_karyawan"]) [0]; //karena yang diambil cuma 1 maka array 0]

 ?>

<!--konten wrapper-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid"> <!-- untuk sisi sisinya agar ada jarak --> 
      <div class="row mb-2">
        <div class="col-sm-6"> <!-- kalo disini 8 maka yang dibawah sisanya -->
          <h1 class="m-0">HALAMAN KARYAWAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right"> <!-- digunakan untuk membuat halaman apa saja yang masuki -->
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Halaman Karyawan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12"> <!-- digunakan untuk mengambil semua kolom di web.. dalam 1 halaman web terdapat 12 kolom -->
          <div class="card"> <!-- digunakan untuk membuat kotak -->
            <div class="card-header">
              <h3 class="card-title">Detail Data Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            	<div class="form-group">
            		<label for="id_karyawan">Id Karyawan</label>
            		<input type="text" class="form-control" value="<?= $data ["id_karyawan"];?>" readonly>
            	</div>

              <div class="form-group">
                <label for="kode_jabatan">Kode Jabatan</label>
                <input type="text" class="form-control" value="<?= $data ["kode_jabatan"];?>" readonly>
              </div>

            	<div class="form-group">
            		<label for="nama_karyawan">Nama Karyawan</label>
            		<input type="text" class="form-control" value="<?= $data ["nama_karyawan"];?>" readonly>
            	</div>

            	<div class="form-group">
            		<label for="no_telp">No. Telpon</label>
            		<input type="text" class="form-control" value="<?= $data ["no_telp"];?>" readonly>
            	</div>
            	
            	<div class="form-group">
            		<label for="Alamat">Alamat</label>
            		<textarea rows="4" class="form-control" readonly><?= $data ["alamat"];?></textarea>
            	</div>

            	<div class="form-group">
            		<a href="tampil_karyawan.php" class="btn btn-danger">Kembali</a>
            	</div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<!-- end content -->

 <?php

include'footer.php';

?>