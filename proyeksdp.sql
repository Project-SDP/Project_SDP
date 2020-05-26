-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 07:41 PM
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
-- Table structure for table `dtransaksi`
--

CREATE TABLE `dtransaksi` (
  `id_htrans` varchar(10) NOT NULL,
  `id_makanan` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtransaksi`
--

INSERT INTO `dtransaksi` (`id_htrans`, `id_makanan`, `jumlah`, `subtotal`) VALUES
('HT0001', '11', 5, 100000),
('HT0001', '10', 1, 18500),
('HT0001', '11', 1, 20000);

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
-- Table structure for table `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_km` varchar(20) NOT NULL,
  `nama_km` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_km`, `nama_km`) VALUES
('KM001', 'Indonesia'),
('KM002', 'Barat'),
('KM003', 'Jepang'),
('KM004', 'Chinese'),
('KM005', 'Vegetarian');

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
('KO021', 'Surabaya', 'PR004');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga_menu` varchar(11) NOT NULL,
  `status_menu` varchar(11) NOT NULL,
  `id_km` varchar(20) NOT NULL,
  `id_merchant` varchar(10) NOT NULL,
  `deskripsi_menu` varchar(255) NOT NULL,
  `gambar_menu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `status_menu`, `id_km`, `id_merchant`, `deskripsi_menu`, `gambar_menu`) VALUES
