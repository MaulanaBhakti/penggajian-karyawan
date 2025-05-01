<?php

include 'header.php';

$karyawan = tampilData("tb_karyawan");

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
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                          <tr class="table-secondary">
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($karyawan as $rows) :
                          ?>
                            <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td><?= $rows["nama_karyawan"]; ?></td>
                              <td><?= $rows["no_telp"]; ?></td>
                              <td><?= $rows["alamat"]; ?></td>
                              <td>
                                <a href="detail_karyawan.php?id_karyawan=<?= $rows["id_karyawan"]; ?>" class="btn btn-primary btn-xs"><i class='bx bxs-detail'></i></a> <!-- mau ngubah warna di btn-primary-->
                                <a href="edit_karyawan.php?id_karyawan=<?= $rows["id_karyawan"];?>" class="btn btn-warning btn-xs"><i class='bx bxs-edit'></i></a>
                                <a href="hapus_karyawan.php?id_karyawan=<?= $rows["id_karyawan"];?>" class="btn btn-danger btn-xs"><i class='bx bx-message-alt-x'></i></a> <!-- pakai btn-blok untuk mengenter button taroh sebelum btn-primary-->
                              </td>
                            </tr>
                          <?php
                            $i++;
                          endforeach;
                          ?>
                        </tbody>
                      </table>
                      <a href="tambah_karyawan.php" class="btn btn-primary"><i class='bx bx-add-to-queue'></i> Input data karyawan  </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

<?php

include 'footer.php';

?>