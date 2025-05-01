<?php

include 'header.php';
date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d ");
$tanggal1 = date("H:i:s");

if(isset($_POST["submit"])) {
    if (absen($_POST, "tb_presensi")) {
      echo "<script>alert('Data berhasil ditambahkan !!'); window.location = 'absensi.php'</script>";
    } else {
      echo "<script>alert('Data gagal ditambahkan !!'); window.location = 'absensi.php'</script>";
    }
  }
  $presensi = tampil_presensi();
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
                            <th>tanggal presensi</th>
                            <th>waktu masuk</th>
                            <th>waktu keluar</th>
                            <th> total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($presensi as $rows) :
                          ?>
  
                            <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td><?= $rows["id_karyawan"]; ?></td>
                              <td><?= $rows["nama_karyawan"]; ?></td>
                              <td><?= $rows["tgl_presensi"]; ?></td>
                              <td><?= $rows["waktu_masuk"]; ?></td>
                              <td><?= $rows["waktu_keluar"]; ?></td>
                              <td><?= total("tb_presensi") ; ?></td>
                            </tr>
                          <?php
                            $i++;
                          endforeach;
                          ?>
                        </tbody>
                      </table>
                      <a href="tambah_jabatan.php" data-toggle="modal" data-target="#absen" class="btn btn-primary"><i class='bx bx-add-to-queue'></i> Input Absen  </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
<!-- /.content-wrapper -->

<!-- modal tambah absen-->
<div class="modal fade" id="absen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class='bx bx-x'></i></button>
        <h4 class="modal-title" id="myModalLabel">input absen</h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <table class="table table-borderless">
                <tr>
                  <td>
                    <label for="kode_karyawan">Kode_karyawan</label>
                  </td>
                  <td>
                    <input type="text" onkeyup="isi()" name="id_karyawan" class="form-control" id="id_karyawan" autocomplete="off" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="nama_karyawan">Nama karyawan</label>
                  </td>
                  <td>
                    <input type="text"  id="nama_karyawan" name="nama_karyawan" class="form-control" autocomplete="off" required>
                  </td>
                <tr>
                  <td>
                    <label for="kode_presensi">Kode presensi</label>
                  </td>
                  <td>
                    <input type="text" value="<?php echo Auto_number("id_presensi","tb_presensi") ?>" id="kode_presensi" name="kode_presensi" class="form-control" autocomplete="off" readonly>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tanggal_presensi">Tanggal presensi</label>
                  </td>
                  <td>
                    <input type="date" value="" name="tanggal_presensi" id="tanggal_presensi" autocomplete="off" class="form-control" required>
                  </td>
                </tr>
                <tr>
                  <td>
                        keterangan
                  </td>
                  <td>
                  <input class="form-check-input" type="radio"name="ket"id="hadir"value="hadir"/>
                   <label class="form-check-label" for="hadir">hadir</label>
                   <input class="form-check-input" type="radio"name="ket"id="izin"value="izin"/>
                   <label class="form-check-label" for="izin">izin / sakit</label>
                    <input class="form-check-input" type="radio"name="ket"id="ket"value="ket"/>
                    <label class="form-check-label" for="ket">tanpa_keterangan</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="wkt_masuk"> Waktu masuk</label>
                  </td>
                  <td>
                    <input type="time"  name="wkt_masuk" id="wkt_masuk" class="form-control" autocomplete="off" required>
                  </td>
                </tr>
                  <td>
                    <label for="wkt_keluar">Waktu keluar</label>
                  </td>
                    <td>
                      <input type="time"  name="wkt_keluar" id="wkt_keluar" class="form-control" placeholder="ID_karyawan" autocomplete="off" required>
                    </td>
                </tr>
            </table>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-block btn-primary">submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<?php

include 'footer.php';

?>


        <script type="text/javascript">
                function isi(){
                  var id_karyawan = $('#id_karyawan').val();
                  $.ajax({
                     url: 'ajakkaryawan.php',
                    data: 'id_karyawan=' + id_karyawan,
                  success: function(data) {
                        var json = data,
                        obj = JSON.parse(json);
                        $("#nama_karyawan").val(obj.nama_karyawan);
                      }
                   });
                  };


        </script>



