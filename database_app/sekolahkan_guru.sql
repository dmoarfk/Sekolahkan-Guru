-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 04:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahkan_guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Nama_Depan` char(20) NOT NULL,
  `Nama_Belakang` char(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `No_Telepon` varchar(15) NOT NULL,
  `Jenis_Akun` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Nama_Depan`, `Nama_Belakang`, `Email`, `Password`, `No_Telepon`, `Jenis_Akun`) VALUES
('ab', 'cd', 'ab@gmail.com', '123', 'q', 'Guru'),
('a', 'b', 'abc@gmail.com', '123', '123', 'Donatur'),
('ab', 'cd', 'abcd@yahoo.com', 'q', 'q', 'Guru'),
('ab', 'cd', 'abcdp', 'q', 'q', 'Guru'),
('a', 'b', 'c', 'd', 'e', 'Donatur');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `Email` varchar(30) NOT NULL,
  `Universitas` varchar(35) NOT NULL,
  `Article` varchar(50) NOT NULL,
  `Status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`Email`, `Universitas`, `Article`, `Status`) VALUES
('ab@gmail.com', 'PU', 'ab.docx', 'Berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `No` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Donatur` varchar(15) NOT NULL,
  `Jumlah_Donasi` int(11) NOT NULL,
  `Kode_verifikasi` int(11) NOT NULL,
  `Terverifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_guru`
--

CREATE TABLE `profil_guru` (
  `NIK` varchar(20) NOT NULL,
  `Nama_Lengkap` char(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` char(10) NOT NULL,
  `Alamat` longtext NOT NULL,
  `Nomor_Telepon` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pendidikan_Terakhir` char(10) NOT NULL,
  `Ijazah` varchar(50) NOT NULL,
  `Foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_guru`
--

INSERT INTO `profil_guru` (`NIK`, `Nama_Lengkap`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `Nomor_Telepon`, `Email`, `Pendidikan_Terakhir`, `Ijazah`, `Foto`) VALUES
('123', 'abc', '2018-04-03', 'perempuan', 'jl.blablabla no.1,kota blabla, kabupaten blabla', '0123456', 'ab@gmail.com', 'SMA', '', 'test.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `profil_guru`
--
ALTER TABLE `profil_guru`
  ADD PRIMARY KEY (`NIK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
