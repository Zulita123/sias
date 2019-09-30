-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 02:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sias`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `no_disposisi` varchar(15) NOT NULL,
  `no_agenda` varchar(15) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `status_surat` varchar(15) NOT NULL,
  `tanggapan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`no_disposisi`, `no_agenda`, `no_surat`, `kepada`, `keterangan`, `status_surat`, `tanggapan`) VALUES
('DPS0002', 'AGNM0002', '1234', 'Waka Kurikulum', 'ter', 'dibaca', 'yes'),
('DPS0003', 'AGNM0003', '123-444', 'Kepala Sekolah', 'harap di baca', 'dibaca', 'sudah diba');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `hak_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `email`, `nama`, `password`, `hak_akses`) VALUES
('PETUGAS-101', 'zulitafatma@gmail.com', 'Zulita Fatma Sari', '-_-', 'Admin'),
('PETUGAS-102', 'Admin1@gmail.com', 'M.J Arizak S,pd', '1234', 'Waka Kesiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(15) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `upload_surat` varchar(50) NOT NULL,
  `tanggal_hapus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_agenda`, `id_petugas`, `jenis_surat`, `tanggal_kirim`, `no_surat`, `pengirim`, `perihal`, `upload_surat`, `tanggal_hapus`) VALUES
('AGNK0001', 'PETUGAS-101', 'Dinas', '2018-05-22', '12345', 'saya', 'penting', '22052018fa0a39ce-8b03-46a1-9c2e-ec7921b6fff8.jpg', ''),
('AGNK0002', 'PETUGAS-101', 'Dinas', '2018-05-22', '123-678', 'Sari', 'Bisa', '22052018vlookup1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(15) NOT NULL,
  `tanggal_terima` varchar(15) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `upload_surat` varchar(50) NOT NULL,
  `terusan` varchar(20) NOT NULL,
  `tanggal_hapus` varchar(15) NOT NULL,
  `tanggal_masuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_agenda`, `id_petugas`, `jenis_surat`, `tanggal_kirim`, `tanggal_terima`, `no_surat`, `pengirim`, `perihal`, `upload_surat`, `terusan`, `tanggal_hapus`, `tanggal_masuk`) VALUES
('AGN0001', 'petugas', 'memo', '2018-04-18', '2018-07-09', 'surat1', 'sari', 'b aja', 'msaccess.pdf', '', '', ''),
('AGNM0002', 'PETUGAS-101', 'Dinas', '2018-05-22', '2018-05-23', '1234', 'Sari', 'Biasa', '22052018bahasa inggris 2.PNG', 'Waka Kurikulum', '', ''),
('AGNM0003', 'PETUGAS-101', 'Niaga', '2018-05-22', '2018-05-23', '123-444', 'Zulita', 'Penting', '22052018latihan-soal-excel-450x258.png', 'Kepala Sekolah', '', ''),
('AGNM0004', 'PETUGAS-101', 'Dinas', '2018-05-22', '2018-05-23', '12435', 'asd', 'undangan', '22052018msaccess.pdf', '', '', ''),
('AGNM0005', 'PETUGAS-101', 'Dinas', '2018-05-29', '2018-05-30', 'Surat000908', 'Kepala Sekolah', 'penting', '2905201812.PNG', '', '', '2018-05-29'),
('AGNM0006', 'PETUGAS-101', '', '2018-05-29', '2018-05-30', '1234', 'saya', 'Biasa', '29052018images.jpg', '', '', '2018-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`no_disposisi`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
