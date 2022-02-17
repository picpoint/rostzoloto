-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 17 2022 г., 16:43
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rostzoloto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content`, `preview`, `created_at`, `updated_at`) VALUES
(10, 'Беглый взгляд на Go Workspaces в Go 1.18', 'beglyy-vzglyad-na-go-workspaces-v-go-1-18', '<p>Скоро выходит версия Go 1.18, и в массовом сознании она, скорее всего, будет ассоциироваться с Generic-ами. Но помимо них туда попадает еще несколько вкусных фичей. Например, <a href=\"https://go.googlesource.com/proposal/+/master/design/45713-workspace.md\">Go Workspaces</a>.</p><figure class=\"image\"><img src=\"/public/assets/users/img/blog/images/612a9aa864c973104174349d9a46c284.png\"></figure>', 'img/blog/images/612a9aa864c973104174349d9a46c284.png', '2022-02-17 10:15:36', '2022-02-17 10:15:36'),
(11, 'От песочных часов к пирамиде: как усовершенствовать структуру тестов', 'ot-pesochnyh-chasov-k-piramide-kak-usovershenstvovat-strukturu-testov', '<p>Меня зовут Владислав Романенко, я Senior iOS QA Engineer в Badoo и Bumble. Мы регулярно внедряем новые фичи в приложения, и автоматизация тестирования — один из способов не пропустить баги. Фактически автотесты входят в жизненный цикл всех частей наших приложений: бэкенда, сервисов, фронтенда и мобильных клиентов. Чем раньше мы обнаружим ошибку, тем дешевле будет её исправить.&nbsp;</p><figure class=\"image\"><img src=\"/public/assets/users/img/blog/images/0e045d089d2864b4ff14471958918b1a.jpg\"></figure>', 'img/blog/images/0e045d089d2864b4ff14471958918b1a.jpg', '2022-02-17 10:17:01', '2022-02-17 10:17:01'),
(12, 'Всем привет, я инди разработчик, но когда то я им не был :) За всё время своих скитаний я успел сменить много различных профессий', 'vsem-privet-ya-indi-razrabotchik-no-kogda-to-ya-im-ne-byl-za-vse-vremya-svoih-skitaniy-ya-uspel-smenit-mnogo-razlichnyh-professiy', '<p>Всем привет, я инди разработчик, но когда то я им не был :) За всё время своих скитаний я успел сменить много различных профессий, от грузчика и продавца консультанта, до сотрудника торгового зала в \"Ленте\", но всё это не особо меня устраивало, поэтому в свободное от работы время начал учиться программировать, и, в конце концов таки стал веб разработчиком, после чего нашёл себе неплохую работу в этой сфере и сидел бы я так дальше и не рыпался из веба, если бы однажды не захотел скоротать время и поиграть на эмуляторе Nintendo DS в одну из самых моих любимых на ней игр - \"Picross DS\".</p><figure class=\"image\"><img src=\"/public/assets/users/img/blog/images/a0a0089b716a7d8d9811197d9ecb46e4.png\"></figure>', 'img/blog/images/a0a0089b716a7d8d9811197d9ecb46e4.png', '2022-02-17 10:24:40', '2022-02-17 10:24:40'),
(13, 'Моделирование как оно есть ...', 'modelirovanie-kak-ono-est', '<figure class=\"image\"><img src=\"/public/assets/users/img/blog/images/1076b8f5c6c15e99178b530160b23e39.png\"></figure>', 'img/blog/images/31312.png', '2022-02-17 10:30:03', '2022-02-17 10:30:03');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(17, 'Броши', 'broshi', '2022-01-08 09:12:02', '2022-01-08 09:12:02'),
(18, 'Булавки', 'bulavki', '2022-01-08 09:12:12', '2022-01-08 09:12:12'),
(19, 'Женские кольца', 'zhenskie-kolca', '2022-01-08 09:14:27', '2022-01-08 09:14:27'),
(20, 'Запонки', 'zaponki', '2022-01-08 09:14:43', '2022-01-08 09:14:43'),
(21, 'Колье', 'kole', '2022-01-08 09:17:05', '2022-01-08 09:17:05'),
(22, 'Крестики', 'krestiki', '2022-01-08 09:17:15', '2022-01-08 09:17:15'),
(23, 'Мужские кольца', 'muzhskie-kolca', '2022-01-08 09:17:30', '2022-01-08 09:17:30'),
(24, 'Обручальные кольца', 'obruchalnye-kolca', '2022-01-08 09:17:41', '2022-01-08 09:17:41'),
(25, 'Пирсинг', 'pirsing', '2022-01-08 09:17:50', '2022-01-08 09:17:50'),
(26, 'Подвески', 'podveski', '2022-01-08 09:17:59', '2022-01-08 09:17:59'),
(27, 'Пуссеты', 'pussety', '2022-01-08 09:18:07', '2022-01-08 09:18:07'),
(28, 'Cерьги', 'cergi', '2022-01-08 09:18:16', '2022-01-08 09:18:16'),
(29, 'Сувениры', 'suveniry', '2022-01-08 09:18:25', '2022-01-08 09:18:25'),
(30, 'Цепи', 'cepi', '2022-01-08 09:18:32', '2022-01-08 09:18:32'),
(31, 'Часы', 'chasy', '2022-01-08 09:18:41', '2022-01-08 09:18:41');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `preview`, `detail`, `created_at`, `updated_at`) VALUES
(41, 'natasha libelle', 'natasha-libelle', 'img/gallery/natasha-libelle/natashalibel.jpg', 'img/gallery/natasha-libelle/0c3dc09d619800f3d10e0ffdff1c1b09.jpg', '2022-02-14 10:41:18', '2022-02-14 10:41:18'),
(42, 'natasha libelle', 'natasha-libelle-2', 'img/gallery/natasha-libelle/natashalibel.jpg', 'img/gallery/natasha-libelle/8f5f81a3533fefed7c2dca2d93ee53ee.jpg', '2022-02-14 10:41:18', '2022-02-14 10:41:18'),
(43, 'natasha libelle', 'natasha-libelle-3', 'img/gallery/natasha-libelle/natashalibel.jpg', 'img/gallery/natasha-libelle/e995d69a8feb277b2be30b9ef1e968e0.jpg', '2022-02-14 10:41:18', '2022-02-14 10:41:18'),
(44, 'pomelnilov', 'pomelnilov', 'img/gallery/pomelnilov/Без названия.png', 'img/gallery/pomelnilov/66037337_1276928852469443_12489094881869824_n.jpg', '2022-02-14 10:41:43', '2022-02-14 10:41:43'),
(45, 'pomelnilov', 'pomelnilov-2', 'img/gallery/pomelnilov/Без названия.png', 'img/gallery/pomelnilov/W2Wjf8C0GZzdqR8pGYCciwypLrY-6fXVV67SlNlyorrUV8r2O8qNCPivvK-YWOX-.jpg', '2022-02-14 10:41:43', '2022-02-14 10:41:43'),
(46, 'pomelnilov', 'pomelnilov-3', 'img/gallery/pomelnilov/Без названия.png', 'img/gallery/pomelnilov/Без названия (1).jpg', '2022-02-14 10:41:43', '2022-02-14 10:41:43'),
(47, 'pomelnilov', 'pomelnilov-4', 'img/gallery/pomelnilov/Без названия.png', 'img/gallery/pomelnilov/Без названия.jpg', '2022-02-14 10:41:43', '2022-02-14 10:41:43'),
(48, 'letniy briz', 'letniy-briz', 'img/gallery/letniy-briz/karatov.png', 'img/gallery/letniy-briz/0c3bef1ce8fcd88195f70d365fc13f1b.jpg', '2022-02-14 10:42:14', '2022-02-14 10:42:14'),
(49, 'letniy briz', 'letniy-briz-2', 'img/gallery/letniy-briz/karatov.png', 'img/gallery/letniy-briz/d1e0ff28a8fa78125a3ab7481e28921d.jpg', '2022-02-14 10:42:14', '2022-02-14 10:42:14'),
(50, 'letniy briz', 'letniy-briz-3', 'img/gallery/letniy-briz/karatov.png', 'img/gallery/letniy-briz/dxlXFgTvbCY.jpg', '2022-02-14 10:42:14', '2022-02-14 10:42:14'),
(51, 'letniy briz', 'letniy-briz-4', 'img/gallery/letniy-briz/karatov.png', 'img/gallery/letniy-briz/fKXa1-7fZkU.jpg', '2022-02-14 10:42:14', '2022-02-14 10:42:14'),
(52, 'letniy briz', 'letniy-briz-5', 'img/gallery/letniy-briz/karatov.png', 'img/gallery/letniy-briz/topaz.jpg', '2022-02-14 10:42:14', '2022-02-14 10:42:14'),
(53, 'sokolov stayl', 'sokolov-stayl', 'img/gallery/sokolov-stayl/6.jpg', 'img/gallery/sokolov-stayl/3ce70109f49632a91af84e9d5e2718f6.jpg', '2022-02-14 10:42:40', '2022-02-14 10:42:40'),
(54, 'sokolov stayl', 'sokolov-stayl-2', 'img/gallery/sokolov-stayl/6.jpg', 'img/gallery/sokolov-stayl/jewellerymag-ru-1-sokolov-basic.jpg', '2022-02-14 10:42:40', '2022-02-14 10:42:40'),
(55, 'sokolov stayl', 'sokolov-stayl-3', 'img/gallery/sokolov-stayl/6.jpg', 'img/gallery/sokolov-stayl/product1.jpg', '2022-02-14 10:42:40', '2022-02-14 10:42:40'),
(56, 'sokolov stayl', 'sokolov-stayl-4', 'img/gallery/sokolov-stayl/6.jpg', 'img/gallery/sokolov-stayl/sokolov-cover.jpg', '2022-02-14 10:42:40', '2022-02-14 10:42:40');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Золото', 'zoloto', '2022-01-08 09:19:40', '2022-01-08 09:19:40'),
(4, 'Серебро', 'serebro', '2022-01-08 09:21:30', '2022-01-08 09:21:30');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_10_17_113052_create_sessions_table', 1),
(10, '2021_12_31_071739_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stone_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category_id`, `vendor_code`, `material_id`, `stone_id`, `weight`, `size`, `price`, `picture`, `created_at`, `updated_at`) VALUES
(99, 'Брошь из серебра', 'brosh-iz-serebra', '17', '94040185', '4', '23', '9.38', NULL, '4596', 'img/products/broshi/94040185.jpg', '2022-01-17 10:16:36', '2022-01-17 10:16:36'),
(100, 'Брошь из серебра', 'brosh-iz-serebra-2', '17', '83040029', '4', '26', '3.51', NULL, '2310', 'img/products/broshi/83040029.jpg', '2022-01-17 10:18:21', '2022-01-17 10:18:21'),
(101, 'Брошь из золота', 'brosh-iz-zolota', '17', '740366', '3', '22', '3.85', NULL, '22099', 'img/products/broshi/740366.jpg', '2022-01-17 10:20:05', '2022-01-17 10:20:05'),
(102, 'Булавка из серебра', 'bulavka-iz-serebra', '18', 'с1603114', '4', '23', '0.9', NULL, '882', 'img/products/bulavki/s1603114.jpg', '2022-01-17 10:21:56', '2022-01-17 10:21:56'),
(103, 'Булавка с бриллиантом', 'bulavka-s-brilliantom', '18', '4044-100', '3', '12', '0.78', NULL, '9360', 'img/products/bulavki/4044_100.jpg', '2022-01-17 10:23:13', '2022-01-17 10:23:13'),
(104, 'Булавка из золота', 'bulavka-iz-zolota', '18', '040155', '3', '23', '1.39', NULL, '8660', 'img/products/bulavki/040155.jpg', '2022-01-17 10:24:20', '2022-01-17 10:24:20'),
(105, 'Кольцо из золота', 'kolco-iz-zolota', '19', '01-5510-00-201-1110', '3', '12', '2.46', '17.5', '22214', 'img/products/zhenskie-kolca/01_5510_00_201_1110.jpg', '2022-01-17 10:26:49', '2022-01-17 10:26:49'),
(106, 'Кольцо из золота', 'kolco-iz-zolota-2', '19', '01-5030-00-000-1110', '3', '26', '4.17', '17.0', '37655', 'img/products/zhenskie-kolca/01_5030_00_000_1110.jpg', '2022-01-17 10:28:08', '2022-01-17 10:28:08'),
(107, 'Кольцо из серебра', 'kolco-iz-serebra', '19', 'ETF-026-R-BS', '4', '21', '5.67', '18.0', '9660', 'img/products/zhenskie-kolca/etf_026_r_bs.jpg', '2022-01-17 10:29:28', '2022-01-17 10:29:28'),
(108, 'Запонки из золота', 'zaponki-iz-zolota', '20', '660062', '3', '11', '5.98', NULL, '34744', 'img/products/zaponki/660062.jpg', '2022-01-17 10:31:18', '2022-01-17 10:31:18'),
(109, 'Запонки из золота', 'zaponki-iz-zolota-2', '20', '660259', '3', '11', '4.89', NULL, '30807', 'img/products/zaponki/660259.jpg', '2022-01-17 10:32:33', '2022-01-17 10:32:33'),
(110, 'Запонки из серебра', 'zaponki-iz-serebra', '20', '140009р', '4', '11', '6.12', NULL, '2042', 'img/products/zaponki/140009r.jpg', '2022-01-17 10:33:48', '2022-01-17 10:33:48'),
(111, 'Колье из золота', 'kole-iz-zolota', '21', '07-0199-00-000-1140-48', '3', '11', '3.73', '45-50.0', '33421', 'img/products/kole/07_0199_00_000_1140_48.jpg', '2022-01-17 10:35:52', '2022-01-17 10:35:52'),
(112, 'Колье из серебра', 'kole-iz-serebra', '21', '94070121', '4', '23', '5.46', '45.0', '3440', 'img/products/kole/94070121.jpg', '2022-01-17 10:37:00', '2022-01-17 10:37:00'),
(113, 'Колье из серебра', 'kole-iz-serebra-2', '21', 'ст083', '4', '11', '2.78', NULL, '50.0', 'img/products/kole/st083.jpg', '2022-01-17 10:38:06', '2022-01-17 10:38:06'),
(114, 'крест из серебра', 'krest-iz-serebra', '22', 'п-37305з-13', '3', '10', '1.07', NULL, '1124', 'img/products/krestiki/p_37305z_13.jpg', '2022-01-17 14:30:12', '2022-01-17 14:30:12'),
(115, 'крест из серебра', 'krest-iz-serebra-2', '22', 'п1018ч', '4', '11', '14.99', NULL, '4620', 'img/products/krestiki/p1018ch.jpg', '2022-01-17 14:33:34', '2022-01-17 14:33:34'),
(116, 'БР382130', 'br382130', '22', 'БР382130', '3', '14', '2.41', NULL, '81000', 'img/products/krestiki/br382130.jpg', '2022-01-17 14:37:16', '2022-01-17 14:37:16'),
(117, 'Кольцо мужское', 'kolco-muzhskoe', '23', 'к359-20', '3', '9', '4.5', '19.5', '28350', 'img/products/muzhskie-kolca/k359_20.jpg', '2022-01-17 14:41:17', '2022-01-17 14:41:17'),
(118, 'Кольцо мужское из серебра', 'kolco-muzhskoe-iz-serebra', '23', 'ТНК905БЗ', '4', '16', '6.88', '19.5', '2890', 'img/products/muzhskie-kolca/tnk_905bz.jpg', '2022-01-17 14:43:50', '2022-01-17 14:43:50'),
(119, 'Кольцо мужское из серебра', 'kolco-muzhskoe-iz-serebra-2', '23', '10271', '4', '11', '11.86', '20.5', '4200', 'img/products/muzhskie-kolca/10271.jpg', '2022-01-17 14:45:50', '2022-01-17 14:45:50'),
(120, 'Кольцо обручальное из золота', 'kolco-obruchalnoe-iz-zolota', '24', '3921267/0.8s', '3', '11', '1.07', '18.0', '18.5', 'img/products/obruchalnye-kolca/3921267_0_8s.jpg', '2022-01-17 14:49:32', '2022-01-17 14:49:32'),
(121, 'Кольцо обручальное из золота', 'kolco-obruchalnoe-iz-zolota-2', '24', '1007', '3', '11', '4.56', '16.0', '2240', 'img/products/obruchalnye-kolca/1007.jpg', '2022-01-17 14:51:27', '2022-01-17 14:51:27'),
(122, 'Кольцо обручальное', 'kolco-obruchalnoe', '24', '11101р', '4', '23', '3.07', '17.5', '840', 'img/products/obruchalnye-kolca/11101r.jpg', '2022-01-17 14:53:26', '2022-01-17 14:53:26'),
(123, 'Пирсинг из золота', 'pirsing-iz-zolota', '25', '190170', '3', '23', '1.33', NULL, '8938', 'img/products/pirsing/190170.jpg', '2022-01-18 08:31:00', '2022-01-18 08:31:00'),
(124, 'Пирсинг из серебра', 'pirsing-iz-serebra', '25', '94060022', '4', '11', '0.8', NULL, '448', 'img/products/pirsing/94060022.jpg', '2022-01-18 08:32:46', '2022-01-18 08:32:46'),
(125, 'Пирсинг из серебра', 'pirsing-iz-serebra-2', '25', '94060035', '4', '23', '0.17', NULL, '190', 'img/products/pirsing/94060035.jpg', '2022-01-18 08:34:05', '2022-01-18 08:34:05'),
(126, 'Подвеска из золота', 'podveska-iz-zolota', '26', '1343284', '3', '23', '1.04', NULL, '6334', 'img/products/podveski/1343284.jpg', '2022-01-18 08:45:47', '2022-01-18 08:45:47'),
(127, 'Подвеска из серебра', 'podveska-iz-serebra', '26', '94031652', '4', '11', '4.63', NULL, '972', 'img/products/podveski/94031652.jpg', '2022-01-18 08:49:03', '2022-01-18 08:49:03'),
(128, 'Подвеска из серебра', 'podveska-iz-serebra-2', '26', '629956', '4', '23', '2.32', NULL, '1540', 'img/products/podveski/629956.jpg', '2022-01-18 08:56:14', '2022-01-18 08:56:14'),
(129, 'Серьги из серебра', 'sergi-iz-serebra', '28', '92022265', '4', '23', '6.17', NULL, '4970', 'img/products/cergi/92022265.jpg', '2022-01-18 09:04:20', '2022-01-18 09:04:20'),
(130, 'Серьги из золота', 'sergi-iz-zolota', '28', '02-4687-00-201-1111-76', '3', '26', '4.15', NULL, '39799', 'img/products/cergi/02_4687_00_201_1111_76_2.jpg', '2022-01-18 09:05:57', '2022-01-18 09:05:57'),
(131, 'Серьги из серебра', 'sergi-iz-serebra-2', '28', '02-4980-00-000-0200', '4', '26', '5.22', NULL, '5116', 'img/products/cergi/02_4980_00_000_0200.jpg', '2022-01-18 09:08:25', '2022-01-18 09:08:25'),
(132, 'Сувенир из серебра', 'suvenir-iz-serebra', '29', '33-1', '3', '11', '2.71', NULL, '949', 'img/products/suveniry/33_1.jpg', '2022-01-18 09:12:34', '2022-01-18 09:12:34'),
(133, 'Сувенир из серебра', 'suvenir-iz-serebra-2', '29', '4096', '4', '11', '4.21', NULL, '2652', 'img/products/suveniry/4096.jpg', '2022-01-18 09:14:27', '2022-01-18 09:14:27'),
(134, 'Фигурка Собака с цветком', 'figurka-sobaka-s-cvetkom', '29', 'ED-361', '4', '11', '0', NULL, '490', 'img/products/suveniry/ed_361.jpg', '2022-01-18 09:22:22', '2022-01-18 09:22:22'),
(135, 'Цепь из серебра', 'cep-iz-serebra', '30', '1298', '4', '11', '64.02', '65.0', '14980', 'img/products/cepi/1298.jpg', '2022-01-18 09:26:06', '2022-01-18 09:26:06'),
(136, 'Цепь из золота', 'cep-iz-zolota', '30', '55ЦГРП290СА6-А51', '3', '11', '31.16', '55.0', '53459', 'img/products/cepi/55tsgrp290sa6_a51.jpg', '2022-01-18 09:28:27', '2022-01-18 09:28:27'),
(137, 'Цепь из золота', 'cep-iz-zolota-2', '30', '45ЦЛ160А2-А51', '3', '11', '9.86', '45.0', '56596', 'img/products/cepi/45tsl160a2_a51.jpg', '2022-01-18 09:37:44', '2022-01-18 09:37:44'),
(138, 'Часы из золота', 'chasy-iz-zolota', '31', '53550', '3', '11', '25.84', NULL, '1900', 'img/products/chasy/53550.jpg', '2022-01-18 09:43:17', '2022-01-18 09:43:17'),
(139, 'Часы', 'chasy', '31', '45131', '4', '11', '0', NULL, '1900', 'img/products/chasy/45131.jpg', '2022-01-18 09:44:39', '2022-01-18 09:44:39'),
(140, 'Часы', 'chasy-2', '31', '47710', '4', '23', '0', NULL, '1400', 'img/products/chasy/47710.jpg', '2022-01-18 09:46:28', '2022-01-18 09:46:28');

