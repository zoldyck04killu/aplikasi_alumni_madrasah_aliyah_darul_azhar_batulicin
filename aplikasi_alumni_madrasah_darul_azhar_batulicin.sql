-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2019 at 06:01 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_alumni_madrasah_darul_azhar_batulicin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE `data_alumni` (
  `Nis` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekarang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_alumni` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan_alumni` int(10) NOT NULL,
  `lulusan_alumni` int(10) NOT NULL,
  `nama_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ortu` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_berita`
--

CREATE TABLE `data_berita` (
  `id_berita` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berita` date NOT NULL,
  `id_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_pelaksanaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pekerjaan`
--

CREATE TABLE `data_pekerjaan` (
  `id_pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_alumni`
--

CREATE TABLE `login_alumni` (
  `id` int(50) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD UNIQUE KEY `Nis` (`Nis`);

--
-- Indexes for table `data_berita`
--
ALTER TABLE `data_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `login_alumni`
--
ALTER TABLE `login_alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_alumni`
--
ALTER TABLE `login_alumni`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
