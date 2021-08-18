-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 12:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_nilai`
--

CREATE TABLE `jenis_nilai` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `bobot_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kd_muatan`
--

CREATE TABLE `kd_muatan` (
  `id_kd` int(11) NOT NULL,
  `nama_kd` text NOT NULL,
  `id_muatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `muatan`
--

CREATE TABLE `muatan` (
  `id_muatan` int(11) NOT NULL,
  `nama_muatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_muatan`
--

CREATE TABLE `nilai_muatan` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT 0,
  `id_kd` int(11) NOT NULL,
  `id_jenis_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas_siswa` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_muatan`
--

CREATE TABLE `type_muatan` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kd_muatan`
--
ALTER TABLE `kd_muatan`
  ADD PRIMARY KEY (`id_kd`);

--
-- Indexes for table `muatan`
--
ALTER TABLE `muatan`
  ADD PRIMARY KEY (`id_muatan`);

--
-- Indexes for table `nilai_muatan`
--
ALTER TABLE `nilai_muatan`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `type_muatan`
--
ALTER TABLE `type_muatan`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kd_muatan`
--
ALTER TABLE `kd_muatan`
  MODIFY `id_kd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `muatan`
--
ALTER TABLE `muatan`
  MODIFY `id_muatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_muatan`
--
ALTER TABLE `nilai_muatan`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_muatan`
--
ALTER TABLE `type_muatan`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
