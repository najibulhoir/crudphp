-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2018 at 01:02 PM
-- Server version: 10.2.14-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1731710047`
--

-- --------------------------------------------------------

--
-- Table structure for table `1731710047_detail_pakaian`
--

CREATE TABLE `1731710047_detail_pakaian` (
  `id_pakaian` int(11) NOT NULL,
  `id_jenis_pakaian` int(11) NOT NULL,
  `nama_pakaian` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1731710047_detail_pakaian`
--

INSERT INTO `1731710047_detail_pakaian` (`id_pakaian`, `id_jenis_pakaian`, `nama_pakaian`, `harga`, `diskon`) VALUES
(1, 1, 'celana_panjang', 399000, '0.000'),
(2, 1, 'celana pendek', 199000, '0.100'),
(3, 2, 'kemeja panjang', 299000, '0.000'),
(4, 2, 'kemeja pendek', 259000, '0.250'),
(5, 4, 'jaket bulu', 599000, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `1731710047_jenis_pakaian`
--

CREATE TABLE `1731710047_jenis_pakaian` (
  `id_jenis_pakaian` int(11) NOT NULL,
  `jenis_pakaian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1731710047_jenis_pakaian`
--

INSERT INTO `1731710047_jenis_pakaian` (`id_jenis_pakaian`, `jenis_pakaian`) VALUES
(1, 'Celana'),
(2, 'Kemeja'),
(3, 'Jas'),
(4, 'jaket'),
(5, 'Sweater'),
(6, 'KAOS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1731710047_detail_pakaian`
--
ALTER TABLE `1731710047_detail_pakaian`
  ADD PRIMARY KEY (`id_pakaian`),
  ADD KEY `id_jenis_pakaian` (`id_jenis_pakaian`);

--
-- Indexes for table `1731710047_jenis_pakaian`
--
ALTER TABLE `1731710047_jenis_pakaian`
  ADD PRIMARY KEY (`id_jenis_pakaian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1731710047_detail_pakaian`
--
ALTER TABLE `1731710047_detail_pakaian`
  MODIFY `id_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `1731710047_jenis_pakaian`
--
ALTER TABLE `1731710047_jenis_pakaian`
  MODIFY `id_jenis_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `1731710047_detail_pakaian`
--
ALTER TABLE `1731710047_detail_pakaian`
  ADD CONSTRAINT `1731710047_detail_pakaian_ibfk_1` FOREIGN KEY (`id_jenis_pakaian`) REFERENCES `1731710047_jenis_pakaian` (`id_jenis_pakaian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
