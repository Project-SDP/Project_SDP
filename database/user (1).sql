-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 10:30 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_akun` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `poin` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_akun`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `alamat`, `kota`, `poin`, `no_telp`, `status`) VALUES
('C0001', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0002', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0003', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0004', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Malang', '0', '1234', '0'),
('C0005', 'ab', 'a', 'a@gmail.com', 'a', 'a', 'jl kertajaya indah no 5', 'Surabaya', '0', '1212345', '1'),
('C0006', 'Amelia', 'Dwi', 'amel@gmail.com', 'amel', 'vHATQm5s', 'ngagel madya', '', '0', '123789', '0'),
('C0007', 'Amelia', 'Dwi', 'amel@gmail.com', 'amel', 'vHATQm5s', 'ngagel madya', '', '0', '123000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
