<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard siswa</title>

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center my-5">
            <h2>
                LAPORAN PENCAPAIAN KOMPETENSI PESERTA DIDIK <br>
                SMK NEGERI 1 KRAGILAN KABUPATEN SERANG <br>
                TAHUN PELAJARAN 2021/2022
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td>Nama peserta didik</td>
                        <td>: Agus</td>
                    </tr>
                    <tr>
                        <td>NISN / NIS</td>
                        <td>: 12345678 / 0987654321</td>
                    </tr>
                    <tr>
                        <td>Kelas/Semester</td>
                        <td>: X Akuntansi dan Keuangan Lembaga 1</td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>: 2 (dua)</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="">
            <h6>A. Nilai Akademik</h6>
            <table class="table table-bordered mb-3">
                <thead class="table-light text-center align-middle">
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
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <h6>A. Muatan Nasional</h6>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <h6>B. Muatan Kewilayahan</h6>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <h6>C. Muatan Perminatan Kejuruan</h6>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <span>C1. Dasar Bidang Keahlian</span>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <span>C2. Dasar Program Keahlian</span>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-start align-baseline">
                            <span>C3. Kompetensi Keahlian</span>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ipa</td>
                        <td>90</td>
                        <td>90</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                </tbody>
            </table>

            <h6>B. Catatan Akademik</h6>
            <div class="border p-2 mb-3" style="height: 100px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, iste.</p>
            </div>

            <h6>C. Praktik Kerja Lapangan</h6>
            <table class="table table-bordered mb-3">
                <thead class="table-light text-center align-middle">
                    <tr>
                        <th>No</th>
                        <th>Mitra DU/DI</th>
                        <th>Lokasi</th>
                        <th>Lamanya (Bulan)</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th>1</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>

            <h6>D. Ekstrakurikurel</h6>
            <table class="table table-bordered mb-3">
                <thead class="table-light text-center align-middle">
                    <tr>
                        <th>No</th>
                        <th>Kegiatan Ekstrakurikurel</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, aspernatur!</td>
                    </tr>
                </tbody>
            </table>

            <div class="col-md-6">
                <h6>E. Ketidakhadiran</h6>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-center">1</td>
                        <td>Sakit</td>
                        <td>2 hari</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Izin</td>
                        <td>4 hari</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Tanpa Keterangan</td>
                        <td>4 hari</td>
                    </tr>
                </table>
            </div>

            <h6>F. Kenaikan Kelas</h6>
            <div class="p-2 border mb-3">
                <span>Ananda.........ke kelas............</span>
            </div>

            <div class="d-flex flex-row-reverse">
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
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
                </div>
            </div>

            <div class="row justify-content-around">
                <div class="col-2 my-5">
                    Mengetahui,<br>
                    Orang Tua/Wali,
                    <div class="border-bottom py-5"></div>
                </div>
                <div class="col-2 my-5">
                    Wali Kelas,
                    <div class="py-5"></div>
                    <div class="border-bottom fw-bold">Rio Sasko Edi, S.Pd</div>
                    <span class="fw-bold">NIP.12345678</span>
                </div>
                <div class="col-12 my-5 text-center">
                    Mengetahui,<br>
                    Kepala Sekolah
                    <div class="py-5"></div>
                    <span class="fw-bold">Drs.Falati, M.Si</span><br>
                    Pembina TK.I <br>
                    NIP.19640311 198903 1 011
                </div>
            </div>

            <h6>G. Deskripsi Pengembangan Karakter</h6>
            <table class="table table-bordered mb-3">
                <thead class="table-light text-center align-middle">
                    <tr>
                        <th>Karakter Yang Dibangun</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse harum vitae illo reiciendis error aspernatur corrupti ea adipisci amet nobis!</td>
                    </tr>
                </tbody>
            </table>

            <h6>G. Deskripsi Pengembangan Karakter</h6>
            <div class="p-2 border mb-3" style="min-height: 100px;">
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione sed et, rem expedita pariatur accusamus ut obcaecati aspernatur quas laudantium dolore hic veritatis modi nostrum deserunt! Alias, illum culpa.</span>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
