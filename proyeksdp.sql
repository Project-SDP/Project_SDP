-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 09:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8
create database proyeksdp;
use proyeksdp;
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('KA001', 'Prasmanan'),
('KA002', 'Snack'),
('KA003', 'Nasi Kotak'),
('KA004', 'Cepat Saji'),
('KA005', 'Tumpeng');

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
('KO21', 'Surabaya', 'PR004');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(11) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga_menu` varchar(11) NOT NULL,
  `status_menu` varchar(11) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `id_merchant` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `status_menu`, `id_kategori`, `id_merchant`) VALUES
('23', 'nasi kuning', '15000', '1', 'KA003', 1),
('24', 'nasi kucing', '10000', '1', 'KA003', 1),
('25', 'Roti Ham', '5000', '1', 'KA002', 38),
('26', 'pastel gore', '4500', '1', 'KA002', 0),
('ME02004', 'roti ayam', '5000', '1', 'KA002', 0);

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
  `Halal` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `verified` int(1) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `kategori`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`, `Halal`, `status`, `vkey`, `verified`, `create_date`) VALUES
('MC007', 'Bang Raffi', '', 0, 'jln jeruk no 9', '081709273929', '0909', 'lalala@gmail.com', 'PR001', 'Jakarta Timur', 1, 0, '', NULL, '2020-04-03 03:55:10'),
('MCck005', 'roti bakar', 'Snack', 0, 'jl kenanga 7', '09123382910', 'f5bb0c8de146c67b44ba', 'bibikscatering@gmail.com', 'PR001', 'Jakarta Barat', 1, 1, '629bbcc5e257543770d81abd57e828b2', NULL, '2020-04-03 03:49:20'),
('MCras007', 'belle spikoe', 'Prasmanan', 0, 'jl jeruk jaya 10', '10101010', 'adf313bdefe46704b943', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 1, 1, 'e169c5078b828266880c7e8924a74b79', NULL, '2020-04-17 01:39:18'),
('MCras008', 'nasi campur', 'Prasmanan', 0, 'jl lili', '0999999', 'dd4b21e9ef71e1291183', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 1, 1, '3d8f216e9a28c3b1f343b92151b2ef90', NULL, '2020-04-17 02:48:37'),
('ME001', 'Laritta', '', 0, 'Jl. Barata Jaya XIX No.8, Baratajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60284', '0315017374', '12345', 'laritta@gmail.com', 'PR004', 'Surabaya', 1, 0, '', NULL, '2020-04-02 17:07:16'),
('ME002', 'Toko Roti Kenangan', '', 0, 'Jl Mawar no 2', '0315998984', '12345', 'rotikenangan@gmail.com', 'PR002', 'Bandung', 1, 0, '', NULL, '2020-04-02 17:07:48'),
('ME003', 'Komugi Cabang Kertajaya', '', 0, 'jl kertajaya indah no 10', '0819548932', '12345', '', 'PR001', 'KO005', 1, 1, '', NULL, '2020-04-02 17:08:08'),
('ME005', 'katering mama', '', 0, 'jln wiyung no 2', '081 704 7878', 'pp', 'jojo@gmail.com', 'PR001', 'Jakarta Barat', 1, 1, '', NULL, '2020-04-02 17:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

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
('P0001', 'makan puas diskon 50%', 'bm50', '0000-00-00', '0', '5000'),
('P0002', 'makan puas diskon 50%', 'bm50', '2020-03-17', '1', '50000'),
('P0003', '', '', '0000-00-00', '1', ''),
('P0004', '', '', '0000-00-00', '1', ''),
('P0005', '', '', '0000-00-00', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(10) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('PR001', 'Jakarta'),
('PR002', 'Jawa Barat'),
('PR003', 'Jawa Tengah'),
('PR004', 'Jawa Timur'),
('PR005', 'Bali'),
('PR006', 'Yogyakarta');

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
('C0005', 'a', 'a', 'a@gmail.com', 'a', 'a', 'a', 'KO001', '0', '1212', '0'),
('C0006', 'Amelia', 'Dwi', 'amel@gmail.com', 'amel', '123', 'ngagel madya', '', '0', '123789', '0'),
('C0007', 'Amelia', 'Dwi', 'amel@gmail.com', 'amel', '123', 'ngagel madya', '', '0', '123000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
