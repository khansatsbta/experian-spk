-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 20.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `experian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(10) NOT NULL,
  `pendapatan` int(10) NOT NULL,
  `tanggungan` int(10) NOT NULL,
  `umur` int(10) NOT NULL,
  `kekayaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `pendapatan`, `tanggungan`, `umur`, `kekayaan`) VALUES
(1, 25, 20, 10, 25),
(2, 5, 4, 2, 5),
(3, 5, 4, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `nama` varchar(100) NOT NULL,
  `pendapatan` varchar(200) NOT NULL,
  `tanggungan` int(10) NOT NULL,
  `umur` int(10) NOT NULL,
  `kekayaan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`nama`, `pendapatan`, `tanggungan`, `umur`, `kekayaan`) VALUES
('Dahyun', '4', 4, 4, 4),
('Eunseo', '4', 4, 4, 3),
('Olivia', '4', 4, 4, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gap_pm`
--

CREATE TABLE `gap_pm` (
  `nama` varchar(100) NOT NULL,
  `gappendapatan` varchar(200) NOT NULL,
  `gaptanggungan` int(10) NOT NULL,
  `gapumur` int(10) NOT NULL,
  `gapkekayaan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gap_pm`
--

INSERT INTO `gap_pm` (`nama`, `gappendapatan`, `gaptanggungan`, `gapumur`, `gapkekayaan`) VALUES
('Dahyun', '1', 1, 1, 2),
('Eunseo', '1', 1, 1, 1),
('Olivia', '1', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pm`
--

CREATE TABLE `hasil_pm` (
  `nama` varchar(100) NOT NULL,
  `bobotpendapatan` float NOT NULL,
  `bobottanggungan` float NOT NULL,
  `bobotumur` float NOT NULL,
  `bobotkekayaan` float NOT NULL,
  `ncf` float NOT NULL,
  `nsf` float NOT NULL,
  `hasil_pm` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_pm`
--

INSERT INTO `hasil_pm` (`nama`, `bobotpendapatan`, `bobottanggungan`, `bobotumur`, `bobotkekayaan`, `ncf`, `nsf`, `hasil_pm`) VALUES
('Dahyun', 4.5, 4.5, 4.5, 3.5, 4, 4.5, 4.2),
('Eunseo', 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5),
('Olivia', 4.5, 4.5, 4.5, 5, 4.75, 4.5, 4.65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_saw`
--

CREATE TABLE `hasil_saw` (
  `nama` varchar(100) NOT NULL,
  `bobotpendapatan` float NOT NULL,
  `bobottanggungan` float NOT NULL,
  `bobotumur` float NOT NULL,
  `bobotkekayaan` float NOT NULL,
  `hasil_saw` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_saw`
--

INSERT INTO `hasil_saw` (`nama`, `bobotpendapatan`, `bobottanggungan`, `bobotumur`, `bobotkekayaan`, `hasil_saw`) VALUES
('Dahyun', 0.3, 0.2, 0.2, 0.3, 0.3),
('Eunseo', 0.3, 0.2, 0.2, 0.3, 0.15),
('Olivia', 0.3, 0.2, 0.2, 0.3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_wp`
--

CREATE TABLE `hasil_wp` (
  `nama` varchar(100) NOT NULL,
  `bobotpendapatan` float NOT NULL,
  `bobottanggungan` float NOT NULL,
  `bobotumur` float NOT NULL,
  `bobotkekayaan` float NOT NULL,
  `hasil_wp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_wp`
--

INSERT INTO `hasil_wp` (`nama`, `bobotpendapatan`, `bobottanggungan`, `bobotumur`, `bobotkekayaan`, `hasil_wp`) VALUES
('Dahyun', 5, 4, 2, 5, 0.367746),
('Eunseo', 5, 4, 2, 5, 0.336128),
('Olivia', 5, 4, 2, 5, 0.296126);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_nasabah`
--

CREATE TABLE `ket_nasabah` (
  `nama` varchar(100) NOT NULL,
  `ket_pendapatan` varchar(200) NOT NULL,
  `ket_tanggungan` int(10) NOT NULL,
  `ket_umur` int(10) NOT NULL,
  `ket_kekayaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ket_nasabah`
--

INSERT INTO `ket_nasabah` (`nama`, `ket_pendapatan`, `ket_tanggungan`, `ket_umur`, `ket_kekayaan`) VALUES
('Dahyun', '>10.000.000', 0, 21, '>2.000.000.000'),
('Eunseo', '>10.000.000', 0, 21, '1.000.000.000 - 2.000.000.000'),
('Olivia', '>10.000.000', 0, 21, '100.000.001 - 1.000.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('luckyseven', 'luckyseven');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vektors`
--

CREATE TABLE `vektors` (
  `nama` varchar(100) NOT NULL,
  `pbpendapatan` float NOT NULL,
  `pbtanggungan` float NOT NULL,
  `pbumur` float NOT NULL,
  `pbkekayaan` float NOT NULL,
  `vektors` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `vektors`
--

INSERT INTO `vektors` (`nama`, `pbpendapatan`, `pbtanggungan`, `pbumur`, `pbkekayaan`, `vektors`) VALUES
('', 0.3125, 0.25, 0.125, 0.3125, 0),
('Dahyun', 0.3125, 0.25, 0.125, 0.3125, 4),
('Eunseo', 0.3125, 0.25, 0.125, 0.3125, 3.65609),
('Olivia', 0.3125, 0.25, 0.125, 0.3125, 3.22098),
('Dahyun', 0.3125, 0.25, 0.125, 0.3125, 4),
('Eunseo', 0.3125, 0.25, 0.125, 0.3125, 3.65609),
('Olivia', 0.3125, 0.25, 0.125, 0.3125, 3.22098),
('Dahyun', 0.3125, 0.25, 0.125, 0.3125, 4),
('Eunseo', 0.3125, 0.25, 0.125, 0.3125, 3.65609),
('Olivia', 0.3125, 0.25, 0.125, 0.3125, 3.22098),
('Dahyun', 0.3125, 0.25, 0.125, 0.3125, 4),
('Eunseo', 0.3125, 0.25, 0.125, 0.3125, 3.65609),
('Olivia', 0.3125, 0.25, 0.125, 0.3125, 3.22098);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
