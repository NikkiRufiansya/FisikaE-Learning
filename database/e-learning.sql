-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 23 Okt 2017 pada 10.49
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
`id_jawaban` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` longtext NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_soal`, `jawaban`, `bobot`) VALUES
(22, 9900, 'kelajuan rata-rata yang waktu tempuhnya mendekati nol', 10),
(23, 9900, ' kelajuan rata-rata hasil dari perpindahan dari satu tempat ke tempat lainnya', 0),
(24, 9900, 'asil bagi jarak total yang ditempuh dengan waktu tempuhnya', 0),
(25, 9900, ' jarak yang ditempuh dengan waktu tempuhnya', 0),
(26, 5489, 'Gerak Rotasi', 10),
(27, 5489, 'Gerak Translasi', 0),
(28, 5489, ' Perpindahan', 0),
(29, 5489, ' Kecepatan', 0),
(30, 4369, 'Gerak Lurus Beraturan (GLB)', 10),
(31, 4369, 'Gerak Translasi', 0),
(32, 4369, 'Gerak Melingkar', 0),
(33, 4369, 'Gerak Lurus Berubah Beraturan (GLBB)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`id_materi` int(25) NOT NULL,
  `nama_materi` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81849284 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
`id_soal` int(11) NOT NULL,
  `soal` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9901 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`) VALUES
(4369, 'Gerak suatu benda pada garis lurus dengan kecepatan tetap merupakan pengertian dari:'),
(5489, 'Gerakan suatu benda dimana setiap titik pada benda tersebut mempunyai jarak yang tetap terhadap suatu sumbu tertentu, merupakan pengertian dari:'),
(9900, 'Dari pilihan jawaban berikut, manakah yang merupakan definisi atau pengertian dari Kelajuan Sesaat:');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subMateri`
--

CREATE TABLE IF NOT EXISTS `subMateri` (
`id_subMateri` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94797933 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`kode_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`kode_user`, `username`, `password`, `nama`, `level`) VALUES
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'Nikki Rufiansya', 'admin'),
(7, 'user', '202cb962ac59075b964b07152d234b70', 'Diana', 'user'),
(18, 'user1', '202cb962ac59075b964b07152d234b70', 'Adib', 'user'),
(19, 'modi', '202cb962ac59075b964b07152d234b70', 'modi ulala', 'user'),
(20, 'user1', 'ac43724f16e9241d990427ab7c8f4228', 'nikki rufiansya', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `level`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(5, 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
 ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
 ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `subMateri`
--
ALTER TABLE `subMateri`
 ADD PRIMARY KEY (`id_subMateri`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`kode_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `id_materi` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81849284;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9901;
--
-- AUTO_INCREMENT for table `subMateri`
--
ALTER TABLE `subMateri`
MODIFY `id_subMateri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94797933;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
