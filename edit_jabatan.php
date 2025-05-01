<?php

include 'header.php';
$data = detailjabatan("tb_jabatan", "kode_jabatan", $_GET["kode_jabatan"]) [0]; //karena yang diambil cuma 1 maka array 0]

if (isset($_POST["submit"])) {
  if (ubah($_POST, "tb_jabatan")) {
    echo "<script>alert('Data berhasil diubah !!'); window.location = 'tampil_jabatan.php'</script>";
  } else {
    echo "<script>alert('Data gagal diubah !!'); window.location = 'tampil_jabatan.php'</script>";
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
          <h1 class="m-0">HALAMAN JABATAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Halaman Jabatan</li>
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
              <h3 class="card-title">Tambah Jabatan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                <label for="kd_jabatan">Kode Jabatan</label>
                <input type="text" name="kd_jabatan" id="kd_jabatan" class="form-control" value="<?= $data ["kode_jabatan"];?>"  readonly>
              </div>

              <div class="form-group">
                    <label>jabatan</label>
                    <select class="form-control" name="jabatan">
                      <option value="<?= $data["jabatan"]; ?>" disabled selected><?= $data["jabatan"]; ?></option>
                      <option value="kepala HRD">kepala HRD</option>
                      <option value="Staf Keuangan">Staf Keuangan</option>
                      <option value="Karyawan">Karyawan</option>
                      <option value="Cleaning Services">Cleaning Services</option>
                    </select>
                  </div>

              <div class="form-group">
                <label for="total_gaji">Total Gaji</label>
                <input type="text" class="form-control" name="total_gaji" id="total_gaji" value="<?= $data ["total_gaji"];?>" required>
              </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
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