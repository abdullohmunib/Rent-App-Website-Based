-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2021 pada 12.46
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` int(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `password`) VALUES
(19523068, 'admin068'),
(19523115, 'admin115'),
(19523120, 'admin120');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(255) NOT NULL,
  `waktu` date NOT NULL DEFAULT current_timestamp(),
  `informasi` varchar(999) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `waktu`, `informasi`, `nip`) VALUES
(8, '2021-07-03', 'Diinformasikan bahwa pada tanggal 03 Juli - 20 Juli adalah program pemerintah untuk gerakan dirumah saja, maka dari itu seluruh fasilitas kampus tidak akan disewakan. Oleh karena itu apabila terjadi permohonan sewa fasilitas, makan akan ditolak oleh sistem. Demikian informasi yang kami sampaikan. Terimakasih ', 19523115);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`email`, `password`) VALUES
('19523000@students.uii.ac.id', 'bismillah000'),
('19523068@students.uii.ac.id', 'bismillah068'),
('19523115@students.uii.ac.id', 'bismillah115'),
('19523120@students.uii.ac.id', 'bismillah120');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_penyewa` varchar(30) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL,
  `hari` int(3) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `nip` int(30) DEFAULT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `email`, `nama_penyewa`, `nama_fasilitas`, `hari`, `no_telp`, `tanggal`, `harga`, `total`, `nip`, `status`) VALUES
(283, '19523115@students.uii.ac.id', 'Muchammad Abdulloh Munib', 'Auditorium', 1, '081393943676', '2021-07-06', 10000000, 10000000, 19523115, 'Diterima'),
(284, '19523115@students.uii.ac.id', 'Muchammad Abdulloh Munib', 'Gedung Olahraga', 4, '081393943676', '2021-07-13', 8000000, 32000000, 19523115, 'Diterima'),
(285, '19523068@students.uii.ac.id', 'Jinan Prabowoningtyas', 'Rusunawa Kampus', 3, '081215261666', '2021-07-06', 5000000, 15000000, NULL, 'Menunggu'),
(286, '19523068@students.uii.ac.id', 'Jinan Prabowoningtyas', 'Auditorium', 1, '081215261666', '2021-07-10', 10000000, 10000000, 19523115, 'Diterima'),
(288, '19523120@students.uii.ac.id', 'Ahmad Kusumo Haryo', 'Gedung Olahraga', 3, '081393941234', '2021-07-10', 8000000, 24000000, 19523115, 'Ditolak'),
(289, '19523120@students.uii.ac.id', 'Ahmad Kusumo Haryo', 'Lapangan Sepak Bola', 4, '081393941234', '2021-07-10', 8000000, 32000000, 19523115, 'Diterima'),
(290, '19523120@students.uii.ac.id', 'Ahmad Kusumo Haryo', 'Auditorium', 1, '081393941234', '2021-07-14', 10000000, 10000000, 19523115, 'Diterima'),
(291, '19523115@students.uii.ac.id', 'Muchammad Abdulloh Munib', 'Auditorium', 1, '081393943676', '2021-07-24', 10000000, 10000000, 19523115, 'Diterima'),
(293, '19523115@students.uii.ac.id', 'Muchammad Abdulloh Munib', 'Auditorium', 1, '081393943676', '2021-07-14', 10000000, 10000000, 19523115, 'Ditolak'),
(294, '19523115@students.uii.ac.id', 'Muchammad Abdulloh Munib', 'Auditorium', 1, '081393943676', '2021-07-23', 10000000, 10000000, NULL, 'Menunggu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
