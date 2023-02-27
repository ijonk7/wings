-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2023 at 03:08 PM
-- Server version: 8.0.21
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint UNSIGNED NOT NULL,
  `product_code` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Kode Produk',
  `product_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Nama Produk',
  `price` int NOT NULL COMMENT 'Harga Jual Produk dalam Satuan Currency',
  `currency` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Satuan Harga Jual',
  `discount` int NOT NULL COMMENT 'Diskon dalam (%)',
  `dimension` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Dimensi Produk',
  `unit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Satuan Jual Produk',
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_code`, `product_name`, `price`, `currency`, `discount`, `dimension`, `unit`, `image`, `created_at`, `updated_at`) VALUES
(1, 'AA01', 'So Klin Pewangi', 15000, 'Rp', 10, '80 cm x 20 cm', 'PCS', 'So-Klin-Pewangi.jpg', '2023-02-26 14:01:27', NULL),
(2, 'AA02', 'GIV Biru', 11000, 'Rp', 0, '25 cm x 10 cm', 'PCS', 'GIV-Biru.jpeg', '2023-02-26 14:01:27', NULL),
(3, 'AA03', 'So Klin Liquid', 18000, 'Rp', 0, '95 cm x 25 cm', 'PCS', 'So-Klin-Liquid.jpg', '2023-02-26 14:06:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` bigint NOT NULL,
  `document_code` varchar(3) NOT NULL COMMENT 'Kode Dokumen',
  `document_number` varchar(10) NOT NULL COMMENT 'Nomor Dokumen',
  `product_code` varchar(18) NOT NULL COMMENT 'Kode Produk',
  `price` int NOT NULL COMMENT 'Harga Jual Produk dalam Satuan Currency',
  `quantity` int NOT NULL COMMENT 'Jumlah qty barang yang dibeli',
  `unit` varchar(5) NOT NULL COMMENT 'Satuan Jual Produk',
  `sub_total` int NOT NULL COMMENT 'Total Harga Jual per Item',
  `currency` varchar(5) NOT NULL COMMENT 'Satuan Harga',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`id`, `document_code`, `document_number`, `product_code`, `price`, `quantity`, `unit`, `sub_total`, `currency`, `created_at`, `updated_at`) VALUES
(7, 'DG7', '1572124836', 'AA02', 11000, 14, 'PCS', 154000, 'Rp', '2023-02-27 13:04:15', '2023-02-27 13:04:15'),
(8, 'DG7', '1572124836', 'AA03', 18000, 24, 'PCS', 432000, 'Rp', '2023-02-27 13:04:15', '2023-02-27 13:04:15'),
(9, '6ZA', '2480436836', 'AA01', 13500, 5, 'PCS', 75000, 'Rp', '2023-02-27 14:12:24', '2023-02-27 14:12:24'),
(10, '6ZA', '2480436836', 'AA03', 18000, 9, 'PCS', 162000, 'Rp', '2023-02-27 14:12:24', '2023-02-27 14:12:24'),
(11, 'RE1', '4923596728', 'AA01', 13500, 13, 'PCS', 195000, 'Rp', '2023-02-27 14:20:50', '2023-02-27 14:20:50'),
(12, 'JKG', '6893657388', 'AA02', 11000, 5, 'PCS', 55000, 'Rp', '2023-02-27 15:02:19', '2023-02-27 15:02:19'),
(13, 'JKG', '6893657388', 'AA03', 18000, 7, 'PCS', 126000, 'Rp', '2023-02-27 15:02:19', '2023-02-27 15:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_header`
--

CREATE TABLE `transaction_header` (
  `id` bigint UNSIGNED NOT NULL,
  `document_code` varchar(3) NOT NULL COMMENT 'Kode Dokumen',
  `document_number` varchar(10) NOT NULL COMMENT 'Nomor Dokumen',
  `user` varchar(50) NOT NULL COMMENT 'User Login',
  `total` int NOT NULL COMMENT 'Total Harga Jual',
  `date` date NOT NULL COMMENT 'Tanggal Transaksi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction_header`
--

INSERT INTO `transaction_header` (`id`, `document_code`, `document_number`, `user`, `total`, `date`, `created_at`, `updated_at`) VALUES
(7, 'DG7', '1572124836', 'admin', 586000, '2023-02-27', '2023-02-27 13:04:15', '2023-02-27 13:04:15'),
(8, '6ZA', '2480436836', 'admin', 237000, '2023-02-27', '2023-02-27 14:12:24', '2023-02-27 14:12:24'),
(9, 'RE1', '4923596728', 'admin', 195000, '2023-02-27', '2023-02-27 14:20:50', '2023-02-27 14:20:50'),
(10, 'JKG', '6893657388', 'admin', 181000, '2023-02-27', '2023-02-27 15:02:19', '2023-02-27 15:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Muhammad Rizal', 'admin', NULL, '$2y$10$CJVm078xnRmPOZGs8TEh7.P8tIMvLf.i33vwOzhQpo1ifJ1SeJ5CG', 'c3cPj0UzM8iCKEoTmpR5AO3UMhyDPjg7Jsblcpp5NRcjbuT3U70C198afxWj', '2023-02-26 14:37:49', '2023-02-26 14:37:49');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_header`
--
ALTER TABLE `transaction_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction_header`
--
ALTER TABLE `transaction_header`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
