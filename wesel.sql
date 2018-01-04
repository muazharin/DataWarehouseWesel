-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 04:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wesel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `alamat_kantor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `nama_kantor`, `alamat_kantor`) VALUES
(1, 'kantor1', 'silva mas'),
(2, 'kantor2', 'rajawali residence'),
(3, 'kantor3', 'mokodompit'),
(4, 'kantor4', 'baruga'),
(5, 'kantor5', 'kambu'),
(6, 'kantor6', 'baipas'),
(7, 'kantor7', 'anduonohu'),
(8, 'kantor8', 'madesabara'),
(9, 'kantor9', 'kontukowuna'),
(10, 'kantor10', 'kontu'),
(11, 'kantor11', 'ronggo warsito'),
(12, 'kantor12', 'watonea'),
(13, 'kantor13', 'lakilaponto'),
(14, 'kantor14', 'basukirahmat'),
(15, 'kantor15', 'perintis'),
(16, 'kantor16', 'anawai'),
(17, 'kantor17', 'pelangi'),
(18, 'kantor18', 'salangga'),
(19, 'kantor19', 'mata air'),
(20, 'kantor20', 'lasitarda');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_pejualan` int(11) NOT NULL,
  `nama_kantor` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jualan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_pejualan`, `nama_kantor`, `kota`, `jualan`, `tahun`) VALUES
(1, 'kantor1', 'kendari', 3129, 2015),
(2, 'kantor2', 'kendari', 2399, 2017),
(3, 'kantor3', 'bau-bau', 5032, 2016),
(4, 'kantor4', 'Kolaka', 2365, 2016),
(5, 'kantor5', 'Konawe', 2367, 2017),
(6, 'kantor6', 'Raha', 2567, 2017),
(7, 'kantor7', 'Bombana', 3468, 2015),
(8, 'Kantor8', 'Wanci', 3564, 2016),
(9, 'kantor9', 'Ereke', 2570, 2015),
(10, 'kantor10', 'Lambuya', 1670, 2015),
(11, 'kantor11', 'Pasarwajo', 1270, 2017),
(12, 'kantor12', 'Jakarta', 6700, 2017),
(13, 'kantor13', 'Bandung', 4500, 2016),
(14, 'kantor14', 'Surabaya', 3870, 2016),
(15, 'kantor15', 'Medan', 6500, 2015),
(16, 'kantor16', 'Padang', 4760, 2016),
(17, 'kantor17', 'Palembang', 2560, 2017),
(18, 'kantor18', 'Aceh', 3470, 2017),
(19, 'kantor19', 'Pontianak', 3450, 2016),
(20, 'kantor20', 'Makassar', 3540, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kota`
--

CREATE TABLE `transaksi_kota` (
  `id_transaksi` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jml_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_kota`
--

INSERT INTO `transaksi_kota` (`id_transaksi`, `kota`, `jml_transaksi`) VALUES
(1, 'kendari', 822),
(2, 'kendari', 679),
(3, 'bau-bau', 430),
(4, 'Kolaka', 267),
(5, 'Konawe', 786),
(6, 'Raha', 348),
(7, 'Bombana', 900),
(8, 'Wanci', 785),
(9, 'Ereke', 389),
(10, 'Lambuya', 260),
(11, 'Pasarwajo', 180),
(12, 'Jakarta', 690),
(13, 'Bandung', 540),
(14, 'Surabaya', 650),
(15, 'Medan', 430),
(16, 'Padang', 590),
(17, 'Palembang', 380),
(18, 'Aceh', 549),
(19, 'Pontianak', 570),
(20, 'Makassar', 650);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `password`) VALUES
('admin1', 'muazharin'),
('rul', 'rul');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `tahun`) VALUES
(1, 2015),
(2, 2016),
(3, 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`),
  ADD UNIQUE KEY `nama_kantor` (`nama_kantor`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_pejualan`),
  ADD KEY `kota` (`kota`),
  ADD KEY `nama_kantor` (`nama_kantor`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `transaksi_kota`
--
ALTER TABLE `transaksi_kota`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `kota` (`kota`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_pejualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi_kota`
--
ALTER TABLE `transaksi_kota`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `transaksi_kota` (`kota`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`nama_kantor`) REFERENCES `kantor` (`nama_kantor`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`tahun`) REFERENCES `waktu` (`tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
