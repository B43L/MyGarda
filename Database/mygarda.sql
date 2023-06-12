-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 04:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygarda`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `ID_Antrian` varchar(200) NOT NULL,
  `Nomor Antrian` int(50) NOT NULL,
  `Waktu Tunggu` int(60) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `ID_Layanan` int(50) NOT NULL,
  `ID_Pengguna` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`ID_Antrian`, `Nomor Antrian`, `Waktu Tunggu`, `Status`, `ID_Layanan`, `ID_Pengguna`) VALUES
('001', 1, 10, 'Sedang proses', 1, 101),
('002', 2, 17, 'Selesai', 2, 101);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `ID_Layanan` int(5) NOT NULL,
  `Jenis_Layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`ID_Layanan`, `Jenis_Layanan`) VALUES
(1, 'Keuangan'),
(2, 'Instansi'),
(3, 'Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID_Pengguna` int(200) NOT NULL,
  `Nama` varchar(70) NOT NULL,
  `Alamat` varchar(500) NOT NULL,
  `Nomor_Telepon` int(16) NOT NULL,
  `Nomor_Identitas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID_Pengguna`, `Nama`, `Alamat`, `Nomor_Telepon`, `Nomor_Identitas`) VALUES
(101, 'Rafa Adzani Dzaki Priyayasa', 'Jl. Pecantingan, Sekardangan Indah, Sekardangan, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215', 88228811, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD KEY `idPengguna_Fk` (`ID_Pengguna`),
  ADD KEY `idLayanan_Fk` (`ID_Layanan`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`ID_Layanan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID_Pengguna`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `idLayanan_Fk` FOREIGN KEY (`ID_Layanan`) REFERENCES `layanan` (`ID_Layanan`),
  ADD CONSTRAINT `idPengguna_Fk` FOREIGN KEY (`ID_Pengguna`) REFERENCES `pengguna` (`ID_Pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
