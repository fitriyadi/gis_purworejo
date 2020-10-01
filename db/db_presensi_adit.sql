-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2020 at 07:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peta_purworejo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `idfasilitas` int(11) NOT NULL,
  `namaunit` varchar(45) DEFAULT NULL,
  `idjenis` int(11) DEFAULT NULL,
  `idkecamatan` int(11) DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`idfasilitas`, `namaunit`, `idjenis`, `idkecamatan`, `longitude`, `latitude`, `alamat`, `nohp`) VALUES
(1, 'RS Amanah Umat Purworejo', 1, 1, 109.9156971, -7.8023723, 'Jl. Brigjen Katamso, Rw. 05, Pangenrejo, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah', '+62275325260'),
(3, 'RS Palang Biru Kutoarjo', 1, 9, 109.9355849, -7.6203681, 'Jl. Marditomo, Kutoarjo, Kutoarjo, Kec. Kutoarjo, Kabupaten Purworejo, Jawa Tengah\r\n', '+62275641425'),
(4, 'RS Panti Waluyo Purworejo', 1, 1, 110.0122316, -7.7150141, 'Jl. A. Yani, Purworejo, Purworejo, Kec. Purworejo, Kabupaten Purworejo, Jawa Tenga', '+62275322096'),
(5, 'RS Purwa Husada', 1, 1, 109.9463069, -7.8324465, 'Bengkek, Candisari, Kec. Banyuurip, Kabupaten Purworejo, Jawa Tengah\r\n', '+62275321998'),
(6, 'RS Umum Ananda Purworejo', 1, 8, 109.9009133, -7.7987179, 'Jl Lingkar Barat Utara GOR Purworejo, Dusun I, Sucenjuru Tengah, Kec. Bayan, Kabupaten Purworejo, Jawa Tengah', '+622753128876'),
(7, 'Puskesmas Bagelen', 2, 4, 110.0126913, -7.8085084, 'Jl.Yogyakarta, Km.11, Kec. Bagelen', '087890567543'),
(8, 'Puskesmas Banyuasin', 2, 15, 110.0994916, -7.6657485, 'Banyuasin, Kec. Loano', '081909786578'),
(9, 'Puskesmas Banyuurip', 2, 7, 109.970249, -7.7564727, 'Jl. P. Joyo Kusumo KM 3 Ds. Sumbersari, Kec. Banyuurip', '087890567543'),
(10, 'Puskesmas Bayan', 2, 1, 109.9260339, -7.7197173, 'Gajah Mada Km 8, Bandungrejo, Kec . Bayan', '081909786578'),
(11, 'Puskesmas Bener', 2, 16, 110.0486231, -7.6371064, 'Jl. Raya Magelang Km 11, Kec. Bener', '087890567543'),
(12, 'Puskesmas Bragolan', 2, 3, 109.9992773, -7.7972896, '\r\nJl. Panembahan Senopati no 17, Kec. Purwodadi\r\n', '081909786578'),
(13, 'Puskesmas Bruno', 2, 13, 109.92877, -7.570557, 'Brunorejo, Kec. Bruno', '081909786578'),
(14, 'Puskesmas Bubutan', 2, 3, 110.0053112, -7.8486539, 'Jl. Congot Km.17 Bubutan, Kec. Purwodadi', '081909786578'),
(15, 'Puskesmas Butuh', 2, 10, 109.8664, -7.7233732, 'Jl. Raya Kebumen Km.5, Kec. Butuh', '081909786578'),
(16, 'Puskesmas Cangkrep', 2, 6, 110.025383, -7.7254847, '\r\nJl. WR Soepratman No 431, Kec. Purworejo\r\n', '081909786578'),
(17, 'Puskesmas Dadirejo', 2, 4, 110.0375579, -7.8626818, 'Jl. Raya Yogyakarta Km. 18, Kec. Bagele', '081909786578'),
(18, 'Puskesmas Gebang', 2, 14, 109.9887722, -7.654118, 'Ds. Gebang, Kec. Gebang', '081909786578'),
(19, 'Puskesmas Grabag', 2, 1, 109.8659605, -7.7884566, 'Jl. Kutoarjo-Ketawang KM 7,Ds. Sangubanyu, Kec.Grabag', '081909786578'),
(20, 'Puskesmas Kaligesing', 2, 5, 109.989245, -7.7239182, 'Jol. H. Soepanto, Ds. Kaligono, Kec.Kaligesing', '081909786578'),
(21, 'Puskesmas Karangetas', 2, 11, 109.8077166, -7.6693733, 'Ds. Karanggetas, Kec. Pituruh', '081909786578'),
(22, 'Puskesmas Kemiri', 2, 12, 109.9006498, -7.6811022, 'Kemiri Kidul, Kec. Kemiri', '081909786578'),
(23, 'Puskesmas Kutoarjo', 2, 9, 109.8787201, -7.7158494, 'Jl. Mardi Usodo 22 KTA, Kec. Kutoarjo', '081909786578'),
(24, 'Puskesmas Loano', 2, 15, 110.0656453, -7.594238, 'Jl. Raya Magelang Km 8, Kec. Loano', '081909786578'),
(25, 'Puskesmas Mranti', 2, 6, 109.9994811, -7.7031004, 'Jl. Mr. Wilopo 203 A Kel. Mranti ,Kec. Purworejo', '087890567543'),
(26, 'Puskesmas Ngombol', 2, 2, 109.9214027, -7.8214939, 'Jl. Perempatan Ngombol, Ds. Kembangkuning, Kec. Ngombol', '081909786578'),
(27, 'Puskesmas Pituruh', 2, 11, 109.8419604, -7.6858187, 'Jl. Klepu, Ds. Pituruh, Kec. Pituruh', '081909786578'),
(28, 'Puskesmas Purworejo', 2, 6, 110.0140847, -7.7100696, 'Jl. KH Dahlan No. 73 Kel. Purworejo, Kec. Purworejo', '087890567543'),
(29, 'Puskesmas Semawung Daleman', 2, 1, 109.9038905, -7.734377, 'Ds. Semawung Daleman, Kec. Kutoarjo', '087890567543'),
(30, 'Puskesmas Semborokrapyak', 2, 7, 109.9405517, -7.7700822, 'Ds. Semborokrapyak, Kec. Banyuurip', '087890567543'),
(31, 'Puskesmas Swuruhrejo', 2, 10, -7.7477026, 9.8757554, 'Ds. Sruwohrejo, Kec. Butuh', '081909786578'),
(32, 'Puskesmas Wirun', 2, 9, 109.915543, -7.6758334, 'Ds. Wirun ,Kec. Kutoarjo', '081909786578'),
(33, 'Puskesmas Winong', 2, 1, 109.952002, -7.6674537, 'Ds. Winong, Kec. Kemiri ', '081909786578'),
(34, 'Apotek As-Salam', 3, 1, 110.0143389, -7.7089398, 'Jl. Pramuka No. 40 Purworejo', '081667889211'),
(35, 'Apotek As-Syifa', 3, 1, 110.1436466, -7.8679189, 'Jl. Purworejo – Winong Km. 7', '081667889211'),
(36, 'Apotek Atha Farma', 3, 1, 109.9967723, -7.720115, 'Jl. Jend. Sudirman', '081667889211'),
(37, 'Apotek Anugerah', 3, 1, 110.0100271, -7.709032, 'Jl. Kol. Sugiono No. 91 Purworejo', '1081667889211'),
(38, 'Apotek Bagelan', 3, 1, 110.0148122, -7.7142635, 'Jl. Wr. Supratman No. 20 Purworejo', '081667889211'),
(39, 'Apotek Bayan Sehat', 3, 1, 109.9649166, -7.7269456, 'Jl. Gajah Mada No.1 Bandungrejo', '081667889211'),
(40, 'Apotek Berkah Farma', 3, 1, 110.0835577, -7.7693252, 'Jl. Brigjend Katamso No.161', '081667889211'),
(41, 'Apotek Bogowonto', 3, 1, 110.0113215, -7.7098169, 'Jl. Kolonel Sugiyono No. 71', '081667889211'),
(42, 'Apotek Care', 3, 1, 109.904087, -7.8015973, 'Jl. Purwodadi – Grabag', '081667889211'),
(43, 'Apotek  Daerah l', 3, 1, 109.9986717, -7.719762, 'Jl. Jend. Sudirman No. 22 Purworejo', '081667889211'),
(45, 'Apotek Daerah lll', 3, 1, 109.9950735, -7.7203684, 'Jl. Jend. Sudirman No. 95B', '081667889211'),
(46, 'Apotek Nirmala', 3, 1, 110.0178651, -7.7097241, 'Kios Pasar Grabag No. 23', '081667889211'),
(47, 'Apotek Gedog Farma', 3, 1, 109.9943866, -7.8078434, 'Jenar Wetan, Purwodadi', '081667889211'),
(48, 'Apotek Halota Farma', 3, 1, 110.0223121, -7.7191605, 'Jl. Wr. Supratman 144 Tambakrejo Pwr', '081667889211'),
(49, 'Apotek Jenar', 3, 1, 109.9943866, -7.8078434, 'Jl. Panembahan Senopati Jenar Wetan', '081667889211'),
(50, 'Apotek K 9', 3, 1, 109.9848122, -7.7264814, 'Jl. Tentara Pelajar No. 117 Purworejo', '081667889211'),
(51, 'Apotek Karunia', 3, 1, 110.0133966, -7.7112252, 'Jl. Kolonel Sugiyono No. 49 Purworejo.', '081667889211'),
(52, 'Apotek Kemiri Sehat', 3, 1, 109.8915478, -7.6817563, 'Depan Pasar Kemiri, Kemiri Kidul', '081667889211'),
(53, 'Apotek Kenteng Jaya', 3, 1, 109.9771527, -7.7279258, 'Jl. Tentara Pelajar No. 200 Purworejo', '081667889211'),
(54, 'Apotek Kemala', 3, 1, 110.000679, -7.7287175, 'Jl. Brigjend. Katamso No. 114', '081667889211'),
(55, 'Apotek Kinanti Farma', 3, 9, 109.9099715, -7.7217396, 'Jl. P. Dipinegoro Rt.001 / Rw.003 Kta', '085544677819'),
(56, 'Apotek Krendetan Farma', 3, 4, 110.0145088, -7.8247162, 'Jl. Raya Purworejo – Yogya Km. 13\r\nPurworejo\r\n', '085677888102'),
(57, 'Apotek Maron', 3, 6, 110.0364818, -7.6628904, 'Jl. Magelang Km. 07 Maron, Kec. Loano', '081662890411'),
(58, 'Apotek Mitra Sehat', 3, 16, 110.0493384, -7.6393787, 'Kaliurip Rt.04 / Rw. 01 Bener', '085119889234'),
(59, 'Apotek Naga Mas', 3, 6, 109.99562, -7.7203508, 'Jl. Jend. Sudirman No. 22 Purworejo', '085123456778'),
(60, 'Apotek Pelangi Farma', 3, 7, 109.9692287, -7.7549915, 'Jl. Raya Banyuurip Rt 02/Rw 01\r\nSumbersari\r\n', '081123456789'),
(63, 'Apotek Pancur Gading', 3, 1, 110.0130051, -7.7126086, 'Jl. Kha Dahlan No. 107 Purworejo', '085334556771'),
(64, 'Apotek Pedoman Jaya', 3, 1, 109.9032904, -7.8900593, 'Jl. Ahmad Yani No. 176 Purworejo', '087767112456'),
(65, 'Apotek Purwodadi', 3, 3, 110.9151473, -7.0833771, 'Desa Purwodadi', '0816667775346'),
(66, 'Apotek Pusaka', 3, 1, 110.015051, -7.7087021, 'Jl. Kh.A. Dahlan No. 85 Purworejo', '085667889123'),
(67, 'Apotek R D E', 3, 1, 109.989605, -7.7223981, 'Jl. Tentara Pelajar No. 67A Purworejo', '081445678212'),
(68, 'Apotek Ready Mart', 3, 6, 109.974284, -7.7223499, 'Jl. Kolonel Sugiyono No. 32 Rt. 003/Rw.009\r\nPurworejo\r\n', '081156672201'),
(69, 'Apotek Sangubanyu', 3, 1, 109.8991891, -7.7934312, 'Jl. Raya Ketawang Sangubanyu Grabag', '0853362278167'),
(70, 'Apotek Semar', 3, 6, 110.0121535, -7.7072827, 'Komplek Pasar Suronegaran Kios ', '0877671235667'),
(71, 'Apotek Shanty Farma', 3, 1, 109.9086199, -7.7233499, 'Jl. Mt. Haryono No. 50 Kutoarjo', '081234556782'),
(72, 'Apotek Sumber Waras', 3, 1, 109.8905268, -7.6825918, 'Jl. Tentara Pelajar No. 16 Kemiri Kidul', '0856778125667'),
(73, 'Apotek Talang Emas', 3, 11, 109.8424224, -7.6800708, 'Jl. Raya Pituruh – Kemiri Km.1 Pwr', '0853362278167'),
(74, 'Apotek Tiga Putra', 3, 9, 109.9076965, -7.7301045, 'Jl. Sawunggalih No. 77 Kutoarjo', '0854456255712'),
(75, 'Apotek Titi Murni', 3, 6, 110.0213531, -7.7223688, 'Jl. Wr. Supratman Tambakrejo', '087665667889'),
(76, 'Apotek Unggul Lestari', 3, 1, 109.8445175, -7.6802848, 'Wirun Krajan Rt.09 / Rw.02 Kutoarjo', '085123445778'),
(77, 'Apotek Wijaya Farma', 3, 6, 110.0166361, -7.7094261, 'Jl. A. Yani No. 175 Purworejo\r\n', '081667553445'),
(78, 'Apotek Yusuf Farma', 3, 6, 110.0056368, -7.7052611, 'Jl. Veteran No. 9 Purworejo', '088787235678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `idjenis` int(11) NOT NULL,
  `namajenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`idjenis`, `namajenis`) VALUES
(1, 'Rumah Sakit'),
(2, 'Puskesmas'),
(3, 'Apotek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jumlah_sdm`
--

CREATE TABLE `tb_jumlah_sdm` (
  `iddta` int(11) NOT NULL,
  `idsdm` int(11) DEFAULT NULL,
  `idfasilitas` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jumlah_sdm`
--

INSERT INTO `tb_jumlah_sdm` (`iddta`, `idsdm`, `idfasilitas`, `jumlah`) VALUES
(33, 1, 1, 0),
(34, 2, 1, 0),
(35, 3, 1, 0),
(36, 4, 1, 0),
(37, 1, 3, 29),
(38, 2, 3, 86),
(39, 3, 3, 14),
(40, 4, 3, 5),
(41, 1, 4, 19),
(42, 2, 4, 56),
(43, 3, 4, 0),
(44, 4, 4, 0),
(45, 1, 5, 17),
(46, 2, 5, 15),
(47, 3, 5, 2),
(48, 4, 5, 3),
(49, 1, 6, 11),
(50, 2, 6, 4),
(51, 3, 6, 11),
(52, 4, 6, 1),
(53, 1, 7, 2),
(54, 2, 7, 5),
(55, 3, 7, 13),
(56, 4, 7, 0),
(57, 1, 8, 2),
(58, 2, 8, 10),
(59, 3, 8, 12),
(60, 4, 8, 1),
(61, 1, 9, 3),
(62, 2, 9, 3),
(63, 3, 9, 20),
(64, 4, 9, 1),
(65, 1, 10, 2),
(66, 2, 10, 4),
(67, 3, 10, 21),
(68, 4, 10, 1),
(69, 1, 11, 4),
(70, 2, 11, 6),
(71, 3, 11, 30),
(72, 4, 11, 1),
(73, 1, 12, 3),
(74, 2, 12, 17),
(75, 3, 12, 17),
(76, 4, 12, 1),
(77, 1, 13, 3),
(78, 2, 13, 15),
(79, 3, 13, 27),
(80, 4, 13, 10),
(81, 1, 22, 4),
(82, 2, 22, 11),
(83, 3, 22, 23),
(84, 4, 22, 2),
(85, 1, 23, 3),
(86, 2, 23, 10),
(87, 3, 23, 13),
(88, 4, 23, 1),
(89, 1, 24, 3),
(90, 2, 24, 15),
(91, 3, 24, 16),
(92, 4, 24, 1),
(93, 1, 25, 2),
(94, 2, 25, 5),
(95, 3, 25, 11),
(96, 4, 25, 1),
(97, 1, 26, 3),
(98, 2, 26, 12),
(99, 3, 26, 19),
(100, 4, 26, 1),
(101, 1, 27, 3),
(102, 2, 27, 13),
(103, 3, 27, 23),
(104, 4, 27, 0),
(105, 1, 14, 2),
(106, 2, 14, 10),
(107, 3, 14, 16),
(108, 4, 14, 1),
(109, 1, 15, 2),
(110, 2, 15, 10),
(111, 3, 15, 21),
(112, 4, 15, 1),
(113, 1, 16, 3),
(114, 2, 16, 13),
(115, 3, 16, 11),
(116, 4, 16, 1),
(117, 1, 17, 2),
(118, 2, 17, 9),
(119, 3, 17, 8),
(120, 4, 17, 1),
(121, 1, 18, 3),
(122, 2, 18, 4),
(123, 3, 18, 22),
(124, 4, 18, 0),
(125, 1, 19, 2),
(126, 2, 19, 16),
(127, 3, 19, 24),
(128, 4, 19, 1),
(129, 1, 20, 3),
(130, 2, 20, 11),
(131, 3, 20, 16),
(132, 4, 20, 1),
(133, 1, 21, 1),
(134, 2, 21, 4),
(135, 3, 21, 20),
(136, 4, 21, 0),
(137, 1, 28, 3),
(138, 2, 28, 7),
(139, 3, 28, 10),
(140, 4, 28, 1),
(141, 1, 29, 2),
(142, 2, 29, 11),
(143, 3, 29, 16),
(144, 4, 29, 1),
(145, 1, 30, 3),
(146, 2, 30, 19),
(147, 3, 30, 15),
(148, 4, 30, 0),
(149, 1, 31, 1),
(150, 2, 31, 5),
(151, 3, 31, 13),
(152, 4, 31, 1),
(153, 1, 32, 2),
(154, 2, 32, 3),
(155, 3, 32, 8),
(156, 4, 32, 0),
(157, 1, 33, 2),
(158, 2, 33, 6),
(159, 3, 33, 11),
(160, 4, 33, 0),
(161, 1, 34, 0),
(162, 2, 34, 0),
(163, 3, 34, 0),
(164, 4, 34, 1),
(165, 1, 78, 0),
(166, 2, 78, 0),
(167, 3, 78, 3),
(168, 1, 77, 0),
(169, 2, 77, 0),
(170, 3, 77, 0),
(171, 4, 77, 3),
(172, 1, 76, 0),
(173, 2, 76, 0),
(174, 3, 76, 0),
(175, 4, 76, 1),
(176, 1, 75, 0),
(177, 2, 75, 0),
(178, 3, 75, 0),
(179, 4, 75, 1),
(180, 1, 74, 0),
(181, 2, 74, 0),
(182, 3, 74, 0),
(183, 4, 74, 3),
(184, 1, 73, 0),
(185, 2, 73, 0),
(186, 3, 73, 0),
(187, 4, 73, 1),
(188, 1, 72, 0),
(189, 2, 72, 0),
(190, 3, 72, 0),
(191, 4, 72, 1),
(192, 1, 71, 0),
(193, 2, 71, 0),
(194, 3, 71, 0),
(195, 4, 71, 2),
(196, 1, 70, 0),
(197, 2, 70, 0),
(198, 3, 70, 0),
(199, 4, 70, 1),
(200, 1, 69, 0),
(201, 2, 69, 0),
(202, 3, 69, 0),
(203, 4, 69, 1),
(204, 1, 68, 0),
(205, 2, 68, 0),
(206, 3, 68, 0),
(207, 4, 68, 1),
(208, 1, 67, 0),
(209, 2, 67, 0),
(210, 3, 67, 0),
(211, 4, 67, 1),
(212, 1, 66, 0),
(213, 2, 66, 0),
(214, 3, 66, 0),
(215, 4, 66, 2),
(216, 1, 65, 0),
(217, 2, 65, 0),
(218, 3, 65, 0),
(219, 4, 65, 2),
(220, 1, 64, 0),
(221, 2, 64, 0),
(222, 3, 64, 0),
(223, 4, 64, 2),
(224, 1, 63, 0),
(225, 2, 63, 0),
(226, 3, 63, 0),
(227, 4, 63, 1),
(228, 1, 60, 0),
(229, 2, 60, 0),
(230, 3, 60, 0),
(231, 4, 60, 1),
(232, 1, 59, 0),
(233, 2, 59, 0),
(234, 3, 59, 0),
(235, 4, 59, 1),
(236, 1, 58, 0),
(237, 2, 58, 0),
(238, 3, 58, 0),
(239, 4, 58, 1),
(240, 1, 57, 0),
(241, 2, 57, 0),
(242, 3, 57, 0),
(243, 4, 57, 1),
(244, 1, 56, 0),
(245, 2, 56, 0),
(246, 3, 56, 0),
(247, 4, 56, 1),
(248, 1, 55, 0),
(249, 2, 55, 0),
(250, 3, 55, 0),
(251, 4, 55, 1),
(252, 1, 54, 0),
(253, 2, 54, 0),
(254, 3, 54, 0),
(255, 4, 54, 1),
(256, 1, 53, 0),
(257, 2, 53, 0),
(258, 3, 53, 0),
(259, 4, 53, 1),
(260, 1, 52, 0),
(261, 2, 52, 0),
(262, 3, 52, 0),
(263, 4, 52, 1),
(264, 1, 51, 0),
(265, 2, 51, 0),
(266, 3, 51, 0),
(267, 4, 51, 1),
(268, 1, 50, 0),
(269, 2, 50, 0),
(270, 3, 50, 0),
(271, 4, 50, 1),
(272, 1, 49, 0),
(273, 2, 49, 0),
(274, 3, 49, 0),
(275, 4, 49, 1),
(276, 1, 48, 0),
(277, 2, 48, 0),
(278, 3, 48, 0),
(279, 4, 48, -1),
(280, 1, 47, 0),
(281, 2, 47, 0),
(282, 3, 47, 0),
(283, 4, 47, 1),
(284, 1, 46, 0),
(285, 2, 46, 0),
(286, 3, 46, 0),
(287, 4, 46, 1),
(288, 1, 45, 0),
(289, 2, 45, 0),
(290, 3, 45, 0),
(291, 4, 45, 1),
(292, 1, 43, 0),
(293, 2, 43, 0),
(294, 3, 43, 0),
(295, 4, 43, 4),
(296, 1, 42, 0),
(297, 2, 42, 0),
(298, 3, 42, 0),
(299, 4, 42, 1),
(300, 1, 41, 0),
(301, 2, 41, 0),
(302, 3, 41, 0),
(303, 4, 41, 2),
(304, 1, 40, 0),
(305, 2, 40, 0),
(306, 3, 40, 0),
(307, 4, 40, 1),
(308, 1, 39, 0),
(309, 2, 39, 0),
(310, 3, 39, 0),
(311, 4, 39, 1),
(312, 1, 38, 0),
(313, 2, 38, 0),
(314, 3, 38, 0),
(315, 4, 38, 1),
(316, 1, 37, 0),
(317, 2, 37, 0),
(318, 3, 37, 0),
(319, 4, 37, 2),
(320, 1, 36, 0),
(321, 2, 36, 0),
(322, 3, 36, 0),
(323, 4, 36, 1),
(324, 1, 35, 0),
(325, 2, 35, 0),
(326, 3, 35, 0),
(327, 4, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `idkecamatan` int(11) NOT NULL,
  `namakecamatan` varchar(45) DEFAULT NULL,
  `kelompok` varchar(45) DEFAULT NULL,
  `_puskesmas` int(11) DEFAULT NULL,
  `_rumahsakit` int(11) DEFAULT NULL,
  `_apotek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`idkecamatan`, `namakecamatan`, `kelompok`, `_puskesmas`, `_rumahsakit`, `_apotek`) VALUES
(1, 'Grabag', '0', 0, 0, 0),
(2, 'Ngombol', '0', 0, 0, 0),
(3, 'Purwodadi', '0', 0, 0, 0),
(4, 'Bagelan', '0', 0, 0, 0),
(5, 'Kaligesing', '0', 0, 0, 0),
(6, 'Purworejo', '0', 0, 0, 0),
(7, 'Banyuurip', '0', 0, 0, 0),
(8, 'Bayan', '0', 0, 0, 0),
(9, 'Kutoarjo', '0', 0, 0, 0),
(10, 'Butuh', '0', 0, 0, 0),
(11, 'Pituruh', '0', 0, 0, 0),
(12, 'Kemiri', '0', 0, 0, 0),
(13, 'Bruno', '0', 0, 0, 0),
(14, 'Gebang', '0', 0, 0, 0),
(15, 'Loano', '0', 0, 0, 0),
(16, 'Bener', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sdm`
--

CREATE TABLE `tb_sdm` (
  `idsdm` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sdm`
--

INSERT INTO `tb_sdm` (`idsdm`, `nama`) VALUES
(1, 'Medis'),
(2, 'Kefarmasian'),
(3, 'Keperawatan'),
(4, 'Kebidanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`idfasilitas`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `tb_jumlah_sdm`
--
ALTER TABLE `tb_jumlah_sdm`
  ADD PRIMARY KEY (`iddta`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`idkecamatan`);

--
-- Indexes for table `tb_sdm`
--
ALTER TABLE `tb_sdm`
  ADD PRIMARY KEY (`idsdm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `idfasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tb_jumlah_sdm`
--
ALTER TABLE `tb_jumlah_sdm`
  MODIFY `iddta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `tb_sdm`
--
ALTER TABLE `tb_sdm`
  MODIFY `idsdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
