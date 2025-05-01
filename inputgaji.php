<?php
include 'header.php';



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
                      <h5 class="mb-0">Data Penggajian </h5>
                      <small class="text-muted float-end"> <a href=""> home</a>/data penggajian</small>
                    </div>
                        <div class="card-body">
                                <table class="table ">
                                    <form action="" method="POST">
                                    <tr>
                                        <td>
                                            <label for="">Periode absen</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="date" name="tgl_awal" class="form-control">
                                        </td>
                                        <td>
                                            <input type="date" name="tgl_akhir" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="id" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </td>
                                    </tr>
                                </form>
                                    <tr>
                                        <td>
                                        <input type="text" value="<?= total_presensi($_POST["tgl_awal"], $_POST["tgl_akhir"], $_POST["id"] ); ?>" name="" class="form-control">
                                        </td>
                                    </tr>
                             </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
        </div>

<?php
include 'footer.php';
?>