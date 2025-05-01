
<?php
include 'header.php';

?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">

                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang! 🎉</h5>
                          <p class="mb-4">
                            silahkan gunakan website ini untuk kebutuhan penggajian karyawan dan juga menginput presensi setiap hari <span class="fw-bold">Thanks you!</span>
                          </p>

                          <a href="" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card bg-danger">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="assets/img/icons/unicons/user.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                              <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="tampil_karyawan.php">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">KARYAWAN</span>
                          <h3 class="card-title mb-2"><?= total_index('id_karyawan','tb_karyawan') ; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card bg-warning">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="assets/img/icons/unicons/jabatan.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span>JABATAN</span>
                          <h3 class="card-title text-nowrap mb-1"><?= total_index('kode_jabatan','tb_jabatan') ; ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Apek Sejahtera</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/kalkulasi.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <p class="para-light">Kalkulasi otomatis
                                Perhitungan total presensi untuk setiap periode penggajian dalam bulan, selalu akurat dan sesuai dengan hak karyawan </p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- fitur -->
                <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Fitur</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/user.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1"> karyawan</small>
                              <p class="para-light">Input Dan CRUD</p>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">Data karyawan</h6>
                              <span class="text-muted">( <?= total_index('id_karyawan','tb_karyawan') ; ?> )</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/jabatan.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">jabatan</small>
                              <p class="para-light">Input Dan CRUD</p>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">data jabatan</h6>
                              <span class="text-muted">( <?= total_index('kode_jabatan','tb_jabatan'); ?> )</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/presensi.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Presensi</small>
                              <p class="para-light">Input Presensi / perhari, sesuai tgl presensi</p>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">Data Presesni</h6>
                              <span class="text-muted">( <?= total_index('id_presensi','tb_presensi') ; ?> )</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Penggajian</small>
                              <p class="para-light">Input gaji dengan periode yang ingin di tentukan</p>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">data penggajian</h6>
                              <span class="text-muted">( <?= total_index('id_gaji','tb_gaji') ; ?> )</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/unicons/slip-gaji.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Cetal Slip Gaji</small>
                              <p class="para-light">Cetak Gaji Auto print</p>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">Data Slip Gaji</h6>
                              <span class="text-muted">( <?= total_index('id_gaji','tb_gaji') ; ?> )</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ fitur -->
              </div>
            </div>
            <!-- / Content -->
<?php

include 'footer.php';

?>