-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyeksdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` varchar(10) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  `id_provinsi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `id_provinsi`) VALUES
('KO001', 'Jakarta Barat', 'PR001'),
('KO002', 'Jakarta Pusat', 'PR001'),
('KO003', 'Jakarta Selatan', 'PR001'),
('KO004', 'Jakarta Timur', 'PR001'),
('KO005', 'Jakarta Utara', 'PR001'),
('KO006', 'Bandung', 'PR002'),
('KO007', 'Bandung Barat', 'PR002'),
('KO008', 'Bekasi', 'PR002'),
('KO009', 'Bogor', 'PR002'),
('KO010', 'Cianjur', 'PR002'),
('KO011', 'Banyumas', 'PR003'),
('KO012', 'Jepara', 'PR003'),
('KO013', 'Semarang', 'PR003'),
('KO014', 'Surakarta', 'PR003'),
('KO015', 'Gresik', 'PR004'),
('KO016', 'Jember', 'PR004'),
('KO017', 'Sidoarjo', 'PR004'),
('KO018', 'Situbondo', 'PR004'),
('KO019', 'Kediri', 'PR004'),
('KO020', 'Malang', 'PR004'),
('KO021', 'Surabaya', 'PR004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
