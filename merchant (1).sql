-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 02:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmerchant`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`) VALUES
(1, 'w', 0, 'w', 'w', 'w', '', '', ''),
(2, 'a', 0, 'a', 'a', 'a', '', '', ''),
(3, 'a@g', 0, 'a@g', 'a@g', 'a', '', '', ''),
(4, 'b', 0, 'b', 'b', 'b', '', '', ''),
(5, 'c', 0, 'cc', 'c', 'c', '', '', ''),
(6, 'd', 0, 'd', 'd', 'd', '', '', ''),
(7, 'd@g', 0, 'd@g', 'd@g', 'd', '', '', ''),
(8, 'h', 0, 'h', 'h', 'h', '', '', ''),
(9, 'j', 0, 'j', 'j', 'j', '', '', ''),
(10, 'p', 0, 'p', 'p', 'p', '', '', ''),
(11, 'r', 0, 'r', 'r', 'r', '', '', ''),
(12, 's', 0, 's', 's', 's', '', '', ''),
(13, 'o', 0, 'o', 'o', 'o', '', '', ''),
(14, 'kk', 0, 'kk', 'kk', 'kk', '', 'PR001', 'Jakarta Barat'),
(15, 'popo', 0, 'jj', '123', 'jj', 'asd', 'PR001', 'Jakarta Barat'),
(16, 'koko', 0, 'a', '081', 'a', '123@gmail.com', 'PR001', 'Jakarta Barat'),
(17, 'roi', 0, 'r', '101', 'r', 'roi@gmail.com', 'PR001', 'Jakarta Barat'),
(18, 'ss', 0, 'e', '22', 'e', 's@', 'PR001', 'Jakarta Barat'),
(19, 'ala', 0, 'w', '1231', 'w', 'a@gmail.com', 'PR001', 'Jakarta Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
