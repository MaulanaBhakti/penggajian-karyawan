
<?php
include 'header.php';


$peggajian = tampil_penggajian();
?>

<!-- Content Wrapper. Contains page content -->
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
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                          <tr  class="table-secondary">
                            <th>No. </th>
                            <th>ID karyawan</th>
                            <th>Nama karyawan</th>
                            <th>Jabatan</th>
                            <th colspan="2"><center>Periode</center></th>
                            <th> Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($peggajian as $rows) :
                          ?>
  
                            <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td><?= $rows["id_karyawan"]; ?></td>
                              <td><?= $rows["nama_karyawan"]; ?></td>
                              <td><?= $rows["jabatan"]; ?></td>
                              <td><?= $rows["periode_awal"]; ?></td>
                              <td><?= $rows["periode_akhir"]; ?></td>
                              <td>
                              <a href="slip_gaji.php?id_gaji=<?= $rows["id_gaji"]; ?>" class="btn btn-primary btn-xs"><i class='bx bxs-detail'></i>Slip Gaji</a>
                              </td>
                            </tr>
                          <?php
                            $i++;
                          endforeach;
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
<!-- /.content-wrapper -->


<?php

include 'footer.php';
?>