<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard siswa</title>

    <style>
        *{
            box-sizing: border-box;
        }

        .bordered table, .bordered th, .bordered td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .container{
            max-width: 1000px;
            margin: auto;
        }

        h4{
            display: inline;
        }

        .bordered table{
            width: 100%;
        }

        .tm{
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .catatan{
            width: 100%;
            min-height: 100px;
            border: 1px solid black;
            padding: 5px;
        }

        .catatan-2{
            width: 100%;
            border: 1px solid black;
            padding: 5px;
        }

        .f-right{
            display: flex;
            justify-content: end;
        }

        .tdd{
            margin-top: 100px;
            margin-bottom: 50px;
            text-align: center;
        }

        .border-bottom{
            border-bottom: 1px solid black;
        }

        .justify-content-around{
            display: flex;
            justify-content: space-around;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        [class*="col-"] {
        float: left;
        padding: 15px;
        }

        .col-2 {width: 16.66%;}
        .col-12 {width: 100%;}
    </style>
</head>
<body>
    <div class="container">
        <h3 align='center'>
            LAPORAN PENCAPAIAN KOMPETENSI PESERTA DIDIK <br>
            SMK NEGERI 1 KRAGILAN KABUPATEN SERANG <br>
            TAHUN PELAJARAN 2021/2022
        </h3>
        <?php foreach ($tampil as $row) { ?>

            <table class="tm">
                <tr>
                    <td width='200px'>Nama peserta didik</td>
                    <td>: <?= $row->nama_siswa ?></td>
                </tr>
                <tr>
                    <td>NISN / NIS</td>
                    <td>: <?= $row->nisn_siswa ?> / <?= $row->nis ?></td>
                </tr>
                <tr>
                    <td>Kelas/Semester</td>
                    <td>: <?= $row->nama_kelas ?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>: 2 (dua)</td>
                </tr>
            </table>

            <div class="">
                <h4>A. Nilai Akademik</h4>
                <!-- <table class="table table-bordered"> -->
                    <div class="bordered">
                        <table style="margin-bottom: 20px;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Mata Pelajaran</th>
                                <th colspan="4">Nilai Hasil Belajar</th>
                            </tr>
                            <tr>
                                <th>Pengetahuan</th>
                                <th>Keterampilan</th>
                                <th>Nilai Akhir</th>
                                <th>Predikat</th>
                            </tr>

                            <tr>
                                <td colspan="7">
                                    <h4>A. Muatan Nasional</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td width='300px'>Pendidikan Agama dan Budi Pekerti</td>
                                <td><?= $row->pai_p ?></td>
                                <td><?= $row->pai_k ?></td>
                                <td><?= $row->pai_na ?></td>
                                <td><?= $row->pai_pr ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Pendidikan Kewarganegraan</td>
                                <td><?= $row->pkn_p ?></td>
                                <td><?= $row->pkn_k ?></td>
                                <td><?= $row->pkn_na ?></td>
                                <td><?= $row->pkn_pr ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Bahasa Indonesia</td>
                                <td><?= $row->pkn_p ?></td>
                                <td><?= $row->pai_k ?></td>
                                <td><?= $row->pai_na ?></td>
                                <td><?= $row->pai_pr ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Bahasa Indonesia</td>
                                <td><?= $row->pkn_p ?></td>
                                <td><?= $row->pai_k ?></td>
                                <td><?= $row->pai_na ?></td>
                                <td><?= $row->pai_pr ?></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Matematika</td>
                                <td><?= $row->mtk_p ?></td>
                                <td><?= $row->mtk_k ?></td>
                                <td><?= $row->mtk_na ?></td>
                                <td><?= $row->mtk_pr ?></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>Sejarah Indonesia</td>
                                <td><?= $row->sejindo_p ?></td>
                                <td><?= $row->sejindo_k ?></td>
                                <td><?= $row->sejindo_na ?></td>
                                <td><?= $row->sejindo_pr ?></td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td>Bahasa Inggris dan Bahasa Asing lainnya</td>
                                <td><?= $row->b_inggris_p ?></td>
                                <td><?= $row->b_inggris_k ?></td>
                                <td><?= $row->b_inggris_na ?></td>
                                <td><?= $row->b_inggris_pr ?></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <h4>B. Muatan Kewilayahan</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Seni Budaya</td>
                                <td><?= $row->seni_budaya_p ?></td>
                                <td><?= $row->seni_budaya_k ?></td>
                                <td><?= $row->seni_budaya_na ?></td>
                                <td><?= $row->seni_budaya_pr ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                                <td><?= $row->pjok_p ?></td>
                                <td><?= $row->pjok_k ?></td>
                                <td><?= $row->pjok_na ?></td>
                                <td><?= $row->pjok_pr ?></td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    <h4>C. Muatan Perminatan Kejuruan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <span>C1. Dasar Bidang Keahlian</span>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Simulasi dan Komunikasi Digital</td>
                                <td><?= $row->siskomdig_p ?></td>
                                <td><?= $row->siskomdig_k ?></td>
                                <td><?= $row->siskomdig_na ?></td>
                                <td><?= $row->siskomdig_pr ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Ekonomi Bisnis</td>
                                <td><?= $row->ekobis_p ?></td>
                                <td><?= $row->ekobis_k ?></td>
                                <td><?= $row->ekobis_na ?></td>
                                <td><?= $row->ekobis_pr ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Administrasi Umum</td>
                                <td><?= $row->adm_umum_p ?></td>
                                <td><?= $row->adm_umum_k ?></td>
                                <td><?= $row->adm_umum_na ?></td>
                                <td><?= $row->adm_umum_pr ?></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>IPA</td>
                                <td><?= $row->ipa_p ?></td>
                                <td><?= $row->ipa_k ?></td>
                                <td><?= $row->ipa_na ?></td>
                                <td><?= $row->ipa_pr ?></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <span>C2. Dasar Program Keahlian</span>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Etika Profesi</td>
                                <td><?= $row->etika_profesi_p ?></td>
                                <td><?= $row->etika_profesi_k ?></td>
                                <td><?= $row->etika_profesi_na ?></td>
                                <td><?= $row->etika_profesi_pr ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Aplikasi Pengolah Angka / Spreadsheet</td>
                                <td><?= $row->spreadsheet_p ?></td>
                                <td><?= $row->spreadsheet_k ?></td>
                                <td><?= $row->spreadsheet_na ?></td>
                                <td><?= $row->spreadsheet_pr ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Akuntansi Dasar</td>
                                <td><?= $row->akuntansi_dasar_p ?></td>
                                <td><?= $row->akuntansi_dasar_k ?></td>
                                <td><?= $row->akuntansi_dasar_na ?></td>
                                <td><?= $row->akuntansi_dasar_pr ?></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Perbankan Dasar</td>
                                <td><?= $row->perbankan_dasar_p ?></td>
                                <td><?= $row->perbankan_dasar_k ?></td>
                                <td><?= $row->perbankan_dasar_na ?></td>
                                <td><?= $row->perbankan_dasar_pr ?></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <span>C3. Kompetensi Keahlian</span>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Praktikum Akuntansi Perusahaan Jasa, Dagang dan Manufaktur</td>
                                <td><?= $row->papjd_manufaktur_p ?></td>
                                <td><?= $row->papjd_manufaktur_k ?></td>
                                <td><?= $row->papjd_manufaktur_na ?></td>
                                <td><?= $row->papjd_manufaktur_pr ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Praktikum Akuntansi Lembaga/Instansi Pemerintah</td>
                                <td><?= $row->akuntansi_lembaga_p ?></td>
                                <td><?= $row->akuntansi_lembaga_k ?></td>
                                <td><?= $row->akuntansi_lembaga_na ?></td>
                                <td><?= $row->akuntansi_lembaga_pr ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Akuntansi Keuangan</td>
                                <td><?= $row->papjd_manufaktur_p ?></td>
                                <td><?= $row->papjd_manufaktur_k ?></td>
                                <td><?= $row->papjd_manufaktur_na ?></td>
                                <td><?= $row->papjd_manufaktur_pr ?></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Komputer Akuntansi</td>
                                <td><?= $row->kom_akuntansi_p ?></td>
                                <td><?= $row->kom_akuntansi_k ?></td>
                                <td><?= $row->kom_akuntansi_na ?></td>
                                <td><?= $row->kom_akuntansi_pr ?></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>Administrasi Pajak</td>
                                <td><?= $row->adm_pajak_p ?></td>
                                <td><?= $row->adm_pajak_k ?></td>
                                <td><?= $row->adm_pajak_na ?></td>
                                <td><?= $row->adm_pajak_pr ?></td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td>Produk Kreatif dan Kewirausahaan</td>
                                <td><?= $row->pkk_p ?></td>
                                <td><?= $row->pkk_k ?></td>
                                <td><?= $row->pkk_na ?></td>
                                <td><?= $row->pkk_pr ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="padding: 50px">

                </div>

                <h4 style="margin-top: 500px">B. Catatan Akademik</h4>
                <div class="catatan" style="margin-bottom: 20px;">
                    <span>Catatan</span>
                </div>

                <!-- <div class="border p-2 mb-3" style="height: 100px;">
                    <p><?= $row->catatan_akademik ?></p>
                </div> -->

                <h4>C. Praktik Kerja Lapangan</h4>
                <div class="bordered" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Mitra DU/DI</th>
                            <th>Lokasi</th>
                            <th>Lamanya (Bulan)</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td><?= $row->pkl_mitra_du_di ?></td>
                            <td><?= $row->pkl_lokasi ?></td>
                            <td><?= $row->pkl_lamanya ?> Bulan</td>
                            <td><?= $row->pkl_keterangan ?></td>
                        </tr>
                    </table>
                </div>

                <h4>D. Ekstrakurikurel</h4>
                <div class="bordered" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Kegiatan Ekstrakurikurel</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td><?= $row->ekskul_1 ?></td>
                            <td><?= $row->ekskul_1_ket ?></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td><?= $row->ekskul_2 ?></td>
                            <td><?= $row->ekskul_2_ket ?></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td><?= $row->ekskul_3 ?></td>
                            <td><?= $row->ekskul_3_ket ?></td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h4>E. Ketidakhadiran</h4>
                    <div class="bordered" style="margin-bottom: 20px; width: 500px;">
                        <table>
                            <tr>
                                <td align="center">1</td>
                                <td>Sakit</td>
                                <td><?= $row->kehadiran_sakit?> hari</td>
                            </tr>
                            <tr>
                                <td align="center">2</td>
                                <td>Izin</td>
                                <td><?= $row->kehadiran_izin?> hari</td>
                            </tr>
                            <tr>
                                <td align="center">3</td>
                                <td>Tanpa Keterangan</td>
                                <td><?= $row->kehadiran_alfa?> hari</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <h4>F. Kenaikan Kelas</h4>
                <div class="catatan-2" style="margin-bottom: 20px;">
                    <span>Ananda <?= $row->nama_siswa ?>ke kelas XI AKUNTANSI 1</span>
                </div>

                <div class="f-right">
                    <table>
                        <tr>
                            <td>Diberikan di</td>
                            <td>: Serang</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: 17 Juni 2022</td>
                        </tr>
                    </table>
                </div>


                <div class="tdd">
                    <div class="row justify-content-around">
                        <div class="col-3">
                            Mengetahui,<br>
                            Orang Tua/Wali,
                            <div class="border-bottom" style="height: 100px;"></div>
                        </div>
                        <div class="col-3" style="margin-left: 100px;">
                            Wali Kelas,
                            <div style="height: 100px;"></div>
                            <span style="font-weight: bold;">Rio Sasko Edi, S.Pd</span>
                            <div class="border-bottom"></div>
                            <span style="font-weight: bold;">NIP.12345678</span>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 70px; margin-bottom: 50px;" align="center">
                        Mengetahui,<br>
                        Kepala Sekolah
                        <div style="height: 100px;"></div>
                        <span style="font-weight: bold;">Drs.Falati, M.Si</span><br>
                        Pembina TK.I <br>
                        NIP.19640311 198903 1 011
                    </div>
                </div>

                <h4>G. Deskripsi Pengembangan Karakter</h4>
                <div class="bordered" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Karakter Yang Dibangun</th>
                            <th>Deskripsi</th>
                        </tr>
                        <tr>
                            <td>Integritas</td>
                            <td>Ananda menunjukkan kejujuran dengan tidak pernah melakukan plagiat dalam PR dan tidak mencontek saat ujian selama kegiatan belajar mengajar.</td>
                        </tr>
                        <tr>
                            <td>Religius</td>
                            <td>Ananda menunjukkan ketakwaan pada agama yang dianut dan toleran pada penganut agama yang berbeda.</td>
                        </tr>
                        <tr>
                            <td>Nasionalis</td>
                            <td>
                                Ananda menunjukkan sikap nasionalis dengan tidak pernah melakukan pelanggaran sedang dan berat sesuai aturan di sekolah.
                            </td>
                        </tr>
                        <tr>
                            <td>Mandiri</td>
                            <td>Ananda menunjukkan sikap mandiri dengan selalu mengumpulkan tugas dan PR tepat waktu sesuai dengan arahan guru-guru mata pelajaran.</td>
                        </tr>
                        <tr>
                            <td>Gotong-royong</td>
                            <td>Ananda menunjukkan sikap gotong royong sebagai relawan dalam kegiatan bakti sosial di panti werdha Cahaya Senja.</td>
                        </tr>
                    </table>
                </div>

                <h4>G. Deskripsi Pengembangan Karakter</h4>
                <div class="catatan">
                    <span>Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Selain itu, ananda menunjukkan prestasi
                        yang cukup baik di bidang karya ilmiah karena Ananda berhasil mendapatkan penghargaan tingkat provinsi dan membanggakan
                        sekolah dengan menjuarai karya ilmiah. Sikap rendah hati, jujur dan giat ditunjukkan Ananda selama kejuaraan berlangsung.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script> -->
        </body>
        </html>
