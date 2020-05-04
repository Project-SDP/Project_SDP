-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 02:19 PM
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
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `Halal` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `verified` int(1) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `kategori`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`, `kecamatan`, `Halal`, `status`, `vkey`, `verified`, `create_date`, `profilepic`) VALUES
('MCPRA006', 'gojes', 'Prasmanan', 0, 'popo', '1231231', 'f5bb0c8de146c67b44ba', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '202f99690bd257803c248566bddc86cf', NULL, '2020-04-30 09:41:35', '1588239695_cover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
