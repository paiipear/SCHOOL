-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2025 at 05:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1759648962),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1759648962;', 1759648962);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `result` enum('Lulus','Tidak Lulus') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak Lulus',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `score`, `result`, `created_at`, `updated_at`) VALUES
(1, 14, '77.00', 'Lulus', '2025-09-30 00:18:05', '2025-09-30 00:18:05'),
(2, 3, '55.00', 'Tidak Lulus', '2025-09-30 00:20:18', '2025-09-30 00:20:18'),
(3, 4, '88.00', 'Lulus', '2025-09-30 00:20:50', '2025-09-30 00:20:50'),
(4, 5, '50.00', 'Tidak Lulus', '2025-09-30 00:21:24', '2025-09-30 00:21:24'),
(5, 6, '90.00', 'Lulus', '2025-09-30 00:21:51', '2025-09-30 00:23:17'),
(56, 65, '85.00', 'Lulus', '2025-10-05 00:21:48', '2025-10-05 00:21:48'),
(57, 66, '78.00', 'Lulus', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(58, 67, '67.00', 'Tidak Lulus', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(59, 68, '91.00', 'Lulus', '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(60, 69, '73.00', 'Lulus', '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(61, 70, '58.00', 'Tidak Lulus', '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(62, 71, '80.00', 'Lulus', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(63, 72, '94.00', 'Lulus', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(64, 73, '89.00', 'Lulus', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(65, 74, '65.00', 'Tidak Lulus', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(66, 75, '76.00', 'Lulus', '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(67, 76, '88.00', 'Lulus', '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(68, 77, '92.00', 'Lulus', '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(69, 78, '61.00', 'Tidak Lulus', '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(70, 79, '70.00', 'Lulus', '2025-10-05 00:21:56', '2025-10-05 00:21:56'),
(71, 80, '83.00', 'Lulus', '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(72, 81, '79.00', 'Lulus', '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(73, 82, '96.00', 'Lulus', '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(74, 83, '62.00', 'Tidak Lulus', '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(75, 84, '90.00', 'Lulus', '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(76, 85, '87.00', 'Lulus', '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(77, 86, '74.00', 'Lulus', '2025-10-05 00:22:00', '2025-10-05 00:22:00'),
(78, 87, '69.00', 'Tidak Lulus', '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(79, 88, '93.00', 'Lulus', '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(80, 89, '71.00', 'Lulus', '2025-10-05 00:22:02', '2025-10-05 00:22:02'),
(81, 90, '89.00', 'Lulus', '2025-10-05 23:57:59', '2025-10-05 23:57:59'),
(82, 90, '89.00', 'Lulus', '2025-10-05 23:57:59', '2025-10-05 23:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_addresses`
--

CREATE TABLE `master_addresses` (
  `postal_code` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_regency` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_addresses`
--

INSERT INTO `master_addresses` (`postal_code`, `subdistrict`, `district`, `city_regency`, `province`, `created_at`, `updated_at`) VALUES
('16412', 'Kemiri Muka', 'Beji', 'Depok', 'Jawa Barat', '2025-10-05 00:10:37', '2025-10-05 00:10:37'),
('16414', 'Beji', 'Beji', 'Depok', 'Jawa Barat', '2025-10-05 00:10:38', '2025-10-05 00:10:38'),
('16415', 'Beji Timur', 'Beji', 'Depok', 'Jawa Barat', '2025-10-05 00:10:37', '2025-10-05 00:10:37'),
('16431', 'Cimpaeun', 'Tapos', 'Depok', 'Jawa Barat', NULL, '2025-10-05 00:10:38'),
('16432', 'Jatijajar', 'Tapos', 'Depok', 'Jawa Barat', NULL, '2025-10-05 00:10:37'),
('16433', 'Sukamaju Baru', 'Tapos', 'Depok', 'Jawa Barat', NULL, '2025-10-05 00:10:36'),
('16434', 'Grogol', 'Limo', 'Depok', 'Jawa Barat', NULL, NULL),
('16436', 'Sukamaju', 'Tapos', 'Depok', 'Jawa Barat', NULL, '2025-10-05 00:10:36'),
('16438', 'Pasir Gunung Selatan', 'Cimanggis', 'Depok', 'Jawa Barat', NULL, NULL),
('16439', 'Bojongsari Lama', 'Bojongsari', 'Depok', 'Jawa Barat', NULL, NULL),
('16451', 'Bedahan', 'Sawangan', 'Depok', 'Jawa Barat', NULL, NULL),
('16452', 'Cipayung Jaya', 'Cipayung', 'Depok', 'Jawa Barat', NULL, NULL),
('16453', 'Sukmajaya', 'Sukmajaya', 'Depok', 'Jawa Barat', NULL, NULL),
('16456', 'Leuwinanggung', 'Tapos', 'Kota Depok', 'Jawa Barat', '2025-09-23 00:18:51', '2025-09-23 00:18:51');

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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_09_14_105424_create_school_classes_table', 1),
(4, '2025_09_14_121035_create_users_table', 1),
(5, '2025_09_14_121358_create_students_table', 1),
(6, '2025_09_14_121918_create_grades_table', 1),
(7, '2025_09_14_122847_create_sessions_table', 1),
(8, '2025_09_21_053929_create_master_addresses_table', 1),
(9, '2025_09_21_063729_create_student_addresses_table', 1),
(10, '2025_09_30_071228_create_grades_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

CREATE TABLE `school_classes` (
  `id` bigint UNSIGNED NOT NULL,
  `grade_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_classes`
--

INSERT INTO `school_classes` (`id`, `grade_level`, `major`, `rombel`, `created_at`, `updated_at`) VALUES
(38, 'X', 'PPLG', '1', '2025-10-05 00:21:48', '2025-10-05 00:21:48'),
(39, 'XI', 'DKV', '2', '2025-10-05 00:21:48', '2025-10-05 00:21:48'),
(40, 'XII', 'PH', '3', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(41, 'X', 'AKL', '4', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(42, 'XI', 'TBSM', '1', '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(43, 'XII', 'TKRO', '2', '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(44, 'X', 'PPLG', '3', '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(45, 'XI', 'DKV', '4', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(46, 'XII', 'PH', '1', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(47, 'X', 'AKL', '2', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(48, 'XI', 'TBSM', '3', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(49, 'XII', 'TKRO', '4', '2025-10-05 00:21:54', '2025-10-05 00:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IpARHS5aKEeHHuFA1RHlDUZHuvpKef4ANorub7gS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiYlNJVEFTaURWUGFhbEkzMDRyVWJ5emxCajdBd29XZEdCOEZ0cmdiZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbTNnMjA0RmJaSGdHRU9ZcDNsVmxXLjlQcUEyLlJpSWMxY3pTZ2guTENvbkc5N3M4UUVHT3kiO3M6NjoidGFibGVzIjthOjI6e3M6NDA6IjkzYjQ4ZmRkNGVkNzE0MjE2ZWQ3NTE2ZTk5YWQ2Y2VlX2NvbHVtbnMiO2E6ODp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5pc24iO3M6NToibGFiZWwiO3M6NDoiTklTTiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoibmFtZSI7czo1OiJsYWJlbCI7czoxMjoiTmFtYSBMZW5na2FwIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJnZW5kZXIiO3M6NToibGFiZWwiO3M6MTM6IkplbmlzIEtlbGFtaW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIyOiJzY2hvb2xDbGFzcy5jbGFzc19uYW1lIjtzOjU6ImxhYmVsIjtzOjU6IktlbGFzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToiZ3JhZGUuc2NvcmUiO3M6NToibGFiZWwiO3M6NToiTmlsYWkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJncmFkZS5yZXN1bHQiO3M6NToibGFiZWwiO3M6MTA6IktldGVyYW5nYW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIxOiJzdHVkZW50QWRkcmVzcy5zdHJlZXQiO3M6NToibGFiZWwiO3M6NjoiQWxhbWF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX1zOjQwOiI3MTY0MjY4ZmM4OGYwNGRkNzY0YTBhOTQzYzZhNThhOF9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToicG9zdGFsX2NvZGUiO3M6NToibGFiZWwiO3M6ODoiS29kZSBQb3MiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJzdWJkaXN0cmljdCI7czo1OiJsYWJlbCI7czo5OiJLZWx1cmFoYW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6ImRpc3RyaWN0IjtzOjU6ImxhYmVsIjtzOjk6IktlY2FtYXRhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImNpdHlfcmVnZW5jeSI7czo1OiJsYWJlbCI7czoxNDoiS290YS9LYWJ1cGF0ZW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6InByb3ZpbmNlIjtzOjU6ImxhYmVsIjtzOjg6IlByb3ZpbnNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19czo4OiJmaWxhbWVudCI7YTowOnt9czo1NDoibG9naW5fc3R1ZGVudF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg5O3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zdHVkZW50cy9jcmVhdGUiO319', 1759735126),
('IYjcmdWC6mv8zoKVx4FLt4YV1hj5K0Q0TTbUtdEI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWEptWUY5aHo4V1FUcXUwNGlmaG42V2FjWDhSRTJtZXFMekRaV1VZOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1759669667),
('oeHkC5jN0vJNzpdzffuJNgo5KHq4O9kBb1atcurY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWXJoU1lrWVN0S0xJaVphOHlvT3MwVkpnQnBOeUZlS0QwQzZiZnJkZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ncmFkZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbTNnMjA0RmJaSGdHRU9ZcDNsVmxXLjlQcUEyLlJpSWMxY3pTZ2guTENvbkc5N3M4UUVHT3kiO3M6NjoidGFibGVzIjthOjE6e3M6NDA6IjUxZDBlZTExODI5MjA2OTQwOTkxMmNmMGI1MTNkODViX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJzdHVkZW50Lm5hbWUiO3M6NToibGFiZWwiO3M6NToiU2lzd2EiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InNjb3JlIjtzOjU6ImxhYmVsIjtzOjU6Ik5pbGFpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJyZXN1bHQiO3M6NToibGFiZWwiO3M6MTA6IktldGVyYW5nYW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fX19', 1759733650);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_classes_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nisn`, `name`, `gender`, `password`, `school_classes_id`, `created_at`, `updated_at`) VALUES
(3, '12345', 'Vahira Nurfitria', 'P', '$2y$12$DRs0qUMtj6/8EXALiZ5GOOyQv5ex5zaBRJivgIg2AXQRzqpDmaIoW', NULL, '2025-09-22 00:22:38', '2025-09-28 22:30:48'),
(4, '888', 'Rakan', 'L', '$2y$12$RePpBQyz6jVmA9hYKTX5CukI6b.RXQvUGQvrpA9CT8RZttNFnHm6S', NULL, '2025-09-22 00:37:55', '2025-09-22 00:37:55'),
(5, '9876', 'Leon Heart', 'L', '$2y$12$Di0S5yxlR4pHB7VMGaLP9ulp.5j0JdjsvQskZrtPj1R.r.bl3bdB2', NULL, '2025-09-28 07:27:15', '2025-09-28 07:27:15'),
(6, '7733', 'Jihan Aulia', 'P', '$2y$12$SJEfkz/r4YaNvU6ZnL37xuVWS7JbrV0oUWspeVN02mOgKuCkQ29rO', NULL, '2025-09-28 07:50:34', '2025-09-28 07:50:34'),
(14, '171717', 'Mikazuki Arion', 'L', '$2y$12$5Fq.Y65l8qQ9Kfjz3fbjLOV7fJWB7OJ7tOHjNWQbNYJnjOQc6gd9K', NULL, '2025-09-30 00:06:15', '2025-09-30 00:06:15'),
(65, '10001', 'Rafi Aditya', 'L', '$2y$12$ZUTGaPGLE1a0kFGjrFeqLONurMLqYtdLjNDfA7vkq0e4Xx8vtlyIG', 38, '2025-10-05 00:21:48', '2025-10-05 00:21:48'),
(66, '10002', 'Siti Nurhaliza', 'P', '$2y$12$Q.4AhEWaTgLW579zlTSTCOVw/fwWMxJk/Ij0uli8WiHlS0McCgPTK', 39, '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(67, '10003', 'Dimas Pratama', 'L', '$2y$12$SkyHUOlJRskYak.y84VDZOcS6hfK/ShthgSxpplrAJGIk22R5OBde', 40, '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(68, '10004', 'Rizky Ramadhan', 'P', '$2y$12$VLZXZi9aUlKw3rJtL9Qug.GiXbPAvqqXD8gbTZjbv89PQtEvj.ABa', 41, '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(69, '10005', 'Nabila Putri', 'L', '$2y$12$4yKr.vtRczicoGlk9V1CbO3A1aZv2NJbEivMxcT7Uz3jP7.P/trvK', 42, '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(70, '10006', 'Aldi Saputra', 'P', '$2y$12$kKECQ6AisOFCuygSQrsxueFyekSTEY9W8O/x1Qgl3pMgCAeWvkzmS', 43, '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(71, '10007', 'Tania Rahma', 'L', '$2y$12$tQqSNZDyRj0K8M5F27G4GeoR0zekzAHHnnvPCTgOrFpHU40sgXnFy', 44, '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(72, '10008', 'Reza Fadillah', 'P', '$2y$12$L536LNJZ0y2T8Hcz2ldhwOpzE1hkpk29b94XdG3zXNL1Puvc7q4IO', 45, '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(73, '10009', 'Bella Azzahra', 'L', '$2y$12$YMxGyVOCG0Es92bAERitT.IsBZMj.2JeDfxRw3T01cdJwkN00/ajK', 46, '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(74, '10010', 'Dwi Nugroho', 'P', '$2y$12$s8DfJnD/byufoJ7QrslNI.cFH9hX3vBpuWa7DwntAUslO6mxqutHi', 47, '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(75, '10011', 'Fajar Maulana', 'L', '$2y$12$PAAlbe3RmMaUsbm5FJTt8evpH9pRUbVf0Ov8QNA7nsa2nl655M0pq', 48, '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(76, '10012', 'Keisha Putri', 'P', '$2y$12$xc7Fk7V3qm2XoLiUg8Ke7Ool3mQXHNy.mJs6QkV28aA.uMpkO6v76', 49, '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(77, '10013', 'Bagas Wibowo', 'L', '$2y$12$kNoakE8muYctwA4OxXp4hOmxJ20JxcpYzMQgr0vteQJluF3GLGflG', 38, '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(78, '10014', 'Nadya Safira', 'P', '$2y$12$RxWXrz3Ha1/Rw4DYB95QXOhBoIzGB6JiA/K.Hm/gmntzcCZWY1bHu', 39, '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(79, '10015', 'Arga Prakoso', 'L', '$2y$12$49P/ZbEZlfEbPEkhXNad9uVdNeh4Ws67NXGuRttWC2JXgllDaDmDq', 40, '2025-10-05 00:21:56', '2025-10-05 00:21:56'),
(80, '10016', 'Aulia Zahra', 'P', '$2y$12$ji7OdJASpMmrxOoebeJ55eiN3/.6KolI6ETxSloXg/V1coAiJGbIK', 41, '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(81, '10017', 'Ilham Kurniawan', 'L', '$2y$12$wDGTupuOguPJcAyLUcoD9een8mTiImuttVKyfdWps1WrIByhiuU9i', 42, '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(82, '10018', 'Shafira Nuraini', 'P', '$2y$12$MslAhF1m7GeBIqRc9U/1EeHUwYjbnkcDceIavv3.RxwJPrkLNiIv6', 43, '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(83, '10019', 'Yoga Pratama', 'L', '$2y$12$u/EcIikN54DgbKDp8UuRiuawuiI0gGxWnDtjIS//4VIdKCq8yJ9S6', 44, '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(84, '10020', 'Zahra Kirana', 'P', '$2y$12$rSJQEEz8UVDlODo9gwL3XOOCq1Mh7sWE.D6BSLocoPrPOPTcdiFPK', 45, '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(85, '10021', 'Gilang Saputra', 'L', '$2y$12$ysZTizuXj3oiLA62RBD1AOwUfTvyNfH4MnMcyLuU0KWEqAsFiMG8W', 46, '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(86, '10022', 'Citra Anggraini', 'P', '$2y$12$9IIP/Gk1sMk/Pm6ysn5s4ujErvaXOcOVvWxQ61GA7MBn63CbLpANq', 47, '2025-10-05 00:22:00', '2025-10-05 00:22:00'),
(87, '10023', 'Aditya Rizqi', 'L', '$2y$12$J52d7OhQVZfyjzZtT6hrTecyBANR5pPtx6BEMtg4JHoMRGvgPxVsS', 48, '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(88, '10024', 'Maya Puspita', 'P', '$2y$12$NGr4vbLxyMOxydhqa1XII.jADAUVPpmpSn8vFro42nr4TWL6jjVwW', 49, '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(89, '10025', 'Rendra Pratama', 'L', '$2y$12$HhJJuVdJJbltzeQPSKk.MOoUdGf/zmEZRW0/oxvmk/hwQy72oapPC', 38, '2025-10-05 00:22:02', '2025-10-05 00:22:02'),
(90, '32323', 'Pratama', 'L', '$2y$12$Tv3czfRYMqR6zYIiSG9bROXia.mkhA5Xn8FUb7x4XaXUsd73/lwlq', 44, '2025-10-05 23:57:59', '2025-10-05 23:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `student_addresses`
--

CREATE TABLE `student_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `nisn` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_addresses`
--

INSERT INTO `student_addresses` (`id`, `nisn`, `street`, `number`, `rt`, `rw`, `postal_code`, `created_at`, `updated_at`) VALUES
(2, '12345', 'dian', '205', '01', '07', '16436', '2025-09-22 00:22:38', '2025-09-22 00:22:38'),
(3, '888', 'timun', '097', '03', '01', '16438', '2025-09-22 00:37:55', '2025-09-22 00:37:55'),
(4, '9876', 'Semangka', '23', '1', '2', '16434', '2025-09-28 07:27:15', '2025-09-28 07:27:15'),
(5, '7733', 'Nangka', '20', '04', '03', '16456', '2025-09-28 07:50:34', '2025-09-28 07:50:34'),
(11, '171717', 'isekai', '674', '04', '05', '16433', '2025-09-30 00:06:15', '2025-09-30 00:06:15'),
(62, '10001', 'Melati', '1', '01', '01', '16436', '2025-10-05 00:21:48', '2025-10-05 00:21:48'),
(63, '10002', 'Mawar', '2', '02', '02', '16433', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(64, '10003', 'Anggrek', '3', '03', '03', '16432', '2025-10-05 00:21:49', '2025-10-05 00:21:49'),
(65, '10004', 'Melur', '4', '04', '04', '16412', '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(66, '10005', 'Flamboyan', '5', '01', '05', '16415', '2025-10-05 00:21:50', '2025-10-05 00:21:50'),
(67, '10006', 'Dahlia', '6', '02', '06', '16431', '2025-10-05 00:21:51', '2025-10-05 00:21:51'),
(68, '10007', 'Kenanga', '7', '03', '07', '16414', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(69, '10008', 'Teratai', '8', '04', '01', '16436', '2025-10-05 00:21:52', '2025-10-05 00:21:52'),
(70, '10009', 'Kamboja', '9', '01', '02', '16433', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(71, '10010', 'Sakura', '10', '02', '03', '16432', '2025-10-05 00:21:53', '2025-10-05 00:21:53'),
(72, '10011', 'Bougenville', '11', '03', '04', '16412', '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(73, '10012', 'Cendana', '12', '04', '05', '16415', '2025-10-05 00:21:54', '2025-10-05 00:21:54'),
(74, '10013', 'Kemuning', '13', '01', '06', '16431', '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(75, '10014', 'Palem', '14', '02', '07', '16414', '2025-10-05 00:21:55', '2025-10-05 00:21:55'),
(76, '10015', 'Seruni', '15', '03', '01', '16436', '2025-10-05 00:21:56', '2025-10-05 00:21:56'),
(77, '10016', 'Jasmine', '16', '04', '02', '16433', '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(78, '10017', 'Lavender', '17', '01', '03', '16432', '2025-10-05 00:21:57', '2025-10-05 00:21:57'),
(79, '10018', 'Anyelir', '18', '02', '04', '16412', '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(80, '10019', 'Sepatu', '19', '03', '05', '16415', '2025-10-05 00:21:58', '2025-10-05 00:21:58'),
(81, '10020', 'Pinang', '20', '04', '06', '16431', '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(82, '10021', 'Cemara', '21', '01', '07', '16414', '2025-10-05 00:21:59', '2025-10-05 00:21:59'),
(83, '10022', 'Nusa Indah', '22', '02', '01', '16436', '2025-10-05 00:22:00', '2025-10-05 00:22:00'),
(84, '10023', 'Kenari', '23', '03', '02', '16433', '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(85, '10024', 'Merpati', '24', '04', '03', '16432', '2025-10-05 00:22:01', '2025-10-05 00:22:01'),
(86, '10025', 'Rajawali', '25', '01', '04', '16412', '2025-10-05 00:22:02', '2025-10-05 00:22:02'),
(87, '32323', 'Anggrek', '01', '01', '02', '16456', '2025-10-05 23:57:59', '2025-10-05 23:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','guru') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guru',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin_ipin', 'ipin', '$2y$12$m3g204FbZHgGEOYp3lVlW.9PqA2.RiIc1czSgh.LConG97s8QEGOy', 'admin', NULL, '2025-09-20 23:46:11', '2025-09-20 23:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_student_id_foreign` (`student_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_addresses`
--
ALTER TABLE `master_addresses`
  ADD PRIMARY KEY (`postal_code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nisn_unique` (`nisn`),
  ADD KEY `students_school_classes_id_foreign` (`school_classes_id`);

--
-- Indexes for table `student_addresses`
--
ALTER TABLE `student_addresses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_addresses_nisn_unique` (`nisn`),
  ADD KEY `student_addresses_postal_code_foreign` (`postal_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `student_addresses`
--
ALTER TABLE `student_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_school_classes_id_foreign` FOREIGN KEY (`school_classes_id`) REFERENCES `school_classes` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `student_addresses`
--
ALTER TABLE `student_addresses`
  ADD CONSTRAINT `student_addresses_nisn_foreign` FOREIGN KEY (`nisn`) REFERENCES `students` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_addresses_postal_code_foreign` FOREIGN KEY (`postal_code`) REFERENCES `master_addresses` (`postal_code`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
