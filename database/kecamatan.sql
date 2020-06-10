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
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` varchar(20) NOT NULL,
  `id_kota` varchar(20) NOT NULL,
  `nama_kec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `id_kota`, `nama_kec`) VALUES
('KE001', 'KO021', 'Asemrowo'),
('KE002', 'KO021', 'Benowo'),
('KE003', 'KO021', 'Bubutan'),
('KE004', 'KO021', 'Dukuh Pakis'),
('KE005', 'KO021', 'Genteng'),
('KE006', 'KO021', 'Gubeng'),
('KE007', 'KO021', 'Gunung Anyar'),
('KE008', 'KO021', 'Kenjeran'),
('KE009', 'KO021', 'Mulyorejo'),
('KE010', 'KO021', 'Pabean cantian'),
('KE011', 'KO021', 'Kenjeran'),
('KE012', 'KO021', 'Mulyorejo'),
('KE013', 'KO021', 'Rungkut'),
('KE014', 'KO021', 'Sukolilo'),
('KE015', 'KO021', 'Tambaksari'),
('KE016', 'KO021', 'Wiyung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
