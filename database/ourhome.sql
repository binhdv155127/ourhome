-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Nov 27, 2019 at 05:08 AM
-- Server version: 5.7.27
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `districtName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `districtName`, `id_province`) VALUES
(1, 'Ba Đình', 1),
(2, 'Bắc Từ Liêm', 1),
(3, 'Cầu Giấy', 1),
(4, 'Đống Đa', 1),
(5, 'Hà Đông', 1),
(6, 'Hai Bà Trưng', 1),
(7, 'Hoàn Kiếm', 1),
(8, 'Hoàng Mai', 1),
(9, 'Long Biên', 1),
(10, 'Nam Từ Liêm', 1),
(11, 'Tây Hồ', 1),
(12, 'Thanh Xuân', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_10_28_151444_create_provinces_table', 1),
(20, '2019_10_28_151539_create_districts_table', 1),
(21, '2019_10_28_151558_create_wards_table', 1),
(22, '2019_10_28_151612_create_services_table', 1),
(23, '2019_10_28_151630_create_rooms_table', 1),
(24, '2019_10_28_151706_create_service_rooms_table', 1),
(25, '2019_10_28_151724_create_room_types_table', 1),
(26, '2019_10_28_151741_create_messages_table', 1),
(27, '2019_10_28_151804_create_room_cares_table', 1),
(28, '2019_10_28_151818_create_photos_table', 1),
(29, '2019_10_28_151853_create_room_useds_table', 1),
(30, '2019_10_28_151909_create_rate_rooms_table', 1),
(31, '2019_11_14_162009_create_rate_users_table', 1);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `id_room`) VALUES
(1, '1', 1),
(2, '2', 1),
(3, '3', 1),
(4, '4', 2),
(5, '5', 2),
(6, '6', 3),
(7, '7', 3),
(8, '8', 4),
(9, '9', 5),
(10, '10', 6),
(11, '11', 7),
(12, '12', 7),
(13, '22', 8),
(14, '14', 9),
(15, '15', 9),
(16, '16', 3),
(17, '17', 2),
(18, '18', 2),
(19, '19', 3),
(20, '20', 4),
(21, '21', 5),
(22, '22', 6);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `provinceName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `provinceName`) VALUES
(1, 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `rate_rooms`
--

CREATE TABLE `rate_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_roomused` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate_rooms`
--

INSERT INTO `rate_rooms` (`id`, `id_roomused`, `point`, `content`, `comment_date`) VALUES
(1, 1, 4, 'fsgfsgdfgdfgdg', '2010-12-12'),
(2, 1, 3, 'asdsda', '2012-12-13'),
(3, 2, 5, 'rate2', '2013-10-10'),
(4, 1, 5, 'asdasdfdsfsdfdsfd', '2019-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `rate_users`
--

CREATE TABLE `rate_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_roomused` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate_users`
--

INSERT INTO `rate_users` (`id`, `id_roomused`, `point`, `content`) VALUES
(1, 1, 4, 'abnc1'),
(2, 1, 5, '123'),
(3, 1, 4, '\'1233wadasdfasds'),
(4, 1, 2, 'asdasdasdassda'),
(5, 1, 1, 'trung'),
(6, 6, 4, 'trung danh gia');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberpeople` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latlng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acreage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_roomtype` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_district` int(11) NOT NULL,
  `id_ward` int(11) NOT NULL,
  `accept` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `price`, `area`, `numberpeople`, `status`, `discription`, `latlng`, `lng`, `slugs`, `acreage`, `id_user`, `id_roomtype`, `id_province`, `id_district`, `id_ward`, `accept`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cho ở ghép (ưu tiên sinh viên nữ)!', '2200000', '142 Thượng Đình', '2', '0', 'If you\'re wondering how one produces cool text fonts like you see above, it\'s fairly simple (but maybe not what you\'d expect). Basically, the text that gets generated isn\'t actually a font - it\'s a bunch of symbols that are in the unicode standard. You\'re reading symbols that are in the unicode standard right now - the alphabet is a part of it, as are all the regular symbols on your keyboard: !@#$%^&*() etc', '{\"0\":\"21.0316854\",\"1\":\"105.82240550000006\"}', NULL, 'cho-thue-phong-uu-tien-sinh-vien-nu', '15', 1, 1, 1, 1, 1, 1, 0, NULL, NULL),
(2, 'Cho ở ghép nhà trọ đầy đủ nội thất', '3000000', 'nhà số 55b ngõ 123 đường thuỵ phương phường thuỵ phương', '3', '0', 'If you\'re wondering how one produces cool text fonts like you see above, it\'s fairly simple (but maybe not what you\'d expect). Basically, the text that gets generated isn\'t actually a font - it\'s a bunch of symbols that are in the unicode standard. You\'re reading symbols that are in the unicode standard right now - the alphabet is a part of it, as are all the regular symbols on your keyboard: !@#$%^&*() etc', NULL, NULL, 'cho-thue-nha-tro-day-du-noii-that', '20', 2, 2, 1, 2, 17, 1, 0, NULL, NULL),
(3, 'Homestay TRUNG KÍNH (KTX cao cấp)', '1600000', 'Phường Yên Hòa, Quận Cầu Giấy, Hà Nội', '4', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'homestay-trung-kinh-ktx-cao-cap-1tr6-thang-mien-phi-dien-nuoc', '25', 3, 4, 1, 3, 34, 1, 0, NULL, NULL),
(4, 'CHO Ở GHÉP CHUNG CƯ MINI MỚI XÂY 25-30M2 FULL ĐỒ', '1700000', 'Số 23 ngõ 259 Đường Yên Hòa, Phường Yên Hòa', '3', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'cho-thue-chung-cu-mini-moi-xay-25-30-m2-full-do', '22', 4, 1, 1, 3, 34, 1, 0, NULL, NULL),
(5, 'Chính chủ cho ở ghép phòng ở gần hầm Kim Liên', '1500000', 'Đường Phạm Ngọc Thạch, Phường Phương Liên', '2', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'chinh-chu-cho-thue-phong-o-gan-ham-kim-lien', '30', 7, 3, 1, 4, 39, 1, 0, NULL, NULL),
(6, 'CHO Ở GHÉP PHÒNG CCMN QUẬN ĐỐNG ĐA GẦN TRUNG TÂM', '2000000', '20D Đường Trần Quý Cáp, Phường Văn Miếu', '3', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'cho-thue-phong-ccmn-quan-dong-da-gan-trung-tam', '25', 1, 1, 1, 4, 35, 1, 0, NULL, NULL),
(7, 'Cho ở ghép phòng trọ chính chủ Nguyên Hồng -Ba Đình -Hà Nội', '1500000', 'Phường Thành Công, Quận Ba Đình, Hà Nội', '3', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'cho-thue-phong-tro-chinh-chu-nguyen-hong-ba-dinh-hn', '20', 5, 3, 1, 1, 12, 1, 0, NULL, NULL),
(8, 'Cho ở ghép nhà trọ Homestay giá rẻ, đường Đội Cấn, Ba Đình', '1500000', 'Ngõ 266, Đội Cấn. Ngã tư Đội Cấn-Liễu Giai', '4', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'cho-thue-nha-tro-homestay-gia-re-duong-doi-can-ba-dinh', '35', 3, 4, 1, 1, 3, 1, 0, NULL, NULL),
(9, 'Cho sinh viên ở ghép phòng gần ĐH mỏ và Học Viện Tài Chính', '1200000', 'Học Viện Tài Chính , ĐH Mỏ, Quận Bắc Từ Liêm, Hà Nội', '2', '0', 'So the difference is, these rad \"fonts\" that are produces, just don\'t happen to appear on your keyboard - there\'s not enough room. The unicode standard has more than 100,000 symbols defined in it. That\'s a lot of symbols. And amongst those symbols are many different \"alphabets\" - some of which this translator is able to produce.', NULL, NULL, 'cho-sinh-vien-thue-phong-gan-dh-mo-va-hoc-vien-tai-chinh', '25', 1, 2, 1, 2, 22, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_cares`
--

CREATE TABLE `room_cares` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_cares`
--

INSERT INTO `room_cares` (`id`, `id_user`, `id_room`, `status`, `title`, `time`, `content`) VALUES
(1, 1, 3, '1', NULL, NULL, NULL),
(2, 21, 5, '1', NULL, NULL, NULL),
(3, 21, 2, '1', NULL, NULL, NULL),
(4, 21, 6, '1', NULL, NULL, NULL),
(5, 19, 1, '1', NULL, NULL, NULL),
(6, 19, 6, '1', NULL, NULL, NULL),
(7, 1, 1, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `type`) VALUES
(1, 'CCMN'),
(2, 'Nhà Riêng'),
(3, 'Phòng Trọ'),
(4, 'Homestay');

-- --------------------------------------------------------

--
-- Table structure for table `room_useds`
--

CREATE TABLE `room_useds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_useds`
--

INSERT INTO `room_useds` (`id`, `id_user`, `id_room`) VALUES
(1, 9, 1),
(2, 8, 1),
(3, 9, 2),
(4, 10, 5),
(5, 6, 4),
(6, 6, 3),
(7, 8, 2),
(8, 7, 4),
(9, 7, 3),
(10, 6, 1),
(11, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`) VALUES
(1, 'Gửi xe miễn phí'),
(2, 'Có chỗ nấu ăn'),
(3, 'Gần chợ'),
(4, 'Gần công viên'),
(5, 'Có tủ lạnh, máy giặt'),
(6, 'Dọn vệ sinh 2 lần/Tuần');

