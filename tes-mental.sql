-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 15.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gagan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank_soal`
--

CREATE TABLE `bank_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `nilai_a` int(5) NOT NULL,
  `nilai_b` int(5) NOT NULL,
  `nilai_c` int(5) NOT NULL,
  `id_group` int(5) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank_soal`
--

INSERT INTO `bank_soal` (`id_soal`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `nilai_a`, `nilai_b`, `nilai_c`, `id_group`, `created_at`, `created_by`) VALUES
(7, 'Saya sering sakit kepala, sakit perut atau macam-macam sakit lainnya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 1, '2021-06-09 20:13:52', 1),
(8, 'Saya banyak merasa cemas atau khawatir terhadap apapun', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 1, '2021-06-09 20:14:40', 1),
(9, 'Saya menjadi sangat marah dan sering tidak dapat mengendalikan kemarahan saya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 4, '2021-06-09 20:15:48', 1),
(10, 'Saya biasanya melakukan apa yang diperintahkan oleh orang lain', 'Tidak Benar', 'Agak Benar', 'Benar', 2, 1, 0, 4, '2021-06-09 20:16:23', 1),
(11, 'Saya gelisah, saya tidak dapat diam untuk waktu yang lama', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 5, '2021-06-09 20:19:54', 1),
(12, 'Bila Sedang gelisah atau cemas, badan saya sering bergerak-gerak tanpa saya sadari', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 5, '2021-06-09 20:20:43', 1),
(13, 'Saya lebih suka sendirian dari pada bersama dengan orang-orang yang seumur saya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 6, '2021-06-09 20:21:29', 1),
(14, 'Saya mempunyai satu orang teman baik atau lebih', 'Tidak Benar', 'Agak Benar', 'Benar', 2, 1, 0, 6, '2021-06-09 20:22:22', 1),
(15, 'Saya berusaha bersikap baik kepada orang lain, saya peduli dengan perasaan mereka', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 7, '2021-06-09 20:23:10', 1),
(16, 'Kalau saya memiliki mainan atau makanan, saya biasanya berbagi dengan orang lain', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 7, '2021-06-09 20:26:02', 1),
(18, 'Saya sering merasa tidak bahagia, sedih atau menangis', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 1, '2021-06-12 22:03:22', 1),
(19, 'Saya nerasa gugup dalam situasi baru, saya mudah kehilangan rasa percaya diri', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 1, '2021-06-12 22:04:29', 1),
(20, 'Banyak yang saya takuit, Saya mudah menjadi takut', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 1, '2021-06-12 22:05:06', 1),
(21, 'Saya sering bertengkar dengan orang lain. Saya dapat memaksa orang lain melakukan apa yang saya inginkan', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 4, '2021-06-12 22:07:45', 1),
(22, 'Saya sering dituduh berbohong atau berbuat curang', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 4, '2021-06-12 22:08:25', 1),
(23, 'Saya mengambil barang yang bukan milik saya dari rumah, sekolah ataupun mana saja', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 4, '2021-06-12 22:09:23', 1),
(24, 'Perhatian saya mudah teralihkan, saya sulit memusatkan perhatian pada apa pun', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 5, '2021-06-12 22:11:46', 1),
(25, 'Sebelum melakukan sesuatu saya berpikir dahulu tentang akibatnya', 'Tidak Benar', 'Agak Benar', 'Benar', 2, 1, 0, 5, '2021-06-12 22:13:20', 1),
(26, 'Saya menyelesaikan pekerjaan yang sedang saya lakukan, saya mempunyai perhatian yang baik terhadap apapun', 'Tidak Benar', 'Agak Benar', 'Benar', 2, 1, 0, 5, '2021-06-12 22:14:28', 1),
(27, 'Orang lain seumuran saya pada umumnya menyukai saya', 'Tidak Benar', 'Agak Benar', 'Benar', 2, 1, 0, 6, '2021-06-12 22:15:47', 1),
(28, 'Saya sering diganggu atau diermainkan oleh anak-anak atau remaja lainnya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 6, '2021-06-12 22:16:43', 1),
(29, 'Saya lebih mudah berteman dengan orang dewasa daripada dengan orang-orang yang seumura saya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 6, '2021-06-12 22:17:45', 1),
(30, 'Saya selalu siap menolong jika ada orang yang terluka, kecewa, atau merasa sakit', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 7, '2021-06-12 22:19:41', 1),
(31, 'Saya bersikap baik terhadap anak-anak yang lebih muda dari saya', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 7, '2021-06-12 22:20:23', 1),
(32, 'Saya sering menawarkan diri untuk membantu orang lain (orang tua, guru, anak-anak)', 'Tidak Benar', 'Agak Benar', 'Benar', 0, 1, 2, 7, '2021-06-12 22:21:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jawaban`
--

CREATE TABLE `data_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jawaban`
--

