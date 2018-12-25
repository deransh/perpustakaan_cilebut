-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 02:47 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_cilebut`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `email`, `password`) VALUES
('admin', 'deriherm2812@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nik`, `nama`, `no_hp`, `email`, `alamat`) VALUES
(00001, '123144511', 'Yuni', '08581234118', 'yuni.maryani@gmail.com', 'Batu tulis'),
(00002, '235425436', 'andre', '09562342345', 'ujangyunus@gmail.com', 'Bandung'),
(00003, '111123124', 'deriada', '08121324458', 'deransyah@gmail.com', 'Bojong'),
(00004, '235425489', 'Jono', '08111234130', 'Jono@gmail.com', 'Kali murni'),
(00005, '12131214', 'Angga', '08121982378', 'angga123@gmail.com', 'Cigombong'),
(00006, '28139920', 'Roby', '08239813452', 'robiyan@gmail.com', 'Karang Anyar'),
(00007, '98867785', 'Nunung', '08596644216', 'enung98@gmail.com', 'Salabenda');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kd_buku` int(4) UNSIGNED ZEROFILL NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `th_terbit` year(4) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul`, `pengarang`, `penerbit`, `stok`, `th_terbit`, `id_kategori`) VALUES
(0001, 'ada apa dengan cinta', 'Yuniar', 'Megaswara', 11, 2018, 1234),
(0002, 'Ketika Cinta Bertasbih', 'veronica', 'box office', 13, 2015, 2345),
(0003, 'Pemrograman visual', 'Tatang Sutarbi', 'abdi jaya', 10, 2017, 3545),
(0004, 'Pemrograman visual', 'Jonsen', 'abdi jaya', 10, 2000, 1289),
(0005, 'Kumpulan puisi', 'Nadi Hang Tuang', 'aky press', 5, 2016, 6724),
(0006, 'Merpati biru', 'Achmad Munif', 'navila', 8, 2010, 5853),
(0007, 'Bapak Presiden ', 'Agus Noor', 'Pustaka', 10, 2001, 8646),
(0008, 'Bisikan Kata', 'Agus R', 'Bentang', 7, 2003, 1242),
(0009, 'Maliun Hawa', 'Ahmad Faisal', 'Komunitas', 4, 2007, 6524),
(0010, 'Bisikan Kata', 'Agus R', 'Pustaka', 8, 2003, 1654),
(0011, 'Tanah Tabu', 'Anindita Thayf', 'Gramedia', 12, 2017, 5632),
(0012, 'Web Programing', 'ROnald S', 'Abdi Jaya', 10, 2018, 1653);

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `kd_denda` int(2) UNSIGNED NOT NULL,
  `kd_transaksi` int(6) DEFAULT NULL,
  `jenis_denda` enum('telat','rusak','hilang') DEFAULT NULL,
  `total_denda` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`kd_denda`, `kd_transaksi`, `jenis_denda`, `total_denda`) VALUES
