-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blinkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_link` tinyint(1) NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category_id`, `title`, `description`, `image`, `is_link`, `link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 12, 'Holi Offer', 'Holi Offer', 'banner/7Dt35h6KYOF36hmt0G3EWXf622UlowmVeiiyjzgO.jpg', 1, 'http://127.0.0.1:8000/shop/mens', 1, '2024-06-20 08:03:23', '2024-06-20 08:03:23'),
(2, 14, 'Big Billian Sale', 'adadadwedwe', 'banner/e9xyEMVJY9BbRwQc2BndfibFpQdnBfo1BOM4wW4Y.jpg', 1, 'http://127.0.0.1:8000/shop/mens', 1, '2024-06-20 08:18:28', '2024-06-20 09:12:00'),
(3, 12, 'dsadasda', 'adasd', 'banner/UuKCOHsyvM4e8I6fAXarmPRfswWZ42quS8o1wvg3.jpg', 1, 'http://127.0.0.1:8000/shop/mens', 1, '2024-06-20 09:10:17', '2024-06-20 09:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Zudio', 'zudio', NULL, NULL, 1, '2024-06-11 09:43:19', '2024-06-11 09:43:19'),
(11, 'H&M', 'hm', NULL, NULL, 1, '2024-06-11 09:43:30', '2024-06-11 09:43:30'),
(12, 'Adidas', 'adidas', NULL, NULL, 1, '2024-06-11 09:43:35', '2024-06-11 09:43:35'),
(13, 'Nike', 'nike', NULL, NULL, 1, '2024-06-11 09:43:41', '2024-06-11 09:43:41'),
(14, 'Reebook', 'reebook', 'xccvsf eegergdgdfg ', NULL, 1, '2024-06-11 09:43:48', '2024-06-15 12:45:32'),
(15, 'Manyvar', 'manyvar', 'x cxzczdvdvdvsdv ver tr htrh trg tr', NULL, 1, '2024-06-11 09:43:58', '2024-06-15 12:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(12, 'Mens', NULL, 1, '2024-06-11 09:44:06', '2024-06-11 09:44:06', 'mens'),
(13, 'Women', NULL, 1, '2024-06-11 09:44:13', '2024-06-11 09:44:13', 'women'),
(14, 'Kids', NULL, 1, '2024-06-11 09:44:28', '2024-06-11 09:44:28', 'kids'),
(15, 'Home', NULL, 1, '2024-06-11 09:44:36', '2024-06-11 09:44:36', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#110e0d', 1, '2024-06-21 07:29:13', '2024-06-21 07:46:18'),
(2, 'Green', '#23b3b0', 1, '2024-06-21 07:46:44', '2024-06-21 09:32:04'),
(3, 'Blue', '#5055f7', 1, '2024-06-21 07:47:38', '2024-06-21 07:47:38'),
(4, 'White', '#ffffff', 1, '2024-06-22 07:55:56', '2024-06-22 07:55:56'),
(5, 'Gold', '#f0df89', 1, '2024-06-22 07:56:44', '2024-06-22 07:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `is_percentage` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `no_of_use_by_user` int(11) NOT NULL DEFAULT 1,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_use_by_users`
--

CREATE TABLE `coupon_use_by_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `user_id`, `address`, `city`, `state`, `pincode`, `is_default`, `created_at`, `updated_at`, `mobile`) VALUES
(3, 1, 'a444 Noida sector3', 'Noida', 'UP', '232222', 1, '2024-06-15 07:21:18', '2024-06-15 08:13:41', '88998898988'),
(4, 1, 'block b2', 'new ashok nagar', 'Delhi', '232222', 0, '2024-06-15 07:45:46', '2024-06-15 08:13:41', '9988998899'),
(8, 7, ' Suite 278 1837', 'Milda Lake,', ' Breitenbergshire,', '334433', 0, '2024-06-18 11:53:45', '2024-06-18 11:53:45', '3233232');

-- --------------------------------------------------------

--
-- Table structure for table `custome_sizes`
--

CREATE TABLE `custome_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custome_sizes`
--

INSERT INTO `custome_sizes` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Small', 'S', 1, '2024-06-21 12:04:11', '2024-06-21 12:04:11'),
(2, 'Large', 'L', 1, '2024-06-21 12:07:50', '2024-06-21 12:07:50'),
(3, 'Extra Large', 'XL', 1, '2024-06-21 12:08:09', '2024-06-21 12:12:45'),
(4, 'Small', 's', 1, '2024-06-21 12:08:31', '2024-06-22 07:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boys`
--

CREATE TABLE `delivery_boys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wallet` double NOT NULL DEFAULT 0,
  `current_address` longtext DEFAULT NULL,
  `permanent_address` longtext DEFAULT NULL,
  `id_type` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `vehicle_number` varchar(255) DEFAULT NULL,
  `is_licence` tinyint(1) NOT NULL DEFAULT 0,
  `is_insurance` tinyint(1) NOT NULL DEFAULT 0,
  `is_vehicle_paper` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_bank_details`
--

CREATE TABLE `delivery_boy_bank_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_income_histories`
--

CREATE TABLE `delivery_boy_income_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED NOT NULL,
  `income` double NOT NULL DEFAULT 0,
  `income_type` varchar(255) NOT NULL COMMENT 'delivery,tip,',
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_ratings`
--

CREATE TABLE `delivery_boy_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_tips`
--

CREATE TABLE `delivery_boy_tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tip_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charge_settings`
--

CREATE TABLE `delivery_charge_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `min_order_amount` decimal(10,2) NOT NULL,
  `delivery_charge` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra_charges_settings`
--

CREATE TABLE `extra_charges_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`answer`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `i_m_a_p_mail_settings`
--

