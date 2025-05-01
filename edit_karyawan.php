<?php

include 'header.php';
$data = detailData("tb_karyawan", "id_karyawan", $_GET["id_karyawan"]) [0]; //karena yang diambil cuma 1 maka array 0]

if (isset($_POST["submit"])) {
  if (ubah($_POST, "tb_karyawan")) {
    echo "<script>alert('Data berhasil diubah !!'); window.location = 'tampil_karyawan.php'</script>";
  } else {
    echo "<script>alert('Data gagal diubah !!'); window.location = 'tampil_karyawan.php'</script>";
  }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">HALAMAN KARYAWAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ubah Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_karyawan">Id Karyawan</label>
                    <input type="text" value="<?= $data ["id_karyawan"];?>" class="form-control" id="id_karyawan" name="id_karyawan" autocomplete="off" readonly>
                  </div>

                  <div class="form-group">
                    <label for="kd_jabatan">Kode Jabatan</label>
                    <input type="text" value="<?= $data ["kode_jabatan"];?>" class="form-control" id="kd_jabatan" name="kd_jabatan" autocomplete="off" required>
                  </div>

                  <div class="form-group">
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <input type="text" value="<?= $data ["nama_karyawan"];?>" class="form-control" id="nama_karyawan" name="nama_karyawan" autocomplete="off" required>
                  </div>

                  <div class="form-group">
                    <label for="no_telp">No. Telpon</label>
                    <input type="text" value="<?= $data ["no_telp"];?>" class="form-control" id="no_telp" name="no_telp" autocomplete="off" required>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" rows="3" id="alamat" name="alamat"><?=$data["alamat"];?></textarea>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>
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

<?php

include 'footer.php';

?>