-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2022 at 11:22 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

DROP TABLE IF EXISTS `beneficiaries`;
CREATE TABLE IF NOT EXISTS `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webpage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `name`, `description`, `postcode`, `state`, `location`, `contact_person`, `contact_num`, `website`, `webpage`, `photo`, `date`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(26, 'STRONG DESIRE HOME', 'An Orphanage was built in 2013 in Johor Bahru area. We have 100+ children\'s below 12 years old. We hope our society spreads some love to our children to have a warm house in STRONG DESIRE HOME.', '81300', 'Johor', '1495 jalan seksyen 1/5 Taman Bandar Barat, 81300 Johor Bahru, Johor', 'NG XIN ZHE', '107660573', 'https://www.google.com/', 'https://www.facebook.com/', '1662098946.jpg', 'Mondaty - Saturday', '10AM-10PM', 17, '2022-09-01 22:10:57', '2022-09-01 22:10:57'),
(27, 'Pusat B', 'Non Profit Orphanage in need for Quarantine Resources.', '45678', 'Sabah', '123, Jalan Cikus, Taman Durian, Sandakan, Sabah.', 'Teh Rong Jia', '012-3456789', 'https://rumahhope.com/', 'https://www.facebook.com/rumahhope', '1661938760.png', 'Mon-Sun', '10am-4pm', 23, '2022-09-01 22:15:56', '2022-09-01 22:15:56'),
(28, 'Pusat A', 'In need for food resources support', '56000', 'Johor', '12, Psrn Sungai Johor, Taman Sri King, Skudai, Johor Bahru.', 'Teh Jia Rong', '012-34567654', 'none', 'https://www.facebook.com/tehjiarong', '1661938359.jpg', 'Mon-Sun', '24hrs', 22, '2022-09-01 22:15:58', '2022-09-01 22:15:58'),
(29, 'Pusat C', 'Need Covid-19 Resources', '23456', 'Perak', '1028, Jalan Seksyen 1/1, Malim Nawar, Kampar, Perak.', 'Rong Jia Teh', '012-46578456', 'https://myknc.com.my/?gclid=Cj0KCQjwjbyYBhCdARIsAArC6LICqFvPhRd7hfQODDbR2fSl4oYaRiqXF_L4ZeIZh8-W5m6ABL_80BYaAkF6EALw_wcB', 'https://www.facebook.com/rumahhope', '1661939075.jpg', 'Tue-Sun', '10am-4pm', 24, '2022-09-01 22:16:01', '2022-09-01 22:16:01'),
(30, 'Pusat D', 'Need kitchen resources', '14000', 'Penang', '123, Jalan Cikus, Taman Durian, Bukit Mertajam, Penang.', 'Lim Xue En', '012-3456789', 'https://myknc.com.my/?gclid=Cj0KCQjwjbyYBhCdARIsAArC6LICqFvPhRd7hfQODDbR2fSl4oYaRiqXF_L4ZeIZh8-W5m6ABL_80BYaAkF6EALw_wcB', 'https://www.facebook.com/', '1661942646.jpg', 'Tue-Sun', '24hrs', 25, '2022-09-01 22:16:03', '2022-09-01 22:16:03'),
(31, 'Pusat E', 'In Need for Day to Day Food Resources Support', '23456', 'Penang', '123, Jalan Cikus, Taman Durian, Bukit Mertajam, Penang.', 'Lim Xue En', '012-34567765', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661945787.jpg', 'Mon-Sun', '10am-4pm', 26, '2022-09-01 22:16:05', '2022-09-01 22:16:05'),
(32, 'Pusat F', 'An Elderly Care Home in Selangor', '14000', 'Sabah', '123, Lorong Sentul 123, Taman Sentul Jaya, Cheras, Selangor.', 'Lim Xue En', '012-34567765', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661946951.jpg', 'Tue-Sun', '24hrs', 27, '2022-09-01 22:16:11', '2022-09-01 22:16:11'),
(33, 'Pusat G', 'An Orphanage at Penang', '14300', 'Penang', '12223, Jalan Cikus, Taman Durian, Nibong Tebal, Penang.', 'Shane', '012-34567765', 'none', 'https://www.facebook.com/', '1661953008.jpg', 'Tue-Sun', '10am-4pm', 28, '2022-09-01 22:16:14', '2022-09-01 22:16:14'),
(34, 'Yong Jin', 'Senior Care Center at Gua Musang, Kelantan.', '56000', 'Kelantan', '567, Lorong Sentul 123, Taman Sentul Epal, Gua Musang, Kelantan.', 'Lim Xue En', '012-3456782', 'none', 'https://www.facebook.com/', '1661958799.jpg', 'Tue-Sun', '10am-4pm', 29, '2022-09-01 22:16:17', '2022-09-01 22:16:17'),
(35, 'Pusat H', 'We are a non profit organization supporting homeless people in Selangor', '43000', 'Selangor', '12, Psrn Sungai Johor, Taman Sri King, Sg Long, Selangor.', 'Lim Xue En', '012-3456782', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661959043.jpg', 'Tue-Sun', '10am-4pm', 30, '2022-09-01 22:16:19', '2022-09-01 22:16:19'),
(36, 'Pusat I', 'We are an orphanage at Terengganu', '345673', 'Terangganu', '123, Jalan Cikus, Taman Durian, Kemaman, Terengganu.', 'Seow Kai Siu', '012-3456784', 'none', 'https://www.facebook.com/', '1661960797.jpg', 'Mon-Sun', '10am-4pm', 31, '2022-09-01 22:16:25', '2022-09-01 22:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_applications`
--

