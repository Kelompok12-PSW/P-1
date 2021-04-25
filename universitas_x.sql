-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 05:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas_x`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_akademis`
--

CREATE TABLE `mahasiswa_akademis` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_akademis`
--

INSERT INTO `mahasiswa_akademis` (`id`, `nim`, `nama`, `angkatan`, `program_studi`, `kelas`, `username`, `password`) VALUES
(1, 11420057, 'Tahnia', 2020, 'D4 Teknologi Rekayasa Perangkat Lunak', '41TRPL2', '11420057', 'tahnia13'),
(2, 11420086, 'Theresya Gurning', 2020, 'D4 Teknologi Rekayasa Perangkat Lunak', '41TRPL2', '11420086', 'theresya06');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_pribadi`
--

CREATE TABLE `mahasiswa_pribadi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `jalur_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_pribadi`
--

INSERT INTO `mahasiswa_pribadi` (`id`, `nama`, `ttl`, `alamat`, `agama`, `golongan_darah`, `jalur_masuk`) VALUES
(1, 'Tahnia', 'Porsea, 13 Juni 2002', 'Batu Bara', 'Islam', 'O', 'USM 1'),
(2, 'Angela One Erika', 'Petapahan, 21 Juli 2001', 'Pematang Siantar', 'Islam', 'O', 'USM 3'),
(3, 'Theresya Gurning ', 'Lumban Gurning, 6 Mei 2003', 'Pintupohan Meranti', 'Kristen Protestan', 'B', 'USM 3'),
(4, 'Daniel Exaudi Pasaribu', 'Garoga, 1 September 2002', 'Pasar Garoga', 'Kristen Protestan', 'O', 'USM 2B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_akademis`
--
ALTER TABLE `mahasiswa_akademis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa_pribadi`
--
ALTER TABLE `mahasiswa_pribadi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa_akademis`
--
ALTER TABLE `mahasiswa_akademis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa_pribadi`
--
ALTER TABLE `mahasiswa_pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
