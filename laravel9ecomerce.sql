-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 01:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twoinonemine`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(191) DEFAULT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `product_title` varchar(191) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL,
  `quantity` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `name`, `email`, `phone`, `address`, `product_title`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(92, '8', '3', 'valle', 'valle@gmail.com', NULL, NULL, 'chairs', '300000', '1', '1676717964.jpg', '2023-08-02 05:04:53', '2023-08-02 05:04:53'),
(143, '1', '2', 'vallesto', 'vallesto@gmail.com', NULL, NULL, 'sofa mbao', '0', '0', '1676709978.png', '2023-08-04 08:37:57', '2023-08-04 08:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_descrip` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Chairs', 'Chairs', 'all kind of chairs', 0, 1, '1678478370.jpg', 'chairs', 'buy chair at lowest price', 'good chairs,bestchairs,chairsbest', '2023-02-16 05:58:15', '2023-03-10 16:59:30'),
(7, 'Beds', 'Beds', 'beds', 0, 1, '1676710909.png', 'beds', 'beds', 'beds,mybed', '2023-02-16 12:08:53', '2023-02-18 06:01:49'),
(9, 'Sofa', 'Sofa', 'modern sofa', 0, 1, '1676717278.jfif', 'sofa', 'sofa', 'sofa', '2023-02-18 07:47:58', '2023-02-18 07:47:58'),
(10, 'Windows', 'windows', 'modern bed', 0, 1, '1676717348.jpeg', 'bed', 'bedroom', 'bed', '2023-02-18 07:49:08', '2023-02-18 07:49:08'),
(11, 'Tables', 'Tables', 'best table', 0, 1, '1676717411.jfif', 'tables', 'get best table', 'teble', '2023-02-18 07:50:11', '2023-02-18 07:50:11'),
(12, 'Kitchen', 'Kitchen', 'get kitchen', 0, 1, '1676717506.webp', 'kitchen', 'kitchen', 'kitchen', '2023-02-18 07:51:46', '2023-02-18 07:51:46'),
(13, 'Office', 'Office', 'modern office', 0, 1, '1676717572.jfif', 'modern office', 'get modern office', 'office', '2023-02-18 07:52:52', '2023-02-18 07:52:52'),
(14, 'Cabinet', 'Cabinet', 'cabinet', 0, 1, '1676717641.jpg', 'cabinet', 'best cabinet for your house', 'cabiet', '2023-02-18 07:54:01', '2023-02-18 07:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_01_19_092644_create_sessions_table', 1),
(22, '2023_02_15_150934_create_categories_table', 2),
(23, '2023_02_16_152636_create_products_table', 3),
(24, '2023_02_21_073827_create_carts_table', 4),
(25, '2023_02_21_140754_create_carts_table', 5),
(26, '2023_02_22_213126_create_orders_table', 6),
(27, '2023_02_22_213857_create_order_items_table', 6),
(28, '2023_02_26_093332_create_reviews_table', 7),
(29, '2023_02_27_080549_create_ratings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `fname` varchar(191) DEFAULT NULL,
  `lname` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `zipcode` varchar(191) DEFAULT NULL,
  `total_price` varchar(191) DEFAULT NULL,
  `payment_mode` varchar(191) DEFAULT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `message` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `tracking_no` varchar(191) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `country`, `city`, `zipcode`, `total_price`, `payment_mode`, `payment_id`, `address`, `message`, `status`, `tracking_no`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1', 'valle', NULL, 'valle@gmail.com', '0765234523', 'Tanzania', 'dar es salaam', '+255', '900000', 'pesapal', NULL, 'Ferry', NULL, 0, 'sharma2937', NULL, '2023-08-04 08:39:22', '2023-08-04 08:39:22'),
(2, '1', 'valle', NULL, 'valle@gmail.com', '0765234523', 'Tanzania', 'dar es salaam', '+255', '300000', 'stripe', NULL, 'Ferry', NULL, 0, 'sharma1438', NULL, '2023-08-04 08:40:08', '2023-08-04 08:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL,
  `quantity` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '300000', '2023-08-04 08:39:22', '2023-08-04 08:39:22'),
(2, '1', '1', '2', '600000', '2023-08-04 08:39:22', '2023-08-04 08:39:22'),
(3, '2', '8', '1', '300000', '2023-08-04 08:40:08', '2023-08-04 08:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext NOT NULL,
  `price` varchar(191) NOT NULL,
  `discount_price` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `quantity` varchar(191) DEFAULT NULL,
  `available_time` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT '0',
  `featured` tinyint(4) DEFAULT 0,
  `bestseller` tinyint(4) DEFAULT 0,
  `mostpopular` tinyint(4) DEFAULT 0,
  `trending` tinyint(4) DEFAULT 0,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `product_name`, `slug`, `title`, `small_description`, `description`, `price`, `discount_price`, `image`, `quantity`, `available_time`, `status`, `featured`, `bestseller`, `mostpopular`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'sofa mbao', 'sofa mbao', NULL, 'pata sofa mbao', 'order best sofa for your home', '250000', '300000', '1676709978.png', '28', '2023-03-02', '0', 0, 0, 0, 1, 'sofa mbao', 'soga,beds', 'best sofa for your house', '2023-02-17 09:49:08', '2023-08-04 08:39:23'),
(2, 7, 'beds', 'beds', NULL, 'get bed for home', 'get bed for home', '230000', '300000', '1676709938.png', '14', '2023-02-25', '0', 0, 0, 1, 0, 'bed', 'bed', 'beds', '2023-02-17 09:57:18', '2023-08-04 08:39:22'),
(5, 9, 'sofa', 'sofa', NULL, NULL, 'make you house  shine with modern sofa', '230000', '300000', '1676717774.jfif', '19', NULL, '0', 0, 0, 0, 1, NULL, NULL, NULL, '2023-02-18 07:55:43', '2023-08-02 10:12:09'),
(6, 9, 'sofa', 'sofa', NULL, NULL, 'get modern sofa today', '300000', '400000', '1676717842.webp', '17', NULL, '0', 0, 0, 0, 1, NULL, NULL, NULL, '2023-02-18 07:57:22', '2023-08-02 10:08:06'),
(7, 11, 'tables', 'table', NULL, NULL, 'best table', '2500000', '300000', '1676717901.jfif', '0', NULL, '0', 0, 0, 0, 1, NULL, NULL, NULL, '2023-02-18 07:58:21', '2023-02-22 17:57:01'),
(8, 1, 'chairs', 'chairs', NULL, NULL, 'get quality chairs', '200000', '300000', '1676717964.jpg', '24', NULL, '0', 0, 0, 0, 1, NULL, NULL, NULL, '2023-02-18 07:59:24', '2023-08-04 08:40:08'),
(9, 14, 'cabinet', 'cabinet', NULL, NULL, 'get quality cabinet today', '230000', '300000', '1676718037.jpg', '0', NULL, '0', 0, 0, 0, 1, NULL, NULL, NULL, '2023-02-18 08:00:37', '2023-02-18 08:00:37'),
(10, 14, 'cabinet', 'cabinet', NULL, NULL, 'professional cabinet', '1300000', '250000', '1676718090.jpg', '46', NULL, '0', 0, 0, 1, 0, NULL, NULL, NULL, '2023-02-18 08:01:30', '2023-08-04 07:48:38'),
(11, 12, 'kitchen', 'kitchen', NULL, NULL, 'best kitchen design', '1000000', '1560000', '1676718147.jpg', '0', NULL, '0', 0, 0, 1, 0, NULL, NULL, NULL, '2023-02-18 08:02:27', '2023-02-22 18:18:22'),
(12, 9, 'sofa', 'sofa', NULL, NULL, 'amazing sofa', '1200000', '2000000', '1676718202.jpg', '33', NULL, '0', 0, 0, 1, 0, NULL, NULL, NULL, '2023-02-18 08:03:22', '2023-08-03 21:10:37'),
(13, 1, 'chair', 'chair', NULL, NULL, 'good look chair', '200000', '300000', '1676718251.jfif', '0', NULL, '0', 0, 0, 1, 0, NULL, NULL, NULL, '2023-02-18 08:04:11', '2023-02-23 07:15:27'),
(14, 9, 'sofa', 'sofa', NULL, NULL, 'bet sofa today', '8000000', '9000000', '1676718337.png', '7', NULL, '0', 0, 1, 0, 0, NULL, NULL, NULL, '2023-02-18 08:05:37', '2023-02-18 08:05:37'),
(15, 1, 'chair', 'chair', NULL, NULL, 'chair today', '130000', '150000', '1676718390.jpg', '6', NULL, '0', 0, 1, 0, 0, NULL, NULL, NULL, '2023-02-18 08:06:30', '2023-02-18 08:06:30'),
(16, 1, 'chair', 'chair', NULL, NULL, 'hood looking chair', '300000', '400000', '1676718431.jpg', '37', NULL, '0', 0, 1, 0, 0, NULL, NULL, NULL, '2023-02-18 08:07:11', '2023-08-04 07:52:51'),
(17, 1, 'chair', 'chair', NULL, NULL, 'modern chair', '150000', '200000', '1676718476.jpg', '32', NULL, '0', 0, 1, 0, 0, NULL, NULL, NULL, '2023-02-18 08:07:56', '2023-08-04 06:19:13'),
(18, 1, 'sitting chair', 'chair', NULL, NULL, 'nice looking chair', '180000', '200000', '1676718546.jpg', '39', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:09:06', '2023-08-04 06:20:39'),
(19, 1, 'all seat', 'chair', NULL, NULL, 'get good chair', '130000', '150000', '1676718594.jpg', '61', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:09:54', '2023-08-04 07:18:08'),
(20, 1, 'font seat', 'chair', NULL, NULL, 'get a good  seat chair', '100000', '200000', '1676718652.jpg', '18', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:10:52', '2023-08-04 08:00:30'),
(21, 1, 'backseat', 'chair', NULL, NULL, 'backeseat chair', '120000', '150000', '1676718694.jpg', '22', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:11:34', '2023-08-04 07:54:16'),
(22, 1, 'outdoorchair', 'chair', NULL, NULL, 'good looking out door chair', '230000', '200000', '1676718775.jpg', '8', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:12:55', '2023-02-18 08:12:55'),
(23, 1, 'sofachair', 'sofachairs', NULL, NULL, 'get a sofa looking like chaifr', '300000', '500000', '1676718838.jpg', '4', NULL, '0', 1, 0, 0, 0, NULL, NULL, NULL, '2023-02-18 08:13:58', '2023-08-04 07:25:25'),
(24, 10, 'Window', 'Window', NULL, 'get professional windows for your house today', 'get professional windows for your house today', '150000', '120000', '1678525511.png', '10', NULL, '0', 0, 1, 0, 0, 'windows', 'windows', 'quality windows', '2023-03-11 06:05:11', '2023-03-11 06:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL,
  `stars_rated` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL,
  `user_review` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `lname` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `zipcode` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `message` varchar(191) DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `country`, `city`, `zipcode`, `address`, `message`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'valle', 'valle@gmail.com', NULL, '$2y$10$gCzYuOQPcRBpRxR4.tCNPeHEHSnqJkFZ7YEdnPI6jTJYw1sAa5baG', NULL, '0765234523', 'Tanzania', 'dar es salaam', '+255', 'Ferry', NULL, 0, NULL, '2023-08-04 08:29:26', '2023-08-04 08:39:23'),
(2, 'vallesto', 'vallesto@gmail.com', NULL, '$2y$10$Sy3V/2mY6VDPSNd5t8.KkeOad8bmwY2Q526oJ0e24nGjZiKwcDF8O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-04 08:30:09', '2023-08-04 08:30:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
