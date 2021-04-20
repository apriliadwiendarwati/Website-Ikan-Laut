-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 01:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `kesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_komentar`
--

INSERT INTO `tabel_komentar` (`id`, `nama`, `email`, `pesan`, `kesan`) VALUES
(10, 'Pinocchio', 'Pinocchio10@gmail.com', 'Penjelasan dan pengertian sangat lengkap. Thanks', 'Gambarnya bagus'),
(11, 'NaJaemin', 'najaemin61@gmail.com', 'I really like your article. Please include an understanding of mermaids.', 'I will visit again.'),
(12, 'real_pcy', 'chanyeol@gmail.com', 'Do you sell clown fish I want to buy it if you sell it.', 'I really like clown fish'),
(13, 'Mutiara', 'mutiara@gmail.com', 'Artikelmu lucu', 'terimakasih'),
(14, 'Meli', 'melii2@gmail.com', 'artikelmu unik', 'hebat'),
(15, 'Miya', 'miya@gmail.com', 'Artikel mu keren', 'Mantap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
