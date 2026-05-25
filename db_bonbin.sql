-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2026 pada 18.49
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bonbin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `jenis_tiket` varchar(50) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_pesanan` enum('menunggu konfirmasi','sudah dikonfirmasi','selesai','dibatalkan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `email`, `no_hp`, `jenis_tiket`, `jumlah_tiket`, `tanggal_kunjungan`, `metode_pembayaran`, `catatan`, `id_user`, `status_pesanan`) VALUES
(1, 'atha muhammad firdaus', 'awdsadwd@example.com', 2147483647, 'sabtu-minggu', 2, '2026-12-12', 'DANA', '', NULL, ''),
(2, 'atha muhammad firdaus', 'wadsawda@example.com', 2147483647, 'senin-jumat', 1, '1212-12-12', 'DANA', '', NULL, ''),
(3, 'atha muhammad firdaus', 'atmufi2006@gmail.com', 2147483647, 'senin-jumat', 2, '2026-03-12', 'OVO', 'hai', NULL, ''),
(6, 'wadad', 'awdasdawda@gmail.com', 2147483647, 'senin-jumat', 1, '1212-12-12', 'DANA', '12121', 0, ''),
(7, 'iuh', 'awd@djnaawdad', 2147483647, 'Senin-Jumat', 1, '0000-00-00', 'DANA', '1212', 2, ''),
(8, 'awduadhiow', 'awda@hjvdyuawdaw', 2147483647, 'senin-jumat', 1, '1212-12-12', 'GoPay', 'kjdbfkjdAW', 1, 'menunggu konfirmasi'),
(9, 'atha muhammad firdaus', 'atmufi2006@gmail.com', 2147483647, 'couple', 4, '2025-02-23', 'Transfer Bank', 'kok masih gabisa sih heran jujur', 1, 'menunggu konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `nama_user`, `rating`, `komentar`, `tanggal`) VALUES
(1, 'Ahmed Muhajir', 5, 'anjay', '2019-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'atha', '123', 'user'),
(2, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