INSERT INTO `data_jawaban` (`id_jawaban`, `id_user`, `id_soal`, `jawaban`) VALUES
(3, 1, 7, 2),
(4, 1, 8, 5),
(5, 1, 9, 2),
(6, 1, 10, 5),
(7, 1, 11, 2),
(8, 1, 12, 2),
(9, 1, 13, 2),
(10, 1, 14, 2),
(11, 1, 15, 2),
(12, 2, 7, 0),
(13, 2, 8, 2),
(14, 2, 9, 1),
(15, 2, 10, 1),
(16, 2, 11, 0),
(17, 2, 12, 0),
(18, 2, 13, 1),
(19, 2, 14, 1),
(20, 2, 15, 2),
(21, 2, 16, 0),
(22, 2, 18, 0),
(23, 2, 19, 1),
(24, 2, 20, 2),
(25, 2, 21, 0),
(26, 2, 22, 1),
(27, 2, 23, 0),
(28, 2, 24, 2),
(29, 2, 25, 1),
(30, 2, 0, 0),
(31, 2, 26, 1),
(32, 2, 27, 1),
(33, 2, 28, 1),
(34, 2, 29, 1),
(35, 2, 30, 2),
(36, 2, 31, 0),
(37, 2, 32, 0),
(38, 3, 7, 1),
(39, 3, 8, 2),
(40, 3, 9, 0),
(41, 3, 10, 0),
(42, 3, 11, 1),
(43, 3, 12, 0),
(44, 3, 13, 0),
(45, 3, 14, 0),
(46, 3, 15, 2),
(47, 3, 16, 2),
(48, 3, 18, 0),
(49, 3, 19, 0),
(50, 3, 20, 0),
(51, 3, 21, 0),
(52, 3, 22, 0),
(53, 3, 23, 0),
(54, 3, 24, 0),
(55, 3, 25, 2),
(56, 3, 26, 0),
(57, 3, 27, 0),
(58, 3, 28, 0),
(59, 3, 29, 2),
(60, 3, 30, 2),
(61, 3, 31, 2),
(62, 3, 32, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_users`
--

CREATE TABLE `data_users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_users`
--

INSERT INTO `data_users` (`id_user`, `nama_lengkap`, `tgl_lahir`, `kelas`, `jenis_kelamin`, `created_at`) VALUES
(1, 'Ahmad Fatoni', '1997-08-20', 'Satu', 'P', '2021-06-09 20:28:38'),
(2, 'Ahmad Fatoni', '2021-06-16', 'Tiga', 'P', '2021-06-13 10:12:08'),
(3, 'Unicorn Gift', '2021-06-10', 'Satu', 'L', '2021-06-13 11:25:21'),
(4, 'Unicorn Gift', '2008-06-26', 'Satu', 'L', '2021-06-20 10:11:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_soal`
--

CREATE TABLE `group_soal` (
  `id_group` int(11) NOT NULL,
  `nama_group` text NOT NULL,
  `s_normal` int(11) NOT NULL,
  `s_perbatasan` int(11) NOT NULL,
  `s_abnormal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `group_soal`
--

INSERT INTO `group_soal` (`id_group`, `nama_group`, `s_normal`, `s_perbatasan`, `s_abnormal`) VALUES
(1, 'Emosional <i>(Emotional Symptoms)</i>', 5, 6, 10),
(4, 'Perilaku mengganggu <i>(Conduct Problems)</i>', 3, 4, 10),
(5, 'Hiperaktif-Inatensi <i>(Hyperactivity-Inattention)', 5, 6, 10),
(6, 'Masalah relasi dengan kelompok teman sebaya <i>(Peer Problems)</i>', 3, 5, 10),
(7, 'Ketidakpedulian <i>(Prososial)</i>', 10, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `level` int(11) NOT NULL,
  `sub_menu` int(11) NOT NULL,
  `icon` text NOT NULL,
  `color` varchar(20) NOT NULL DEFAULT 'text-primary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `link`, `level`, `sub_menu`, `icon`, `color`) VALUES
(1, 'Dashboard', '', 1, 0, 'app', 'text-danger'),
(10, 'Master Data', '', 1, 0, 'atom', 'text-info'),
(11, 'Group Soal', 'group_soal', 1, 10, 'atom', 'text-info'),
(12, 'Bank Soal', 'bank_soal', 1, 10, 'atom', 'text-info'),
(20, 'Data Pengguna', 'data_users', 1, 0, 'atom', 'text-info'),
(40, 'Laporan', 'laporan', 1, 0, 'map-big', 'text-warning');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `cookie` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `hp`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `level`, `status`, `cookie`, `created_at`) VALUES
(1, 'admin', 'a67914b3c95e94116c0d3aaebd389abce91fe7bb7fb10b7e6406030b9f5d4f8669a08c7c7c944e75eafa3af22dd6dc648cad73989ee3df4a022dad9bf8e92a68', 'BasisCoding', 'basiscoding20@gmail.com', '089676490971', 'L', 'Serang', '1997-08-20', 'Jl. Raya Cilegon Km. 03', 'admin.png', 1, 1, 'oVivdTF1fwlCgW37I9DPLA9MlX0N5gXPJEzah6z4WbvHp68x2xjBctGsU3udsLEQ', '2021-06-01 20:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_group`
--

CREATE TABLE `users_group` (
  `id_group` int(11) NOT NULL,
  `nama_group` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_group`
--

INSERT INTO `users_group` (`id_group`, `nama_group`, `level`, `link`) VALUES
(1, 'Administrator', 1, 'admin'),
(3, 'Masyarakat', 2, 'masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank_soal`
--
ALTER TABLE `bank_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `data_jawaban`
--
ALTER TABLE `data_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `group_soal`
--
ALTER TABLE `group_soal`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_group`
--
ALTER TABLE `users_group`
  ADD PRIMARY KEY (`id_group`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank_soal`
--
ALTER TABLE `bank_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `data_jawaban`
--
ALTER TABLE `data_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `group_soal`
--
ALTER TABLE `group_soal`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_group`
--
ALTER TABLE `users_group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
