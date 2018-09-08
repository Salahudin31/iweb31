-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2018 pada 14.20
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iweb31`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `kode_film` varchar(12) NOT NULL,
  `kode_genre` varchar(10) NOT NULL,
  `kode_negara` varchar(5) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `kode_kualitas` varchar(10) NOT NULL,
  `kode_rating` varchar(12) NOT NULL,
  `tgl_rilis` int(11) NOT NULL,
  `judul_film` varchar(30) NOT NULL,
  `link_film` text NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `kode_film`, `kode_genre`, `kode_negara`, `kode_kategori`, `kode_kualitas`, `kode_rating`, `tgl_rilis`, `judul_film`, `link_film`, `durasi`, `desk`) VALUES
(1, '00210001022A', '0021', '0001', '022A', '', '00210001022A', 1531935327, 'Bakura', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.'),
(2, '00220002022A', '0022', '0002', '022A', '', '00220002022A', 1531935327, 'Gyoku', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.'),
(3, '00230003022A', '0023', '0003', '022A', '', '00230003022A', 1531935327, 'Kyokuko', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.'),
(4, '00240004022A', '0024', '0004', '022A', '', '00240004022A', 1531935327, 'Jujo', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.'),
(5, '00250005022A', '0025', '0005', '022A', '', '00250005022A', 1531935327, 'yuchan', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.'),
(6, '00260006022A', '0026', '0006', '022A', '', '00260006022A', 1531935327, 'Ryuta Kagura', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam. Hisashi mengunjungi Mai di rumah sakit setiap hari sebelum bekerja. Tanpa tahu kapan atau kapan dia akan bangun, orang tua Mai mendorong Hisashi untuk mencari orang lain, tetapi dia menolak untuk menyerah dan terus berdoa untuk kesembuhannya. Seakan doanya dijawab, Mai mulai sadar kembali beberapa tahun kemudian, dan bahkan mengucapkan beberapa kata. Tetapi tragisnya, dia telah menderita kerusakan otak dan tidak memiliki ingatan tentang Hisashi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `kode_genre` varchar(10) NOT NULL,
  `nm_genre` varchar(20) NOT NULL,
  `desk_genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`kode_genre`, `nm_genre`, `desk_genre`) VALUES
('0021', 'Action', ''),
('0022', 'Adventure', ''),
('0023', 'Biography', ''),
('0024', 'Child', ''),
('0025', 'Comedy', ''),
('0026', 'Documentary', ''),
('0027', 'Drama', ''),
('0028', 'Fantasy', ''),
('0029', 'Horror', ''),
('0030', 'Musical', ''),
('0031', 'Mystery', ''),
('0032', 'Romantic', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` varchar(10) NOT NULL,
  `nm_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nm_kategori`) VALUES
('011A', 'Artikel'),
('022A', 'Anime'),
('023B', 'Movie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualitas`
--

CREATE TABLE `kualitas` (
  `kode_kualitas` varchar(10) NOT NULL,
  `nm_kualitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kualitas`
--

INSERT INTO `kualitas` (`kode_kualitas`, `nm_kualitas`) VALUES
('0240P', '240p'),
('0360P', '360p'),
('0480P', '480p'),
('0720P', '720p'),
('1080P', '1080p'),
('2160P', '2160p'),
('4000P', '4k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `negara`
--

CREATE TABLE `negara` (
  `kode_negara` varchar(5) NOT NULL,
  `nm_negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `negara`
--

INSERT INTO `negara` (`kode_negara`, `nm_negara`) VALUES
('0001', 'Jepang'),
('0002', 'Korea'),
('0003', 'China'),
('0004', 'Thailand'),
('0005', 'Indonesia'),
('0006', 'Amerika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `kd_rating` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `skor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`kode_genre`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `kualitas`
--
ALTER TABLE `kualitas`
  ADD PRIMARY KEY (`kode_kualitas`);

--
-- Indeks untuk tabel `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`kode_negara`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