(1, 'Kedai Kayu Manis', '30000', '1', 'KM001', 'MCPRA006', 'Nasi Putih, Ayam Goreng, Sayur Asem / Cah Kangkung, Tahu, Tempe', 'Kedai_Kayu_Manis.jpg'),
(2, 'Dapur Serundeng', '36000', '1', 'KM001', 'MCPRA006', '1 Pilihan Karbohidrat,\r\n2 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n2 Makanan Penutup,\r\n2 Minuman,\r\n1 Soup,\r\n2 Menu Pelengkap', 'Dapur_Serundeng.jpg'),
(3, 'Dapur Minggu', '20000', '1', 'KM001', 'MCPRA006', '2 Pilihan Karbohidrat,\r\n2 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n3 Makanan Penutup,\r\n2 Minuman,\r\n1 Soup,\r\n3 Menu Pelengkap', 'Dapur_Minggu.jpg'),
(4, 'Pokinometry', '45000', '1', 'KM001', 'MCPRA006', '2 Pilihan Karbohidrat,\r\n1 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n1 Minuman,\r\n1 Soup,\r\n2 Menu Pelengkap', 'Pokinometry.jpg'),
(5, 'Grabba Java', '22000', '1', 'KM001', 'MCPRA006', '1 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n1 Makanan Penutup,\r\n1 Minuman', 'Grabba_Java.jpg'),
(7, 'Rasela', '38000', '1', 'KM001', 'MCPRA006', '2 Menu Utama,\r\n2 Menu Pendamping,\r\n1 Makanan Penutup,\r\n1 Minuman,\r\n1 Soup', 'Rasela.jpg'),
(8, 'Sedap Makan', '28000', '1', 'KM001', 'MCPRA006', '2 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n1 Makanan Penutup,\r\n1 Minuman,', 'Sedap_Makan.jpg'),
(9, 'Seroja', '31000', '1', 'KM001', 'MCPRA006', '2 Menu Utama,\r\n7 Menu Pendamping,\r\n1 Makanan Penutup,\r\n1 Minuman', 'Seroja.jpg'),
(6, 'Ki Semar Catering', '20000', '1', 'KM001', 'MCPRA006', '2 Pilihan Karbohidrat,\r\n2 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Menu Sayuran,\r\n3 Makanan Penutup,\r\n2 Minuman,\r\n1 Soup,\r\n3 Menu Pelengkap', 'Ki_Semar_Catering.jpg'),
(10, 'Mbah Jungkrak', '18500', '1', 'KM001', 'MCPRA006', '1 Menu Utama,\r\n3 Menu Pendamping,\r\n1 Makanan Penutup,\r\n1 Minuman,\r\n1 Soup', 'Mbah_Jungkrak.jpg'),
(11, 'Daun Wangi', '20000', '1', 'KM001', 'MCPRA006', '1 Menu Utama,\r\n1 Menu Pendamping,\r\n1 Makanan Penutup,\r\n2 Minuman,\r\n1 Soup,', 'Daun_Wangi.jpg'),
(12, 'Paket 1', '10000', '1', 'KM001', 'MCSNA008', 'Sosis Solo (nampan), Kue Thok (m), Lumpur Hijau (m)', 'pkt-1.jpg'),
(13, 'Donat Surgawi Gula Putih', '20000', '1', 'KM001', 'MCSNA008', 'Isi 3, Aqua Gelas', 'donat-surgawi-gula-putih.jpg'),
(14, 'Mango Sticky Rice', '20000', '1', 'KM001', 'MCSNA008', 'Mango Sticky Rice', 'mango-sticky-rice.jpg'),
(15, 'Laritta Snack Box A7', '10000', '1', 'KM001', 'MCSNA008', 'Chocolate John, Pizza', 'a7.jpg'),
(16, 'Laritta Snack Box A10', '10000', '1', 'KM001', 'MCSNA008', 'Risoles Smooked Beef, Kacang Bun', 'a10.jpg'),
(17, 'Laritta Snack Box B1', '20000', '1', 'KM001', 'MCSNA008', 'Roti Coklat, Roti Strawberry, Cream Srikaya', 'b1.jpg'),
(18, 'Snack Box isi 4', '24000', '1', 'KM001', 'MCSNA008', '4 Snack & 1 Aqua Gelas', 'snack-box-isi-4.jpg'),
(19, 'Snack Box isi 3', '18000', '1', 'KM001', 'MCSNA008', '3 Snack & 1 Aqua Gelas', 'snack-box-isi-3.jpg'),
(20, 'Box Isi 12', '72000', '1', 'KM001', 'MCSNA008', 'Isi 12', 'box-isi-12.jpg'),
(21, 'Paket 2', '10000', '1', 'KM001', 'MCSNA008', 'Risoles Ayam (nampan), Kue Thok (m), Lumpur Hijau (m)', 'pkt-2.jpg'),
(22, 'Paket 3', '10000', '1', 'KM001', 'MCSNA008', 'Lemper (nampan), Kroket (nampan), Kue Thok (m)', 'pkt-3.jpg'),
(23, 'Nasi Kotak Sapo Tahu', '20000', '1', 'KA001', 'MCNAS006', 'porsi keluarga', ''),
(24, 'Nasi Ayam Teriyaki', '20000', '1', 'KM003', 'MCNAS006', 'Bahan utama yang digunakan dalam Nasi Ayam Teriyaki adalah dada ayam filet. Sementara untuk sausnya, menggunakan bahan-bahan seperti kecap manis, kecap asin, dan saus teriyaki.', 'Nasi Ayam Teriyaki.jpg'),
(25, 'Aglio Olio Chicken Paneer', '25000', '1', 'KM001', 'MCNAS006', 'Spaghetti Aglio Olio dengan Crispy Chicken Paneer', 'aglio-olio-chicken-paneer.jpg'),
(26, 'Arrabbiata Chicken Paneer', '20000', '1', 'KM001', 'MCNAS006', 'Classic Italian Pasta yang dimasak dengan arrabiata sauce dengan crispy chicken paneer', 'arrabbiata-chicken-paneer.jpg'),
(27, 'Bihun Goreng Ayam', '20000', '1', 'KM001', 'MCNAS006', 'Bihun goreng ayam dengan krupuk udang, acar, dan saus sambal', 'bihun-goreng-ayam.jpg'),
(28, 'Paket Hemat 3', '21000', '1', 'KM001', 'MCNAS006', 'Nasi Putih, Ayam Goreng Tepung, Timun, Kering Tempe, Saos Sambal', 'hemat-3.jpg'),
(29, 'Kwetiau Goreng', '24000', '1', 'KM001', 'MCNAS006', 'Kwetiau Goreng, Acar, Saus Sambal, Kerupuk', 'kwetiau-goreng.jpg'),
(30, 'Nasi Ayam Kecap', '20000', '1', 'KM001', 'MCNAS006', 'Nasi, ayam kecap, tumis pakcoy, martabak telur, kerupuk', 'nasi-ayam-kecap.jpg'),
(31, 'Mie Goreng Ayam', '22000', '1', 'KM001', 'MCNAS006', 'Mie Goreng, Acar, Sambal, Kerupuk', 'mie-goreng-ayam.jpg'),
(32, 'Nasi Goreng Ayam', '25000', '1', 'KM001', 'MCNAS006', 'Nasi Goreng, Ayam, Sayuran, Kerupuk', 'nasi-goreng-ayam.jpg'),
(33, 'Nasi Goreng Gila', '25000', '1', 'KM001', 'MCNAS006', 'Nasi Goreng, Ayam,Sayuran, Kerupuk', 'nasi-goreng-gila.jpg'),
(34, 'Paket B', '30000', '1', 'KM001', 'MCNAS006', 'Nasi Putih, Ayam Goreng, Sayur Asem / Cah Kangkung, Tahu, Tempe', 'pkt-b.jpg'),
(35, 'Liwet', '450000', '1', 'KM001', 'MCTUM009', 'Nasi Liwet, Ayam Goreng Laos, Bakwan Jagung, Ikan Asin, Tahu / Tempe Goreng, Lalapan, Sambal, Kerupuk', 'liwet.jpg'),
(36, 'Rice Cake', '350000', '1', 'KM001', 'MCTUM009', 'Nasi Kuning / Nasi Uduk, Ayam Goreng / Ayam Bakar/ Ayam Suwir Bumbu Bali, Kering Tempe, Telur Balado / Telur Rawis, Sambal Goreng Kentang Ati, Mie Goreng, Garnish', 'rice-cake.jpg'),
(37, 'Tumpeng Manis', '715000', '1', 'KM001', 'MCTUM009', 'Wajik Ketan Coklat, Getuk Pelangi, Kue Talam Ubi, Kue Ku, Kue Klepon', 'tumpeng-manis.jpg'),
(38, 'Tumpeng Nasi Ungu', '940000', '1', 'KM001', 'MCTUM009', 'Nasi Ungu, Ayam Suwir Plecingan, Ikan Sambal Matah, Soun / Bakmi Goreng, Telur Pindang, Kering Tempe, Perkedel / Sayur Urap, Sambal', 'tumpeng-ungu.jpg'),
(39, 'Nasi Tumpeng Biasa', '800000', '1', 'KM001', 'MCTUM009', 'Pilihan Nasi, Pilihan Lauk Ayam, Pilihan Lauk Daging, Urap Sayur, Sambal Goreng Ati, Kering Tempe Kacang, Telor Pindang, Lalap dan Sambal, Perkedel', 'tumpeng-biasa-20.jpg'),
(40, 'Tumpeng Kaldu Udang', '750000', '1', 'KM001', 'MCTUM009', 'Ayam Rempah, Sambel Kerang Pete, Kentang Krispi, Gepuk Daging, Urab Sayuran', 'tumpeng-kaldu-udang.jpg'),
(41, 'Tumpeng Kuning', '750000', '1', 'KM001', 'MCTUM009', 'Nasi Kuning, Ayam Panggang Bumbu Rujak / Kecap, Sambal Goreng Telor Puyuh Kentang Ati, Perkedel, Mie Goreng, Telor Rawis / Mata Sapi, Abon', 'tumpeng-kuning-20pax.jpg'),
(42, 'Tumpeng Putih A', '800000', '1', 'KM001', 'MCTUM009', 'Nasi Putih, Ayam Lengkuas / Kremes, Tongkol Cabe Ijo, Mie Goreng, Bakwan Jagung, Balado Telor, Cumi Hitam, Sambel Bawang', 'tumpeng-putih-a-20pax.jpg'),
(43, 'Tumpeng Putih B', '750000', '1', 'KM001', 'MCTUM009', 'Nasi Putih, Sayur Urap, Ayam Panggang Bumbu Rujak, Kothokan Tahu Tempe, Telor Rebus, Rempah, Lodeh Kluweh / Tewel, Peyek', 'tumpeng-putih-b-20pax.jpg'),
(44, 'Tumpeng Tampah Besar', '1300000', '1', 'KM001', 'MCTUM009', 'Nasi kuning, ayam goreng kuning, sambal goreng ati, perkedel, mie goreng, tempe orek, telur balado, sambal terasi', 'tumpeng-tampah-besar.jpg'),
(45, 'Tumpeng Tampah Medium ', '900000', '1', 'KM001', 'MCTUM009', 'Nasi kuning, ayam goreng kuning, sambal goreng ati, perkedel, mie goreng, tempe orek, telur balado, sambal terasi', 'tumpeng-tampah-medium.jpg'),
(46, 'Tumpeng Rinjani', '600000', '1', 'KM001', 'MCTUM009', 'Nasi Kuning, Sambal Goreng, Kentang-Ati, Mie Goreng, Ayam Goreng, Serundeng, Telor Balado, Empal Suwir, Perkedel, Kering Tempe, Sambal', 'tumpeng-tidar-web.jpg');

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
  `profilepic` varchar(50) NOT NULL,
  `fotoktp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `nama`, `kategori`, `rating`, `alamat`, `notelp`, `pass`, `email`, `provinsi`, `kota`, `kecamatan`, `Halal`, `status`, `vkey`, `verified`, `create_date`, `profilepic`, `fotoktp`) VALUES
('MCNAS006', 'grabjes', 'Prasmanan', 0, 'papo', '1234', 'blabla', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, '', NULL, '2020-05-08 01:54:18', '1588762421_cover.jpg', ''),
('MCSNA008', 'gojjes', 'SnacksBox', 0, 'popu', '1567', 'haha', 'jessica3@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '', NULL, '2020-05-06 10:51:25', '', ''),
('MCTUM009', 'grabjess', 'Tumpeng', 0, 'popi', '123489', 'hihi', 'jessica4@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '', NULL, '2020-05-06 10:51:40', '1588761390_gado2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

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
('P0002', 'makan puas diskon 50%', 'bm50', '2020-03-17', '1', '50000', '0000-00-00');

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

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `batas_pesan` varchar(20) NOT NULL,
  `waktu_antar` varchar(30) NOT NULL,
  `id_merchant` varchar(10) NOT NULL,
  `kebijakan` varchar(100) NOT NULL,
  `cover` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`batas_pesan`, `waktu_antar`, `id_merchant`, `kebijakan`, `cover`) VALUES
('1 hari', '10:00 s/d 15:00', 'MCNAS006', 'pembatalan h-1 uang tidak kembali', '1589471933_149526-download-fre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `htransaksi`
--
ALTER TABLE `htransaksi`
  ADD PRIMARY KEY (`id_htrans`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

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

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_merchant`),
  ADD KEY `id_merchant` (`id_merchant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
