-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2022 at 07:54 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resourcemanagementsystem`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
CREATE TABLE IF NOT EXISTS `beneficiary` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyamount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goodsFoodGroceries` tinyint(1) NOT NULL,
  `goodsFurnitureFixing` tinyint(1) NOT NULL,
  `goodsElectricalItemsGadgets` tinyint(1) NOT NULL,
  `goodsTranspotation` tinyint(1) NOT NULL,
  `goodsEducationalMaterial` tinyint(1) NOT NULL,
  `other1` tinyint(1) NOT NULL,
  `otherGoods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning` tinyint(1) NOT NULL,
  `moving` tinyint(1) NOT NULL,
  `education` tinyint(1) NOT NULL,
  `other2` tinyint(1) NOT NULL,
  `otherServices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `name`, `regnum`, `state`, `postcode`, `location`, `contactperson`, `contactnumber`, `website`, `page`, `moneyamount`, `moneyother`, `goodsFoodGroceries`, `goodsFurnitureFixing`, `goodsElectricalItemsGadgets`, `goodsTranspotation`, `goodsEducationalMaterial`, `other1`, `otherGoods`, `cleaning`, `moving`, `education`, `other2`, `otherServices`, `message`, `created_at`, `updated_at`) VALUES
(7, '1', '1', 'Melaka', '1', '1', '1', '1', '1', '1', 'other', '1', 0, 0, 1, 0, 0, 1, '1', 0, 1, 0, 1, '1', '11111', '2022-08-06 06:29:14', '2022-08-06 06:29:14'),
(8, '2', '2', 'Sabah', '2', '2', '2', '2', '2', '2', 'other', '222', 1, 0, 0, 0, 0, 1, '222', 0, 0, 0, 1, '22222', '2222222', '2022-08-06 06:29:38', '2022-08-06 06:29:38');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connector`
--

DROP TABLE IF EXISTS `connector`;
CREATE TABLE IF NOT EXISTS `connector` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `projecttitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgregnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiaryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiarycontactperson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiarycontactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiarywebsite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiarypage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `timestart` time NOT NULL,
  `timeend` time NOT NULL,
  `volunteernumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyamount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goodsFoodGroceries` tinyint(1) NOT NULL,
  `goodsFurnitureFixing` tinyint(1) NOT NULL,
  `goodsElectricalItemsGadgets` tinyint(1) NOT NULL,
  `goodsTranspotation` tinyint(1) NOT NULL,
  `goodsEducationalMaterial` tinyint(1) NOT NULL,
  `other1` tinyint(1) NOT NULL,
  `otherGoods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning` tinyint(1) NOT NULL,
  `moving` tinyint(1) NOT NULL,
  `education` tinyint(1) NOT NULL,
  `other2` tinyint(1) NOT NULL,
  `otherServices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connector`
--

INSERT INTO `connector` (`id`, `projecttitle`, `orgname`, `orgregnum`, `beneficiaryname`, `beneficiarycontactperson`, `beneficiarycontactnumber`, `state`, `postcode`, `location`, `beneficiarywebsite`, `beneficiarypage`, `date`, `timestart`, `timeend`, `volunteernumber`, `moneyamount`, `moneyother`, `goodsFoodGroceries`, `goodsFurnitureFixing`, `goodsElectricalItemsGadgets`, `goodsTranspotation`, `goodsEducationalMaterial`, `other1`, `otherGoods`, `cleaning`, `moving`, `education`, `other2`, `otherServices`, `message`, `created_at`, `updated_at`) VALUES
(1, 'project1', 'organization1', 'id1', 'organization2', 'person2', '01135520430', 'Selangor', '43000', 'kajang', 'www.o2.com', 'organization2', '2022-07-30', '19:51:00', '23:52:00', '11-15', '1001-5000', NULL, 0, 1, 0, 0, 0, 1, NULL, 0, 1, 0, 0, NULL, 'comment', '2022-07-26 03:54:28', '2022-07-26 03:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `contributor`
--

DROP TABLE IF EXISTS `contributor`;
CREATE TABLE IF NOT EXISTS `contributor` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyamount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneyother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goodsFoodGroceries` tinyint(1) NOT NULL,
  `goodsFurnitureFixing` tinyint(1) NOT NULL,
  `goodsElectricalItemsGadgets` tinyint(1) NOT NULL,
  `goodsTranspotation` tinyint(1) NOT NULL,
  `goodsEducationalMaterial` tinyint(1) NOT NULL,
  `other1` tinyint(1) NOT NULL,
  `otherGoods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning` tinyint(1) NOT NULL,
  `moving` tinyint(1) NOT NULL,
  `education` tinyint(1) NOT NULL,
  `other2` tinyint(1) NOT NULL,
  `otherServices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relazone2` tinyint(1) NOT NULL,
  `lionsclubjb` tinyint(1) NOT NULL,
  `superpandateamklangvalley` tinyint(1) NOT NULL,
  `foodbank448` tinyint(1) NOT NULL,
  `other3` tinyint(1) NOT NULL,
  `otherOrganization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contributor`
