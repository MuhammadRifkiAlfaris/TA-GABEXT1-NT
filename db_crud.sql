-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sport', 'This is description for Sepatu', '2021-06-04 06:18:16', '2021-06-04 06:18:16'),
(2, 'SUV', 'This is description for Jersey', '2021-06-04 06:18:16', '2021-06-04 06:18:16'),
(3, 'Hatchback', 'This is description for Jaket', '2021-06-04 06:18:16', '2021-06-04 06:18:16'),
(6, 'Commercial', 'This is description for Topi', '2021-06-10 05:05:34', '2021-06-10 05:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_04_071431_create_posts_table', 1),
(5, '2021_06_04_083721_add_image_to_posts_table', 2),
(6, '2021_06_04_130500_create_categories_table', 3),
(7, '2021_06_04_131103_add_categories_to_posts_table', 4),
(8, '2021_06_10_122320_drop_columns_at_users_table', 5),
(9, '2021_06_10_182330_add_role_to_users_table', 6);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(106, 1, 'Toyota GR Supra', 'Tipe Mesin / Engine Type	B58\r\nJumlah Silinder / No. of Cylinders	6 Cylinders, In-line Type\r\nMekanisme Valve / Valve Mechanism	24-Valve DOHC, Chain Drive with Variable Valve Timing (IN/EX)\r\nIsi Silinder / Displacement (Cc)	2.998\r\nDiameter X Langkah / Bore X Stroke (Mm)	82,0 x 94,6\r\nRasio Kompresi / Compression Ratio	10.2 : 1\r\nTenaga Mesin Maksimum / Maximum Output (PS/KW/RPM)	387/285/5,800-6,500\r\nTorsi Maksimum / Maximum Torque (Kgm/Nm/RPM)	50.5/500/1,800-5,000\r\nSistem Bahan Bakar / Fuel System	Direct Injection\r\nTurbocharger	Twin-scroll Turbocharger', '1624624412_supra-gr_300x150_5f337c26d168de5339d4d5242d45459c.png', '2021-06-25 05:33:32', '2021-06-25 05:33:32'),
(107, 1, 'Toyota 86', 'Tipe Mesin / Engine Type	Boxer 4 Cylinder DOHC\r\nIsi Silinder / Displacement (Cc)	1.998\r\nDiameter X Langkah / Bore X Stroke (Mm)	86 x 86\r\nDaya Maksimum / Maximum Output (Ps/Rpm)	200/7.000\r\nTorsi Maksimum / Maximum Torque (Kgm/Rpm)	20,9/6.600\r\nSteering (Power Steering)	Electric', '1624624615_86.png', '2021-06-25 05:36:55', '2021-06-25 05:36:55'),
(108, 2, 'Fortuner TRD Sportivo', 'Tipe Mesin / Engine Type	2 GD FTV 4 Silinder Segaris, 4 Katup, DOHC, VNT Intercooler / 2GD FTV, In-Line 4 Cylinders, 4 Valve, DOHC, VNT Intercooler\r\nIsi Silinder / Displacement (Cc)	2,393\r\nDiameter x Langkah / Bore x Stroke (Mm)	92.0 x 90.0\r\nDaya Maksimum / Max. Power (ps/rpm)	149.6/3,400\r\nTorsi Maksimum / Max. Torque (kgm/rpm)	40.8/1,600-2,000\r\nJenis Bahan Bakar / Fuel Type	Diesel\r\nSistem Bahan Bakar / Fuel System	Sistem Injeksi dengan Common Rail / Common Rail Fuel Injection\r\nKapasitas Tangki / Tank Capacity (ltr)	80', '1624625007_SUV---FORTUNER-TRD-2020.jpg', '2021-06-25 05:43:27', '2021-06-25 05:43:27'),
(109, 2, 'Raize GR Sport', 'Tipe Mesin / Engine Type	1KR-VET, 3 Cylinder Turbo, In-line, 12 Valve DOHC with VVT-i\r\nDiameter x Langkah / Bore x Stroke (mm x mm)	71.0 x 83.9\r\nIsi Silinder / Displacement (cc)	998\r\nCompression Ratio	9,5 : 1\r\nDaya Maks. / Max. Power (ps/rpm)	98 / 6000\r\nTorsi Maks. / Max. Torque (kgm/rpm)	14.3 / 2400 - 4000\r\nKapasitas Tangki / Fuel Tank Capacity (ltr)	36\r\nJenis Bahan Bakar / Fuel Type	Gasoline\r\nSistem Bahan Bakar / Fuel System	Sistem Injeksi Elektronik / Electronic Fuel Injection (EFI)', '1624625376_SUV---RAIZE-NEW_0.jpg', '2021-06-25 05:49:36', '2021-06-25 05:49:36'),
(110, 2, 'Rush', 'Tipe Mesin / Engine Type	2NR-VE, 4 Cylinder In Line, 16 Valves, DOHC, Dual VVT-i\r\nIsi Silinder / Displacement (Cc)	1.496\r\nDiameter X Langkah / Bore X Stroke (Mm)	72.5 x 90.6\r\nDaya Maksimum / Maximum Output (Ps/Rpm)	104 / 6.000\r\nTorsi Maksimum / Maximum Torque (Kgm/Rpm)	13.9 / 4.200\r\nSistem Pemasukan Bahan Bakar / Fuel System	Electronic Fuel Injection\r\nSteering (Power Steering)	Electronic Power Steering', '1624625476_SUV---RUSH-min.jpg', '2021-06-25 05:51:16', '2021-06-25 05:51:16'),
(111, 3, 'Agya', 'Sistem Pemasukan Bahan Bakar / Fuel System	Sistem Injeksi Elektronik / Electronic Fuel Injection\r\nTipe Mesin / Engine Type	1.0L KR 3 Silinder segaris, 12 Katup, DOHC, VVT-i / 3 Cylinder in-line 12 Valves, DOHC, VVT-i\r\nIsi Silinder / Displacement (Cc)	998\r\nDiameter X Langkah / Bore X Stroke (Mm)	71.0 x 84.0\r\nDaya Maksimum / Maximum Output (Ps/Rpm)	67/6,000\r\nTorsi Maksimum / Maximum Torque (Kgm/Rpm)	9.1/4,400', '1624625632_HATCHBACK---AGYA_2020-min.jpg', '2021-06-25 05:53:52', '2021-06-25 05:53:52'),
(112, 3, 'Toyota Yaris', 'Tipe Mesin / Engine Type	In-line 4 Cyl, 16 Valve, DOHC, Dual VVT-i\r\nBore x Stroke	72.5 x 90.6\r\nIsi Silinder / Displacement	1,496\r\nDaya Maksimum / Max Power (ps/rpm)	107 / 6,000\r\nTorsi Maksimum / Max Torque (kgm/rpm)	14.3 / 4,200\r\nSistem Bahan Bakar / Fuel System	Fuel Injection', '1624625710_HATCHBACK---YARIS-2020.jpg', '2021-06-25 05:55:10', '2021-06-25 05:55:10'),
(113, 6, 'Toyota Hilux D Cab V', 'Tipe Mesin / Engine Type	2 GD FTV, 4 Cylinders, In-line 16 Valve DOHC with VNT Intercooler\r\nBore x Stroke	92 x 90\r\nIsi Silinder / Displacement	2,393\r\nMaximum Power (ps/rpm)	149.6 / 3,400\r\nMaximum Torque (kgm/rpm)	40.8/1,600-2,000\r\nFuel System	Fuel Injection w/ Common Rail\r\nFuel Type	Diesel\r\nFuel Tank Capacity (L)	80', '1624625948_hilux-d-cab-v-type-thumb-kv_59d847e55846f5d8adf2c69658d1ea7c.jpg', '2021-06-25 05:59:08', '2021-06-25 05:59:08'),
(114, 6, 'Toyota Hilux S Cab', 'Tipe Mesin / Engine Type	1TR-FE, 4 Cylinders, In-Line 16 Valve DOHC Dual VVT-i\r\nBore x Stroke	86.0 x 86.0\r\nIsi Silinder / Displacement	1.998\r\nMaximum Power (ps/rpm)	139/5.600\r\nMaximum Torque (kgm/rpm)	18.7/4.000\r\nFuel System	Fuel Injection\r\nFuel Type	Gasoline\r\nFuel Tank Capacity (L)	65', '1624626031_COMMERCIAL---HILUX-S-CAB-min.jpg', '2021-06-25 06:00:31', '2021-06-25 06:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(7, 'Admin', 'admin@gmail.com', '$2y$10$zV98PoIv1fr21rfw/ekRA.6Hsa4aQv7/RAzqGDao7S9kCti1wfME2', 'admin', '2021-06-24 07:26:30', '2021-06-24 07:26:30'),
(8, 'Member', 'member@gmail.com', '$2y$10$oDZKGwLCMaHRqbriuCcTp.C70XZeHJFQ/CqLdb1HuHKHGR/z9PY4a', 'member', '2021-06-24 07:26:30', '2021-06-24 07:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
