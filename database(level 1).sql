-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` varchar(3) NOT NULL,
  `namaguru` varchar(30) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`, `password`) VALUES
('G01', 'Karl', 'karl123'),
('G02', 'Mark', 'mark123');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` varchar(3) NOT NULL,
  `namakelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`) VALUES
('K01', '5 Ibnu Sina'),
('K02', '5 Ibnu Rusydi'),
('K03', '5 Ibnu Taymiyah');

-- --------------------------------------------------------

--
-- Table structure for table `kuiz`
--

CREATE TABLE `kuiz` (
  `idpelajar` varchar(4) NOT NULL,
  `idsoalan` varchar(4) NOT NULL,
  `tarikh` varchar(10) DEFAULT NULL,
  `pilih` varchar(1) DEFAULT NULL,
  `peratus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuiz`
--

INSERT INTO `kuiz` (`idpelajar`, `idsoalan`, `tarikh`, `pilih`, `peratus`) VALUES
('P01', 'S01', '17/04/2021', 'C', 75),
('P01', 'S02', '17/04/2021', 'C', 75),
('P01', 'S03', '17/04/2021', 'A', 75),
('P01', 'S04', '17/04/2021', 'A', 75);

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `idpelajar` varchar(4) NOT NULL,
  `namapelajar` varchar(30) DEFAULT NULL,
  `idkelas` varchar(3) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`idpelajar`, `namapelajar`, `idkelas`, `password`) VALUES
('P01', 'Sarah', 'K01', 'sarah123'),
('P02', 'James', 'K02', 'james123'),
('P03', 'Abu', 'K01', '123'),
('P04', 'Law Eng', 'K02', '123\r\n'),
('P08', 'Maxi', 'K02', 'maxi123');

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` varchar(4) NOT NULL,
  `namasoalan` varchar(30) DEFAULT NULL,
  `pilihana` varchar(30) DEFAULT NULL,
  `pilihanb` varchar(30) DEFAULT NULL,
  `pilihanc` varchar(30) DEFAULT NULL,
  `jawapan` varchar(1) DEFAULT NULL,
  `idguru` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `namasoalan`, `pilihana`, `pilihanb`, `pilihanc`, `jawapan`, `idguru`) VALUES
('S01', '1+1', '0', '2', '11', 'B', 'G01'),
('S02', '5 bahagi 5', '0', '10', '1', 'C', 'G01'),
('S03', '1+4', '5', '4', '3', 'A', 'G01'),
('S04', 'Sudut cakah', '98', '10', '90', 'A', 'G01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD PRIMARY KEY (`idpelajar`,`idsoalan`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`idpelajar`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
