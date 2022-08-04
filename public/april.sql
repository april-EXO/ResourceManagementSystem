-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2022 at 02:13 AM
-- Server version: 5.7.38
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `resourcemanagementsystem`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `name`, `regnum`, `state`, `postcode`, `location`, `contactperson`, `contactnumber`, `website`, `page`, `moneyamount`, `moneyother`, `goodsFoodGroceries`, `goodsFurnitureFixing`, `goodsElectricalItemsGadgets`, `goodsTranspotation`, `goodsEducationalMaterial`, `other1`, `otherGoods`, `cleaning`, `moving`, `education`, `other2`, `otherServices`, `message`, `created_at`, `updated_at`) VALUES
(1, 'organization1', 'id1', 'Selangor', '43000', 'kajang', 'sy', '01135520430', 'www.gg.com', 'organization1 fb page', '<1000', NULL, 0, 1, 0, 0, 0, 1, NULL, 0, 1, 0, 0, NULL, 'comment', '2022-07-26 02:39:49', '2022-07-26 02:39:49');

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
