-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2021 at 12:42 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beehivetechsolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_title_index` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `title`, `slug`, `details`, `status`, `created_at`, `updated_at`) VALUES
('16393102525299', '16393086825942', 'Web Design & Development', 'web-design-development', 'The concept of web design and development has been around for about as long as websites have existed. It used to have a much simpler definition because website creation used to be a much simpler process.\n\nWhen you compare the first website, which came out in 1991, to modern websites, you can really see how much websites have evolved. Today, creating and maintaining a website is more complex, and involves an entire ecosystem of roles and skill sets.\n\nFor designers, it can be difficult to know exactly where you fit into this ecosystem. This article outlines the major aspects of the website creation process, offering a clear picture of your role, the roles of others, and the skill sets involved.', 1, '2021-12-12 05:57:32', '2021-12-12 05:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

DROP TABLE IF EXISTS `chooses`;
CREATE TABLE IF NOT EXISTS `chooses` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `user_id`, `title`, `slug`, `details`, `status`, `created_at`, `updated_at`) VALUES
('16393107026531', '16393086825942', 'Qualified Employees', 'qualified-employees', 'Our team has creative potential and experience, so that we can deliver the best quality, which is our prime concern in every project.', 1, '2021-12-12 06:05:02', '2021-12-12 06:05:02'),
('16393113537511', '16393086825942', 'Leadership Board', 'leadership-board', 'Our decision-makers have the highest level of organizational leadership experience to play a vital role in conducting an organization.', 1, '2021-12-12 06:15:53', '2021-12-12 06:15:53'),
('16393114396206', '16393086825942', 'Individual Approach', 'individual-approach', 'We are dedicated to approaching clients to create unique websites, apps, software, or any service to satisfy their corporate needs.', 1, '2021-12-12 06:17:19', '2021-12-12 06:17:19'),
('16393115145750', '16393086825942', 'Data Security', 'data-security', 'We use secure algorithms, multi-factor authentication and real-time monitoring to prevent intrusion detection, virus, malware attack and more.', 1, '2021-12-12 06:18:34', '2021-12-12 06:18:34'),
('16393115868920', '16393086825942', 'Dedicated 24\\7 Support', 'dedicated-24-7-support', 'We offer 24/7 technical support so that our dedicated team can deliver all kinds of service-related queries in time.', 1, '2021-12-12 06:19:46', '2021-12-12 06:19:46'),
('16393116625096', '16393086825942', 'High Quality Hardware', 'high-quality-hardware', 'We use top-notch, highly configurable hardware to develop websites, apps, or software, or service-related activities.', 1, '2021-12-12 06:21:02', '2021-12-12 06:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` blob,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `slug`, `email`, `type`, `details`, `status`, `created_at`, `updated_at`) VALUES
('16393109214799', '16393086825942', 'Syful', 'Islam', 'Alif', 'syful-islam-alif', 'alif@genusys.us', 'Regular Client', 0x42656568697665205465636820536f6c7574696f6e73206973206120686967686c7920736b696c6c656420616e6420756e697175656c792063617061626c65206669726d2077697468206d756c74697475646573206f662074616c656e74206f6e2d626f6172642e205765206861766520636f6c6c61626f7261746564206f6e2061206e756d626572206f6620646976657273652070726f6a6563747320746861742068617665206265656e206120677265617420737563636573732e, 1, '2021-12-12 06:08:41', '2021-12-12 06:08:41'),
('16393109833975', '16393086825942', 'Atif', 'Akram', 'Bhuiyan', 'atif-akram-bhuiyan', 'atifakrambhuiyan@gmail.com', 'Regular Client', 0x42656568697665205465636820536f6c7574696f6e73206f6666657273206120686967682063616c69626572206f66207265736f757263657320736b696c6c656420696e204d6963726f736f667420417a757265202e4e45542c206d6f62696c6520616e64205175616c697479204173737572616e63652e205468657920626563616d65206f7572207472756520627573696e65737320706172746e657273206f766572207468652070617374207468726565207965617273206f66206f757220636f6f7065726174696f6e2e, 1, '2021-12-12 06:09:43', '2021-12-12 06:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`),
  KEY `contacts_name_index` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8mb4_unicode_ci,
  `mediable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_mediable_type_mediable_id_index` (`mediable_type`,`mediable_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `url`, `mediable_type`, `mediable_id`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086798190, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(2, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086792739, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(3, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086798276, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(4, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086798599, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(5, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086793325, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(6, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086792726, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(7, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086796030, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(8, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086798563, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(9, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086798856, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(10, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086795079, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(11, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086796080, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(12, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086794429, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(13, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086802317, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(14, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086807637, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(15, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086805503, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(16, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086803257, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(17, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086802832, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(18, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086807377, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(19, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086801832, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(20, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086803155, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(21, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086804342, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(22, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086807665, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(23, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086802352, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(24, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086803644, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(25, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086806378, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(26, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086803345, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(27, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086802432, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(28, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086808674, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(29, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086803675, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(30, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086805602, '2021-12-12 05:31:20', '2021-12-12 05:31:20'),
(31, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086805154, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(32, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086814584, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(33, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086816868, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(34, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086817619, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(35, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086813872, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(36, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086814014, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(37, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086815177, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(38, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086813583, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(39, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086811725, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(40, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086813505, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(41, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086813557, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(42, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086814076, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(43, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086817201, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(44, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086813671, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(45, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086815871, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(46, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086818304, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(47, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086817951, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(48, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086816420, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(49, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086818289, '2021-12-12 05:31:21', '2021-12-12 05:31:21'),
(50, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086811722, '2021-12-12 05:31:22', '2021-12-12 05:31:22'),
(51, 'http://localhost/ticketingSystem/public/avatar/placeholder.png', 'App\\Models\\User', 16393086824943, '2021-12-12 05:31:22', '2021-12-12 05:31:22'),
(52, 'http://localhost/beehivetechsolutions/public/avatar/placeholder.png', 'App\\Models\\User', 16393086825942, '2021-12-12 05:31:22', '2021-12-12 05:31:22'),
(53, 'http://localhost/beehivetechsolutions/public/uploads/banner/20211212115732-slider-classic-slide-3-1920x710.jpg', 'App\\Models\\Banner', 16393102525299, '2021-12-12 05:57:32', '2021-12-12 05:57:32'),
(54, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212120056-service1.png', 'App\\Models\\Service', 16393104565767, '2021-12-12 06:00:56', '2021-12-12 06:00:56'),
(55, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212120502-choose1.png', 'App\\Models\\Choose', 16393107026531, '2021-12-12 06:05:03', '2021-12-12 06:05:03'),
(56, 'http://localhost/beehivetechsolutions/public/uploads/avatar/20211212120841-team-3-230x211.jpg', 'App\\Models\\Client', 16393109214799, '2021-12-12 06:08:41', '2021-12-12 06:08:41'),
(57, 'http://localhost/beehivetechsolutions/public/uploads/avatar/20211212120943-team-1-230x211.jpg', 'App\\Models\\Client', 16393109833975, '2021-12-12 06:09:43', '2021-12-12 06:09:43'),
(58, 'http://localhost/beehivetechsolutions/public/uploads/banner/20211212121246-images.png', 'App\\Models\\News', 16393111665974, '2021-12-12 06:12:46', '2021-12-12 06:12:46'),
(59, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212121553-3264661-200.png', 'App\\Models\\Choose', 16393113537511, '2021-12-12 06:15:53', '2021-12-12 06:15:53'),
(60, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212121719-3871936.png', 'App\\Models\\Choose', 16393114396206, '2021-12-12 06:17:19', '2021-12-12 06:17:19'),
(64, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212122522-computer-hardware-workstation-icon.png', 'App\\Models\\Choose', 16393115145750, '2021-12-12 06:25:22', '2021-12-12 06:25:22'),
(65, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212122851-3075869.png', 'App\\Models\\Service', 16393121312832, '2021-12-12 06:28:51', '2021-12-12 06:28:51'),
(62, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212121946-45765.png', 'App\\Models\\Choose', 16393115868920, '2021-12-12 06:19:46', '2021-12-12 06:19:46'),
(63, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212122102-computer-hardware-workstation-icon.png', 'App\\Models\\Choose', 16393116625096, '2021-12-12 06:21:02', '2021-12-12 06:21:02'),
(66, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123020-220-2201771-png-file-e-commerce-icon-png-clipart.png', 'App\\Models\\Service', 16393122203962, '2021-12-12 06:30:20', '2021-12-12 06:30:20'),
(67, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123126-1925067.png', 'App\\Models\\Service', 16393122861892, '2021-12-12 06:31:26', '2021-12-12 06:31:26'),
(68, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123343-internet-marketing.png', 'App\\Models\\Service', 16393124231176, '2021-12-12 06:33:43', '2021-12-12 06:33:43'),
(69, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123510-png-clipart-computer-icons-automation-icon-design-others-miscellaneous-business-process-automation.png', 'App\\Models\\Service', 16393125103074, '2021-12-12 06:35:10', '2021-12-12 06:35:10'),
(70, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123648-403-4036745-call-center-call-center-vector-icon-png-transparent.png', 'App\\Models\\Service', 16393126083120, '2021-12-12 06:36:48', '2021-12-12 06:36:48'),
(71, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123750-65680.png', 'App\\Models\\Service', 16393126704959, '2021-12-12 06:37:50', '2021-12-12 06:37:50'),
(72, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212123913-kissclipart-web-development-icon-png-clipart-website-developme-596179689d71a423.png', 'App\\Models\\Service', 16393127533037, '2021-12-12 06:39:13', '2021-12-12 06:39:13'),
(73, 'http://localhost/beehivetechsolutions/public/uploads/icons/20211212124015-img-548245.png', 'App\\Models\\Service', 16393128155231, '2021-12-12 06:40:15', '2021-12-12 06:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_08_02_152037_create_media_table', 1),
(11, '2021_08_09_083649_create_roles_table', 1),
(12, '2021_08_09_131647_create_users_roles_table', 1),
(13, '2021_08_10_101659_create_permissions_table', 1),
(14, '2021_08_10_105706_create_roles_permissions_table', 1),
(15, '2021_08_10_112546_create_users_permissions_table', 1),
(16, '2021_12_09_071905_create_contacts_table', 1),
(17, '2021_12_09_072850_create_banners_table', 1),
(18, '2021_12_09_072916_create_services_table', 1),
(19, '2021_12_09_073010_create_chooses_table', 1),
(20, '2021_12_09_073100_create_clients_table', 1),
(21, '2021_12_12_035450_create_teams_table', 1),
(22, '2021_12_12_035508_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` blob NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_title_unique` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `slug`, `details`, `status`, `created_at`, `updated_at`) VALUES
('16393111665974', '16393086825942', 'Benefits of Async/Await in Programming', 'benefits-of-async-await-in-programming', 0x546865206d61696e2062656e6566697473206f66206173796e6368726f6e6f75732070726f6772616d6d696e67207573696e67206173796e63202f20617761697420696e636c7564652074686520666f6c6c6f77696e673a0a0a496e6372656173652074686520706572666f726d616e636520616e6420726573706f6e736976656e657373206f6620796f7572206170706c69636174696f6e2c20706172746963756c61726c79207768656e20796f752068617665206c6f6e672d72756e6e696e67206f7065726174696f6e73207468617420646f206e6f74207265717569726520746f20626c6f636b2074686520657865637574696f6e2e20496e207468697320636173652c20796f752063616e20706572666f726d206f7468657220776f726b207768696c652077616974696e6720666f722074686520726573756c742066726f6d20746865206c6f6e672072756e6e696e67207461736b2e0a0a4f7267616e697a6520796f757220636f646520696e2061206e65617420616e64207265616461626c6520776179207369676e69666963616e746c7920626574746572207468616e20626f696c6572706c61746520636f6465206f662074686520747261646974696f6e616c20746872656164206372656174696f6e20616e642068616e646c696e672e2077697468206173796e63202f206177616974202c20796f75207772697465206c65737320636f646520616e6420796f757220636f64652077696c6c206265206d6f7265206d61696e7461696e61626c65207468616e207573696e67207468652070726576696f7573206173796e6368726f6e6f75732070726f6772616d6d696e67206d6574686f64732073756368206173207573696e6720706c61696e207461736b732e0a0a6173796e63202f20617761697420697320746865206e65776572207265706c6163656d656e7420746f204261636b67726f756e64576f726b65722c20776869636820686173206265656e2075736564206f6e2077696e646f777320666f726d73206465736b746f70206170706c69636174696f6e732e0a0a596f75206d616b6520757365206f6620746865206c6174657374207570677261646573206f6620746865206c616e67756167652066656174757265732c206173206173796e63202f2061776169742077617320696e74726f647563656420696e20432320352c20616e642074686572652068617665206265656e20736f6d6520696d70726f76656d656e747320616464656420746f207468652066656174757265206c696b6520666f7265616368206173796e6320616e642067656e6572616c697a6564206173796e632074797065206c696b652056616c75655461736b2e, 1, '2021-12-12 06:12:46', '2021-12-12 06:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('ca77210523154ac5f0bb1157d2c426f628a847593f0a87bd2f80885b18234a8e43d3cee6936d91a5', 16393086825942, 1, 'Beehive Tech Solutions', '[]', 0, '2021-12-12 05:49:29', '2021-12-12 05:49:29', '2022-12-12 11:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'pxusBpMt3YnKQX1PjK75dOl3nhRNO35TTAL7CQuX', NULL, 'http://localhost', 1, 0, 0, '2021-12-12 05:31:26', '2021-12-12 05:31:26'),
(2, NULL, 'Laravel Password Grant Client', 'F0RV87WTM3bBH4FJE6GoZv4TeyoMaDSsOFgt8TfL', 'users', 'http://localhost', 0, 1, 0, '2021-12-12 05:31:26', '2021-12-12 05:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-12-12 05:31:26', '2021-12-12 05:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Admin Panel', 'admin-panel', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(2, 'Role List', 'role-list', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(3, 'Role Create', 'role-create', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(4, 'Role Edit', 'role-edit', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(5, 'Role Delete', 'role-delete', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(6, 'User Panel', 'user-panel', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(7, 'User List', 'user-list', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(8, 'User Create', 'user-create', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(9, 'User Edit', 'user-edit', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(10, 'User Delete', 'user-delete', NULL, '2021-12-12 05:31:19', '2021-12-12 05:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_name_index` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', NULL, 1, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(2, 'Admin', 'admin', NULL, 1, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(3, 'Moderator', 'moderator', NULL, 1, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(4, 'Editor', 'editor', NULL, 1, '2021-12-12 05:31:19', '2021-12-12 05:31:19'),
(5, 'Agent', 'agent', NULL, 1, '2021-12-12 05:31:19', '2021-12-12 05:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

DROP TABLE IF EXISTS `roles_permissions`;
CREATE TABLE IF NOT EXISTS `roles_permissions` (
  `role_id` bigint UNSIGNED NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`),
  KEY `roles_permissions_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` blob,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `slug`, `details`, `status`, `created_at`, `updated_at`) VALUES
('16393121312832', '16393086825942', 'IPTV Broadcasting & Management', 'iptv-broadcasting-management', 0x496e20726563656e742079656172732c204950545620686173206265636f6d6520706f70756c61722e2041732064656d616e6420666f7220495020766964656f2067726f777320616e6420636c6f75642d626173656420636f6e74656e742064656c6976657279206265636f6d657320756269717569746f75732c2062726f61646361737465727320616e64206d6564696120636f6d70616e6965732061726520657870657269656e63696e672061207369676e69666963616e7420736869667420696e206f7065726174696f6e7320616e6420627573696e657373206d6f64656c732e20537065656463617374e2809973206d6564696120616e642062726f61646361737420736f6c7574696f6e732063616e2068656c7020796f7520756e6c6f636b206e6577206f70706f7274756e697469657320616e6420657870616e6420796f7572206f66666572696e67732077697468206d616e6167656420736572766963657320616e642073797374656d20696e746567726174696f6e2e0a0a4950545620636f6e74656e74206973206f6674656e2064656c697665726564206f76657220646564696361746564206e6574776f726b732c206c696b65204469676974616c2053756273637269626572204c696e6520636f6e6e65637469766974792e20436f6d706172656420746f20746865207075626c6963206e6574776f726b2c20612070726976617465206e6574776f726b2070726f7669646573206f70657261746f7273206d6f726520636f6e74726f6c206f7665722074686520766964656f207472616666696320616e642c20627920657874656e73696f6e2c20656e73757265732073657276696365207175616c6974792c20757074696d652c2062616e6477696474682c20616e642072656c696162696c6974792e20496e20747261646974696f6e616c2074656c65766973696f6e207472616e736d697373696f6e2c20616c6c2070726f6772616d6d696e672069732062726f6164636173742073696d756c74616e656f75736c7920696e2061206d756c74696361737420666f726d61742e2054686520617661696c61626c652070726f6772616d207369676e616c7320666c6f7720646f776e73747265616d2c20616e6420766965776572732073656c6563742070726f6772616d73206279206368616e67696e6720746865205456206368616e6e656c2e0a0a416e204950545620736572766963652073656e6473206f6e6c79206f6e652070726f6772616d20617420612074696d652c20692e652e2c206120756e696361737420666f726d61742e20436f6e74656e742072657369646573206f6e2074686520696e7465726e657420736572766963652070726f76696465722773206e6574776f726b2c20616e64206f6e6c79207468652070726f6772616d2074686520656e642d757365722073656c656374732069732073656e7420746f2074686520757365722773206465766963652e205768656e20612076696577657220616c7465727320746865206368616e6e656c2c2061206e65772073747265616d206973207472616e736d69747465642066726f6d207468652070726f7669646572277320736572766572206469726563746c7920746f20746865207669657765722e204c696b65206361626c652074656c65766973696f6e2c20495054562072657175697265732061207365742d746f7020626f78206f72206f7468657220637573746f6d65722d7072656d6973657320646576696365732c207375636820617320612057692d466920726f75746572206f722061206669626572206f70746963206f722062726f616462616e6420696e7465726e657420636f6e6e656374696f6e2e0a0a41742042656568697665205465636820536f6c7574696f6e732c207765206f6666657220636f6d62696e65642049505456207365727669636573207375636820617320636f6e73756c74616e63792c2073747564696f2073657475702c2062726f616463617374696e672c20636f6e74656e74206372656174696f6e2c20616e64206d616e6167656d656e742e2057652061737375726520637573746f6d6572732074686174207468652061696d656420616e64206d616e6167656d656e7420706c6174666f726d2069732061207365637572652c20656e74657270726973652d677261646520736f6c7574696f6e20666f722064656c69766572696e6720686967682d7175616c697479206c69766520616e64207265636f7264656420766964656f206665656473206163726f737320616e204950206e6574776f726b2077697468696e20616e7920627573696e6573732c206f7267616e697a6174696f6e2c206f722076656e75652e204f7572204950545620736f6c7574696f6e20697320766572736174696c6520616e64207363616c61626c652c20616c6c6f77696e6720746865206d756c7469636173742064656c6976657279206f6620636f6e74656e7420746f2074656e73206f662074686f7573616e6473206f6620656e64706f696e74732077697468206d696e696d616c206e6574776f726b20696d706163742e, 1, '2021-12-12 06:28:51', '2021-12-12 06:28:51'),
('16393122203962', '16393086825942', 'E-Commerce Development & Management', 'e-commerce-development-management', 0x496e2074686520656d657267696e6720676c6f62616c2065636f6e6f6d792c20652d636f6d6d6572636520686173206672657175656e746c79206265636f6d6520616e20657373656e7469616c207365676d656e74206f6620627573696e65737320737472617465677920616e64206120736f6c696420636174616c79737420666f722065636f6e6f6d696320646576656c6f706d656e742e2054686520636f6e74696e75656420656e6c617267656d656e74206f6620652d636f6d6d6572636520636f756c64206c65616420746f20646f776e77617264207072657373757265206f6e20696e666c6174696f6e207468726f75676820696e6372656173656420776172666172652c20636f737420736176696e67732c20616e64206368616e67657320696e206d65726368616e7473e280992070726963696e6720746563686e69717565732e0a0a4d616e7920636f6d70616e6965732063616e2062656e656669742066726f6d207468656972206f6e6c696e652073746f72652c2066726f6d20737461727475707320746f20736d616c6c20616e64206d656469756d2d73697a656420627573696e6573736573207269676874207468726f75676820746f2070726f6d696e656e74206272616e64732c20776865726520637573746f6d6572732063616e2073656c6c2074686569722070726f6475637473206f722073657276696365732e20486176696e6720652d636f6d6d65726365207369746573206e6f7720637265617465732061206e65772064696d656e73696f6e20696e2074686973206f6e6c696e6520627573696e657373206572612e204974206272696e677320696e66696e697465206f70706f7274756e697469657320616e64207461726765742061756469656e6365732077686f2067657420746f2073656520776861742061206272616e64206973206f66666572696e6720696e206f6e6520676f206265796f6e64207468656972206f776e20636f756e7472792e20452d636f6d6d65726365206170706c69636174696f6e20646576656c6f706d656e74206973206d61696e6c7920746865206f7065726174696e672073797374656d206f66206f6e6c696e652073746f7265732c20616e642074686973207669727475616c2073746f72652077696c6c206265206f70656e2032342f3720776974686f757420686176696e67206120706879736963616c2073746f72652e0a0a41742042656568697665205465636820536f6c7574696f6e732c206f757220657870657274207465616d2067697665732073757072656d6520696465617320616e6420636f6e73756c74616e637920616e642070726f766964657320652d636f6d6d65726365206170706c69636174696f6e20646576656c6f706d656e7420706c6174666f726d732e2057652074617267657420646576656c6f70696e672074686520746f7020652d636f6d6d6572636520776562736974657320616e6420617070732074686174206d61792064656c697665722074686520726571756972656420726573756c74732e, 1, '2021-12-12 06:30:20', '2021-12-12 06:30:20'),
('16393122861892', '16393086825942', 'Data Processing & Management', 'data-processing-management', 0x546865207465726d2022646174612070726f63657373696e67222077617320666972737420696e76656e7465642077697468207468652072697365206f6620636f6d70757465727320696e207468652031393530732e2046726f6d2074686520626567696e6e696e672074696c6c206e6f772c20646174612068617320616c77617973206265656e206f6620677265617420696d706f7274616e636520746f206f75722063757272656e7420776f726c642e204275742061732064617461206672657175656e746c79206265636f6d657320736f706869737469636174656420616e6420636f6d706c65782c20736f20646f2074686520746f6f6c732c206d6574686f64732c20616e642070726f63656475726573207765206e65656420746f2070726f63657373207468656d2e0a0a42656568697665205465636820536f6c7574696f6e732720646174612070726f63657373696e672073657276696365732061737369737420636f6d70616e696573206f72206272616e647320746f20636f6e666f726d20746f20746865697220637573746f6d6572e28099732070726f737065637473207768696c65206174207468652073616d652074696d65206f626579696e672070726f6669746162696c6974792e204f7572207465616d2070726f766964657320616c6c2d6f766572206f6e6c696e6520646174612070726f63657373696e672073657276696365732073756368206173206461746120616e616c797369732c20656e7472792c20696e646578696e672c206f7074696d697a6174696f6e20666f7220656173792072657472696576616c2c206461746120636f6e76657273696f6e2c20616e6420726573656172636820746f206163717569726520746163746963616c20696e73696768747320616e642073696d706c696679207369676e69666963616e7420627573696e657373206465636973696f6e732e0a0a41732061206c656164696e672070726f7669646572206f6620646174612070726f63657373696e672073657276696365732c206f75722072656c656e746c657373207465616d2070726f76696465732073696d706c652c20636f73742d65666665637469766520736f6c7574696f6e7320666f7220657665727920696e64757374727920766572746963616c20696e20616c69676e6d656e74207769746820627573696e65737320676f616c7320746f2066726565207570206f6e7369746520656d706c6f79656573272062616e6477696474682c20726564756365206f7065726174696f6e616c20636f7374732c20616e6420696e6372656173652070726f636573736162696c6974792e2057652061726520636f6e6e6563746564207769746820676c6f62616c20636c69656e7473207769746820616e20656e766961626c65207265636f7264206f662072657065617420627573696e6573732e204c697374656420756e64657220746f7020646174612070726f63657373696e67206669726d732c2077652074616b6520707269646520696e2064656c69766572696e6720696e666f726d6174696f6e2077697468207468652075746d6f73742065786163746e65737320616e6420666f7262696464696e672073656375726974792077697468696e207468652073746970756c61746564207475726e61726f756e642074696d652e205765207573652066696c65207472616e736665722070726f746f636f6c2846545029206f722061207669727475616c2070726976617465206e6574776f726b202856504e2920746f20656e737572652074686174206e6f20646174612069732073746f726564206f6e206f75722073797374656d73206c6f63616c6c792e, 1, '2021-12-12 06:31:26', '2021-12-12 06:31:26'),
('16393124231176', '16393086825942', 'Digital Marketing', 'digital-marketing', 0x4469676974616c206d61726b6574696e672068617320656e68616e63656420616e20696e74656772616c2070617274206f6620746865206d6f6465726e20657261206f6620627573696e6573732e20496e20726563656e742079656172732c20627573696e657373207061747465726e732068617665206368616e6765642061206c6f742e204576656e207468652077617920636f6d70616e69657320617070726f61636820746865697220637573746f6d6572732068617320736869667465642e20436f6e76656e74696f6e616c206d61726b6574696e67206861732074616b656e20612073746570206261636b20616e642062726f756768742061206e6577206661636520696e2066726f6e74206f662074686520696e6475737472792e20416c74686f756768206e6f7420616c6c20747261646974696f6e616c206d61726b6574696e6720706f6c69636965732061726520676f6e652c20746865206d6f6465726e20746563686e697175657320696d706c656d656e746564206279206d61726b6574696e672070726f66657373696f6e616c732061726520666172206d6f726520706f70756c6172207468616e2077686174207765206170706c69656420746f206b6e6f772e0a0a54686520696e7465726e6574206861732062726f7567687420612077686f6c65206e6577206d61726b65742e204469676974616c206d61726b6574696e6720686173206265636f6d6520616e206578616d706c65206f66206120667275697466756c20627573696e6573732c20616e6420696620637573746f6d65727320617265206e6f7420696e766f6c76656420696e20746869732c20746865697220627573696e6573732077696c6c206e6f7420636c696d6220696e20746865207570636f6d696e6720646179732e2049742063616e206272696e672061206c6f74206f66206f70706f7274756e697469657320616e642067726f77746820746f20627573696e65737365732e2049742063616e206c65616420746f206578706f7375726520616e64206d6f72652073616c65732e0a0a42656568697665205465636820536f6c7574696f6e732720657870657274207465616d2077696c6c20677569646520637573746f6d6572732074686f726f7567686c79206279206d616e75666163747572696e672072656c6961626c652070726f636564757265732c20706c616e6e696e672c206465766973696e6720636f6e74656e742c20616e6420657865637574696e67207468656d2e20496e2074686973206d6f6465726e206167652c20746865207265616368206f6620696e666c75656e636572206d61726b6574696e6720697320636f6d70617261746976656c7920686967686572207468616e20616e79206f7468657220666f726d206f66206d61726b6574696e672e204f7572207465616d20686173206f75747374616e64696e6720657863656c6c656e636520696e206d61696e7461696e696e6720736f6369616c206d6564696120706c6174666f726d7320616e64206d616e6167696e6720636f6d6d756e6974792d62617365642067726f7570732e2050726f6d6f74696e6720627573696e65737365732077697468206164766572746973696e6720697320616e20657373656e7469616c20746f6f6c2e20576520736861726520766172696f75732073746570732074686174206120637573746f6d65722063616e2074616b6520746f20616363656c657261746520746865697220627573696e657373206f72206272616e642773206368616e636573206f6620737563636573732c20706172746963756c61726c7920696e20746f646179e2809973206469676974616c206572612e204c696b652c0a0a427920656e737572696e6720637573746f6d65727320696d706c656d656e74206120706f74656e7469616c206d61726b6574696e672073747261746567792c20746865792063616e2061636869657665206120776964652072616e6765206f662070726576616c656e6365206c6576656c732c207265676172646c657373206f6620696e6475737472792e20546865792063616e20616c736f207475726e20696e746f20657870657274732c20737563682061732053454f20636f6e73756c74616e74732c20746f2068656c702070757420746865697220627573696e657373206f6e20746865206f6e6c696e65206d617020616e64206761696e206d6f7265206d616e69666573746174696f6e2e, 1, '2021-12-12 06:33:43', '2021-12-12 06:33:43'),
('16393125103074', '16393086825942', 'Robotic Process Automation (RPA)', 'robotic-process-automation-rpa-', 0x526f626f7469632070726f63657373206175746f6d6174696f6e206973206120746563686e697175652074686174206d616b657320736f6674776172652073696d706c6520746f20617373656d626c652c20636f6e7665792c20616e642073757065727669736520736f66747761726520726f626f7473207468617420656d756c6174652070656f706c652773206163746976697469657320696e746572666163696e67207769746820616476616e636564206672616d65776f726b7320616e642070726f6772616d6d696e672e2056657279206d756368206c696b6520696e646976696475616c732c2070726f6772616d6d696e6720726f626f74732063616e20646f207468696e6773206c696b652067657420776861742773206f6e20612073637265656e2c20636f6d706c65746520746865207269676874206b65797374726f6b65732c206578706c6f726520736974756174696f6e732c2064697374696e677569736820616e6420736570617261746520696e666f726d6174696f6e2c20616e6420706c6179206f7574206120776964652073636f7065206f6620636861726163746572697a656420616374697669746965732e20496e207370697465206f662065766572797468696e672c2070726f6772616d6d696e6720726f626f74732063616e20646f2069742066617374657220616e64206d6f726520646570656e6461626c65207468616e2068756d616e732c20776974686f757420746865206e656365737369747920746f2067657420757020616e642073747265746368206f7220636f6f6c206f66662e0a0a526f626f7469632070726f63657373206175746f6d6174696f6e20736d6f6f74686573206f757420776f726b2070726f6365737365732c207768696368206d616b6573206173736f63696174696f6e73206d6f72652070726f647563746976652c20616461707461626c652c20616e6420726573706f6e736976652e204974206164646974696f6e616c6c79206275696c647320776f726b65722066756c66696c6c6d656e742c20636f6d6d69746d656e742c20616e642075736566756c6e65737320627920656c696d696e6174696e67206f7264696e6172792061737369676e6d656e74732066726f6d20746865697220776f726b646179732e2049742773206e6f6e2d696e76617369766520616e642063616e20626520717569636b6c7920657865637574656420746f20737065656420757020636f6d7075746572697a6564206368616e67652e20576861742773206d6f72652c206974277320657863656c6c656e7420666f7220636f6d7075746572697a696e6720776f726b2070726f636573736573207468617420696e636c756465206672616d65776f726b732074686174206e65656420415049732c207669727475616c20776f726b206172656120666f756e646174696f6e73202856444973292c206f7220696e666f726d6174696f6e2062617365206163636573732e0a0a41742042656568697665205465636820536f6c7574696f6e732c207765207265636f6d6d656e6420616e64206769766520746865206265737420726f626f74697a6174696f6e20696e737472756d656e7473207468617420617373697374206f757220636c69656e7473207769746820626f6f7374696e6720746865697220627573696e657373206f72206272616e642e2053696e6365207765207072696d6172696c7920666f6375736564206f6e207472616e73666f726d6174696f6e2c207369676e69666963616e7420657870656e736520736176696e672c206d6f7265207375706572696f7220737472656e6774682c20686967682065786163746e6573732c206675727468657220646576656c6f70656420636f6e73697374656e63792c20737570706f727465642075736566756c6e65737320616e642064696d696e697368656420726568617368656420776f726b2063686f73656e20726567696f6e73207768696c65206d616b696e6720726f626f74697a656420696e737472756d656e7473206f72206175746f6d6174656420736f6674776172652e, 1, '2021-12-12 06:35:10', '2021-12-12 06:35:10'),
('16393126083120', '16393086825942', 'Business Process Outsourcing (BPO)', 'business-process-outsourcing-bpo-', 0x427573696e657373206d6574686f64206f7574736f757263696e672070726f7669646573207370656369616c20617373697374616e63652c20696e636c7564696e6720737562636f6e7472616374696e6720756e6971756520627573696e6573732d72656c61746564207461736b7320616e642064757469657320746f206f7574646f6f722070726f66657373696f6e616c20636f2d6f70732e204e657720616e64206769616e7420636f6d6d65726369616c20656e746572707269736520696e737469747574696f6e20636f6d70616e696573207069636b206f757420706172746963756c617220656e7465727072697365206379636c657320746f2072652d617070726f7072696174652064697374696e6374206f6e657320746f2067657420696e6e6f7661746976652061646d696e697374726174696f6e7320616e64207374617920736572696f7573206279206d65616e73206f6620616e64206c61726765206f7267616e697a6174696f6e732072652d617070726f7072696174652061646d696e697374726174696f6e7320696e207468652074776f2066756e64616d656e74616c20617265617320666f7220656e7465727072697365207461736b733a207468652066726f6e74206f666669636520616e64207468652061646d696e6973747261746976652063656e7465722e0a0a46726f6e742d6f666669636520726573706f6e736962696c697469657320696e636c756465206d616e6167696e672064697265637420636c69656e7420636f6e74616374207461736b732c20737563682061732070726f6d6f74696e6720616e642070726f766964696e6720637573746f6d657220617373697374616e636520616e6420737570706f72742e2041646d696e69737472617469766520636f72652064757469657320636f6e74726f6c20636f726520627573696e65737320636170616369746965732062617272696e6720636f6e73756d657220636f6e746163742c20666f72206578616d706c652c20696e7374616c6c6d656e74207072657061726174696f6e2c2048522c20657863656c6c656e7420636f6e6669726d6174696f6e2c20626f6f6b6b656570696e672c20616e642049542061646d696e697374726174696f6e2e20466f7220746865206d6f737420706172742c2066726f6e74206f66666963652072652d617070726f7072696174696e6720697320616c6c7564656420746f20617320766f6963652062656e65666974732c20616e642061646d696e697374726174697665206d6964646c652072657468696e6b696e672069732063616c6c6564206e6f6e2d766f6963652061646d696e697374726174696f6e732e0a0a42504f2773206172652c20666f7220746865206d6f737420706172742c2069736f6c6174656420696e746f2074797065732072656c79696e67206f6e2074686520657870657274206f7267616e697a6174696f6e277320726567696f6e2c206163636f7264696e6720746f20746865206f7267616e697a6174696f6e206272696e67696e672075702061646d696e697374726174696f6e2e20546865726520617265207468726565206e656365737361727920736f7274732c20616c6f6e67207769746820736561776172642072656576616c756174696e6720666f72206f7267616e697a6174696f6e732077686f20636f6e747261637420776974682042504f2061646d696e697374726174696f6e7320696e206120666f726569676e206e6174696f6e3b20636f617374616c206f7220686f6d6567726f776e2072652d617070726f7072696174696e6720666f72206167656e636965732077686f20636f6e747261637420776974682042504f2061646d696e697374726174696f6e7320696e206120636f6d70617261626c65206e6174696f6e3b20616e64206e65617273686f72652072652d617070726f7072696174696e6720666f722067726f7570732077686f20636f6e747261637420776974682042504f2061646d696e697374726174696f6e7320696e2061646a6f696e696e67206e6174696f6e732e0a0a4f7267616e697a6174696f6e7320617265206672657175656e746c792061747472616374656420746f2042504f2061646d696e697374726174696f6e7320666f72207468656972206d6f73742066756e6374696f6e616c2061646170746162696c69747920626563617573652072652d617070726f7072696174696e6720746564696f7573206d616e6167657269616c20616e64207370656369616c697a656420617373697374616e63652061737369676e6d656e747320616c6c6f77207468656d20746f207265646973747269627574652074696d6520616e64206173736574732e20497420616c6c6f777320656e7472657072656e6575727320616e64207468656972207465616d73206f6620776f726b65727320746f207a65726f20696e206f6e2065787472612066756e64616d656e74616c206361706163697469657320616e6420636f7265206162696c697469657320746861742063616e2067697665207468656d207468652075707065722068616e642e0a0a41742042656568697665205465636820536f6c7574696f6e732c2077652070726f766964652061206a6f696e65642062756e646c65206f662042504f20736572766963657320746f20636f72706f726174696f6e7320616e64206272616e64732e20576520616c736f206772616e7420636f6e73756c74616e637920736572766963657320696e20636f6c6c61626f726174696f6e2077697468206f7572207075726368617365727320746f2070726f6d7074207468656d20746f20646f20657863656c6c656e7420666f72207468656972206f7267616e697a6174696f6e2e204966206974207265717569726573206120717569636b20636f6d6d656e63656d656e74206f6620323020746f203130302073656174732c2042656568697665205465636820536f6c7574696f6e73272042504f206973207468652062657374206669742e2057652063616e2064656c6976657220697420776974686f75742064656c61792c2075707363616c652c20616e6420646f776e7363616c652061732070657220637573746f6d657220726571756573747320696e206d756c74692d617265612c20737461746973746963732c20616e6420646966666572656e7420666f756e646174696f6e732e0a0a5765206f6666657220636f6e746163742063656e7465722061646d696e697374726174696f6e2c206d6964646c652061646d696e69737472617469766520617373697374616e63652c2070726f6772616d6d696e672c20514120737570706f72742c2049542061646d696e697374726174696f6e2c20616e64206d6f72652e20576520686176652062726f616420696e766f6c76656d656e7420776974682074656c65636f6d2c20636f6f7264696e6174696f6e2c20636c696e6963616c2073657276696365732c2070726f6772616d6d696e672c206d6f6e657920616e6420626f6f6b6b656570696e672c20616e64206f6e6c696e6520627573696e6573732e, 1, '2021-12-12 06:36:48', '2021-12-12 06:36:48'),
('16393126704959', '16393086825942', 'Mobile Apps Development', 'mobile-apps-development', 0x496e20726563656e742079656172732c206d6f62696c65206170707320646576656c6f706d656e742068617320656e68616e636564206120626f6f6d696e6720696e6475737472792e20576974682074686520696e6372656173696e67206e756d626572206f662070656f706c6520616363657373696e672074686520496e7465726e65742076696120636f6d7075746572732c20736d61727470686f6e65732c20616e64207461626c6574732c206d6f62696c652061707020646576656c6f706d656e7420686173207468652062697a61727265206162696c69747920746f20616363657373206d616e7920706f74656e7469616c20636f6e73756d6572732e205265736561726368657273207361792074686174206e6f74206f6e6c792068617665207468652073616c6573206f6620736d61727470686f6e657320616e64207461626c65747320696e637265617365642c2062757420746865206e756d626572206f66206d6f62696c65206170707320696e7374616c6c65642068617320616c736f2067726f776e206578706f6e656e7469616c6c792e20466f72207468697320726561736f6e2c20617070732068617665206265636f6d65206e656365737361727920666f7220637573746f6d6572732720627573696e65737365732e0a0a41707073206172652061626f7574206372656174696e6720736f6d657468696e672077697468206120666f726d20616e642066756e6374696f6e2e20546865207065726665637420626c656e64206265747765656e20666f726d20616e642066756e6374696f6e2c2064657369676e656420616e64206275696c7420666f72207468652070656f706c652077686f20757365207468656d2e204e6f74206f6e6c7920646f207468652061707073206861766520746f206c6f6f6b207072657474792c20627574207468657920616c736f206861766520746f20776f726b2e204275696c64696e6720616e206170702073686f756c6420626567696e2077697468206120766974616c20707572706f73652c20666f6c6c6f77656420636c6f73656c792062792074686520746f6f6c732c2070726f636573732c20616e64206361706162696c697469657320746f206d65657420746865206e65656473206f6620746172676574656420636f6e73756d6572732e0a0a41742042656568697665205465636820536f6c7574696f6e732c2077652075736520612070726f76656e206d6574686f6420746f2061737369737420636c69656e747320746f206761696e20636c617269747920696e2074686520726567696f6e206f6620746865697220726571756972656d656e74732c2075736572732c20616e642074686520746563686e6f6c6f677920726571756972656420746f206272696e6720746865697220696465617320746f207265616c6974792e2057652061726520646966666572656e742066726f6d206f7468657220646576656c6f706d656e74206f722064657369676e206669726d733b207765206861766520616e2065787065727420646576656c6f706d656e74207465616d207769746820612074616c656e746564206372656174697665207465616d207468617420666f6375736573206f6e2055492f555820616e6420637573746f6d657220636f6d70616e696573206f72206272616e64732e2057652062656c69657665207468617420616e206170706c69636174696f6e2073686f756c64206e6f74206f6e6c79206265206d616e756661637475726564207769746820686967682d7175616c69747920636f64652c206275742069742073686f756c6420626520706f6c69736865642c20696e747569746976652c20616e6420646573637269626520637573746f6d6572732720636f6d70616e69657320616e64206272616e6473206174207468652073616d652074696d652e, 1, '2021-12-12 06:37:50', '2021-12-12 06:37:50'),
('16393127533037', '16393086825942', 'Website Design & Development', 'website-design-development', 0x4c6976696e6720696e20746865206469676974616c20776f726c642c206120756e697175652077656273697465206973206372756369616c20666f7220616e7920636f6d70616e79206f72206272616e642e204e6f7761646179732c206f6e6c696e652061637469766974792070726573656e63652069732072617069646c7920696e6372656173696e6720696e2074686520617265612c20616e642069742077696c6c20686176652061206d61737369766520696d70616374206f6e2069747320737563636573732e20536f6d6520637573746f6d657273207374696c6c20646f206e6f74207265616c697a652074686174206d6f7374206f6620746865697220636c69656e74732077696c6c2076697369742074686569722077656273697465206265666f726520646f696e67206120627573696e6573732e0a0a46726f6d207468697320706f696e74206f6620766965772c2042656568697665205465636820536f6c7574696f6e73206f666665727320612076617374206172726179206f66207765622d72656c617465642073657276696365732073756368206173207765622064657369676e2c2077656220646576656c6f706d656e742c20776562206170706c69636174696f6e732c20736f66747761726520646576656c6f706d656e742c20737570706f72742c20616e64206d61696e74656e616e6365207573696e6720746865206c617465737420616e642070726f76656e2077656220746563686e6f6c6f676965732e2057652061726520636f6e666964656e742c20616e642077652063616e2064657369676e20612077656273697465206f72207765622d6261736564206170706c69636174696f6e2074686174206472697665732073616c657320666f72206120756e6971756520627573696e65737320626563617573652077652068617665206120706572666563742066756c6c2d737461636b20646576656c6f706d656e74207465616d207769746820657870657269656e636520696e206d6f6465726e20746563686e6f6c6f676965732c2050485020636f726520616e64206f70656e2d736f7572636520706c6174666f726d732c2055492f55582064657369676e2c20736372697074696e67206c616e67756167657320746f206f66666572206166666f726461626c6520736f6c7574696f6e7320666f72206120756e6971756520627573696e6573732e0a0a576520776f726b207769746820696e2d686f757365207370656369616c69737473206f662077656220746563686e6f6c6f67696573207468617420656e63617073756c617465207365727665722d7369646520616e642066726f6e742d656e6420737461636b732e20416e642077652070726f6163746976656c7920636f6e73756c742c2064657369676e2c20646576656c6f702c20616e64207363616c6520726f627573742077656220616e6420637573746f6d20736f66747761726520736f6c7574696f6e732074686174206675656c20696e6e6f766174696f6e20616e642064656c69766572206469676974616c20737563636573732e, 1, '2021-12-12 06:39:13', '2021-12-12 06:39:13'),
('16393128155231', '16393086825942', 'Graphics Design', 'graphics-design', 0x53746179696e672075702d746f2d6461746520776974682074686520756e697665727365206f662064657369676e206973207369676e69666963616e742062656361757365207468657265206973206e6f206c696d697420746f20706c616e6e696e672c2061732065766572796f6e65206b6e6f77732e20497420697320636f6e7374616e746c79206368616e67696e672c2077697468206e657720636f6e636570747320656d657267696e6720616e64206f6c642069646561732072657475726e696e6720746f20626520706f6c69736865642e20576520646f206e6f742077616e74206f757220637573746f6d65727320746f2066616c6c20696e746f206f62736375726974792e205768657468657220637573746f6d65727320617265206c6f6f6b696e6720666f7220612073706563746163756c6172206e6577206c6f676f2c20627573696e65737320636172642c20617474726163746976652062616e6e65722c2073746174696f6e6572792c207374756e6e696e6720666c796572732c206f75747374616e64696e6720706f73746572732c20616e64207765622064657369676e20666f7220746865697220636f6d70616e79206f72206272616e642c207468652065787065727420636f6d6d756e697479206f662064657369676e6572732061742042656568697665205465636820536f6c7574696f6e732063616e206d616b652069742068617070656e2e0a0a57656273697465732c20696e666f67726170686963732c207479706f6772617068792c20616e64206f746865722073656374696f6e732072656c6174656420746f2076697375616c20696e74657266616365732061726520616c6c206d756368206d6f7265207468616e206a75737420776f72647320616e642070726f64756374733b20746865792061726520616c736f20696d6167657320616e64206172742e2056697375616c7320636f6e7665727420666173746572207468616e20776f72647320616c6f6e652e2056697375616c2070726573656e746174696f6e20696d706163747320612062657474657220756e6465727374616e64696e67206f6620637573746f6d657273e280992070726f647563747320616e6420736572766963657320616e642068656c7073207468656d20736565207468652062656e65666974732074686579206f666665722e20477261706869632064657369676e206973206120766974616c2070617274206f6620616e7920627573696e6573732c20616e642074686174206973206173207472756520666f72206120637573746f6d6572277320636f6d70616e79206f72206272616e6420696d61676520617320697420697320666f72207468656972206d61726b6574696e672e0a0a41742042656568697665205465636820536f6c7574696f6e732c207765206f666665722061206d756c746974756465206f6620677261706869632064657369676e20736572766963657320616e64206d6f72652e20437573746f6d65727320617265206177617265206f6620746865697220636f6d70616e792773206f7065726174696f6e732c20616e642077656273697465732072656c792066617220746f6f2068656176696c79206f6e20776861742065766572796f6e6520646973706c61797320616d6f6e67207468656d2e0a0a4c6f676f2044657369676e3a20546869732073686f77732061207374726f6e67206272616e64206964656e746974792e0a0a42726f63687572652044657369676e3a2042726f63687572652064657369676e20697320612070726f63657373206f6620636f6e76657274696e6720637573746f6d657273206279207573696e6720616c7465726564206d656469612e0a0a466c7965722044657369676e3a20466c796572732061726520746865206265737420746f6f6c7320666f7220636f72706f72617465206d61726b6574696e672e0a0a4e6577736c65747465722044657369676e696e673a20426520696e20746f756368207769746820637573746f6d6572732062792064657369676e696e67206e6577736c6574746572732e0a0a53746174696f6e6572792044657369676e733a20576520616363656c657261746520637573746f6d6572732720666972737420696d7072657373696f6e73206f6620746865697220627573696e6573732e0a0a55492f55582044657369676e3a205573657220696e746572666163657320656e61626c6520757365727320746f20756e6465727374616e6420616e642063726561746520696d7072657373696f6e7320746f2067657420636c69636b73206261736564206f6e20746865697220657870657269656e63652e, 1, '2021-12-12 06:40:15', '2021-12-12 06:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `social_links` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
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
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  KEY `users_first_name_index` (`first_name`),
  KEY `users_middle_name_index` (`middle_name`),
  KEY `users_last_name_index` (`last_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `slug`, `username`, `email`, `mobile`, `address`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
('16393086825942', 'Syful Islam', NULL, 'Alif', 'syful-islam', 'admin', 'alif@genusys.us', '01680051462', NULL, '2021-12-12 05:31:22', '$2y$10$zu0Q9Qyl5Q6SZrL9RoSt9..zZO1FrcjQHmmWwwnRd845B6Z4Tu5ha', 'bsxFNgv8ZZ', 1, '2021-12-12 05:31:22', '2021-12-12 05:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

DROP TABLE IF EXISTS `users_permissions`;
CREATE TABLE IF NOT EXISTS `users_permissions` (
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `users_permissions_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE IF NOT EXISTS `users_roles` (
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `users_roles_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
('16393086792726', 2),
('16393086792739', 2),
('16393086793325', 2),
('16393086794429', 2),
('16393086795079', 2),
('16393086796030', 2),
('16393086796080', 2),
('16393086798190', 2),
('16393086798276', 2),
('16393086798563', 2),
('16393086798599', 2),
('16393086798856', 2),
('16393086801832', 2),
('16393086802317', 2),
('16393086802352', 2),
('16393086802432', 2),
('16393086802832', 2),
('16393086803155', 2),
('16393086803257', 2),
('16393086803345', 2),
('16393086803644', 2),
('16393086803675', 2),
('16393086804342', 2),
('16393086805154', 2),
('16393086805503', 2),
('16393086805602', 2),
('16393086806378', 2),
('16393086807377', 2),
('16393086807637', 2),
('16393086807665', 2),
('16393086808674', 2),
('16393086811722', 2),
('16393086811725', 2),
('16393086813505', 2),
('16393086813557', 2),
('16393086813583', 2),
('16393086813671', 2),
('16393086813872', 2),
('16393086814014', 2),
('16393086814076', 2),
('16393086814584', 2),
('16393086815177', 2),
('16393086815871', 2),
('16393086816420', 2),
('16393086816868', 2),
('16393086817201', 2),
('16393086817619', 2),
('16393086817951', 2),
('16393086818289', 2),
('16393086818304', 2),
('16393086824943', 2),
('16393086825942', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
