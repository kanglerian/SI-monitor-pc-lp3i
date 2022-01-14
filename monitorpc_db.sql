-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2019 at 08:59 AM
-- Server version: 5.5.60
-- PHP Version: 5.4.45-0+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitorpc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_komputer`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_komputer` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_komputer` varchar(20) NOT NULL,
  `id_tools` varchar(10) NOT NULL,
  `tgl_pasang` date NOT NULL,
  `tgl_lepas` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_komputer` (`id_komputer`),
  KEY `id_tools` (`id_tools`),
  KEY `id_tools_2` (`id_tools`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `tbl_detail_komputer`
--

INSERT INTO `tbl_detail_komputer` (`id_detail`, `id_komputer`, `id_tools`, `tgl_pasang`, `tgl_lepas`, `deskripsi`, `status`) VALUES
(14, 'LAB1PC21', 'K004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(15, 'LAB1PC21', 'MS002', '2019-04-18', '0000-00-00', 'Work It !', 'Ready'),
(16, 'LAB1PC21', 'M004', '2019-04-18', '0000-00-00', 'Work It !', 'Ready'),
(17, 'LAB1PC21', 'V002', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(18, 'LAB1PC21', 'R002', '2019-04-18', '0000-00-00', 'Baik tapi belum di cek', 'Ready'),
(19, 'LAB1PC21', 'P002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(20, 'LAB2PC01', 'MS002', '2019-04-18', '0000-00-00', 'Work it', 'Ready'),
(21, 'LAB2PC01', 'K004', '2019-04-18', '0000-00-00', 'Work it !\r\n', 'Ready'),
(22, 'LAB2PC01', 'M004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(23, 'LAB2PC01', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(24, 'LAB2PC01', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(25, 'LAB2PC01', 'V002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(26, 'LAB2PC02', 'K004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(27, 'LAB2PC02', 'M004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(28, 'LAB2PC02', 'MS002', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(29, 'LAB2PC02', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(30, 'LAB2PC02', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(31, 'LAB2PC02', 'V002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(32, 'LAB3PC19', 'K004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(33, 'LAB3PC19', 'M005', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(34, 'LAB3PC19', 'MS002', '2019-04-18', '0000-00-00', 'Scroll ga jalan !', 'Ready'),
(35, 'LAB3PC19', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(36, 'LAB3PC19', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek ', 'Ready'),
(37, 'LAB2PC04', 'K004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(38, 'LAB2PC04', 'M005', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(39, 'LAB2PC04', 'MS002', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(40, 'LAB2PC04', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(41, 'LAB2PC04', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek !', 'Ready'),
(42, 'LAB2PC04', 'V002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(43, 'LAB2PC05', 'K002', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(44, 'LAB2PC05', 'M004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(45, 'LAB2PC05', 'MS007', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(46, 'LAB2PC05', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(47, 'LAB2PC05', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(48, 'LAB2PC05', 'V002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(49, 'LAB2PC06', 'K004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(50, 'LAB2PC06', 'M004', '2019-04-18', '0000-00-00', 'Work it !', 'Ready'),
(51, 'LAB2PC06', 'MS002', '2019-04-18', '0000-00-00', 'Scroll rusak !', 'Ready'),
(52, 'LAB2PC06', 'P003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(53, 'LAB2PC06', 'R003', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(54, 'LAB2PC06', 'V002', '2019-04-18', '0000-00-00', 'Belum di cek', 'Ready'),
(55, 'LAB1PC09', 'M001', '2019-04-27', '0000-00-00', 'Baik', 'Ready'),
(56, 'LAB1PC09', 'MS002', '2019-04-27', '0000-00-00', 'Scroll rusak', 'Ready'),
(57, 'LAB1PC09', 'K002', '2019-04-27', '0000-00-00', 'Baik', 'Ready'),
(58, 'LAB1PC09', 'P002', '2019-04-27', '0000-00-00', 'Baik', 'Ready'),
(59, 'LAB1PC09', 'R002', '2019-04-27', '0000-00-00', 'Belum di cek', 'Ready'),
(60, 'LAB1PC09', 'V003', '2019-04-27', '0000-00-00', 'Belum di cek', 'Ready'),
(61, 'LAB1PC10', 'K004', '2019-04-27', '0000-00-00', 'Baik', 'Ready'),
(62, 'LAB1PC10', 'M001', '2019-04-27', '0000-00-00', 'Baik', 'Ready'),
(63, 'LAB1PC10', 'MS002', '0000-00-00', '0000-00-00', 'Baik', 'Ready'),
(64, 'LAB1PC10', 'P002', '0000-00-00', '0000-00-00', 'Baik', 'Ready'),
(65, 'LAB1PC10', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(66, 'LAB1PC10', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(67, 'LAB1PC03', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(68, 'LAB1PC03', 'MS002', '0000-00-00', '0000-00-00', 'Scroll Rusak', 'Ready'),
(69, 'LAB1PC03', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(70, 'LAB1PC03', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(71, 'LAB1PC03', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(72, 'LAB1PC03', 'M005', '0000-00-00', '0000-00-00', '', 'Ready'),
(73, 'LAB1PC02', 'K002', '0000-00-00', '0000-00-00', '', 'Ready'),
(74, 'LAB1PC02', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(75, 'LAB1PC02', 'MS002', '0000-00-00', '0000-00-00', 'Scroll rusak', 'Ready'),
(76, 'LAB1PC02', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(77, 'LAB1PC02', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(78, 'LAB1PC02', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(79, 'LAB1PC01', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(81, 'LAB1PC01', 'MS001', '0000-00-00', '0000-00-00', '', 'Ready'),
(82, 'LAB1PC01', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(83, 'LAB1PC01', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(84, 'LAB1PC04', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(85, 'LAB1PC04', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(86, 'LAB1PC04', 'MS002', '0000-00-00', '0000-00-00', '', 'Ready'),
(87, 'LAB1PC04', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(88, 'LAB1PC04', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(89, 'LAB1PC04', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(90, 'LAB1PC12', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(91, 'LAB1PC12', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(92, 'LAB1PC12', 'MS002', '0000-00-00', '0000-00-00', 'Scroll rusak\r\n', 'Ready'),
(93, 'LAB1PC12', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(94, 'LAB1PC12', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(95, 'LAB1PC12', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(96, 'LAB1PC14', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(97, 'LAB1PC14', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(98, 'LAB1PC14', 'MS002', '0000-00-00', '0000-00-00', 'Scroll Rusak', 'Ready'),
(99, 'LAB1PC14', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(100, 'LAB1PC14', 'R003', '0000-00-00', '0000-00-00', '', 'Ready'),
(101, 'LAB1PC14', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(102, 'LAB1PC13', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(103, 'LAB1PC13', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(104, 'LAB1PC13', 'MS002', '0000-00-00', '0000-00-00', 'Scroll Rusak', 'Ready'),
(105, 'LAB1PC13', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(106, 'LAB1PC13', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(107, 'LAB1PC15', 'MS002', '0000-00-00', '0000-00-00', '', 'Ready'),
(108, 'LAB1PC15', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(109, 'LAB1PC15', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(111, 'LAB1PC13', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(112, 'LAB1PC15', 'R003', '0000-00-00', '0000-00-00', '', 'Ready'),
(113, 'LAB1PC15', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(114, 'LAB1PC15', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(115, 'LAB1PC16', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(116, 'LAB1PC16', 'MS007', '0000-00-00', '0000-00-00', '', 'Ready'),
(117, 'LAB1PC16', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(118, 'LAB1PC16', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(119, 'LAB1PC16', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(120, 'LAB1PC16', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(121, 'LAB1PC08', 'MS002', '0000-00-00', '0000-00-00', '', 'Ready'),
(122, 'LAB1PC08', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(123, 'LAB1PC08', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(124, 'LAB1PC08', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(125, 'LAB1PC08', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(126, 'LAB1PC08', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(127, 'LAB1PC07', 'P004', '0000-00-00', '0000-00-00', '', 'Ready'),
(128, 'LAB1PC07', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(129, 'LAB1PC07', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(130, 'LAB1PC07', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(131, 'LAB1PC07', 'MS001', '0000-00-00', '0000-00-00', '', 'Ready'),
(132, 'LAB1PC07', 'K001', '0000-00-00', '0000-00-00', '', 'Ready'),
(133, 'LAB1PC17', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(134, 'LAB1PC17', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(135, 'LAB1PC17', 'MS002', '0000-00-00', '0000-00-00', '', 'Ready'),
(136, 'U-PC05', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(137, 'U-PC05', 'MS007', '0000-00-00', '0000-00-00', '', 'Ready'),
(138, 'U-PC05', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(139, 'U-PC05', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(140, 'U-PC05', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(141, 'U-PC05', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(142, 'LAB1PC17', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(143, 'LAB1PC17', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(144, 'LAB1PC17', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(145, 'U-PC07', 'M002', '0000-00-00', '0000-00-00', '', 'Ready'),
(146, 'U-PC07', 'MS007', '0000-00-00', '0000-00-00', '', 'Ready'),
(147, 'U-PC07', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(148, 'U-PC07', 'R004', '0000-00-00', '0000-00-00', '', 'Ready'),
(149, 'U-PC07', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(150, 'U-PC07', 'V002', '0000-00-00', '0000-00-00', '', 'Ready'),
(151, 'U-PC03', 'M002', '0000-00-00', '0000-00-00', '', 'Ready'),
(152, 'U-PC03', 'MS002', '0000-00-00', '0000-00-00', 'Scroll rusak', 'Ready'),
(153, 'U-PC03', 'K004', '0000-00-00', '0000-00-00', '', 'Ready'),
(154, 'U-PC03', 'R003', '0000-00-00', '0000-00-00', '', 'Ready'),
(155, 'U-PC03', 'P002', '0000-00-00', '0000-00-00', '', 'Ready'),
(156, 'LAB2PC20', 'M001', '0000-00-00', '0000-00-00', '', 'Ready'),
(157, 'LAB2PC20', 'MS002', '0000-00-00', '0000-00-00', '', 'Ready'),
(158, 'LAB2PC20', 'K002', '0000-00-00', '0000-00-00', '', 'Ready'),
(159, 'LAB2PC20', 'R002', '0000-00-00', '0000-00-00', '', 'Ready'),
(160, 'LAB2PC20', 'P004', '0000-00-00', '0000-00-00', '', 'Pilih'),
(161, 'LAB1PC01', 'M006', '2019-04-30', '2019-05-04', 'Layar Kedip-kedip', 'Perbaikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_ruangan` (
  `id_detail_r` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruangan` int(11) NOT NULL,
  `id_tools` varchar(20) NOT NULL,
  `tgl_pasang` date NOT NULL,
  `tgl_lepas` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_detail_r`),
  KEY `id_ruangan` (`id_ruangan`,`id_tools`),
  KEY `id_tools` (`id_tools`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_detail_ruangan`
--

INSERT INTO `tbl_detail_ruangan` (`id_detail_r`, `id_ruangan`, `id_tools`, `tgl_pasang`, `tgl_lepas`, `deskripsi`, `status`) VALUES
(1, 201, 'K001', '2019-05-06', '2019-05-16', 'anu', 'Ready'),
(2, 202, 'M001', '2019-05-09', '2019-05-10', 'anu', 'Ready'),
(3, 205, 'DSLR01', '2019-05-18', '0000-00-00', 'Dipakai pak roni', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(18, 'Hardisk'),
(17, 'Kamera'),
(14, 'Keyboard'),
(16, 'Monitor'),
(21, 'Motherboard'),
(10, 'Mouse'),
(20, 'Processor'),
(19, 'RAM'),
(15, 'VGA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komputer`
--

CREATE TABLE IF NOT EXISTS `tbl_komputer` (
  `id_komputer` varchar(20) NOT NULL,
  `isbn` int(16) NOT NULL,
  `no_meja` varchar(20) NOT NULL,
  `nama_komputer` varchar(30) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `kabel` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_komputer`),
  KEY `id_ruangan` (`id_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komputer`
--

INSERT INTO `tbl_komputer` (`id_komputer`, `isbn`, `no_meja`, `nama_komputer`, `id_ruangan`, `kabel`, `deskripsi`, `status`) VALUES
('LAB1-PC', 0, 'Meja Dosen Lab 1', 'LAB1-PC', 301, 'Connect', 'Belum di edit nama, Hardisk hampir habis. Sound ga nyala', 'Ready'),
('LAB1PC01', 0, 'Meja 01', 'LAB1PC01', 301, 'Connect', 'Bagus', 'Ready'),
('LAB1PC02', 0, 'Meja 02', 'LAB1PC02', 301, 'Connect', '-', 'Ready'),
('LAB1PC03', 0, 'Meja 03', 'LAB1PC03', 301, 'Connect', '-', 'Ready'),
('LAB1PC04', 0, 'Meja 11', 'LAB1PC04', 301, 'Connect', '-', 'Ready'),
('LAB1PC05', 0, 'Meja 05', 'LAB1PC05', 301, 'Connect', '-', 'Ready'),
('LAB1PC06', 0, 'Meja 06', 'LAB1PC06', 301, 'Disabled', '-', 'Ready'),
('LAB1PC07', 0, 'Meja 07', 'LAB1PC07', 301, 'Disabled', '-', 'Ready'),
('LAB1PC08', 0, 'Meja 08', 'LAB1PC08', 301, 'Connect', '-', 'Ready'),
('LAB1PC09', 0, 'Meja 09', 'LAB1PC09', 301, 'Connect', '-', 'Ready'),
('LAB1PC10', 0, 'Meja 10', 'LAB1PC10', 301, 'Connect', '-', 'Ready'),
('LAB1PC12', 0, 'Meja 12', 'LAB1PC12', 301, 'Connect', '-', 'Ready'),
('LAB1PC13', 0, 'Meja 13', 'LAB1PC13', 301, 'Connect', '-', 'Ready'),
('LAB1PC14', 0, 'Meja 14', 'LAB1PC14', 301, 'Connect', '-', 'Ready'),
('LAB1PC15', 0, 'Meja 15', 'LAB1PC15', 301, 'Connect', '-', 'Ready'),
('LAB1PC16', 0, 'Meja 16', 'LAB1PC16', 301, 'Connect', '-', 'Ready'),
('LAB1PC17', 0, 'Meja 17', 'LAB1PC17', 301, 'Connect', '', 'Ready'),
('LAB1PC19', 0, 'Meja 19', 'LAB1PC19', 301, 'Connect', '-', 'Ready'),
('LAB1PC21', 0, 'Meja Dosen Lab 2', 'LAB1PC21', 302, 'Connect', 'Display belum di install DriverPack', 'Ready'),
('LAB1PC23', 0, 'Meja 23', 'LAB1PC23', 301, 'Connect', '-', 'Ready'),
('LAB1PC24', 0, 'Meja 24', 'LAB1PC24', 301, 'Connect', '-', 'Ready'),
('LAB1PC26', 0, 'Meja 26', 'LAB1PC26', 302, 'Connect', '-', 'Ready'),
('LAB1PC27', 0, 'Meja 26', 'LAB1PC27', 301, 'Connect', '-', 'Ready'),
('LAB1PC30', 0, 'Meja 20', 'LAB1PC30', 301, 'Connect', '-', 'Ready'),
('LAB2PC01', 0, 'Meja 01', 'LAB2PC01', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC02', 0, 'Meja 02', 'LAB2PC02', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC04', 0, 'Meja 04', 'LAB2PC04', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC05', 0, 'Meja 05', 'LAB2PC05', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC06', 0, 'Meja 06', 'LAB2PC06', 302, 'Connect', '-', 'Ready'),
('LAB2PC07', 0, 'Meja 07', 'LAB2PC07', 302, 'Connect', '-', 'Ready'),
('LAB2PC08', 0, 'Meja 08', 'LAB2PC08', 302, 'Connect', '-', 'Ready'),
('LAB2PC09', 0, 'Meja 09', 'LAB2PC09', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC10', 0, 'Meja 10', 'LAB2PC10', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC11', 0, 'Meja 11', 'LAB2PC11', 302, 'Connect', '-', 'Ready'),
('LAB2PC12', 0, 'Meja 12', 'LAB2PC12', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC12-D', 0, 'Meja 14', 'LAB2PC12-D', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC13', 0, 'Meja 13', 'LAB2PC13', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC15', 0, 'Meja 15', 'LAB2PC15', 302, 'Connect', '-', 'Maintenance'),
('LAB2PC16', 0, 'Meja 17', 'LAB2PC16', 302, 'Connect', '-', 'Ready'),
('LAB2PC20', 0, 'Meja 25', 'LAB2PC20', 301, 'Connect', '', 'Ready'),
('LAB2PC23', 0, 'Meja 25', 'LAB2PC23', 302, 'Connect', '-', 'Ready'),
('LAB2PC30', 0, 'Meja 24', 'LAB2PC30', 302, 'Connect', '-', 'Maintenance'),
('LAB2PCFULAN', 0, 'Meja 21', 'LAB2PCFULAN', 302, 'Connect', '-', 'Maintenance'),
('LAB2PCPINDAHAN1', 0, 'Meja 19', 'LAB2PCPINDAHAN1', 302, 'Connect', '-', 'Ready'),
('LAB3-PCDOSEN', 0, 'Meja Dosen Lab 3', 'LAB3-PCDOSEN', 303, 'Connect', '-', 'Ready'),
('LAB3PC01', 0, 'Meja 01', 'LAB3PC01', 303, 'Connect', '-', 'Ready'),
('LAB3PC01-PC', 0, 'Meja 19', 'LAB3PC01-PC', 303, 'Connect', '-', 'Ready'),
('LAB3PC02', 0, 'Meja 02', 'LAB3PC02', 303, 'Connect', '-', 'Ready'),
('LAB3PC03', 0, 'Meja 03', 'LAB3PC03', 303, 'Connect', '-', 'Ready'),
('LAB3PC04', 0, 'Meja 04', 'LAB3PC04', 303, 'Connect', '-', 'Ready'),
('LAB3PC04-D', 0, 'Meja 22', 'LAB3PC04-D', 302, 'Connect', '-', 'Maintenance'),
('LAB3PC05', 0, 'Meja 05', 'LAB3PC05', 303, 'Connect', '-', 'Ready'),
('LAB3PC06', 0, 'Meja 06', 'LAB3PC06', 303, 'Disabled', 'Ini ga bisa konek entah kenapa, kayaknya PC nya\r\n', 'Ready'),
('LAB3PC07', 0, 'Meja 07', 'LAB3PC07', 303, 'Connect', '-', 'Ready'),
('LAB3PC08', 0, 'Meja 08', 'LAB3PC08', 303, 'Connect', '-', 'Ready'),
('LAB3PC09', 0, 'Meja 09', 'LAB3PC09', 303, 'Connect', '-', 'Ready'),
('LAB3PC10', 0, 'Meja 10', 'LAB3PC10', 303, 'Connect', '-', 'Ready'),
('LAB3PC11', 0, 'Meja 11', 'LAB3PC11', 303, 'Connect', '-', 'Ready'),
('LAB3PC15', 0, 'Meja 15', 'LAB3PC15', 303, 'Connect', '-', 'Ready'),
('LAB3PC16', 0, 'Meja 16', 'LAB3PC16', 303, 'Connect', '-', 'Ready'),
('LAB3PC17', 0, 'Meja 27', 'LAB3PC17', 303, 'Connect', '-', 'Ready'),
('LAB3PC19', 0, 'Meja 03', 'LAB3PC19', 302, 'Connect', 'Belum di install DriverPack graphic nya', 'Maintenance'),
('LAB3PC22', 0, 'Meja 18', 'LAB3PC22', 302, 'Connect', '-', 'Ready'),
('LAB3PC25', 0, 'Meja 13', 'LAB3PC25', 303, 'Connect', '-', 'Ready'),
('LAB3PC26', 0, 'Meja 16', 'LAB3pc26', 302, 'Connect', '-', 'Maintenance'),
('LAB3PC28', 0, 'Meja 12', 'LAB3PC28', 303, 'Connect', '', 'Ready'),
('LAB3PC30', 0, 'Meja 22', 'LAB3PC30', 303, 'Connect', '-', 'Ready'),
('LAB3PCANU', 0, 'Meja 20', 'LAB3PCANU', 302, 'Connect', '-', 'Ready'),
('LAB3PCEKHEM', 0, 'Meja 24', 'LAB3PCEKHEM', 303, 'Connect', '-', 'Ready'),
('U-PC01', 0, 'Meja 04', 'DESKTOP-5MJBGGU', 301, 'Connect', '-', 'Ready'),
('U-PC03', 0, 'Meja 22', 'DESKTOP-2V75775AT', 301, 'Connect', '-', 'Ready'),
('U-PC04', 0, 'Meja 23', 'DESKTOP-5HBRJ04', 302, 'Connect', '-', 'Maintenance'),
('U-PC05', 0, 'Meja 18', 'LAB1PC0004', 301, 'Connect', 'Harus ganti nama', 'Ready'),
('U-PC06', 0, 'Meja 28', 'CADANGAN-PC', 302, 'Connect', '-', 'Ready'),
('U-PC07', 0, 'Meja 21', 'DESKTOP-N804KE5', 301, 'Connect', 'Belum ganti nama', 'Ready'),
('U-PC08', 0, 'Meja 14', 'DESKTOP-QF77V7T', 303, 'Connect', '-', 'Ready'),
('U-PC09', 0, 'Meja 20', 'DESKTOP-SD2N1FV', 303, 'Connect', '-', 'Ready'),
('U-PC10', 0, 'Meja 18', 'DESKTOP-BTI4711', 303, 'Connect', '-', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` varchar(15) NOT NULL,
  `sound` varchar(15) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_ruangan`),
  UNIQUE KEY `nama_ruangan` (`nama_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `nama_ruangan`, `lantai`, `sound`, `kapasitas`, `deskripsi`, `status`) VALUES
(201, 'Kelas 201', 'Lantai 2', 'Pilih', 0, '', 'Ready'),
(202, 'Kelas 202', 'Lantai 2', 'Pilih', 0, '', 'Ready'),
(203, 'Kelas 203', 'Lantai 2', 'Pilih', 0, '', 'Ready'),
(204, 'Kelas 204', 'Lantai 2', 'Pilih', 0, '', 'Ready'),
(205, 'Kelas 205', 'Lantai 2', 'Pilih', 0, '', 'Ready'),
(301, 'Lab Komputer 1', 'Lantai 3', 'Ada', 30, 'Dipakai', 'Ready'),
(302, 'Lab Komputer 2', 'Lantai 3', 'Tidak Ada', 30, '-', 'Ready'),
(303, 'Lab Komputer 3', 'Lantai 3', 'Ada', 30, '-', 'Ready'),
(307, 'Ruangan IT', 'Lantai 3', 'Ada', 5, '-', 'Ready'),
(401, 'Kelas 401', 'Lantai 4', 'Pilih', 0, '', 'Ready'),
(402, 'Kelas 402', 'Lantai 4', 'Pilih', 0, '', 'Ready'),
(403, 'Kelas 403', 'Lantai 4', 'Pilih', 0, '', 'Ready'),
(404, 'Kelas 404', 'Lantai 4', 'Pilih', 0, '', 'Ready'),
(405, 'Kelas 405', 'Lantai 4', 'Pilih', 0, '', 'Ready'),
(406, 'Kelas 406', 'Lantai 4', 'Pilih', 0, '', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tools`
--

CREATE TABLE IF NOT EXISTS `tbl_tools` (
  `id_tools` varchar(20) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `nama_tools` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `generasi` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_beli` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tools`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_ruangan` (`id_ruangan`),
  KEY `id_kategori_2` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tools`
--

INSERT INTO `tbl_tools` (`id_tools`, `isbn`, `nama_tools`, `id_kategori`, `id_ruangan`, `generasi`, `version`, `model`, `deskripsi`, `tgl_beli`, `status`) VALUES
('DSLR01', '', 'Canon EOS 1200D', 17, 307, '-', '-', '1200D', '', '0000-00-00', 'Baik'),
('H001', '740617261219', 'SSD Kingstone 240GB A400', 18, 303, '-', '-', 'A400', '', '0000-00-00', 'Baik'),
('K001', '09785506703', 'Logitech Keyboard MK120', 14, 303, '-', '-', 'MK120', 'Corder Keyboard and Mouse Combo', '0000-00-00', 'Baik'),
('K002', 'GK-100011', 'Genius Keyboard GK-100011', 14, 303, '-', '-', '-', '', '0000-00-00', 'Baik'),
('K003', 'GK-150002', 'Genius Keyboard GK-150002', 14, 303, '-', '-', 'GK-150002', 'Anu aya power na', '0000-00-00', 'Baik'),
('K004', 'KB-110', 'Genius Keyboard KB-110', 14, 302, '-', '-', 'KB-110', '-', '0000-00-00', 'Baik'),
('M001', '16EN33-BAATIMMSD', 'LG FLATRON 16EN33S - B 14', 16, 303, '-', '-', '16EN33SA', '', '0000-00-00', 'Baik'),
('M002', 'W1642ST ', 'LG W1642ST 14', 16, 303, '-', '-', 'W1642ST', '', '0000-00-00', 'Baik'),
('M003', 'V1620A', 'ViewSonic V1620A-LED 14', 16, 303, '-', '-', 'V1620A-LED', '', '0000-00-00', 'Baik'),
('M004', 'E1641SX', 'LG E1641SX 14"', 16, 302, '-', '-', 'E1641SX', '', '0000-00-00', 'Baik'),
('M005', '16M35A-BAATIMMSD', 'LG 16M35A - B 14', 16, 302, '-', '-', '16M35AA', '', '0000-00-00', 'Baik'),
('M006', 'LS16PENSF', 'Samsung 14"', 16, 302, '-', '-', '632NW', '', '0000-00-00', 'Baik'),
('M007', '16513A- B 14', 'LG 16513A- B 14', 16, 301, '', '14', '16513A', '', '0000-00-00', 'Baik'),
('MB001', 'GA-H110M-DS2', 'Gigabyte H11OM -DS2', 21, 307, '-', '-', 'H11OM-DS2', '', '0000-00-00', 'Baik'),
('MS001', '09785506703', 'Mouse Logitech MK120', 10, 303, '-', '-', 'MK120', '', '0000-00-00', 'Baik'),
('MS002', '', 'Mouse Genius 120', 10, 303, '-', '-', '120', '', '0000-00-00', 'Baik'),
('MS003', '097855060266', 'Mouse Logitech B100', 10, 302, '-', '-', 'B100', '', '0000-00-00', 'Baik'),
('MS007', 'GM-150014', 'Mouse Genius DX-110', 10, 302, '-', '-', 'DX-110', '', '0000-00-00', 'Baik'),
('P001', 'BX80677I37100', 'Intel Core i3-7100 @3.90Ghz', 20, 307, '7th', '-', 'i3-7100 LGA1151', '', '0000-00-00', 'Baik'),
('P002', '', 'Intel i5 - 3470 @3.20Ghz', 20, 307, 'i5', '3470', '3.2Ghz', 'Belum di cek', '0000-00-00', 'Baik'),
('P003', '', 'Intel i3-2100 @3.10Ghz', 20, 307, 'i3', '3.10Ghz', '2100', 'Belum di cek', '0000-00-00', 'Baik'),
('P004', '', 'Intel i3 - 3240 @3.4GHz', 20, 301, 'i3', '3.4Ghz', '3240', '', '0000-00-00', 'Baik'),
('R001', '', 'V-GEN 4GB DDR3L', 19, 307, 'DDR3L', '4GB', 'PC-12800', '', '0000-00-00', 'Baik'),
('R002', '', 'Unknow 8GB', 19, 307, '-', '-', '-', 'Belum di cek', '0000-00-00', 'Baik'),
('R003', '', 'Unknown 4GB', 19, 307, '', '', '', 'Belum di cek\r\n', '0000-00-00', 'Baik'),
('R004', '', 'Unknown 12GB', 19, 301, '', '', '', '', '0000-00-00', 'Baik'),
('V001', '710-2-SL-BRK', 'Nvidia GeForce GT710', 15, 307, 'GeForce', 'GT 170 2GB', 'GeForce 710', '', '0000-00-00', 'Baik'),
('V002', '', 'Nvidia GeForce 210', 15, 307, 'GeForce', '4 GB', '210', '', '0000-00-00', 'Baik'),
('V003', '', 'AMD Radeon HD 5450', 15, 301, '', 'HD', '5450', 'Belum di cek', '0000-00-00', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(1, 'admin', 'admin', 'administrator', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dtl_komputer`
--
CREATE TABLE IF NOT EXISTS `v_dtl_komputer` (
`id_detail` int(11)
,`nama_komputer` varchar(30)
,`nama_kategori` varchar(30)
,`isbn` varchar(20)
,`nama_tools` varchar(50)
,`tgl_pasang` date
,`tgl_lepas` date
,`deskripsi` text
,`status` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dtl_ruangan`
--
CREATE TABLE IF NOT EXISTS `v_dtl_ruangan` (
`id_detail_r` int(11)
,`nama_ruangan` varchar(50)
,`nama_tools` varchar(50)
,`isbn` varchar(20)
,`nama_kategori` varchar(30)
,`tgl_pasang` date
,`tgl_lepas` date
,`deskripsi` text
,`status` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mkomputer`
--
CREATE TABLE IF NOT EXISTS `v_mkomputer` (
`id_komputer` varchar(20)
,`no_meja` varchar(20)
,`nama_komputer` varchar(30)
,`nama_ruangan` varchar(50)
,`kabel` varchar(15)
,`deskripsi` text
,`status` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mtools`
--
CREATE TABLE IF NOT EXISTS `v_mtools` (
`id_tools` varchar(20)
,`isbn` varchar(20)
,`nama_tools` varchar(50)
,`nama_kategori` varchar(30)
,`nama_ruangan` varchar(50)
,`generasi` varchar(30)
,`version` varchar(30)
,`model` varchar(30)
,`deskripsi` text
,`tgl_beli` date
,`status` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_ruangan`
--
CREATE TABLE IF NOT EXISTS `v_tbl_ruangan` (
`id_detail_r` int(11)
,`nama_ruangan` varchar(50)
,`nama_tools` varchar(50)
,`isbn` varchar(20)
,`nama_kategori` varchar(30)
,`tgl_pasang` date
,`tgl_lepas` date
,`deskripsi` text
,`status` varchar(15)
);
-- --------------------------------------------------------

--
-- Structure for view `v_dtl_komputer`
--
DROP TABLE IF EXISTS `v_dtl_komputer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dtl_komputer` AS select `a`.`id_detail` AS `id_detail`,`b`.`nama_komputer` AS `nama_komputer`,`d`.`nama_kategori` AS `nama_kategori`,`c`.`isbn` AS `isbn`,`c`.`nama_tools` AS `nama_tools`,`a`.`tgl_pasang` AS `tgl_pasang`,`a`.`tgl_lepas` AS `tgl_lepas`,`a`.`deskripsi` AS `deskripsi`,`a`.`status` AS `status` from (((`tbl_detail_komputer` `a` join `tbl_komputer` `b` on((`a`.`id_komputer` = `b`.`id_komputer`))) join `tbl_tools` `c` on((`a`.`id_tools` = `c`.`id_tools`))) join `tbl_kategori` `d` on((`c`.`id_kategori` = `d`.`id_kategori`)));

-- --------------------------------------------------------

--
-- Structure for view `v_dtl_ruangan`
--
DROP TABLE IF EXISTS `v_dtl_ruangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dtl_ruangan` AS select `a`.`id_detail_r` AS `id_detail_r`,`b`.`nama_ruangan` AS `nama_ruangan`,`c`.`nama_tools` AS `nama_tools`,`c`.`isbn` AS `isbn`,`d`.`nama_kategori` AS `nama_kategori`,`a`.`tgl_pasang` AS `tgl_pasang`,`a`.`tgl_lepas` AS `tgl_lepas`,`a`.`deskripsi` AS `deskripsi`,`a`.`status` AS `status` from (((`tbl_detail_ruangan` `a` join `tbl_ruangan` `b` on((`a`.`id_ruangan` = `b`.`id_ruangan`))) join `tbl_tools` `c` on((`a`.`id_tools` = `c`.`id_tools`))) join `tbl_kategori` `d` on((`c`.`id_kategori` = `d`.`id_kategori`)));

-- --------------------------------------------------------

--
-- Structure for view `v_mkomputer`
--
DROP TABLE IF EXISTS `v_mkomputer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mkomputer` AS select `a`.`id_komputer` AS `id_komputer`,`a`.`no_meja` AS `no_meja`,`a`.`nama_komputer` AS `nama_komputer`,`b`.`nama_ruangan` AS `nama_ruangan`,`a`.`kabel` AS `kabel`,`a`.`deskripsi` AS `deskripsi`,`a`.`status` AS `status` from (`tbl_komputer` `a` join `tbl_ruangan` `b` on((`a`.`id_ruangan` = `b`.`id_ruangan`)));

-- --------------------------------------------------------

--
-- Structure for view `v_mtools`
--
DROP TABLE IF EXISTS `v_mtools`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mtools` AS select `a`.`id_tools` AS `id_tools`,`a`.`isbn` AS `isbn`,`a`.`nama_tools` AS `nama_tools`,`b`.`nama_kategori` AS `nama_kategori`,`c`.`nama_ruangan` AS `nama_ruangan`,`a`.`generasi` AS `generasi`,`a`.`version` AS `version`,`a`.`model` AS `model`,`a`.`deskripsi` AS `deskripsi`,`a`.`tgl_beli` AS `tgl_beli`,`a`.`status` AS `status` from ((`tbl_tools` `a` join `tbl_kategori` `b` on((`a`.`id_kategori` = `b`.`id_kategori`))) join `tbl_ruangan` `c` on((`a`.`id_ruangan` = `c`.`id_ruangan`)));

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_ruangan`
--
DROP TABLE IF EXISTS `v_tbl_ruangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_ruangan` AS select `a`.`id_detail_r` AS `id_detail_r`,`b`.`nama_ruangan` AS `nama_ruangan`,`c`.`nama_tools` AS `nama_tools`,`c`.`isbn` AS `isbn`,`d`.`nama_kategori` AS `nama_kategori`,`a`.`tgl_pasang` AS `tgl_pasang`,`a`.`tgl_lepas` AS `tgl_lepas`,`a`.`deskripsi` AS `deskripsi`,`a`.`status` AS `status` from (((`tbl_detail_ruangan` `a` join `tbl_ruangan` `b` on((`a`.`id_ruangan` = `b`.`id_ruangan`))) join `tbl_tools` `c` on((`a`.`id_tools` = `c`.`id_tools`))) join `tbl_kategori` `d` on((`c`.`id_kategori` = `d`.`id_kategori`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_komputer`
--
ALTER TABLE `tbl_detail_komputer`
  ADD CONSTRAINT `tbl_detail_komputer_ibfk_1` FOREIGN KEY (`id_komputer`) REFERENCES `tbl_komputer` (`id_komputer`),
  ADD CONSTRAINT `tbl_detail_komputer_ibfk_2` FOREIGN KEY (`id_tools`) REFERENCES `tbl_tools` (`id_tools`);

--
-- Constraints for table `tbl_detail_ruangan`
--
ALTER TABLE `tbl_detail_ruangan`
  ADD CONSTRAINT `tbl_detail_ruangan_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`),
  ADD CONSTRAINT `tbl_detail_ruangan_ibfk_2` FOREIGN KEY (`id_tools`) REFERENCES `tbl_tools` (`id_tools`);

--
-- Constraints for table `tbl_komputer`
--
ALTER TABLE `tbl_komputer`
  ADD CONSTRAINT `tbl_komputer_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`);

--
-- Constraints for table `tbl_tools`
--
ALTER TABLE `tbl_tools`
  ADD CONSTRAINT `tbl_tools_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`),
  ADD CONSTRAINT `tbl_tools_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
