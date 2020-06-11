-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 01:09 PM
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
-- Database: proyeksdp
--


-- --------------------------------------------------------

--
-- Table structure for table dtransaksi
--

CREATE TABLE dtransaksi (
  id_htrans varchar(10) NOT NULL,
  id_makanan varchar(20) NOT NULL,
  jumlah int NOT NULL,
  subtotal int NOT NULL
); 

--
-- Dumping data for table dtransaksi
--

INSERT INTO dtransaksi (id_htrans, id_makanan, jumlah, subtotal) VALUES
('HT0001', '11', 5, 100000),
('HT0001', '10', 1, 18500),
('HT0001', '11', 1, 20000),
('HT0016', '14', 1, 20000),
('HT0016', '23', 1, 20000),
('HT0016', '1', 1, 30000),
('HT0017', '1', 1, 30000),
('HT0017', '25', 1, 25000),
('HT0018', '14', 1, 20000),
('HT0018', '17', 2, 40000),
('HT0019', '14', 1, 20000),
('HT0019', '17', 2, 40000),
('HT0022', '13', 1, 20000),
('HT0022', '14', 1, 20000),
('HT0023', '15', 1, 10000),
('HT0024', '13', 1, 20000),
('HT0025', '13', 1, 20000),
('HT0026', '13', 1, 20000),
('HT0027', '14', 2, 40000),
('HT0028', '24', 2, 40000),
('HT0029', '25', 1, 25000),
('HT0030', '25', 1, 25000),
('HT0031', '24', 1, 20000),
('HT0032', '24', 1, 20000),
('HT0033', '23', 1, 20000),
('HT0033', '30', 1, 20000),
('HT0033', '32', 2, 50000),
('HT0038', '26', 1, 20000),
('HT0038', '28', 1, 21000),
('HT0039', '12', 1, 10000),
('HT0039', '14', 1, 20000),
('HT0040', '23', 2, 40000),
('HT0040', '24', 2, 40000),
('HT0042', '24', 4, 80000),
('HT0043', '23', 5, 100000);

-- --------------------------------------------------------

--
-- Table structure for table htransaksi
--

CREATE TABLE htransaksi (
  id_htrans varchar(20) NOT NULL,
  tglwaktu_trans timestamp NOT NULL,
  subtotal int NOT NULL,
  status_htrans varchar(20) NOT NULL,
  tglwaktu_kirim timestamp DEFAULT NULL,
  id_customer varchar(20) NOT NULL,
  id_merchant varchar(20) NOT NULL,
  ongkir int NOT NULL,
  pesan varchar(50) NOT NULL,
  keterangan varchar(255) NOT NULL
); 

--
-- Dumping data for table htransaksi
--

