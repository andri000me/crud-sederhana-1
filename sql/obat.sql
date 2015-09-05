-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2015 at 08:02 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
`idobat` int(5) NOT NULL,
  `namaobat` varchar(50) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stock` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idobat`, `namaobat`, `jenis`, `harga`, `stock`) VALUES
(4, 'urinter', 'obat antiseptik', 10, 1000),
(5, 'obat merah', 'obat antiseptik', 200000, 10),
(7, 'obat merah', 'obat antiseptik', 10, 10000),
(8, 'obat merah', 'obat antisep', 100000, 10),
(9, 'pararodon', 'kapsul', 1000, 1000),
(10, 'obat merah', 'kajhsd', 10000, 10),
(11, 'oskadon', 'kapsul', 20000, 200),
(12, 'obat merah', 'oskadon oye', 100, 100),
(13, 'pararodon', 'asik', 100000, 10),
(14, 'obat merah', 'obat antiseptik', 100000, 10),
(17, 'obat merah', 'obat antiseptik', 100000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`idobat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
MODIFY `idobat` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
