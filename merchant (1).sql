-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 05:45 PM
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
-- Database: `proyeksdp`
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
  `kota` varchar(20) NOT NULL,
  `Halal` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `verified` int(1) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`, `Halal`, `status`, `vkey`, `verified`, `create_date`) VALUES
(36, 'Laritta', 0, 'Jl. Barata Jaya XIX No.8, Baratajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60284', '0315017374', '12345', 'laritta@gmail.com', 'PR004', 'Surabaya', 1, 0, '', NULL, '2020-04-02 11:45:25'),
(37, 'Toko Roti Kenangan', 0, 'Jl Mawar no 2', '0315998984', '12345', 'rotikenangan@gmail.com', 'PR002', 'Bandung', 1, 0, '', NULL, '2020-04-02 11:45:25'),
(38, 'Komugi Cabang Kertajaya', 0, 'jl kertajaya indah no 10', '0819548932', '12345', '', 'PR001', 'KO005', 1, 1, '', NULL, '2020-04-02 11:45:25'),
(60, 'ww', 0, 'jess', '112312312', 'f5bb0c8de146c67b44ba', 'jessicanathaniawidjaja@gmail.com', 'PR001', 'Jakarta Barat', 1, 1, '739c7d1c25da58365e5e9a4d48f684af', NULL, '2020-04-02 15:34:46');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
