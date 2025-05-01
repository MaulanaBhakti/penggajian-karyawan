<?php

include 'header.php';

if (isset($_POST["submit"])) {
  if (tambah($_POST, "tb_karyawan")) {
    echo "<script>alert('Data berhasil ditambahkan !!'); window.location = 'tampil_karyawan.php'</script>";
  } else {
    echo "<script>alert('Data gagal ditambahkan !!'); window.location = 'tampil_karyawan.php'</script>";
  }
}

?>
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Karyawan </h5>
                      <small class="text-muted float-end"> <a href=""> home</a>/data Karyawan</small>
                    </div>
                        <form action="" method="POST">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="id_karyawan">Id Karyawan</label>
                          <input type="text" class="form-control" id="id_karyawan" name="id_karyawan" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                          <label for="kd_jabatan">Kode Jabatan</label>
                          <input type="text" class="form-control" id="kd_jabatan" name="kd_jabatan" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                          <label for="nama_karyawan">Nama Karyawan</label>
                          <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                          <label for="no_telp">No. Telp</label>
                          <input type="text" class="form-control" id="no_telp" name="no_telp" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->



<?php

include 'footer.php';

?>