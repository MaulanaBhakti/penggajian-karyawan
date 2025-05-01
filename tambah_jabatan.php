<?php

include 'header.php';


if (isset($_POST["submit"])) {
  if (tambah1($_POST, "tb_jabatan")) {
    echo "<script>alert('Data berhasil ditambahkan !!'); window.location = 'tampil_jabatan.php'</script>";
  } else {
    echo "<script>alert('Data gagal ditambahkan !!'); window.location = 'tampil_jabatan.php'</script>";
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
                      <h5 class="mb-0">Tambah Jabatan </h5>
                      <small class="text-muted float-end"> <a href=""> home</a>/tambah jabatan</small>
                    </div>
                      <form action="" method="POST">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="kd_jabatan">Id Jabatan</label>
                              <input type="text" class="form-control" id="kd_jabatan" name="kd_jabatan" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                              <label>jabatan</label>
                              <select class="form-control" name="jabatan">
                                <option disabled selected>- silahkan pilih jabatan -</option>
                                <option value="kepala HRD">kepala HRD</option>
                                <option value="Staf Keuangan">Staf Keuangan</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Cleaning Services">Cleaning Services</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label> Gaji</label>
                              <input type="text" class="form-control" id="total_gaji" name="total_gaji" autocomplete="off" required>
                            </div>
                          </div>
                          <!-- /.card-body -->
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