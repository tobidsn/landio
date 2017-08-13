-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2017 at 11:01 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-4+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landio`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Fauzil Adhim', '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(2, 'Salim A. Fillahh', '2017-01-28 08:20:28', '2017-01-28 10:06:52'),
(3, 'Aam Amiruddin', '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(4, 'Mandan', '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(5, 'Mandan A', '2017-01-28 09:24:00', '2017-01-28 09:24:00'),
(6, 'asasas', '2017-03-20 19:43:54', '2017-03-20 19:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `amount`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Kupinang Engkau dengan Hamdalah', 1, 3, NULL, '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(2, 'Jalan Cinta Para Pejuang', 2, 2, NULL, '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(3, 'Membingkai Surga dalam Rumah Tangga', 3, 4, NULL, '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(4, 'Cinta & Seks Rumah Tangga Muslim', 3, 3, 'd49c27024d709c225a551493c1982788.png', '2017-01-28 08:20:28', '2017-01-28 11:01:42'),
(5, 'Mandan', 4, 3, NULL, '2017-01-28 08:20:28', '2017-01-28 08:20:28'),
(6, 'ok', 4, 1, '5357dfaf1829862f5630ca4e6b00822e.jpg', '2017-03-20 08:48:36', '2017-03-20 08:48:36'),
(7, 'title_home', 6, 12, '9094666217a29fc22db939f2ce71100a.jpg', '2017-03-21 14:07:39', '2017-03-21 14:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `short_description`, `status`, `cover`, `counter`, `created_at`, `updated_at`) VALUES
(1, 'Baju', 'baju', 'Ok', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 6, '2017-03-21 22:32:15', '2017-04-02'),
(2, 'Hosting', 'hosting', '', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 0, '2017-03-21 22:32:36', '2017-03-22'),
(3, 'Tiket Kereta', 'tiket', '', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 0, '2017-03-21 16:30:51', '2017-03-21'),
(4, 'Celana', 'celana', '', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 62, '2017-03-21 16:31:10', '2017-04-02'),
(5, 'Tokopediaaka1', 'tokopedia', 'Asaasas', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 0, '2017-03-24 19:03:05', '2017-03-25'),
(6, 'ok', 'ok', 'ok', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 0, '2017-03-26 02:09:57', '2017-03-26'),
(7, 'Oko', 'oko', 'okokok', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 0, '2017-03-26 02:10:31', '2017-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_01_28_095258_create_posts_table', 1),
(10, '2017_01_28_130231_laratrust_setup_tables', 1),
(11, '2017_01_28_145357_create_authors_table', 1),
(12, '2017_01_28_145434_create_books_table', 1),
(13, '2017_03_21_220959_create_categories_table', 2),
(14, '2017_03_21_220959_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `short_description`, `description`, `status`, `cover`, `link`, `counter`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Goat Bug90', 'aaaaokok12', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p><p>&nbsp;<img src="http://landio.dev/img/43700e377cf342fe6dc50dec7dfe45c0.jpg" style="width: 700px;"></p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://landio.dev', 14, 4, '2017-03-25 21:46:59', '2017-08-13 08:57:27'),
(8, 'Goat Bug', 'goatbug2', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://tobiweb.id', 56, 4, '2017-03-25 21:46:59', '2017-04-02 01:47:08'),
(9, 'Goat Bug2', 'aaaa12', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://landio.dev', 10, 4, '2017-03-25 21:46:59', '2017-04-01 01:07:55'),
(10, 'Goat Bug2', 'aaaa13', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://landio.dev', 0, 4, '2017-03-25 21:46:59', '2017-03-25 22:02:47'),
(11, 'Goat Bug2', 'ooko', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://landio.dev', 5, 4, '2017-03-25 21:46:59', '2017-04-06 08:26:57'),
(12, 'Jualan', 'jualan', 10, 'Lorem insum Lorem insum Lorem ins Lorem ', '<p>Lorem insum Lorem insum Lorem ins Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insum Lorem insumum Lorem insum Lorem insum Lorem insum</p><p><br></p><p><br></p>', 'Y', '8c690288841fc1e2baca427ca8472aa5.jpg', 'http://landio.dev', 13, 1, '2017-03-26 00:48:55', '2017-04-02 01:34:10'),
(13, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(14, 'Goat Bug2', 'aaaa13', 10, 'Lorem ipsum, Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '<p>okokokoko</p>', 'Y', '43700e377cf342fe6dc50dec7dfe45c0.jpg', 'http://landio.dev', 0, 4, '2017-03-25 21:46:59', '2017-03-25 22:02:47'),
(15, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(16, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(17, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(18, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(19, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(20, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(21, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(22, 'Jualanan', 'jualanan', 1236, 'okok', '<p>okokok</p>', 'Y', '54cf6284412288fa1663883cb2b652ce.jpg', 'tobiweb.id', 23, 4, '2017-03-26 00:50:20', '2017-04-01 00:59:17'),
(23, 'Promo Gajian', 'promo-gajian', 99, 'Promo Gajian, Harga Termurah Bulan Ini, Diskon Sampai 60%', '<p style="text-align: center; "><b>Promo Gajian, Harga Termurah Bulan Ini, Diskon Sampai 60%</b></p><p><img src="http://id-live-03.slatic.net/cms/banners2017/032017/payday-top-banner.jpg" style="width: 801.5px;"></p><p><br></p><p style="text-align: center;"><br></p>', 'Y', '0c6f81b560d89ddf41884593dd3ee850.jpg', 'http://ho.lazada.co.id/SHNjUW?file_id=154108', 15, 1, '2017-04-01 03:39:06', '2017-04-03 07:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2017-01-28 08:20:27', '2017-01-28 08:20:27'),
(2, 'member', 'Member', NULL, '2017-01-28 08:20:27', '2017-01-28 08:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(11) NOT NULL,
  `query` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `query`, `created_at`, `updated_at`) VALUES
(1, 'a', '2017-03-28 07:07:59', '2017-03-28 07:07:59'),
(2, 'kapan', '2017-03-28 07:08:10', '2017-03-28 07:08:10'),
(3, 'a', '2017-03-28 11:53:18', '2017-03-28 11:53:18'),
(4, 'a', '2017-03-28 11:54:14', '2017-03-28 11:54:14'),
(5, 'a', '2017-03-28 11:56:36', '2017-03-28 11:56:36'),
(6, 'goat', '2017-03-29 05:01:55', '2017-03-29 05:01:55'),
(7, 'goat', '2017-03-29 16:33:51', '2017-03-29 16:33:51'),
(8, 'a', '2017-04-02 08:35:33', '2017-04-02 08:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `provider` varchar(50) DEFAULT NULL,
  `social_id` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated` enum('true','false') COLLATE utf8_unicode_ci DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `token`, `activated`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$p6XQYP2b9MTlYgv4W3bti.tnjtfcBpMzzTIHzQPDxnsDFoyoozLue', 'osCu9HCGNG8nKROrqDwvpybccsfiL1Nae2MUh07dCl2ppQn0A2MaizmFpago', NULL, 'true', '2017-01-28 08:20:27', '2017-03-29 09:33:55'),
