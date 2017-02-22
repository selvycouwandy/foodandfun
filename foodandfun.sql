-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Feb 2017 pada 15.47
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodandfun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `pass`, `id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `tanggal` text NOT NULL,
  `kegiatan` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`tanggal`, `kegiatan`, `id`) VALUES
('1 januari 2017', 'Belajar masak air', 7),
('10 januari 2017', 'Belajar masak nasi putih', 8),
('27 januari 2017', 'Belajar masak indomie kaldu ayam spesial', 9),
('25 Februari 2017', 'Presentasi Makanan', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nim` char(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nim`, `nama`, `alamat`, `telp`, `email`, `ket`) VALUES
(5, '', 'Ibu Husni Anggriani', 'Jl. Sultan Alaudin No. 35', '085832641965', '', 'Pembimbing UKM'),
(6, '', 'William Tumewah', 'Jl. Arief Rate No. 153', '085880773510', '', 'Ketua UKM'),
(7, '', 'Kevin Vicenza Christy Changir', 'Jl. Abu Bakar Lambogo No. 47', '081247634176', '', 'Sekretaris UKM'),
(8, '', 'Febrianne Wijaya', 'Jl. MinasaUpa B. 15/4', '082187453192', '', 'Admin'),
(9, '', 'Ferdinand Pangemanan', 'Jl. Mongisidi Baru Perm. Puri Mutiara', '085242855230', '', 'Admin'),
(10, '', 'Selvy Couwandy', 'Jl. Rajawali 1', '085880773510', '', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id` int(12) NOT NULL,
  `ip` varchar(40) CHARACTER SET latin1 NOT NULL,
  `item_id` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`id`, `ip`, `item_id`) VALUES
(1, '::1', 3),
(2, '::1', 4),
(3, '::1', 7),
(4, '::1', 6),
(5, '192.168.1.106', 3),
(6, '115.178.253.110', 3),
(7, '115.178.253.110', 4),
(8, '115.178.253.110', 5),
(9, '115.178.253.110', 9),
(10, '115.178.253.110', 10),
(11, '115.178.253.110', 1),
(12, '115.178.238.206', 1),
(13, '115.178.238.206', 2),
(14, '115.178.238.206', 7),
(15, '115.178.238.206', 42),
(16, '115.178.238.206', 43),
(17, '115.178.238.206', 49),
(18, '::1', 8),
(19, '::1', 52),
(20, '::1', 49),
(21, '::1', 43),
(22, '::1', 44),
(23, '::1', 42),
(24, '::1', 46),
(25, '::1', 50),
(26, '::1', 55),
(27, '::1', 53),
(28, '::1', 56),
(29, '::1', 59),
(30, '::1', 62),
(31, '::1', 63),
(32, '::1', 67),
(33, '::1', 70),
(34, '::1', 69),
(35, '::1', 68),
(36, '::1', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `namalengkap` varchar(60) NOT NULL,
  `nim` char(8) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telepon` char(12) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`namalengkap`, `nim`, `alamat`, `telepon`, `email`) VALUES
('Febrianne Wijaya', '51014009', 'Jl. MinasaUpa B. 15/4', '082187453192', 'febywijaya@ymail.com'),
('kevin vicenza christy changir', '52014023', 'Jl. Abu Bakar Lambogo No. 47', '081342238596', 'kevinvicenza_15@kharisma.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(5) NOT NULL,
  `nama_pengurus` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `telepon`, `alamat`, `keterangan`) VALUES
(1, 'Febrianne Wijaya', '081342238596', 'Minasasari B15 No.4', 'admin'),
(2, 'Ferdinand Pangemanan', '085242855230', 'Jl. Mongisidi Baru Perm. Puri Mutiara', 'admin'),
(3, 'Selvy Couwandy', '085880773510', 'jl. Rajawali 1', 'admin'),
(4, 'William Tumewah', '085880773510	', 'Jl. Arief Rate No. 153	', 'Ketua UKM'),
(5, 'Kevin Changir', '081247634176', 'Jl. Abu Bakar Lambogo No. 47', 'Sekretaris UKM'),
(6, 'Ibu Husni Anggriani', '085832641965', 'Jl. Sultan Alaudin No. 35', 'pembimbing UKM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `nama` text NOT NULL,
  `link` text NOT NULL,
  `id` int(11) NOT NULL,
  `path_upload_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`nama`, `link`, `id`, `path_upload_img`) VALUES
('Mie Kuah Ebi', 'http://www.royco.co.id/Resep/Detail/4420/1/mie-kuah-ebi', 53, 'mie_kuah_ebi.Jpg'),
('Ramen Pedas', 'http://www.royco.co.id/Resep/Detail/12671/1/ramen-pedas', 55, 'ramen_pedas.Jpg'),
('Kwetiau Siram Kuah Ebi', 'http://www.royco.co.id/Resep/Detail/12647/1/kuetiau-siram-kuah-ebi', 56, 'kwetiau_siram_kuah_ebi.Jpg'),
('Ayam Goreng Madu', 'http://www.royco.co.id/Resep/Detail/21869/1/resep-ayam-goreng-madu', 57, 'ayam_goreng_madu.Png'),
('Sosis Goreng Asam Manis', 'http://www.royco.co.id/Resep/Detail/4400/1/sosis-goreng-asam-manis', 59, 'sosis_goreng_asam_manis.Jpg'),
('Oxtail Soup', 'http://www.royco.co.id/Resep/Detail/4401/1/oxtail-soup', 60, 'oxtail_soup.Jpg'),
('Rawon', 'http://www.royco.co.id/Resep/Detail/4402/1/rawon', 61, 'rawon.Jpg'),
('German Cream Soup', 'http://www.royco.co.id/Resep/Detail/4427/1/german-cream-soup', 62, 'german_cream_soup.Jpg'),
('Minestrone Soup', 'http://www.royco.co.id/Resep/Detail/4428/1/minestrone-soup', 63, 'minestrone_soup.Jpg'),
('Koin Tempe', 'http://www.royco.co.id/Resep/Detail/12638/1/koin-tempe', 64, 'koin_Tempe.Jpg'),
('Tempe Sandwich Ebi', 'http://www.royco.co.id/Resep/Detail/4445/1/tempe-sandwich-ebi', 65, 'tempe_sandwich_ebi.Jpg'),
('Nasi Goreng Hongkong', 'http://www.royco.co.id/Resep/Detail/12631/1/nasi-goreng-hongkong', 67, 'nasi_goreng_hongkong.Jpg'),
('Bebek Goreng', 'http://www.royco.co.id/Resep/Detail/12714/1/bebek-goreng', 68, 'bebek_goreng.Jpg'),
('Risoles Ayam Telur Asin', 'http://www.royco.co.id/Resep/Detail/18633/1/risoles-ayam-telur-asin', 69, 'risoles_ayam_telur_asin.Png'),
('ayam goreng kalasan', 'http://inforesepmasakansederhana.com/rahasia-bumbu-ayam-goreng-kalasan-asli/', 70, 'ayam-goreng-kalasan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `ketua` text NOT NULL,
  `sekretaris` text NOT NULL,
  `pembimbing` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`ketua`, `sekretaris`, `pembimbing`, `id`) VALUES
('William Tumewah', 'Kevin vicenza christy Changir', 'Ibu Husni Anggrian', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
