-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 05:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `id_promo` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `judul_promo` varchar(255) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `potongan` varchar(255) NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `deskripsi`, `judul_promo`, `tanggal_awal`, `status`, `potongan`, `tanggal_akhir`) VALUES
('P0001', 'makan puas diskon 50%', 'bm50', '0000-00-00', '1', '5000', '0000-00-00'),
('P0002', 'makan puas diskon 50%', 'bm50', '2020-03-17', '1', '50000', '0000-00-00'),
('P0003', '', '', '0000-00-00', '1', '', '0000-00-00'),
('P0004', '', '', '0000-00-00', '1', '', '0000-00-00'),
('P0005', 'makan diskon 40%', 'gksurabaya', '2020-03-19', '1', '40', '0000-00-00'),
('P0006', 'makan diskon 40%', 'gksurabaya', '2020-03-19', '1', '40', '0000-00-00'),
('P0007', 'makan diskon 45%', 'gksurabaya2', '2020-03-19', '1', '45', '0000-00-00'),
('P0008', 'makan diskon 45%', 'gksurabaya10', '2020-03-19', '1', '45', '0000-00-00'),
('P0009', 'makan diskon 55%', 'gksurabaya3', '2020-03-07', '1', '55', '0000-00-00'),
('P0010', '', '', '0000-00-00', '1', '', '0000-00-00'),
('P0011', 'diskon 100%', 'makanenak', '2020-04-03', '1', '100', '2020-04-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
