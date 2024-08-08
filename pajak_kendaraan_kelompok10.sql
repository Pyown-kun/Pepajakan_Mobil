-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2024 pada 10.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak_kendaraan_kelompok10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar465`
--

CREATE TABLE `daftar465` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar465`
--

INSERT INTO `daftar465` (`id`, `nama`, `nik`, `alamat`, `tempat_lahir`, `tanggal_lahir`) VALUES
(2, 'ANDREA RAMADHAN CAHYA ARYANA', 123, 'asfd', 'asfd', '2024-08-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran443`
--

CREATE TABLE `pembayaran443` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `plat_nomor` varchar(255) NOT NULL,
  `jenis_kendaran` varchar(255) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpanjangan450`
--

CREATE TABLE `perpanjangan450` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `lama_perpanjangan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bunga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `hak_akses` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `nama`, `password`, `hak_akses`) VALUES
(5, 'admin', 'user', '$2y$10$y45WDSv7Qds2jOch9Zcd8uRvVcdhNt8qXajPn3aa5S8xeBL8qLtZq', 'all'),
(6, '2213010465', 'andrea', '$2y$10$0EFoBWzSeISdgCFxCP/Vl.O8oMD.0deK1/i8LUgRwBaDPiHB6Nt/q', 'daftar'),
(7, '2213010443', 'arami', '$2y$10$0dLw9MRBJFsV0kQQP5K3t.PZ2GWuh4upIwOGVdH5NRM0nXWBVibs.', 'bayar'),
(8, '2213010450', 'adit', '$2y$10$ytlupZo6vtCQuO.hwKh5Pe5bT.JgcGxPCa7B8cv351Hh9zypI684K', 'panjang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar465`
--
ALTER TABLE `daftar465`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran443`
--
ALTER TABLE `pembayaran443`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perpanjangan450`
--
ALTER TABLE `perpanjangan450`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar465`
--
ALTER TABLE `daftar465`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran443`
--
ALTER TABLE `pembayaran443`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perpanjangan450`
--
ALTER TABLE `perpanjangan450`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