-- --------------------------------------------------------

--
-- Table structure for table `service_rooms`
--

CREATE TABLE `service_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_rooms`
--

INSERT INTO `service_rooms` (`id`, `id_room`, `id_service`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 6),
(10, 3, 1),
(11, 3, 2),
(12, 3, 5),
(13, 4, 2),
(14, 4, 1),
(15, 4, 3),
(16, 4, 6),
(17, 5, 1),
(18, 5, 2),
(19, 5, 5),
(20, 5, 6),
(21, 6, 1),
(22, 6, 2),
(23, 6, 4),
(24, 6, 6),
(25, 7, 2),
(26, 7, 3),
(27, 7, 4),
(28, 7, 5),
(29, 8, 1),
(30, 8, 2),
(31, 8, 3),
(32, 8, 6),
(33, 9, 1),
(34, 9, 2),
(35, 9, 3),
(36, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkface` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phonenumber`, `address`, `gender`, `birthday`, `content`, `avatar`, `slugs`, `linkface`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bình Dương', '$2y$10$0U/rTGgDXcZFEz0VCRAX2umuSMpYCIWCfBj8WdPx6wj1eCf20P9ga', 'binh123@mail.com', '0839022083', '290 Kim Mã', '1', '30/01/1997', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '48', 'binh-duong', NULL, 0, NULL, NULL, NULL),
(2, 'Huyền Dương', '$2y$10$w68K356705u4SR1HUmzchOBR1nklo6yDvZ/VzvG0bhQRB9j4QFzwK', 'huyen123@mail.com', '0839022083', 'số 1 Liễu Giai', '0', '22/11/1998', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '49', 'huyen-duong', NULL, 0, NULL, NULL, NULL),
(3, 'Nguyễn Hương', '$2y$10$w68K356705u4SR1HUmzchOBR1nklo6yDvZ/VzvG0bhQRB9j4QFzwK', 'huong123@mail.com', '0839022083', 'số 28 Đại Cồ Việt', '0', '12/05/1995', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '49', 'nguyen-huong', NULL, 0, NULL, NULL, NULL),
(4, 'Mai Dương', '$2y$10$w68K356705u4SR1HUmzchOBR1nklo6yDvZ/VzvG0bhQRB9j4QFzwK', 'mai123@mail.com', '0839022083', 'số 28 Minh Khai', '0', '01/01/1992', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '50', 'mai-duong', NULL, 0, NULL, NULL, NULL),
(5, 'Nguyễn Hoàng', '1', 'hoang123@mail.com', '0839022083', 'số 8 Xuân Đỉnh', '1', '21/04/1997', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '51', 'nguyen-hoang', NULL, 0, NULL, NULL, NULL),
(6, 'Nguyễn Văn Cường', '$2y$10$w68K356705u4SR1HUmzchOBR1nklo6yDvZ/VzvG0bhQRB9j4QFzwK', 'cuowng123@mail.com', '0839022083', 'Ngõ 23 Ngã Tư Sở', '1', '22/09/1998', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '52', 'nguyen-van-cuong', NULL, 0, NULL, NULL, NULL),
(7, 'Hồ Văn Tùng', '1', 'tung123@mail.com', '0839022083', 'ngõ 182 Kim Mã', '1', '11/02/1994', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '53', 'ho-van-tung', NULL, 0, NULL, NULL, NULL),
(8, 'Nguyễn Lan Anh', '1', 'lananh@mail.com', '0839022083', 'số 3 Bách Khoa', '0', '03/03/1998', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '54', 'nguyen-lan-anh', NULL, 0, NULL, NULL, NULL),
(9, 'Dương Dương', '1', 'duong123@mail.com', '0839022083', 'số 23 Cổ Nhuế', '1', '23/12/1997', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '55', 'duong-duong', NULL, 0, NULL, NULL, NULL),
(10, 'Nguyễn Tuấn Anh', '1', 'tuananh@mail.com', '0839022083', 'số 234 Láng Hạ', '1', '19/10/1993', 'Hello! This is a generator for text fonts of the \"cool\" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I\'ll try to collect a few more \"cool\" text fonts, like the old enlgish one, and specialise this a bit.', '61', 'nguyen-tuan-anh', NULL, 0, NULL, NULL, NULL),
(11, NULL, '$2y$10$FZjEsv3iKBoZJ5jNcoea2.MMP0eAiCmfU.FU5g0ZsILL/YiNUyPM.', 'khongcoten19962014@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:36:11', '2019-11-17 02:36:11'),
(12, NULL, '$2y$10$tmnWD6mnNLU.lkEx7dp2kefMuWXsev1dW/s.fOFtgSOXHFFZOvKFG', 'khongcoten199620141@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:39:43', '2019-11-17 02:39:43'),
(13, NULL, '$2y$10$WFH1QEBVFuxxoGpk3v2bJuumFZjOZrbNxBNpuwv1SQS1K21SDAzGm', 'khongcoten199620114@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:40:12', '2019-11-17 02:40:12'),
(15, NULL, '$2y$10$ZPEzIOL7krl4MJ/EX6zBFeNntcy5YNTHU1H1Sw7AwZ0ZMNlphqfw.', 'trungdt@fabbi.io', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:48:28', '2019-11-17 02:48:28'),
(16, NULL, '$2y$10$7YpwEGxfFgZu9Cf6AiuJDuleSQxvQ4gpyUNrX354ZjbIyLZ6i8GDm', 'trungdt1@fabbi.io', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:49:01', '2019-11-17 02:49:01'),
(17, NULL, '$2y$10$Ftrgcttaniz81NqkE4Rsw.FwbOyZQ5p5NJvcoGqGyDNY5UB4E2zU.', 'khongcoten1asas9962014@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:51:10', '2019-11-17 02:51:10'),
(18, NULL, '$2y$10$Ygp6XYw6NKR6wRqGhQRpmeTLYMaiciTSReE/KpqnEhu5vTSF/kqsW', 'trungdt2@fabbi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:53:38', '2019-11-17 02:53:38'),
(19, NULL, '$2y$10$eJEpTLJQP6Aw7TOrHPSZres3rpkJkDP.wwQV8Ji9Mi47f4CPeof0m', 'trungdt123@fabbi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:54:15', '2019-11-17 02:54:15'),
(20, NULL, '$2y$10$98EwxptfoLEbMMWjWI5/GO45evKLOCAtWU9L8SFAG.Aq7VAU4Rqm6', 'trung2@fabbi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:55:59', '2019-11-17 02:55:59'),
(21, 'Đoàn Văn Trung', '$2y$10$D42AwQyhjq4xpWNG73RjSu9kRYF/Cdg4RY2Y3ngmKxP27ozrM9dG2', 'trungd@fabbi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 02:56:40', '2019-11-17 02:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(10) UNSIGNED NOT NULL,
  `wardName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_district` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `wardName`, `id_district`) VALUES
(1, 'Cống Vị', 1),
(2, 'Điện Biên', 1),
(3, 'Đội Cấn', 1),
(4, 'Giảng Võ', 1),
(5, 'Kim Mã', 1),
(6, 'Liễu Giai', 1),
(7, 'Ngọc Hà', 1),
(8, 'Ngọc Khánh', 1),
(9, 'Nguyễn Trung Trực', 1),
(10, 'Phúc Xá', 1),
(11, 'Quán Thánh', 1),
(12, 'Thành Công', 1),
(13, 'Trúc Bạch', 1),
(14, 'Vĩnh Phúc', 1),
(15, 'Thượng Cát', 2),
(16, 'Liên Mạc', 2),
(17, 'Thụy Phương', 2),
(18, 'Minh Khai', 2),
(19, 'Tây Tựu', 2),
(20, 'Đông Ngạc', 2),
(21, 'Đức Thắng', 2),
(22, 'Xuân Đỉnh', 2),
(23, 'Xuân Tảo', 2),
(24, ' Cổ Nhuế', 2),
(25, 'Cổ Nhuế 2', 2),
(26, ' Phúc Diễn', 2),
(27, 'Dịch Vọng', 3),
(28, 'Dịch Vọng Hậu', 3),
(29, 'Mai Dịch', 3),
(30, 'Nghĩa Đô', 3),
(31, 'Nghĩa Tân', 3),
(32, 'Quan Hoa', 3),
(33, 'Trung Hòa', 3),
(34, 'Yên Hòa', 3),
(35, 'Cát Linh', 4),
(36, 'Hàng Bột', 4),
(37, 'Khâm Thiên', 4),
(38, 'Khương Thượng', 4),
(39, 'Kim Liên', 4),
(40, 'Láng Hạ', 4),
(41, 'Láng Thượng', 4),
(42, 'Nam Đồng', 4),
(43, 'Ngã Tư Sở', 4),
(44, 'Ô Cửa Dừa', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_rooms`
--
ALTER TABLE `rate_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_users`
--
ALTER TABLE `rate_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_cares`
--
ALTER TABLE `room_cares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_useds`
--
ALTER TABLE `room_useds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_rooms`
--
ALTER TABLE `service_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rate_rooms`
--
ALTER TABLE `rate_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rate_users`
--
ALTER TABLE `rate_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_cares`
--
ALTER TABLE `room_cares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_useds`
--
ALTER TABLE `room_useds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_rooms`
--
ALTER TABLE `service_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
