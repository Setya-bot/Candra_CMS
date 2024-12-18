-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2024 at 01:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(3, 'haha', '20241014134333.jpg'),
(7, 'Fuji', '20241020021938.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Mie Instan'),
(4, 'Beras'),
(5, 'Sayur'),
(6, 'Bumbu');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `no_wa` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Setya', 'Aku hanya memiliki kehidupan yang biasa, dan tidak memiliki banyak prospek di masa depan\r\nTapi setelah aku mendapatkan peran dalam kehidupan orang lain, aku pasti akan berusaha.\r\nJadi tolong, tentukan peranku dalam kehidupan mu.', 'https://www.instagram.com/_stywn9?igsh=MWhoZzBibndxNDN1MQ==', 'https://www.facebook.com/profile.php?id=100073702101528&mibextid=ZbWKwL', 'candraasli7575@gmail.com', 'SuruhKalang', '62 857 1126 1226');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `id_kategori` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `id_kategori`, `judul`, `keterangan`, `foto`, `slug`, `tanggal`, `username`) VALUES
(19, 4, 'Beras Putih', 'Beras putih adalah padi yang sudah digiling dan bersih dari bekatul serta kulit arinya sehingga beras yang dihasilkan berwarna putih. Beras putih memiliki sifat pulen namun dari segi nutrisi zat gizinya lebih rendah daripada jenis beras yang lain.\r\n', '20241119073229.jpg', 'Beras-Putih', '2024-11-19', 'Setyawan'),
(20, 4, 'Beras Hitam', 'Beras hitam (Oryza sativa L.indica), merupakan jenis beras yang mengandung antosianin dalam aleron yang lebih tinggi dibanding beras putih. Dahulu beras hitam biasa dikonsumsi sebagai makanan sehat di daerah Cina. Hanya kalangan tertentu saja seperti kalangan bangsawan yang boleh mengkonsumsi beras hitam', '20241119073700.jpg', 'Beras-Hitam', '2024-11-19', 'Setyawan'),
(21, 4, 'Beras Merah', 'Pengertian Beras Merah Beras merah adalah salah satu jenis beras yang dapat ditemukan di Indonesia. Warna merah pada beras ini berasal dari aleuron, mengandung gen yang memproduksi antosianin yaitu pigmen yang memproduksi warna merah yang juga berperan sebagai antioksidan.', '20241119074025.jpg', 'Beras-Merah', '2024-11-19', 'Setyawan'),
(24, 4, 'Beras Basmati', 'Beras basmati dikenal juga dengan nama beras india panjang. Hal ini dikarenakan beras basmati memang merupakan beras aromatik yang berasal dari Negeri Bollywood, India. Tidak hanya teksturnya yang khas, beras basmati juga memiliki bentuk yang khas yakni butir beras yang panjang dan ramping.', '20241119074540.jpg', 'Beras-Basmati', '2024-11-19', 'Setyawan'),
(25, 4, 'Beras Ketan', 'Beras ketan dikenal sebagai beras ketan atau hanya ketan di Jawa dan sebagian besar Indonesia, dan pulut di Sumatra . Beras ini banyak digunakan sebagai bahan untuk berbagai macam makanan ringan manis, gurih, atau fermentasi. Beras ketan digunakan sebagai biji-bijian yang dikupas atau digiling menjadi tepung. Beras ini biasanya dicampur dengan santan , yang berarti santan dalam bahasa Indonesia, bersama dengan sedikit garam untuk menambah rasa. Beras ketan jarang dimakan sebagai makanan pokok. Salah satu contohnya adalah lemang , yang merupakan beras ketan dan santan yang dimasak dalam batang bambu yang dilapisi daun pisang. Beras ketan juga kadang-kadang digunakan dalam campuran dengan nasi biasa dalam hidangan nasi seperti nasi tumpeng atau nasi tim . Beras ketan banyak digunakan selama musim Lebaran sebagai makanan tradisional. Beras ketan juga digunakan dalam produksi minuman beralkohol seperti tuak dan brem bali', '20241119074738.jpg', 'Beras-Ketan', '2024-11-19', 'Setyawan'),
(27, 4, 'Beras Ungu', 'Beras ungu adalah biji-bijian utuh yang mengandung serat, protein, dan antioksidan seperti antosianin. Meskipun umum dikonsumsi di negara-negara Asia, beras ungu semakin populer di AS sebagai pengganti beras putih dan beras merah.', '20241119080639.jpg', 'Beras-Ungu', '2024-11-19', 'Setyawan'),
(28, 1, 'Mie Goreng', 'Tanpa Kuah', '20241122053936.jpg', 'Mie-Goreng', '2024-11-22', 'Setyawan'),
(29, 1, 'Mie Rebus', 'Berkuah', '20241122053954.jpg', 'Mie-Rebus', '2024-11-22', 'Setyawan'),
(30, 1, 'Mie Pedas', 'Berkuah Pedas', '20241122054010.jpg', 'Mie-Pedas', '2024-11-22', 'Setyawan'),
(31, 5, 'Sawi', 'Daun Sayur', '20241122054143.jpg', 'Sawi', '2024-11-22', 'Setyawan'),
(32, 5, 'Seledri', 'Sayur Pelengkap', '20241122054206.jpg', 'Seledri', '2024-11-22', 'Setyawan'),
(33, 5, 'Bayam', 'Sayur Daun Bayam', '20241122054226.jpg', 'Bayam', '2024-11-22', 'Setyawan'),
(34, 6, 'Ketumbar', 'Bumbu', '20241122054425.jpg', 'Ketumbar', '2024-11-22', 'Setyawan'),
(35, 6, 'Lada Hitam', 'Lada', '20241122054447.jpg', 'Lada-Hitam', '2024-11-22', 'Setyawan'),
(36, 6, 'Jahe', 'Rempah Rempah', '20241122054511.jpg', 'Jahe', '2024-11-22', 'Setyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(2, 'Setyawan', 'Admin', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Admin'),
(3, 'Kontributor', 'Kontributor', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
