-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 15.24
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
(18, 'nisa julianti', 'padat karya', 'perempuan', 'islam', 'SMK al-husna', 'm2.png');

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
(8, 'FTTI5029', 'AHMAD SYAUKI ', 'ahmadsyauki@unis.ac.id', 'laki laki', 'CIPONDOH, TANGERANG', 'islam', 'S.Kom', 'M.Kom', '-', 'd1.png'),
(9, 'FTTI5023', 'IMAM HALIM MURSYIDIN', 'imamhalimmursyidin@unis.ac.id', 'laki laki', 'CIPUTAT, TANGERANG', 'islam', 'S.kom', 'M.Kom', '-', 'd1.png'),
(10, 'FTTI5024', 'ARIS SOPYAN RIPANDI ', 'aridspoyanripandi@unis.ac.id', 'laki laki', 'KOSAMBI, TANGERANG', 'islam', 'S.Kom', 'M.Kom', '-', 'd1.png'),
(11, 'FTTI5025', 'ASEP HARDIYANTO NUGROHO', 'asephardiyantonugroho@unis.ac.id', 'laki laki', 'KARAWACI, TANGERANG', 'islam', 'S.kom', 'M.Kom', '-', 'd1.png'),
(12, 'FTTI5026', 'NIA KOMALASARI', 'niakomalasari@unis.ac.id', 'perempuan', 'TELUK NAGA, TANGERANG', 'islam', 'S.Si', 'M.Kom', '-', 'd2.png'),
(13, 'FTTI5027', 'TAUFIK HIDAYAT ', 'taufikhidayat@unis.ac.id', 'laki laki', 'PANONGAN, TANGERANG', 'islam', 'S.Kom', 'M.Kom', '-', 'd1.png'),
(14, 'FTTI5028', 'SITI MURYANAH', 'sitimuryanah@unis.ac.id', 'perempuan', 'CIMONE, TANGERANG', 'islam', 'S.Kom', 'M.Kom', '-', 'd2.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
