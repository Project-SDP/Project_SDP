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
  `vkey` varchar(50) DEFAULT NULL,
  `verified` int(1) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profilepic` varchar(50) NOT NULL,
  `fotoktp` varchar(30) NOT NULL,
  `viewer` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `kategori`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`, `kecamatan`, `Halal`, `status`, `vkey`, `verified`, `create_date`, `profilepic`, `fotoktp`, `viewer`) VALUES
('MCEPA004', 'Sushi Man', 'Cepat Saji', 0, 'jl kertajaya indah no 5', '5998987', 'a', 'kiko@gmail.com', 'PR001', 'Jakarta Barat', '', 1, 1, '65eeef8f7983b73b1f2499e25b20f3a1', NULL, '2020-05-29 13:26:43', '1590732100_clay-sushi-man.jpg', '', 0),
('MCNAS006', 'grabjess', 'Prasmanan', 0, 'asdf', '123123123123', '62c8ad0a15d9d1ca38d5', 'jessicanathaniawidjaja@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 1, '1fcb00998dc67e71edb62752e7e75ae3', NULL, '2020-05-29 11:54:33', '', '', 0),
('MCPRA006', 'juragan sego', 'Prasmanan', 0, 'jl semanggi no 10', '1234567890', '62c8ad0a15d9d1ca38d5', 'jessica6@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, 'a94386de70b5a5361beee66593775485', 0, '2020-05-31 03:43:54', '1590590349_3f0e42c19efa42d4e42aa0ff7fd77914.gif', '1590587835_c85aebf4542948cbc5b', 0),
('MCPRA007', 'sego njamoer', 'Prasmanan', 0, 'jl jeruk jaya 10', '081727267678', '62c8ad0a15d9d1ca38d5', 'jessica5@mhs.stts.edu', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '3d74a758e2d3d1e9b0c3274036e423f8', NULL, '2020-06-09 02:58:15', '', '', 0),
('MCPRA008', 'asd', 'Prasmanan', 0, 'asd', '123456781231', '62c8ad0a15d9d1ca38d5', 'abb@gmail.com', 'PR003', 'Semarang', 'Asemrowo', 1, 0, '44cdb9b1060926b5f041d5763ab1c779', NULL, '2020-06-09 11:43:37', '', '', 0),
('MCPRA009', 'Sego Jumbo', 'Prasmanan', 0, 'jl arh', '190190190190', '62c8ad0a15d9d1ca38d5', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, 'd58c7a4d9544f6e142ea0d04262365ea', NULL, '2020-06-09 08:07:45', '1591689393_clay-sushi-man.jpg', '', 0),
('MCPRA010', 'warung mbledos', 'Prasmanan', 0, 'jl kertajaya indah no 5', '08170388889', '62c8ad0a15d9d1ca38d5', 'warungmbledos@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, -1, '', NULL, '2020-06-09 11:43:47', '', '', 0),
('MCPRA011', 'zz', 'Prasmanan', 0, 'pp', '111133332222', '62c8ad0a15d9d1ca38d5', 'z@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '', NULL, '2020-06-06 13:55:47', '', '', 0),
('MCPRA012', 'sushi girl', 'Prasmanan', 0, 'popu', '0909090909', '62c8ad0a15d9d1ca38d5', 'bb@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '', NULL, '2020-05-31 10:51:49', '', '', 0),
('MCPRA013', 'banana man', 'Prasmanan', 0, 'popo', '131313131313', '62c8ad0a15d9d1ca38d5', 'bm@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '', NULL, '2020-05-31 10:53:17', '', '', 0),
('MCPRA014', 'tibys', 'Prasmanan', 0, 'a', '131313131314', '62c8ad0a15d9d1ca38d5', 'grcgabrielle@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '', NULL, '2020-05-31 11:10:39', '', '', 0),
('MCPRA015', 'aaa', 'Prasmanan', 0, 'aa', '131415161617', '62c8ad0a15d9d1ca38d5', 'abccb@gmail.com', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '', NULL, '2020-05-31 11:13:30', '', '', 0),
('MCPRA017', 'grabjess', 'Prasmanan', 0, 'asd', '135432134342', '62c8ad0a15d9d1ca38d5', 'jessica10@mhs.stts.edu', 'PR004', 'Surabaya', 'Asemrowo', 1, 0, '2abb1164e9cc07c2dcf09578a9bcbba7', NULL, '2020-06-09 07:42:01', '', '', 0),
('MCRAS006', 'sego njamoer', 'Prasmanan', 0, 'jl kertajaya indah no 5', 'asdf', 'a', 'a@gmail.com', 'PR001', 'Jakarta Barat', '', 1, 1, '', NULL, '2020-05-29 14:08:42', '', '', 0),
('MCSNA009', 'donat king', 'Snack', 0, 'jl kertajaya indah no 5', '112233445566', '62c8ad0a15d9d1ca38d5', 'abc@gmail.com', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, '', NULL, '2020-05-30 05:06:02', '', '', 0),
('MCTUM009', 'grabjess', 'Tumpeng', 0, 'popi', '123489', 'hihi', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '579158e32ed0fe24b6d44ef48a0bce83', NULL, '2020-06-09 07:45:56', '1588761390_gado2.jpg', '', 0);

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
