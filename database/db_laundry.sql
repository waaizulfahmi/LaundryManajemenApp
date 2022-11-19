-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 03.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id_pakaian` int(11) NOT NULL,
  `nama_pakaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id_pakaian`, `nama_pakaian`) VALUES
(2, 'Celana Panjang'),
(3, 'Kaos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `nama_tarif` varchar(255) NOT NULL,
  `waktu_tarif` varchar(255) NOT NULL,
  `biaya_tarif` varchar(255) NOT NULL,
  `jenis_tarif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `nama_tarif`, `waktu_tarif`, `biaya_tarif`, `jenis_tarif`) VALUES
(2, 'Jasa Cuci', '1', '4000', 'Kg'),
(3, 'Tarif 1', '1', '3000', 'Satuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_transaksi` varchar(255) NOT NULL,
  `jam_transaksi` varchar(255) NOT NULL,
  `paket_transaksi` varchar(255) NOT NULL,
  `jenis_paket` varchar(255) NOT NULL,
  `berat_jumlah` varchar(255) NOT NULL,
  `total_transaksi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `tgl_transaksi`, `jam_transaksi`, `paket_transaksi`, `jenis_paket`, `berat_jumlah`, `total_transaksi`, `status`) VALUES
(5, 'bambang', '14-11-2022', '07-31-17', 'Jasa Cuci (4000)', 'Kg', '10', '40000', '0'),
(1668386031, 'tantio', '14-11-2022', '07-33-51', 'Jasa Cuci (4000)', 'Kg', '5', '20000', '0'),
(1668386070, 'sena', '14-11-2022', '07-34-30', 'Jasa Cuci (4000)', 'Kg', '2', '8000', '1'),
(1668386190, 'sena', '14-11-2022', '07-36-30', 'Jasa Cuci (4000)', 'Kg', '2', '8000', '0'),
(1668386618, 'bambang', '14-11-2022', '07-43-38', 'Tarif 1 (3000)', 'Pcs', '1', '3000', ''),
(1668391725, 'bambang', '14-11-2022', '09-08-45', 'Jasa Cuci (4000)', 'Kg', '3', '12000', '0'),
(2147483647, 'Varrel', '13-11-2022', '23-18-43', 'Jasa Cuci (4000)', 'Kg', '3', '12000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi_d` int(11) NOT NULL,
  `nama_d` varchar(255) NOT NULL,
  `jumlah_d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_detail`, `id_transaksi_d`, `nama_d`, `jumlah_d`) VALUES
(1, 2147483647, 'Celana Panjang', '5'),
(2, 5, 'Celana Panjang', '5'),
(3, 1668386031, 'Celana Panjang', '1'),
(4, 1668386070, 'Celana Panjang', '1'),
(5, 1668386618, 'Tarif 1', '1'),
(6, 1668391725, 'Celana Panjang', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_status`
--

CREATE TABLE `transaksi_status` (
  `id_status` int(11) NOT NULL,
  `id_transaksi_s` int(11) NOT NULL,
  `cuci` int(11) NOT NULL,
  `kering` int(11) NOT NULL,
  `strika` int(11) NOT NULL,
  `siap` int(11) NOT NULL,
  `selesai` int(11) NOT NULL,
  `tgl_ambil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_status`
--

INSERT INTO `transaksi_status` (`id_status`, `id_transaksi_s`, `cuci`, `kering`, `strika`, `siap`, `selesai`, `tgl_ambil`) VALUES
(2, 2147483647, 1, 1, 1, 1, 1, 13),
(3, 5, 1, 0, 0, 0, 0, 0),
(4, 1668386031, 1, 1, 0, 0, 0, 0),
(5, 1668386070, 1, 1, 1, 1, 1, 14),
(6, 1668386190, 1, 0, 0, 0, 0, 0),
(7, 1668386618, 1, 0, 0, 0, 0, 0),
(8, 1668391725, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '$2y$10$nT2.nYO/lfu4krKD2dZqCOG7nrYeEIngi4o/llHt1hlvARYL0CmOG', 'admin', '1'),
(2, 'sena', '$2y$10$SKe0.MqXj31y7pA0Mu75jOGG1wskGKE8SYTpnEn2aJnKUz2oZctku', 'sena', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id_pakaian`);

--
-- Indeks untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `transaksi_status`
--
ALTER TABLE `transaksi_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi_status`
--
ALTER TABLE `transaksi_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
