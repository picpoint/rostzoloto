-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 12 2022 г., 16:55
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
(90, 'кольцо', 'kolco', '23', '018869', '3', '25', '1.77', '20.5', '5298', NULL, '2022-01-12 10:55:06', '2022-01-12 10:55:06');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
