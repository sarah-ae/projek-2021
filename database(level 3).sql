-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 10:01 PM
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
-- Database: `kuizonline3`
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
('K03', '5 Ibnu Taymiyah'),
('K04', '5 Ibnu Khaldun');

-- --------------------------------------------------------

--
-- Table structure for table `kuiz`
--

CREATE TABLE `kuiz` (
  `idpelajar` varchar(4) NOT NULL,
  `idsoalan` varchar(4) NOT NULL,
  `tarikh` varchar(10) DEFAULT NULL,
  `pilih` varchar(60) DEFAULT NULL,
  `peratus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuiz`
--

INSERT INTO `kuiz` (`idpelajar`, `idsoalan`, `tarikh`, `pilih`, `peratus`) VALUES
('P01', 'S001', '18/04/2021', 'C', 100),
('P01', 'S002', '18/04/2021', 'A', 0),
('P01', 'S004', '18/04/2021', 'B', 100),
('P01', 'S008', '18/04/2021', 'benar', 100),
('P01', 'S009', '18/04/2021', 'Lebih dari 90 darjah', 100),
('P02', 'S001', '18/04/2021', 'B', 50),
('P02', 'S004', '18/04/2021', 'B', 50),
('P02', 'S008', '18/04/2021', 'benar', 50),
('P02', 'S009', '18/04/2021', 'entah', 50);

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
('P02', 'Karim', 'K01', 'karim123'),
('P03', 'Kamal', 'K04', 'kamal123'),
('P07', 'Mustafa', 'K03', 'must123');

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` varchar(4) NOT NULL,
  `namasoalan` varchar(60) DEFAULT NULL,
  `pilihana` varchar(30) DEFAULT NULL,
  `pilihanb` varchar(30) DEFAULT NULL,
  `pilihanc` varchar(30) DEFAULT NULL,
  `jawapan` varchar(60) DEFAULT NULL,
  `idguru` varchar(3) DEFAULT NULL,
  `idtopik` varchar(3) NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `namasoalan`, `pilihana`, `pilihanb`, `pilihanc`, `jawapan`, `idguru`, `idtopik`, `jenis`) VALUES
('S001', 'Manakah sudut cakah?', '80', '190', '99', 'C', 'G01', 'T01', 1),
('S002', '1+1=?', '11', '2', 'kosong', 'B', 'G02', 'T02', 1),
('S003', '5 bahagi 5', '0', '1', '10', 'B', 'G02', 'T03', 1),
('S004', 'Manakah sudut tirus?', '120', '70', '99', 'B', 'G01', 'T01', 1),
('S008', 'Apakah pentagon mempunyai 5 sisi?', '', '', '', 'benar', 'G01', 'T01', 2),
('S009', 'Apakah sudut cakah?', '', '', '', 'Lebih dari 90 darjah', 'G01', 'T01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` varchar(3) NOT NULL,
  `namatopik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idtopik`, `namatopik`) VALUES
('T01', 'Jenis Sudut'),
('T02', 'Tambah Tolak'),
('T03', 'Darab Bahagi');

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

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
