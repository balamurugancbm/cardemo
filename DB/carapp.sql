-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 08:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `brandname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `brandname`, `year`, `model`, `color`, `mileage`, `regno`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(3, 3, 'Maruti Suzuki Alto', 2007, 'SLS CLASS', 'Western Brown', '7kmpl', 'AH 17 FT 2387', 'Maruti Suzuki Alto', '20211118193235.jpg', '2021-11-18 13:15:23', '2021-11-19 01:11:36'),
(4, 3, 'Maruti Suzuki Celerio', 2010, 'CRUZE HATCHBACK', 'Prairie Pearl Coat', '18kmpl', 'DL 01 C AA 1111', 'Maruti Suzuki Celerio', '20211118193608.jpg', '2021-11-18 13:16:36', '2021-11-19 01:11:44'),
(6, 3, 'Renault Kwid', 2006, 'Saloon', 'Opulent Blue', '14kmpl', 'AB 17 DD 1234', 'Renault Kwid', '20211118193618.jpg', '2021-11-18 13:19:37', '2021-11-19 01:12:15'),
(7, 3, 'SUV', 2003, 'SLS CLASS', 'Prairie Pearl Coat', '12kmpl', 'TN 10 AQ 1234', 'SUV', '20211119051307.jpg', '2021-11-18 23:43:07', '2021-11-18 23:43:07'),
(8, 4, 'Maruti Suzuki S-Presso', 2005, 'SLS CLASS', 'Sapphire Blue', '20kmpl', 'AH 17 FT 4567', 'Maruti Suzuki is one of the best-selling car manufacturers in India and they keep pushing the market to limits no one ever thought of. Today, the budget-friendly and compact S-Presso is one of the most popular cars on Indian roads. The car itself is extremely stylish to look at and is truly one of the most powerful options in the segment. The S-Presso is powered by a 1.0L petrol engine that is capable of generating up to 68Ps of power and 90Nm of torque. In the transmission department, the S-Presso comes with either a 5-speed manual or a 5-speed automatic gearbox. Maruti has also released a CNG version of the S-Presso that is powered by the same 1.0L petrol engine but generates 59Ps of power and 78Nm of torque and is only available with a 5-speed manual transmission system. Inside the car, the S-Presso features a 7-inch touchscreen infotainment system, a digital instrument cluster, keyless entry, Android Auto and Apple CarPlay compatibility, and power windows in front. The car also has some handy safety features including ABS with EBD, driver-side airbags, front seatbelt reminder, parking sensors, and speed alert.', '20211119061855.jpg', '2021-11-19 00:48:55', '2021-11-19 00:48:55');

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
(4, '2020_09_09_032618_create_products_table', 1),
(5, '2014_10_12_000000_create_cars_table', 2),
(6, '2020_10_15_100535_add_username_to_users_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'bala', 'bala@bala.com', NULL, 'ssssssdasdsdasd', NULL, NULL, NULL, ''),
(2, 'Balamurugan C', 'balamurugan.cbm@gmail.com', NULL, '$2y$10$1TzRRv9.3iIpEal9Og0vP.SSa3s9Iwwga82g/kH1yV/IkZ7wKe85y', NULL, '2021-11-18 11:53:06', '2021-11-18 11:53:06', ''),
(3, 'Balamurugan', 'bala@gmail.com', NULL, '$2y$10$1TzRRv9.3iIpEal9Og0vP.SSa3s9Iwwga82g/kH1yV/IkZ7wKe85y', NULL, '2021-11-18 12:47:37', '2021-11-18 12:47:37', 'bala123'),
(4, 'Mani', 'mani@gmail.com', NULL, '$2y$10$nCRDAASHRrML8o1qVewM3OOH/bTUcA438a1si8sZDtfhMZPl/tyd.', NULL, '2021-11-19 00:44:47', '2021-11-19 00:44:47', 'mani123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
