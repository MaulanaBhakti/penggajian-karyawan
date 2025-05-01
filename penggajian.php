<?php

include 'header.php';

if(isset($_POST["submitinput"])) {
  if (gaji ($_POST, "tb_gaji")) {
    echo "<script>alert('Data berhasil ditambahkan !!'); window.location = 'absensi.php'</script>";
  } else {
    echo "<script>alert('Data gagal ditambahkan !!'); window.location = 'absensi.php'</script>";
  }
}

?>
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">penggajian </h5>
                      <small class="text-muted float-end"> <a href=""> home</a>/penggajian</small>
                    </div>
                      <div class="card-body">
                      <table class="table table-borderless">
                                    <form action="" method="GET">
                                    <tr>
                                      <th>periode</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="date" name="tgl_awal" class="form-control">
                                        </td>
                                        <td>
                                            <input type="date" name="tgl_akhir" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                      <th>id karyawan</th>
                                    </tr>
                                      <td>
                                        <input type="text" name="id_karyawan" class="form-control">
                                      </td>
                                        <td> 
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button"class="btn btn-primary" data-bs-toggle="modal" data-bs-target=" #modalCenter">
                                          penggajian
                                        </button>
                                        </td>
                                    </tr>
                                </form>
                             </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle"> penggajian</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <!--- form input data gaji --->
                              <form action="" method="POST">
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="id" class="form-label">ID Gaji</label>
                                    <input
                                      type="text"
                                      name="id_gaji"
                                      value="<?= Auto_number("id_gaji","tb_gaji") ; ?>"
                                      id="id_gaji"
                                      class="form-control"
                                      readonly
                                    />
                                  </div>
                                </div>
                                </form>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">ID karyawan</label>
                                    <input
                                      type="text"
                                      name="id_karyawan"
                                      value="<?= $_GET['id_karyawan'] ; ?>"
                                      onkeyup="isi_karyawan()"
                                      id="id_karyawan"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="kode_jabatan" class="form-label">ID jabatan</label>
                                    <input
                                      type="text"
                                      name="kode_jabatan"
                                      value=""
                                      onkeyup="jabatan_isi()"
                                      id="kode_jabatan"
                                      class="form-control"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">Nama karyawan</label>
                                    <input
                                      type="text"
                                      name="nama_karyawan"
                                      value=""
                                      id="nama_karyawan"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Jabatan</label>
                                    <input
                                      type="text"
                                      name="jabatan"
                                      value=""
                                      id="jabatan"
                                      class="form-control"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">kehadiran</label>
                                    <input
                                      type="text"
                                      name="kehadiran"
                                      value="<?= total_presensi($_GET["tgl_awal"], $_GET["tgl_akhir"], $_GET["id_karyawan"] ); ?>"
                                      id="kehadiran"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Izin / sakit</label>
                                    <input
                                      type="text"
                                      name="izin"
                                      value="<?= total_izin($_GET["tgl_awal"], $_GET["tgl_akhir"], $_GET["id_karyawan"] ); ?>"
                                      id="izin"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">tanpa keterangan</label>
                                    <input
                                      type="text"
                                      name="ket"
                                      value="<?= total_tanpa_ket($_GET["tgl_awal"], $_GET["tgl_akhir"], $_GET["id_karyawan"] ); ?>"
                                      id="ket" 
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Gaji perjabatan</label>
                                    <input
                                      type="text"
                                      name="gaji_perjabatan"
                                      id="gaji_perjabatan"
                                      class="form-control"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">Potongan bpjs</label>
                                    <input
                                      type="text"
                                      name="potongan"
                                      value=""
                                      id="potongan"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">bonus</label>
                                    <input
                                      type="text"
                                      name="bonus"
                                      value=""
                                      id="bonus"
                                      class="form-control"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="tgl_awal" class="form-label">periode gaji</label>
                                    <input
                                      type="text"
                                      name="periode_awal"
                                      value="<?= $_GET["tgl_awal"]; ?>"
                                      id="periode_awal"
                                      class="form-control"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Sampai dengan</label>
                                    <input
                                      type="text"
                                      name="periode_akhir"
                                      value="<?= $_GET["tgl_akhir"]  ?>"
                                      id="periode_akhir"
                                      class="form-control"
                                    />
                                  </div>
                                </div><br>
                                <div class="row g-2">
                                  <button type="submit" name="submitinput"class="btn btn-primary">Input</button>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
            
<?php

include 'footer.php';

?>

        <script type="text/javascript">
                function isi_karyawan(){
                  var id_karyawan = $('#id_karyawan').val();
                  $.ajax({
                     url: 'ajakkaryawan.php',
                    data: 'id_karyawan=' + id_karyawan,
                  success: function(data) {
                        var json = data,
                        obj = JSON.parse(json);
                        $("#nama_karyawan").val(obj.nama_karyawan);
                        $("#kode_jabatan").val(obj.kode_jabatan);
                      }
                   });
                  };

                  function jabatan_isi(){
                    var kode_jabatan = $('#kode_jabatan').val();
                    $.ajax({
                      url: 'ajakjabatan.php',
                     data: 'kode_jabatan=' + kode_jabatan,
                    success: function(data) {
                        var json = data,
                        obj = JSON.parse(json);
                        $("#jabatan").val(obj.jabatan);
                        $("#gaji_perjabatan").val(obj.gaji_perjabatan);
                      }
                   });
                  };
        </script>
     