DROP TABLE IF EXISTS `beneficiary_applications`;
CREATE TABLE IF NOT EXISTS `beneficiary_applications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webpage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary_applications`
--

INSERT INTO `beneficiary_applications` (`id`, `name`, `description`, `postcode`, `state`, `location`, `contact_person`, `contact_num`, `website`, `webpage`, `photo`, `date`, `time`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(26, 'Pusat A', 'In need for food resources support', '56000', 'Johor', '12, Psrn Sungai Johor, Taman Sri King, Skudai, Johor Bahru.', 'Teh Jia Rong', '012-34567654', 'none', 'https://www.facebook.com/tehjiarong', '1661938359.jpg', 'Mon-Sun', '24hrs', 'success', 22, '2022-08-31 01:32:39', '2022-09-01 22:15:58'),
(28, 'Pusat C', 'Need Covid-19 Resources', '23456', 'Perak', '1028, Jalan Seksyen 1/1, Malim Nawar, Kampar, Perak.', 'Rong Jia Teh', '012-46578456', 'https://myknc.com.my/?gclid=Cj0KCQjwjbyYBhCdARIsAArC6LICqFvPhRd7hfQODDbR2fSl4oYaRiqXF_L4ZeIZh8-W5m6ABL_80BYaAkF6EALw_wcB', 'https://www.facebook.com/rumahhope', '1661939075.jpg', 'Tue-Sun', '10am-4pm', 'success', 24, '2022-08-31 01:44:35', '2022-09-01 22:16:01'),
(29, 'Pusat D', 'Need kitchen resources', '14000', 'Penang', '123, Jalan Cikus, Taman Durian, Bukit Mertajam, Penang.', 'Lim Xue En', '012-3456789', 'https://myknc.com.my/?gclid=Cj0KCQjwjbyYBhCdARIsAArC6LICqFvPhRd7hfQODDbR2fSl4oYaRiqXF_L4ZeIZh8-W5m6ABL_80BYaAkF6EALw_wcB', 'https://www.facebook.com/', '1661942646.jpg', 'Tue-Sun', '24hrs', 'success', 25, '2022-08-31 02:44:06', '2022-09-01 22:16:03'),
(30, 'Pusat E', 'In Need for Day to Day Food Resources Support', '23456', 'Penang', '123, Jalan Cikus, Taman Durian, Bukit Mertajam, Penang.', 'Lim Xue En', '012-34567765', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661945787.jpg', 'Mon-Sun', '10am-4pm', 'success', 26, '2022-08-31 03:36:27', '2022-09-01 22:16:05'),
(31, 'Pusat F', 'An Elderly Care Home in Selangor', '14000', 'Sabah', '123, Lorong Sentul 123, Taman Sentul Jaya, Cheras, Selangor.', 'Lim Xue En', '012-34567765', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661946951.jpg', 'Tue-Sun', '24hrs', 'success', 27, '2022-08-31 03:55:51', '2022-09-01 22:16:11'),
(32, 'Pusat G', 'An Orphanage at Penang', '14300', 'Penang', '12223, Jalan Cikus, Taman Durian, Nibong Tebal, Penang.', 'Shane', '012-34567765', 'none', 'https://www.facebook.com/', '1661953008.jpg', 'Tue-Sun', '10am-4pm', 'success', 28, '2022-08-31 05:36:48', '2022-09-01 22:16:14'),
(33, 'Yong Jin', 'Senior Care Center at Gua Musang, Kelantan.', '56000', 'Kelantan', '567, Lorong Sentul 123, Taman Sentul Epal, Gua Musang, Kelantan.', 'Lim Xue En', '012-3456782', 'none', 'https://www.facebook.com/', '1661958799.jpg', 'Tue-Sun', '10am-4pm', 'success', 29, '2022-08-31 07:13:19', '2022-09-01 22:16:17'),
(34, 'Pusat H', 'We are a non profit organization supporting homeless people in Selangor', '43000', 'Selangor', '12, Psrn Sungai Johor, Taman Sri King, Sg Long, Selangor.', 'Lim Xue En', '012-3456782', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661959043.jpg', 'Tue-Sun', '10am-4pm', 'success', 30, '2022-08-31 07:17:23', '2022-09-01 22:16:19'),
(35, 'Pusat I', 'We are an orphanage at Terengganu', '345673', 'Terangganu', '123, Jalan Cikus, Taman Durian, Kemaman, Terengganu.', 'Seow Kai Siu', '012-3456784', 'none', 'https://www.facebook.com/', '1661960797.jpg', 'Mon-Sun', '10am-4pm', 'success', 31, '2022-08-31 07:46:37', '2022-09-01 22:16:25'),
(36, 'Pusat J', 'An Elderly Home at Klang, Selangor', '23000', 'Selangor', '12, Psrn Sungai Klang, Taman Sri King, Sg Klang, Selangor.', 'Edison Chong', '012-46578456', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661961593.jpg', 'Tue-Sun', '24hrs', 'pending', 32, '2022-08-31 07:59:53', '2022-08-31 07:59:53'),
(37, 'Organization A', 'A non profit organisation helping those in need', '21867', 'Perak', '123, Jalan Cikus, Taman Durian, Tg Malim, Perak.', 'Matthew Tan', '012-3456782', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661962244.jpg', 'Tue-Sun', '10am-4pm', 'pending', 33, '2022-08-31 08:10:44', '2022-08-31 08:10:44'),
(38, 'Pusat K', 'We are an elderly home located in Kedah', '45678', 'Kedah', '123, Jalan Cikus, Taman Durian, Alor Setar, Kedah.', 'William Tan', '012-3456789', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661962992.jpg', 'Mon-Sun', '24hrs', 'pending', 34, '2022-08-31 08:23:12', '2022-08-31 08:23:12'),
(39, 'Pusat M', 'Orphanage', '12452', 'KualaLumpur', '123, Jalan Cikus, Taman Durian, Wilayah Persekutuan Kuala Lumpur, Selangor', 'Albert Eng', '012-4677884', 'https://rumahhope.com/', 'https://www.facebook.com/', '1661963947.jpg', 'Tue-Sun', '24hrs', 'pending', 35, '2022-08-31 08:39:07', '2022-08-31 08:39:07'),
(40, 'Pusat N', 'Elderly Care Facility', '23000', 'Perlis', '12, Psrn Sungai Klang, Taman Sri King, Perlis.', 'Ong TH', '012-3456782', 'none', 'https://www.facebook.com/', '1661964251.jpg', 'Tue-Sun', '10am-4pm', 'pending', 36, '2022-08-31 08:44:11', '2022-08-31 08:44:11'),
(41, 'STRONG DESIRE HOME', 'An Orphanage was built in 2013 in Johor Bahru area. We have 100+ children\'s below 12 years old. We hope our society spreads some love to our children to have a warm house in STRONG DESIRE HOME.', '81300', 'Johor', '1495 jalan seksyen 1/5 Taman Bandar Barat, 81300 Johor Bahru, Johor', 'NG XIN ZHE', '107660573', 'https://www.google.com/', 'https://www.facebook.com/', '1662098946.jpg', 'Mondaty - Saturday', '10AM-10PM', 'success', 17, '2022-09-01 22:09:06', '2022-09-01 22:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `donation_records`
--

DROP TABLE IF EXISTS `donation_records`;
CREATE TABLE IF NOT EXISTS `donation_records` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation_records`
--

INSERT INTO `donation_records` (`id`, `type`, `date`, `time`, `method`, `donation_detail`, `comment`, `status`, `beneficiary_id`, `user_id`, `created_at`, `updated_at`) VALUES
(53, 'self', 'nil', 'nil', 'courier', 'tracking number:  #NGT012418JT212', 'Parcel Company: J&T', 'success', 27, 19, '2022-09-06 01:21:03', '2022-09-06 01:35:15'),
(54, 'self', 'nil', 'nil', 'transportation', 'Deliver Date: 6 September 2022', 'Will come on Evening after 5pm.', 'pending', 26, 19, '2022-09-06 01:23:55', '2022-09-06 01:23:55'),
(55, 'self', 'nil', 'nil', 'courier', 'tracking number:  #NGT012418JT212', NULL, 'pending', 26, 20, '2022-09-06 01:39:16', '2022-09-06 01:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `detail`, `quantity`, `unit`, `beneficiary_id`, `created_at`, `updated_at`) VALUES
(45, 'Year 2 English Text Book', 50, 'piece', 26, '2022-09-01 22:10:57', '2022-09-01 22:10:57'),
(49, 'Rice', 50, 'kg', 28, '2022-09-01 22:15:58', '2022-09-01 22:15:58'),
(50, 'Cooking Oil', 25, 'litres', 28, '2022-09-01 22:15:58', '2022-09-01 22:15:58'),
(51, 'Salt', 3, 'kg', 28, '2022-09-01 22:15:58', '2022-09-01 22:15:58'),
(52, 'Masks', 100, 'unit', 28, '2022-09-01 22:15:58', '2022-09-01 22:15:58'),
(53, 'Masks', 1000, 'unit', 29, '2022-09-01 22:16:01', '2022-09-01 22:16:01'),
(54, 'Test Kit', 500, 'unit', 29, '2022-09-01 22:16:01', '2022-09-01 22:16:01'),
(55, 'Rice', 100, 'kg', 30, '2022-09-01 22:16:03', '2022-09-01 22:16:03'),
(56, 'cooking oil', 20, 'litres', 30, '2022-09-01 22:16:03', '2022-09-01 22:16:03'),
(57, 'Vegetables', 10, 'kg', 30, '2022-09-01 22:16:03', '2022-09-01 22:16:03'),
(58, 'Rice', 100, 'kg', 31, '2022-09-01 22:16:05', '2022-09-01 22:16:05'),
(59, 'Vegetables', 10, 'kg', 31, '2022-09-01 22:16:05', '2022-09-01 22:16:05'),
(60, 'Meat', 10, 'kg', 31, '2022-09-01 22:16:05', '2022-09-01 22:16:05'),
(61, 'Noodles', 50, 'pack', 31, '2022-09-01 22:16:05', '2022-09-01 22:16:05'),
(62, 'Masks', 1000, 'unit', 32, '2022-09-01 22:16:11', '2022-09-01 22:16:11'),
(63, 'Sanitizer', 100, 'litre', 32, '2022-09-01 22:16:11', '2022-09-01 22:16:11'),
(64, 'Rice', 50, 'kg', 32, '2022-09-01 22:16:11', '2022-09-01 22:16:11'),
(65, 'Noodles', 10, 'kg', 32, '2022-09-01 22:16:11', '2022-09-01 22:16:11'),
(66, 'Rice', 100, 'kg', 33, '2022-09-01 22:16:14', '2022-09-01 22:16:14'),
(67, 'Noodles', 50, 'kg', 33, '2022-09-01 22:16:14', '2022-09-01 22:16:14'),
(68, 'Rice', 50, 'kg', 34, '2022-09-01 22:16:17', '2022-09-01 22:16:17'),
(69, 'Noodle', 30, 'kg', 34, '2022-09-01 22:16:17', '2022-09-01 22:16:17'),
(70, 'Rice', 50, 'kg', 35, '2022-09-01 22:16:19', '2022-09-01 22:16:19'),
(71, 'Dry Goods', 20, 'kg', 35, '2022-09-01 22:16:19', '2022-09-01 22:16:19'),
(72, 'Rice', 50, 'kg', 36, '2022-09-01 22:16:25', '2022-09-01 22:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `resource_applications`
--

DROP TABLE IF EXISTS `resource_applications`;
CREATE TABLE IF NOT EXISTS `resource_applications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_applications_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_applications`
--

INSERT INTO `resource_applications` (`id`, `detail`, `quantity`, `unit`, `beneficiary_applications_id`, `created_at`, `updated_at`) VALUES
(16, 'Rice', '50', 'kg', 25, '2022-08-31 01:32:37', '2022-08-31 01:32:37'),
(17, 'Cooking Oil', '25', 'litres', 25, '2022-08-31 01:32:37', '2022-08-31 01:32:37'),
(18, 'Salt', '3', 'kg', 25, '2022-08-31 01:32:37', '2022-08-31 01:32:37'),
(19, 'Masks', '100', 'unit', 25, '2022-08-31 01:32:37', '2022-08-31 01:32:37'),
(20, 'Rice', '50', 'kg', 26, '2022-08-31 01:32:39', '2022-08-31 01:32:39'),
(21, 'Cooking Oil', '25', 'litres', 26, '2022-08-31 01:32:39', '2022-08-31 01:32:39'),
(22, 'Salt', '3', 'kg', 26, '2022-08-31 01:32:39', '2022-08-31 01:32:39'),
(23, 'Masks', '100', 'unit', 26, '2022-08-31 01:32:39', '2022-08-31 01:32:39'),
(27, 'Masks', '1000', 'unit', 28, '2022-08-31 01:44:35', '2022-08-31 01:44:35'),
(28, 'Test Kit', '500', 'unit', 28, '2022-08-31 01:44:35', '2022-08-31 01:44:35'),
(29, 'Rice', '100', 'kg', 29, '2022-08-31 02:44:06', '2022-08-31 02:44:06'),
(30, 'cooking oil', '20', 'litres', 29, '2022-08-31 02:44:06', '2022-08-31 02:44:06'),
(31, 'Vegetables', '10', 'kg', 29, '2022-08-31 02:44:06', '2022-08-31 02:44:06'),
(32, 'Rice', '100', 'kg', 30, '2022-08-31 03:36:27', '2022-08-31 03:36:27'),
(33, 'Vegetables', '10', 'kg', 30, '2022-08-31 03:36:27', '2022-08-31 03:36:27'),
(34, 'Meat', '10', 'kg', 30, '2022-08-31 03:36:27', '2022-08-31 03:36:27'),
(35, 'Noodles', '50', 'pack', 30, '2022-08-31 03:36:27', '2022-08-31 03:36:27'),
(36, 'Masks', '1000', 'unit', 31, '2022-08-31 03:55:51', '2022-08-31 03:55:51'),
(37, 'Sanitizer', '100', 'litre', 31, '2022-08-31 03:55:51', '2022-08-31 03:55:51'),
(38, 'Rice', '50', 'kg', 31, '2022-08-31 03:55:51', '2022-08-31 03:55:51'),
(39, 'Noodles', '10', 'kg', 31, '2022-08-31 03:55:51', '2022-08-31 03:55:51'),
(40, 'Rice', '100', 'kg', 32, '2022-08-31 05:36:48', '2022-08-31 05:36:48'),
(41, 'Noodles', '50', 'kg', 32, '2022-08-31 05:36:48', '2022-08-31 05:36:48'),
(42, 'Rice', '50', 'kg', 33, '2022-08-31 07:13:19', '2022-08-31 07:13:19'),
(43, 'Noodle', '30', 'kg', 33, '2022-08-31 07:13:19', '2022-08-31 07:13:19'),
(44, 'Rice', '50', 'kg', 34, '2022-08-31 07:17:23', '2022-08-31 07:17:23'),
(45, 'Dry Goods', '20', 'kg', 34, '2022-08-31 07:17:23', '2022-08-31 07:17:23'),
(46, 'Rice', '50', 'kg', 35, '2022-08-31 07:46:37', '2022-08-31 07:46:37'),
(47, 'Masks', '1000', 'unit', 36, '2022-08-31 07:59:53', '2022-08-31 07:59:53'),
(48, 'Sanitizer', '100', 'litre', 36, '2022-08-31 07:59:53', '2022-08-31 07:59:53'),
(49, 'Test Kit', '100', 'unit', 36, '2022-08-31 07:59:53', '2022-08-31 07:59:53'),
(50, 'Rice', '50', 'kg', 37, '2022-08-31 08:10:44', '2022-08-31 08:10:44'),
(51, 'Noodles', '50', 'kg', 37, '2022-08-31 08:10:44', '2022-08-31 08:10:44'),
(52, 'Rice', '25', 'kg', 38, '2022-08-31 08:23:12', '2022-08-31 08:23:12'),
(53, 'Vegetables', '20', 'kg', 38, '2022-08-31 08:23:12', '2022-08-31 08:23:12'),
(54, 'Noodles', '10', 'kg', 38, '2022-08-31 08:23:12', '2022-08-31 08:23:12'),
(55, 'Rice', '50', 'kg', 39, '2022-08-31 08:39:07', '2022-08-31 08:39:07'),
(56, 'Noodle', '20', 'kg', 39, '2022-08-31 08:39:07', '2022-08-31 08:39:07'),
(57, 'Rice', '100', 'kg', 40, '2022-08-31 08:44:11', '2022-08-31 08:44:11'),
(58, 'Year 2 English Text Book', '50', 'piece', 41, '2022-09-01 22:09:06', '2022-09-01 22:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `resource_donations`
--

DROP TABLE IF EXISTS `resource_donations`;
CREATE TABLE IF NOT EXISTS `resource_donations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_records_id` int(11) NOT NULL,
  `resources_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_donations`
--

INSERT INTO `resource_donations` (`id`, `detail`, `quantity`, `unit`, `donation_records_id`, `resources_id`, `created_at`, `updated_at`) VALUES
(21, 'Mask', 50, 'unit', 53, 46, '2022-09-06 01:21:04', '2022-09-06 01:21:04'),
(22, 'Oil', 20, 'litre', 53, NULL, '2022-09-06 01:21:04', '2022-09-06 01:21:04'),
(23, 'Year 2 English Text Book', 20, 'piece', 54, 45, '2022-09-06 01:23:55', '2022-09-06 01:23:55'),
(24, 'child cloth s size', 40, 'piece', 55, NULL, '2022-09-06 01:39:16', '2022-09-06 01:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `isBeneficiary` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `isBeneficiary`) VALUES
(17, 'Ng Xin Zhe', 'xinzhezhexin@gmail.com', NULL, '$2y$10$plmYEGZslbY8Y2gerhG2Oelnr5UKebEmkocKMWI3jQjUO9RYdEcI2', NULL, '2022-08-30 23:29:15', '2022-09-01 22:10:57', 'user', 1),
(18, 'admin', 'admin@gmail.com', NULL, '$2y$10$OeLgxntMRuwfkDqJuFPbDOFJ1aQZUi1Ib5vlv3eJ7GhaQOKsuk7cW', NULL, '2022-08-30 23:49:16', '2022-08-30 23:49:16', 'admin', 0),
(19, 'April Yee', 'hsy.k10@gmail.com', NULL, '$2y$10$3iAsY/46VXn80vAqpyqz.eMQu8jgDI76IXkWFsjzeenfbNqSWfbOi', NULL, '2022-08-30 23:51:30', '2022-08-30 23:51:30', 'user', 0),
(20, 'Lim Xue En', 'xueen2000@1utar.my', NULL, '$2y$10$pNiTF31aCaRtL0adMbM.Xu/xgkaqjukkB.cQAIkty3gD4Vv2T7Kte', NULL, '2022-08-30 23:52:53', '2022-08-30 23:52:53', 'user', 0),
(21, 'tester', 'tester@gmail.com', NULL, '$2y$10$Q/RLg0zguwDMqlc0ZD3IWuZ5AD8NW5h6zHrueg71iLYvPgs2QA6qC', NULL, '2022-08-30 23:58:55', '2022-09-06 03:03:43', 'user', 0),
(22, 'Teh Jia Rong', 'tjr@gmail.com', NULL, '$2y$10$GygSMAjw/bziTa6dg6xgCeSOZkxf/RajCZCqUY3QkFABF8mV4.PGm', NULL, '2022-08-31 01:28:39', '2022-09-01 22:15:58', 'user', 1),
(23, 'Teh Rong Jia', 'trj123@gmail.com', NULL, '$2y$10$qRXXEVuDJQJC7E4U0g.i0eEBhTGD4JokYtUyGxOmHa3lHHXAD5brm', NULL, '2022-08-31 01:33:38', '2022-09-01 22:15:56', 'user', 1),
(24, 'Rong Jia Teh', 'rjt@gmail.com', NULL, '$2y$10$k73Tzgg9kGnveMW/7pctZOk9wmwljf.gYQBRfYihFelShruWJbRBm', NULL, '2022-08-31 01:39:59', '2022-09-01 22:16:01', 'user', 1),
(25, 'Lim Xue En', 'xueen200000@gmail.com', NULL, '$2y$10$5btrfaPdkhP/PYhD26X55uPLYDiP59Rq5hJpYKRO9vuDnKcktiDQ.', NULL, '2022-08-31 02:11:33', '2022-09-01 22:16:03', 'user', 1),
(26, 'Chong Chit Siang', 'ccs@gmail.com', NULL, '$2y$10$JFhq7a.y18MGE2mcL/6cRuWiRNzQP8xGKtbe43v9DzmCZygn7b6v.', NULL, '2022-08-31 02:57:33', '2022-09-01 22:16:05', 'user', 1),
(27, 'Wei Xian', 'wx@gmail.com', NULL, '$2y$10$BF8DJIQAdot6UAl3i1RbmeAzVVP3sP7AbdcPnHSaNXMfyz0EY28ga', NULL, '2022-08-31 03:37:23', '2022-09-01 22:16:11', 'user', 1),
(28, 'Shane Khor', 'sk@gmail.com', NULL, '$2y$10$1PQB72FTwCO6fmCj5qgg5uBDn0Z5O9UbNQHSECM/P6ZbDdf2Fnjwy', NULL, '2022-08-31 05:33:10', '2022-09-01 22:16:14', 'user', 1),
(29, 'Yong Jin', 'kyj@gmail.com', NULL, '$2y$10$7ntxFWTZwT7W/6LSNITgzez2Ctd.0PTkXPRzGJIWF2RlJcuFXjYm2', NULL, '2022-08-31 05:38:23', '2022-09-01 22:16:17', 'user', 1),
(30, 'David Saw', 'DS@gmail.com', NULL, '$2y$10$tO011LMRzIGyxZAoI1pYw.riYloztvc3GbAesr3WqJRoYK8NLKnVW', NULL, '2022-08-31 07:14:25', '2022-09-01 22:16:19', 'user', 1),
(31, 'Seow Kai Siu', 'sks@gmail.com', NULL, '$2y$10$yhJbWiOuBjYESswqw6F3y.raPi5eAzDFDUpehcmRXM2ipT2Ti1ou2', NULL, '2022-08-31 07:17:54', '2022-09-01 22:16:25', 'user', 1),
(32, 'Edison Chong', 'edsccs@gmail.com', NULL, '$2y$10$NTIfa02yLyOhM907bDG/g.mobULfydnJuJ.EEJbJLjrk5ZjNV9fBa', NULL, '2022-08-31 07:48:25', '2022-08-31 07:48:25', 'user', 0),
(33, 'Matthew Tan', 'matt@gmail.com', NULL, '$2y$10$ORzHeC6iVeex8HaLRWomGOzMOIrjaKEGKUPt2BUFZU50j7spEMTDi', NULL, '2022-08-31 08:05:09', '2022-08-31 08:05:09', 'user', 0),
(34, 'William Tan', 'wt@gmail.com', NULL, '$2y$10$gK6c2KPVlswj2YEVcF7A6.ls826hxAFAK0lKq.Z.Jt5rXfR4AHdL.', NULL, '2022-08-31 08:16:05', '2022-08-31 08:16:05', 'user', 0),
(35, 'Albert Eng', 'abe@gmail.com', NULL, '$2y$10$KRQYYjFsKM46epAZYcnSGuNXKxOuY40fNLk9oAyeFvlc9YVLSkL6G', NULL, '2022-08-31 08:34:03', '2022-08-31 08:34:03', 'user', 0),
(36, 'Ong Teng Hong', 'oth@gmail.com', NULL, '$2y$10$ReVKeQYL17tBiks8BzuiDuaxmxnKc2eLEo8xwbPiYpDHB2SegB2pm', NULL, '2022-08-31 08:40:53', '2022-08-31 08:40:53', 'user', 0),
(37, 'qwerty', 'q@gmail.com', NULL, '$2y$10$sYtQ77XOxfVOqW4ly4WoLu6B0DEsTRKla8uxBb3aZH/qlq7TKVq5K', NULL, '2022-09-01 20:51:34', '2022-09-01 20:51:34', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `gender`, `address`, `contact_num`, `birthday`, `age`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Male', 'No 17, Jalan Wira 17, Taman Tan Jira, Johor Bahru, Johor, 81300', '0107660573', '2000-08-22', 22, 17, '2022-08-30 23:29:15', '2022-08-30 23:35:09'),
(8, NULL, NULL, NULL, NULL, NULL, 18, '2022-08-30 23:49:16', '2022-08-30 23:49:16'),
(9, 'Female', 'No 17, Jalan Wira 17, Taman Tan Jira, Johor Bahru, Johor, 81300', '0106656333', '2000-04-30', 22, 19, '2022-08-30 23:51:30', '2022-09-06 01:18:56'),
(10, NULL, NULL, NULL, NULL, NULL, 20, '2022-08-30 23:52:53', '2022-08-30 23:52:53'),
(11, NULL, NULL, NULL, NULL, NULL, 21, '2022-08-30 23:58:55', '2022-08-30 23:58:55'),
(12, NULL, NULL, NULL, NULL, NULL, 22, '2022-08-31 01:28:39', '2022-08-31 01:28:39'),
(13, NULL, NULL, NULL, NULL, NULL, 23, '2022-08-31 01:33:38', '2022-08-31 01:33:38'),
(14, NULL, NULL, NULL, NULL, NULL, 24, '2022-08-31 01:39:59', '2022-08-31 01:39:59'),
(15, NULL, NULL, NULL, NULL, NULL, 25, '2022-08-31 02:11:33', '2022-08-31 02:11:33'),
(16, NULL, NULL, NULL, NULL, NULL, 26, '2022-08-31 02:57:33', '2022-08-31 02:57:33'),
(17, NULL, NULL, NULL, NULL, NULL, 27, '2022-08-31 03:37:23', '2022-08-31 03:37:23'),
(18, NULL, NULL, NULL, NULL, NULL, 28, '2022-08-31 05:33:10', '2022-08-31 05:33:10'),
(19, NULL, NULL, NULL, NULL, NULL, 29, '2022-08-31 05:38:23', '2022-08-31 05:38:23'),
(20, NULL, NULL, NULL, NULL, NULL, 30, '2022-08-31 07:14:25', '2022-08-31 07:14:25'),
(21, NULL, NULL, NULL, NULL, NULL, 31, '2022-08-31 07:17:54', '2022-08-31 07:17:54'),
(22, NULL, NULL, NULL, NULL, NULL, 32, '2022-08-31 07:48:25', '2022-08-31 07:48:25'),
(23, NULL, NULL, NULL, NULL, NULL, 33, '2022-08-31 08:05:09', '2022-08-31 08:05:09'),
(24, NULL, NULL, NULL, NULL, NULL, 34, '2022-08-31 08:16:05', '2022-08-31 08:16:05'),
(25, NULL, NULL, NULL, NULL, NULL, 35, '2022-08-31 08:34:03', '2022-08-31 08:34:03'),
(26, NULL, NULL, NULL, NULL, NULL, 36, '2022-08-31 08:40:53', '2022-08-31 08:40:53'),
(27, NULL, NULL, NULL, NULL, NULL, 37, '2022-09-01 20:51:34', '2022-09-01 20:51:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
