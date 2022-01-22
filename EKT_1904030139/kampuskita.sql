-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 13.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampuskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'dimas nur pras', 'griya karawaci blok c2 no 4', 'pria', 'islam', 'SMK YUPPENTEK 2', 'm1.png'),
(17, 'abroy', 'babakan', 'pria', 'islam', 'yuppentek 2', 'm1.png'),
(18, 'nisa julianti', 'padat karya', 'perempuan', 'islam', 'al-husna', 'm2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_unis`
--

CREATE TABLE `dosen_unis` (
  `id` int(11) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pend1` varchar(40) NOT NULL,
  `pend2` varchar(40) NOT NULL,
  `pend3` varchar(40) NOT NULL,
  `foto_dosen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen_unis`
--

INSERT INTO `dosen_unis` (`id`, `nidn`, `nama`, `email`, `jenis_kelamin`, `alamat`, `agama`, `pend1`, `pend2`, `pend3`, `foto_dosen`) VALUES
(1, '00001111', 'waqidotul qoriyah', 'Qori@gmail.com', 'perempuan', 'cipondoh,jakarta selatan', 'islam', 'S.Kom', 'M.Si', 'Prof', 'd2.png'),
(3, '12345678', 'khin khin', 'pakrik@gmail.com', 'laki laki', 'Citra tangerang', 'muslim', 'sarjana', 'magister', 'prof', 'd1.png'),
(4, '1904030103', 'jamal', 'jamal@gmail.com', 'laki laki', 'cilandak', 'islam', 's1', 's2', 's3', 'd1.png'),
(5, '12345', 'asdfha', 'as@gmail.com', 'perempuan', 'cijengir', 'islam', 'sd', 'smp', 'smk', 'd2.png'),
(6, '1904030101', 'Yanto', 'yanto@gmail.com', 'pria', 'cijengir', 'islam', 'S1', 'S2', 'S3', 'd1.png'),
(7, '1904030102', 'Ahmad jamal', 'ahjal@gmail.com', 'laki laki', 'ciputat', 'islam', 's1', 's2', 's3', 'd1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen_unis`
--
ALTER TABLE `dosen_unis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `dosen_unis`
--
ALTER TABLE `dosen_unis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
