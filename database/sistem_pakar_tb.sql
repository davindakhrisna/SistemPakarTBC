-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 04:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar_tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `bt_bawah` int(5) NOT NULL,
  `bt_atas` int(5) NOT NULL,
  `kode_nama` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `bt_bawah`, `bt_atas`, `kode_nama`, `isi`) VALUES
(1, 'batuk berdarah', 1, 30, 'batuk', 'Isikan berapa hari anda mengalami batuk berdarah'),
(2, 'demam tinggi', 1, 30, 'demam', 'Isikan berapa hari anda mengalami demam tinggi'),
(3, 'keringat dingin', 1, 30, 'keringat', 'Isikan berapa hari anda mengalami keringat dingin'),
(4, 'dada nyeri', 1, 10, 'dada_nyeri', 'Isikan tingkatan dada nyeri anda dari 1 sampai 10'),
(5, 'nafas sesak', 1, 10, 'nafas', 'Isikan tingkatan sesak nafas anda dari 1 sampai 10'),
(6, 'nafsu makan berkurang', 1, 30, 'nafsu_makan', 'Isikan berapa hari anda mengalami kurang nafsu makan'),
(7, 'berat badan turun', 1, 10, 'berat_badan', 'Isikan berapa kilogram berat badan anda turun');

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `id` int(11) NOT NULL,
  `nama_output` varchar(50) NOT NULL,
  `bt_bawah` int(5) NOT NULL,
  `bt_atas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`id`, `nama_output`, `bt_bawah`, `bt_atas`) VALUES
(1, 'Cek Dahak', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
