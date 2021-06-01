-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 11.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrenta_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_rekening`, `nomor_rekening`, `nama_bank`) VALUES
(1, 'Moch Azmi Iskandar', '177-000-660-5478', 'Mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `subject`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'Rental mobilnya baguss!!!', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.'),
(3, 'Feri Sandi Prayuda', 'ferisandiprayuda@gmail.com', 'Design nya ', 's dsadsadasdasd sad sad aa das'),
(4, 'Ujang Andi', 'ujangandi@gmail.com', 'Developer nya Ganteng', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(100) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `kursi` varchar(50) NOT NULL,
  `mesin` varchar(1255) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `gear` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `ac` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `kursi`, `mesin`, `harga`, `denda`, `gear`, `bahan_bakar`, `ac`, `gambar`, `tahun`, `status`, `warna`) VALUES
(1, 'SPRT', 'Lamborghini', '4', '5204 CC', 5000000, 100000, 'Dual Clutch', 'Bensin', 0, 'Lamborghini.png', '2021', 'Tersedia', 'Kuning'),
(3, 'SDN', 'Honda Civic Turbo', '4', '2500 CC', 1500000, 50000, 'Manual', 'Bensin', 0, 'civic-1.png', '2019', 'Tersedia', 'Putih'),
(4, 'SPRT', 'Mustang', '2', '3000 CC', 10000000, 1000000, 'Dual Cluth', 'Bensin', 1, 'Mustang.png', '2019', 'Tersedia', 'Oren'),
(6, 'SPRT', 'Bugatti Veyron', '2', '2000', 5000000, 50000, 'Dual Cluth', 'Bensin', 0, 'Veryonpng.png', '2021', 'Tersedia', 'Biru'),
(8, 'SPRT', 'Maclaren 650S', '2', '5000 CC', 5000000, 500000, 'Dual Cluth', 'Bensin', 1, 'Maclaren.png', '2021', 'Tersedia', 'Merah'),
(10, 'HC', 'Lamborghini Sian', '2', '5204 CC', 850000, 85000, 'Dual Cluth', 'Bensin', 1, '4.png', '2020', 'Tersedia', 'Hijau'),
(11, 'SPRT', 'Mazda RX7', '2', '1.146 CC', 750000, 75000, 'Manual', 'Bensin', 1, '2.png', '2020', 'Tersedia', 'Merah'),
(12, 'SDN', 'Audi R8 Sport Car', '2', '1.146 CC', 950000, 95000, 'Dual Cluth', 'Bensin', 1, '1.png', '2021', 'Tersedia', 'Hitam'),
(13, 'SDN', 'Ford Mustang GT', '2', '3.799 CC', 650000, 65000, 'Manual', 'Bensin', 1, '6.png', '2021', 'Tersedia', 'Kuning'),
(14, 'HC', 'Mc Laren Sena', '2', '3.799 CC', 1100000, 110000, 'Dual Cluth', 'Bensin', 1, '5.png', '2021', 'Tersedia', 'Oren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `supir` varchar(60) NOT NULL,
  `pengambilan` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `pengembalian` varchar(255) DEFAULT NULL,
  `tanggal_rental` date DEFAULT NULL,
  `denda` varchar(200) DEFAULT NULL,
  `total_denda` varchar(200) DEFAULT NULL,
  `harga` varchar(200) DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status_pengembalian` varchar(100) DEFAULT NULL,
  `status_rental` varchar(100) DEFAULT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rental`
--

INSERT INTO `rental` (`id_rental`, `id_mobil`, `id_users`, `supir`, `pengambilan`, `pengembalian`, `tanggal_rental`, `denda`, `total_denda`, `harga`, `tanggal_kembali`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `status_pembayaran`) VALUES
(3, 2, 4, 'Ya', 'Perum Mitra Batik', 'Haji Jaenal Mustofa', '2021-04-16', '50.000', '150000', '500.000', '2021-04-17', '2021-04-20', 'Kembali', 'Selesai', 'Lunas'),
(7, 5, 4, 'Ya', 'Perum Mitra Batik', 'Haji Jaenal Mustofa', '2021-04-20', '25000', '25000', '350000', '2021-04-22', '2021-04-23', 'Kembali', 'Selesai', 'Lunas'),
(10, 2, 4, 'Ya', 'Perum Mitra Batik', 'Haji Jaenal Mustofadasdsa', '2021-04-21', '50000', NULL, '500000', '2021-04-22', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_supir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lembur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_supir`, `date`, `nama_supir`, `tgl_lahir`, `alamat`, `no_ktp`, `no_hp`, `gambar`, `lembur`) VALUES
(1, '2021-04-08 14:41:34', 'Ujang Andi', '1996-05-18', 'Kawalu', '321312132312312', '082295153122', 'default.png', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id_team`, `jabatan`, `nama`, `email`, `deskripsi`, `gambar`) VALUES
(1, 'Web Developer', 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.', 'azmi.jpg'),
(2, 'CEO (Chief Executive Officer)', 'Sandian', 'sandian@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.', 'team-image-4-646x680.jpg'),
(4, 'Marketing ', 'Erti Arora', 'ertiaurora@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.', 'team-image-3-646x680.jpg'),
(5, 'Editor', 'Muhammad Iqbal', 'muhamadiqbal@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.', 'team-image-1-646x680.jpg'),
(6, 'Manager', 'Rivaldi', 'rivaldi@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.', 'team-image-1-646x6801.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `nama`, `email`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.'),
(4, 'Feri Sandi Prayuda', 'ferisandiprayuda@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.'),
(5, 'Ujang Andi', 'ujangandi@gmail.com', 'Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_rental` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(100) DEFAULT NULL,
  `nominal_transfer` varchar(255) NOT NULL,
  `status_pembayaran` varchar(100) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_users`, `id_rental`, `id_mobil`, `bank`, `nama_rekening`, `nomor_rekening`, `nominal_transfer`, `status_pembayaran`, `bukti_pembayaran`) VALUES
(15, 4, 3, 2, 'BCA', 'Ujang Andi', '17700054', '550000', 'Lunas', '6.png'),
(20, 4, 10, 2, 'DANAMON', 'Niera Putri Noerahmi', '3129890819', '550000', 'Pending', 'modern-sport-car-illustration_232942-45.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(100) NOT NULL,
  `nama_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'MNV', 'Minivan\r\n'),
(4, 'CVT', 'Convertible'),
(9, 'MPV', 'Multi Purpose Vechile'),
(10, 'SDN', 'Sedan'),
(11, 'HTB', 'Hatchback'),
(12, 'SPRT', 'Sport'),
(13, 'CC', 'City Car'),
(14, 'HC', 'Hyper Car');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `password`, `alamat`, `no_hp`, `no_ktp`, `role_id`, `date`) VALUES
(1, 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Perum Administrator', '082295153183', '23131313212312', 1, '2021-04-10 06:33:29'),
(4, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Perum Griya Mitra Batik E148', '+6282295153183', '322313214223122', 2, '2021-04-10 07:03:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
