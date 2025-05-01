<?php 
  include 'header.php';
  $data = detailjabatan("tb_jabatan", "kode_jabatan", $_GET["kode_jabatan"]) [0]; //karena yang diambil cuma 1 maka array 0]

 ?> 

<!--konten wrapper-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid"> <!-- untuk sisi sisinya agar ada jarak --> 
      <div class="row mb-2">
        <div class="col-sm-6"> <!-- kalo disini 8 maka yang dibawah sisanya -->
          <h1 class="m-0">HALAMAN JABATAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right"> <!-- digunakan untuk membuat halaman apa saja yang masuki -->
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Halaman Jabatanb</li>
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
              <h3 class="card-title">Detail Data Jabatan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label for="kode_jabatan">Kode Jabatan</label>
                <input type="text" class="form-control" value="<?= $data ["kode_jabatan"];?>" readonly>
              </div>

              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" value="<?= $data ["jabatan"];?>" readonly>
              </div>

              <div class="form-group">
                <label for="total_gaji">Gaji</label>
                <input type="text" class="form-control" value="<?= $data ["gaji_perjabatan"];?>" readonly>
              </div>

              <div class="form-group">
                <a href="tampil_jabatan.php" class="btn btn-danger">Kembali</a>
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