INSERT INTO htransaksi (id_htrans, tglwaktu_trans, subtotal, status_htrans, tglwaktu_kirim, id_customer, id_merchant, ongkir, pesan, keterangan) VALUES
('HT0001', '2020-05-13 22:41:53', 100000, 'DIBATALKAN', NULL, 'CUS0001', 'MCPRA006', 15000, 'tanpa cabe yaaa', ''),
('HT0002', '2020-05-13 22:46:46', 38500, 'BELUM LUNAS', NULL, 'CUS002', 'MCPRA006', 10000, '', ''),
('HT0004', '2020-05-15 09:02:39', 70000, 'SELESAI', NULL, 'C0008', 'MCSNA008', 0, '', ''),
('HT0005', '2020-05-15 09:03:08', 70000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 0, '', ''),
('HT0006', '2020-05-15 09:06:33', 70000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 20000, 'gamau pedes', ''),
('HT0007', '2020-05-15 09:23:16', 70000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 20000, '', 'nama_promo:makanenak||promo:5000||kota:||provinsi:'),
('HT0008', '2020-05-15 09:25:14', 100000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 16000, 'makan kak', 'nama_promo:||promo:||kota:37||provinsi:10'),
('HT0009', '2020-05-15 09:27:40', 100000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 45000, 'pesan untuk senin kak', 'nama_promo:||promo:||kota:||provinsi:'),
('HT0010', '2020-05-15 09:44:46', 100000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 37000, 'makan yuk', 'nama_promo:makanenak||promo:5000||kota:Balikpapan||provinsi:Kalimantan Timur'),
('HT0011', '2020-05-15 09:47:02', 95000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 37000, 'makan kak2', 'nama_promo:makanenak||promo:5000||kota:37||provinsi:10'),
('HT0012', '2020-05-15 09:47:27', 65000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 16000, '', 'nama_promo:makanenak||promo:5000||kota:37||provinsi:10'),
('HT0013', '2020-05-15 09:47:36', 65000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 16000, 'makan cuy', 'nama_promo:makanenak||promo:5000||kota:37||provinsi:10'),
('HT0014', '2020-05-15 09:48:42', 72000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 7000, 'makancuyyyy', 'nama_promo:makanenak||promo:5000||kota:31||Bangkalan||provinsi:11'),
('HT0015', '2020-05-15 09:50:23', 99000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 34000, 'makan sistah', 'nama_promo:makanenak||promo:5000||kota:Hulu Sungai Utara||provinsi:Kalimantan Selatan'),
('HT0016', '2020-05-15 09:56:02', 99000, 'SELESAI', NULL, 'C0008', 'MCSNA008', 34000, '', 'nama_promo:makanenak||promo:5000||kota:Balangan||provinsi:Kalimantan Selatan'),
('HT0017', '2020-05-15 10:13:50', 52000, 'LUNAS', NULL, 'C0008', 'MCPRA006', 7000, 'gak pedes ya kak', 'nama_promo:makanenakk||promo:10000||kota:Bangkalan||provinsi:Jawa Timur'),
('HT0018', '2020-05-24 17:13:27', 80000, 'SELESAI', NULL, 'C0008', 'MCSNA008', 20000, 'ga pake lama', 'nama_promo:||promo:0||kota:Pandeglang||provinsi:Banten'),
('HT0019', '2020-05-24 17:27:51', 67000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 7000, '', 'nama_promo:||promo:0||kota:Bangkalan||provinsi:Jawa Timur'),
('HT0020', '2020-05-24 17:28:57', 45000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 45000, '', 'nama_promo:||promo:0||kota:Bangka||provinsi:Bangka Belitung'),
('HT0021', '2020-05-24 17:29:43', 45000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 45000, '', 'nama_promo:||promo:0||kota:Bangka||provinsi:Bangka Belitung'),
('HT0024', '2020-05-26 18:16:31', 54000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 34000, '', 'nama_promo:||promo:0||kota:Balangan||provinsi:Kalimantan Selatan'),
('HT0025', '2020-05-26 22:46:25', 36000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 16000, '', 'nama_promo:||promo:0||kota:Banjarnegara||provinsi:Jawa Tengah'),
('HT0026', '2020-05-26 22:57:11', 65000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 45000, '', 'nama_promo:||promo:0||kota:Bengkayang||provinsi:Kalimantan Barat'),
('HT0027', '2020-05-26 22:57:57', 105000, 'SELESAI', NULL, 'C0008', 'MCSNA008', 65000, '', 'nama_promo:||promo:0||kota:Ambon||provinsi:Maluku'),
('HT0028', '2020-05-27 08:56:29', 60000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 20000, '', 'nama_promo:||promo:0||kota:Badung||provinsi:Bali'),
('HT0029', '2020-05-27 08:59:19', 45000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 20000, '', 'nama_promo:||promo:0||kota:Badung||provinsi:Bali'),
('HT0030', '2020-05-27 09:01:10', 45000, 'SELESAI', NULL, 'C0008', 'MCNAS006', 20000, '', 'nama_promo:||promo:0||kota:Badung||provinsi:Bali'),
('HT0031', '2020-05-27 18:42:25', 40000, 'SELESAI', NULL, '', 'MCNAS006', 20000, '', 'nama_promo:||promo:0||kota:Badung||provinsi:Bali'),
('HT0032', '2020-05-28 16:29:01', 40000, 'SELESAI', NULL, 'C0008', 'MCNAS006', 20000, '', 'nama_promo:||promo:0||kota:Badung||provinsi:Bali'),
('HT0033', '2020-05-30 17:22:36', 106000, 'SELESAI', NULL, 'C0008', 'MCNAS006', 16000, '', 'nama_promo:||promo:0||kota:Cilegon||provinsi:Banten'),
('HT0038', '2020-05-30 17:29:14', 86000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 45000, '', 'nama_promo:||promo:0||kota:Bangka||provinsi:Bangka Belitung'),
('HT0039', '2020-06-10 00:33:00', 32000, 'LUNAS', NULL, 'C0008', 'MCSNA008', 7000, 'ga mau pedes ya kak', 'nama_promo:makanenak||promo:5000||kota:Probolinggo||provinsi:Jawa Timur'),
('HT0040', '2020-06-10 14:59:19', 95000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 20000, 'minta pedas', 'nama_promo:makanenak||promo:5000||kota:Badung||provinsi:Bali'),
('HT0042', '2020-06-10 15:02:31', 95000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 20000, 'minta cepet', 'nama_promo:makanenak||promo:5000||kota:Badung||provinsi:Bali'),
('HT0043', '2020-06-10 17:44:21', 115000, 'LUNAS', NULL, 'C0008', 'MCNAS006', 20000, '', 'nama_promo:makanenak||promo:5000||kota:Gianyar||provinsi:Bali');

