-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 14.34
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp_01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama`, `tempat`, `tl`, `gender`, `email`, `telp`) VALUES
(5, '9876576008', 'Zulfan', 'Bandung', '2023-06-15', 'Laki-laki', 'julfan@gmai.com', '088970803025'),
(6, '1234567009', 'Prilla', 'Seoul', '2001-05-05', 'Perempuan', 'prillarosaria@upi.edu', '081234876235'),
(7, '7135712004', 'Son', 'Canada', '1994-02-21', 'Perempuan', 'chrstjsmn@gmail.com', '081573038425'),
(8, '8478323421', 'Jeno', 'Incheon', '2000-12-23', 'Laki-laki', 'jeno@gmail.com', '08138746239'),
(9, '8795642002', 'Mark', 'Canada', '1999-08-20', 'Laki-laki', 'marklee@upi.edu', '08237218473'),
(10, '12345123456', 'Min Yoongi', 'Daegu', '2023-06-03', 'Laki-Laki', 'yoongi@gmail.com', '085623231456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