-- --------------------------------------------------------

--
-- Структура таблицы `promoutions`
--

CREATE TABLE `promoutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `promoutions`
--

INSERT INTO `promoutions` (`id`, `title`, `slug`, `content`, `picture`, `created_at`, `updated_at`) VALUES
(6, 'Счастливый билет', 'schastlivyy-bilet', 'Современные технические системы постепенно усложняются, а традиционные подходы к разработке становятся неэффективны. Одним из вариантов решения этой проблемы является внедрение модельно-ориентированного проектирования (МОП) для разработки систем и программного обеспечения. Однако, прежде чем инвестировать средства в МОП, необходимо обосновать получаемые выгоды. В данной статье кратко коснемся того, что же такое МОП, чем он отличается от традиционного подхода и в чем его преимущества, а также рассчитаем ожидаемую экономию трудочасов от применения МОП по сравнению с традиционным подходом к разработке. Тут вы не найдете исчерпывающих объяснений по всем перечисленным вопросам, материал представляет собой больше «быстрый взгляд» на методологию со ссылками, где можно почитать подробнее.', 'img/promotions/scastlivyi-bilet/75-1.jpg', '2022-02-01 10:52:15', '2022-02-01 10:52:15'),
(7, 'Новогодняя Распродажа', 'novogodnyaya-rasprodazha', 'Это конечно же временное решение. Не всегда мы заранее знаем количество элементов в массиве. Например, есть некоторый метод Test, внутри которого для получения результата нужно получить последний элемент переданного массива: \r\nКак мы до этого уже говорили, можно рассчитать последний элемент с помощью длины массива, так как последний элемент имеет индекс – n - 1, где n – размер/длина массива. Для того, чтобы получить размерность массива, нужно воспользоваться функцией Length:', 'img/promotions/novogodnyaya-rasprodaza/5cizy84gz6o03wvpxycdwm3x0oc3bfud.jpg', '2022-02-01 10:53:03', '2022-02-01 10:53:03'),
(8, 'Мои кольца', 'moi-kolca', 'В случае традиционного подхода к разработке задачи на каждом этапе выполняются последовательно в различных программных средах, при этом многие действия выполняются вручную (рисунок 3). Каждый этап такого похода, от составления требований до эксплуатации системы, имеет свои недостатки: требования, как правило, записываются в текстовом виде с использованием таких инструментов, как Microsoft Word или IBM Engineering Requirements Management Door', 'img/promotions/moi-kolca/j5DfFeGOodBj_image1.png', '2022-02-01 10:53:53', '2022-02-01 10:53:53');

-- --------------------------------------------------------

--
-- Структура таблицы `stones`
--

CREATE TABLE `stones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stones`
--

INSERT INTO `stones` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Агат', 'agat', '2022-01-08 09:22:19', '2022-01-08 09:22:19'),
(9, 'Александрит', 'aleksandrit', '2022-01-08 09:23:51', '2022-01-08 09:23:51'),
(10, 'Аметист', 'ametist', '2022-01-08 09:24:25', '2022-01-08 09:24:25'),
(11, 'Без вставки', 'bez-vstavki', '2022-01-08 09:25:12', '2022-01-08 09:25:12'),
(12, 'Бриллиант', 'brilliant', '2022-01-08 09:25:27', '2022-01-08 09:25:27'),
(13, 'Гранат', 'granat', '2022-01-08 09:25:41', '2022-01-08 09:25:41'),
(14, 'Изумруд', 'izumrud', '2022-01-08 09:25:52', '2022-01-08 09:25:52'),
(15, 'Лондон топаз', 'london-topaz', '2022-01-08 09:26:04', '2022-01-08 09:26:04'),
(16, 'Малахит', 'malahit', '2022-01-08 09:26:13', '2022-01-08 09:26:13'),
(17, 'Наношпинель', 'nanoshpinel', '2022-01-08 09:26:31', '2022-01-08 09:26:31'),
(18, 'Оникс', 'oniks', '2022-01-08 09:29:40', '2022-01-08 09:29:40'),
(19, 'Раухтопаз', 'rauhtopaz', '2022-01-08 09:29:52', '2022-01-08 09:29:52'),
(20, 'Рубин', 'rubin', '2022-01-08 09:30:05', '2022-01-08 09:30:05'),
(21, 'Сапфир', 'sapfir', '2022-01-08 09:30:16', '2022-01-08 09:30:16'),
(22, 'Топаз', 'topaz', '2022-01-08 09:30:25', '2022-01-08 09:30:25'),
(23, 'Фианит', 'fianit', '2022-01-08 09:30:38', '2022-01-08 09:30:38'),
(24, 'Хризолит', 'hrizolit', '2022-01-08 09:30:51', '2022-01-08 09:30:51'),
(25, 'Хризопраз', 'hrizopraz', '2022-01-08 09:31:00', '2022-01-08 09:31:00'),
(26, 'Эмаль', 'emal', '2022-01-08 09:31:10', '2022-01-08 09:31:10'),
(27, 'Янтарь', 'yantar', '2022-01-08 09:31:18', '2022-01-08 09:31:18');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `is_admin`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(8, 'Иван', 'Иванов', 'ivan@mail.ru', NULL, '$2y$10$sCXg9dJnPIL1NYyjY3Ifo.rCoUb9/4tnaAhoblViE.sNub4UnoETC', '0', NULL, NULL, NULL, NULL, NULL, '2021-12-26 08:54:35', '2021-12-26 08:54:35'),
(9, 'Пётр', 'Петров', 'petr@mail.ru', NULL, '$2y$10$PDEY.wKmY/voBVqIPz4MEe3peFDeokiYULASnC4s/DgzDOaVuglNC', '0', NULL, NULL, NULL, NULL, NULL, '2021-12-26 08:56:42', '2021-12-26 08:56:42'),
(10, 'Сидор', 'Сидоров', 'sidr@mail.ru', NULL, '$2y$10$B.Qy.hN/qoV8f2oZvCNLh..CutCmoGKgWpWwxfC51kFXGG.OkPNoS', '0', NULL, NULL, NULL, NULL, NULL, '2021-12-26 08:57:43', '2021-12-26 08:57:43'),
(11, 'Денис', 'Белоцерковец', 'den@mail.ru', NULL, '$2y$10$U.xFan2tZlK12rSpGXwsMenLHyJGTHao2wCpQdyyweD1xXD1wbaCi', '1', NULL, NULL, NULL, NULL, NULL, '2021-12-26 09:02:04', '2021-12-26 09:02:04'),
(18, '123', '123', '123@mail.ru', NULL, '$2y$10$ghjWtxrQpnm57NXv.6.j0uFJqOhLzmiY5jLptPmLhB1.BYozrIiWu', '0', NULL, NULL, NULL, NULL, NULL, '2021-12-31 05:36:42', '2021-12-31 05:36:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_vendor_code_index` (`vendor_code`);

--
-- Индексы таблицы `promoutions`
--
ALTER TABLE `promoutions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stones`
--
ALTER TABLE `stones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT для таблицы `promoutions`
--
ALTER TABLE `promoutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `stones`
--
ALTER TABLE `stones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