CREATE TABLE `i_m_a_p_mail_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_driver` varchar(255) NOT NULL,
  `mail_host` varchar(255) NOT NULL,
  `mail_port` varchar(255) NOT NULL,
  `mail_username` varchar(255) NOT NULL,
  `mail_password` varchar(255) NOT NULL,
  `mail_encryption` varchar(255) NOT NULL,
  `mail_from_address` varchar(255) NOT NULL,
  `mail_from_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `offer_price` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `description`, `offer_price`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Regular', 'An everyday staple, the regular t-shirt is the workhorse of your wardrobe. An easy-wearing unisex fit makes the regular tee perfect for every body, and with combed ring spun cotton they have mid-weight fabric & an extra-comfortable feel', '400', '500', 1, '2024-06-21 08:20:36', '2024-06-21 08:20:36'),
(2, 'Extra Soft', 'The softest, coziest, most comfortable tee in your closet. This high-quality Bella + Canvas t-shirt puts a refined twist on a well-loved style giving you an updated unisex essential that fits like a well-loved favorite.', '600', '700', 1, '2024-06-21 08:35:28', '2024-06-21 08:35:28'),
(3, 'Premium', 'Our premium tee provides a structured fit in an elevated garment with a handful of subtle but noticeable flourishes. The heavier combed cotton results in a mid-weight fabric with a buttery smooth touch', '800', '900', 1, '2024-06-21 08:36:15', '2024-06-21 08:36:15'),
(4, 'Vintage Wash', 'Vintage-washed, garment-dyed tee in a unisex style. Made from 100% ringspun cotton sourced from American farms. Shoulder-to-shoulder tape for durability. Ribbed set-in collar lays flat. ', '1100', '1300', 1, '2024-06-21 08:36:54', '2024-06-21 09:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(109, '0001_01_01_000000_create_users_table', 1),
(110, '0001_01_01_000001_create_cache_table', 1),
(111, '0001_01_01_000002_create_jobs_table', 1),
(112, '2024_06_01_145250_create_categories_table', 1),
(113, '2024_06_01_145411_create_sub_categories_table', 1),
(114, '2024_06_01_145530_create_brands_table', 1),
(115, '2024_06_01_145830_create_products_table', 1),
(116, '2024_06_01_150403_create_product_variants_table', 1),
(117, '2024_06_01_150629_create_product_images_table', 1),
(118, '2024_06_01_153755_create_most_buy_products_table', 1),
(119, '2024_06_01_153836_create_product_ratings_table', 1),
(120, '2024_06_01_155337_create_delivery_boys_table', 1),
(121, '2024_06_01_155755_create_delivery_boy_ratings_table', 1),
(122, '2024_06_01_160256_create_customer_addresses_table', 1),
(123, '2024_06_01_161558_create_orders_table', 1),
(124, '2024_06_01_162503_create_delivery_boy_income_histories_table', 1),
(125, '2024_06_01_162610_create_delivery_boy_bank_details_table', 1),
(126, '2024_06_01_162717_create_order_items_table', 1),
(127, '2024_06_01_163024_create_banners_table', 1),
(128, '2024_06_01_163952_create_offer_banners_table', 1),
(129, '2024_06_01_165500_create_coupons_table', 1),
(130, '2024_06_01_165646_create_coupon_use_by_users_table', 1),
(131, '2024_06_01_165825_create_suppliers_table', 1),
(132, '2024_06_01_170001_create_supplier_item_histories_table', 1),
(133, '2024_06_01_170527_create_supplier_invoices_table', 1),
(134, '2024_06_01_171234_create_pick_and_drops_table', 1),
(135, '2024_06_01_175602_create_site_settings_table', 1),
(136, '2024_06_01_175754_create_s_m_t_p_mail_settings_table', 1),
(137, '2024_06_01_175828_create_i_m_a_p_mail_settings_table', 1),
(138, '2024_06_01_175921_create_delivery_charge_settings_table', 1),
(139, '2024_06_01_180011_create_extra_charges_settings_table', 1),
(140, '2024_06_01_180325_create_delivery_boy_tips_table', 1),
(141, '2024_06_01_180446_create_privacy_policies_table', 1),
(142, '2024_06_01_180519_create_terms_conditions_table', 1),
(143, '2024_06_01_180556_create_refund_policies_table', 1),
(144, '2024_06_01_180713_create_f_a_q_s_table', 1),
(145, '2024_06_18_142251_create_order_payments_table', 2),
(146, '2024_06_18_155425_create_order_histories_table', 3),
(147, '2024_06_21_125231_create_colors_table', 4),
(148, '2024_06_21_133533_create_materials_table', 5),
(149, '2024_06_21_173116_create_custome_sizes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `most_buy_products`
--

CREATE TABLE `most_buy_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_banners`
--

CREATE TABLE `offer_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_banners`
--

INSERT INTO `offer_banners` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'main offer', 'lkjjdoqw mdjqw', 'banner/TcLhJoBEUkJKhV7dT8YG84x5Pe2QCmtvJJV9egrG.jpg', '2024-06-20 09:36:04', '2024-06-20 10:36:30'),
(2, 'ujiikk', 'mhkjh', 'banner/zGDZWpaEhKeKkOk4NFH7Sc79vqAlgfyq0n0EaNGd.jpg', '2024-06-20 10:08:11', '2024-06-20 10:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_address_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `status` enum('pending','accepted','cancelled','delivered') NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) DEFAULT NULL,
  `delivery_fee` decimal(10,2) DEFAULT NULL,
  `tax_amount` decimal(10,2) DEFAULT NULL,
  `platform_fee` decimal(10,2) DEFAULT NULL,
  `order_type` varchar(255) NOT NULL DEFAULT 'delivery' COMMENT 'pickup, delivery,pos_order',
  `pickup_time` datetime DEFAULT NULL,
  `delivery_time` datetime DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cart_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `delivery_boy_id`, `customer_address_id`, `order_number`, `status`, `payment_method`, `payment_status`, `total_amount`, `discount_amount`, `delivery_fee`, `tax_amount`, `platform_fee`, `order_type`, `pickup_time`, `delivery_time`, `note`, `created_at`, `updated_at`, `cart_amount`) VALUES
(1, 1, NULL, 3, '17063221', 'pending', 'COD', 'unpaid', 2950.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, '2024-06-05 00:00:00', NULL, '2024-06-17 05:48:51', '2024-06-18 09:59:00', 2800.00),
(2, 1, NULL, 3, '17067021', '', 'COD', 'paid', 2950.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, '2024-06-20 00:00:00', NULL, '2024-06-17 05:49:32', '2024-06-17 08:04:42', 2800.00),
(5, 1, NULL, 3, '17064018', 'pending', 'COD', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 09:53:30', '2024-06-17 09:53:30', 7200.00),
(6, 1, NULL, 3, '17069676', 'pending', 'COD', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 10:20:28', '2024-06-17 10:20:28', 7200.00),
(7, 1, NULL, 3, '17066341', 'accepted', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 11:58:47', '2024-06-17 11:59:14', 7200.00),
(8, 1, NULL, 3, '17067957', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:19:59', '2024-06-17 12:19:59', 7200.00),
(9, 1, NULL, 3, '17065713', 'accepted', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:07', '2024-06-18 09:57:02', 7200.00),
(10, 1, NULL, 3, '17065448', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:07', '2024-06-17 12:20:07', 7200.00),
(11, 1, NULL, 3, '17065642', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:08', '2024-06-17 12:20:08', 7200.00),
(12, 1, NULL, 3, '17069145', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:09', '2024-06-17 12:20:09', 7200.00),
(13, 1, NULL, 3, '17066825', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:09', '2024-06-17 12:20:09', 7200.00),
(14, 1, NULL, 3, '17062608', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:09', '2024-06-17 12:20:09', 7200.00),
(15, 1, NULL, 3, '17069668', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:09', '2024-06-17 12:20:09', 7200.00),
(16, 1, NULL, 3, '17069310', 'pending', 'Online', 'unpaid', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:10', '2024-06-17 12:51:05', 7200.00),
(17, 1, NULL, 3, '17062437', 'accepted', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:10', '2024-06-18 09:57:30', 7200.00),
(18, 1, NULL, 3, '17064231', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:10', '2024-06-17 12:20:10', 7200.00),
(19, 1, NULL, 3, '17068489', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:10', '2024-06-17 12:20:10', 7200.00),
(20, 1, NULL, 3, '17066108', 'pending', 'Online', 'pending', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:10', '2024-06-17 12:20:10', 7200.00),
(21, 1, NULL, 3, '17063819', 'pending', 'Online', 'unpaid', 7350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:20:11', '2024-06-17 12:50:41', 7200.00),
(22, 1, NULL, 3, '17061513', 'delivered', 'COD', 'paid', 2350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:48:18', '2024-06-18 05:24:48', 2200.00),
(23, 1, NULL, 3, '17061718', 'pending', 'Online', 'paid', 2350.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-17 12:51:29', '2024-06-17 12:51:29', 2200.00),
(25, 1, NULL, 3, '18069567', 'pending', 'COD', 'unpaid', 650.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, '2024-06-27 00:00:00', NULL, '2024-06-18 05:25:57', '2024-06-18 05:26:18', 500.00),
(26, 1, NULL, 3, '18062524', 'pending', 'Online', 'paid', 650.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 05:26:51', '2024-06-18 05:26:51', 500.00),
(27, 1, NULL, 3, '18066114', 'pending', 'Online', 'paid', 650.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 08:46:58', '2024-06-18 08:46:58', 500.00),
(28, 1, NULL, 3, '18068024', 'pending', 'Online', 'paid', 650.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 09:28:31', '2024-06-18 09:28:31', 500.00),
(29, 1, NULL, 3, '18067937', 'pending', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 09:33:11', '2024-06-18 11:34:27', 6000.00),
(30, 1, NULL, 3, '18066000', 'delivered', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, '2024-06-21 00:00:00', NULL, '2024-06-18 10:34:03', '2024-06-18 11:05:21', 6000.00),
(31, 1, NULL, 3, '18064224', 'delivered', 'COD', 'unpaid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 11:37:08', '2024-06-18 11:37:44', 6000.00),
(32, 1, NULL, 3, '18066794', 'accepted', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 11:38:15', '2024-06-18 11:38:43', 6000.00),
(34, 7, NULL, 8, '18065841', 'pending', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, 'buyers and sellers, including mobile shopping and online payment encryption.', '2024-06-18 11:53:45', '2024-06-18 11:53:45', 6000.00),
(35, 7, NULL, 8, '18067986', 'delivered', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 12:01:03', '2024-06-18 12:26:52', 6000.00),
(36, 7, NULL, 8, '18068593', 'accepted', 'COD', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-18 12:01:08', '2024-06-19 05:34:10', 6000.00),
(37, 1, NULL, 3, '19066743', 'delivered', 'COD', 'unpaid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, NULL, NULL, '2024-06-19 08:04:29', '2024-06-19 08:25:37', 6000.00),
(38, 1, NULL, 3, '19066624', 'accepted', 'Online', 'paid', 6150.00, 50.00, 100.00, 100.00, 0.00, 'delivery', NULL, '2024-06-22 00:00:00', NULL, '2024-06-19 08:07:03', '2024-06-19 08:54:48', 6000.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','accepted','cancelled','delivered') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_histories`
--

