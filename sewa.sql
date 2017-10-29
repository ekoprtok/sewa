-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2017 pada 17.13
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_jasa`
--

CREATE TABLE IF NOT EXISTS `jenis_jasa` (
`jenis_jasa_id` int(11) NOT NULL,
  `nama_jasa` varchar(45) DEFAULT NULL,
  `harga_jasa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_jasa`
--

INSERT INTO `jenis_jasa` (`jenis_jasa_id`, `nama_jasa`, `harga_jasa`) VALUES
(1, 'Latihan Musik', '500000'),
(2, 'Latihan Tari', '80000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Alat Musik'),
(2, 'Kostum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`produk_id` int(11) NOT NULL,
  `kategori_id` varchar(45) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `stok` varchar(45) DEFAULT NULL,
  `deskripsi` text,
  `gambar` text,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `kategori_id`, `nama_produk`, `harga`, `stok`, `deskripsi`, `gambar`, `created_on`) VALUES
(1, '1', 'Gitar1', '500000', '3', 'test', '901699a5d34b8666384b462d160796a8.jpg', '2017-10-21 00:00:00'),
(3, '2', 'weqwe', '50000', '12', 'sadasd', '045b7d8900f933a6b9d59880c335625f.jpg', '2017-10-21 20:19:23'),
(4, '2', 'test1', '150000', '12', 'An upload form is displayed, allowing a user to select a file and upload it. When the form is submitted, the file is uploaded to the destination you specify.', '8432dd4f52c1e85772d6007d5986917c.jpg', '2017-10-21 21:52:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`transaksi_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `produk_id` varchar(45) DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jumlah` varbinary(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `status` enum('1','0','2') DEFAULT '0' COMMENT '2 kembali',
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `user_id`, `produk_id`, `dari`, `sampai`, `jumlah`, `harga`, `status`, `created_on`) VALUES
(2, '6', '1', '2017-10-21', '2017-10-22', 0x32, '1000000', '2', '2017-10-21 15:56:16'),
(3, '7', '1', '2017-10-21', '2017-10-24', 0x31, '1500000', '1', '2017-10-21 21:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_jasa`
--

CREATE TABLE IF NOT EXISTS `transaksi_jasa` (
`transaksi_jasa_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `keterangan` text,
  `jenis_jasa_id` varchar(45) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_jasa`
--

INSERT INTO `transaksi_jasa` (`transaksi_jasa_id`, `user_id`, `keterangan`, `jenis_jasa_id`, `tanggal_mulai`, `created_on`, `status`) VALUES
(1, '6', 'asdsad', '1', '2017-10-21', NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `nama_lengkap` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `level` enum('0','1') DEFAULT '1',
  `blokir` varchar(1) DEFAULT '0',
  `alamat` text
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `password`, `nama_lengkap`, `email`, `notelp`, `level`, `blokir`, `alamat`) VALUES
(6, '1234', 'test', 'ekop123@a.c', '08917934054', '1', '0', 'sdasdasd`'),
(7, 'admin', 'Administrator', 'admin@admin.com', '08917934054', '0', '0', 'sdasdasd`');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
 ADD PRIMARY KEY (`jenis_jasa_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `transaksi_jasa`
--
ALTER TABLE `transaksi_jasa`
 ADD PRIMARY KEY (`transaksi_jasa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
MODIFY `jenis_jasa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi_jasa`
--
ALTER TABLE `transaksi_jasa`
MODIFY `transaksi_jasa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
