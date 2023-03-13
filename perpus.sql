-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 04:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `nohp`) VALUES
('L001', 'C. Chandra Bayuaji', 'Laki-laki', 'Jalan Merdeka No 97, Yogyakarta', '089997778883'),
('L002', 'Kirino Isha Khalil', 'Laki-laki', 'Jalan Mentari No 22, Magelang', '08221334763'),
('L003', 'Calvin Antares', 'Laki-laki', 'Jalan Kenanga No 11, Solo', '0812345678901'),
('L004', 'August Juang', 'Perempuan', 'Jalan Kenanga No 08, Solo', '0895392928975');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_pengarang`, `id_penerbit`, `judul_buku`, `tahun_terbit`, `jumlah`) VALUES
('BK-001', 1, 1, 'Arah Langkah', 2018, 5),
('BK-002', 1, 1, 'Konspirasi Alam Semesta', 2018, 5),
('BK-003', 1, 1, 'Catatan Juang', 2017, 4),
('BK-004', 6, 4, 'Hujan', 2016, 4);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `gambar`, `id_buku`, `deskripsi`, `status`) VALUES
(1, 'arah_langkah.png', 'BK-001', 'Bulan April, tahun 2013, berawal dengan niat dan tujuan yang berbeda—salah satunya karena hati yang terluka, tiga pengelana memulai sebuah perjalanan menyusuri daerah-daerah di Indonesia. Lewat cara yang seru tapi menantang, mereka tidak hanya menyaksikan langsung keindahan negeri ini, mereka juga harus menghadapi pertarungan dengan kegelisahan yang dibawa masing-masing.\r\nArah Langkah bukan sekadar catatan perjalanan yang melukiskan keindahan alam, budaya, dan manusia lewat teks dan foto. Tetapi juga memberikan cerita lain tentang kondisi negeri yang tidak selalu sebagus seperti di layar televisi. Meskipun begitu, semua daerah memang memiliki cerita yang berbeda-beda, namun di dalam perbedaan itu, cinta dan persahabatan selalu bisa ditemukan.', 'Tersedia'),
(2, 'catatan_juang.jpg', 'BK-003', 'Seseorang yang akan menemani setiap langkahmu dengan satu kebaikan kecil setiap harinya.\r\n\r\nTertanda,\r\nJuang', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
(3, 'ayu', 'ayu', 'bdf0e4246b6103733bb7978540773e1f', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` varchar(20) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `id_anggota`, `id_buku`, `tgl_pesan`, `tgl_kembali`) VALUES
('RQ-001', 'L001', 'BK-001', '2021-12-26', '2022-01-02'),
('RQ-002', 'L004', 'BK-003', '2021-12-27', '2022-01-03');

--
-- Triggers `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `jml_after_pesan` AFTER INSERT ON `pemesanan` FOR EACH ROW UPDATE buku set buku.jumlah = buku.jumlah -1 where buku.id_buku = new.id_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'MediaKita'),
(3, 'Lentera Dipantara'),
(4, 'Gramedia Pustaka Utama');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Fiersa  Besari'),
(5, ' Pramoedya Ananta Toer'),
(6, 'Tere Liye');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(11) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_kembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `id_anggota`, `id_buku`, `tgl_pesan`, `tgl_kembali`, `tgl_kembalikan`) VALUES
(1, 'L002', 'BK-001', '2021-12-10', '2021-12-17', '2021-12-26'),
(2, 'L001', 'BK-001', '2021-12-25', '2022-01-01', '2021-12-26');

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
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