(2, 'Sample Member', 'member@gmail.com', '$2y$10$p6XQYP2b9MTlYgv4W3bti.tnjtfcBpMzzTIHzQPDxnsDFoyoozLue', 'E5i4fehtCrzEMzPBwaL1zFklQPxirCjKRrvor1rZ60eex7IMuFkEquLp0W2Y', NULL, 'true', '2017-01-28 08:20:27', '2017-03-29 09:31:29'),
(3, 'Jack Bean', 'tobidsn@gmail.com', '$2y$10$p6XQYP2b9MTlYgv4W3bti.tnjtfcBpMzzTIHzQPDxnsDFoyoozLue', 'ywYofBWKYLl7F6JXNJNTGjgtGaP7oDhygApR2fIBfm7UL0vf696hgRjSpzx4', NULL, 'true', '2017-03-20 19:42:48', '2017-03-20 19:42:50'),
(4, 'Jack Bean', 'demo@gmail.com', '$2y$10$nZq4YdtsEM6UWdUoMQr3buCVtQ/NHfKLXN.JTk/yjqPOTCg0LxEfS', 'LP3g34QwMdtLxyjxR8xd620wLGalWZLxfDZum1tDV7HzPltwjPGm8aAUi5xf', NULL, 'true', '2017-03-28 08:07:25', '2017-03-28 08:07:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_social_logins_users` (`user_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `FK_social_logins_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
