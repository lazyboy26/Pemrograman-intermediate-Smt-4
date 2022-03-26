-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 07:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_film`
--

CREATE TABLE `data_film` (
  `id_film` int(11) NOT NULL,
  `kd_genre` int(11) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `subjudul` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tgl_rilis` varchar(50) NOT NULL,
  `durasi` int(11) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_film`
--

INSERT INTO `data_film` (`id_film`, `kd_genre`, `judul_film`, `subjudul`, `deskripsi`, `tgl_rilis`, `durasi`, `negara`, `rating`, `gambar`) VALUES
(74, 3, 'Avenger', 'Endgame', 'Avenger End Game ', 'Select Year', 300, 'AS', 9, '1648311417-Doctor_Strange_in_the_Multiverse_of_Madness_poster.jpeg.jpeg'),
(75, 2, 'as', 'asd', 'asd  ', 'Select Year', 222, 'as', 9, '1648313917-097349000_1552638820-avengers-endgame-official-poster.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Action'),
(2, 'Drama'),
(3, 'Horror'),
(4, 'Comedy'),
(5, 'Sains Fiction'),
(6, 'Thriller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_film`
--
ALTER TABLE `data_film`
  ADD PRIMARY KEY (`id_film`),
  ADD UNIQUE KEY `kd_gendre` (`kd_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_film`
--
ALTER TABLE `data_film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_film`
--
ALTER TABLE `data_film`
  ADD CONSTRAINT `data_film_ibfk_1` FOREIGN KEY (`kd_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
