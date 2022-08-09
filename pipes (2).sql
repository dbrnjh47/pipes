-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 03 2022 г., 13:23
-- Версия сервера: 5.5.65-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pipes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Труба техническая ПНД', '1', '2022-04-07 11:15:24', '2022-04-18 17:17:46'),
(11, 'Труба техническая ПНД 200-400', '0', '2022-04-08 15:40:36', '2022-04-18 17:17:29'),
(12, 'Горизонтальное бурение', '1', '2022-04-12 16:34:10', '2022-04-12 16:34:10'),
(13, 'Канализация под ключ', '1', '2022-04-12 16:34:28', '2022-04-12 16:34:28'),
(14, 'Монтаж\\демонтаж водопровода', '1', '2022-05-06 07:59:51', '2022-05-06 08:14:48');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_24_201501_create_settings_table', 1),
(6, '2022_03_24_213411_create_news_table', 1),
(7, '2022_03_24_224216_create_сatalogs_table', 1),
(8, '2022_03_24_224843_create_services_table', 1),
(9, '2022_03_24_233056_create_service_lots_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '/temple/pk/img/reviews/no.jpg',
  `phone` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `code` varchar(21) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `img`, `phone`, `email`, `review`, `code`, `status`, `created_at`, `updated_at`) VALUES
