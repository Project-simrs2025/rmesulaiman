-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2025 at 03:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmesulaiman`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_website`
--

CREATE TABLE `detail_website` (
  `detail_website_id` int(255) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `site_deskripsi` text DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_website`
--

INSERT INTO `detail_website` (`detail_website_id`, `site_title`, `email`, `site_deskripsi`, `notelp`, `nama_kontak`, `facebook`, `instagram`, `youtube`, `telegram`, `alamat`, `images`, `site_favicon`) VALUES
(1, 'RSUD Sultan Sulaiman', 'simrs@gmail.com', 'RUMAH SAKIT UMUM SULTAN SULAIMAN', '6282284598731', 'Admin RUMAH SAKIT UMUM SULTAN SULAIMAN', 'https://www.facebook.com/simrs/', 'https://www.instagram.com/simrs/', 'https://www.youtube.com/@aether2162/featured', 'https://t.me/simrs', 'Jl. Negara Km. 38 No. Telp 0621-442100 Fax. 0621-442022\r\nSei Rampah, Sumatera Utara 20955', 'logo.webp', 'logo.webp');

-- --------------------------------------------------------

--
-- Table structure for table `menurme`
--

CREATE TABLE `menurme` (
  `id_menu` int(11) NOT NULL,
  `rm` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status_aktif` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menurme`
--

INSERT INTO `menurme` (`id_menu`, `rm`, `isi`, `link`, `status_aktif`) VALUES
(1, 'RM 1', 'PENGKAJIAN AWAL PASIEN RAWAT JALAN', 'rm01', 1),
(2, 'RM 1a', 'RESUME MEDIS RAWAT JALAN', 'rm02', 1),
(3, 'RM 1b', 'PENCATATAN PELAYANAN KESEHATAN GIGI & MULUT', 'rm03', 1),
(4, 'RM 1c', 'CHECKLIST KESELAMATAN POLIKLINIK GIGI & MULUT', 'rm04', 1),
(5, 'RM 1d', 'LAYANAN KEDOKTERAN FISIK & REHABILITAS RAWAT JALAN', 'rm05', 1),
(6, 'RM 1e', 'LAYANAN KEDOKTERAN FISIK & REHABILITAS', 'rm06', 1),
(7, 'RM 1f', 'LEMBAR HASIL TINDAKAN', 'rm07', 1),
(8, 'RM 2', 'PENGKAJIAN MEDIS & KEPERAWATAN GAWAT DARURAT', 'rm08', 1),
(9, 'RM 2a & 2b', 'FORMULIR TRIAGE ANAK & FORMULIR TRIAGE DEWASA', 'rm09', 1),
(10, 'RM 3', 'SURAT PENGANTAR UNTUK RAWAT INAP', 'rm10', 1),
(11, 'RM 3a', 'FORMULIR TRANSFER PASIEN INTRA RUMAH SAKIT', 'rm11', 1),
(12, 'RM 3b', 'PERSETUJUAN TINDAKAN KEDOKTERAN', 'rm12', 1),
(13, 'RM 3c', 'FORMULIR PENOLAKAN TINDAKAN KEDOKTERAN', 'rm13', 1),
(14, 'RM 3d', 'PERSETUJUAN UMUM  GENERAL CONSENT', 'rm14', 1),
(15, 'RM 3e', 'SURAT PERNYATAAN PENOLAKAN PENGOBATAN', 'rm15', 1),
(16, 'RM 3f', 'PERSETUJUAN TRANSFUSI DARAH', 'rm16', 1),
(17, 'RM 3g', 'PENOLAKAN TRANSFUSI DARAH', 'rm17', 1),
(18, 'RM 3h', 'DOKUMENTASI PEMBERIAN INFORMASI DARAH', 'rm18', 1),
(19, 'RM 3j', 'FORMULIR PENGANTAR DOKTER UNTUK ALIH RAWAT', 'rm19', 1),
(20, 'RM 4', 'IDENTIFIKASI PASIEN RAWAT INAP', 'rm20', 1),
(21, 'RM 5', 'PENGKAJIAN AWAL MEDIS DAN KEPERAWATAN  RAWAT INAP', 'rm21', 1),
(22, 'RM 5a', 'PENGKAJIAN AWAL MEDIS DAN KEPERAWATAN RAWAT INAP PASIEN ANAK', 'rm22', 1),
(23, 'RM 6', 'CPPT ( CATATAN PERKEMBANGAN PASIEN TERINTEGRASI )', 'rm23', 1),
(24, 'RM 7', 'LEMBAR KONSULTASI  FOLLOW UP DOKTER SPECIALIS', 'rm24', 1),
(25, 'RM 8', 'DATA VISITE DOKTER', 'rm25', 1),
(26, 'RM 9', 'RESUME MEDIS', 'rm26', 1),
(27, 'RM 10', 'HASIL PEMERIKSAAN PENUNJANG', 'rm27', 1),
(28, 'RM 11', 'KUNJUNGAN AWAL  AHLI GIZI PADA PASIEN BARU', 'rm28', 1),
(29, 'RM 12', 'RAK', 'rm29', 1),
(30, 'RM 12a', 'KURVA HARIAN', 'rm30', 1),
(31, 'RM 12b', 'CATATAN PERAWAT', 'rm31', 1),
(32, 'RM 12c', 'BALANCE CAIRAN HARIAN', 'rm32', 1),
(33, 'RM 13', 'RESUME PERAWATAN', 'rm33', 1),
(34, 'RM 14', 'KELENGKAPAN BERKAS PASIEN', 'rm34', 1),
(35, 'RM 15', 'IDENTIFIKASI PASIEN KEBIDANAN & PENYAKIT KANDUNGAN', 'rm35', 1),
(36, 'RM 15a', 'ANAMNESE PASIEN KEBIDANAN', 'rm36', 1),
(37, 'RM 15b', 'LEMBAR PEMERIKSAAN UMUM', 'rm37', 1),
(38, 'RM 15c', 'PERIKSA DALAM', 'rm38', 1),
(39, 'RM 15d', 'PELVIC SCORE', 'rm39', 1),
(40, 'RM 15e', 'LAPORAN PERIHAL PERSALINAN  CURRATASE', 'rm40', 1),
(41, 'RM 15f', 'KALA IV', 'rm41', 1),
(42, 'RM 15g', 'Fartograf', 'rm42', 1),
(43, 'RM 15h', 'RESUME MEDIS PASIEN KEBIDANAN & PENY. KANDUNGAN', 'rm43', 1),
(44, 'RM 15i', 'PENGKAJIAN AWAL MEDIS RAWAT JALAN PENY. KEBIDANAN DAN KANDUNGAN', 'rm44', 1),
(45, 'RM 16', 'PENGKAJIAN AWAL MEDIS BAYI BARU LAHIR NEONATUS', 'rm45', 1),
(46, 'RM 16A', 'Keadaan Bayi Segera Sesudah Lahir', 'rm46', 1),
(47, 'RM 16a', 'PENGKAJIAN PERINATOLOGI TERINTEGRASI DIRAWAT INAP', 'rm47', 1),
(48, 'RM 16f', 'RESUME MEDIS NEONATI', 'rm48', 1),
(49, 'RM 17', 'PERSETUJUAN TINDAKAN ANESTESI  SEDASI', 'rm49', 1),
(50, 'RM 17a', 'PENOLAKAN TINDAKAN ANESTESI  SEDASI', 'rm50', 1),
(51, 'RM 17b', 'FORMULIR  ASSESMEN PRA ANESTESIA (SEDASI)', 'rm51', 1),
(52, 'RM 17c', 'FORMULIR KESIAPAN ANESTESI', 'rm52', 1),
(53, 'RM 17d', '(01) LAPORAN ANESTESI', 'rm53', 1),
(54, 'RM 17d', '(02) LAPORAN ANESTESI', 'rm54', 1),
(55, 'RM 17e', 'PEMANTAUAN ANESTESI LOKAL', 'rm55', 1),
(56, 'RM 18', 'FORMULIR PENJADWALAN OPERASI', 'rm56', 1),
(57, 'RM 18a', 'PERSIAPAN OPERASI', 'rm57', 1),
(58, 'RM 18c & 18b', 'FORM PENANDAAN LOKASI OPERASI', 'rm58', 1),
(59, 'RM 18d', 'PENGKAJIAN PRA OPERASI', 'rm59', 1),
(60, 'RM 18e', 'LAPORAN OPERASI', 'rm60', 1),
(61, 'RM 18f', 'DAFTAR TILIK KESELAMATAN BEDAH  ATAU OPERASI', 'rm61', 1),
(62, 'RM 18g', 'CATATAN KEPERAWATAN PERI OPERATIF', 'rm62', 1),
(63, 'RM 18h', 'CATATAN KAMAR PEMULIHAN', 'rm63', 1),
(64, 'RM 19', 'CATATAN EDUKASI PASIEN DAN KELUARGA TERINTEGRASI', 'rm64', 1),
(65, 'RM 20', 'PENGKAJIAN DAN INTERVENSI RESIKO JATUH PASIEN RAWAT JALAN DAN IGD', 'rm65', 1),
(66, 'RM 20a', 'PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN DEWASA (MORSE)', 'rm66', 1),
(67, 'RM 20b', 'PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN ANAK (HUMPTY DUMPTY)', 'rm67', 1),
(68, 'RM 20c', 'PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN GERIATRI (SYDNEY SCORING)', 'rm68', 1),
(69, 'RM 21', 'FORMULIR PELAYANAN KEROHANIAN', 'rm69', 1),
(70, 'RM 22', 'FORMULIR PERMINTAAN PRIVASI TAMBAHAN', 'rm70', 1),
(71, 'RM 23', 'FORMULIR PERMINTAAN PENDAPAT LAIN (SECOND OPINION)', 'rm71', 1),
(72, 'RM 24', '(01-02) SURAT PERNYATAN PENOLAKAN RESUSITASI (DO NOT RESUCITATE) DNR', 'rm72', 1),
(73, 'RM 25', 'FORMULIR PENGKAJIAN PASIEN TERMINAL', 'rm73', 1),
(74, 'RM 26', 'DISCHARGE PLANNING', 'rm74', 1),
(75, 'RM 27', 'SURAT PERNYATAAN PASIEN PULANG ATAS PERMINTAAN SENDIRI (PAPS)', 'rm75', 1),
(76, 'RM 28', 'INTRUKSI MEDIS FARMAKOLOGIS DAN PEMBERIAN OBAT PASIEN', 'rm76', 1),
(77, 'RM 29', 'PENILAIAN NYERI', 'rm77', 1),
(78, 'RM 30', 'LEMBAR TIMBANG TERIMA (HAND OVER) PERAWAT', 'rm78', 1),
(79, 'RM 31', 'FORMULIR PENYIMPANAN HARTA BENDA MILIK PASIEN', 'rm79', 1),
(80, 'RM 32', 'PANDUAN EWS (EARLY WARNING SYSTEM)', 'rm80', 1),
(81, 'RM 33', 'KRITERIA PASIEN MASUK DAN KELUAR ICU', 'rm81', 1),
(82, 'RM 34', 'PENGKAJIAN AWAL GERIATRI', 'rm82', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_website`
--
ALTER TABLE `detail_website`
  ADD PRIMARY KEY (`detail_website_id`);

--
-- Indexes for table `menurme`
--
ALTER TABLE `menurme`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_website`
--
ALTER TABLE `detail_website`
  MODIFY `detail_website_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menurme`
--
ALTER TABLE `menurme`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
