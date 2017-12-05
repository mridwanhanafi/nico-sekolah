-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 04:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbs_admin`
--

CREATE TABLE `dbs_admin` (
  `id_user` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('admin','spv') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbs_kelas`
--

CREATE TABLE `dbs_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbs_kesalahan`
--

CREATE TABLE `dbs_kesalahan` (
  `nis` varchar(50) NOT NULL,
  `kesalahan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbs_spp`
--

CREATE TABLE `dbs_spp` (
  `nis` varchar(50) NOT NULL,
  `spp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbs_users`
--

CREATE TABLE `dbs_users` (
  `nis` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbs_users`
--

INSERT INTO `dbs_users` (`nis`, `full_name`, `email`, `tgl_lahir`, `alamat`, `nomor_hp`, `nama_ayah`, `nama_ibu`, `kelas`, `password`) VALUES
('2000000', 'Ezra Yoanda Nicolas', 'ezrayoandanicolas@gmail.com', '2017-11-15', 'jln sederhana', '082368333162', 'Ponidin', 'Chalisa', '2 tkj 5', '25f9e794323b453885f5181f1b624d0b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbs_admin`
--
ALTER TABLE `dbs_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dbs_kesalahan`
--
ALTER TABLE `dbs_kesalahan`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `dbs_spp`
--
ALTER TABLE `dbs_spp`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `dbs_users`
--
ALTER TABLE `dbs_users`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
