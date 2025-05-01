<?php
require 'function.php';

$cetak = cetak($_GET['id_gaji'])[0];
?>

<html>
    <head>
    </head>
    <body>
        <script>
            window.print();
        </script>
        <div>
            <center>
                <H2>PT SEJATHTERA</H2>
                <h5> Jln Cempaka Blok C7 No 25 Perum Beringin Raya Tangerang - Banten</h5>
            <table border="0" width="80%">
                <tr>
                    <td width="80%">
                    <table width="70%" >
                        <tr>
                            <td>
                               <b>ID karyawan</b> 
                            </td>
                            <td>:</td>
                            <td><?= $cetak['id_karyawan'] ; ?></td>
                        </tr>
                        <tr>
                            <td>
                               <b>Nama karyawan</b> 
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                            <?= $cetak['nama_karyawan'] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <b>Jabatan</b> 
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                            <?= $cetak['jabatan'] ; ?>
                            </td>
                        </tr>
                    </table >
                    </td>
                    <td> <b>Periode</b>  <?= $cetak['periode_awal'] ; ?> <b>s/d</b>  <?= $cetak['periode_akhir'] ; ?></td>
                    <tr>
                        <td></td>
                    </tr>
                </tr>
                <tr>
                    <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" border="1" height="250px">
                    <tr>
                        <th height="40px"> <b>Slip Gaji</b> </th>
                    </tr>
                    <tr>
                        <td>
                            <center>
                            <table width="70%">
                                <tr>
                                    <td></td>
                                </tr>
                                <tr> <td> <b>Presensi</b> </td>  
                                </tr>
                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>
                                <tr>
                                    <td>Kehadiran</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['total_kehadiran'] ; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Izin / Sakit</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['Total_izin_sakit'] ; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanpa Keterangan</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['total_tanpa_ket'] ; ?>
                                    </td>
                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>
                                </tr>
                                <tr> <td> <b>Penggajian</b> </td>  
                                </tr>
                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Potongan</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['potongan'] ; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bonus</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['bonus'] ; ?>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td colspan="3">
                                        <hr>
                                    </td>
                                </tr>
                                    <td>Gaji Pokok</td>
                                    <td>:</td>
                                    <td>
                                    <?= $cetak['gaji_perjabatan'] ; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr></td>

                                </tr>
                                <tr>
                                    <td> <b>Total</b> </td>
                                    <td>:</td>
                                    <td> Rp. 
                                    <?= $cetak['total_gaji'] ; ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        */ Total absen / dengan standar hari kerja perbulan (26 hari)
                    </td>
                </tr>
                <tr>
                    <td width="50%" height="200px"></td>
                    <td><center><hr>HRD Manager</center></td>
                </tr>
                

            </table>
            </div>
    </body>
</html>