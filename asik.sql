-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2015 at 09:30 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(3, 'adi kiswanto', 'adikiswanto@gmail.com', 'halo halo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(10) NOT NULL AUTO_INCREMENT,
  `noujian` varchar(200) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `nilai_sekolah` varchar(200) NOT NULL,
  `nilai_un` varchar(200) NOT NULL,
  `nilai_akhir` varchar(200) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `noujian`, `nama_mapel`, `nilai_sekolah`, `nilai_un`, `nilai_akhir`) VALUES
(1, '27-807-001-8', 'Bahasa Indonesia', '76', '80', '88'),
(2, '27-807-001-8', 'Kimia', '78', '77', '77'),
(3, '27-807-001-8', 'Matematika', '67', '67', '66'),
(4, '27-807-001-8', 'Biologi', '89', '78', '78'),
(5, '27-807-001-8', 'Bahasa Inggris', '65', '76', '87'),
(6, '27-807-001-8', 'Fisika', '67', '77', '67'),
(7, '27-807-001-8', 'PKn', '78', '88', '76'),
(9, '27-807-002-7', 'Geografi', '77', '77', '78'),
(10, '27-807-002-7', 'Matematika', '66', '67', '67'),
(11, '27-807-002-7', 'Sosiologi', '78', '78', '89'),
(12, '27-807-002-7', 'Bahasa Inggris', '87', '76', '65'),
(13, '27-807-002-7', 'Ekonomi', '67', '77', '67'),
(14, '27-807-002-7', 'PKn', '76', '88', '78'),
(15, '27-807-003-6', 'Bahasa Indonesia', '76', '80', '88'),
(16, '27-807-003-6', 'Kimia', '78', '77', '77'),
(17, '27-807-003-6', 'Matematika', '67', '67', '66'),
(18, '27-807-003-6', 'Biologi', '89', '78', '78'),
(19, '27-807-003-6', 'Bahasa Inggris', '65', '76', '87'),
(20, '27-807-003-6', 'Fisika', '67', '77', '67'),
(21, '27-807-003-6', 'PKn', '78', '88', '76');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `noujian` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`no`, `noujian`, `name`, `tgllhr`, `addresse`, `sekolah`, `jurusan`, `ket`) VALUES
(1, '27-807-001-8', 'Adi Kiswanto', '16 October 1998', 'demak', 'SMA 1', 'IPA', 'lulus'),
(2, '27-807-002-7', 'Ada', '17 October 1998', 'demak', 'SMA 2', 'IPS', 'lulus'),
(3, '27-807-003-6', 'Adu', '18 October 1998', 'demak', 'SMA 1', 'IPA', 'lulus'),
(4, '27-807-004-5', 'Ida', '19 October 1998', 'demak', 'SMA 14', 'IPS', 'lulus'),
(5, '27-807-005-4', 'Ani', '20 October 1998', 'demak', 'SMA 15', 'IPA', 'tidak lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'adi kiswanto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
