-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 19.01
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `menu`
--

DROP TABLE IF EXISTS `menu`;
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
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `status_menu`, `id_km`, `id_merchant`, `deskripsi_menu`, `gambar_menu`) VALUES
(1, 'Kedai Kayu Manis', '30000', 
'1', 'KM001', 'MCPRA006',
'Nasi Putih, Ayam Goreng, Sayur Asem / Cah Kangkung, Tahu, Tempe', 'Kedai_Kayu_Manis.jpg'),
(2, 'Dapur Serundeng', '36000', 
'1', 'KM001', 'MCPRA006',
'1 Pilihan Karbohidrat,
2 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
2 Makanan Penutup,
2 Minuman,
1 Soup,
2 Menu Pelengkap', 'Dapur_Serundeng.jpg'),
(3, 'Dapur Minggu', '20000', 
'1', 'KM001', 'MCPRA006',
'2 Pilihan Karbohidrat,
2 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
3 Makanan Penutup,
2 Minuman,
1 Soup,
3 Menu Pelengkap', 'Dapur_Minggu.jpg'),
(4, 'Pokinometry', '45000', 
'1', 'KM001', 'MCPRA006',
'2 Pilihan Karbohidrat,
1 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
1 Minuman,
1 Soup,
2 Menu Pelengkap', 'Pokinometry.jpg'),
(5, 'Grabba Java', '22000', 
'1', 'KM001', 'MCPRA006',
'1 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
1 Makanan Penutup,
1 Minuman', 'Grabba_Java.jpg'),
(7, 'Rasela', '38000', 
'1', 'KM001', 'MCPRA006',
'2 Menu Utama,
2 Menu Pendamping,
1 Makanan Penutup,
1 Minuman,
1 Soup', 'Rasela.jpg'),
(8, 'Sedap Makan', '28000', 
'1', 'KM001', 'MCPRA006',
'2 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
1 Makanan Penutup,
1 Minuman,', 'Sedap_Makan.jpg'),
(9, 'Seroja', '31000', 
'1', 'KM001', 'MCPRA006',
'2 Menu Utama,
7 Menu Pendamping,
1 Makanan Penutup,
1 Minuman', 'Seroja.jpg'),
(6, 'Ki Semar Catering', '20000', 
'1', 'KM001', 'MCPRA006',
'2 Pilihan Karbohidrat,
2 Menu Utama,
1 Menu Pendamping,
1 Menu Sayuran,
3 Makanan Penutup,
2 Minuman,
1 Soup,
3 Menu Pelengkap', 'Ki_Semar_Catering.jpg'),
(10, 'Mbah Jungkrak', '18500', 
'1', 'KM001', 'MCPRA006',
'1 Menu Utama,
3 Menu Pendamping,
1 Makanan Penutup,
1 Minuman,
1 Soup', 'Mbah_Jungkrak.jpg'),
(11, 'Daun Wangi', '20000', 
'1', 'KM001', 'MCPRA006',
'1 Menu Utama,
1 Menu Pendamping,
1 Makanan Penutup,
2 Minuman,
1 Soup,', 'Daun_Wangi.jpg'),
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
(46, 'Tumpeng Rinjani', '600000', '1', 'KM001', 'MCTUM009', 'Nasi Kuning, Sambal Goreng, Kentang-Ati, Mie Goreng, Ayam Goreng, Serundeng, Telor Balado, Empal Suwir, Perkedel, Kering Tempe, Sambal', 'tumpeng-tidar-web.jpg'),;


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
