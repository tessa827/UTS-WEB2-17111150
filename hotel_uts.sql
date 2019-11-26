-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2019 pada 05.47
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `no_kamar` int(5) NOT NULL,
  `tgl_booking` varchar(20) NOT NULL,
  `tgl_cekin` varchar(20) NOT NULL,
  `tgl_cekout` varchar(20) NOT NULL,
  `bayar_dp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `nama`, `jenis_kamar`, `no_kamar`, `tgl_booking`, `tgl_cekin`, `tgl_cekout`, `bayar_dp`) VALUES
(4, 'Putri Utami', '1', 12, '2019-11-25T13:56', '2019-12-07T12:00', '2019-12-14T12:00', 3000000),
(6, 'Tessa Tiara Ningtias', '3', 33, '2019-11-25T14:04', '2019-12-06T12:00', '2019-12-07T12:00', 620000),
(7, 'Ujang Mamen', '2', 11, '2019-11-25T19:00', '2019-12-31T12:00', '2020-01-01T12:00', 1000000),
(8, 'Siti Muayanah', '1', 14, '2019-11-25T17:00', '2019-11-29T12:00', '2019-11-30T12:00', 400000),
(9, 'rafli wahyudi saputra', '2', 23, '2019-11-26T12:33', '2019-11-30T12:00', '2019-12-03T12:00', 2550000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
