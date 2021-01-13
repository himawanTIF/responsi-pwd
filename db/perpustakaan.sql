-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 02:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `email`, `password`) VALUES
('Himawan Azmi', 'himawanazmi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kodebk` int(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `thnterbit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodebk`, `judul`, `pengarang`, `penerbit`, `thnterbit`) VALUES
(1, 'Belajar Bahasa Indonesia', 'Tanpa Nama', 'Pustaka Indonesia', 2020),
(2, 'Belajar Matematika Dasar', 'Tan Panama', 'Pustaka Baru', 2019),
(3, 'Fisika Untuk SMA/MA Kelas XI', 'Marthen Kanginan', 'Erlangga', 2013),
(4, 'Biologi Umum', 'Yayasan Studi Kurikulum Biologi', 'PT Gramedia Jakarta', 2010),
(5, 'Bahasa Inggris \"When English Rings a Bell\"', 'Kemendikbud', 'Kemendikbud', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `kode` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`kode`, `nama`, `alamat`, `nohp`, `email`, `foto`) VALUES
(1, 'Himawan', 'Banguntapan', '08888999000', 'himawanazmi@gmail.com', '176215633_num.png'),
(2, 'Tan Panama', 'Bantul', '08777226669', 'tanpanama@gmail.com', '2028515807_Logo-UAD-Berwarna.png');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nopeminjaman` int(50) NOT NULL,
  `kodeangt` int(50) NOT NULL,
  `kodebk` int(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglhrskembali` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`nopeminjaman`, `kodeangt`, `kodebk`, `tglpinjam`, `tglhrskembali`, `tglkembali`) VALUES
(1, 1, 1, '2021-01-13', '2021-01-16', '2021-01-16'),
(2, 1, 5, '2021-01-14', '2021-01-17', '2021-01-17'),
(3, 1, 2, '2021-01-20', '2021-01-24', '2021-01-25'),
(4, 2, 3, '2021-01-13', '2021-01-16', '2021-01-15'),
(5, 2, 4, '2021-01-14', '2021-01-18', '2021-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kodebk`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nopeminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
