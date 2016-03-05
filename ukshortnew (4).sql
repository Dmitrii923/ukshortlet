-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2021 at 11:01 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukshortnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `adcostprice`
--

CREATE TABLE `adcostprice` (
  `id` int(11) NOT NULL,
  `period` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `type` text,
  `durationday` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adcostprice`
--

INSERT INTO `adcostprice` (`id`, `period`, `price`, `type`, `durationday`, `created_at`, `updated_at`) VALUES
(1, '1 week', '7', 'Private Standard', '7', '2021-09-30 14:38:28', '27-09-2021 11:05'),
(2, '1 week', '12', 'Private Featured', '7', '2021-09-30 14:38:28', '28-09-2021 11:05'),
(3, '1 week', '6', 'Agency Standard', '7', '2021-09-30 14:38:28', '29-09-2021 11:05'),
(4, '1 week', '12', 'Agency Featured', '7', '2021-09-30 14:38:28', '30-09-2021 11:05'),
(5, '1 Month', '10', 'Private Standard', '30', '2021-09-30 14:38:44', '01-10-2021 11:05'),
(6, '1 Month', '12', 'Private Featured', '30', '2021-09-30 14:38:44', '02-10-2021 11:05'),
(7, '1 Month', '11', 'Agency Standard', '30', '2021-09-30 14:38:44', '03-10-2021 11:05'),
(8, '1 Month', '15', 'Agency Featured', '30', '2021-09-30 14:38:44', '04-10-2021 11:05'),
(9, '1 Year', '5', 'Private Standard', '365', '2021-09-30 14:39:02', '05-10-2021 11:05'),
(10, '1 Year', '7', 'Private Featured', '365', '2021-09-30 14:39:02', '06-10-2021 11:05'),
(11, '1 Year', '10', 'Agency Standard', '365', '2021-09-30 14:39:02', '07-10-2021 11:05'),
(12, '1 Year', '12', 'Agency Featured', '365', '2021-09-30 14:39:02', '08-10-2021 11:05');

-- --------------------------------------------------------

--
-- Table structure for table `adcosts`
--

CREATE TABLE `adcosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_std_list_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_feature_list_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_std_list_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_feature_list_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adcosts`
--

INSERT INTO `adcosts` (`id`, `period`, `private_std_list_price`, `private_feature_list_price`, `agency_std_list_price`, `agency_feature_list_price`, `created_at`, `updated_at`, `price`, `type`) VALUES
(1, '1 week', '7', '12', '6', '12', NULL, NULL, NULL, NULL),
(2, '1 Month', '10', '12', '11', '15', NULL, NULL, NULL, NULL),
(4, '1 Year', '5', '7', '10', '12', '2021-09-19 03:35:40', '2021-09-19 03:35:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alerservices`
--

CREATE TABLE `alerservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alerservices`
--

INSERT INTO `alerservices` (`id`, `serviceid`, `cityid`, `email`, `phone`, `optionval`, `duration`, `total`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'test@mail.com', NULL, '1', '2', '25', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', '1', 'techsj04@gmail.com', NULL, 'on', 'on', NULL, NULL, NULL, '2021-09-20 01:28:33', '2021-09-20 01:28:33'),
(3, '1', '1', 'sanjoy@gmail.com', NULL, 'on', 'on', NULL, NULL, NULL, '2021-09-20 01:29:38', '2021-09-20 01:29:38'),
(4, '1', '1', 'webfrnz@gmail.com', '9876543210', 'nosms', 'on', NULL, NULL, NULL, '2021-10-26 18:09:53', '2021-10-26 18:09:53'),
(5, '2', '2', 'souvikde@gmail.com', '09876543210', 'withsms', 'on', NULL, '22.6525184', '88.2638848', '2021-11-02 01:16:07', '2021-11-02 01:16:07'),
(6, '2', '2', 'sabujnandi@gmail.com', '7747868740', 'nosms', 'on', NULL, '22.6525184', '88.2638848', '2021-11-02 02:36:08', '2021-11-02 02:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `bedroom`
--

CREATE TABLE `bedroom` (
  `id` int(11) NOT NULL,
  `roomtype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedroom`
--

INSERT INTO `bedroom` (`id`, `roomtype`) VALUES
(1, '1 BEDROOM'),
(2, '2 BEDROOMS'),
(3, '3 BEDROOMS'),
(4, '4 BEDROOMS');

-- --------------------------------------------------------

--
-- Table structure for table `buytools`
--

CREATE TABLE `buytools` (
  `id` int(11) NOT NULL,
  `tooltitle` text,
  `tooldesc` text,
  `toolprice` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buytools`
--

INSERT INTO `buytools` (`id`, `tooltitle`, `tooldesc`, `toolprice`, `created_at`, `updated_at`) VALUES
(1, 'SHORTLET\r\nPROPERTY RENTAL\r\nAGREEMENT', 'Use this if you are renting the whole property out.\r\n\r\n', '14.99', '2021-10-29 11:03:31', '0000-00-00 00:00:00'),
(2, 'SHORTLET\r\nROOM RENTAL\r\nAGREEMENT\r\n', 'Use this if you are renting out room/s\r\n\r\n', '7.99', '2021-10-29 11:03:31', '0000-00-00 00:00:00'),
(3, 'INVENTORY\r\nTEMPLATE', 'Use this to list the condition of items in your property\r\n\r\n', '4.99', '2021-10-29 11:05:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartypes`
--

CREATE TABLE `cartypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cartype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seatCapacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isenable` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartypes`
--

INSERT INTO `cartypes` (`id`, `cartype`, `seatCapacity`, `isenable`, `created_at`, `updated_at`) VALUES
(4, 'Pull Car', '3', NULL, '2021-08-26 09:23:47', '2021-08-26 09:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cityname` text,
  `pimg` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `cityname`, `pimg`, `created_at`, `updated_at`) VALUES
(1, 'LONDON', '13603.jpg', '2021-09-30 15:37:00', '2021-09-30 15:37:00'),
(2, 'OXFORD', '58584.jpg', '2021-09-30 15:37:07', '2021-09-30 15:37:07'),
(6, 'BIRMINGHAM', '68737.jpg', '2021-10-08 10:09:43', '2021-10-08 10:09:43'),
(7, 'BLACKPOOL', '13789.jpg', '2021-09-30 10:06:04', '2021-09-30 15:36:04'),
(8, 'CAMBRIDGE', '37732.jpg', '2021-10-08 10:10:38', '2021-10-08 10:10:38'),
(9, 'ABERDEEN', '', '2021-10-26 11:38:39', '2021-10-26 04:38:39'),
(10, 'ABINGDON', '', '2021-10-26 11:39:04', '2021-10-26 04:39:04'),
(11, 'BATH', '', '2021-10-26 11:39:13', '2021-10-26 04:39:13'),
(12, 'BELFAST', '', '2021-10-26 11:39:39', '2021-10-26 04:39:39'),
(13, 'BOURNEMOUTH', '', '2021-10-26 11:39:50', '2021-10-26 04:39:50'),
(14, 'BRADFORD', '', '2021-10-26 11:40:07', '2021-10-26 04:40:07'),
(15, 'BRIGHTON', '', '2021-10-26 11:40:17', '2021-10-26 04:40:17'),
(16, 'BRISTOL', '', '2021-10-26 11:40:24', '2021-10-26 04:40:24'),
(17, 'CANTERBURY', '', '2021-10-26 11:41:46', '2021-10-26 04:41:46'),
(18, 'CARDIFF', '', '2021-10-26 11:41:56', '2021-10-26 04:41:56'),
(19, 'CARLISLE', '', '2021-10-26 11:42:16', '2021-10-26 04:42:16'),
(20, 'CHELTENHAM', '', '2021-10-26 11:42:25', '2021-10-26 04:42:25'),
(21, 'CHESTER', '', '2021-10-26 11:42:41', '2021-10-26 04:42:41'),
(22, 'DERBY', '', '2021-10-26 11:42:47', '2021-10-26 04:42:47'),
(23, 'DUNDEE', '', '2021-10-26 11:42:54', '2021-10-26 04:42:54'),
(24, 'DURHAM', '', '2021-10-26 11:43:43', '2021-10-26 04:43:43'),
(25, 'EDINBURGH', '', '2021-10-26 11:43:55', '2021-10-26 04:43:55'),
(26, 'EXETER', '', '2021-10-26 11:44:08', '2021-10-26 04:44:08'),
(27, 'GLASGOW', '', '2021-10-26 11:44:33', '2021-10-26 04:44:33'),
(28, 'GLOUCESTER', '', '2021-10-26 11:44:48', '2021-10-26 04:44:48'),
(29, 'HEREFORD', '', '2021-10-26 11:44:54', '2021-10-26 04:44:54'),
(30, 'INVERNESS', '', '2021-10-26 11:45:01', '2021-10-26 04:45:01'),
(31, 'KINGSTON UPON THAMES', '', '2021-10-26 11:45:23', '2021-10-26 04:45:23'),
(32, 'LANCASTER', '', '2021-10-26 11:45:37', '2021-10-26 04:45:37'),
(33, 'LEEDS', '', '2021-10-26 11:45:41', '2021-10-26 04:45:41'),
(34, 'LEICESTER', '', '2021-10-26 11:46:29', '2021-10-26 04:46:29'),
(35, 'LINCOLN', '', '2021-10-26 11:46:36', '2021-10-26 04:46:36'),
(36, 'LIVERPOOL', '', '2021-10-26 11:46:42', '2021-10-26 04:46:42'),
(37, 'LUTON', '', '2021-10-26 11:46:58', '2021-10-26 04:46:58'),
(38, 'MANCHESTER', '', '2021-10-26 11:47:13', '2021-10-26 04:47:13'),
(39, 'NEWCASTLE', '', '2021-10-26 11:47:19', '2021-10-26 04:47:19'),
(40, 'NEWQUAY', '', '2021-10-26 11:47:40', '2021-10-26 04:47:40'),
(41, 'PETERBOROUGH', '', '2021-10-26 11:47:53', '2021-10-26 04:47:53'),
(42, 'POOLE', '', '2021-10-26 11:47:57', '2021-10-26 04:47:57'),
(43, 'PRESTON', '', '2021-10-26 11:48:07', '2021-10-26 04:48:07'),
(44, 'READING', '', '2021-10-26 11:48:12', '2021-10-26 04:48:12'),
(45, 'RUGBY', '', '2021-10-26 11:48:18', '2021-10-26 04:48:18'),
(46, 'SALISBURY', '', '2021-10-26 11:48:32', '2021-10-26 04:48:32'),
(47, 'SCARBOROUGH', '', '2021-10-26 11:48:42', '2021-10-26 04:48:42'),
(48, 'SOUTHAMPTON', '', '2021-10-26 11:48:58', '2021-10-26 04:48:58'),
(49, 'ST ALBANS', '', '2021-10-26 11:49:04', '2021-10-26 04:49:04'),
(50, 'ST ANDREWS', '', '2021-10-26 11:49:10', '2021-10-26 04:49:10'),
(51, 'SWANSEA', '', '2021-10-26 11:49:22', '2021-10-26 04:49:22'),
(52, 'TRURO', '', '2021-10-26 11:49:31', '2021-10-26 04:49:31'),
(53, 'WEYMOUTH', '', '2021-10-26 11:49:45', '2021-10-26 04:49:45'),
(54, 'WINCHESTER', '', '2021-10-26 11:49:53', '2021-10-26 04:49:53'),
(55, 'WINDSOR', '', '2021-10-26 11:50:15', '2021-10-26 04:50:15'),
(56, 'WORCESTER', '', '2021-10-26 11:50:21', '2021-10-26 04:50:21'),
(57, 'YORK', '', '2021-10-26 11:50:26', '2021-10-26 04:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `createowneracs`
--

CREATE TABLE `createowneracs` (
  `uploadfile` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isverify` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `createowneracs`
--

INSERT INTO `createowneracs` (`uploadfile`, `isverify`, `mobile`, `ownertype`, `status`) VALUES
('', 0, '+919775483913', 'Private Owner', 0),
('70801.pdf', 0, '9755483913', 'Private Owner', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicleid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `milege` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenditures`
--

INSERT INTO `expenditures` (`id`, `vehicleid`, `headid`, `milege`, `date`, `amount`, `note`, `created_at`, `updated_at`) VALUES
(3, '3', '2', NULL, '2021-08-27', '2001', 'xxx', '2021-08-30 08:24:10', '2021-08-30 08:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `propertyid` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `userid`, `propertyid`, `created_at`, `updated_at`) VALUES
(1, 10, 5, '2021-10-29 11:49:15', '0000-00-00 00:00:00'),
(4, 3, 5, '2021-11-02 06:20:51', '2021-11-02 06:20:51'),
(5, 3, 2, '2021-11-02 06:24:05', '2021-11-02 06:24:05'),
(6, 3, 4, '2021-11-02 06:29:01', '2021-11-02 06:29:01'),
(7, 7, 2, '2021-11-02 10:15:49', '2021-11-02 10:15:49'),
(8, 1, 10, '2021-11-03 15:19:46', '2021-11-03 15:19:46'),
(9, 1, 4, '2021-11-04 07:08:54', '2021-11-04 07:08:54'),
(10, 1, 4, '2021-11-04 07:08:54', '2021-11-04 07:08:54'),
(11, 1, 1, '2021-11-04 07:09:31', '2021-11-04 07:09:31'),
(12, 1, 11, '2021-11-04 07:09:38', '2021-11-04 07:09:38'),
(13, 1, 12, '2021-11-04 10:54:05', '2021-11-04 10:54:05'),
(14, 1, 9, '2021-11-04 10:55:05', '2021-11-04 10:55:05'),
(15, 1, 5, '2021-11-04 10:57:23', '2021-11-04 10:57:23'),
(16, 1, 2, '2021-11-04 10:57:26', '2021-11-04 10:57:26'),
(17, 11, 1, '2021-11-05 07:58:12', '2021-11-05 07:58:12'),
(18, 11, 2, '2021-11-05 07:58:19', '2021-11-05 07:58:19'),
(19, 11, 4, '2021-11-05 07:58:24', '2021-11-05 07:58:24'),
(20, 11, 10, '2021-11-05 07:58:29', '2021-11-05 07:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `featureserviceproviders`
--

CREATE TABLE `featureserviceproviders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsurl` longtext COLLATE utf8mb4_unicode_ci,
  `adsimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureserviceproviders`
--

INSERT INTO `featureserviceproviders` (`id`, `adsurl`, `adsimage`, `created_at`, `updated_at`) VALUES
(2, 'abcd.com1', '98772.png', '2021-09-12 13:00:46', '2021-09-13 10:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicleid` longtext COLLATE utf8mb4_unicode_ci,
  `startmeter` longtext COLLATE utf8mb4_unicode_ci,
  `ref` longtext COLLATE utf8mb4_unicode_ci,
  `qty` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `state` longtext COLLATE utf8mb4_unicode_ci,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `vehicleid`, `startmeter`, `ref`, `qty`, `price`, `state`, `note`, `date`, `created_at`, `updated_at`) VALUES
(3, '3', '24.5', 'test', '50', '5000', 'ddcdsc', 'test note', '2021-12-23', '2021-08-27 09:46:35', '2021-08-27 09:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grpname` longtext COLLATE utf8mb4_unicode_ci,
  `grpdesc` longtext COLLATE utf8mb4_unicode_ci,
  `grpnote` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `grpname`, `grpdesc`, `grpnote`, `created_at`, `updated_at`) VALUES
(2, 'Test Group', 'test desc', NULL, '2021-08-27 09:18:58', '2021-08-27 09:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicleid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `milege` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxpercent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalamount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `vehicleid`, `headid`, `milege`, `date`, `amount`, `taxpercent`, `totalamount`, `created_at`, `updated_at`) VALUES
(3, '3', '2', '25', '2021-01-27', '250', '5', '262', '2021-08-30 07:08:00', '2021-08-30 07:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_26_115209_create_cars_table', 2),
(6, '2021_08_26_115314_create_vendors_table', 2),
(8, '2021_08_26_115710_create_cartypes_table', 3),
(10, '2021_08_26_135946_create_vehicles_table', 4),
(12, '2021_08_27_122308_create_groups_table', 5),
(14, '2021_08_27_144954_create_fuels_table', 6),
(15, '2021_08_30_072341_create_transanctions_table', 7),
(16, '2021_08_30_093735_create_incomes_table', 8),
(17, '2021_08_30_124027_create_expenditures_table', 9),
(18, '2021_08_30_141033_create_partsacategories_table', 10),
(19, '2021_09_12_175559_create_featureserviceproviders_table', 11),
(20, '2021_09_13_172708_create_alerservices_table', 12),
(21, '2021_09_18_074240_create_createowneracs_table', 13),
(22, '2021_09_18_103734_create_adcosts_table', 14),
(23, '2021_09_20_063710_create_porpertytypes_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text,
  `pimg` varchar(250) DEFAULT NULL,
  `description` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `pimg`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Test News', '11375.jpg', '<p>sdcdscds dscds&nbsp;sdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscds</p>', '2021-09-28 09:41:37', '2021-09-28 09:41:37'),
(2, 'Test News', '11375.jpg', '<p>sdcdscds dscds&nbsp;sdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscdssdcdscds dscds</p>', '2021-09-28 09:41:37', '2021-09-28 09:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `nightprice`
--

CREATE TABLE `nightprice` (
  `id` int(11) NOT NULL,
  `minprice` varchar(250) DEFAULT NULL,
  `maxprice` varchar(250) DEFAULT NULL,
  `pricetag` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nightprice`
--

INSERT INTO `nightprice` (`id`, `minprice`, `maxprice`, `pricetag`, `created_at`, `updated_at`) VALUES
(1, '1', '25', 'Up to £25 /night', '2021-10-29 05:19:37', '0000-00-00 00:00:00'),
(2, '25', '50', '£25-£50 /night', '2021-10-29 05:19:49', '0000-00-00 00:00:00'),
(3, '50', '100', '£50-£100 /night', '2021-10-29 05:19:51', '0000-00-00 00:00:00'),
(4, '100', '1000000', '£100+ /night', '2021-10-29 05:19:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `publish` int(11) NOT NULL,
  `pgtitle` text,
  `slug` text,
  `description` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `publish`, `pgtitle`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Terms & Conditions', 'terms-conditions', '<p><strong>ukshortlets.com - website TERMS &amp; conditions</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BACKGROUND:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; These Terms, together with any and all other documents referred to herein, set out the terms and conditions under which you may use this website (&ldquo;Our Site&rdquo;) and Our Services. Please read these Terms carefully and ensure that you understand them. Your agreement to comply with and be bound by these Terms is deemed to occur upon your first use of Our Site. If you do not agree to comply with and be bound by these Terms, you must stop using Our Site immediately.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Definitions and Interpretation</strong>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>In these Terms, unless the context otherwise requires, the following expressions have the following meanings:</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:554px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Account&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means an account that may be required for a User to access and/or use certain areas of Our Site;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Content&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means any and all text, images, audio, video, scripts, code, software, databases and any other form of information capable of being stored on a computer that appears on, or forms part of, Our Site;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:15px; vertical-align:top; width:193px\">\r\n			<p><strong>Users</strong></p>\r\n			</td>\r\n			<td style=\"height:15px; vertical-align:top; width:361px\">\r\n			<p>means users of Our Site;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:25px; vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;We/Us/Our&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"height:25px; vertical-align:top; width:361px\">\r\n			<p>Uk Short Lets Ltd.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n	<li><strong>Information About Us</strong>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>This Website is operated by UK Short Lets Ltd., UK Short Lets Ltd., a company registered in England &amp; Wales under Company Number 11334837. Our registered office is located at 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom. &nbsp;(&ldquo;the Company&rdquo;).</li>\r\n			<li>We are an online portal for searchers and providers of holiday accommodation and short term property rentals/ lets within the UK.</li>\r\n			<li>Our ICO Registration Number is:&nbsp; [ TO BE ADDED WHEN LIVE ]</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Access to Our Site &amp; Account Registration</strong>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>Access to Our Site is free of charge.</li>\r\n			<li>It is your responsibility to make any and all arrangements necessary in order to access Our Site.</li>\r\n			<li>Access to Our Site is provided &ldquo;as is&rdquo; and on an &ldquo;as available&rdquo; basis.&nbsp; We may alter, suspend or discontinue Our Site (or any part of it) at any time and without notice.&nbsp; We will not be liable to you in any way if Our Site (or any part of it) is unavailable at any time and for any period.</li>\r\n			<li>Users will be able to access the majority of this Website without having to register any details with us. However, particular areas of this Website will only be accessible if you have registered, including the ability to use our services.</li>\r\n			<li>Advertising &amp; Fees &ndash; Prior to acceptance of any advertising for properties, we require sight of official documentation proving that you are the owner of the property and have the right to offer short term accommodation and/or holiday lets. You should refer to our acceptable documents list for further information. We regret that without this evidence being in place, we will be unable to accept your advertisement or feature listing.</li>\r\n			<li>You are solely responsible for all information that you submit to Us and any consequences that may result from your post or advert for your accommodation or property. Any and all information in your advertisement/s must meet the required UK legal standards for any advertising featured or the details therein. We reserve the right to refuse any advertising, or moderate/ amend any advertising that breaches the required standards.</li>\r\n			<li>We also reserve the right to restrict your account and advertising on our site either temporarily or permanently, if you continue to breach the required standards regarding advertising law. This could have the subsequent result that you shall forfeit any monies paid for any current or future advertising, which you acknowledge and understand and agree to.</li>\r\n			<li>Other than any specified free trial period, UK Shortlets.com fees are those as specified under the &ldquo;Ad Costs&rdquo; and &ldquo;Buy&rdquo; tools header. Payment is currently made using Paypal only. We do not become involved with, not have access to or store any of your financial information during the purchase process, so as to further protect your privacy. We regret that at this time, if you do not have a Paypal account we cannot post your advertisement. Please note that you will be subject to Paypal&rsquo;s Privacy Policy &amp; Terms of Use during your transaction and it is recommended that you refer to them to ensure you agree with them.</li>\r\n			<li>Since all advertising is considered a bespoke purchase under law, all advertising fees are due in advance of being featured on Our Site, and as such are exempt from any refunds or replacements, once they have been booked and authorised. Only if the advertisement contains errors caused by our negligence shall they be replaced, extended or refunded.</li>\r\n			<li>If you have booked a series or block of advertising and your account is closed by Us, then any remaining unused, but pre-paid advertising remaining after the point and date of your termination, will be refunded.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Intellectual Property Rights</strong>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>With the exception of User Content, all<strong> </strong>Content included on Our Site and the copyright and other intellectual property rights subsisting in that Content, unless specifically labelled otherwise, belongs to or has been licensed by Us.&nbsp; All Content (including User Content) is protected by applicable United Kingdom and international intellectual property laws and treaties.</li>\r\n			<li>You may not reproduce, copy, distribute, sell, rent, sub-licence, store, or in any other manner re-use Content from Our Site unless given express written permission to do so by Us.</li>\r\n			<li>You may:\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>Access, view and use Our Site in a web browser (including any web browsing capability built into other types of software or app);</li>\r\n					<li>Download Our Site (or any part of it) for caching;</li>\r\n					<li>Print one copy of any page(s) from Our Site;</li>\r\n					<li>Download extracts from pages on Our Site; and</li>\r\n					<li>Save pages from Our Site for later and/or offline viewing.</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n			<li>Our status as the owner and author of the Content on Our Site (or that of identified licensors, as appropriate) must always be acknowledged.</li>\r\n			<li>You may not re-use any Content printed, saved or downloaded from Our Site for commercial purposes without first obtaining a licence from Us (or our licensors, as appropriate) to do so.&nbsp; This does not prohibit the normal access, viewing and use of Our Site whether by business users or consumers.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Links to Our Site</strong>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>You may link to Our Site provided that:\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>you do so in a fair and legal manner;</li>\r\n					<li>you do not do so in a manner that suggests any form of association, endorsement or approval on Our part where none exists;</li>\r\n					<li>you do not use any logos or trade marks displayed on Our Site without Our express written permission; and</li>\r\n					<li>you do not do so in a way that is calculated to damage Our reputation or to take unfair advantage of it.</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>You may not link to any page other than the homepage of Our Site. Deep linking to other pages requires Our express written permission.&nbsp;</li>\r\n			<li>Framing or embedding of Our Site on other websites is not permitted without Our express written permission</li>\r\n			<li>You may not link to Our Site from any other site the main content of which contains material that:\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li><a name=\"_Hlk43996834\"> is sexually explicit; is obscene, deliberately offensive, hateful or otherwise inflammatory; promotes violence; promotes or assists in any form of unlawful activity; discriminates against, or is in any way defamatory of, any person, group or class of persons, race, gender, religion, nationality, disability, sexual orientation, or age; is sexist, blasphemous to religion, is intended or is otherwise likely to threaten, harass, annoy, alarm, inconvenience, upset, or embarrass another person; is calculated or is otherwise likely to deceive another person; is intended or is otherwise likely to infringe (or to threaten to infringe) another person&rsquo;s privacy;</a></li>\r\n					<li>misleadingly impersonates any person or otherwise misrepresents the identity or affiliation of a particular person in a way that is calculated to deceive;</li>\r\n					<li>implies any form of affiliation with Us where none exists;</li>\r\n					<li>infringes, or assists in the infringement of, the intellectual property rights (including, but not limited to, copyright, trademarks and database rights) of any other party; or</li>\r\n					<li>is made in breach of any legal duty owed to a third party including, but not limited to, contractual duties and duties of confidence.</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Links to Other Sites</strong></li>\r\n</ol>\r\n\r\n<p>6.1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Links to other sites may be included on Our Site. Unless expressly stated, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; these sites are not under Our control. We neither assume nor accept any&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; responsibility or liability for the content of third-party sites. The inclusion of a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; link to another site on Our Site is for information only and does not imply any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; endorsement of the sites themselves or of those in control of them. You &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; should check the Terms of Use and Privacy/ Cookies Policy of any third-party &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sites we link to as they may not be the same as ours.</p>\r\n\r\n<ol>\r\n	<li><strong>Liability and Disclaimers</strong>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>Nothing on Our Site constitutes actual advice on which you should rely. It is provided for information purposes only. If you are unsure whether our Services meet your needs, professional or specialist advice should always be sought before taking any action on the basis of any information provided on Our Site.</li>\r\n			<li>We act only as a Conduit platform bringing together the Advertisers and searchers. We are not contractually bound or connected if you rent, lease or hire any accommodation from an Advertiser. Nor for any arrangements or requirements or disputes or incidents, between the Advertiser, Property owner or Customer/ Hirer. You hereby agree not to hold us responsible for anything that individual Users of our site post, advertise or do.</li>\r\n			<li>Although we have no obligation to monitor the information posted on our site, we do encourage any possible infringements, causes for concern or complaints/ corrections to be reported to us via our Contact Us page, so we can take appropriate action where necessary.</li>\r\n			<li>We have not personally vetted the facilities or premises advertised. Whilst we require proof of ownership of the property and the right to rent it from Advertisers, we cannot vouch that such property is exactly suited to a Customer&rsquo;s needs. We recommend that all Advertisers and Customers put in place and conduct their own due diligence and safety/ comfort checks to ensure they are happy with any arrangement between them. You should exercise the same due caution that you would in any circumstance or renting or hiring a property/ accommodation.</li>\r\n			<li>Insofar as is permitted by law, We make no representation, warranty, or guarantee that Our Site will meet your requirements, that it will not infringe the rights of third parties, that it will be compatible with all software and hardware, or that it will be secure.</li>\r\n			<li>We make reasonable efforts to ensure that the Content on Our Site is complete, accurate, and up to date. We do not, however, make any representations, warranties or guarantees (whether express or implied) that the Content is complete, accurate, or up to date. Please note that this exception does not apply to information concerning services for sale through Our Site.&nbsp; Please refer to Our Terms and Conditions of Sale for more information.</li>\r\n			<li>To the fullest extent permissible by law, We accept no liability to any User for any loss or damage, whether foreseeable or otherwise, in contract, tort (including negligence), for breach of statutory duty, or otherwise, arising out of or in connection with the use of (or inability to use) Our Site or the use of or reliance upon any Content (including User Content) included on Our Site.</li>\r\n			<li>If you are a business user, we hereby exclude all implied conditions, warranties, representations or other terms that may apply to Our Site or Content.&nbsp; We will not be liable for any loss of profits, sales, business or revenue; loss of business opportunity, goodwill or reputation; loss of anticipated savings; business interruption; or for any indirect or consequential loss or damage.</li>\r\n			<li>If you are a Consumer user, please note that Our Site is mostly intended for business use. If you have an enquiry as an individual Consumer then you should contact us directly with any request/s.</li>\r\n			<li>We neither assume nor accept responsibility or liability arising out of any disruption or non-availability of Our Site resulting from external causes beyond our reasonable control including, but not limited to, ISP equipment failure, host equipment failure, communications network failure, natural events, strikes, acts of war, government legislation, pandemic or lockdown restrictions or other Force Majeure legal restrictions. In line with the foregoing, in the event of Us not being able to fulfil any pre-paid advertisement period, Advertisers agree that a full refund of the remaining Advertising period by Us, shall act as full and final settlement sum in respect of any unused period so affected.</li>\r\n			<li>Nothing in these Terms excludes or restricts Our liability for fraud or fraudulent misrepresentation, for death or personal injury resulting from negligence, or for any other forms of liability which cannot be excluded or restricted by law.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Viruses, Malware and Security</strong>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>We exercise all reasonable skill and care to ensure that Our Site is secure and free from viruses and other malware.</li>\r\n			<li>You are responsible for protecting your hardware, software, data and other material from viruses, malware, and other internet security risks.</li>\r\n			<li>You must not deliberately introduce viruses or other malware, or any other material which is malicious or technologically harmful either to or via Our Site.</li>\r\n			<li>You must not attempt to gain unauthorised access to any part of Our Site, the server on which Our Site is stored, or any other server, computer, or database connected to Our Site.</li>\r\n			<li>You must not attack Our Site by means of a denial-of-service attack, a distributed denial of service attack, or by any other means.</li>\r\n			<li>By breaching the provisions of these clauses, you may be committing a criminal offence under the Computer Misuse Act 1990.&nbsp; Any and all such breaches will be reported to the relevant law enforcement authorities and We will cooperate fully with those authorities by disclosing your identity to them.&nbsp; Your right to use Our Site will cease immediately in the event of such a breach.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Acceptable Usage Policy</strong>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>You may only use Our Site in a manner that is lawful and that complies with the provisions of this Clause 11.&nbsp; Specifically:\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>you must ensure that you comply fully with any and all local, national or international laws and/or regulations;</li>\r\n					<li>you must not use Our Site in any way, or for any purpose, that is unlawful or fraudulent;</li>\r\n					<li>you must not use Our Site to knowingly send, upload, or in any other way transmit data that contains any form of virus or other malware, or any other code designed to adversely affect computer hardware, software, or data of any kind; and</li>\r\n					<li>you must not use Our Site in any way, or for any purpose, that is intended to harm any person or persons in any way.</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n			<li>When submitting User Content (or communicating in any other way using Our Site), you must not submit, communicate or otherwise do anything that:</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>is sexually explicit; is obscene, deliberately offensive, hateful or otherwise inflammatory; promotes violence; promotes or assists in any form of unlawful activity; discriminates against, or is in any way defamatory of, any person, group or class of persons, race, gender, religion, nationality, disability, sexual orientation, or age; is blasphemous to religion, is intended or is otherwise likely to threaten, harass, annoy, alarm, inconvenience, upset, or embarrass another person; is calculated or is otherwise likely to deceive another person; is intended or is otherwise likely to infringe (or to threaten to infringe) another person&rsquo;s privacy;</li>\r\n			<li>misleadingly impersonates any person or otherwise misrepresents the identity or affiliation of a particular person in a way that is calculated to deceive;</li>\r\n			<li>implies any form of affiliation with Us where none exists;</li>\r\n			<li>infringes, or assists in the infringement of, the intellectual property rights (including, but not limited to, copyright, trademarks and database rights) of any other party; or</li>\r\n			<li>is made in breach of any legal duty owed to a third party including, but not limited to, contractual duties and duties of confidence.</li>\r\n		</ol>\r\n		</li>\r\n		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We reserve the right to suspend or terminate your access to Our Site if &nbsp;&nbsp;&nbsp;&nbsp; you materially breach the provisions of this these Terms.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Specifically, We may take one or more of the following actions:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n		<ol>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspend, whether temporarily or permanently, any Account you may have and/or your right to access Our Site;</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; remove any User Content submitted by you that violates this Acceptable Usage Policy;</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; issue you with a written warning;</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; take legal proceedings against you for reimbursement of any and all relevant costs on an indemnity basis resulting from your breach;</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; take further legal action against you as appropriate;</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disclose such information to law enforcement authorities as required or as We deem reasonably necessary; and/or any other actions which We deem reasonably appropriate (and lawful).</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We hereby exclude any and all liability arising out of any actions (including those set out above) that We may take in response to breaches of these Terms.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Privacy and Cookies</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.1&nbsp;&nbsp;&nbsp;&nbsp; Use of Our Site is also governed by Our Cookie Policy and our Privacy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Policy, available from the footer of our Homepage. These policies are &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; incorporated into these Terms by this reference.</p>\r\n\r\n<ol>\r\n	<li><strong>Changes to these Terms</strong>\r\n\r\n	<ol>\r\n		<li>We may alter these Terms at any time. Any such changes will &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; become binding on you upon your first use of Our Site after any of the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes have &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; been implemented. You are therefore advised to check &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; this page from time to time.</li>\r\n		<li>In the event of any conflict between the current version of these Terms &nbsp;&nbsp;&nbsp;&nbsp; of Use and any previous version(s), the provisions current and in effect &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; shall prevail unless it is expressly stated otherwise.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Contacting Us</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12.1 &nbsp;&nbsp;&nbsp; To contact Us, please email Us or by using&nbsp;&nbsp; any of the methods which &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; are provided on Our Contact Us page.</p>\r\n\r\n<ol>\r\n	<li><strong>Communications from Us</strong>\r\n\r\n	<ol>\r\n		<li>If We have your contact details (if, for example, you have an Account) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We may from time to time send you important notices by email.&nbsp; Such &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; notices may relate to matters including, but not limited to, service &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes, changes to &nbsp; these Terms, Our conditions of sale, and any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes to your Account.</li>\r\n		<li>We will never send you marketing emails of any kind without your express consent.&nbsp; If you do give such consent, you may opt out at any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.&nbsp; Any and all marketing emails sent by Us include an unsubscribe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; link. If you opt out of receiving emails from us at any time, it may take &nbsp; up to 7 business days for Us to comply with your request.&nbsp; During that &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time, you may continue to receive emails from Us.</li>\r\n		<li>For questions or complaints about communications from Us (including, &nbsp;&nbsp;&nbsp;&nbsp; but not limited to marketing emails), please contact Us by email shown &nbsp; in 12 above or using our Contact Us page.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Data Protection</strong>\r\n	<ol>\r\n		<li>These clauses outline our compliance with UKGDPR and The Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Protection Act.</li>\r\n		<li>All personal information that We may use will be collected, processed, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and held in accordance with the provisions of EU Regulation 2016/679 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; General Data Protection Regulation (&ldquo;GDPR&rdquo;) and the UKGDPR and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; your rights under them depending on your location.</li>\r\n		<li>For complete details of Our collection, processing, storage, and &nbsp;&nbsp;&nbsp;&nbsp; retention of personal data including, but not limited to, the purpose(s) for which personal data is used, the legal basis or bases for using it, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; details of your rights and how to exercise them, and personal data &nbsp;&nbsp;&nbsp;&nbsp; sharing (where applicable), please refer to Our Privacy and Cookie &nbsp;&nbsp;&nbsp;&nbsp; Policy available at the footer of our Homepage.</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Law and Jurisdiction</strong>\r\n	<ol>\r\n		<li>These Terms and the relationship between you and Us (whether&nbsp; &nbsp;&nbsp; contractual or otherwise) shall only be governed by and construed&nbsp; in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; full accordance with the Laws of England &amp; Wales.</li>\r\n		<li>If you are a business, any disputes concerning these Terms, the &nbsp;&nbsp;&nbsp;&nbsp; relationship between you and Us, or any matters arising therefrom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or associated therewith (whether contractual or otherwise) shall be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject to the exclusive jurisdiction of the courts of England.</li>\r\n		<li>If you are a Consumer, any disputes concerning these Terms, the &nbsp; relationship between you and Us, or any matters arising therefrom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or associated therewith (whether contractual or otherwise) shall be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject to the exclusive&nbsp; jurisdiction of the courts of England.\r\n		<p><strong>ukshortlets.com - website TERMS &amp; conditions</strong></p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><strong>BACKGROUND:</strong></p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; These Terms, together with any and all other documents referred to herein, set out the terms and conditions under which you may use this website (&ldquo;Our Site&rdquo;) and Our Services. Please read these Terms carefully and ensure that you understand them. Your agreement to comply with and be bound by these Terms is deemed to occur upon your first use of Our Site. If you do not agree to comply with and be bound by these Terms, you must stop using Our Site immediately.</p>\r\n\r\n		<p>&nbsp;</p>\r\n		</li>\r\n		<li><strong>Definitions and Interpretation</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>In these Terms, unless the context otherwise requires, the following expressions have the following meanings:</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li>\r\n		<p>&nbsp;</p>\r\n\r\n		<table cellspacing=\"0\" style=\"border-collapse:collapse; width:554px\">\r\n			<tbody>\r\n				<tr>\r\n					<td style=\"vertical-align:top; width:193px\">\r\n					<p><strong>&ldquo;Account&rdquo;</strong></p>\r\n					</td>\r\n					<td style=\"vertical-align:top; width:361px\">\r\n					<p>means an account that may be required for a User to access and/or use certain areas of Our Site;</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td style=\"vertical-align:top; width:193px\">\r\n					<p><strong>&ldquo;Content&rdquo;</strong></p>\r\n					</td>\r\n					<td style=\"vertical-align:top; width:361px\">\r\n					<p>means any and all text, images, audio, video, scripts, code, software, databases and any other form of information capable of being stored on a computer that appears on, or forms part of, Our Site;</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td style=\"height:15px; vertical-align:top; width:193px\">\r\n					<p><strong>Users</strong></p>\r\n					</td>\r\n					<td style=\"height:15px; vertical-align:top; width:361px\">\r\n					<p>means users of Our Site;</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td style=\"height:25px; vertical-align:top; width:193px\">\r\n					<p><strong>&ldquo;We/Us/Our&rdquo;</strong></p>\r\n					</td>\r\n					<td style=\"height:25px; vertical-align:top; width:361px\">\r\n					<p>Uk Short Lets Ltd.</p>\r\n					</td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n		</li>\r\n		<li><strong>Information About Us</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>This Website is operated by UK Short Lets Ltd., UK Short Lets Ltd., a company registered in England &amp; Wales under Company Number 11334837. Our registered office is located at 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom. &nbsp;(&ldquo;the Company&rdquo;).</li>\r\n				<li>We are an online portal for searchers and providers of holiday accommodation and short term property rentals/ lets within the UK.</li>\r\n				<li>Our ICO Registration Number is:&nbsp; [ TO BE ADDED WHEN LIVE ]</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Access to Our Site &amp; Account Registration</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>Access to Our Site is free of charge.</li>\r\n				<li>It is your responsibility to make any and all arrangements necessary in order to access Our Site.</li>\r\n				<li>Access to Our Site is provided &ldquo;as is&rdquo; and on an &ldquo;as available&rdquo; basis.&nbsp; We may alter, suspend or discontinue Our Site (or any part of it) at any time and without notice.&nbsp; We will not be liable to you in any way if Our Site (or any part of it) is unavailable at any time and for any period.</li>\r\n				<li>Users will be able to access the majority of this Website without having to register any details with us. However, particular areas of this Website will only be accessible if you have registered, including the ability to use our services.</li>\r\n				<li>Advertising &amp; Fees &ndash; Prior to acceptance of any advertising for properties, we require sight of official documentation proving that you are the owner of the property and have the right to offer short term accommodation and/or holiday lets. You should refer to our acceptable documents list for further information. We regret that without this evidence being in place, we will be unable to accept your advertisement or feature listing.</li>\r\n				<li>You are solely responsible for all information that you submit to Us and any consequences that may result from your post or advert for your accommodation or property. Any and all information in your advertisement/s must meet the required UK legal standards for any advertising featured or the details therein. We reserve the right to refuse any advertising, or moderate/ amend any advertising that breaches the required standards.</li>\r\n				<li>We also reserve the right to restrict your account and advertising on our site either temporarily or permanently, if you continue to breach the required standards regarding advertising law. This could have the subsequent result that you shall forfeit any monies paid for any current or future advertising, which you acknowledge and understand and agree to.</li>\r\n				<li>Other than any specified free trial period, UK Shortlets.com fees are those as specified under the &ldquo;Ad Costs&rdquo; and &ldquo;Buy&rdquo; tools header. Payment is currently made using Paypal only. We do not become involved with, not have access to or store any of your financial information during the purchase process, so as to further protect your privacy. We regret that at this time, if you do not have a Paypal account we cannot post your advertisement. Please note that you will be subject to Paypal&rsquo;s Privacy Policy &amp; Terms of Use during your transaction and it is recommended that you refer to them to ensure you agree with them.</li>\r\n				<li>Since all advertising is considered a bespoke purchase under law, all advertising fees are due in advance of being featured on Our Site, and as such are exempt from any refunds or replacements, once they have been booked and authorised. Only if the advertisement contains errors caused by our negligence shall they be replaced, extended or refunded.</li>\r\n				<li>If you have booked a series or block of advertising and your account is closed by Us, then any remaining unused, but pre-paid advertising remaining after the point and date of your termination, will be refunded.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Intellectual Property Rights</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>With the exception of User Content, all<strong> </strong>Content included on Our Site and the copyright and other intellectual property rights subsisting in that Content, unless specifically labelled otherwise, belongs to or has been licensed by Us.&nbsp; All Content (including User Content) is protected by applicable United Kingdom and international intellectual property laws and treaties.</li>\r\n				<li>You may not reproduce, copy, distribute, sell, rent, sub-licence, store, or in any other manner re-use Content from Our Site unless given express written permission to do so by Us.</li>\r\n				<li>You may:\r\n				<ol>\r\n					<li>\r\n					<ol>\r\n						<li>Access, view and use Our Site in a web browser (including any web browsing capability built into other types of software or app);</li>\r\n						<li>Download Our Site (or any part of it) for caching;</li>\r\n						<li>Print one copy of any page(s) from Our Site;</li>\r\n						<li>Download extracts from pages on Our Site; and</li>\r\n						<li>Save pages from Our Site for later and/or offline viewing.</li>\r\n					</ol>\r\n					</li>\r\n				</ol>\r\n				</li>\r\n				<li>Our status as the owner and author of the Content on Our Site (or that of identified licensors, as appropriate) must always be acknowledged.</li>\r\n				<li>You may not re-use any Content printed, saved or downloaded from Our Site for commercial purposes without first obtaining a licence from Us (or our licensors, as appropriate) to do so.&nbsp; This does not prohibit the normal access, viewing and use of Our Site whether by business users or consumers.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Links to Our Site</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>You may link to Our Site provided that:\r\n				<ol>\r\n					<li>\r\n					<ol>\r\n						<li>you do so in a fair and legal manner;</li>\r\n						<li>you do not do so in a manner that suggests any form of association, endorsement or approval on Our part where none exists;</li>\r\n						<li>you do not use any logos or trade marks displayed on Our Site without Our express written permission; and</li>\r\n						<li>you do not do so in a way that is calculated to damage Our reputation or to take unfair advantage of it.</li>\r\n					</ol>\r\n					</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>You may not link to any page other than the homepage of Our Site. Deep linking to other pages requires Our express written permission.&nbsp;</li>\r\n				<li>Framing or embedding of Our Site on other websites is not permitted without Our express written permission</li>\r\n				<li>You may not link to Our Site from any other site the main content of which contains material that:\r\n				<ol>\r\n					<li>\r\n					<ol>\r\n						<li><a name=\"_Hlk43996834\"> is sexually explicit; is obscene, deliberately offensive, hateful or otherwise inflammatory; promotes violence; promotes or assists in any form of unlawful activity; discriminates against, or is in any way defamatory of, any person, group or class of persons, race, gender, religion, nationality, disability, sexual orientation, or age; is sexist, blasphemous to religion, is intended or is otherwise likely to threaten, harass, annoy, alarm, inconvenience, upset, or embarrass another person; is calculated or is otherwise likely to deceive another person; is intended or is otherwise likely to infringe (or to threaten to infringe) another person&rsquo;s privacy;</a></li>\r\n						<li>misleadingly impersonates any person or otherwise misrepresents the identity or affiliation of a particular person in a way that is calculated to deceive;</li>\r\n						<li>implies any form of affiliation with Us where none exists;</li>\r\n						<li>infringes, or assists in the infringement of, the intellectual property rights (including, but not limited to, copyright, trademarks and database rights) of any other party; or</li>\r\n						<li>is made in breach of any legal duty owed to a third party including, but not limited to, contractual duties and duties of confidence.</li>\r\n					</ol>\r\n					</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Links to Other Sites</strong></li>\r\n		<li>\r\n		<p>6.1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Links to other sites may be included on Our Site. Unless expressly stated, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; these sites are not under Our control. We neither assume nor accept any&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; responsibility or liability for the content of third-party sites. The inclusion of a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; link to another site on Our Site is for information only and does not imply any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; endorsement of the sites themselves or of those in control of them. You &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; should check the Terms of Use and Privacy/ Cookies Policy of any third-party &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sites we link to as they may not be the same as ours.</p>\r\n		</li>\r\n		<li><strong>Liability and Disclaimers</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>Nothing on Our Site constitutes actual advice on which you should rely. It is provided for information purposes only. If you are unsure whether our Services meet your needs, professional or specialist advice should always be sought before taking any action on the basis of any information provided on Our Site.</li>\r\n				<li>We act only as a Conduit platform bringing together the Advertisers and searchers. We are not contractually bound or connected if you rent, lease or hire any accommodation from an Advertiser. Nor for any arrangements or requirements or disputes or incidents, between the Advertiser, Property owner or Customer/ Hirer. You hereby agree not to hold us responsible for anything that individual Users of our site post, advertise or do.</li>\r\n				<li>Although we have no obligation to monitor the information posted on our site, we do encourage any possible infringements, causes for concern or complaints/ corrections to be reported to us via our Contact Us page, so we can take appropriate action where necessary.</li>\r\n				<li>We have not personally vetted the facilities or premises advertised. Whilst we require proof of ownership of the property and the right to rent it from Advertisers, we cannot vouch that such property is exactly suited to a Customer&rsquo;s needs. We recommend that all Advertisers and Customers put in place and conduct their own due diligence and safety/ comfort checks to ensure they are happy with any arrangement between them. You should exercise the same due caution that you would in any circumstance or renting or hiring a property/ accommodation.</li>\r\n				<li>Insofar as is permitted by law, We make no representation, warranty, or guarantee that Our Site will meet your requirements, that it will not infringe the rights of third parties, that it will be compatible with all software and hardware, or that it will be secure.</li>\r\n				<li>We make reasonable efforts to ensure that the Content on Our Site is complete, accurate, and up to date. We do not, however, make any representations, warranties or guarantees (whether express or implied) that the Content is complete, accurate, or up to date. Please note that this exception does not apply to information concerning services for sale through Our Site.&nbsp; Please refer to Our Terms and Conditions of Sale for more information.</li>\r\n				<li>To the fullest extent permissible by law, We accept no liability to any User for any loss or damage, whether foreseeable or otherwise, in contract, tort (including negligence), for breach of statutory duty, or otherwise, arising out of or in connection with the use of (or inability to use) Our Site or the use of or reliance upon any Content (including User Content) included on Our Site.</li>\r\n				<li>If you are a business user, we hereby exclude all implied conditions, warranties, representations or other terms that may apply to Our Site or Content.&nbsp; We will not be liable for any loss of profits, sales, business or revenue; loss of business opportunity, goodwill or reputation; loss of anticipated savings; business interruption; or for any indirect or consequential loss or damage.</li>\r\n				<li>If you are a Consumer user, please note that Our Site is mostly intended for business use. If you have an enquiry as an individual Consumer then you should contact us directly with any request/s.</li>\r\n				<li>We neither assume nor accept responsibility or liability arising out of any disruption or non-availability of Our Site resulting from external causes beyond our reasonable control including, but not limited to, ISP equipment failure, host equipment failure, communications network failure, natural events, strikes, acts of war, government legislation, pandemic or lockdown restrictions or other Force Majeure legal restrictions. In line with the foregoing, in the event of Us not being able to fulfil any pre-paid advertisement period, Advertisers agree that a full refund of the remaining Advertising period by Us, shall act as full and final settlement sum in respect of any unused period so affected.</li>\r\n				<li>Nothing in these Terms excludes or restricts Our liability for fraud or fraudulent misrepresentation, for death or personal injury resulting from negligence, or for any other forms of liability which cannot be excluded or restricted by law.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Viruses, Malware and Security</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>We exercise all reasonable skill and care to ensure that Our Site is secure and free from viruses and other malware.</li>\r\n				<li>You are responsible for protecting your hardware, software, data and other material from viruses, malware, and other internet security risks.</li>\r\n				<li>You must not deliberately introduce viruses or other malware, or any other material which is malicious or technologically harmful either to or via Our Site.</li>\r\n				<li>You must not attempt to gain unauthorised access to any part of Our Site, the server on which Our Site is stored, or any other server, computer, or database connected to Our Site.</li>\r\n				<li>You must not attack Our Site by means of a denial-of-service attack, a distributed denial of service attack, or by any other means.</li>\r\n				<li>By breaching the provisions of these clauses, you may be committing a criminal offence under the Computer Misuse Act 1990.&nbsp; Any and all such breaches will be reported to the relevant law enforcement authorities and We will cooperate fully with those authorities by disclosing your identity to them.&nbsp; Your right to use Our Site will cease immediately in the event of such a breach.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Acceptable Usage Policy</strong>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>You may only use Our Site in a manner that is lawful and that complies with the provisions of this Clause 11.&nbsp; Specifically:\r\n				<ol>\r\n					<li>\r\n					<ol>\r\n						<li>you must ensure that you comply fully with any and all local, national or international laws and/or regulations;</li>\r\n						<li>you must not use Our Site in any way, or for any purpose, that is unlawful or fraudulent;</li>\r\n						<li>you must not use Our Site to knowingly send, upload, or in any other way transmit data that contains any form of virus or other malware, or any other code designed to adversely affect computer hardware, software, or data of any kind; and</li>\r\n						<li>you must not use Our Site in any way, or for any purpose, that is intended to harm any person or persons in any way.</li>\r\n					</ol>\r\n					</li>\r\n				</ol>\r\n				</li>\r\n				<li>When submitting User Content (or communicating in any other way using Our Site), you must not submit, communicate or otherwise do anything that:</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>is sexually explicit; is obscene, deliberately offensive, hateful or otherwise inflammatory; promotes violence; promotes or assists in any form of unlawful activity; discriminates against, or is in any way defamatory of, any person, group or class of persons, race, gender, religion, nationality, disability, sexual orientation, or age; is blasphemous to religion, is intended or is otherwise likely to threaten, harass, annoy, alarm, inconvenience, upset, or embarrass another person; is calculated or is otherwise likely to deceive another person; is intended or is otherwise likely to infringe (or to threaten to infringe) another person&rsquo;s privacy;</li>\r\n				<li>misleadingly impersonates any person or otherwise misrepresents the identity or affiliation of a particular person in a way that is calculated to deceive;</li>\r\n				<li>implies any form of affiliation with Us where none exists;</li>\r\n				<li>infringes, or assists in the infringement of, the intellectual property rights (including, but not limited to, copyright, trademarks and database rights) of any other party; or</li>\r\n				<li>is made in breach of any legal duty owed to a third party including, but not limited to, contractual duties and duties of confidence.</li>\r\n			</ol>\r\n			</li>\r\n			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We reserve the right to suspend or terminate your access to Our Site if &nbsp;&nbsp;&nbsp;&nbsp; you materially breach the provisions of this these Terms.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Specifically, We may take one or more of the following actions:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n			<ol>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspend, whether temporarily or permanently, any Account you may have and/or your right to access Our Site;</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; remove any User Content submitted by you that violates this Acceptable Usage Policy;</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; issue you with a written warning;</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; take legal proceedings against you for reimbursement of any and all relevant costs on an indemnity basis resulting from your breach;</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; take further legal action against you as appropriate;</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disclose such information to law enforcement authorities as required or as We deem reasonably necessary; and/or any other actions which We deem reasonably appropriate (and lawful).</li>\r\n				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We hereby exclude any and all liability arising out of any actions (including those set out above) that We may take in response to breaches of these Terms.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Privacy and Cookies</strong></li>\r\n		<li>\r\n		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.1&nbsp;&nbsp;&nbsp;&nbsp; Use of Our Site is also governed by Our Cookie Policy and our Privacy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Policy, available from the footer of our Homepage. These policies are &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; incorporated into these Terms by this reference.</p>\r\n		</li>\r\n		<li><strong>Changes to these Terms</strong>\r\n		<ol>\r\n			<li>We may alter these Terms at any time. Any such changes will &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; become binding on you upon your first use of Our Site after any of the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes have &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; been implemented. You are therefore advised to check &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; this page from time to time.</li>\r\n			<li>In the event of any conflict between the current version of these Terms &nbsp;&nbsp;&nbsp;&nbsp; of Use and any previous version(s), the provisions current and in effect &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; shall prevail unless it is expressly stated otherwise.</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Contacting Us</strong></li>\r\n		<li>\r\n		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12.1 &nbsp;&nbsp;&nbsp; To contact Us, please email Us or by using&nbsp;&nbsp; any of the methods which &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; are provided on Our Contact Us page.</p>\r\n		</li>\r\n		<li><strong>Communications from Us</strong>\r\n		<ol>\r\n			<li>If We have your contact details (if, for example, you have an Account) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We may from time to time send you important notices by email.&nbsp; Such &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; notices may relate to matters including, but not limited to, service &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes, changes to &nbsp; these Terms, Our conditions of sale, and any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; changes to your Account.</li>\r\n			<li>We will never send you marketing emails of any kind without your express consent.&nbsp; If you do give such consent, you may opt out at any &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.&nbsp; Any and all marketing emails sent by Us include an unsubscribe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; link. If you opt out of receiving emails from us at any time, it may take &nbsp; up to 7 business days for Us to comply with your request.&nbsp; During that &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time, you may continue to receive emails from Us.</li>\r\n			<li>For questions or complaints about communications from Us (including, &nbsp;&nbsp;&nbsp;&nbsp; but not limited to marketing emails), please contact Us by email shown &nbsp; in 12 above or using our Contact Us page.</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Data Protection</strong>\r\n		<ol>\r\n			<li>These clauses outline our compliance with UKGDPR and The Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Protection Act.</li>\r\n			<li>All personal information that We may use will be collected, processed, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and held in accordance with the provisions of EU Regulation 2016/679 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; General Data Protection Regulation (&ldquo;GDPR&rdquo;) and the UKGDPR and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; your rights under them depending on your location.</li>\r\n			<li>For complete details of Our collection, processing, storage, and &nbsp;&nbsp;&nbsp;&nbsp; retention of personal data including, but not limited to, the purpose(s) for which personal data is used, the legal basis or bases for using it, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; details of your rights and how to exercise them, and personal data &nbsp;&nbsp;&nbsp;&nbsp; sharing (where applicable), please refer to Our Privacy and Cookie &nbsp;&nbsp;&nbsp;&nbsp; Policy available at the footer of our Homepage.</li>\r\n		</ol>\r\n		</li>\r\n		<li><strong>Law and Jurisdiction</strong>\r\n		<ol>\r\n			<li>These Terms and the relationship between you and Us (whether&nbsp; &nbsp;&nbsp; contractual or otherwise) shall only be governed by and construed&nbsp; in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; full accordance with the Laws of England &amp; Wales.</li>\r\n			<li>If you are a business, any disputes concerning these Terms, the &nbsp;&nbsp;&nbsp;&nbsp; relationship between you and Us, or any matters arising therefrom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or associated therewith (whether contractual or otherwise) shall be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject to the exclusive jurisdiction of the courts of England.</li>\r\n			<li>If you are a Consumer, any disputes concerning these Terms, the &nbsp; relationship between you and Us, or any matters arising therefrom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or associated therewith (whether contractual or otherwise) shall be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subject to the exclusive&nbsp; jurisdiction of the courts of England.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>', '2021-11-03 15:55:22', '0000-00-00 00:00:00');
INSERT INTO `pages` (`id`, `publish`, `pgtitle`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(2, 0, 'Privacy Policy', 'privacy-policy', '<p>We do not Sell or disclose your personal information to any third parties. It is your responsibility to decide what Property details etc you give to who. Once you delete your account your information is immediately removed from public view.</p>', '2021-10-26 06:21:59', '0000-00-00 00:00:00'),
(3, 0, 'Cookie Policy', 'cookie-policy', '<p><strong>BACKGROUND:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We understand that your privacy is important to you and that you care about how your personal data is used. We respect and value the privacy of everyone who visits this website, ukshortlets.com (&ldquo;Our Site&rdquo;) or deals with our Company and will only collect and use personal data in ways that are described here, and in a way that is consistent with our obligations and your rights under the law.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please read this Privacy Policy carefully and ensure that you understand it. Your acceptance of this Privacy Policy is requested at the point you start using Our Website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Definitions and Interpretation</strong></li>\r\n</ol>\r\n\r\n<p>In this Policy the following terms shall have the following meanings:&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:554px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Account&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means an account that may be required to access and/or use certain areas and features of Our Site;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Cookie&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means a small text file placed on your computer or device by Our Site when you visit certain parts of Our<strong> </strong>Site and/or when you use certain features of Our<strong> </strong>Site. Details of the Cookies used by Our Site are set out in Part 13, below; and</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Cookie Law&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2003, the UKGDPR 2021, and the UK Data Protection Act.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Information About Us</strong></p>\r\n\r\n<p>Our Site is owned and operated by UK Short Lets Ltd., a company registered in England &amp; Wales under Company Number 11334837. Our registered office is located at 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom. Our Principal place of business is via our website.</p>\r\n\r\n<p>Our Data Protection Officer is D.Richardson.</p>\r\n\r\n<ol>\r\n	<li><strong>What Does This Policy Cover?</strong></li>\r\n</ol>\r\n\r\n<p>This Privacy Policy applies only to your use of Our Site. Our<strong> </strong>Site may contain links to other websites. Please note that we<strong> </strong>have no control over how your data is collected, stored, or used by other websites and we advise you to check the privacy policies of any such websites before providing any data to them.</p>\r\n\r\n<ol>\r\n	<li><strong>What Is Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>Personal data is defined by the General Data Protection Regulation (EU Regulation 2016/679) (the &ldquo;GDPR&rdquo; and now in UK Law as &ldquo;The UKGDPR 2021&rdquo;) and the UK Data Protection Act 2018 (collectively, &ldquo;the Data Protection Legislation&rdquo;) as &lsquo;any information relating to an identifiable person who can be directly or indirectly identified in particular by reference to an identifier&rsquo;.</p>\r\n\r\n<p>Personal data is, in simpler terms, any information about you that enables you to be identified. Personal data covers obvious information such as your name and contact details, but it also covers less obvious information such as identification numbers, electronic location data, and other online identifiers.</p>\r\n\r\n<ol>\r\n	<li><strong>What Are My Rights?</strong></li>\r\n</ol>\r\n\r\n<p>Under the Data Protection Legislation, you have the following rights, which we<strong> </strong>will always work to uphold:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>The right to be informed about our collection and use of your personal data. This Privacy Policy should tell you everything you need to know, but you can always contact us to find out more or to ask any questions.</li>\r\n				<li>The right to access the personal data we hold about you. This policy will tell you how to do this.</li>\r\n				<li>The right to have your personal data rectified if any of your personal data held by us is inaccurate or incomplete. Please contact us using the details in Part 15 to find out more.</li>\r\n				<li>The right to be forgotten, i.e. the right to ask us to delete or otherwise dispose of any of your personal data that we hold. Please contact us using the details in Part 14 to find out more.</li>\r\n				<li>The right to restrict (i.e. prevent) the processing of your personal data.</li>\r\n				<li>The right to object to us using your personal data for a particular purpose or purposes.</li>\r\n				<li>The right to withdraw consent. This means that, if we are relying on your consent as the legal basis for using your personal data, you are free to withdraw that consent at any time.</li>\r\n				<li>The right to data portability. This means that, if you have provided personal data to us directly, we are<strong> </strong>using it with your consent or for the performance of a contract, and that data is processed using automated means, you can ask us for a copy of that personal data to re-use with another service or business in many cases.</li>\r\n				<li>Rights relating to automated decision-making and profiling. We do not use your personal data in this way.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>For more information about our use of your personal data or exercising your rights as outlined above, please contact us<strong> </strong>using the details provided in Part 14.</p>\r\n\r\n<p>It is important that your personal data is kept accurate and up to date. If any of the personal data we<strong> </strong>hold about you changes, please keep us informed as long as We have that data.</p>\r\n\r\n<p>Further information about your rights can also be obtained from the Information Commissioner&rsquo;s Office or your local Citizens or Consumer Advice Bureau.</p>\r\n\r\n<p>If you are located in the United Kingdom or European Union, you have any cause for complaint about our use of your personal data, you have the right to lodge a complaint with the Information Commissioner&rsquo;s Office.</p>\r\n\r\n<p>We<strong> </strong>would welcome the opportunity to resolve your concerns ourselves, so please contact us first, using the details in Part 14.</p>\r\n\r\n<ol>\r\n	<li><strong>What Data Do You Collect and How?</strong></li>\r\n</ol>\r\n\r\n<p>Depending upon your use of Our Site, we<strong> </strong>may collect and hold some or all of the personal and non-personal data set out in the table below, using the methods also set out in the table. Please also see out tables for more information about our use of Cookies and similar technologies and our Cookie Policy. We do not collect any &lsquo;special category&rsquo; or &lsquo;sensitive&rsquo; personal data or<strong> </strong>personal data relating to children or data relating to criminal convictions and/or offences.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:617px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:308px\">\r\n			<p><strong>Type of Data Collected</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:309px\">\r\n			<p><strong>How We Collect the Data</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Identity Information including name, title or salutation, DOB, address.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your emailing us or opening an account with us.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Contact information including address, email address and phone number.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your contacting us or opening an account with us.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Submission of any personal documents, advertising information or application forms.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the submission button on our website where indicated. This is simply a direct delivery to place on Our Website and not to any third-party.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Profile information including interests, browsing history, preferences and login details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your use of our website and your individual member account.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Technical information including IP address, browser type, browsing history.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the cookies placed in our site. Some are temporary some are permanent.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Data from relevant third-parties including mailing and marketing preferences.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the cookies placed on our website and associated links.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>How Do You Use My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>6.1 Under current Data Protection Legislation, we must always have a lawful basis for using personal data. The following table describes how we<strong> </strong>may use your personal data, and our lawful bases for doing so:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:602px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:190px\">\r\n			<p><strong>What We Do</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:205px\">\r\n			<p><strong>What Data We Use</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:206px\">\r\n			<p><strong>Our Lawful Basis</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Registering you on Our Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Personal details to identify you.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure that only valid and genuine users are registered and to prevent fraud or spam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Providing and managing your Account.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your preferences and personal details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure that our Website provides information to suit your needs and allow you to submit information.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Providing and managing your access to Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your personal login details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To provide our services to you and ensure your account&rsquo;s integrity.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Personalising and tailoring your experience on our<strong> </strong>Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Managing your preferences and opt-in/out wishes.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To make sure that you receive only information that is beneficial or of interest to you.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Administering Our Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your Account or personal details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To provide our services and enhance your experience.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Administering our business.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>All of the above.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure we are compliant with the appropriate regulations regarding record keeping, accounting and Privacy/ Data Management.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Supplying you with information by email and Post that you have opted into (you may opt-out at any time by letting us know or managing your own preferences.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>All of the above.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure our services comply with our mission and also our obligations under law.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6.2 With your permission and/or where permitted by law, we<strong> </strong>may also use your personal data for our own marketing purposes, which may include contacting you by email, text message or post with information, news, and offers on our products and services. You will not be sent any unlawful marketing or spam.</p>\r\n\r\n<p>6.3 As we are based within the UK, we will always work to fully protect your rights and comply with our obligations under the Data Protection Legislation and the Privacy and Electronic Communications (EC Directive) Regulations 2003, The UKGDPR and other applicable Data Protection Regulations. You will always have the opportunity to opt-out. We<strong> </strong>will always obtain your express opt-in consent before sharing your personal data with any third-parties for marketing purposes and you will also be able to opt-out at any time.</p>\r\n\r\n<p>6.4<strong> </strong>In some circumstances, where permitted or required by law, we may process your personal data without your knowledge or consent. This is where we are obliged to release your data to appropriate government or police bodies, for the purposes of crime prevention and fraud detection. This will only be done within the bounds of the Data Protection Legislation and your legal rights.</p>\r\n\r\n<ol>\r\n	<li><strong>How Long Will You Keep My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>7.1 We will not keep your personal data for any longer than is necessary in light of the reason(s) for which it was first collected. Your personal data will therefore be kept for the following periods (or, where there is no fixed period, the following factors will be used to determine how long it is kept):</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:602px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:293px\">\r\n			<p><strong>Type of Data</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:309px\">\r\n			<p><strong>How Long We Keep It</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Identity Information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Contact information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Business information including any purchases or transactions with the Website or Company</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Payment information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Profile or account information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period up to u7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Technical information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of up to 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>How and Where Do You Store or Transfer My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>We will usually<strong> </strong>only Host or store your personal data within the UK. This means that it will be fully protected under the UK&rsquo;s Data Protection Legislation.</p>\r\n\r\n<p>8.1 We<strong> </strong>occasionally may have to store or transfer some of your personal data within the European Economic Area (the &ldquo;EEA&rdquo;). The EEA consists of all EU member states, plus Norway, Iceland, and Liechtenstein. This is only according to strict controls and protections being in place, to comply with the GDPR. This also means that your personal data will be fully protected under UK Data Protection Legislation, (UKGDPR) and/or to equivalent standards by law.</p>\r\n\r\n<p>8.2 Our Website ensures that personal data is protected by requiring any companies within our group to follow the same rules with respect to personal data usage. These are known as &ldquo;binding corporate rules&rdquo;.</p>\r\n\r\n<p>8.3 The security of your personal data is essential to us, and to protect your data, we take a number of important measures, including the following:</p>\r\n\r\n<ul>\r\n	<li>limiting access to your personal data to those employees, agents, contractors, and other third parties with a legitimate need to know and ensuring that they are subject to duties of confidentiality;</li>\r\n	<li>procedures for dealing with data breaches (the accidental or unlawful destruction, loss, alteration, unauthorised disclosure of, or access to, your personal data) including notifying you and/or the Information Commissioner&rsquo;s Office where we are legally required to do so;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>Do You Share My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p><a name=\"Text89\">9.1 We<strong> </strong>will not share any of your personal data with any third-parties for any purposes, subject to the following exceptions;</a></p>\r\n\r\n<p>9.2 For the purposes of arranging to contact you with view to arranging appointments or installations or surveys. We may pass your details to the allocated and authorised installation team, or to our nominated legal representative or credit control representative.</p>\r\n\r\n<p>9.3 If we sell, transfer, or merge parts of our business or assets, your personal data may be transferred to a third party. Any new owner of our business may continue to use your personal data in the same way(s) that we have used it, as specified in this Privacy Policy.</p>\r\n\r\n<p>9.4 In some limited circumstances, we may be legally required to share certain personal data, which might include yours, if we are involved in legal proceedings or complying with legal obligations, such as a court order, or the instructions of a government authority.</p>\r\n\r\n<ol>\r\n	<li><strong>How Can I Control My Personal Data?</strong>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>In addition to your rights under the Data Protection Legislation, set out in Part 5, when<strong> </strong>you submit personal data via Our Site, you may be given options to restrict our use of your personal data. In particular, we aim to give you strong controls on our use of your data for direct marketing purposes (including the ability to opt-out of receiving emails from us which you may do by unsubscribing using the links provided in our emails<strong> </strong>and<strong> </strong>at the point of providing your details and by managing your Account.</li>\r\n			<li>If you are in the UK, you may also wish to sign up to one or more of the preference services operating in the UK: The Telephone Preference Service (&ldquo;the TPS&rdquo;), the Corporate Telephone Preference Service (&ldquo;the CTPS&rdquo;), and the Mailing Preference Service (&ldquo;the MPS&rdquo;). These may help to prevent you receiving unsolicited marketing. Please note, however, that these services will not prevent you from receiving marketing communications from Us that you have consented to receiving.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Can I Withhold Information?</strong></li>\r\n</ol>\r\n\r\n<p>11.1 You may access certain areas of Our Site without providing any personal data at all. However, to use all features and functions available on Our Site you may be required to submit or allow for the collection of certain data.</p>\r\n\r\n<p>You may restrict our use of Cookies. For more information, see our Cookie Policy in Section 13.</p>\r\n\r\n<ol>\r\n	<li><strong>How Can I Access My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>12.1 If you want to know what personal data we hold about you, you can ask us for details of that personal data and for a copy of it (where any such personal data is held). This is known as a &ldquo;subject access request&rdquo;. There is no fee for this disclosure request.</p>\r\n\r\n<p>12.2 All subject access requests should be made in writing and sent to the email or postal addresses shown in Part 14. To make this as easy as possible for you, a Subject Access Request Form is available for you to use upon request. You do not have to use this form, but it is the easiest way to tell us everything we need to know to respond to your request as quickly as possible.</p>\r\n\r\n<p>12.3 There is not normally any charge for a subject access request. However, if your request is &lsquo;manifestly unfounded or excessive&rsquo; (for example, if you make repetitive requests) a fee of &pound;30.00 may be charged to cover our administrative costs in responding.</p>\r\n\r\n<p>12.4 We will respond to your subject access request within 14 days and, in any case, not more than one month of receiving it. Normally, we aim to provide a complete response, including a copy of your personal data within that time. In some cases, however, particularly if your request is more complex, more time may be required up to a maximum of three months from the date we receive your request. You will be kept fully informed of our progress.</p>\r\n\r\n<ol>\r\n	<li><strong>How Do You Use Cookies?</strong></li>\r\n</ol>\r\n\r\n<p>13.1 Our Site may place and access certain first-party Cookies on your computer or device. First-party Cookies are those placed directly by us and are used only by us. We use Cookies to facilitate and improve your experience of Our Site and to provide and improve our products and services. We have carefully chosen these Cookies and have taken steps to ensure that your privacy and personal data is protected and respected at all times.</p>\r\n\r\n<p>13.2 All Cookies used by and on Our Site are used in accordance with current Cookie Law. Before Cookies are placed on your computer or device, you will be shown a Consent Pop-Up requesting your consent to set those Cookies. By giving your consent to the placing of Cookies you are enabling us to provide the best possible experience and service to you. You may, if you wish, deny consent to the placing of Cookies; however certain features of Our Site may not function fully or as intended. You will be given the opportunity to allow only first-party Cookies and block third-party Cookies.</p>\r\n\r\n<p>13.3 Certain features of Our Site depend on Cookies to function. Cookie Law deems these Cookies to be &ldquo;strictly necessary&rdquo;. These Cookies are shown in the table below. Your consent will not be sought to place these Cookies, but it is still important that you are aware of them. You may still block these Cookies by changing your internet browser&rsquo;s settings as detailed below, but please be aware that Our Site may not work properly if you do so. We have taken great care to ensure that your privacy is not at risk by allowing them.</p>\r\n\r\n<p>13.4 Our<strong> </strong>Site uses analytics services provided by companies such as Google. Website analytics refers to a set of tools used to collect and analyse anonymous usage information, enabling Us to better understand how Our Site is used. This, in turn, enables us to improve Our Site and the products and services offered through it.</p>\r\n\r\n<p>13.5 The analytics service(s) used by Our Site use(s) Cookies to gather the required information. You do not have to allow us<strong> </strong>to use these Cookies, however whilst our<strong> </strong>use of them does not pose any risk to your privacy or your safe use of Our Site, it does enable us to continually improve Our Site, making it a better and more useful experience for you.</p>\r\n\r\n<p>13.6 In addition to the controls that we provide, you can choose to enable or disable Cookies in your internet browser. Most internet browsers also enable you to choose whether you wish to disable all Cookies or only third-party Cookies. By default, most internet browsers accept Cookies, but this can be changed. For further details, please consult the help menu in your internet browser or the documentation that came with your device.</p>\r\n\r\n<p>13.7 You can choose to delete Cookies on your computer or device at any time, however you may lose any information that enables you to access Our Site more quickly and efficiently including, but not limited to, login and personalisation settings.</p>\r\n\r\n<p>13.8 It is recommended that you keep your internet browser and operating system up-to-date and that you consult the help and guidance provided by the developer of your internet browser and manufacturer of your computer or device if you are unsure about adjusting your privacy settings.</p>\r\n\r\n<ol>\r\n	<li><strong>How Do I Contact You?</strong></li>\r\n</ol>\r\n\r\n<p>To contact us about anything to do with your personal data and data protection, including to make a subject access request, please use the following details (for the attention of &ldquo;The Controller of Data&rdquo;):</p>\r\n\r\n<p><strong>Email address:</strong> Pls use &lsquo;Contact Us&rsquo; page on website.</p>\r\n\r\n<p><strong>Postal Address:</strong> 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom.</p>\r\n\r\n<p>15.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Changes to this Privacy Policy.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15.1 We may change this Privacy Notice from time to time. This may be necessary, for example, if the law changes, or if we change our business in a way that affects personal data protection.</p>\r\n\r\n<p>15.2 Any changes will be immediately posted on Our Website and you will be deemed to have accepted the terms of the Privacy Policy on your first use of Our Site following the alterations. We recommend that you check this page regularly to keep up to date. This Privacy Policy was last updated on 1st September 2021.</p>', '2021-10-26 06:23:59', '0000-00-00 00:00:00');
INSERT INTO `pages` (`id`, `publish`, `pgtitle`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 1, 'Privacy & Cookie & Data Protection Policy', 'privacy-cookie-data-protection-policy', '<p>&nbsp;</p>\r\n\r\n<p><strong>BACKGROUND:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We understand that your privacy is important to you and that you care about how your personal data is used. We respect and value the privacy of everyone who visits this website, ukshortlets.com (&ldquo;Our Site&rdquo;) or deals with our Company and will only collect and use personal data in ways that are described here, and in a way that is consistent with our obligations and your rights under the law.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please read this Privacy Policy carefully and ensure that you understand it. Your acceptance of this Privacy Policy is requested at the point you start using Our Website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Definitions and Interpretation</strong></li>\r\n</ol>\r\n\r\n<p>In this Policy the following terms shall have the following meanings:&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:554px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Account&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means an account that may be required to access and/or use certain areas and features of Our Site;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Cookie&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means a small text file placed on your computer or device by Our Site when you visit certain parts of Our<strong> </strong>Site and/or when you use certain features of Our<strong> </strong>Site. Details of the Cookies used by Our Site are set out in Part 13, below; and</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:193px\">\r\n			<p><strong>&ldquo;Cookie Law&rdquo;</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:361px\">\r\n			<p>means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2003, the UKGDPR 2021, and the UK Data Protection Act.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Information About Us</strong></p>\r\n\r\n<p>Our Site is owned and operated by UK Short Lets Ltd., a company registered in England &amp; Wales under Company Number 11334837. Our registered office is located at 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom. Our Principal place of business is via our website.</p>\r\n\r\n<p>Our Data Protection Officer is D.Richardson.</p>\r\n\r\n<ol>\r\n	<li><strong>What Does This Policy Cover?</strong></li>\r\n</ol>\r\n\r\n<p>This Privacy Policy applies only to your use of Our Site. Our<strong> </strong>Site may contain links to other websites. Please note that we<strong> </strong>have no control over how your data is collected, stored, or used by other websites and we advise you to check the privacy policies of any such websites before providing any data to them.</p>\r\n\r\n<ol>\r\n	<li><strong>What Is Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>Personal data is defined by the General Data Protection Regulation (EU Regulation 2016/679) (the &ldquo;GDPR&rdquo; and now in UK Law as &ldquo;The UKGDPR 2021&rdquo;) and the UK Data Protection Act 2018 (collectively, &ldquo;the Data Protection Legislation&rdquo;) as &lsquo;any information relating to an identifiable person who can be directly or indirectly identified in particular by reference to an identifier&rsquo;.</p>\r\n\r\n<p>Personal data is, in simpler terms, any information about you that enables you to be identified. Personal data covers obvious information such as your name and contact details, but it also covers less obvious information such as identification numbers, electronic location data, and other online identifiers.</p>\r\n\r\n<ol>\r\n	<li><strong>What Are My Rights?</strong></li>\r\n</ol>\r\n\r\n<p>Under the Data Protection Legislation, you have the following rights, which we<strong> </strong>will always work to uphold:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>The right to be informed about our collection and use of your personal data. This Privacy Policy should tell you everything you need to know, but you can always contact us to find out more or to ask any questions.</li>\r\n				<li>The right to access the personal data we hold about you. This policy will tell you how to do this.</li>\r\n				<li>The right to have your personal data rectified if any of your personal data held by us is inaccurate or incomplete. Please contact us using the details in Part 15 to find out more.</li>\r\n				<li>The right to be forgotten, i.e. the right to ask us to delete or otherwise dispose of any of your personal data that we hold. Please contact us using the details in Part 14 to find out more.</li>\r\n				<li>The right to restrict (i.e. prevent) the processing of your personal data.</li>\r\n				<li>The right to object to us using your personal data for a particular purpose or purposes.</li>\r\n				<li>The right to withdraw consent. This means that, if we are relying on your consent as the legal basis for using your personal data, you are free to withdraw that consent at any time.</li>\r\n				<li>The right to data portability. This means that, if you have provided personal data to us directly, we are<strong> </strong>using it with your consent or for the performance of a contract, and that data is processed using automated means, you can ask us for a copy of that personal data to re-use with another service or business in many cases.</li>\r\n				<li>Rights relating to automated decision-making and profiling. We do not use your personal data in this way.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>For more information about our use of your personal data or exercising your rights as outlined above, please contact us<strong> </strong>using the details provided in Part 14.</p>\r\n\r\n<p>It is important that your personal data is kept accurate and up to date. If any of the personal data we<strong> </strong>hold about you changes, please keep us informed as long as We have that data.</p>\r\n\r\n<p>Further information about your rights can also be obtained from the Information Commissioner&rsquo;s Office or your local Citizens or Consumer Advice Bureau.</p>\r\n\r\n<p>If you are located in the United Kingdom or European Union, you have any cause for complaint about our use of your personal data, you have the right to lodge a complaint with the Information Commissioner&rsquo;s Office.</p>\r\n\r\n<p>We<strong> </strong>would welcome the opportunity to resolve your concerns ourselves, so please contact us first, using the details in Part 14.</p>\r\n\r\n<ol>\r\n	<li><strong>What Data Do You Collect and How?</strong></li>\r\n</ol>\r\n\r\n<p>Depending upon your use of Our Site, we<strong> </strong>may collect and hold some or all of the personal and non-personal data set out in the table below, using the methods also set out in the table. Please also see out tables for more information about our use of Cookies and similar technologies and our Cookie Policy. We do not collect any &lsquo;special category&rsquo; or &lsquo;sensitive&rsquo; personal data or<strong> </strong>personal data relating to children or data relating to criminal convictions and/or offences.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:617px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:308px\">\r\n			<p><strong>Type of Data Collected</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:309px\">\r\n			<p><strong>How We Collect the Data</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Identity Information including name, title or salutation, DOB, address.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your emailing us or opening an account with us.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Contact information including address, email address and phone number.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your contacting us or opening an account with us.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Submission of any personal documents, advertising information or application forms.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the submission button on our website where indicated. This is simply a direct delivery to place on Our Website and not to any third-party.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Profile information including interests, browsing history, preferences and login details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via your use of our website and your individual member account.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Technical information including IP address, browser type, browsing history.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the cookies placed in our site. Some are temporary some are permanent.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:308px\">\r\n			<p>Data from relevant third-parties including mailing and marketing preferences.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>Via the cookies placed on our website and associated links.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>How Do You Use My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>6.1 Under current Data Protection Legislation, we must always have a lawful basis for using personal data. The following table describes how we<strong> </strong>may use your personal data, and our lawful bases for doing so:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:602px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:190px\">\r\n			<p><strong>What We Do</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:205px\">\r\n			<p><strong>What Data We Use</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:206px\">\r\n			<p><strong>Our Lawful Basis</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Registering you on Our Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Personal details to identify you.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure that only valid and genuine users are registered and to prevent fraud or spam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Providing and managing your Account.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your preferences and personal details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure that our Website provides information to suit your needs and allow you to submit information.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Providing and managing your access to Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your personal login details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To provide our services to you and ensure your account&rsquo;s integrity.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Personalising and tailoring your experience on our<strong> </strong>Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Managing your preferences and opt-in/out wishes.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To make sure that you receive only information that is beneficial or of interest to you.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Administering Our Site.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>Your Account or personal details.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To provide our services and enhance your experience.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Administering our business.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>All of the above.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure we are compliant with the appropriate regulations regarding record keeping, accounting and Privacy/ Data Management.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:190px\">\r\n			<p>Supplying you with information by email and Post that you have opted into (you may opt-out at any time by letting us know or managing your own preferences.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:205px\">\r\n			<p>All of the above.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:206px\">\r\n			<p>To ensure our services comply with our mission and also our obligations under law.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6.2 With your permission and/or where permitted by law, we<strong> </strong>may also use your personal data for our own marketing purposes, which may include contacting you by email, text message or post with information, news, and offers on our products and services. You will not be sent any unlawful marketing or spam.</p>\r\n\r\n<p>6.3 As we are based within the UK, we will always work to fully protect your rights and comply with our obligations under the Data Protection Legislation and the Privacy and Electronic Communications (EC Directive) Regulations 2003, The UKGDPR and other applicable Data Protection Regulations. You will always have the opportunity to opt-out. We<strong> </strong>will always obtain your express opt-in consent before sharing your personal data with any third-parties for marketing purposes and you will also be able to opt-out at any time.</p>\r\n\r\n<p>6.4<strong> </strong>In some circumstances, where permitted or required by law, we may process your personal data without your knowledge or consent. This is where we are obliged to release your data to appropriate government or police bodies, for the purposes of crime prevention and fraud detection. This will only be done within the bounds of the Data Protection Legislation and your legal rights.</p>\r\n\r\n<ol>\r\n	<li><strong>How Long Will You Keep My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>7.1 We will not keep your personal data for any longer than is necessary in light of the reason(s) for which it was first collected. Your personal data will therefore be kept for the following periods (or, where there is no fixed period, the following factors will be used to determine how long it is kept):</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:602px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:1px solid black; vertical-align:top; width:293px\">\r\n			<p><strong>Type of Data</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#d9d9d9; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:309px\">\r\n			<p><strong>How Long We Keep It</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Identity Information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Contact information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Business information including any purchases or transactions with the Website or Company</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Payment information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Profile or account information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period up to u7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; vertical-align:top; width:293px\">\r\n			<p>Technical information</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:309px\">\r\n			<p>For a period of up to 7 (seven) years.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>How and Where Do You Store or Transfer My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>We will usually<strong> </strong>only Host or store your personal data within the UK. This means that it will be fully protected under the UK&rsquo;s Data Protection Legislation.</p>\r\n\r\n<p>8.1 We<strong> </strong>occasionally may have to store or transfer some of your personal data within the European Economic Area (the &ldquo;EEA&rdquo;). The EEA consists of all EU member states, plus Norway, Iceland, and Liechtenstein. This is only according to strict controls and protections being in place, to comply with the GDPR. This also means that your personal data will be fully protected under UK Data Protection Legislation, (UKGDPR) and/or to equivalent standards by law.</p>\r\n\r\n<p>8.2 Our Website ensures that personal data is protected by requiring any companies within our group to follow the same rules with respect to personal data usage. These are known as &ldquo;binding corporate rules&rdquo;.</p>\r\n\r\n<p>8.3 The security of your personal data is essential to us, and to protect your data, we take a number of important measures, including the following:</p>\r\n\r\n<ul>\r\n	<li>limiting access to your personal data to those employees, agents, contractors, and other third parties with a legitimate need to know and ensuring that they are subject to duties of confidentiality;</li>\r\n	<li>procedures for dealing with data breaches (the accidental or unlawful destruction, loss, alteration, unauthorised disclosure of, or access to, your personal data) including notifying you and/or the Information Commissioner&rsquo;s Office where we are legally required to do so;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>Do You Share My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p><a name=\"Text89\">9.1 We<strong> </strong>will not share any of your personal data with any third-parties for any purposes, subject to the following exceptions;</a></p>\r\n\r\n<p>9.2 For the purposes of arranging to contact you with view to arranging appointments or installations or surveys. We may pass your details to the allocated and authorised installation team, or to our nominated legal representative or credit control representative.</p>\r\n\r\n<p>9.3 If we sell, transfer, or merge parts of our business or assets, your personal data may be transferred to a third party. Any new owner of our business may continue to use your personal data in the same way(s) that we have used it, as specified in this Privacy Policy.</p>\r\n\r\n<p>9.4 In some limited circumstances, we may be legally required to share certain personal data, which might include yours, if we are involved in legal proceedings or complying with legal obligations, such as a court order, or the instructions of a government authority.</p>\r\n\r\n<ol>\r\n	<li><strong>How Can I Control My Personal Data?</strong>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>In addition to your rights under the Data Protection Legislation, set out in Part 5, when<strong> </strong>you submit personal data via Our Site, you may be given options to restrict our use of your personal data. In particular, we aim to give you strong controls on our use of your data for direct marketing purposes (including the ability to opt-out of receiving emails from us which you may do by unsubscribing using the links provided in our emails<strong> </strong>and<strong> </strong>at the point of providing your details and by managing your Account.</li>\r\n			<li>If you are in the UK, you may also wish to sign up to one or more of the preference services operating in the UK: The Telephone Preference Service (&ldquo;the TPS&rdquo;), the Corporate Telephone Preference Service (&ldquo;the CTPS&rdquo;), and the Mailing Preference Service (&ldquo;the MPS&rdquo;). These may help to prevent you receiving unsolicited marketing. Please note, however, that these services will not prevent you from receiving marketing communications from Us that you have consented to receiving.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n	<li><strong>Can I Withhold Information?</strong></li>\r\n</ol>\r\n\r\n<p>11.1 You may access certain areas of Our Site without providing any personal data at all. However, to use all features and functions available on Our Site you may be required to submit or allow for the collection of certain data.</p>\r\n\r\n<p>You may restrict our use of Cookies. For more information, see our Cookie Policy in Section 13.</p>\r\n\r\n<ol>\r\n	<li><strong>How Can I Access My Personal Data?</strong></li>\r\n</ol>\r\n\r\n<p>12.1 If you want to know what personal data we hold about you, you can ask us for details of that personal data and for a copy of it (where any such personal data is held). This is known as a &ldquo;subject access request&rdquo;. There is no fee for this disclosure request.</p>\r\n\r\n<p>12.2 All subject access requests should be made in writing and sent to the email or postal addresses shown in Part 14. To make this as easy as possible for you, a Subject Access Request Form is available for you to use upon request. You do not have to use this form, but it is the easiest way to tell us everything we need to know to respond to your request as quickly as possible.</p>\r\n\r\n<p>12.3 There is not normally any charge for a subject access request. However, if your request is &lsquo;manifestly unfounded or excessive&rsquo; (for example, if you make repetitive requests) a fee of &pound;30.00 may be charged to cover our administrative costs in responding.</p>\r\n\r\n<p>12.4 We will respond to your subject access request within 14 days and, in any case, not more than one month of receiving it. Normally, we aim to provide a complete response, including a copy of your personal data within that time. In some cases, however, particularly if your request is more complex, more time may be required up to a maximum of three months from the date we receive your request. You will be kept fully informed of our progress.</p>\r\n\r\n<ol>\r\n	<li><strong>How Do You Use Cookies?</strong></li>\r\n</ol>\r\n\r\n<p>13.1 Our Site may place and access certain first-party Cookies on your computer or device. First-party Cookies are those placed directly by us and are used only by us. We use Cookies to facilitate and improve your experience of Our Site and to provide and improve our products and services. We have carefully chosen these Cookies and have taken steps to ensure that your privacy and personal data is protected and respected at all times.</p>\r\n\r\n<p>13.2 All Cookies used by and on Our Site are used in accordance with current Cookie Law. Before Cookies are placed on your computer or device, you will be shown a Consent Pop-Up requesting your consent to set those Cookies. By giving your consent to the placing of Cookies you are enabling us to provide the best possible experience and service to you. You may, if you wish, deny consent to the placing of Cookies; however certain features of Our Site may not function fully or as intended. You will be given the opportunity to allow only first-party Cookies and block third-party Cookies.</p>\r\n\r\n<p>13.3 Certain features of Our Site depend on Cookies to function. Cookie Law deems these Cookies to be &ldquo;strictly necessary&rdquo;. These Cookies are shown in the table below. Your consent will not be sought to place these Cookies, but it is still important that you are aware of them. You may still block these Cookies by changing your internet browser&rsquo;s settings as detailed below, but please be aware that Our Site may not work properly if you do so. We have taken great care to ensure that your privacy is not at risk by allowing them.</p>\r\n\r\n<p>13.4 Our<strong> </strong>Site uses analytics services provided by companies such as Google. Website analytics refers to a set of tools used to collect and analyse anonymous usage information, enabling Us to better understand how Our Site is used. This, in turn, enables us to improve Our Site and the products and services offered through it.</p>\r\n\r\n<p>13.5 The analytics service(s) used by Our Site use(s) Cookies to gather the required information. You do not have to allow us<strong> </strong>to use these Cookies, however whilst our<strong> </strong>use of them does not pose any risk to your privacy or your safe use of Our Site, it does enable us to continually improve Our Site, making it a better and more useful experience for you.</p>\r\n\r\n<p>13.6 In addition to the controls that we provide, you can choose to enable or disable Cookies in your internet browser. Most internet browsers also enable you to choose whether you wish to disable all Cookies or only third-party Cookies. By default, most internet browsers accept Cookies, but this can be changed. For further details, please consult the help menu in your internet browser or the documentation that came with your device.</p>\r\n\r\n<p>13.7 You can choose to delete Cookies on your computer or device at any time, however you may lose any information that enables you to access Our Site more quickly and efficiently including, but not limited to, login and personalisation settings.</p>\r\n\r\n<p>13.8 It is recommended that you keep your internet browser and operating system up-to-date and that you consult the help and guidance provided by the developer of your internet browser and manufacturer of your computer or device if you are unsure about adjusting your privacy settings.</p>\r\n\r\n<ol>\r\n	<li><strong>How Do I Contact You?</strong></li>\r\n</ol>\r\n\r\n<p>To contact us about anything to do with your personal data and data protection, including to make a subject access request, please use the following details (for the attention of &ldquo;The Controller of Data&rdquo;):</p>\r\n\r\n<p><strong>Email address:</strong> Pls use &lsquo;Contact Us&rsquo; page on website.</p>\r\n\r\n<p><strong>Postal Address:</strong> 27 Old Gloucester Street, London, WC1N 3AX, United Kingdom.</p>\r\n\r\n<p>15.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Changes to this Privacy Policy.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15.1 We may change this Privacy Notice from time to time. This may be necessary, for example, if the law changes, or if we change our business in a way that affects personal data protection.</p>\r\n\r\n<p>15.2 Any changes will be immediately posted on Our Website and you will be deemed to have accepted the terms of the Privacy Policy on your first use of Our Site following the alterations. We recommend that you check this page regularly to keep up to date. This Privacy Policy was last updated on 1st September 2021.</p>', '2021-11-03 16:00:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partsacategories`
--

CREATE TABLE `partsacategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partcatname` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partsacategories`
--

INSERT INTO `partsacategories` (`id`, `partcatname`, `created_at`, `updated_at`) VALUES
(1, 'Chasis', NULL, NULL),
(2, 'Haedlight', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `porpertytypes`
--

CREATE TABLE `porpertytypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `porpertytypes`
--

INSERT INTO `porpertytypes` (`id`, `typename`, `created_at`, `updated_at`) VALUES
(1, 'ROOMS', NULL, NULL),
(2, 'STUDIO', NULL, NULL),
(3, '1 BEDROOM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2 BEDROOMS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '3 BEDROOMS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '4 BEDROOMS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '5 BEDROOMS +', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `propertylisting`
--

CREATE TABLE `propertylisting` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `adtitle` varchar(250) DEFAULT NULL,
  `pinfo` longtext,
  `addate` varchar(250) DEFAULT NULL,
  `rent` varchar(250) DEFAULT NULL,
  `cityid` varchar(250) DEFAULT NULL,
  `actualrpice` varchar(250) DEFAULT NULL,
  `nightpriceid` int(11) DEFAULT NULL,
  `postcode` varchar(250) DEFAULT NULL,
  `address` text,
  `propertypeid` varchar(250) DEFAULT NULL,
  `bedroomid` varchar(250) DEFAULT NULL,
  `pimg` varchar(250) DEFAULT NULL,
  `description` longtext,
  `adscostpriceid` varchar(250) DEFAULT NULL,
  `isactive` int(11) NOT NULL,
  `ispaid` int(11) NOT NULL,
  `isarchive` varchar(250) NOT NULL,
  `latitude` text,
  `longitude` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertylisting`
--

INSERT INTO `propertylisting` (`id`, `userid`, `adtitle`, `pinfo`, `addate`, `rent`, `cityid`, `actualrpice`, `nightpriceid`, `postcode`, `address`, `propertypeid`, `bedroomid`, `pimg`, `description`, `adscostpriceid`, `isactive`, `ispaid`, `isarchive`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'Stunning Studio M2', '<ul>\r\n	<li>Beds: Single Bed</li>\r\n	<li>Property Type: House</li>\r\n	<li>Avaliable From: 22-02-2020</li>\r\n	<li>Price: &pound;40 per night</li>\r\n	<li>Location: Oxford</li>\r\n	<li>Post Code: OX1 1UA</li>\r\n</ul>', '2021-09-28', '200', '1', '50', 2, '712408', 'kolkata', '1', '1', '32747.jpg', '<p>Shortlet Owners or their appointed Agents, simply need to Create an Account to profile rt Service above to get latest available Properties.</p>', '8', 1, 0, '0', NULL, NULL, '2021-11-05 07:54:52', '2021-11-05 07:54:52'),
(2, 1, 'Deluxe Flat in London', '<ul>\r\n	<li>Beds: Single Bed</li>\r\n	<li>Property Type: House</li>\r\n	<li>Avaliable From: 22-02-2020</li>\r\n	<li>Price: &pound;40 per night</li>\r\n	<li>Location: Oxford</li>\r\n	<li>Post Code: OX1 1UA</li>\r\n</ul>', '2021-12-20', '200', '1', '40', 2, '7145855', 'dc', '1', '1', '97956.jpg', '<p>Quick Search facility below or enrol in the Alert Service above to get latest available Properties.</p>', '1', 1, 0, '0', NULL, NULL, '2021-11-03 13:16:42', '2021-11-03 13:16:42'),
(4, 1, 'NICE DOUBLE OX1 (FEATURED)', '<ul>\r\n	<li>Beds: Single Bed</li>\r\n	<li>Property Type: House</li>\r\n	<li>Avaliable From: 22-02-2020</li>\r\n	<li>Price: &pound;40 per night</li>\r\n	<li>Location: Oxford</li>\r\n	<li>Post Code: OX1 1UA</li>\r\n</ul>', '2021-10-05', '399', '2', '45', 2, '745855', 'Oxford , uk', '2', '4', '43379.jpg', '<p>Shortlet Owners or their appointed Agents, simply need to Create an Account to profile and list their Property, whilst Travellers can search listings using the dropdown menus above, or</p>', '9', 1, 0, '0', '51.753738', '-1.263460', '2021-11-05 07:54:56', '2021-11-05 07:54:56'),
(5, 7, 'NICE DOUBLE OX1 (FEATURED)', '<ul>\r\n	<li>Beds: Single Bed</li>\r\n	<li>Property Type: House</li>\r\n	<li>Avaliable From: 22-02-2020</li>\r\n	<li>Price: &pound;40 per night</li>\r\n	<li>Location: Oxford</li>\r\n	<li>Post Code: OX1 1UA</li>\r\n</ul>', '2021-10-05', '399', '2', '35', 2, '745855', 'Oxford , uk', '3', '4', '93258.jpg', '<p>Quick Search facility below or enrol in the Alert Service above to get latest available Properties.</p>', '9', 1, 0, '0', '51.753738', '-1.263460', '2021-11-05 07:55:00', '2021-11-05 07:55:00'),
(9, 8, 'Web Room', '<p>This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;</p>', '2021-10-26', '500', '2', '40', 2, 'W3A', 'Rock Road', '2', '1', '69218.jpg', '<p>This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;This is test property&nbsp; &nbsp; &nbsp;</p>', '9', 1, 0, '0', '51.7520', '-1.2577', '2021-11-05 07:55:04', '2021-11-05 07:55:04'),
(10, 7, '3 studio aparattmen test', '<p>dcdsc</p>', '2021-11-02', '25', '2', NULL, NULL, '712408', 'kolkata', '2', '1', '', '<p>sdcsdcs</p>', '2', 1, 0, '0', NULL, NULL, '2021-11-05 07:55:07', '2021-11-05 07:55:07'),
(11, 7, '3 studio aparattmen test', '<p>dcdsc</p>', '2021-11-02', '25', '2', NULL, NULL, '712408', 'kolkata', '2', '1', '', '<p>sdcsdcs</p>', '2', 1, 0, '0', NULL, NULL, '2021-11-05 07:55:11', '2021-11-05 07:55:11'),
(12, 7, 'Test', '<p>c scs</p>', '2021-12-20', '20', '2', NULL, NULL, '34232', '5091 Flag St', '2', '1', '99785.jpg', NULL, '2', 1, 0, '0', NULL, NULL, '2021-11-05 07:55:15', '2021-11-05 07:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `transanctions`
--

CREATE TABLE `transanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headname` longtext COLLATE utf8mb4_unicode_ci,
  `type` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transanctions`
--

INSERT INTO `transanctions` (`id`, `headname`, `type`, `created_at`, `updated_at`) VALUES
(1, 'test income head', 'income', '2021-08-30 03:57:21', '2021-08-30 03:57:21'),
(2, 'test expense', 'expense', '2021-08-30 03:58:45', '2021-08-30 03:58:45'),
(4, 'test income12', 'income', '2021-08-30 04:01:26', '2021-08-30 04:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `randomno` text COLLATE utf8mb4_unicode_ci,
  `verifylink` longtext COLLATE utf8mb4_unicode_ci,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadfile` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isverify` int(11) NOT NULL,
  `isdel` int(11) NOT NULL,
  `mobile` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownertype` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `randomno`, `verifylink`, `title`, `latitude`, `longitude`, `name`, `email`, `email_verified_at`, `password`, `uploadfile`, `isverify`, `isdel`, `mobile`, `ownertype`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, NULL, NULL, NULL, 'Admin', 'admin@admin.com', NULL, '$2y$10$vB1FsaQ0h0vZBLbNhghhsOyZB6Y7rFLNjS1akgDHJq.rhZAKRk/H6', NULL, 0, 0, '', '', 0, NULL, '2021-08-25 07:41:00', '2021-08-25 07:41:00'),
(3, 'Vendor', NULL, NULL, 'Mr', NULL, NULL, 'souvik de', 'techsj04@gmail.com', NULL, '$2y$10$rb7igPNFResaxDLpG.Hq/.NkJtEDs5lPpzAGpI9QQe0SfGVFNlrTu', '50432.pdf', 0, 0, '+447444362041', 'Private Owner', 1, NULL, '2021-09-27 10:11:00', '2021-09-27 10:11:00'),
(7, 'Vendor', '930623', 'https://ukshortlet.com/public/verification/OTMwNjIz', 'Mr', '22.7394963', '88.0803051', 'souvik', 'souvikde319@mail.com', NULL, '$2y$10$lm1ZnA6KbU.Tb9DYu2W3q.yiz1k2uImhcSL90lbCeLgJY.h4bFEIm', '82482.jpg', 0, 1, '+447444362041', 'Private Owner', 1, NULL, '2021-10-05 02:07:50', '2021-10-08 16:41:18'),
(8, 'Vendor', '718069', 'https://ukshortlet.com/public/verification/NzE4MDY5', 'Mr', NULL, NULL, 'Das', 'webfrnz@gmail.com', NULL, '$2y$10$0Zc45BuYCDtPK0hKuSICYeOPbqB/hXnfpHkV3UQ9yS1AiZ1fPtw3e', '87873.jpg', 0, 1, '+447444362041', 'Agency', 1, NULL, '2021-10-05 17:26:41', '2021-11-04 11:39:56'),
(9, 'Vendor', '898834', 'https://ukshortlet.com/public/verification/ODk4ODM0', 'Mr', '22.7558639', '88.0020493', 'Sabuj Nandi', 'souvikdejobs04@gmail.com', NULL, '$2y$10$tk.wMXpt1K7ZM/AkzifeVeDpD9LZf7USpL1bwVioztZ3IuDA.2pCe', '82738.jpg', 1, 0, '+447444362041', 'Private Owner', 1, NULL, '2021-10-08 16:23:27', '2021-10-08 16:38:05'),
(10, 'Buyer', '824561', 'https://ukshortlet.com/verification/ODI0NTYx', 'Mr', NULL, NULL, 'sanjoy buyer', 'sbuyer@gmail.com', NULL, '$2y$10$vNsmI.JxbTQ8evFdUvckb.h/TQHxoSZ1U8KpUtWqO7/g0aPvbSGUa', '56835.jpg', 0, 0, '+447444362041', 'Buyer', 1, NULL, '2021-10-29 17:26:51', '2021-10-29 17:26:51'),
(11, 'Buyer', '975430', 'https://ukshortlet.com/verification/OTc1NDMw', 'Mr', NULL, NULL, 'Biltu', 'biltuds@gmail.com', NULL, '$2y$10$j3kitGGrgEKyReHhDX9tiekW6xdR03lP15fdux2/OKMqU0G0oIZua', '', 1, 1, '3232323', 'Buyer', 1, NULL, '2021-11-05 14:35:41', '2021-11-05 14:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maker` longtext COLLATE utf8mb4_unicode_ci,
  `enginemodel` longtext COLLATE utf8mb4_unicode_ci,
  `model` longtext COLLATE utf8mb4_unicode_ci,
  `horsepower` longtext COLLATE utf8mb4_unicode_ci,
  `typeid` longtext COLLATE utf8mb4_unicode_ci,
  `mielege` longtext COLLATE utf8mb4_unicode_ci,
  `liscenceno` longtext COLLATE utf8mb4_unicode_ci,
  `vehicleimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `maker`, `enginemodel`, `model`, `horsepower`, `typeid`, `mielege`, `liscenceno`, `vehicleimage`, `created_at`, `updated_at`) VALUES
(2, 'cdscsdc', 'cdscsdc', 'sdcdsc', 'sfcsd', '4', 'cscsdc', 'sdcsd', '42613.jpg', '2021-08-26 09:18:36', '2021-08-27 06:14:54'),
(3, 'Tata Car', 'Tata Car', 'Tata', '2 bhp', '4', '5 kmpl', 'WB1DFVFDVFD', '43718.jpg', '2021-08-26 09:26:24', '2021-08-27 06:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adcostprice`
--
ALTER TABLE `adcostprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adcosts`
--
ALTER TABLE `adcosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alerservices`
--
ALTER TABLE `alerservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedroom`
--
ALTER TABLE `bedroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buytools`
--
ALTER TABLE `buytools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartypes`
--
ALTER TABLE `cartypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureserviceproviders`
--
ALTER TABLE `featureserviceproviders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nightprice`
--
ALTER TABLE `nightprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partsacategories`
--
ALTER TABLE `partsacategories`
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
-- Indexes for table `porpertytypes`
--
ALTER TABLE `porpertytypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertylisting`
--
ALTER TABLE `propertylisting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transanctions`
--
ALTER TABLE `transanctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adcostprice`
--
ALTER TABLE `adcostprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `adcosts`
--
ALTER TABLE `adcosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alerservices`
--
ALTER TABLE `alerservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bedroom`
--
ALTER TABLE `bedroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buytools`
--
ALTER TABLE `buytools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartypes`
--
ALTER TABLE `cartypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `featureserviceproviders`
--
ALTER TABLE `featureserviceproviders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nightprice`
--
ALTER TABLE `nightprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partsacategories`
--
ALTER TABLE `partsacategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `porpertytypes`
--
ALTER TABLE `porpertytypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `propertylisting`
--
ALTER TABLE `propertylisting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transanctions`
--
ALTER TABLE `transanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
