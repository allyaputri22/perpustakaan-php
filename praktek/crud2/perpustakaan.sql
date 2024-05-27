-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 09:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama`, `penulis`, `isbn`, `jumlah`) VALUES
(6, 'Akuntansi Pengantar 1', '978-979-107-882-5', 'Supardi', 5),
(7, 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', '978-979-328-876-5', 'Samsulhadi', 2),
(8, 'Buku Pemrograman Konsep Dan Implementasi struktur data Dengan C++', '978-979-29-3328-4', 'Lamhot Sitorus', 5),
(9, 'Dasar-dasar, Desain, dan Implementasi DataBase Processing', '979-741-912-6', 'Daviid M.Kroenke', 10),
(10, 'Menggunakan MATLAB dan CodeVisionAVR', '978-979-29-4541- 6', 'Mada Sanjaya W.S.PH.', 13);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `telp`, `email`) VALUES
(5, 'Allya Putri Nadila Gustin', '087565432134', 'allya123@gmail.com'),
(6, 'Aprilia Rahayu Putri', '089765434567', 'putri34@gmail.com'),
(7, 'Muhammad Atharrazka', '087766543345', 'azka12@gmail.com'),
(8, 'Kim Soo Hyun ', '098765789087', 'soomen33@gmail.com'),
(9, 'Park Chanyeol', '089765433214', 'cloeey22@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
