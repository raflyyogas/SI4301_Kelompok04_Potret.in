-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 07:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `potret.in`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `nama`, `noHp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'raflyyogas', 'raflyyogaswara48@gmail.com', '123', 'Rafly Yogaswara', '085939016869', 'Jakarta', '2022-01-13 20:10:50', '2022-01-13 20:10:50'),
(2, 'yogas', 'Ayana3RR0R@gmail.com', '321', 'rafly', '085718824092', 'Jakarta', '2022-01-14 00:11:28', '2022-01-14 00:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaJasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idVendor` bigint(20) UNSIGNED NOT NULL,
  `idKategori` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `namaJasa`, `deskripsi`, `gambar`, `harga`, `lokasi`, `idVendor`, `idKategori`, `created_at`, `updated_at`) VALUES
(1, 'Fotografi', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt tempore, excepturi perferendis deleniti architecto necessitatibus corrupti vel at consectetur ut.', 'fotografi.jpg-1642129646.jpg', '2000000', 'fotografi.jpg-1642129646.jpg', 1, 1, '2022-01-13 20:07:26', '2022-01-13 20:07:26'),
(2, 'Videografi', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt tempore, excepturi perferendis deleniti architecto necessitatibus corrupti vel at consectetur ut.', 'user.png-1642129734.png', '750000', 'user.png-1642129734.png', 1, 2, '2022-01-13 20:08:54', '2022-01-13 20:08:54'),
(3, 'Ical Fotografi', 'Terbaik', 'fotografi.jpg-1642144425.jpg', '860000', 'fotografi.jpg-1642144425.jpg', 1, 1, '2022-01-14 00:13:45', '2022-01-14 00:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Fotografi', NULL, NULL),
(2, 'Videografi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_05_075813_create_customers_table', 1),
(3, '2022_01_05_075836_create_kategoris_table', 1),
(4, '2022_01_05_075918_create_vendors_table', 1),
(5, '2022_01_05_075931_create_jasas_table', 1),
(6, '2022_01_05_075942_create_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idCust` bigint(20) UNSIGNED NOT NULL,
  `idJasa` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(50) NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `idCust`, `idJasa`, `status`, `harga`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'Pembayaran Berhasil', 2000000, 'Screenshot_10.png-1642408739.png', '2022-01-13 23:43:45', '2022-01-17 11:25:50'),
(4, 1, 1, 'Menunggu Pembayaran', 2000000, NULL, '2022-01-13 23:44:56', '2022-01-13 23:44:56'),
(5, 2, 1, 'Menunggu Pembayaran', 2000000, NULL, '2022-01-14 00:12:03', '2022-01-14 00:12:03'),
(6, 2, 1, 'Menunggu Pembayaran', 2000000, NULL, '2022-01-16 06:01:19', '2022-01-16 06:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaVendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `namaVendor`, `noHp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'raflyyogaswara48@gmail.com', '085939016869', 'raflyyogas@gmail.com', '123', '2022-01-13 20:04:22', '2022-01-13 20:04:22'),
(2, 'Dukun Digital', '085718824092', 'Ayana3RR0R@gmail.com', '123', '2022-01-14 00:15:03', '2022-01-14 00:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jasa_idvendor_foreign` (`idVendor`),
  ADD KEY `jasa_idkategori_foreign` (`idKategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_idcust_foreign` (`idCust`),
  ADD KEY `transaksi_idjasa_foreign` (`idJasa`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `jasa_idkategori_foreign` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jasa_idvendor_foreign` FOREIGN KEY (`idVendor`) REFERENCES `vendor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_idcust_foreign` FOREIGN KEY (`idCust`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_idjasa_foreign` FOREIGN KEY (`idJasa`) REFERENCES `jasa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
