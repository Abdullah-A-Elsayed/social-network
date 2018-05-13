-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2018 at 10:11 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.1.17-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'nasr city', 1, NULL, NULL),
(2, 'cairo', 1, NULL, NULL),
(3, 'alexandria', 1, NULL, NULL),
(4, 'suez', 1, NULL, NULL),
(5, 'sinai', 1, NULL, NULL),
(6, 'Plovdiv', 2, NULL, NULL),
(7, 'Rio de Janeiro', 3, NULL, NULL),
(8, 'Buenos Aires', 4, NULL, NULL),
(9, 'Dhaka', 5, NULL, NULL),
(10, 'Bogotá', 6, NULL, NULL),
(11, 'Quito', 6, NULL, NULL),
(12, 'Ottawa', 8, NULL, NULL),
(13, 'Beijing', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'nice', NULL, NULL),
(2, 6, 2, 'nice', NULL, NULL),
(3, 7, 1, 'good', NULL, NULL),
(4, 7, 2, 'good', NULL, NULL),
(5, 6, 12, 'comment', NULL, NULL),
(8, 5, 12, 'comment', NULL, NULL),
(9, 5, 12, 'comment', NULL, NULL),
(10, 7, 12, 'lol', '2018-05-12 18:38:19', '2018-05-12 18:38:19'),
(11, 7, 10, 'good', '2018-05-12 18:38:32', '2018-05-12 18:38:32'),
(12, 7, 18, 'grooup comment', '2018-05-12 18:38:32', '2018-05-12 18:38:32'),
(13, 7, 2, 'thanks', '2018-05-13 00:30:20', '2018-05-13 00:30:20'),
(14, 7, 4, 'nice', '2018-05-13 01:41:39', '2018-05-13 01:41:39'),
(15, 7, 20, 'sa', '2018-05-13 01:43:16', '2018-05-13 01:43:16'),
(16, 7, 21, 'lol', '2018-05-13 13:12:24', '2018-05-13 13:12:24'),
(17, 7, 22, '5555', '2018-05-13 13:15:01', '2018-05-13 13:15:01'),
(18, 5, 3, 'ddd', '2018-05-13 15:53:43', '2018-05-13 15:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'egypt', NULL, NULL),
(2, 'Bulgaria', NULL, NULL),
(3, 'Brazil', NULL, NULL),
(4, 'Argentina', NULL, NULL),
(5, 'Bangladesh', NULL, NULL),
(6, 'Colombia', NULL, NULL),
(7, 'Ecuador', NULL, NULL),
(8, 'Canada', NULL, NULL),
(9, 'China', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `user_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'real madrid lovers', 7, 'uploads/XApjep_engineering.png', 'Group for real madrid lovers', NULL, NULL),
(2, 'real madrid lovers2', 5, 'uploads/XApjep_engineering.png', 'Group for real madrid lovers', NULL, NULL),
(3, 'Asu CSE 2019', 7, 'assassins_creed_origins_bayek_of_siwa-2560x1440.jpg', 'Asu CSE 2019 Asu CSE 2019', '2018-05-13 16:44:47', '2018-05-13 16:44:47'),
(4, 'asu', 7, 'healthcare.png', 'asu sd as sad', '2018-05-13 16:45:11', '2018-05-13 16:45:11'),
(5, 'dsadasdas', 7, 'healthcare.png', 'sa', '2018-05-13 16:48:15', '2018-05-13 16:48:15'),
(6, 'mohamed abbass gamal', 7, 'assassins-creed-origins-characters-4k-xj.jpg', 'sadsadas', '2018-05-13 16:48:27', '2018-05-13 16:48:27'),
(7, 'mohamed abbass gamal', 7, 'engineering.png', 'sdsadasdas', '2018-05-13 16:49:38', '2018-05-13 16:49:38'),
(8, 'mohamed abbass gamal', 7, 'uploads/S0nFid_Marketing.png', 'dsadsadsad asddas da sda', '2018-05-13 16:51:15', '2018-05-13 16:51:15'),
(9, 'mohamed abbass gamal', 7, 'uploads/W0TazG_sector2.png', 'sadasdasda', '2018-05-13 16:59:30', '2018-05-13 16:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_user`
--

INSERT INTO `group_user` (`id`, `status`, `user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(3, 1, 5, 2, NULL, NULL),
(8, 1, 7, 9, '2018-05-13 16:59:30', '2018-05-13 16:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'swimming', NULL, NULL),
(2, 'movies', NULL, NULL),
(3, 'reading', NULL, NULL),
(4, 'walking', NULL, NULL),
(5, 'music', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(15, 7, 2, '2018-05-13 00:30:06', '2018-05-13 00:30:06'),
(16, 7, 19, '2018-05-13 01:38:37', '2018-05-13 01:38:37'),
(17, 7, 14, '2018-05-13 01:39:53', '2018-05-13 01:39:53'),
(31, 5, 23, '2018-05-13 15:53:36', '2018-05-13 15:53:36'),
(33, 5, 3, '2018-05-13 15:53:40', '2018-05-13 15:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_08_222116_create_countries_table', 1),
(4, '2018_04_08_222116_create_unis_table', 1),
(5, '2018_04_13_215237_make_cities_table', 1),
(6, '2018_04_13_215237_make_groups_table', 1),
(7, '2018_04_13_215237_make_interests_table', 1),
(8, '2018_04_13_215237_make_posts_table', 1),
(9, '2018_04_13_215237_make_user_user_table', 1),
(10, '2018_04_27_203801_create_group_user_table', 1),
(11, '52018_04_08_222116_create_facs_table ', 1),
(12, '52018_04_13_215237_make_comments_table ', 1),
(13, '52018_04_13_215237_make_group_post_table', 1),
(14, '82014_10_12_000000_create_user_profiles_table', 1),
(15, '82018_04_08_222116_create_user_interest_table ', 1),
(16, '92018_04_13_215237_make_likes_table', 1),
(17, '92018_04_13_215237_make_post_reports_table', 1),
(18, '992018_04_27_204639_create_group_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `user_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'first post', 7, 1, '2018-05-12 15:22:16', '2018-05-12 15:22:16'),
(2, 'second post', 7, 1, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(3, 'second post', 5, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(4, 'first post', 7, 0, '2018-05-12 15:22:16', '2018-05-12 15:22:16'),
(5, 'second post', 6, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(6, 'second post', 5, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(7, 'first post', 5, 0, '2018-05-12 15:22:16', '2018-05-12 15:22:16'),
(8, 'second post', 6, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(9, 'second post', 5, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(10, 'first post', 5, 0, '2018-05-12 15:22:16', '2018-05-12 15:22:16'),
(11, 'second post', 7, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(12, 'second post', 6, 0, '2018-05-12 15:22:47', '2018-05-12 15:22:47'),
(13, 'hello', 7, 0, '2018-05-12 18:16:15', '2018-05-12 18:16:15'),
(14, 'lol', 7, 0, '2018-05-12 18:37:06', '2018-05-12 18:37:06'),
(15, 'hhhh', 7, 0, '2018-05-12 18:37:23', '2018-05-12 18:37:23'),
(16, 'hhhh', 6, 2, '2018-05-12 18:37:23', '2018-05-12 18:37:23'),
(17, 'hhhh7', 7, 2, '2018-05-12 18:37:23', '2018-05-12 18:37:23'),
(18, 'hhhh5', 5, 2, '2018-05-12 18:37:23', '2018-05-12 18:37:23'),
(19, 'simm', 7, 0, '2018-05-13 01:38:28', '2018-05-13 01:38:28'),
(20, 'saaa', 7, 0, '2018-05-13 01:43:10', '2018-05-13 01:43:10'),
(21, 'hhhhhssss', 7, 0, '2018-05-13 13:11:53', '2018-05-13 13:11:53'),
(22, '25252626', 7, 0, '2018-05-13 13:14:57', '2018-05-13 13:14:57'),
(23, 'sit sahskja', 5, 0, '2018-05-13 15:53:32', '2018-05-13 15:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `interests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` int(255) DEFAULT NULL,
  `city` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `type`, `status`, `interests`, `created_at`, `updated_at`, `country`, `city`, `image`, `phone`) VALUES
(5, 'gasser samy', 'mmmo7amed1914@yahoo.com', '$2y$10$GHJvgHONayIxuhFra8N94Odgyo5lqN4s7GYuq.a8dt/u4AcxQga3G', 'qK2beEjS3xnqX99QvBspcKJlonKTqlIXebyNL634ziF8uMXgis5djwA4t2mV', 0, 1, '1,2,3', '2018-05-12 13:52:35', '2018-05-12 13:52:35', 1, 1, NULL, ''),
(6, 'mohamed elsayed', 'host@host.com', '$2y$10$GHJvgHONayIxuhFra8N94Odgyo5lqN4s7GYuq.a8dt/u4AcxQga3G', 'fuDrDm9rp3C3p5lXItEFliK4Hxk79c5JiZAfbdxs3w5xwzpIRxzuUCXINIwY', 0, 1, '0', '2018-05-12 14:53:09', '2018-05-12 14:53:09', 1, 1, 'uploads/XApjep_engineering.png', '01128251319'),
(7, 'mohamed gamal', 'mmo7amed2010@gmail.com', '$2y$10$/aZeGZtugdi5iRJjUN20X.4g2BfJmXviiuFVGiXKnCpoKFbbdPLlS', 'owmVAD0eOmGdQsvOuy3nsWQ4rp1rDcoxzM3cnR0r0SVRrOC1B69tlphdlcvC', 0, 1, '1,3,5', '2018-05-12 14:58:56', '2018-05-13 14:34:13', 1, 1, 'uploads/9TcSNs_energy.png', '01128251319'),
(8, 'mohamed gamal2', 'mmo7amed2011@gmail.com', '$2y$10$/aZeGZtugdi5iRJjUN20X.4g2BfJmXviiuFVGiXKnCpoKFbbdPLlS', 'w1gYukVZVkMqenv1abiHEyQUVldiJfqgd1OhnW5qeEEIk3BCCWqkKNWwWHPx', 0, 1, '1,3', '2018-05-12 14:58:56', '2018-05-12 14:58:56', 1, 1, 'uploads/XApjep_engineering.png', '01128251319'),
(10, 'mohamed elsayed2', 'host@host.comss', '$2y$10$GHJvgHONayIxuhFra8N94Odgyo5lqN4s7GYuq.a8dt/u4AcxQga3G', 'fuDrDm9rp3C3p5lXItEFliK4Hxk79c5JiZAfbdxs3w5xwzpIRxzuUCXINIwY', 0, 1, '0', '2018-05-12 14:53:09', '2018-05-12 14:53:09', 1, 1, 'uploads/XApjep_engineering.png', '01128251319'),
(11, 'abdullah el sayed', 'host@host.comssa', '$2y$10$GHJvgHONayIxuhFra8N94Odgyo5lqN4s7GYuq.a8dt/u4AcxQga3G', 'fuDrDm9rp3C3p5lXItEFliK4Hxk79c5JiZAfbdxs3w5xwzpIRxzuUCXINIwY', 0, 1, '0', '2018-05-12 14:53:09', '2018-05-12 14:53:09', 1, 1, 'uploads/XApjep_engineering.png', '01128251319'),
(12, 'gas sam', 'g@gmaill.com', '$2y$10$EG.vurUBIquKFZS6pFg81.5FoC12RaL0wIkv69XwHCZYMl1o.393y', 'UMEC2ODEtNcO1LezwKg9T1FHFKISILOdWkfMsRXk56S4U7l25n0oX9MNzjx0', 0, 1, '2,3', '2018-05-13 13:27:30', '2018-05-13 13:27:30', 1, 3, NULL, '0125'),
(13, 'mohamed gamal abbas', 'mmo7amed2010@gmail.coms', '$2y$10$zMPQHH9G52gFXBBZNFr//esTG.3hAV9WS/3Nl4RVSNjgBjx6Y1xMm', 'WJocqYVl4XVcflhWcVCFogGNOKk1Lz6e9qNb1wCDGrCSDEmYVkZasWHgWotf', 0, 1, '1,2,3', '2018-05-13 14:03:46', '2018-05-13 14:03:46', 1, 3, NULL, '01128251319');

-- --------------------------------------------------------

--
-- Table structure for table `user_user`
--

CREATE TABLE `user_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user1_id` int(10) UNSIGNED NOT NULL,
  `user2_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_user`
--

INSERT INTO `user_user` (`id`, `user1_id`, `user2_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 6, 1, NULL, NULL),
(5, 8, 6, 1, NULL, NULL),
(7, 10, 6, 1, NULL, NULL),
(8, 11, 6, 1, NULL, NULL),
(10, 11, 10, 1, NULL, NULL),
(12, 7, 5, 1, '2018-05-13 14:49:23', '2018-05-13 15:53:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_user_id_foreign` (`user_id`);

--
-- Indexes for table `group_user`
--
ALTER TABLE `group_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_user_user_id_foreign` (`user_id`),
  ADD KEY `group_user_group_id_foreign` (`group_id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

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
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_user`
--
ALTER TABLE `user_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_user_user1_id_foreign` (`user1_id`),
  ADD KEY `user_user_user2_id_foreign` (`user2_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `group_user`
--
ALTER TABLE `group_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_user`
--
ALTER TABLE `user_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `group_user`
--
ALTER TABLE `group_user`
  ADD CONSTRAINT `group_user_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_user`
--
ALTER TABLE `user_user`
  ADD CONSTRAINT `user_user_user1_id_foreign` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_user_user2_id_foreign` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