--

INSERT INTO `contributor` (`id`, `name`, `regnum`, `state`, `postcode`, `location`, `contactperson`, `contactnumber`, `website`, `page`, `moneyamount`, `moneyother`, `frequency`, `goodsFoodGroceries`, `goodsFurnitureFixing`, `goodsElectricalItemsGadgets`, `goodsTranspotation`, `goodsEducationalMaterial`, `other1`, `otherGoods`, `cleaning`, `moving`, `education`, `other2`, `otherServices`, `relazone2`, `lionsclubjb`, `superpandateamklangvalley`, `foodbank448`, `other3`, `otherOrganization`, `message`, `created_at`, `updated_at`) VALUES
(1, 'organization1', 'id1', 'Selangor', '43000', 'kajang', 'sy', '01135520430', 'www.gg.com', 'organization1 fb page', '>10001', NULL, 'Monthly', 0, 0, 1, 0, 0, 0, NULL, 0, 1, 0, 0, NULL, 0, 0, 1, 0, 0, NULL, NULL, '2022-07-26 04:18:46', '2022-07-26 04:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `donation_records`
--

DROP TABLE IF EXISTS `donation_records`;
CREATE TABLE IF NOT EXISTS `donation_records` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_08_19_132622_create_user_profiles_table', 1),
(2, '2022_08_19_124959_create_beneficiaries_table', 2),
(3, '2022_08_19_125558_create_resources_table', 3),
(4, '2022_08_19_130708_create_beneficiary_applications_table', 4),
(5, '2022_08_19_130910_create_resourse_applications_table', 5),
(6, '2022_08_19_131049_create_donation_records_table', 6),
(7, '2022_08_19_132002_create_resource_donations_table', 7);

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('xinzhezhexin@gmail.com', '$2y$10$z4/PP3nqgQOHR/7ZxNLkmONkKfiEDELy.9lv3n3/hjOoZno7d/nsW', '2022-07-25 06:10:53');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `resources_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'april', 'hsy.k10@gmail.com', NULL, '$2y$10$iLbT9PLrDTT5BYHoYQXjQe52v8lhlC41R31lAZZeV2Wfeer8Ud9/e', NULL, '2022-07-25 04:47:55', '2022-07-25 04:47:55', 'user'),
(2, 'xinzhe', 'xinzhezhexin@gmail.com', NULL, '$2y$10$ClzowelckAEere3X5Z6Xx.GhUP6Q.1Qx.R4sxMauIGoP.mz0hFl7q', '9Pe7SyArHPx1s28yxak6ij7warZDNh9SIyMeaNatNsJMjMamftSgIfdCgNPM', '2022-07-25 05:06:29', '2022-07-25 05:06:29', 'admin'),
(13, 'tester', 'tester@gmail.com', NULL, '$2y$10$fq73kQAEd/QEt2EiBx0oEONvt8wi3pBLBR0MDJCDmBlh7Ezkj5Qf2', NULL, '2022-08-19 07:54:48', '2022-08-19 07:54:48', 'user');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `gender`, `address`, `contact_num`, `birthday`, `age`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'female', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(3, NULL, NULL, NULL, NULL, 30, 13, '2022-08-19 07:54:48', '2022-08-19 07:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cleaning` tinyint(1) NOT NULL,
  `moving` tinyint(1) NOT NULL,
  `education` tinyint(1) NOT NULL,
  `other1` tinyint(1) NOT NULL,
  `otherServices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SATtime1` tinyint(1) NOT NULL,
  `SATtime2` tinyint(1) NOT NULL,
  `SATtime3` tinyint(1) NOT NULL,
  `SATtime4` tinyint(1) NOT NULL,
  `SATother` tinyint(1) NOT NULL,
  `SATothertime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SUNtime1` tinyint(1) NOT NULL,
  `SUNtime2` tinyint(1) NOT NULL,
  `SUNtime3` tinyint(1) NOT NULL,
  `SUNtime4` tinyint(1) NOT NULL,
  `SUNother` tinyint(1) NOT NULL,
  `SUNotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MONtime1` tinyint(1) NOT NULL,
  `MONtime2` tinyint(1) NOT NULL,
  `MONtime3` tinyint(1) NOT NULL,
  `MONtime4` tinyint(1) NOT NULL,
  `MONother` tinyint(1) NOT NULL,
  `MONotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TUEStime1` tinyint(1) NOT NULL,
  `TUEStime2` tinyint(1) NOT NULL,
  `TUEStime3` tinyint(1) NOT NULL,
  `TUEStime4` tinyint(1) NOT NULL,
  `TUESother` tinyint(1) NOT NULL,
  `TUESotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WEDtime1` tinyint(1) NOT NULL,
  `WEDtime2` tinyint(1) NOT NULL,
  `WEDtime3` tinyint(1) NOT NULL,
  `WEDtime4` tinyint(1) NOT NULL,
  `WEDother` tinyint(1) NOT NULL,
  `WEDotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THURtime1` tinyint(1) NOT NULL,
  `THURtime2` tinyint(1) NOT NULL,
  `THURtime3` tinyint(1) NOT NULL,
  `THURtime4` tinyint(1) NOT NULL,
  `THURother` tinyint(1) NOT NULL,
  `THURotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FRItime1` tinyint(1) NOT NULL,
  `FRItime2` tinyint(1) NOT NULL,
  `FRItime3` tinyint(1) NOT NULL,
  `FRItime4` tinyint(1) NOT NULL,
  `FRIother` tinyint(1) NOT NULL,
  `FRIotherTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `ic`, `contactnumber`, `email`, `state`, `postcode`, `location`, `page`, `cleaning`, `moving`, `education`, `other1`, `otherServices`, `SATtime1`, `SATtime2`, `SATtime3`, `SATtime4`, `SATother`, `SATothertime`, `SUNtime1`, `SUNtime2`, `SUNtime3`, `SUNtime4`, `SUNother`, `SUNotherTime`, `MONtime1`, `MONtime2`, `MONtime3`, `MONtime4`, `MONother`, `MONotherTime`, `TUEStime1`, `TUEStime2`, `TUEStime3`, `TUEStime4`, `TUESother`, `TUESotherTime`, `WEDtime1`, `WEDtime2`, `WEDtime3`, `WEDtime4`, `WEDother`, `WEDotherTime`, `THURtime1`, `THURtime2`, `THURtime3`, `THURtime4`, `THURother`, `THURotherTime`, `FRItime1`, `FRItime2`, `FRItime3`, `FRItime4`, `FRIother`, `FRIotherTime`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sy', 'id1', '01135520430', 'hsy.k10@gmail.com', 'Selangor', '43000', 'kajang', 'organization1 fb page', 0, 1, 1, 0, NULL, 0, 1, 0, 0, 0, NULL, 0, 0, 0, 1, 0, NULL, 0, 1, 0, 0, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 1, 0, NULL, 0, 0, 0, 1, 0, NULL, NULL, '2022-07-26 04:58:20', '2022-07-26 04:58:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
