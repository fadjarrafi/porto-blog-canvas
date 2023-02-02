-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2023 at 01:13 AM
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
-- Database: `portoblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `canvas_posts`
--

CREATE TABLE `canvas_posts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `published_at` datetime DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_posts`
--

INSERT INTO `canvas_posts` (`id`, `slug`, `title`, `summary`, `body`, `published_at`, `featured_image`, `featured_image_caption`, `user_id`, `meta`, `created_at`, `updated_at`, `deleted_at`) VALUES
('399724ff-0691-4485-8d1a-de9f723b11b3', 'test-post', 'Test Post', 'test', '<p>test post</p><div class=\"embedded_image\" contenteditable=\"false\" data-layout=\"default\"><img alt=\"test\" src=\"/storage/canvas/images/cgu8jwwlWhFKKPH04Tr9Onp6ttPa813Flqvmzj87.png\"><p>test</p></div><p>test</p><p><br></p><p><br></p><p><br></p>', '2022-01-30 15:27:00', '/storage/canvas/images/Da617R6VjkHee47OVMtXvLQrJNHK6lD2S6TvchsG.png', NULL, 'f30a3d98-476b-4fcf-b79b-a804cf197878', '{\"title\": null, \"description\": null, \"canonical_link\": null}', '2023-01-30 02:20:38', '2023-01-30 04:50:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `canvas_posts_tags`
--

CREATE TABLE `canvas_posts_tags` (
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_posts_tags`
--

INSERT INTO `canvas_posts_tags` (`post_id`, `tag_id`) VALUES
('399724ff-0691-4485-8d1a-de9f723b11b3', 'eada47c4-51ee-4edc-8a33-6062e20196bf');

-- --------------------------------------------------------

--
-- Table structure for table `canvas_posts_topics`
--

CREATE TABLE `canvas_posts_topics` (
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_posts_topics`
--

INSERT INTO `canvas_posts_topics` (`post_id`, `topic_id`) VALUES
('399724ff-0691-4485-8d1a-de9f723b11b3', '9be6608b-112f-478e-a58f-22e498e75b67');

-- --------------------------------------------------------

--
-- Table structure for table `canvas_tags`
--

CREATE TABLE `canvas_tags` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_tags`
--

INSERT INTO `canvas_tags` (`id`, `slug`, `name`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('89f56bd1-265a-44c3-b726-49211b2f6c6d', 'test', 'test', 'f30a3d98-476b-4fcf-b79b-a804cf197878', '2023-01-30 02:38:43', '2023-01-30 02:38:43', NULL),
('eada47c4-51ee-4edc-8a33-6062e20196bf', 'db', 'db', 'f30a3d98-476b-4fcf-b79b-a804cf197878', '2023-01-30 04:51:00', '2023-01-30 04:51:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `canvas_topics`
--

CREATE TABLE `canvas_topics` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_topics`
--

INSERT INTO `canvas_topics` (`id`, `slug`, `name`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('121fa9e6-5bc1-48a9-a9d5-119b8e45fcb7', 'test', 'test', 'f30a3d98-476b-4fcf-b79b-a804cf197878', '2023-01-30 02:38:38', '2023-01-30 02:38:38', NULL),
('9be6608b-112f-478e-a58f-22e498e75b67', 'backend', 'backend', 'f30a3d98-476b-4fcf-b79b-a804cf197878', '2023-01-30 04:50:56', '2023-01-30 04:50:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `canvas_users`
--

CREATE TABLE `canvas_users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dark_mode` tinyint DEFAULT NULL,
  `digest` tinyint DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_users`
--

INSERT INTO `canvas_users` (`id`, `name`, `email`, `username`, `password`, `summary`, `avatar`, `dark_mode`, `digest`, `locale`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
('f30a3d98-476b-4fcf-b79b-a804cf197878', 'Fadjar', 'dark.fir21@gmail.com', NULL, '$2y$10$O.IpfZw7JWp0jySvzk.gPeAP.6FyOftTBkzHlYdPyPh9VAgwDmTsK', NULL, NULL, 0, 0, 'en', 3, NULL, '2023-01-29 23:25:07', '2023-01-30 02:38:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `canvas_views`
--

CREATE TABLE `canvas_views` (
  `id` int UNSIGNED NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` text COLLATE utf8mb4_unicode_ci,
  `referer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_views`
--

INSERT INTO `canvas_views` (`id`, `post_id`, `ip`, `agent`, `referer`, `created_at`, `updated_at`) VALUES
(1, '399724ff-0691-4485-8d1a-de9f723b11b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '127.0.0.1', '2023-01-30 03:15:58', '2023-01-30 03:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `canvas_visits`
--

CREATE TABLE `canvas_visits` (
  `id` int UNSIGNED NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` text COLLATE utf8mb4_unicode_ci,
  `referer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canvas_visits`
--

INSERT INTO `canvas_visits` (`id`, `post_id`, `ip`, `agent`, `referer`, `created_at`, `updated_at`) VALUES
(1, '399724ff-0691-4485-8d1a-de9f723b11b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '127.0.0.1', '2023-01-30 03:15:58', '2023-01-30 03:15:58');

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
(1, '2020_09_21_000000_create_canvas_tables', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canvas_posts`
--
ALTER TABLE `canvas_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `canvas_posts_slug_user_id_unique` (`slug`,`user_id`),
  ADD KEY `canvas_posts_user_id_index` (`user_id`);

--
-- Indexes for table `canvas_posts_tags`
--
ALTER TABLE `canvas_posts_tags`
  ADD UNIQUE KEY `canvas_posts_tags_post_id_tag_id_unique` (`post_id`,`tag_id`);

--
-- Indexes for table `canvas_posts_topics`
--
ALTER TABLE `canvas_posts_topics`
  ADD UNIQUE KEY `canvas_posts_topics_post_id_topic_id_unique` (`post_id`,`topic_id`);

--
-- Indexes for table `canvas_tags`
--
ALTER TABLE `canvas_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `canvas_tags_slug_user_id_unique` (`slug`,`user_id`),
  ADD KEY `canvas_tags_created_at_index` (`created_at`),
  ADD KEY `canvas_tags_user_id_index` (`user_id`);

--
-- Indexes for table `canvas_topics`
--
ALTER TABLE `canvas_topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `canvas_topics_slug_user_id_unique` (`slug`,`user_id`),
  ADD KEY `canvas_topics_created_at_index` (`created_at`),
  ADD KEY `canvas_topics_user_id_index` (`user_id`);

--
-- Indexes for table `canvas_users`
--
ALTER TABLE `canvas_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `canvas_users_email_unique` (`email`),
  ADD UNIQUE KEY `canvas_users_username_unique` (`username`);

--
-- Indexes for table `canvas_views`
--
ALTER TABLE `canvas_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `canvas_views_created_at_index` (`created_at`),
  ADD KEY `canvas_views_post_id_index` (`post_id`);

--
-- Indexes for table `canvas_visits`
--
ALTER TABLE `canvas_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canvas_views`
--
ALTER TABLE `canvas_views`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `canvas_visits`
--
ALTER TABLE `canvas_visits`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
