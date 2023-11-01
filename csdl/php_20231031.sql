-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_20231031`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`phone`, `username`, `password`, `fullname`, `avatar`, `is_admin`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0000000001', 'khach1', 'khach1', 'Khách hàng 1', './images/avatars/avt_1.png', 0, NULL, NULL, NULL),
('0000000002', 'khach2', 'khach2', 'Khách hàng 2', './images/avatars/avt_1.png', 0, NULL, NULL, NULL),
('0866508347', 'admin', 'admin', 'Tô Khải Hiên', './images/avatars/avt_1.png', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e_detail_invoices`
--

CREATE TABLE `e_detail_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_invoices_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `e_price` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_invoices`
--

CREATE TABLE `e_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_person` varchar(255) NOT NULL,
  `e_phone` varchar(255) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `total` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `products_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'images/products/product_1.jpg', NULL, NULL, NULL),
(2, 1, 'images/products/product_1.jpg', NULL, NULL, NULL),
(3, 1, 'images/products/product_1.jpg', NULL, NULL, NULL),
(4, 1, 'images/products/product_1.jpg', NULL, NULL, NULL),
(5, 2, 'images/products/product_2.jpg', NULL, NULL, NULL),
(6, 2, 'images/products/product_2.jpg', NULL, NULL, NULL),
(7, 2, 'images/products/product_2.jpg', NULL, NULL, NULL),
(8, 2, 'images/products/product_2.jpg', NULL, NULL, NULL),
(9, 3, 'images/products/product_3.jpg', NULL, NULL, NULL),
(10, 3, 'images/products/product_3.jpg', NULL, NULL, NULL),
(11, 3, 'images/products/product_3.jpg', NULL, NULL, NULL),
(12, 3, 'images/products/product_3.jpg', NULL, NULL, NULL),
(13, 4, 'images/products/product_4.jpg', NULL, NULL, NULL),
(14, 4, 'images/products/product_4.jpg', NULL, NULL, NULL),
(15, 4, 'images/products/product_4.jpg', NULL, NULL, NULL),
(16, 4, 'images/products/product_4.jpg', NULL, NULL, NULL),
(17, 5, 'images/products/product_5.jpg', NULL, NULL, NULL),
(18, 5, 'images/products/product_5.jpg', NULL, NULL, NULL),
(19, 5, 'images/products/product_5.jpg', NULL, NULL, NULL),
(20, 5, 'images/products/product_5.jpg', NULL, NULL, NULL),
(21, 6, 'images/products/product_6.jpg', NULL, NULL, NULL),
(22, 6, 'images/products/product_6.jpg', NULL, NULL, NULL),
(23, 6, 'images/products/product_6.jpg', NULL, NULL, NULL),
(24, 6, 'images/products/product_6.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `i_detail_invoices`
--

CREATE TABLE `i_detail_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `i_invoices_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `i_price` double(8,2) NOT NULL,
  `e_price` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `i_invoices`
--

CREATE TABLE `i_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `i_person` varchar(255) NOT NULL,
  `i_phone` varchar(255) NOT NULL,
  `total` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_10_31_062011_create_product_type_table', 1),
(12, '2023_10_31_062237_create_products_table', 2),
(13, '2023_10_31_062747_create_images_table', 3),
(15, '2023_10_31_062951_create_accounts_table', 4),
(16, '2023_10_31_063948_create_suppliers_table', 5),
(21, '2023_10_31_064216_create_i_invoices_table', 6),
(22, '2023_10_31_064623_create_i_detail_invoices_table', 6),
(23, '2023_10_31_065113_create_e_invoices_table', 6),
(24, '2023_10_31_065228_create_e_detail_invoices_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_types_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_types_id`, `description`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sản phẩm 1', 1, NULL, 50000.00, 20, NULL, NULL, NULL),
(2, 'Sản phẩm 2', 1, NULL, 50000.00, 20, NULL, NULL, NULL),
(3, 'Sản phẩm 3', 2, NULL, 50000.00, 20, NULL, NULL, NULL),
(4, 'Sản phẩm 4', 2, NULL, 50000.00, 20, NULL, NULL, NULL),
(5, 'Sản phẩm 5', 3, NULL, 50000.00, 20, NULL, NULL, NULL),
(6, 'Sản phẩm 6', 3, NULL, 50000.00, 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Loại sản phẩm 1', NULL, NULL, NULL),
(2, 'Loại sản phẩm 2', NULL, NULL, NULL),
(3, 'Loại sản phẩm 3', NULL, NULL, NULL),
(4, 'Loại sản phẩm 4', '2023-10-31 03:13:01', '2023-10-31 03:13:01', NULL),
(5, 'a', '2023-10-31 03:15:02', '2023-10-31 03:15:02', NULL),
(6, 'a', '2023-10-31 03:15:26', '2023-10-31 03:15:26', NULL),
(7, 'a', '2023-10-31 03:16:01', '2023-10-31 03:16:01', NULL),
(8, 'a', '2023-10-31 03:16:14', '2023-10-31 03:16:14', NULL),
(9, 'NIke4', '2023-10-31 03:16:23', '2023-10-31 03:16:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`phone`, `name`, `addr`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0000000001', 'Nhà cung cấp 1', 'Địa chỉ 1', NULL, NULL, NULL),
('0000000002', 'Nhà cung cấp 2', 'Địa chỉ 2', NULL, NULL, NULL),
('0000000003', 'Nhà cung cấp 3', 'Địa chỉ 3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `e_detail_invoices`
--
ALTER TABLE `e_detail_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_invoices`
--
ALTER TABLE `e_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_detail_invoices`
--
ALTER TABLE `i_detail_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_invoices`
--
ALTER TABLE `i_invoices`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`phone`);

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
-- AUTO_INCREMENT for table `e_detail_invoices`
--
ALTER TABLE `e_detail_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_invoices`
--
ALTER TABLE `e_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `i_detail_invoices`
--
ALTER TABLE `i_detail_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `i_invoices`
--
ALTER TABLE `i_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
