-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 01:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tang-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `id_ptn` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `petani` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `id_ptn`, `nama`, `harga`, `stock`, `keterangan`, `gambar`, `petani`, `alamat`, `telepon`) VALUES
(1, 1, 'sayur bayam', 1200, '30', 'harga per 100 g', 'by.jfif', 'dio', 'banjarbaru , kalimantan selatan', '6281348148306'),
(2, 1, 'sayur kangkung', 2500, '30', 'harga per ikat', 'kk.jpg', 'dio', 'banjarbaru , kalimantan selatan', '6281348148306'),
(3, 1, 'sawi hijau sayur', 13000, '30', 'harga per kg', 'sh.jfif', 'dio', 'banjarbaru , kalimantan selatan', '6281348148306'),
(4, 1, 'buah durian montong', 120000, '30', 'harga per kg', 'dm.jfif', 'dio', 'banjarbaru , kalimantan selatan', '6281348148306'),
(5, 1, 'rempah bawang merah', 13000, '30', 'harga per kg', 'bm.jpg', 'dio', 'banjarbaru , kalimantan selatan', '6281348148306'),
(6, 2, 'sawi putih sayur', 28000, '30', 'harga per kg', 'sp.jpeg', 'jud', 'dau, kabupaten malang', '6289653770913'),
(7, 2, 'brokoli sayur', 12000, '30', 'harga per kg', 'bk.jpg', 'jud', 'dau, kabupaten malang', '6289653770913'),
(8, 2, 'buah durian montong dau', 100000, '30', 'harga per kg', 'dm1.jpg', 'jud', 'dau, kabupaten malang', '6289653770913');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(18, 'rega', '$2y$10$waHH3rIcBsaqXzj94FB2JOpmnIy0.y3BJ9PlfKsu300xhShvhVh5O'),
(21, 'aji', '$2y$10$joxOdEBW7LgmWbtNzd4Q.eLKqX88IDlhhoZo/zpw9hbRvAen1xx7G'),
(24, 'aku', '$2y$10$MLUXQJUAa18WRL3lcNdRsOxW0vpe7t1yrJIOfckf65vJHUXRoyc96');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pos` varchar(10) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `narek` varchar(20) NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `petani` varchar(100) NOT NULL,
  `namabrg` varchar(100) NOT NULL,
  `hargabrg` int(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `nama`, `alamat`, `pos`, `kota`, `tlp`, `norek`, `narek`, `bayar`, `bank`, `petani`, `namabrg`, `hargabrg`, `keterangan`) VALUES
(175, 'ilhamlutfi', 'malang', '65167', 'malang', '6281217297023', '019820120120918', 'ilhamlutfi', '100000', 'BNI', 'jud', 'sawi putih sayur', 56000, '6281554655947'),
(176, 'rara', 'Banjar', '65167', 'Malang', '6281217297023', '019820120120918', 'ilhamlutfi', '50000', 'BRI', 'dio', 'rempah bawang merah', 41000, '6281217297023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `username2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `username2`, `email`, `password`, `password2`, `tlp`, `alamat`) VALUES
(22, 'puji', 'aji prayogo', 'aji@gmail.com', '$2y$10$1hXPk2URXZQqoQ99VSITeO6DmOzmt1wJQeYge97PFDhphCD2PqvDa', 'aji', '123456789012', 'karangan'),
(24, 'puji', 'nurohmah', 'puji@gmail.com', '$2y$10$9xXlnRvvfB/JJc1LMeVHIOTbbXTG4V8yzE2Hw1qh1YwZn6jybXiq2', '$2y$10$zS35urJRiQddZ', '2147483647', 'pogalan\r\n'),
(26, 'rega', 'aji', 'rega@gmail.com', '$2y$10$I4Bpg0fzOhQGKvYDANUNF.Pv2e8kirntttqQSbNYvi7YT.EOD4xBy', '$2y$10$yHDudS2Fq2NiF', '123456789012', 'karangan'),
(28, 'pamukti', 'aji', 'pamukti@gmail.com', '$2y$10$Y9tXAQ2ijJBgLywNFbuaKOK95kih.bkYM33zLfd38WhX9XyLAphWa', '$2y$10$ddZvkHN8NH270', '123456789012', 'karangsoko'),
(29, 'waanna', 'nada', 'waannanada@gmail.com', '$2y$10$avEZvP16yFsC4jf8sV16cu5JZc3P0.os4eSmoEwvQs4VS98QOyT6e', '$2y$10$yM3z3fFpJtwfG', '082332944211', 'gondang'),
(30, 'ilham', 'lutfi', 'ilham@gmail.com', '$2y$10$oXQS9cPrfh62m5V69x8OmugR1LdwOoyeiQNdWgfQEm/GmscUkYn7C', '$2y$10$nVBVDSE4H358i', '081217297023', 'malang'),
(31, 'muhammad', 'zadah', 'zad@gmail.com', '$2y$10$vH9gwiejgUc/Xqod/7aPZeo8ILmecBoaP7C4S8Lt1QGUOotAOHrA6', '$2y$10$eTBQYQj6VveRo', '091893119281', 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petani`
--

CREATE TABLE `tb_petani` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petani`
--

INSERT INTO `tb_petani` (`id`, `username`, `password`, `password2`, `alamat`, `telepon`) VALUES
(1, 'dio', '$2y$10$14/wagQK/veAjcL1ALUa1OWuncGndZ7iJAfIqC9.wsrdboLSrKSni', '$2y$10$xvvCqesw1th.lMzXMqgPpuXZ/yu7iAnf2Ut4M2VG4a9lZWISf/yjO', 'banjarbaru , kalimantan selatan', '6281348148306'),
(2, 'jud', '$2y$10$ohDbF9BtsSLQvmMTHV0XdOuH3wL0NydsAN3WFHzve1gHYLW96Wvpm', '$2y$10$CLceQFFrp8XyBLDxTEY8ROwSR6KJoGsbghpdnIS6NcRmhDe7CKAdi', 'dau, kabupaten malang', '6289653770913');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trans`
--

CREATE TABLE `tb_trans` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `dt` varchar(1000) NOT NULL,
  `tlp` varchar(200) NOT NULL,
  `ongkir` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_trans`
--

INSERT INTO `tb_trans` (`id`, `nama`, `dt`, `tlp`, `ongkir`) VALUES
(1, 'Ilham', 'banjar - malang', '6281217297023', 200000),
(2, 'Yanu', 'malang - banjar', '6285157025526', 200000),
(3, 'Rony', 'malang - malang', '6281554655947', 20000),
(4, 'Reza', 'banjar - banjar', '6285604556332', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bp` (`id_ptn`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petani`
--
ALTER TABLE `tb_petani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_trans`
--
ALTER TABLE `tb_trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_petani`
--
ALTER TABLE `tb_petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_trans`
--
ALTER TABLE `tb_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `bp` FOREIGN KEY (`id_ptn`) REFERENCES `tb_petani` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