INSERT INTO `order_histories` (`id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 30, 'pending', '2024-06-18 10:34:03', '2024-06-18 10:34:03'),
(2, 30, 'accepted', '2024-06-18 10:34:45', '2024-06-18 10:34:45'),
(3, 30, 'cancelled', '2024-06-18 10:57:50', '2024-06-18 10:57:50'),
(4, 30, 'delivered', '2024-06-18 11:05:21', '2024-06-18 11:05:21'),
(5, 29, 'pending', '2024-06-18 11:34:27', '2024-06-18 11:34:27'),
(6, 31, 'pending', '2024-06-18 11:37:08', '2024-06-18 11:37:08'),
(7, 31, 'accepted', '2024-06-18 11:37:25', '2024-06-18 11:37:25'),
(8, 31, 'delivered', '2024-06-18 11:37:44', '2024-06-18 11:37:44'),
(9, 32, 'pending', '2024-06-18 11:38:15', '2024-06-18 11:38:15'),
(10, 32, 'accepted', '2024-06-18 11:38:43', '2024-06-18 11:38:43'),
(12, 34, 'pending', '2024-06-18 11:53:45', '2024-06-18 11:53:45'),
(13, 35, 'pending', '2024-06-18 12:01:03', '2024-06-18 12:01:03'),
(14, 36, 'pending', '2024-06-18 12:01:08', '2024-06-18 12:01:08'),
(15, 36, 'accepted', '2024-06-18 12:25:25', '2024-06-18 12:25:25'),
(16, 35, 'delivered', '2024-06-18 12:26:52', '2024-06-18 12:26:52'),
(17, 37, 'pending', '2024-06-19 08:04:29', '2024-06-19 08:04:29'),
(18, 38, 'pending', '2024-06-19 08:07:03', '2024-06-19 08:07:03'),
(19, 37, 'accepted', '2024-06-19 08:25:13', '2024-06-19 08:25:13'),
(20, 37, 'delivered', '2024-06-19 08:25:37', '2024-06-19 08:25:37'),
(21, 38, 'accepted', '2024-06-19 08:33:07', '2024-06-19 08:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `varient` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`varient`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`, `varient`) VALUES
(1, 2, 17, 2, '2024-06-17 05:49:32', '2024-06-17 05:49:32', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(2, 2, 12, 1, '2024-06-17 05:49:32', '2024-06-17 05:49:32', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(3, 5, 12, 1, '2024-06-17 09:53:30', '2024-06-17 09:53:30', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(4, 5, 9, 2, '2024-06-17 09:53:30', '2024-06-17 09:53:30', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(5, 5, 11, 1, '2024-06-17 09:53:30', '2024-06-17 09:53:30', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(6, 6, 12, 1, '2024-06-17 10:20:28', '2024-06-17 10:20:28', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(7, 6, 9, 2, '2024-06-17 10:20:28', '2024-06-17 10:20:28', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(8, 6, 11, 1, '2024-06-17 10:20:28', '2024-06-17 10:20:28', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(9, 7, 12, 1, '2024-06-17 11:58:47', '2024-06-17 11:58:47', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(10, 7, 9, 2, '2024-06-17 11:58:47', '2024-06-17 11:58:47', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(11, 7, 11, 1, '2024-06-17 11:58:47', '2024-06-17 11:58:47', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(12, 8, 12, 1, '2024-06-17 12:19:59', '2024-06-17 12:19:59', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(13, 8, 9, 2, '2024-06-17 12:19:59', '2024-06-17 12:19:59', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(14, 8, 11, 1, '2024-06-17 12:19:59', '2024-06-17 12:19:59', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(15, 9, 12, 1, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(16, 9, 9, 2, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(17, 9, 11, 1, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(18, 10, 12, 1, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(19, 10, 9, 2, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(20, 10, 11, 1, '2024-06-17 12:20:07', '2024-06-17 12:20:07', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(21, 11, 12, 1, '2024-06-17 12:20:08', '2024-06-17 12:20:08', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(22, 11, 9, 2, '2024-06-17 12:20:08', '2024-06-17 12:20:08', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(23, 11, 11, 1, '2024-06-17 12:20:08', '2024-06-17 12:20:08', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(24, 12, 12, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(25, 12, 9, 2, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(26, 12, 11, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(27, 13, 12, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(28, 13, 9, 2, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(29, 13, 11, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(30, 14, 12, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(31, 14, 9, 2, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(32, 14, 11, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(33, 15, 12, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(34, 15, 9, 2, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(35, 15, 11, 1, '2024-06-17 12:20:09', '2024-06-17 12:20:09', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(36, 16, 12, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(37, 16, 9, 2, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(38, 16, 11, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(39, 17, 12, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(40, 17, 9, 2, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(41, 17, 11, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(42, 18, 12, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(43, 18, 9, 2, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(44, 18, 11, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(45, 19, 12, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(46, 19, 9, 2, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(47, 19, 11, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(48, 20, 12, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(49, 20, 9, 2, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(50, 20, 11, 1, '2024-06-17 12:20:10', '2024-06-17 12:20:10', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(51, 21, 12, 1, '2024-06-17 12:20:11', '2024-06-17 12:20:11', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(52, 21, 9, 2, '2024-06-17 12:20:11', '2024-06-17 12:20:11', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(53, 21, 11, 1, '2024-06-17 12:20:11', '2024-06-17 12:20:11', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(54, 22, 12, 1, '2024-06-17 12:48:18', '2024-06-17 12:48:18', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(55, 22, 9, 2, '2024-06-17 12:48:18', '2024-06-17 12:48:18', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(56, 23, 12, 1, '2024-06-17 12:51:29', '2024-06-17 12:51:29', '{\"id\":19,\"product_id\":12,\"name\":\"Full\",\"sku\":\"8988um\",\"price\":\"20000.00\",\"offer_price\":\"1000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T10:00:30.000000Z\",\"updated_at\":\"2024-06-11T10:00:30.000000Z\"}'),
(57, 23, 9, 2, '2024-06-17 12:51:29', '2024-06-17 12:51:29', '{\"id\":26,\"product_id\":9,\"name\":\"red\",\"sku\":\"rdc234322\",\"price\":\"750.00\",\"offer_price\":\"600.00\",\"stock\":12,\"is_default\":0,\"created_at\":\"2024-06-12T10:10:55.000000Z\",\"updated_at\":\"2024-06-12T10:10:55.000000Z\"}'),
(60, 25, 16, 1, '2024-06-18 05:25:57', '2024-06-18 05:25:57', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(61, 26, 16, 1, '2024-06-18 05:26:51', '2024-06-18 05:26:51', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(62, 27, 16, 1, '2024-06-18 08:46:58', '2024-06-18 08:46:58', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(63, 28, 16, 1, '2024-06-18 09:28:31', '2024-06-18 09:28:31', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(64, 29, 11, 1, '2024-06-18 09:33:11', '2024-06-18 09:33:11', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(65, 29, 16, 2, '2024-06-18 09:33:11', '2024-06-18 09:33:11', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(66, 30, 11, 1, '2024-06-18 10:34:03', '2024-06-18 10:34:03', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(67, 30, 16, 2, '2024-06-18 10:34:03', '2024-06-18 10:34:03', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(68, 31, 11, 1, '2024-06-18 11:37:08', '2024-06-18 11:37:08', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(69, 31, 16, 2, '2024-06-18 11:37:08', '2024-06-18 11:37:08', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(70, 32, 11, 1, '2024-06-18 11:38:15', '2024-06-18 11:38:15', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(71, 32, 16, 2, '2024-06-18 11:38:15', '2024-06-18 11:38:15', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(74, 34, 11, 1, '2024-06-18 11:53:45', '2024-06-18 11:53:45', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(75, 34, 16, 2, '2024-06-18 11:53:45', '2024-06-18 11:53:45', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(76, 35, 11, 1, '2024-06-18 12:01:03', '2024-06-18 12:01:03', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(77, 35, 16, 2, '2024-06-18 12:01:03', '2024-06-18 12:01:03', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(78, 36, 11, 1, '2024-06-18 12:01:08', '2024-06-18 12:01:08', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(79, 36, 16, 2, '2024-06-18 12:01:08', '2024-06-18 12:01:08', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(80, 37, 16, 2, '2024-06-19 08:04:29', '2024-06-19 08:04:29', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(81, 37, 11, 1, '2024-06-19 08:04:29', '2024-06-19 08:04:29', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}'),
(82, 38, 16, 2, '2024-06-19 08:07:03', '2024-06-19 08:07:03', '{\"id\":23,\"product_id\":16,\"name\":\"full\",\"sku\":\"1212dwdw\",\"price\":\"900.00\",\"offer_price\":\"500.00\",\"stock\":122,\"is_default\":1,\"created_at\":\"2024-06-12T05:46:37.000000Z\",\"updated_at\":\"2024-06-12T05:46:37.000000Z\"}'),
(83, 38, 11, 1, '2024-06-19 08:07:03', '2024-06-19 08:07:03', '{\"id\":18,\"product_id\":11,\"name\":\"Full\",\"sku\":\"8q8w8\",\"price\":\"7000.00\",\"offer_price\":\"5000.00\",\"stock\":10,\"is_default\":1,\"created_at\":\"2024-06-11T09:58:37.000000Z\",\"updated_at\":\"2024-06-11T09:58:37.000000Z\"}');

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `razorpay_order_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `payment_id`, `amount`, `payment_method`, `razorpay_order_id`, `created_at`, `updated_at`) VALUES
(1, 29, 'pay_OOAwSOt3KrUkNZ', 6150.00, 'netbanking', 'order_OOAwHXUz0TNZiI', '2024-06-18 09:33:11', '2024-06-18 09:33:11'),
(2, 30, 'pay_OOBynQK56uKo4Q', 6150.00, 'netbanking', 'order_OOBygH3hMrrsY3', '2024-06-18 10:34:03', '2024-06-18 10:34:03'),
(3, 32, 'pay_OOD4dDv9O50xf1', 6150.00, 'netbanking', 'order_OOD4X8s1JvepW1', '2024-06-18 11:38:15', '2024-06-18 11:38:15'),
(4, 34, 'pay_OODL1N9zwyTz82', 6150.00, 'upi', 'order_OODKfZmSo8nHZj', '2024-06-18 11:53:45', '2024-06-18 11:53:45'),
(5, 35, 'pay_OODSiytXQCKMpm', 6150.00, 'upi', 'order_OODSRZwJ42iZwq', '2024-06-18 12:01:03', '2024-06-18 12:01:03'),
(6, 38, 'pay_OOY0daELOKnVxb', 6150.00, 'netbanking', 'order_OOY0Dn4QSvrtnJ', '2024-06-19 08:07:03', '2024-06-19 08:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pick_and_drops`
--

CREATE TABLE `pick_and_drops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_picked_up` tinyint(1) NOT NULL DEFAULT 0,
  `is_drop_out` tinyint(1) NOT NULL DEFAULT 0,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `pickup_time` varchar(255) DEFAULT NULL,
  `drop_time` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `vehicle_number` varchar(255) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `driver_contact` varchar(255) DEFAULT NULL,
  `charges` double NOT NULL DEFAULT 0,
  `status` enum('pending','accepted','rejected','completed') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `is_variant` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `product_details` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `store_id`, `name`, `is_variant`, `is_active`, `product_details`, `created_at`, `updated_at`, `description`) VALUES
(9, 12, 17, 10, 1, 'New X2 Tshirt', 1, 1, '<p><br></p><p><br></p><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Sleeve</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Full Sleeve</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Fit</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Regular</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Fabric</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Polyester</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Sales Package</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">1 T shirt</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Pack of</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">1</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Style Code</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">TS12</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Neck Type</b></div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Round Neck</div></div><p><br></p><p><b><br></b></p>', '2024-06-11 09:51:20', '2024-06-11 09:51:20', 'a long- or short-sleeved garment for the upper part of the body, usually lightweight and having a collar and a front opening. an undergarment of cotton, or other material, for the upper part of the body. a shirtwaist.'),
(10, 12, 18, 11, 1, 'Men Solid Round Neck Polyester Blue T-Shirt', 1, 1, '<div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Type</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Round Neck</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Sleeve</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Half Sleeve</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Fit</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Regular</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Fabric</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">Polyester</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Pack of</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">5</div></div><div class=\"row\" style=\"margin: 0px; padding: 0px; display: flex; flex-flow: wrap; width: 686.479px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><div class=\"col col-3-12 _9NUIO9\" style=\"margin: 0px; padding: 0px 0px 24px; width: 171.615px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Style Code</div><div class=\"col col-9-12 -gXFvC\" style=\"margin: 0px; padding: 0px 0px 24px; width: 514.854px; display: inline-block; vertical-align: top;\">SOLID ROUND NECK TSHIRTS</div></div>', '2024-06-11 09:53:40', '2024-06-11 09:53:40', 'a long- or short-sleeved garment for the upper part of the body, usually lightweight and having a collar and a front opening. an undergarment of cotton, or other material, for the upper part of the body. a shirtwaist.'),
(11, 13, 22, 11, 1, 'Black Satin Blend Flared Lehenga', 1, 1, '<div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">lehenga material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">satin blend</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">satin blend</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">black</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">unstitched</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">flared</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">garment type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">semi-stitched</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse attached :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">yes</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">product description :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">lehenga choli</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">e mart</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse length (cms) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">80</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">lehenga flare (cms) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">400</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse sleeve fabric :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">satin blend</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">country of origin :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">india</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">exclusive to limeroad :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">no</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">prints and pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">printed</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">product code :</div><div class=\"dIb vT c6\" style=\"display: inline-block; vertical-align: top; color: rgb(102, 102, 102); fill: rgb(102, 102, 102);\">21253170</div></div>', '2024-06-11 09:58:37', '2024-06-11 09:58:37', 'are you ready to adorn some alluring lehengas this season? well, gear up to look gracious as limeroad brings to you the most magnificent collection of lehengas from e mart and in black colours.\nfind these lovely lehengas in flared types and for different occasions.\ndon this outstanding collection from limeroad in satin blend fabrics and that too in superb designs.'),
(12, 13, 21, 12, 1, 'Women Blue Floral Printed Saree With Blouse', 1, 1, '<p><br></p><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">blouse material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">organza</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">blue</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">no. of pcs :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1pc</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">vamsee</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">country of origin :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">india</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">saree material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">organza</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">printed</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">prints and pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">floral</div></div>', '2024-06-11 10:00:30', '2024-06-11 10:00:30', 'product description : vamsee- brings to you this saree which is made from organza fabric with embroderied. this saree is designed with beautiful floral embroderied and beautify you and attracts crowd. you can wear it to weeding occasions as well as make it a part of your festive wear or party wear. you can also pair it with beautiful jewellery and pair of heels and you will look beautiful. this classy saree with a vamsee touch of class is meant for some very special occasions. to impress, or to look your best – this saree by vamsee can be worn at multiple occasions. comes with blouse piece :-\nthe saree comes with a blouse piece which is similar to the shade of the saree. it is unstitched and can be altered according to your fit and style that you require. the saree comes with a blouse piece which is similar to the shade of the saree. it is unstitched and can be altered according to your fit and style that you require.'),
(13, 13, 23, 13, 1, 'Black Poly Crepe Top', 1, 1, '<div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">fit :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">regular fit</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">sleeve type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">three quarter sleeves</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">black</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">poly crepe</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">cottinfab</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">no. of pcs :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">model details :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">wearing size: s height: 5\'8\\\"</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">country of origin :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">india</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">print &amp; pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">printed</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">straight</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">neck :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">collared</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">transparency of fabric :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">not transparent</div></div>', '2024-06-11 10:01:39', '2024-06-11 10:01:39', 'look trendy wearing this top from cottinfab and get this awesome collection in black colour.\nget this top in beautiful prints to flaunt for various occasions.\nlay your hands on this wonderful collection of tops in straight types to look your best in s size.'),
(16, 14, 25, 10, 1, 'Boy\'s Plain Slim Fit Jeans', 1, 1, '<div class=\"c6 fs13 fwB p160 pt0\" style=\"padding: 0px 0px 16px; color: rgb(102, 102, 102); fill: rgb(102, 102, 102); font-size: 0.875rem; font-weight: bold; font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif;\">Description</div><div class=\"c9 ttL\" style=\"color: rgb(153, 153, 153); fill: rgb(153, 153, 153); text-transform: lowercase; font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px;\"><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">fit :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">slim fit</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">occasion :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">casual wear</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">net quantity :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">black</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">denim</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">v-mart</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">no. of pcs :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">country of origin :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">india</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">print &amp; pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">plain</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color family :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">black</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">distressed</div></div></div>', '2024-06-12 05:46:37', '2024-06-12 05:46:37', 'update your little boy’s wardrobe with amazing distressed jeans in various styles and texture designs, perfect for everyday or occasional wear.  \nfind a great selection of black jeans made with high-quality denim in comfortable styles that your kid will love to wear all day long.  \nthe right pair of slim fit fit jeans can transform an outfit and give your kid the comfort and style for everything from playtime to party time.  '),
(17, 14, 26, 15, 1, 'Boys Striped Cotton Shirt', 1, 1, '<div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">sleeve type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">long sleeves</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">yellow</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">cotton</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">made in the shade</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">country of origin :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">india</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">print &amp; pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">stripes</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color family :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">yellow</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 15.008px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">neck :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">mandarin</div></div>', '2024-06-12 05:47:41', '2024-06-12 05:47:41', 'get ready to don the most extraordinary collection of formal shirts from ftx and that too in white colours.\nwant to create a good impression on your colleagues? fill your wardrobe with a 42 size and look absolutely killer for work wear occasion.'),
(18, 13, 20, 15, 1, 'WOMEN PINK SHIRT', 1, 1, '<p style=\"font-size: 16px; color: rgb(119, 119, 119); line-height: 1.8; letter-spacing: 0.05em; font-family: Lato, sans-serif;\">The Model is wearing a white blouse from our stylist\'s collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black cursive language which looks great on a white color.</p><div class=\"single-product-tables\" style=\"display: flex; margin-top: 10px; color: rgb(33, 37, 41); font-family: Lato, sans-serif; font-size: 14px;\"><table style=\"caption-side: bottom; width: 334.792px;\"><tbody style=\"border-color: inherit;\"><tr style=\"border-color: inherit; height: 35px; color: rgb(109, 109, 109); font-size: 16px; letter-spacing: 0.01em;\"><td style=\"border-color: inherit; border-width: 0px;\">Sleeve Length</td><td style=\"border-color: inherit; border-width: 0px; color: black;\">Sleevless</td></tr><tr style=\"border-color: inherit; height: 35px; color: rgb(109, 109, 109); font-size: 16px; letter-spacing: 0.01em;\"><td style=\"border-color: inherit; border-width: 0px;\">Neck</td><td style=\"border-color: inherit; border-width: 0px; color: black;\">Round Neck</td></tr><tr style=\"border-color: inherit; height: 35px; color: rgb(109, 109, 109); font-size: 16px; letter-spacing: 0.01em;\"><td style=\"border-color: inherit; border-width: 0px;\">Occasion</td><td style=\"border-color: inherit; border-width: 0px; color: black;\">Sports</td></tr></tbody></table><table style=\"caption-side: bottom; width: 334.792px;\"><tbody style=\"border-color: inherit;\"><tr style=\"border-color: inherit; height: 35px; color: rgb(109, 109, 109); font-size: 16px; letter-spacing: 0.01em;\"><td style=\"border-color: inherit; border-width: 0px;\">Fabric</td><td style=\"border-color: inherit; border-width: 0px; color: black;\">Polyester</td></tr><tr style=\"border-color: inherit; height: 35px; color: rgb(109, 109, 109); font-size: 16px; letter-spacing: 0.01em;\"><td style=\"border-color: inherit; border-width: 0px;\">Fit</td><td style=\"border-color: inherit; border-width: 0px; color: black;\">Regular Fit</td></tr></tbody></table></div>', '2024-06-12 06:51:36', '2024-06-12 06:51:36', 'The Model is wearing a white blouse from our stylist\'s collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black cursive language which looks great on a white color.\n\nFabric:\nArt silk is manufactured by synthetic fibres like rayon. It\'s light in weight and is soft on the skin for comfort in summers.Art silk is manufactured by synthetic fibres like rayon. It\'s light in weight and is soft on the skin for comfort in summers.');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `is_default`, `created_at`, `updated_at`) VALUES
(23, 9, 'products/xZwvxAKIBkygQERQX5hbkLIcko4KvBNtOsmAc8Xl.webp', 1, '2024-06-11 09:51:20', '2024-06-11 09:51:20'),
(24, 9, 'products/av2CjyEsccHxqdVL4xglghaVNwunSt0oCqvwezXH.webp', 0, '2024-06-11 09:51:20', '2024-06-11 09:51:20'),
(25, 9, 'products/MEf37Dwazlip8PYshX9pOXUhfgOx0KtlOYYp1Qfp.webp', 0, '2024-06-11 09:51:20', '2024-06-11 09:51:20'),
(26, 9, 'products/qgaYcVtnUsZOuMxQf1bHiUnPrf1rdlSmeM4o7Ug7.webp', 0, '2024-06-11 09:51:20', '2024-06-11 09:51:20'),
(27, 9, 'products/LhdB7g8hdbQahGSLh8z3w38Qq5Jw4wkYnlMSwRg1.webp', 0, '2024-06-11 09:51:20', '2024-06-11 09:51:20'),
(28, 10, 'products/zbp2fNJrID4XwY97psRsAI3WziOR9SogRabCoZ1M.webp', 1, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(29, 10, 'products/VjH5QUdEo2IotNX1TfNiTpIN7D7Myt32MwuLwybg.webp', 0, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(30, 10, 'products/KP4bJx4tfjRFVYbLmDoVtAcB4c7hVzwmJGCexGGF.webp', 0, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(31, 10, 'products/s6dX8g9G1jOcYfFJjlyT4WRLTlQHK3xqdKfQOzMb.webp', 0, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(32, 10, 'products/LODEHI8rAIRRpd08Vc4sYhFmft8bZqHwx3Xq7WMW.webp', 0, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(33, 11, 'products/4L0D6s87yfWtOJFvp4DmBKYKAFh5V27gsyEC1JAx.webp', 1, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(34, 11, 'products/zHfUqJimV91j3xnM7iCB5u0sfYWh28QJsgalNnzV.webp', 0, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(35, 11, 'products/mdxP1EWkYg4onYvALtZLwjUWtH0yAe3aZjvgcZtJ.webp', 0, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(36, 11, 'products/OJ08hErmaDoq4UzgxqRtqyr5tMcyJUtnM9dcZgnx.webp', 0, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(37, 11, 'products/ZbE891kvSi3KGyCa81gN4SLqhWXolg64PLhFaSih.jpg', 0, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(38, 11, 'products/5lIOfa7dbmhjasDjke2SHlOtotsmUTrbrRrZsdU9.jpg', 0, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(39, 12, 'products/HiNVMfLo8UHQM3B3rDOOqsQUMwtV1Ia3rwPC4PFY.webp', 1, '2024-06-11 10:00:30', '2024-06-11 10:00:30'),
(40, 12, 'products/MyMb7uzTy1Qr6JiRNN29gtbLMMnAL8B2qK9Wh6xk.jpg', 0, '2024-06-11 10:00:30', '2024-06-11 10:00:30'),
(41, 12, 'products/dUnlPSVf8311Yuyuv2bd2sezmco9CC9JbBh4KXZP.webp', 0, '2024-06-11 10:00:30', '2024-06-11 10:00:30'),
(42, 13, 'products/GCv2tCMWFgQm8f4owYc09mXbZUEuUuNQ2jOrEOZT.webp', 1, '2024-06-11 10:01:39', '2024-06-11 10:01:39'),
(43, 13, 'products/IlqzbKEAzoYdiipSOKfVY3hU04dCxty5iZakAl88.webp', 0, '2024-06-11 10:01:39', '2024-06-11 10:01:39'),
(44, 13, 'products/mMpqoNThv7c5VTxPCIrtXiro9or3QcIgjGJWY3gG.webp', 0, '2024-06-11 10:01:39', '2024-06-11 10:01:39'),
(45, 13, 'products/gIfHqHUzI2KzBjxPBHR9E4uC86lKxEy3b2hakLEA.webp', 0, '2024-06-11 10:01:39', '2024-06-11 10:01:39'),
(55, 16, 'products/RRbZW9MPTqCJW8SbFxMxCjlLFXJF3Z0ghLJJheTM.webp', 1, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(56, 16, 'products/kT0Qt7ytZkHbTHgOMzbclyZo0PtedX3bosAgbq9s.webp', 0, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(57, 16, 'products/T1zyX9ZokAS6SbhAaFMeJnhInznriEjLnZbsotMz.webp', 0, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(58, 16, 'products/l15gdJluCsj4OHAAWK46MkgpQSaRDdqjkQM2oFoD.webp', 0, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(59, 16, 'products/DERZhpzQemXbQ0LfawGIZhpZ7nY9mpvxjOUtQMsg.webp', 0, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(60, 17, 'products/fANjLO7Q7soEQfV3Qh4G7ARp3mi6rQTjThJxvFQi.webp', 1, '2024-06-12 05:47:41', '2024-06-12 05:47:41'),
(61, 17, 'products/Nn1Zs2Wu3JruqFmUdDKlKuS2xrJ2hosJHnlJ7Ygn.jpg', 0, '2024-06-12 05:47:41', '2024-06-12 05:47:41'),
(62, 17, 'products/bk8JXQa7ebGHNy2QnE6aHTseJYnDpT4M8B7WjKgj.webp', 0, '2024-06-12 05:47:41', '2024-06-12 05:47:41'),
(63, 17, 'products/kZ3DgmIwm9wUmHXvOolW7UjQH7FPkKNIBeekBcvh.webp', 0, '2024-06-12 05:47:41', '2024-06-12 05:47:41'),
(64, 18, 'products/r7pDoos1E5o7YQhtJSV3A3W6Y6cqQqgIKTrDB8Na.jpg', 1, '2024-06-12 06:51:36', '2024-06-12 06:51:36'),
(65, 18, 'products/kqSf4Zdne6PlU5OqGXSyhAQZj4qCsC1NCA3oSukK.jpg', 0, '2024-06-12 06:51:36', '2024-06-12 06:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_ratings`
--

CREATE TABLE `product_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `offer_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `stock` int(11) NOT NULL DEFAULT 0,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `sku`, `price`, `offer_price`, `stock`, `is_default`, `created_at`, `updated_at`) VALUES
(16, 9, 'black', 'x87387', 1000.00, 900.00, 6, 1, '2024-06-11 09:51:20', '2024-06-12 10:10:55'),
(17, 10, 'Red', '4dds', 600.00, 500.00, 54, 1, '2024-06-11 09:53:40', '2024-06-11 09:53:40'),
(18, 11, 'Full', '8q8w8', 7000.00, 5000.00, 10, 1, '2024-06-11 09:58:37', '2024-06-11 09:58:37'),
(19, 12, 'Full', '8988um', 20000.00, 1000.00, 10, 1, '2024-06-11 10:00:30', '2024-06-11 10:00:30'),
(20, 13, 'main', '78237', 3000.00, 1500.00, 10, 1, '2024-06-11 10:01:39', '2024-06-11 10:01:39'),
(23, 16, 'full', '1212dwdw', 900.00, 500.00, 122, 1, '2024-06-12 05:46:37', '2024-06-12 05:46:37'),
(24, 17, 'yellow', 'ttwkjrjwer092', 1200.00, 900.00, 121, 1, '2024-06-12 05:47:41', '2024-06-12 05:47:41'),
(25, 18, 'small', 'sasd32432', 1200.00, 900.00, 12, 1, '2024-06-12 06:51:36', '2024-06-12 06:51:36'),
(26, 9, 'red', 'rdc234322', 750.00, 600.00, 12, 0, '2024-06-12 10:10:55', '2024-06-12 10:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `refund_policies`
--

CREATE TABLE `refund_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rtBM432LKXqtVYe6H78Db0Sv2g7swJLQ1KE3jsEs', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid0U5N0FkZ3RuQXlFeWNXT1FpcnhZRnhld1QzbVlPYnduWFVqQ25CcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1719054781);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `slogan`, `logo`, `favicon`, `email`, `phone`, `address`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(2, 'Amazon', 'commerce (or electronic commerce) is the buying and selling of goods or services on the Internet. It encompasses a wide variety of data, systems and tools for online buyers and sellers, including mobile shopping and online payment encryption.', 'products/S4NacqN5ZPBVFhsPZKrgUCIl0qFrFwXmkbhS7jkd.png', 'https://1000logos.net/wp-content/uploads/2020/08/Shopify-Logo.png', 'support@gmail.com', '9988998899', 'Suite 278 18371 Nilda Lake, Breitenbergshire, CO 006709', 'http://www.facebook.com', 'http://twitter.com', 'http://www.instagram.com', 'http://www.linkedin.com', 'http://www.youtube.com', NULL, '2024-06-18 10:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `icon`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(17, 12, 'Tshirt', NULL, 1, '2024-06-11 09:44:50', '2024-06-11 09:44:50', 'tshirt'),
(18, 12, 'Pants', NULL, 1, '2024-06-11 09:44:58', '2024-06-11 09:44:58', 'pants'),
(19, 12, 'Shirts', NULL, 1, '2024-06-11 09:45:05', '2024-06-11 09:45:05', 'shirts'),
(20, 13, 'Top', NULL, 1, '2024-06-11 09:45:21', '2024-06-11 09:45:21', 'top'),
(21, 13, 'Saree', NULL, 1, '2024-06-11 09:45:28', '2024-06-11 09:45:28', 'saree'),
(22, 13, 'Lahenga', NULL, 1, '2024-06-11 09:45:43', '2024-06-11 09:45:43', 'lahenga'),
(23, 13, 'Skirt', NULL, 1, '2024-06-11 09:45:59', '2024-06-11 09:45:59', 'skirt'),
(24, 14, 'Kurta Pajama', NULL, 1, '2024-06-11 09:46:12', '2024-06-11 09:46:12', 'kurta-pajama'),
(25, 14, 'Jeans', NULL, 1, '2024-06-11 09:46:22', '2024-06-11 09:46:22', 'jeans'),
(26, 14, 'Tshirt', NULL, 1, '2024-06-11 09:46:35', '2024-06-11 09:46:35', 'tshirt'),
(27, 15, 'Dormat', NULL, 1, '2024-06-11 09:46:45', '2024-06-11 09:46:45', 'dormat'),
(28, 15, 'BedSheet', NULL, 1, '2024-06-11 09:47:12', '2024-06-19 06:23:44', 'bedsheet'),
(29, 15, 'Decoration', NULL, 1, '2024-06-11 09:47:22', '2024-06-11 09:47:22', 'decoration');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_invoices`
--

CREATE TABLE `supplier_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `due_amount` decimal(10,2) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) NOT NULL DEFAULT 'net banking',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_item_histories`
--

CREATE TABLE `supplier_item_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `total` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_m_t_p_mail_settings`
--

CREATE TABLE `s_m_t_p_mail_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_driver` varchar(255) NOT NULL,
  `mail_host` varchar(255) NOT NULL,
  `mail_port` varchar(255) NOT NULL,
  `mail_username` varchar(255) NOT NULL,
  `mail_password` varchar(255) NOT NULL,
  `mail_encryption` varchar(255) NOT NULL,
  `mail_from_address` varchar(255) NOT NULL,
  `mail_from_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `notification_token` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `notification_token`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', '9592265072', NULL, NULL, '$2y$12$HOXiJ2HtFLNHBQfzHu0kAew59la8GCad7FvmLC/Z3Z.Zo6dwwrPZi', NULL, '2024-06-03 05:47:33', '2024-06-03 05:47:33', 1),
(7, 'Ashish Kumar', 'test@gmail.com', '9900990033', NULL, NULL, '$2y$12$T3zVVAnSOloAKqdfZ0za8eg6IR8D53mZ5x8JiC5Mf2.F1WZCyoqg.', NULL, '2024-06-18 11:51:55', '2024-06-18 11:51:55', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_category_id_foreign` (`category_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_use_by_users`
--
ALTER TABLE `coupon_use_by_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon_use_by_users_user_id_foreign` (`user_id`),
  ADD KEY `coupon_use_by_users_coupon_id_foreign` (`coupon_id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `custome_sizes`
--
ALTER TABLE `custome_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `delivery_boys_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `delivery_boys_email_unique` (`email`),
  ADD KEY `delivery_boys_user_id_foreign` (`user_id`);

--
-- Indexes for table `delivery_boy_bank_details`
--
ALTER TABLE `delivery_boy_bank_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_boy_bank_details_delivery_boy_id_foreign` (`delivery_boy_id`);

--
-- Indexes for table `delivery_boy_income_histories`
--
ALTER TABLE `delivery_boy_income_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_boy_income_histories_delivery_boy_id_foreign` (`delivery_boy_id`);

--
-- Indexes for table `delivery_boy_ratings`
--
ALTER TABLE `delivery_boy_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_boy_ratings_delivery_boy_id_foreign` (`delivery_boy_id`),
  ADD KEY `delivery_boy_ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `delivery_boy_tips`
--
ALTER TABLE `delivery_boy_tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_boy_tips_delivery_boy_id_foreign` (`delivery_boy_id`),
  ADD KEY `delivery_boy_tips_order_id_foreign` (`order_id`);

--
-- Indexes for table `delivery_charge_settings`
--
ALTER TABLE `delivery_charge_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_charges_settings`
--
ALTER TABLE `extra_charges_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_m_a_p_mail_settings`
--
ALTER TABLE `i_m_a_p_mail_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `most_buy_products`
--
ALTER TABLE `most_buy_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `most_buy_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `offer_banners`
--
ALTER TABLE `offer_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_delivery_boy_id_foreign` (`delivery_boy_id`),
  ADD KEY `orders_customer_address_id_foreign` (`customer_address_id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_histories_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pick_and_drops`
--
ALTER TABLE `pick_and_drops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pick_and_drops_user_id_foreign` (`user_id`),
  ADD KEY `pick_and_drops_delivery_boy_id_foreign` (`delivery_boy_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_store_id_foreign` (`store_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_ratings`
--
ALTER TABLE `product_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ratings_product_id_foreign` (`product_id`),
  ADD KEY `product_ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_variants_sku_unique` (`sku`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `refund_policies`
--
ALTER TABLE `refund_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `supplier_invoices`
--
ALTER TABLE `supplier_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_invoices_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `supplier_item_histories`
--
ALTER TABLE `supplier_item_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_item_histories_supplier_id_foreign` (`supplier_id`),
  ADD KEY `supplier_item_histories_product_id_foreign` (`product_id`);

--
-- Indexes for table `s_m_t_p_mail_settings`
--
ALTER TABLE `s_m_t_p_mail_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_use_by_users`
--
ALTER TABLE `coupon_use_by_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `custome_sizes`
--
ALTER TABLE `custome_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_boy_bank_details`
--
ALTER TABLE `delivery_boy_bank_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_boy_income_histories`
--
ALTER TABLE `delivery_boy_income_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_boy_ratings`
--
ALTER TABLE `delivery_boy_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_boy_tips`
--
ALTER TABLE `delivery_boy_tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_charge_settings`
--
ALTER TABLE `delivery_charge_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_charges_settings`
--
ALTER TABLE `extra_charges_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `i_m_a_p_mail_settings`
--
ALTER TABLE `i_m_a_p_mail_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `most_buy_products`
--
ALTER TABLE `most_buy_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_banners`
--
ALTER TABLE `offer_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pick_and_drops`
--
ALTER TABLE `pick_and_drops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product_ratings`
--
ALTER TABLE `product_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `refund_policies`
--
ALTER TABLE `refund_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_invoices`
--
ALTER TABLE `supplier_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_item_histories`
--
ALTER TABLE `supplier_item_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_m_t_p_mail_settings`
--
ALTER TABLE `s_m_t_p_mail_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_use_by_users`
--
ALTER TABLE `coupon_use_by_users`
  ADD CONSTRAINT `coupon_use_by_users_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_use_by_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD CONSTRAINT `customer_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  ADD CONSTRAINT `delivery_boys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_boy_bank_details`
--
ALTER TABLE `delivery_boy_bank_details`
  ADD CONSTRAINT `delivery_boy_bank_details_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_boy_income_histories`
--
ALTER TABLE `delivery_boy_income_histories`
  ADD CONSTRAINT `delivery_boy_income_histories_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_boy_ratings`
--
ALTER TABLE `delivery_boy_ratings`
  ADD CONSTRAINT `delivery_boy_ratings_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `delivery_boy_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_boy_tips`
--
ALTER TABLE `delivery_boy_tips`
  ADD CONSTRAINT `delivery_boy_tips_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `delivery_boy_tips_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `most_buy_products`
--
ALTER TABLE `most_buy_products`
  ADD CONSTRAINT `most_buy_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_address_id_foreign` FOREIGN KEY (`customer_address_id`) REFERENCES `customer_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD CONSTRAINT `order_histories_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD CONSTRAINT `order_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pick_and_drops`
--
ALTER TABLE `pick_and_drops`
  ADD CONSTRAINT `pick_and_drops_delivery_boy_id_foreign` FOREIGN KEY (`delivery_boy_id`) REFERENCES `delivery_boys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pick_and_drops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_ratings`
--
ALTER TABLE `product_ratings`
  ADD CONSTRAINT `product_ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_invoices`
--
ALTER TABLE `supplier_invoices`
  ADD CONSTRAINT `supplier_invoices_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_item_histories`
--
ALTER TABLE `supplier_item_histories`
  ADD CONSTRAINT `supplier_item_histories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supplier_item_histories_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