(77, 'test', '/temple/pk/img/reviews/no.jpg', 'test', 'test2', '', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_html` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `information` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog_id` bigint(20) unsigned NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `img`, `description`, `keywords`, `description_html`, `title`, `information`, `catalog_id`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Труба техническая ПНД', '/temple/pk/img/service/service_1652959666.jpg', 'Труба ПНД для канализации - купить оптом c доставкой по РФ и ближнему зарубежью. Цены уточняйте у менеджеров.', 'труба пнд техническая, труба пнд техническая цены, труба пнд купить', 'Труба ПНД для канализации - купить оптом c доставкой по РФ и ближнему зарубежью. Цены уточняйте у менеджеров.', 'Купить трубу техническая ПНД для дома.', '["Диаметр в мм","Толщина стенки","Цена ₽"]', 10, '1', '2022-04-07 11:17:56', '2022-05-19 11:27:46'),
(15, 'Труба техническая ПНД 200-400', '/temple/pk/img/service/service_1649997546.jpg', 'Труба ПНД для канализации - купить оптом с доставкой по РФ и ближнему зарубежью. Цены уточняйте у менеджеров.', NULL, NULL, '', '["Метр","Цена ₽","Размер"]', 11, '0', '2022-04-08 15:59:48', '2022-04-29 00:11:24'),
(16, 'Канализация под ключ', '/temple/pk/img/service/service_1649781553.jpg', 'Все стараются провести в дом водопровод, а он, естественно, требует для нормальной функциональности проведение системы для удаления отработанной воды, то есть канализации.', 'канализация цена, частная канализация цена, установка канализации, установка труб канализации', 'Все стараются провести в дом водопровод, а он, естественно, требует для нормальной функциональности проведение системы для удаления отработанной воды, то есть канализации.', 'Установка канализации в дом.', '["Продукт","Цена ₽"]', 13, '1', '2022-04-12 16:39:13', '2022-04-25 18:30:41'),
(17, 'ГНБ', '/temple/pk/img/service/service_1649782021.jpg', 'Цены на прокол грунта методом ГНБ зависят от диаметра прокладывания трубы и расстояния (количества погонных метров) горизонтального бурения.', 'горизонтальное бурение, горизонтальное бурение цена, подземно горизонтальное бурение', 'Цены на прокол грунта методом ГНБ зависят от диаметра прокладывания трубы и расстояния (количества погонных метров) горизонтального бурения.', 'Бурение горизонтальных скважин.', '["Продукт","Цена ₽"]', 12, '1', '2022-04-12 16:47:01', '2022-04-25 18:30:21'),
(18, 'Монтаж\\демонтаж водопровода под ключ', '/temple/pk/img/service/service_1651824375.jpg', 'Монтаж\\демонтаж водопровода под ключ - купить. Цены уточняйте у менеджеров.', 'водопровод под ключ, установка водопровода, водопровод цена, водопровод пнд купить', 'Монтаж\\демонтаж водопровода под ключ - купить. Цены уточняйте у менеджеров.', 'Установка\\удаление водопровода.', '["Продукт","Цена ₽"]', 14, '1', '2022-05-06 08:06:15', '2022-05-06 08:06:40');

-- --------------------------------------------------------

--
-- Структура таблицы `service_lots`
--

CREATE TABLE IF NOT EXISTS `service_lots` (
  `id` bigint(20) unsigned NOT NULL,
  `information` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service_lots`
--

INSERT INTO `service_lots` (`id`, `information`, `services_id`, `created_at`, `updated_at`) VALUES
(24, '["110","4,2","156"]', 14, '2022-04-07 11:26:57', '2022-04-29 00:35:29'),
(25, '["110","5,3","194"]', 14, '2022-04-07 11:27:39', '2022-04-29 00:35:37'),
(26, '["110","6,3","227"]', 14, '2022-04-07 11:28:48', '2022-04-29 00:35:45'),
(27, '["110","6,6","237"]', 14, '2022-04-07 11:29:30', '2022-04-29 00:35:52'),
(28, '["110","3,4","127"]', 14, '2022-04-07 11:30:34', '2022-04-29 00:36:00'),
(29, '["110","8,1 ","287"]', 14, '2022-04-07 11:31:10', '2022-04-29 00:36:08'),
(30, '["110","10,0","345"]', 14, '2022-04-07 11:32:09', '2022-04-29 00:36:17'),
(31, '["110","12,3","415"]', 14, '2022-04-08 15:04:23', '2022-04-29 00:36:24'),
(32, '["110","15,1","493"]', 14, '2022-04-08 15:04:59', '2022-04-29 00:36:32'),
(33, '["125","3,9","165"]', 14, '2022-04-08 15:05:39', '2022-04-29 00:36:41'),
(34, '["125","4,8","201"]', 14, '2022-04-08 15:06:33', '2022-04-29 00:33:58'),
(35, '["125","6,0","248"]', 14, '2022-04-08 15:07:02', '2022-04-29 00:34:09'),
(36, '["125","7,1","292"]', 14, '2022-04-08 15:07:36', '2022-04-29 00:34:18'),
(37, '["125","7,4","302"]', 14, '2022-04-08 15:08:04', '2022-04-29 00:34:26'),
(38, '["125","9,2","370"]', 14, '2022-04-08 15:09:26', '2022-04-29 00:34:34'),
(39, '["125","11,4","448"]', 14, '2022-04-08 15:10:06', '2022-04-29 00:34:42'),
(40, '["125","14,0","535"]', 14, '2022-04-08 15:10:37', '2022-04-29 00:34:54'),
(41, '["125","17,1","635"]', 14, '2022-04-08 15:11:27', '2022-04-29 00:35:03'),
(42, '["140","4,3","205"]', 14, '2022-04-08 15:12:00', '2022-04-29 00:35:11'),
(43, '["140","5,4","254"]', 14, '2022-04-08 15:12:35', '2022-04-29 00:35:21'),
(44, '["140","6,7","311"]', 14, '2022-04-08 15:13:12', '2022-04-29 00:32:01'),
(45, '["140","8,0","368"]', 14, '2022-04-08 15:13:52', '2022-04-29 00:32:10'),
(46, '["140","8,3","380"]', 14, '2022-04-08 15:14:26', '2022-04-29 00:32:22'),
(47, '["140","10,3","464"]', 14, '2022-04-08 15:15:09', '2022-04-29 00:32:34'),
(48, '["140","12,7","558"]', 14, '2022-04-08 15:15:48', '2022-04-29 00:32:45'),
(49, '["140","15,7","673"]', 14, '2022-04-08 15:16:28', '2022-04-29 00:32:55'),
(50, '["140","19,2","799"]', 14, '2022-04-08 15:17:06', '2022-04-29 00:33:05'),
(51, '["160","4,9","265"]', 14, '2022-04-08 15:18:04', '2022-04-29 00:33:14'),
(52, '["160","6,2","333"]', 14, '2022-04-08 15:18:53', '2022-04-29 00:33:22'),
(53, '["160","7,7","408"]', 14, '2022-04-08 15:23:21', '2022-04-29 00:33:30'),
(54, '["160","9,1","478"]', 14, '2022-04-08 15:23:54', '2022-04-29 00:30:29'),
(55, '["160","9,5","496"]', 14, '2022-04-08 15:24:24', '2022-04-29 00:30:38'),
(56, '["160","11,8","605"]', 14, '2022-04-08 15:25:28', '2022-04-29 00:30:46'),
(57, '["160","14,6","733"]', 14, '2022-04-08 15:25:58', '2022-04-29 00:30:57'),
(58, '["160","17,9","876"]', 14, '2022-04-08 15:27:51', '2022-04-29 00:31:06'),
(59, '["160","21,9","1040"]', 14, '2022-04-08 15:31:58', '2022-04-29 00:31:13'),
(60, '["180","5,5","350"]', 14, '2022-04-08 15:32:39', '2022-04-29 00:31:20'),
(61, '["180","6,9","434"]', 14, '2022-04-08 15:33:26', '2022-04-29 00:31:28'),
(62, '["180","8,6","535"]', 14, '2022-04-08 15:34:15', '2022-04-29 00:31:38'),
(63, '["180","10,2","629"]', 14, '2022-04-08 15:34:57', '2022-04-29 00:31:48'),
(64, '["180","10,7","656"]', 14, '2022-04-08 15:35:52', '2022-04-29 00:28:47'),
(65, '["180","13,3","802"]', 14, '2022-04-08 15:36:33', '2022-04-29 00:28:54'),
(66, '["180","16,4","969"]', 14, '2022-04-08 15:37:22', '2022-04-29 00:29:04'),
(67, '["180","20,1","1161"]', 14, '2022-04-08 15:38:12', '2022-04-29 00:29:12'),
(68, '["180","24,6","1380"]', 14, '2022-04-08 15:38:48', '2022-04-29 00:29:20'),
(69, '["200","6,2","439"]', 14, '2022-04-08 16:04:13', '2022-04-29 00:29:28'),
(70, '["200","7,7","538"]', 14, '2022-04-08 16:04:47', '2022-04-29 00:29:36'),
(71, '["200","9,6","663"]', 14, '2022-04-08 16:05:42', '2022-04-29 00:29:44'),
(72, '["200","11,4","779"]', 14, '2022-04-08 16:06:07', '2022-04-29 00:29:52'),
(73, '["200","11,9","809"]', 14, '2022-04-08 16:06:46', '2022-04-29 00:29:59'),
(74, '["200","14,7","984"]', 14, '2022-04-08 16:07:19', '2022-04-29 00:27:04'),
(75, '["200","18,2","1196"]', 14, '2022-04-08 16:08:04', '2022-04-29 00:27:12'),
(76, '["200","22,4","1437"]', 14, '2022-04-08 16:08:42', '2022-04-29 00:27:20'),
(77, '["200","27,4","1702"]', 14, '2022-04-08 16:09:20', '2022-04-29 00:27:31'),
(78, '["225","6,9","547"]', 14, '2022-04-08 16:09:57', '2022-04-29 00:27:41'),
(79, '["225","8,6","676"]', 14, '2022-04-08 16:12:28', '2022-04-29 00:27:51'),
(80, '["225","10,8","838"]', 14, '2022-04-08 16:13:06', '2022-04-29 00:28:00'),
(81, '["225","12,8","983"]', 14, '2022-04-08 16:13:46', '2022-04-29 00:28:09'),
(82, '["225","13,4","1028"]', 14, '2022-04-08 16:14:22', '2022-04-29 00:28:18'),
(83, '["225","16,6","1253"]', 14, '2022-04-08 16:15:12', '2022-04-29 00:28:26'),
(84, '["225","20,5","1518"]', 14, '2022-04-08 16:16:09', '2022-04-29 00:25:10'),
(85, '["225","25,2","1810"]', 14, '2022-04-08 16:19:30', '2022-04-29 00:25:19'),
(86, '["225","30,8","2150"]', 14, '2022-04-08 16:21:14', '2022-04-29 00:25:29'),
(87, '["250","7,7","708"]', 14, '2022-04-08 16:22:34', '2022-04-29 00:25:38'),
(88, '["250","9,6","847"]', 14, '2022-04-08 16:23:17', '2022-04-29 00:25:46'),
(89, '["250","11,9","1070"]', 14, '2022-04-08 16:25:04', '2022-04-29 00:25:57'),
(90, '["250","14,2","1272"]', 14, '2022-04-08 16:26:56', '2022-04-29 00:26:06'),
(91, '["250","14,8","1320"]', 14, '2022-04-08 16:27:45', '2022-04-29 00:26:17'),
(92, '["250","18,4","1620"]', 14, '2022-04-08 16:28:42', '2022-04-29 00:26:34'),
(93, '["250","22,7","1944"]', 14, '2022-04-08 16:29:18', '2022-04-29 00:26:42'),
(94, '["250","27,9","2328"]', 14, '2022-04-08 16:31:21', '2022-04-29 00:24:48'),
(95, '["250","34,2","2772"]', 14, '2022-04-08 16:32:33', '2022-04-29 00:24:40'),
(96, '["280","8,6","885"]', 14, '2022-04-08 16:33:56', '2022-04-29 00:24:31'),
(97, '["280","10,7","1090"]', 14, '2022-04-08 16:35:05', '2022-04-29 00:24:21'),
(98, '["280","13,4","1356"]', 14, '2022-04-08 16:36:25', '2022-04-29 00:24:13'),
(99, '["280","15,9","1584"]', 14, '2022-04-08 16:37:11', '2022-04-29 00:24:04'),
(100, '["280","16,6","1656"]', 14, '2022-04-08 16:38:10', '2022-04-29 00:23:55'),
(101, '["280","20,6","2016"]', 14, '2022-04-08 16:41:43', '2022-04-29 00:23:44'),
(102, '["280","25,4","2436"]', 14, '2022-04-08 16:42:27', '2022-04-29 00:23:34'),
(103, '["280","31,3","2928"]', 14, '2022-04-08 16:43:09', '2022-04-29 00:23:24'),
(104, '["280","38,3","3468"]', 14, '2022-04-08 16:43:54', '2022-04-29 00:21:28'),
(105, '["315","9,7","1122"]', 14, '2022-04-08 16:44:29', '2022-04-29 00:21:39'),
(106, '["315","12,1","1392"]', 14, '2022-04-08 16:45:05', '2022-04-29 00:21:49'),
(107, '["315","15,0","1704"]', 14, '2022-04-08 16:45:45', '2022-04-29 00:21:58'),
(108, '["315","17,9","2004"]', 14, '2022-04-08 16:46:27', '2022-04-29 00:22:07'),
(109, '["315","18,7","2088"]', 14, '2022-04-08 16:47:24', '2022-04-29 00:22:16'),
(110, '["315","23,2","2556"]', 14, '2022-04-08 16:48:06', '2022-04-29 00:22:28'),
(111, '["315","28,6","3084"]', 14, '2022-04-08 16:48:42', '2022-04-29 00:22:40'),
(112, '["315","35,2","3696"]', 14, '2022-04-08 16:49:14', '2022-04-29 00:22:50'),
(113, '["315","43,1","4392"]', 14, '2022-04-08 16:50:13', '2022-04-29 00:22:58'),
(114, '["355","10,9","1416"]', 14, '2022-04-08 16:50:51', '2022-04-29 00:19:19'),
(115, '["355","13,6","1752"]', 14, '2022-04-08 16:51:23', '2022-04-29 00:19:40'),
(116, '["355","16,9","2160"]', 14, '2022-04-08 16:52:02', '2022-04-29 00:19:52'),
(117, '["355","20,1","2544"]', 14, '2022-04-08 16:53:02', '2022-04-29 00:20:03'),
(118, '["355","21,1","2664"]', 14, '2022-04-08 16:53:50', '2022-04-29 00:20:14'),
(119, '["355","26,1","3240"]', 14, '2022-04-08 16:55:15', '2022-04-29 00:20:24'),
(120, '["355","32,2","3912"]', 14, '2022-04-08 16:55:51', '2022-04-29 00:20:33'),
(121, '["355","39,7","4704"]', 14, '2022-04-08 16:56:38', '2022-04-29 00:20:43'),
(122, '["355","48,5","5568"]', 14, '2022-04-08 16:57:18', '2022-04-29 00:20:53'),
(123, '["400","12,3","1812"]', 14, '2022-04-08 16:57:55', '2022-04-29 00:21:03'),
(124, '["400","15,3","2232"]', 14, '2022-04-08 16:58:27', '2022-04-29 00:18:47'),
(125, '["400","19,1","2748"]', 14, '2022-04-08 16:59:03', '2022-04-29 00:18:05'),
(126, '["400","22,7","3228"]', 14, '2022-04-08 16:59:32', '2022-04-29 00:17:55'),
(127, '["400","23,7","3360"]', 14, '2022-04-08 17:00:04', '2022-04-29 00:17:45'),
(128, '["400","29,4","4104"]', 14, '2022-04-08 17:00:43', '2022-04-29 00:17:35'),
(129, '["400","36,3","4968"]', 14, '2022-04-08 17:01:13', '2022-04-29 00:17:24'),
(130, '["400","44,7","5964"]', 14, '2022-04-08 17:01:57', '2022-04-29 00:17:14'),
(131, '["400","54,7","7980"]', 14, '2022-04-08 17:02:29', '2022-04-29 00:17:02'),
(132, '["Канализация","Договорная"]', 16, '2022-04-12 16:39:41', '2022-04-12 16:39:41'),
(133, '["ГНБ","Договорная"]', 17, '2022-04-12 16:47:26', '2022-04-12 16:47:26'),
(134, '["Монтаж","Договорная"]', 18, '2022-05-06 08:14:12', '2022-05-06 08:14:12'),
(135, '["Демонтаж","Договорная"]', 18, '2022-05-06 08:14:27', '2022-05-06 08:14:27');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teh_works` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/temple/pk/img/logo/favicon2.ico',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `phone`, `mail`, `address`, `teh_works`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'TrubaVektorPND 74', '+79227101718', 'vektor.chlb@mail.ru', 'г. Челябинск, ул. Строительная, д. 25/3, ООО Вектор', '0', '/temple/pk/img/logo/logo_1652608871.svg', '2022-03-26 12:13:47', '2022-05-15 10:01:11');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin_', '$2y$10$uzArj4GBi4bmldt2nbQHruAUgkZ5RpmKFHwaqubLamPmrSoutN2j6', 'yx4csDrfTFwGW1qmXU3AVSYWvU4U0bW7ZNWOFqrtpgqelP8yHJG7t5uWVbio', '2022-03-26 12:13:47', '2022-03-26 12:13:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_catalog_id_foreign` (`catalog_id`);

--
-- Индексы таблицы `service_lots`
--
ALTER TABLE `service_lots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_lots_services_id_foreign` (`services_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `service_lots`
--
ALTER TABLE `service_lots`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_lots`
--
ALTER TABLE `service_lots`
  ADD CONSTRAINT `service_lots_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
