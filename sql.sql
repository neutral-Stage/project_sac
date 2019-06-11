-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 02:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sac_ict`
--

-- --------------------------------------------------------

--
-- Table structure for table `bkashes`
--

CREATE TABLE `bkashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `donated_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bkashes`
--

INSERT INTO `bkashes` (`id`, `name`, `phone`, `amount`, `invoice`, `address`, `donated_for`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jon Doe', '0170000000', '2000', '961', 'Dhaka, Bangladesh', 'Choir', 1, '2019-06-11 02:28:47', '2019-06-11 06:41:36'),
(3, 'Jon Doe2', '013923882', '3000', '845', 'Rajshahi,  Bangladesh', 'Choir', 0, '2019-06-11 02:39:56', '2019-06-11 02:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `choirteammembers`
--

CREATE TABLE `choirteammembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choirteammembers`
--

INSERT INTO `choirteammembers` (`id`, `name`, `position`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'Rabin Hood pandey', 'fORENT', '556473.jpg', '2019-06-02 21:06:18', '2019-06-02 23:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `choirvideos`
--

CREATE TABLE `choirvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choirvideos`
--

INSERT INTO `choirvideos` (`id`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Xdf5_t6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `type`, `heading`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(7, 1, 'home', 'df', NULL, '966324.jpg', '2019-06-03 10:59:34', '2019-06-03 10:59:34'),
(8, 1, 'home', 'df', NULL, '933441.jpg', '2019-06-03 10:59:45', '2019-06-03 10:59:45');

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
(3, '2019_05_25_093354_create_roles_table', 2),
(4, '2019_05_25_093617_role_user', 3),
(6, '2019_05_25_152947_create_role_users_table', 4),
(7, '2019_05_30_054228_create_sliders_table', 5),
(8, '2019_05_31_092553_create_galleries_table', 6),
(11, '2019_06_02_222944_choirvidolink', 7),
(12, '2019_06_03_010735_create_choirteammembers_table', 8),
(14, '2019_06_03_050851_create_ucevents_table', 9),
(15, '2019_06_03_145510_create_ucimages_table', 10),
(16, '2019_06_10_021325_create_volunteers_table', 11),
(17, '2019_06_11_054102_create_bkashes_table', 12);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', '2019-05-25 09:40:56', '2019-05-25 09:40:56'),
(2, 'editor', '2019-05-25 09:40:56', '2019-05-25 09:40:56'),
(3, 'stuff', '2019-05-25 09:42:01', '2019-05-25 09:42:01'),
(4, 'author', '2019-05-25 09:42:01', '2019-05-25 09:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-05-25 15:35:02', '2019-05-25 15:35:02'),
(8, 4, 4, '2019-05-26 01:17:18', '2019-05-26 01:17:18'),
(9, 2, 4, '2019-06-09 11:23:27', '2019-06-09 11:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_text` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `user_id`, `type`, `title_1`, `title_2`, `body_text`, `image`, `created_at`, `updated_at`) VALUES
(10, 1, 'home', 'Be With Us', 'Be With Us', '“Let them sacrifice thanks offerings and tell of his works with songs of joy.” -Psalms 107:22', '434538.JPG', '2019-05-30 22:19:18', '2019-05-31 02:17:54'),
(11, 1, 'home', 'Sacrifice Choir', 'Sacrifice Choir', 'It is a place of union of those people who have the intention of doing mission with songs. Choir is the body of church where everyone will work closely with one another by using their voice for God’s glory through praise and worship.', '221980.JPG', '2019-05-30 22:21:08', '2019-05-31 02:18:22'),
(12, 1, 'home', 'School Of Worship', 'School Of Worship', '“He is the one we proclaim, admonishing and teaching everyone with all wisdom, so that we may present everyone fully mature in Christ.”- Colossians 1:28', '388506.JPG', '2019-05-30 22:33:09', '2019-05-31 02:18:51'),
(13, 1, 'home', 'Creative Arts', 'Transform Through Artform', '“Do not conform to the pattern of this world, but be transformed by the renewing of your mind. Then you will be able to test and approve what God’s will is—his good, pleasing and perfect will.”- Romans 12:2', '305690.JPG', '2019-05-31 02:21:31', '2019-05-31 02:21:31'),
(14, 1, 'home', 'Protiddhoni Media & Music', 'Saved By Business Excellence', '“Do not conform to the pattern of this world, but be transformed by the renewing of your mind. Then you will be able to test and approve what God’s will is—his good, pleasing and perfect will.”- Romans 12:2', '360689.jpg', '2019-05-31 02:22:18', '2019-05-31 02:22:18'),
(16, 1, 'home', 'Love For the Underprevilleged', 'Extending God\'s Love In Crisis', 'Helping distressed and underprivileged children, standing beside the underprivileged people is our main desire.', '946572.JPG', '2019-05-31 02:25:36', '2019-05-31 02:25:36'),
(17, 1, 'choir', 'df', 'df', NULL, '804701.jpg', '2019-06-09 22:00:42', '2019-06-09 22:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `ucevents`
--

CREATE TABLE `ucevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ucevents`
--

INSERT INTO `ucevents` (`id`, `type`, `name`, `start_date`, `end_date`, `detail`, `created_at`, `updated_at`) VALUES
(2, 'home', 'Event Name', '06/18/2019', '06/25/2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit laborum quaerat suscipit sed libero quia assumenda, minus impedit provident cum modi ipsa sit. ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ratione neque repellat nisi! ipsum dolor sit amet, consectetur adipisicing elit. Quis pariatur rerum ab tempore! ipsum dolor sit amet, consectetur adipisicing elit. Asperiores explicabo accusantium odio!', '2019-06-03 08:28:38', '2019-06-03 08:28:38'),
(3, 'choir', 'This is event name edit', '06/12/2019', '07/05/2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit laborum quaerat suscipit sed libero quia assumenda, minus impedit provident cum modi ipsa sit. ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ratione neque repellat nisi! ipsum dolor sit amet, consectetur adipisicing elit. Quis pariatur rerum ab tempore! ipsum dolor sit amet, consectetur adipisicing elit. Asperiores explicabo accusantium odio!', '2019-06-03 08:29:10', '2019-06-03 08:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `ucimages`
--

CREATE TABLE `ucimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ucevent_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ucimages`
--

INSERT INTO `ucimages` (`id`, `ucevent_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, '996579.JPG', '2019-06-03 10:16:09', '2019-06-03 10:16:09'),
(4, 3, '396630.jpg', '2019-06-03 10:44:20', '2019-06-03 10:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$WBLkR6p27j1hwVtOaejBru2J6Y/oUvK2vbGQGrrTC9E0hWsaM7xqa', NULL, '2019-05-23 22:29:55', '2019-05-23 22:29:55'),
(2, 'aEditor', 'editor@gmail.com', NULL, '$2y$10$ay8G4LpPq49kqTmlqkUIO.cU03vzxajz8v6Cub0vkvoHXSAv.16l.', NULL, '2019-05-23 22:31:33', '2019-05-23 22:31:33'),
(3, 'auser', 'user1@gmail.com', NULL, '$2y$10$.oWsdXBlrecf00Aq7KrTHu.8FjFXE/wyQhzd83MIKHee2eSvzud5C', NULL, '2019-05-23 22:33:53', '2019-05-23 22:33:53'),
(4, 'aAuthor', 'author@gmail.com', NULL, '$2y$10$0yXcIDuPvx.X0jeKZf.A7eIHnrZKRyNsBGMHQY8hc77ycErKB5gxW', NULL, '2019-05-23 22:34:29', '2019-05-23 22:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(255) NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `email`, `phone`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Jon Doe', 'example@example.com', 1700000000, '264977.jpg', 0, '2019-06-10 03:15:53', '2019-06-10 05:11:20'),
(2, 'This is a firs Event', 'admin@gmail.com', 10039912, '401435.jpg', 0, '2019-06-10 03:20:48', '2019-06-10 08:35:52'),
(3, 'dff', 'admddin@gmail.com', 9999999999999, '115884.jpg', 1, '2019-06-10 03:24:34', '2019-06-10 08:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkashes`
--
ALTER TABLE `bkashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choirteammembers`
--
ALTER TABLE `choirteammembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choirvideos`
--
ALTER TABLE `choirvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucevents`
--
ALTER TABLE `ucevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucimages`
--
ALTER TABLE `ucimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ucimages_ucevent_id_index` (`ucevent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkashes`
--
ALTER TABLE `bkashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `choirteammembers`
--
ALTER TABLE `choirteammembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choirvideos`
--
ALTER TABLE `choirvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ucevents`
--
ALTER TABLE `ucevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ucimages`
--
ALTER TABLE `ucimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ucimages`
--
ALTER TABLE `ucimages`
  ADD CONSTRAINT `ucimages_ucevent_id_foreign` FOREIGN KEY (`ucevent_id`) REFERENCES `ucevents` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