(1, NULL, 'hilang', 20000),
(2, NULL, 'rusak', 15000),
(3, NULL, 'telat', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(2) UNSIGNED ZEROFILL NOT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `total_pinjam` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `bulan`, `total_pinjam`) VALUES
(01, 'januari', 40),
(02, 'februari', 80),
(03, 'maret', 90),
(04, 'april', 250),
(05, 'mei', 190),
(06, 'juni', 80),
(07, 'juli', 100),
(08, 'agustus', 130),
(09, 'september', 300),
(10, 'oktober', 420),
(11, 'novermber', 213),
(12, 'desember', 387);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nik`, `nama`, `no_hp`, `email`, `alamat`) VALUES
(00002, '18231141', 'Dani', '0878234908114', 'dani28@gmail.com', 'Ciluar'),
(00004, '28901239', 'Andre', '0781239836457', 'andre79@gmail.com', 'Bojong gede'),
(00005, '18913141', 'Mantili', '0898123143144', 'manda21@gmail.com', 'Citayam'),
(00006, '59012434', 'Jana', '0858112300913', 'janalani@gmail.com', 'Depok'),
(00007, '11342547', 'Ardi', '0956193243414', 'ardiyan72@gmail.com', 'Cilebut'),
(00008, '56453898', 'Yani', '0843478657648', 'yani666@gmail.com', 'Parung'),
(00009, '12342452', 'cici', '0858111103598', 'cici@gmail.com', 'cilebut'),
(00010, '18767559', 'Kiki', '0812127836487', 'kikikikeh@gmail.com', 'Cilebut'),
(00011, '12676780', 'Andri', '0857293726785', 'andri22@gmail.com', 'Cihideung'),
(00012, '19278976', 'Jajang', '0876283628963', 'jajang67@gmail.com', 'Salabenda'),
(00013, '28634723', 'Dudung', '0956998234855', 'dudungidung@gmail.com', 'Cilebut');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `kd_transaksi` int(6) UNSIGNED ZEROFILL NOT NULL,
  `id_anggota` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `kd_buku` int(4) UNSIGNED ZEROFILL DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `jml_pinjam` int(3) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `kd_denda` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`kd_transaksi`, `id_anggota`, `kd_buku`, `tanggal_pinjam`, `tanggal_kembali`, `jml_pinjam`, `tgl_pengembalian`, `kd_denda`) VALUES
(000001, 00001, 0001, '2018-12-25', '2019-01-25', 1, '2018-12-26', 1),
(000002, 00002, 0002, '2018-12-25', '2019-01-26', 1, '2018-12-26', 2),
(000004, 00006, 0001, '2018-12-26', '2019-01-25', 1, '2018-12-28', 3),
(000012, 00004, 0005, '2018-10-21', '2018-11-24', 1, '2018-11-24', 0),
(000013, 00007, 0011, '2018-12-25', '2019-01-25', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_denda`
-- (See below for the actual view)
--
CREATE TABLE `v_denda` (
`kd_denda` int(2) unsigned
,`jenis_denda` enum('telat','rusak','hilang')
,`total_denda` int(8)
,`kd_transaksi` int(6) unsigned zerofill
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`tgl_pengembalian` date
,`id_anggota` int(5) unsigned zerofill
,`nama` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_userpinjam`
-- (See below for the actual view)
--
CREATE TABLE `v_userpinjam` (
`id_anggota` int(5) unsigned zerofill
,`nama` varchar(30)
,`kd_transaksi` int(6) unsigned zerofill
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`kd_buku` int(4) unsigned zerofill
,`judul` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_denda`
--
DROP TABLE IF EXISTS `v_denda`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_denda`  AS  select `a`.`kd_denda` AS `kd_denda`,`a`.`jenis_denda` AS `jenis_denda`,`a`.`total_denda` AS `total_denda`,`b`.`kd_transaksi` AS `kd_transaksi`,`b`.`tanggal_pinjam` AS `tanggal_pinjam`,`b`.`tanggal_kembali` AS `tanggal_kembali`,`b`.`tgl_pengembalian` AS `tgl_pengembalian`,`c`.`id_anggota` AS `id_anggota`,`c`.`nama` AS `nama` from ((`denda` `a` join `pinjam` `b` on((`a`.`kd_denda` = `b`.`kd_denda`))) join `anggota` `c` on((`b`.`id_anggota` = `c`.`id_anggota`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_userpinjam`
--
DROP TABLE IF EXISTS `v_userpinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_userpinjam`  AS  select `a`.`id_anggota` AS `id_anggota`,`a`.`nama` AS `nama`,`b`.`kd_transaksi` AS `kd_transaksi`,`b`.`tanggal_pinjam` AS `tanggal_pinjam`,`b`.`tanggal_kembali` AS `tanggal_kembali`,`c`.`kd_buku` AS `kd_buku`,`c`.`judul` AS `judul` from ((`anggota` `a` join `pinjam` `b` on((`a`.`id_anggota` = `b`.`id_anggota`))) join `buku` `c` on((`b`.`kd_buku` = `c`.`kd_buku`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`kd_denda`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kd_buku` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `kd_denda` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `kd_transaksi` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
