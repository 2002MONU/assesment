-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 03:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Monu kumar', 'monu@gmail.com', '$2y$10$Hmc3UfhUW4qZefONeD6HWOQis7rM2SWm7VvlDrvKdsbv1/RqwUmz.', '2024-04-14 17:05:43', '2024-04-14 17:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `designation`, `city`, `created_at`, `updated_at`) VALUES
(15, 'Arnulfo Frami', 'Elevator Installer and Repairer', 'Port Clementine', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(16, 'Harry Douglas', 'Ceiling Tile Installer', 'Lake Keyshawn', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(17, 'Floy Lakin DVM', 'Chemical Equipment Tender', 'North Adanmouth', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(18, 'Maryse Gaylord', 'Postmasters', 'North Vella', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(19, 'Edwin Ziemann', 'Packer and Packager CPM', 'lucknow', '2024-11-25 09:56:25', '2024-11-25 10:49:44'),
(20, 'Prof. Felix Boyle', 'Medical Equipment Repairer', 'Edmundview', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(21, 'Dr. Conor Tillman', 'Automotive Body Repairer', 'Howellchester', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(22, 'Russ Jacobi', 'Keyboard Instrument Repairer and Tuner', 'Dedricfort', '2024-11-25 09:56:25', '2024-11-25 09:56:25'),
(23, 'Monu', 'PHP', 'indore', '2024-11-25 10:09:52', '2024-11-25 10:09:52'),
(24, 'Monu', 'Laravel', 'lucknow', '2024-11-25 10:16:52', '2024-11-25 10:16:52'),
(25, 'Monu', 'React', 'pune', '2024-11-25 10:17:40', '2024-11-25 10:17:40'),
(26, 'Abhi', 'DIGI Tweets', 'jaipur', '2024-11-25 10:18:44', '2024-11-25 10:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `title` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_id`, `title`, `created_at`, `updated_at`) VALUES
(14, 'Physics', '15', 'admin.add-book-post   dff', '2024-11-25 10:59:16', '2024-11-25 11:18:18'),
(15, 'maths', '21', 'best', '2024-11-25 11:34:40', '2024-11-25 11:34:40');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `useremail`, `rating`, `feedback`, `book_name`, `author_name`, `created_at`, `updated_at`) VALUES
(2, 'kumar@gmail.com', 4, 'Monu', 'maths', 'Dr. Conor Tillman', '2024-11-25 13:15:22', '2024-11-25 13:15:22'),
(3, 'kumar@gmail.com', 5, 'hello', 'Physics', 'Arnulfo Frami', '2024-11-25 13:16:01', '2024-11-25 13:16:01'),
(4, 'kumar@gmail.com', 3, 'jeke', 'maths', 'Dr. Conor Tillman', '2024-11-25 13:16:14', '2024-11-25 13:16:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_04_06_070314_create_admins_table', 1),
(5, '2024_04_06_100628_create_authors_table', 1),
(6, '2024_04_06_101507_create_books_table', 1),
(7, '2024_11_25_182100_create_feedback_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `mobile` varchar(20) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Monu', 'monu@gmail.com', NULL, '123456', '2121212121', NULL, '2024-11-25 12:27:48', '2024-11-25 12:27:48'),
(2, 'Monu', 'kumar@gmail.com', NULL, '$2y$10$yUmfcVYfSEk7K1voiGLUU.Slk.E2a09nn2bicqpcZu75GX0zIky1O', '2121212121', NULL, '2024-11-25 12:29:27', '2024-11-25 12:29:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
