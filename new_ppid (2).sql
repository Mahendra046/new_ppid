-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20241021.bad51f0142
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2024 at 11:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_ppid`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` bigint UNSIGNED NOT NULL,
  `id_menu` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_file` enum('pdf','image','teks') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `link_konten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `id_menu`, `judul`, `deskripsi`, `file`, `jenis_file`, `tanggal`, `link_konten`, `created_at`, `updated_at`) VALUES
(1, 5, 'Informasi Tentang Kependudukan atau Domisili', NULL, 'app/images/1730617064-8F8vz.jpg', 'image', '2024-11-03', NULL, '2024-11-02 23:57:44', '2024-11-02 23:57:44'),
(2, 5, 'Informasi Tentang Kependudukan atau Domisili', NULL, 'app/images/1730617123-nfLfv.jpg', 'image', '2024-11-03', NULL, '2024-11-02 23:58:43', '2024-11-02 23:58:43'),
(4, 5, 'CIPTA PAKET WISATA: Memandu Penyusunan Paket Wisata yang Menarik', NULL, 'app/pdfs/1730638679-VJY4T.pdf', 'pdf', '2024-11-03', NULL, '2024-11-03 05:57:59', '2024-11-03 05:57:59'),
(5, 7, 'PENGAJUAN JUDUL TUGAS AKHIR EKSPLORASI DIGITAL TEMPAT WISATA DI KABUPATEN KETAPANG', '<p></p><table class=\"table table-bordered\"><tbody><tr><td>Buset Awwkwkkwkwk</td><td>ATLAS</td><td>ATLAS</td><td>ATLAS GG</td></tr><tr><td><p style=\"text-align: center; \"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.749926162268!2d109.9735923747256!3d-1.8450004981381178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05184257a3ecc7%3A0xe83141e00c9f6cac!2sJl.%20RM%20Sudiono%2C%20Kec.%20Delta%20Pawan%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat!5e0!3m2!1sen!2sid!4v1730804137139!5m2!1sen!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe><br></p></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', NULL, 'teks', '2024-11-05', NULL, '2024-11-03 06:12:52', '2024-11-05 04:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `kontens`
--

CREATE TABLE `kontens` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint UNSIGNED NOT NULL,
  `id_induk` bigint UNSIGNED DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_induk`, `judul`, `url`, `level`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PROFIL', '#', 0, '2024-10-31 20:50:17', '2024-10-31 20:50:17'),
(2, NULL, 'LAYANAN INFORMASI', '#', 0, '2024-10-31 20:54:24', '2024-10-31 20:54:24'),
(3, NULL, 'STATISTIK PELAYANAN', '#', 0, '2024-10-31 20:55:25', '2024-10-31 20:55:25'),
(5, 1, 'PROFIL PEMERINTAH KOTA BALIKPAPAN', 'profil-pemerintahan', 1, '2024-10-31 23:28:28', '2024-10-31 23:28:28'),
(7, 1, 'PROFIL PPID KOTA BALIKPAPAN', '#', 1, '2024-11-03 05:38:35', '2024-11-03 05:38:35'),
(8, 1, 'PEJABAT BADAN PUBLIK', '#', 1, '2024-11-03 05:42:51', '2024-11-03 05:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_10_31_131700_create_menu_table', 2),
(5, '2024_10_31_131738_create_konten_table', 2),
(6, '2024_11_01_020856_create_menus_table', 3),
(7, '2024_11_01_020913_create_kontens_table', 3),
(8, '2024_11_07_125015_create_permohonan_informasi_table', 3),
(9, '2024_11_07_125041_create_permohonan_keberatan_table', 3),
(10, '2024_11_07_133834_add_tracking_code_to_permohonan_informasi_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_informasi`
--

CREATE TABLE `permohonan_informasi` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_diminta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_permohonan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `status_permohonan` enum('Diajukan','Diproses','Ditolak','Diterima') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Diajukan',
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracking_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permohonan_informasi`
--

INSERT INTO `permohonan_informasi` (`id`, `nama_pemohon`, `alamat_pemohon`, `no_telepon`, `email_pemohon`, `informasi_diminta`, `tujuan_permohonan`, `tanggal_permohonan`, `status_permohonan`, `lampiran`, `created_at`, `updated_at`, `tracking_code`) VALUES
(1, 'asdsd', 'Jl. Rm Sudiono no 27', '0895372200063', 'arjun@gmail.com', 'Loker Ketapang', 'Mengetahui Loker di Dinas Ketapang', '2024-11-07', 'Diterima', '242353523523423523', '2024-11-07 06:49:49', '2024-11-07 08:18:32', 'TRK-290LXBVF');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_keberatan`
--

CREATE TABLE `permohonan_keberatan` (
  `id` bigint UNSIGNED NOT NULL,
  `id_permohonan` bigint UNSIGNED NOT NULL,
  `nama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan_keberatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keberatan` date NOT NULL,
  `status_keberatan` enum('Diajukan','Diproses','Ditolak','Diterima') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Diajukan',
  `tanggapan_ppid` text COLLATE utf8mb4_unicode_ci,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permohonan_keberatan`
--

INSERT INTO `permohonan_keberatan` (`id`, `id_permohonan`, `nama_pemohon`, `alamat_pemohon`, `no_telepon`, `email_pemohon`, `alasan_keberatan`, `tanggal_keberatan`, `status_keberatan`, `tanggapan_ppid`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdsd', 'Jl. Rm Sudiono no 27', '0895372200063', 'arjun@gmail.com', 'BABBI', '2024-11-08', 'Diajukan', NULL, NULL, '2024-11-08 04:24:24', '2024-11-08 04:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'anjay', 'admin@gmail.com', '$2y$10$SfI4aR9dlYga87PfDBJ46eaqtysbUgUFTg20e2f3Hbb8ZMpRF5TdO', '2024-11-05 03:01:52', '2024-11-05 03:09:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konten_id_menu_foreign` (`id_menu`);

--
-- Indexes for table `kontens`
--
ALTER TABLE `kontens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id_induk_foreign` (`id_induk`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permohonan_informasi_tracking_code_unique` (`tracking_code`);

--
-- Indexes for table `permohonan_keberatan`
--
ALTER TABLE `permohonan_keberatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_keberatan_id_permohonan_foreign` (`id_permohonan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontens`
--
ALTER TABLE `kontens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permohonan_keberatan`
--
ALTER TABLE `permohonan_keberatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `konten_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_id_induk_foreign` FOREIGN KEY (`id_induk`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permohonan_keberatan`
--
ALTER TABLE `permohonan_keberatan`
  ADD CONSTRAINT `permohonan_keberatan_id_permohonan_foreign` FOREIGN KEY (`id_permohonan`) REFERENCES `permohonan_informasi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
