-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 11:37 AM
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
  `periode` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `potongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `deskripsi`, `judul_promo`, `periode`, `status`, `potongan`) VALUES
('P0001', 'makan puas diskon 50%', 'bm50', '0000-00-00', '1', '5000'),
('P0002', 'makan puas diskon 50%', 'bm50', '2020-03-17', '1', '50000'),
('P0003', '', '', '0000-00-00', '1', ''),
('P0004', '', '', '0000-00-00', '1', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
