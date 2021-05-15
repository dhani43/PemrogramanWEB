-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Bulan Mei 2021 pada 16.39
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` char(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Mochammad Hardhani', '192410102053', 'mochammadhardhani@gmail.com', 'Teknologi Informasi', 'hardhani.png'),
(2, 'Masyhuri', '192410101054', 'masyhuri@gmail.com', 'Sistem Informasi', 'masyhuri.png'),
(3, 'Diah Ayu Puri', '192410103055', 'diahayu@gmail.com', 'Informatika', 'diahayu.png'),
(4, 'Sumiyati', '192410102057', 'sumiyati@gmail.com', 'Teknologi Informasi', 'sumiyati.png'),
(5, 'Bambang Sutrisno', '192410103058', 'bambang@gmail.com', 'Informatika', 'bambang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'dhanu', '$2y$10$.ahJ3H6U3MVeW2wgOsGTqeNv4pA8eK9jtqOJJrEuWMfg5dzBtCMRO'),
(5, 'admin', '$2y$10$IAO1lWHHgwIv53fAZ0HLi.mHbnUk44FXxHdcgB1k/rPN7U.MDQa3y'),
(6, 'dhani', '$2y$10$J76xeGhxeDFa3lbT4mY8lO5hAjfSHu0HP8JDggdmClPdLq.7ShbSa'),
(8, 'vina', '$2y$10$3cz9kT4emMIrwTHPShX1eu582MBft0o3WMO5X7xCpGJQWfGGn6o7.'),
(9, 'daka', '$2y$10$6FCPEJn9JB7vHn5REn/4vOX6BFEoyuCpXlZv6OQ11yO6iTLxcoU2y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
