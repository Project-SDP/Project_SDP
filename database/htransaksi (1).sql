-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 05:14 AM
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
-- Table structure for table `htransaksi`
--

CREATE TABLE `htransaksi` (
  `id_htrans` varchar(20) NOT NULL,
  `tglwaktu_trans` datetime NOT NULL,
  `subtotal` int(10) NOT NULL,
  `status_htrans` varchar(20) NOT NULL,
  `tglwaktu_kirim` datetime DEFAULT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_merchant` varchar(20) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `htransaksi`
--

INSERT INTO `htransaksi` (`id_htrans`, `tglwaktu_trans`, `subtotal`, `status_htrans`, `tglwaktu_kirim`, `id_customer`, `id_merchant`, `ongkir`, `pesan`) VALUES
('HT0001', '2020-05-13 22:41:53', 100000, 'DIBATALKAN', NULL, 'CUS0001', 'MCPRA006', 15000, 'tanpa cabe yaaa'),
('HT0002', '2020-05-13 22:46:46', 38500, 'BELUM LUNAS', NULL, 'CUS002', 'MCPRA006', 10000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `htransaksi`
--
ALTER TABLE `htransaksi`
  ADD PRIMARY KEY (`id_htrans`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
