-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2021 at 03:32 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `having_child` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `having_child`) VALUES
(10, 'Home', 0, '2021-03-13 13:27:47', '2021-03-14 03:08:15', '0'),
(11, 'About', 10, '2021-03-13 13:28:21', '2021-03-14 03:08:25', '0'),
(12, 'Vision', 10, '2021-03-13 13:28:39', '2021-03-14 03:08:42', '0'),
(13, 'Catalog', 0, '2021-03-13 13:50:43', '2021-03-14 03:08:52', '0'),
(14, 'Television', 13, '2021-03-13 14:20:38', '2021-03-14 03:04:35', '0'),
(15, 'Contact Us', 11, '2021-03-13 15:36:01', '2021-03-14 03:09:05', '1'),
(17, 'Future', 12, '2021-03-13 16:04:58', '2021-03-14 03:05:56', '1'),
(19, 'Plan', 17, '2021-03-13 22:11:32', '2021-03-14 03:06:09', '1'),
(20, 'Planner', 19, '2021-03-14 12:16:11', '2021-03-14 03:06:37', '1'),
(22, 'Calendar', 20, '2021-03-14 13:22:40', '2021-03-14 03:07:59', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'dilip', 'sEI5XSWpfllFS9cq11sAD2fh_y1Z841U', '$2y$13$IVaP1vnvxGYDwfAhm1ug.OsWeUx4ag9KGIjuxMPQHKOvkAM14kYN6', NULL, 'dillip2300@gmail.com', 10, 1615634750, 1615634750, 'qcOkyTN-dsSQv7Gse6SLvK0KJgxTCBnh_1615634750');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
