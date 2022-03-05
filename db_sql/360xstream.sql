-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2021 at 06:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `360xstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `attendee_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `event_id`, `attendee_info`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, '{\"name\":\"Xavier Lindsay\",\"email\":\"zyxe@mailinator.com\",\"phone\":\"+1 (199) 963-7188\"}', '2021-09-01 11:09:28', 2, '2021-09-01 11:09:28', 2),
(2, 2, '{\"name\":\"Martin Maynard\",\"email\":\"fitabe@mailinator.com\",\"phone\":\"+1 (489) 436-9202\"}', '2021-09-01 11:09:28', 2, '2021-09-01 11:09:28', 2),
(4, 1, '{\"name\":\"Eleanor Vang\",\"email\":\"palufob@mailinator.com\",\"phone\":\"+1 (295) 887-2857\"}', '2021-09-02 09:04:35', 2, '2021-09-02 09:04:35', 2),
(5, 1, '{\"name\":\"Srikant\",\"email\":\"7effects123@gmail.com\",\"phone\":\"+1 (649) 798-2969\"}', '2021-09-02 09:40:16', 2, '2021-09-02 09:40:16', 2),
(6, 2, '{\"name\":\"Reed Wong\",\"email\":\"sajyco@mailinator.com\",\"phone\":\"+1 (528) 694-1718\"}', '2021-09-03 02:57:26', 2, '2021-09-03 02:57:26', 2),
(7, 2, '{\"name\":\"Barclay Short\",\"email\":\"terakiv@mailinator.com\",\"phone\":\"+1 (913) 921-8367\"}', '2021-09-03 06:42:33', 2, '2021-09-03 06:42:33', 2),
(8, 2, '{\"name\":\"Barclay Short\",\"email\":\"terakiv@mailinator.com\",\"phone\":\"+1 (913) 921-8367\"}', '2021-09-03 06:54:41', 2, '2021-09-03 06:54:41', 2),
(9, 2, '{\"name\":\"Hayley Maldonado\",\"email\":\"xiriter@mailinator.com\",\"phone\":\"+1 (959) 743-7468\"}', '2021-09-03 06:59:45', 2, '2021-09-03 06:59:45', 2),
(10, 2, '{\"name\":\"Lee Mcdaniel\",\"email\":\"jymo@mailinator.com\",\"phone\":\"+1 (861) 194-9956\"}', '2021-09-03 07:03:07', 2, '2021-09-03 07:03:07', 2),
(11, 2, '{\"name\":\"Asher Hunter\",\"email\":\"valok@mailinator.com\",\"phone\":\"+1 (336) 157-4934\"}', '2021-09-03 07:11:59', 2, '2021-09-03 07:11:59', 2),
(12, 2, '{\"name\":\"Jin Stafford\",\"email\":\"tuzim@mailinator.com\",\"phone\":\"+1 (816) 643-2034\"}', '2021-09-03 07:31:21', 2, '2021-09-03 07:31:21', 2),
(13, 1, '{\"name\":\"Alvin Fields\",\"email\":\"dedep@mailinator.com\",\"phone\":\"+1 (812) 133-7644\"}', '2021-09-14 02:28:07', 2, '2021-09-14 02:28:07', 2),
(14, 1, '{\"name\":\"Justin Barton\",\"email\":\"dyhogy@mailinator.com\",\"phone\":\"+1 (367) 916-2278\"}', '2021-09-14 22:01:34', 2, '2021-09-14 22:01:34', 2),
(15, 1, '{\"name\":\"Talon Lang\",\"email\":\"pafag@mailinator.com\",\"phone\":\"+1 (376) 124-1604\"}', '2021-09-15 14:24:28', 2, '2021-09-15 14:24:28', 2),
(16, 2, '{\"name\":\"Catherine Schroeder\",\"email\":\"xoxo@mailinator.com\",\"phone\":\"+1 (899) 939-5981\"}', '2021-09-15 14:24:39', 2, '2021-09-15 14:24:39', 2),
(17, 4, '{\"name\":\"Raven Christian\",\"email\":\"kacyf@mailinator.com\",\"phone\":\"+1 (157) 454-4381\"}', '2021-09-16 05:13:12', 8, '2021-09-16 05:13:12', 2),
(18, 1, '{\"name\":\"Amal Woods\",\"email\":\"ziqi@mailinator.com\",\"phone\":\"+1 (349) 637-5819\"}', '2021-09-16 05:15:06', 2, '2021-09-16 05:15:06', 2),
(19, 4, '{\"name\":\"Rana Rivera\",\"email\":\"ryvijadegy@mailinator.com\",\"phone\":\"+1 (807) 451-3412\"}', '2021-09-16 05:27:01', 4, '2021-09-16 05:27:01', 2),
(20, 4, '{\"name\":\"Byron Kerr\",\"email\":\"rozisyjo@mailinator.com\",\"phone\":\"+1 (273) 574-3242\"}', '2021-09-22 05:00:09', 4, '2021-09-22 05:00:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera_wowza_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liveUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `name`, `modelNo`, `camera_wowza_id`, `liveUrl`, `lat`, `long`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'CAM 1', '#89090', 'h89jyy8ij6436g888hhhh', 'http://camera.live.url', '88.5555555555555', '55.555555555555555', '2021-08-31 05:45:15', 2, '2021-09-21 07:17:18', 2),
(4, 'CAM 2', '#89090', NULL, 'http://camera.live.url', '88.5555555555555', '55.555555555555555', '2021-08-31 05:45:54', 2, '2021-08-31 05:45:54', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'Test', '2021-09-01 10:53:22', 2, '2021-09-01 10:53:22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlSlug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('free','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `videoUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endDate` date NOT NULL,
  `endtTime` time NOT NULL,
  `timeZone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collectionType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infoToCollect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventReccurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `organizer_id`, `venue_id`, `title`, `urlSlug`, `type`, `category`, `zip`, `location`, `description`, `videoUrl`, `startDate`, `startTime`, `endDate`, `endtTime`, `timeZone`, `collectionType`, `infoToCollect`, `eventReccurance`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, 1, 'Manali Video Trip', 'manali-video-trip', 'paid', '3', '800001', 'India', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'https://cdn3.wowza.com/2/bDl5UjJEWnpLalBY/K3JzSWhi/hls/cwhkzwbw/playlist.m3u8', '2021-07-29', '14:20:00', '2021-07-31', '14:20:00', '-8', 'eachAttendee', '[\"name\",\"email\",\"mobile\"]', 'noRepeat', '2021-07-29 03:21:16', 2, '2021-07-29 03:21:16', 2),
(2, 2, 1, 'Newyork Trip', 'newyork-trip', 'free', '3', '834001', 'USA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 'https://cdn3.wowza.com/2/bDl5UjJEWnpLalBY/K3JzSWhi/hls/cwhkzwbw/playlist.m3u8', '2021-08-31', '16:00:00', '2021-09-05', '20:00:00', '0', 'eachAttendee', '[\"name\",\"email\",\"mobile\"]', 'noRepeat', '2021-08-31 05:55:44', 2, '2021-08-31 05:55:44', 2),
(3, 2, 1, 'Atque autem in magna', 'atque-autem-in-magna', 'free', '3', '43795', 'In ut repudiandae er', 'Obcaecati quia dolor', 'https://cdn3.wowza.com/2/bDl5UjJEWnpLalBY/K3JzSWhi/hls/cwhkzwbw/playlist.m3u8', '1981-06-20', '15:09:00', '1980-08-01', '02:43:00', '5.75', 'eachAttendee', '[\"mobile\"]', 'noRepeat', '2021-09-06 22:38:22', 2, '2021-09-06 22:38:22', 2),
(4, 3, 2, 'Nemo quia dolor debi', 'nemo-quia-dolor-debi', 'paid', '3', '55005', 'Amet cumque laborum', 'Laboriosam aperiam', 'https://cdn3.wowza.com/2/bDl5UjJEWnpLalBY/K3JzSWhi/hls/cwhkzwbw/playlist.m3u8', '1990-10-14', '07:30:00', '1973-12-02', '20:35:00', '-6', 'eachAttendee', '[\"email\"]', 'noRepeat', '2021-09-06 22:42:22', 4, '2021-09-06 22:42:22', 2),
(5, 3, 4, 'Non nostrum ducimus', 'non-nostrum-ducimus', 'paid', 'Select Event Category', '14922', 'Molestiae quasi ad r', 'Nam et iusto vitae d', 'https://cdn3.wowza.com/2/bDl5UjJEWnpLalBY/K3JzSWhi/hls/cwhkzwbw/playlist.m3u8', '2014-07-02', '08:54:00', '1997-01-08', '00:47:00', '-9', 'eachAttendee', '[\"email\"]', 'repeat', '2021-09-22 04:17:12', 4, '2021-09-22 04:17:12', 2);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedPage` int(11) NOT NULL,
  `customLink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `onHome` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `onFooter` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `newTab` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rank_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menuName`, `linkedPage`, `customLink`, `onHome`, `onFooter`, `newTab`, `rank_order`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'About Technology', 7, 'http://localhost/7EFFECTS/360XStream/page/about-technology', 'no', '1', '0', 3, '2021-08-29 05:26:24', 2, '2021-09-16 05:31:27', 2),
(3, 'About Us', 6, 'http://localhost/7EFFECTS/360XStream/page/about-us', 'yes', '2', '0', 2, '2021-08-29 06:04:24', 2, '2021-08-29 06:04:24', 2),
(4, 'Home', 5, 'http://localhost/7EFFECTS/360XStream', 'yes', '0', '0', 1, '2021-08-31 01:07:01', 2, '2021-08-31 01:07:01', 2),
(6, 'Pricing Plan', 5, 'http://localhost/7EFFECTS/360XStream/pricing-plan', 'yes', '0', '0', 4, '2021-08-31 05:30:34', 2, '2021-09-16 05:31:36', 2),
(7, 'Contac Us', 5, 'http://localhost/7EFFECTS/360XStream/contact-us', 'yes', '0', '0', 5, '2021-08-31 05:32:02', 2, '2021-08-31 05:32:02', 2);

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2021_07_23_014300_create_events_table', 1),
(16, '2021_07_28_020747_remove_events_fields_add_new', 2),
(17, '2021_07_28_021417_add_events_fields', 3),
(18, '2021_07_28_022628_create_events_table', 4),
(19, '2021_07_29_024852_create_page_table', 5),
(20, '2021_07_29_040738_remove_sameurlno_field', 6),
(21, '2021_07_29_045402_create_menu_table', 7),
(22, '2021_07_29_060932_add_menu_table', 8),
(23, '2021_08_01_062822_create_venues_table', 9),
(24, '2021_08_01_170506_create_organizer_table', 10),
(25, '2021_08_03_045751_create_package_table', 11),
(26, '2021_08_03_051158_create_package_table', 12),
(27, '2021_08_13_101208_create_permission_tables', 13),
(28, '2021_08_17_095918_create_permission_group_table', 14),
(30, '2021_08_24_092810_create_camera_table', 15),
(31, '2021_08_25_210816_create_attendee_table', 16),
(32, '2021_09_01_154419_create_categories_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `is_paid` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `amount`, `qty`, `date`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 3600.00, 3, '2021-09-27', '1', '2021-09-27 01:08:54', '2021-09-27 01:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `user_id`, `name`, `email`, `description`, `image`, `website`, `fb`, `instagram`, `youtube`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 4, 'Kelsey Cash', 'organizer@admin.com', 'Quia et rem consecte', NULL, 'https://www.tidydi.info', 'Voluptatem architec', 'Dolorem quo dolor du', 'Nisi reprehenderit e', '2021-08-19 21:22:36', 4, '2021-08-19 21:22:36', 4),
(4, 5, 'Rosalyn Rhodes', 'halej@mailinator.com', 'Deleniti vel tempora', NULL, 'https://www.pehekatyzi.ws', 'Praesentium qui esse', 'Minus porro odit est', 'Quia laboriosam in', '2021-09-26 20:57:10', 5, '2021-09-26 20:57:10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mPrice` decimal(8,2) NOT NULL,
  `aPrice` decimal(8,2) NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci,
  `allowedEvent` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `mPrice`, `aPrice`, `features`, `allowedEvent`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'Bronze', '100.00', '1150.00', '1 Event,1 Venue,Call Support,Special Access', 1, 'Autem molestiae magn', '2021-08-10 23:37:30', 2, '2021-08-31 05:41:04', 2),
(3, 'Silver', '150.00', '1700.00', '2 Event,2 Venue,Call Support,Special Access', 2, 'Autem molestiae magn', '2021-08-10 23:37:30', 2, '2021-08-31 05:42:37', 2),
(4, 'Gold', '250.00', '2800.00', '4 Event,4 Venue,Call Support,Special Access', 4, NULL, '2021-08-31 05:44:00', 2, '2021-08-31 05:44:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlSlug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2',
  `onFooter` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `urlSlug`, `content`, `created_at`, `created_by`, `updated_at`, `updated_by`, `onFooter`) VALUES
(5, 'How to purchase camera', 'how-to-purchase-camera', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', '2021-07-29 03:07:24', 2, '2021-07-29 03:07:24', 2, '0'),
(6, 'About Us', 'about-us', '<div class=\"region region-content\"> <div id=\"block-block-3\" class=\"block block-block\"> <div class=\"content\"> <h2 class=\"word-rotator-title\"> The New Way to Manage Your Event. </h2> <div class=\"row\"> <div class=\"col-md-10\"> <p class=\"lead\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sodales justo, eu dignissim tortor pulvinar et. Aenean pellentesque justo ipsum, at dictum lacus blandit id. </p><p class=\"lead\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sodales justo, eu dignissim tortor pulvinar et. Aenean pellentesque justo ipsum, at dictum lacus blandit id. </p><p class=\"lead\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sodales justo, eu dignissim tortor pulvinar et. Aenean pellentesque justo ipsum, at dictum lacus blandit id. </p></div><div class=\"col-md-2\"> <a href=\"#\" class=\"btn btn-lg btn-primary push-top\">View Services</a> </div></div><hr class=\"tall\"/> </div></div><div id=\"block-block-4\" class=\"block block-block\"> <div class=\"content\"> <div class=\"row\"> <div class=\"col-md-8\"> <h3><strong>Who</strong> We Are</h3> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sodales justo, eu dignissim tortor pulvinar et. Aenean pellentesque justo ipsum, at dictum lacus blandit id. Nullam aliquam scelerisque enim, ac facilisis sem porttitor et. Suspendisse euismod mi vitae metus gravida, in faucibus augue pellentesque. </p></div><div class=\"col-md-4\"> <div class=\"featured-box featured-box-secundary\"> <div class=\"box-content\"> <h4>Our Mission</h4> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sodales justo, eu dignissim tortor pulvinar et. Aenean pellentesque justo ipsum, at dictum lacus blandit id.</p></div></div></div></div></div></div><div id=\"node-28156\" class=\"node node-page clearfix\" about=\"/about-us\" typeof=\"foaf:Document\"> <span property=\"dc:title\" content=\"About Us\" class=\"rdf-meta element-hidden\"></span> <div class=\"content\"></div></div></div>', '2021-08-29 04:52:59', 2, '2021-08-29 04:52:59', 2, '0'),
(7, 'About Technology', 'about-technology', '<p style=\"text-align: center; \"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><strong>About Technology</strong></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p>', '2021-08-29 04:52:59', 2, '2021-08-29 04:52:59', 2, '0');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin_dashboard', 'web', '2021-08-12 23:24:48', '2021-08-12 23:24:48'),
(2, 'event_main', 'web', '2021-08-13 00:00:22', '2021-08-13 00:00:22'),
(3, 'event_add', 'web', '2021-08-13 00:00:22', '2021-08-13 00:00:22'),
(4, 'event_edit', 'web', '2021-08-13 00:03:48', '2021-08-13 00:03:48'),
(5, 'event_delete', 'web', '2021-08-13 00:03:59', '2021-08-13 00:03:59'),
(6, 'venue_main', 'web', '2021-08-15 17:56:45', '2021-08-15 17:56:45'),
(7, 'venue_add', 'web', '2021-08-15 17:56:45', '2021-08-15 17:56:45'),
(8, 'venue_edit', 'web', '2021-08-15 17:56:52', '2021-08-15 17:56:52'),
(9, 'venue_delete', 'web', '2021-08-15 17:57:00', '2021-08-15 17:57:00'),
(10, 'orgnizer_main', 'web', '2021-08-15 17:57:52', '2021-08-15 17:57:52'),
(11, 'orgnizer_add', 'web', '2021-08-15 17:57:52', '2021-08-15 17:57:52'),
(12, 'orgnizer_edit', 'web', '2021-08-15 17:58:00', '2021-08-15 17:58:00'),
(13, 'orgnizer_delete', 'web', '2021-08-15 17:58:10', '2021-08-15 17:58:10'),
(14, 'package_main', 'web', '2021-08-15 17:59:13', '2021-08-15 17:59:13'),
(15, 'package_add', 'web', '2021-08-15 17:59:13', '2021-08-15 17:59:13'),
(16, 'package_edit', 'web', '2021-08-15 17:59:29', '2021-08-15 17:59:29'),
(17, 'package_delete', 'web', '2021-08-15 17:59:38', '2021-08-15 17:59:38'),
(18, 'page_main', 'web', '2021-08-22 13:23:45', '2021-08-22 13:23:45'),
(19, 'page_add', 'web', '2021-08-22 13:24:02', '2021-08-22 13:24:02'),
(20, 'page_edit', 'web', '2021-08-22 13:24:10', '2021-08-22 13:24:10'),
(21, 'page_delete', 'web', '2021-08-22 13:24:21', '2021-08-22 13:24:21'),
(22, 'role_user_main', 'web', '2021-08-22 13:27:16', '2021-08-22 13:27:16'),
(23, 'role_user_add', 'web', '2021-08-22 13:27:21', '2021-08-22 13:27:21'),
(24, 'role_user_edit', 'web', '2021-08-22 13:27:27', '2021-08-22 13:27:27'),
(25, 'role_user_delete', 'web', '2021-08-22 13:27:35', '2021-08-22 13:27:35'),
(26, 'menu_main', 'web', '2021-08-22 13:31:48', '2021-08-22 13:31:48'),
(27, 'menu_add', 'web', '2021-08-22 13:31:55', '2021-08-22 13:31:55'),
(28, 'menu_edit', 'web', '2021-08-22 13:32:01', '2021-08-22 13:32:01'),
(29, 'menu_delete', 'web', '2021-08-22 13:32:10', '2021-08-22 13:32:10'),
(30, 'order_main', 'web', '2021-08-22 13:31:48', '2021-08-22 13:31:48'),
(31, 'order_add', 'web', '2021-08-22 13:31:55', '2021-08-22 13:31:55'),
(32, 'order_edit', 'web', '2021-08-22 13:32:01', '2021-08-22 13:32:01'),
(33, 'order_delete', 'web', '2021-08-22 13:32:10', '2021-08-22 13:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission_group`
--

CREATE TABLE `permission_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_group`
--

INSERT INTO `permission_group` (`id`, `name`) VALUES
(1, 'dashboard'),
(2, 'event'),
(3, 'venue'),
(4, 'orgnizer'),
(5, 'package'),
(6, 'page'),
(7, 'role_user'),
(8, 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `pg_details`
--

CREATE TABLE `pg_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `balance_transaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_url` text COLLATE utf8mb4_unicode_ci,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` enum('succeeded','pending','failed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method_details` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pg_details`
--

INSERT INTO `pg_details` (`id`, `order_id`, `payment_id`, `amount`, `balance_transaction`, `transaction_time`, `description`, `payment_method`, `receipt_url`, `currency`, `payment_status`, `payment_method_details`, `created_at`, `updated_at`) VALUES
(1, 1, 'ch_3JeDULK2aVYNHJco0VdQnxHF', 10800.00, 'txn_3JeDULK2aVYNHJco0mP0jH1R', '1632724737', 'Test payment', 'card_1JeDUJK2aVYNHJcouTjBJtLz', 'https://pay.stripe.com/receipts/acct_1Ja3ljK2aVYNHJco/ch_3JeDULK2aVYNHJco0VdQnxHF/rcpt_KIp8iWFHcje8FRbXAL3Sc736g5VWquT', 'usd', 'succeeded', '{\"card\": {\"brand\": \"visa\", \"last4\": \"4242\", \"checks\": {\"cvc_check\": \"pass\", \"address_line1_check\": null, \"address_postal_code_check\": null}, \"wallet\": null, \"country\": \"US\", \"funding\": \"credit\", \"network\": \"visa\", \"exp_year\": 2025, \"exp_month\": 1, \"fingerprint\": \"t9HKTQ0GGdXtii0k\", \"installments\": null, \"three_d_secure\": null}, \"type\": \"card\"}', '2021-09-27 01:08:54', '2021-09-27 01:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `tax`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Camera', 3600.00, '0.00', '2021-07-22 18:30:00', 2, '2021-07-22 18:30:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'web', '2021-08-13 04:44:55', 2, '2021-08-13 04:44:55', 2),
(2, 'user', 'web', '2021-08-16 01:39:28', 2, '2021-09-01 11:28:43', 2),
(3, 'organizer', 'web', '2021-08-19 06:32:47', 2, '2021-08-19 06:32:47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'Admin', 'Roya', 'admin@admin.com', '7903710008', 'USA', NULL, '$2y$10$LtokC7tmT9zFECklj6D2y.8qvxgCI/St1g4SQWJmJO42c5Ab1n7v2', NULL, NULL, NULL, '2021-07-29 04:11:28', 2, '2021-09-02 09:00:34', 2),
(4, 'Kelsey Cash', NULL, 'organizer@admin.com', '555555555', '', NULL, '$2y$10$YzwoBNW/HFyGEEmkne0H6uU9/Z9Hh9c4WGmfQ.lsBgQVHTD9gp5OG', NULL, NULL, NULL, '2021-08-19 21:23:37', 2, '2021-09-06 22:41:04', 2),
(5, 'Rosalyn Rhodes', NULL, 'halej@mailinator.com', NULL, NULL, NULL, '$2y$10$MxkkfQBHJona7DVhSQN51OFKepmUQ8pvOaKoOtbvyrTTpRuawt.H2', NULL, NULL, NULL, '2021-09-26 20:57:10', 2, '2021-09-26 20:57:10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `camera_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `organizer_id`, `camera_id`, `name`, `image`, `website`, `fb`, `instagram`, `youtube`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, 3, 'Xena Fowler', 'venues/Dgk5NE7vp4P78LD7aWcpfslNlXyrPqO3bP7meShC.png', 'https://www.zuhy.co', 'Non officia reiciend', 'In culpa quia imped', 'Non corporis digniss', '2021-08-01 11:05:19', 2, '2021-09-21 07:58:31', 2),
(2, 0, 3, 'Peter Pugh', NULL, 'https://www.wovesokybi.ws', 'https://www.fb.com', 'https://www.insta.com', 'https://www.youtube.com', '2021-08-31 05:27:42', 2, '2021-08-31 05:27:42', 2),
(3, 0, 4, 'Ronan Savage', NULL, 'https://www.katybiruwe.net', 'Et accusantium dolor', 'Aute nihil vel aliqu', 'Totam amet perferen', '2021-09-02 22:43:12', 2, '2021-09-02 22:43:12', 2),
(4, 0, 3, 'Avram Popes', NULL, 'https://www.cobubizelano.cm', 'Iusto occaecat archi', 'Alias magna cumque e', 'Odio fugiat magni d', '2021-09-20 04:50:41', 4, '2021-09-20 05:11:06', 2),
(7, 4, 3, 'VENUE-0007', 'default.jpg', '', '', '', '', '2021-09-27 01:08:56', 5, '2021-09-27 01:08:56', 2),
(8, 4, 0, 'VENUE-0008', 'default.jpg', '', '', '', '', '2021-09-27 01:08:56', 5, '2021-09-27 01:08:56', 2),
(9, 4, 0, 'VENUE-0009', 'default.jpg', '', '', '', '', '2021-09-27 01:08:56', 5, '2021-09-27 01:08:56', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_group`
--
ALTER TABLE `permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_details`
--
ALTER TABLE `pg_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permission_group`
--
ALTER TABLE `permission_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pg_details`
--
ALTER TABLE `pg_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