-- --------------------------------------------------------

--
-- Table structure for table kategori
--

CREATE TABLE kategori (
  id_kategori varchar(20) NOT NULL,
  nama_kategori varchar(20) NOT NULL,
  status varchar(5) NOT NULL
);

--
-- Dumping data for table kategori
--

INSERT INTO kategori (id_kategori, nama_kategori, status) VALUES
('KA001', 'Prasmanan', ''),
('KA002', 'Snack', '1'),
('KA003', 'NasiKotak', ''),
('KA004', 'CepatSaji', ''),
('KA005', 'Tumpeng', '');

-- --------------------------------------------------------

--
-- Table structure for table kategori_menu
--

CREATE TABLE kategori_menu (
  id_km varchar(20) NOT NULL,
  nama_km varchar(20) NOT NULL
);

--
-- Dumping data for table kategori_menu
--

INSERT INTO kategori_menu (id_km, nama_km) VALUES
('KM001', 'Indonesia'),
('KM002', 'Barat'),
('KM003', 'Jepang'),
('KM004', 'Chinese'),
('KM005', 'Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table kecamatan
--

CREATE TABLE kecamatan (
  id_kec varchar(20) NOT NULL,
  id_kota varchar(20) NOT NULL,
  nama_kec varchar(20) NOT NULL
) 

--
-- Dumping data for table kecamatan
--

INSERT INTO kecamatan (id_kec, id_kota, nama_kec) VALUES
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
-- Table structure for table kota
--

CREATE TABLE kota (
  id_kota varchar(10) NOT NULL,
  nama_kota varchar(20) NOT NULL,
  id_provinsi varchar(10) NOT NULL
)

--
-- Dumping data for table kota
--

INSERT INTO kota (id_kota, nama_kota, id_provinsi) VALUES
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
-- Table structure for table menu
--

CREATE TABLE menu (
  id_menu int NOT NULL,
  nama_menu varchar(255) NOT NULL,
  harga_menu varchar(11) NOT NULL,
  status_menu varchar(11) NOT NULL,
  id_km varchar(20) NOT NULL,
  id_merchant varchar(10) NOT NULL,
  deskripsi_menu varchar(255) NOT NULL,
  gambar_menu varchar(30) NOT NULL
);

--
-- Dumping data for table menu
--

INSERT INTO menu (id_menu, nama_menu, harga_menu, status_menu, id_km, id_merchant, deskripsi_menu, gambar_menu) VALUES
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
(23, 'Nasi Kotak Sapo Tahu', '20000', '1', 'KM001', 'MCNAS006', 'Nasi Sapo  Tahu biasanya  menggunakan egg tofu alias tahu tiongkok yang bertekstur halus dan lembut dilengkapi dengan mie dan kulit pangsit goreng', 'Nasi Sapo Tahu.jpg'),
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
-- Table structure for table merchant
--

CREATE TABLE merchant (
  id varchar(10) NOT NULL,
  nama varchar(50) NOT NULL,
  kategori varchar(20) NOT NULL,
  rating float NOT NULL,
  alamat varchar(100) NOT NULL,
  notelp varchar(12) NOT NULL,
  pass varchar(20) NOT NULL,
  email varchar(50) NOT NULL,
  provinsi varchar(20) NOT NULL,
  kota varchar(20) NOT NULL,
  kecamatan varchar(20) NOT NULL,
  Halal int NOT NULL,
  status int NOT NULL,
  vkey varchar(50) NOT NULL,
  verified int DEFAULT NULL,
  create_date timestamp NOT NULL DEFAULT current_timestamp,
  profilepic varchar(50) NOT NULL
)

--
-- Dumping data for table merchant
--

INSERT INTO merchant (id, nama, kategori, rating, alamat, notelp, pass, email, provinsi, kota, kecamatan, Halal, status, vkey, verified, create_date, profilepic) VALUES
('MCNAS006', 'Nasi Kantor', 'NasiKotak', 3.9, 'papo', '1234', '62c8ad0a15d9d1ca38d5', 'jessica2@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '', NULL, '2020-06-10 11:03:12', '1591783016_clay-sushi-man.jpg'),
('MCPRA005', 'mie up', 'Prasmanan', 0, 'jl kertajaya indah no 5', '90090090012', '62c8ad0a15d9d1ca38d5', 'jessica1@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 0, 1, '0e0b5c90617c64f0e59f7cc517b8105a', NULL, '2020-06-10 09:39:10', '1591779536_pegawai.png'),
('MCPRA006', 'gojes', 'Prasmanan', 0, 'popo', '1231231', 'f5bb0c8de146c67b44ba', 'jessica3@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, '202f99690bd257803c248566bddc86cf', NULL, '2020-06-10 08:56:32', '1588239695_cover.jpg'),
('MCSNA008', 'Omah Roti', 'Prasmanan', 2.5, 'popu', '15671231231', '62c8ad0a15d9d1ca38d5', 'jessica4@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, '', NULL, '2020-06-10 11:02:05', '1591786724_roti.jpeg'),
('MCTUM009', 'Tumpeng Sari', 'Tumpeng', 0, 'popi', '123489', '62c8ad0a15d9d1ca38d5', 'jessica5@mhs.stts.edu', 'PR001', 'Jakarta Barat', 'Asemrowo', 1, 1, '', NULL, '2020-06-10 11:03:25', '1591783379_gado2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table promo
--

CREATE TABLE promo (
  id_promo varchar(255) NOT NULL,
  deskripsi varchar(255) NOT NULL,
  judul_promo varchar(255) NOT NULL,
  tanggal_awal date NOT NULL,
  status varchar(255) NOT NULL,
  potongan varchar(255) NOT NULL,
  tanggal_akhir date NOT NULL,
  gambar_promo varchar(255) NOT NULL,
  minimum_order int NOT NULL
)

--
-- Dumping data for table promo
--

INSERT INTO promo (id_promo, deskripsi, judul_promo, tanggal_awal, status, potongan, tanggal_akhir, gambar_promo, minimum_order) VALUES
('P0001', 'Pesan menu favorit kalian dan dapatkan potongan sebesar 15.000 dengan minimum pembelian 50.000. Promo hanya berlaku sampai ', 'bcsurabaya', '2020-05-02', '1', '15000', '2020-06-30', '../../../gambar/Image/promo (1).png', 50000),
('P0002', 'Pesan menu favorit kalian dan dapatkan potongan sebesar 20.000 dengan minimum pembelian 75.000. Promo hanya berlaku sampai', 'bm20', '2020-05-31', '1', '20000', '2020-06-22', '../../../gambar/Image/promo (2).png', 75000),
('P0003', 'Pesan menu favorit kalian dan dapatkan potongan sebesar 25.000 dengan minimum pembelian 75.000. Promo hanya berlaku sampai', 'eatlah', '2020-05-31', '1', '25000', '2020-06-25', '../../../gambar/Image/promo (3).png', 75000),
('P0004', 'Pesan menu favorit kalian dan dapatkan potongan sebesar 5.000 dengan minimum pembelian 25.000. Promo hanya berlaku sampai', 'makanenak', '2020-05-31', '1', '5000', '2020-06-28', '../../../gambar/Image/promo (4).png', 25000),
('P0005', 'Pesan menu favorit kalian dan dapatkan potongan sebesar 10.000 dengan minimum pembelian 25.000. Promo hanya berlaku sampai', 'makanyuk', '2020-05-31', '1', '10000', '2020-06-29', '../../../gambar/Image/promo (5).png', 25000);

-- --------------------------------------------------------

--
-- Table structure for table provinsi
--

CREATE TABLE provinsi (
  id_provinsi varchar(10) NOT NULL,
  nama_provinsi varchar(20) NOT NULL
)

--
-- Dumping data for table provinsi
--

INSERT INTO provinsi (id_provinsi, nama_provinsi) VALUES
('PR001', 'Jakarta'),
('PR002', 'Jawa Barat'),
('PR003', 'Jawa Tengah'),
('PR004', 'Jawa Timur'),
('PR005', 'Bali'),
('PR006', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table report
--

CREATE TABLE report (
  id_report SERIAL PRIMARY KEY,
  id_merchant varchar(10) NOT NULL,
  id_customer varchar(10) NOT NULL,
  pelapor varchar(10) NOT NULL,
  alasan varchar(50) NOT NULL,
  status int NOT NULL
);

--
-- Dumping data for table report
--

INSERT INTO report (id_report, id_merchant, id_customer, pelapor, alasan, status) VALUES
(1, 'MCNAS006', 'C0001', 'customer', 'Pesanan tidak datang.', 1),
(2, 'MCSNA008', 'C0008', 'customer', 'gak uenak blasssssssssssssss', 1),
(3, 'MCSNA008', 'C0008', 'customer', '', 1),
(4, 'MCSNA008', 'C0008', 'customer', 'bababab', 1);

-- --------------------------------------------------------

--
-- Table structure for table review
--

CREATE TABLE review (
  id_review varchar(20) NOT NULL,
  isi_review varchar(255) NOT NULL,
  id_htrans varchar(20) NOT NULL,
  rating int NOT NULL
);

--
-- Dumping data for table review
--

INSERT INTO review (id_review, isi_review, id_htrans, rating) VALUES
('', 'enak sis tapi porsinya kurang banyak ', 'HT0018', 4),
('00001', 'mantab jiwa', 'HT0016', 5),
('00002', 'mantab jiwa', 'HT0016', 1),
('00003', 'mantab jiwa', 'HT0016', 1),
('00004', 'makanannya enakk lohh', 'HT0016', 2),
('1', 'enak sis tapi porsinya kurang banyak ', 'HT0018', 1),
('RE00005', 'enak sis tapi porsinya kurang banyak ', 'HT0018', 4),
('RE00006', 'MAKANAN NYAA UENAKK POL', 'HT0027', 3),
('RE00007', 'ENAKK BUANGET POL', 'HT0030', 5),
('RE00008', 'MAKANAN NE UENAK SEH', 'HT0031', 3),
('RE00009', 'MAKANANE ENAK', 'HT0032', 2),
('RE00010', 'mantap', 'HT0004', 3),
('RE00011', 'lol', 'HT0032', 4),
('RE00012', 'lol', 'HT0032', 4),
('RE00013', 'lol', 'HT0032', 4),
('RE00014', 'lol', 'HT0032', 5),
('RE00015', 'makananen uenak', 'HT0004', 1),
('RE00016', 'mantap ', 'HT0033', 4);

-- --------------------------------------------------------

--
-- Table structure for table user
--

CREATE TABLE "user" (
  id_akun varchar(255) PRIMARY KEY NOT NULL,
  nama_depan varchar(255) NOT NULL,
  nama_belakang varchar(255) NOT NULL,
  email varchar(50) NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  alamat varchar(50) NOT NULL,
  kota varchar(50) NOT NULL,
  poin varchar(100) NOT NULL,
  no_telp varchar(50) NOT NULL,
  status varchar(200) NOT NULL
);

--
-- Dumping data for table user
--

INSERT INTO "user" (id_akun, nama_depan, nama_belakang, email, username, password, alamat, kota, poin, no_telp, status) VALUES
('C0001', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0002', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0003', 'as', 'as', 'as', 'as', 'as', 'as', '', '0', '123', '0'),
('C0004', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Malang', '0', '1234', '0'),
('C0005', 'a', 'a', 'a@gmail.com', 'a', 'a', 'a', 'KO001', '0', '1212', '0'),
('C0006', 'b', 'b', 'b@gmail.com', 'b', 'b', 'b', 'KO001', '0', '124', '0'),
('C0007', 'ba', 'ba', 'ba@gmail.com', 'ba', '255RR4Dc', 'ba', 'KO001', '0', '1245', '0'),
('C0008', 'AMELIOOO', 'MELAA', 'ameliadwijayani200@gmail.com', 'mel', '123', 'jalan jalan', 'Jakarta Barat', '1200', '1239865', '1'),
('C0009', 'mel', 'amel', 'amel218116745@gmail.com', 'mel', '1234', 'jalan wkwk', 'KO006', '0', '123451', '1'),
('C0010', 'amel', 'mel', 'amel218116745@gmail.com', 'meli', '5rahcmcR', 'jalan lalala', 'KO015', '0', '12300', '0'),
('C0011', 'amel', 'meli', 'amel218116745@gmail.com', 'melll', '5rahcmcR', 'sdd', 'KO006', '0', '1232132132136', '0'),
('C0012', 'amel', 'meli', 'amel218116745@gmail.com', 'amel', '5rahcmcR', 'jalan wkwk', 'KO006', '0', '1234567891123', '0'),
('C0013', 'amel', 'meli', 'amel218116745@gmail.com', 'amel', '5rahcmcR', 'jalan wkwk', 'KO006', '0', '1234567891124', '0'),
('C0014', 'meli', 'lia', 'amelia1@mhs.stts.edu', 'amelia', '12', 'jalan manyar', 'KO006', '0', '123456789', '0'),
('C0015', 'meli', 'lia', 'amelia1@mhs.stts.edu', 'amelia', '12', 'jalan manyar', 'KO006', '0', '111111111', '0'),
('C0016', 'amel', 'as', 'mel@mhs.stts.edu', 'mel', '12', 'jalan manyar', 'KO015', '0', '033542167', '0'),
('C0017', 'amel', 'as', 'mel@mhs.stts.edu', 'mel', '12', 'jalan manyar', 'KO015', '0', '03354216', '0'),
('C0018', 'ameloo', 'mel', 'amel@mhs.stts.edu', 'melii', '123', 'jalan hehe', 'KO011', '0', '999999999', '0'),
('C0019', 'a', 'a', 'aaa@gmail.com', 'aa', '123', 'a', 'KO006', '0', '99999999999', '0');

-- --------------------------------------------------------

--
-- Table structure for table website
--

CREATE TABLE website (
  batas_pesan varchar(20) NOT NULL,
  waktu_antar varchar(30) NOT NULL,
  id_merchant varchar(10) NOT NULL,
  kebijakan varchar(100) NOT NULL,
  cover varchar(30) NOT NULL
); 

--
-- Dumping data for table website
--

INSERT INTO website (batas_pesan, waktu_antar, id_merchant, kebijakan, cover) VALUES
('1 hari', '12:00 s/d 15:00', 'MCNAS006', 'PEMBATALAN MAKS H-4 HARI', '1591783107_esteler.jpg'),
('2 hari', '10:00 s/d 15:00', 'MCSNA008', 'pembatalan h-1 uang tidak kembali', '1589508027_cover.jpg'),
('3 hari', '10:00 s/d 12:00', 'MCTUM009', 'dilarang membatalkan pada hari H', '1591784234_gado2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table htransaksi
--
ALTER TABLE htransaksi
  ADD PRIMARY KEY (id_htrans);

--
-- Indexes for table kategori
--
ALTER TABLE kategori
  ADD PRIMARY KEY (id_kategori);

--
-- Indexes for table kategori_menu
--
ALTER TABLE kategori_menu
  ADD PRIMARY KEY (id_km);

--
-- Indexes for table kecamatan
--
ALTER TABLE kecamatan
  ADD PRIMARY KEY (id_kec);

--
-- Indexes for table kota
--
ALTER TABLE kota
  ADD PRIMARY KEY (id_kota);

--
-- Indexes for table merchant
--
ALTER TABLE merchant
  ADD PRIMARY KEY (id);

--
-- Indexes for table promo
--
ALTER TABLE promo
  ADD PRIMARY KEY (id_promo);

--
-- Indexes for table provinsi
--
ALTER TABLE provinsi
  ADD PRIMARY KEY (id_provinsi);

--
-- Indexes for table report
--
ALTER TABLE report
  ADD PRIMARY KEY (id_report);

--
-- Indexes for table review
--
ALTER TABLE review
  ADD PRIMARY KEY (id_review);

--
-- Indexes for table user
--
ALTER TABLE "user"
  ADD PRIMARY KEY (id_akun);

--
-- Indexes for table website
--
ALTER TABLE website
  ADD PRIMARY KEY (id_merchant);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table report
--
ALTER TABLE report
  ALTER id_report int NOT NULL AUTO_INCREMENT;, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
