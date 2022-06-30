-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2022 at 01:00 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eraport-cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `img_ttd` varchar(100) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_guru`, `username`, `password`, `status`, `img_ttd`, `id_kelas`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '', ''),
(5, 'walas', 'walas', '4157c5e37abad578fa3162012501b245ffd27933', 'wali_kelas', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_tambahan`
--

CREATE TABLE `tb_data_tambahan` (
  `id_siswa` int(10) NOT NULL,
  `catatan_akademik` varchar(100) NOT NULL,
  `pkl_mitra_du_di` varchar(50) NOT NULL,
  `pkl_lokasi` text NOT NULL,
  `pkl_lamanya` varchar(50) NOT NULL,
  `pkl_keterangan` text NOT NULL,
  `eskul_1` varchar(50) NOT NULL,
  `eskul_1_ket` varchar(200) NOT NULL,
  `eskul_2` varchar(50) NOT NULL,
  `eskul_2_ket` varchar(200) NOT NULL,
  `eskul_3` varchar(50) NOT NULL,
  `eskul_3_ket` varchar(200) NOT NULL,
  `kehadiran_sakit` int(5) NOT NULL,
  `kehadiran_izin` int(5) NOT NULL,
  `kehadiran_alfa` int(5) NOT NULL,
  `kenaikan_kelas` varchar(100) NOT NULL,
  `integritas` varchar(200) NOT NULL,
  `religius` varchar(200) NOT NULL,
  `nasionalis` varchar(200) NOT NULL,
  `mandiri` varchar(200) NOT NULL,
  `gotong_royong` varchar(200) NOT NULL,
  `catatan_pengembangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `program_keahlian` varchar(100) NOT NULL,
  `kompetensi_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat`, `nama_kelas`, `program_keahlian`, `kompetensi_keahlian`) VALUES
(1, '12', 'X AKUNTANSI DAN KEUANGAN LEMBAGA 1', 'AKUNTANSI DAN KEUANGAN', 'AKUNTANSI DAN KEUANGAN LEMBAGA'),
(2, '10', 'X AKUNTANSI DAN KEUANGAN LEMBAGA 2', 'AKUNTANSI DAN KEUANGAN', 'AKUNTANSI DAN KEUANGAN LEMBAGA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `id_kelas`, `nama_mapel`, `semester`) VALUES
(1, '1', 'Bahasa Indonesia', '1'),
(2, '1', 'Bahasa Indonesia', '2'),
(3, '1', 'Bahasa Inggris', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `nilai_pengetahuan` varchar(10) NOT NULL,
  `nilai_keterampilan` varchar(10) NOT NULL,
  `nilai_akhir` varchar(10) NOT NULL,
  `nilai_predikat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_x_akl`
--

CREATE TABLE `tb_nilai_x_akl` (
  `id_nilai_x_akl` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `pai_p` int(5) NOT NULL,
  `pai_k` int(5) NOT NULL,
  `pkn_p` int(5) NOT NULL,
  `pkn_k` int(5) NOT NULL,
  `b_indo_p` int(5) NOT NULL,
  `b_indo_k` int(5) NOT NULL,
  `sejindo_p` int(5) NOT NULL,
  `sejindo_k` int(5) NOT NULL,
  `b_inggris_p` int(5) NOT NULL,
  `b_inggris_k` int(5) NOT NULL,
  `seni_budaya_p` int(5) NOT NULL,
  `seni_budaya_k` int(5) NOT NULL,
  `pjok_p` int(5) NOT NULL,
  `pjok_k` int(5) NOT NULL,
  `siskomdig_p` int(5) NOT NULL,
  `siskomdig_k` int(5) NOT NULL,
  `ekobis_p` int(5) NOT NULL,
  `ekobis_k` int(5) NOT NULL,
  `adm_umum_p` int(5) NOT NULL,
  `adm_umum_k` int(5) NOT NULL,
  `ipa_p` int(5) NOT NULL,
  `ipa_k` int(5) NOT NULL,
  `etika_profesi_p` int(5) NOT NULL,
  `etika_profesi_k` int(5) NOT NULL,
  `spreadsheet_p` int(5) NOT NULL,
  `spreadsheet_k` int(5) NOT NULL,
  `akuntansi_dasar_p` int(5) NOT NULL,
  `akuntansi_dasar_k` int(5) NOT NULL,
  `perbankan_dasar_p` int(5) NOT NULL,
  `perbankan_dasar_k` int(5) NOT NULL,
  `papjd_manufaktur_p` int(5) NOT NULL,
  `papjd_manufaktur_k` int(5) NOT NULL,
  `akuntansi_lembaga_p` int(5) NOT NULL,
  `akuntansi_lembaga_k` int(5) NOT NULL,
  `akuntansi_keuangan_p` int(5) NOT NULL,
  `akuntansi_keuangan_k` int(5) NOT NULL,
  `kom_akuntansi_p` int(5) NOT NULL,
  `kom_akuntansi_k` int(5) NOT NULL,
  `adm_pajak_p` int(5) NOT NULL,
  `adm_pajak_k` int(5) NOT NULL,
  `pkk_p` int(5) NOT NULL,
  `pkk_k` int(5) NOT NULL,
  `nilai_rata_rata_p` int(5) NOT NULL,
  `nilai_rata_rata_k` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `catatan_akademik` varchar(100) NOT NULL,
  `pkl_mitra_du_di` varchar(50) NOT NULL,
  `pkl_lokasi` text NOT NULL,
  `pkl_lamanya` varchar(50) NOT NULL,
  `pkl_keterangan` text NOT NULL,
  `ekskul_1` varchar(50) NOT NULL,
  `ekskul_1_ket` varchar(200) NOT NULL,
  `ekskul_2` varchar(50) NOT NULL,
  `ekskul_2_ket` varchar(200) NOT NULL,
  `ekskul_3` varchar(50) NOT NULL,
  `ekskul_3_ket` varchar(200) NOT NULL,
  `kehadiran_sakit` int(5) NOT NULL,
  `kehadiran_izin` int(5) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_dalam_keluarga` varchar(20) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `no_telp_rumah` int(20) NOT NULL,
  `sekolah_asal` text NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat_orangtua` text NOT NULL,
  `no_telp_orangtua` int(20) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_wali_siswa` varchar(100) NOT NULL,
  `alamat_wali_siswa` text NOT NULL,
  `no_telp_wali_siswa` varchar(100) NOT NULL,
  `pekerjaan_wali_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nisn`, `password`, `nama_siswa`, `id_kelas`, `semester`, `status`, `catatan_akademik`, `pkl_mitra_du_di`, `pkl_lokasi`, `pkl_lamanya`, `pkl_keterangan`, `ekskul_1`, `ekskul_1_ket`, `ekskul_2`, `ekskul_2_ket`, `ekskul_3`, `ekskul_3_ket`, `kehadiran_sakit`, `kehadiran_izin`, `agama`, `status_dalam_keluarga`, `anak_ke`, `alamat_siswa`, `no_telp_rumah`, `sekolah_asal`, `nama_ayah`, `nama_ibu`, `alamat_orangtua`, `no_telp_orangtua`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali_siswa`, `alamat_wali_siswa`, `no_telp_wali_siswa`, `pekerjaan_wali_siswa`) VALUES
(1, '123', '123', '123', 'nurul', '1', '1', 'siswa', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', 0, '', '', '', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa2`
--

CREATE TABLE `tb_siswa2` (
  `id_siswa` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_siswa2`
--

INSERT INTO `tb_siswa2` (`id_siswa`, `nis`, `nisn`, `password`, `nama_siswa`, `id_kelas`, `semester`, `status`) VALUES
(4, '1234', '1234', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'agus', '1', '1', 'siswa'),
(6, '2', '112', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'ERNI SAPITRI', '1', '1', 'siswa'),
(8, '11', '11', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'ERNI SAPITRI', '2', '1', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_data_tambahan`
--
ALTER TABLE `tb_data_tambahan`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_nilai_x_akl`
--
ALTER TABLE `tb_nilai_x_akl`
  ADD PRIMARY KEY (`id_nilai_x_akl`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `tb_siswa2`
--
ALTER TABLE `tb_siswa2`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_nilai_x_akl`
--
ALTER TABLE `tb_nilai_x_akl`
  MODIFY `id_nilai_x_akl` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_siswa2`
--
ALTER TABLE `tb_siswa2`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
