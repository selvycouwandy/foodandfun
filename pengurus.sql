-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jan 2017 pada 04.13
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodnfun`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
