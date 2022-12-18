-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.171:3306
-- Время создания: Дек 18 2022 г., 15:27
-- Версия сервера: 10.3.27-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `j1122384_mila`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stream_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `duration` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `descr`, `image`, `video`, `created_at`, `updated_at`, `price`, `duration`) VALUES
(1, 'КУРС «МОЕ Я»', '<p>Курс создан и разработан для поиска и познания самого себя. Будет проходить целостная работа над установками, которые навязали в детстве, вашим окружением и определением чего хотите именно Вы. Осмысление самого себя &ndash; важный шаг в жизни любого человека. Курс поможет Вам обрести гармонию, реализоваться в профессиональной и личной жизни, быть счастливым и самосовершенствоваться.</p>', '/uploads/638bb02c581fc.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Wrs3-w5ukGk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IeYS-YsTYdM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-12-03 20:23:08', '2022-12-05 13:34:21', 5000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `course_users`
--

CREATE TABLE `course_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `paychek` tinyint(1) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_users`
--

INSERT INTO `course_users` (`id`, `created_at`, `updated_at`, `course_id`, `user_id`, `payment_id`, `paychek`, `duration`) VALUES
(1, '2022-12-04 18:18:10', '2022-12-04 18:18:10', 1, 1, 0, 0, 0),
(2, '2022-12-04 18:18:14', '2022-12-04 18:18:14', 1, 1, 0, 0, 0),
(3, '2022-12-04 18:21:18', '2022-12-04 18:21:18', 1, 1, 0, 0, 0),
(4, '2022-12-04 18:22:00', '2022-12-04 18:22:00', 1, 1, 0, 0, 0),
(5, '2022-12-04 18:22:25', '2022-12-04 18:22:25', 1, 1, 0, 0, 0),
(6, '2022-12-04 18:22:47', '2022-12-04 18:22:47', 1, 1, 0, 0, 0),
(7, '2022-12-04 18:22:55', '2022-12-04 18:22:55', 1, 1, 0, 0, 0),
(8, '2022-12-04 18:23:16', '2022-12-04 18:23:16', 1, 1, 0, 0, 0),
(9, '2022-12-04 18:23:33', '2022-12-04 18:23:33', 1, 1, 0, 0, 0),
(10, '2022-12-04 18:26:01', '2022-12-04 18:26:01', 1, 1, 0, 0, 0),
(11, '2022-12-04 18:28:20', '2022-12-04 18:28:20', 1, 1, 0, 0, 0),
(12, '2022-12-04 18:28:38', '2022-12-04 18:28:38', 1, 1, 0, 0, 0),
(13, '2022-12-04 18:29:42', '2022-12-04 18:29:42', 1, 1, 0, 0, 0),
(14, '2022-12-04 18:30:28', '2022-12-04 18:30:28', 1, 1, 0, 0, 0),
(15, '2022-12-04 18:30:43', '2022-12-04 18:30:43', 1, 1, 0, 0, 0),
(16, '2022-12-04 18:30:58', '2022-12-04 18:30:58', 1, 1, 0, 0, 0),
(17, '2022-12-04 18:31:04', '2022-12-04 18:31:04', 1, 1, 0, 0, 0),
(18, '2022-12-04 18:31:39', '2022-12-04 18:31:39', 1, 1, 0, 0, 0),
(19, '2022-12-04 18:40:05', '2022-12-04 18:40:05', 1, 1, 0, 0, 0),
(20, '2022-12-04 18:40:21', '2022-12-04 18:40:21', 1, 1, 0, 0, 0),
(21, '2022-12-04 18:52:57', '2022-12-04 18:52:57', 1, 2, 0, 1, 0),
(22, '2022-12-05 05:04:00', '2022-12-05 05:05:01', 1, 2, 0, 1, 0),
(23, '2022-12-05 05:08:41', '2022-12-05 05:08:41', 1, 1, 0, 0, 0),
(24, '2022-12-05 13:06:08', '2022-12-05 13:06:08', 1, 3, 0, 0, 0),
(25, '2022-12-05 13:06:19', '2022-12-05 13:06:19', 1, 3, 0, 0, 0),
(26, '2022-12-05 13:06:35', '2022-12-05 13:07:56', 1, 3, 0, 1, 0);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_11_184536_create_courses_table', 1),
(6, '2022_09_28_151432_create_stream_table', 1),
(7, '2022_09_30_113001_create_chats_table', 1),
(8, '2022_10_01_155021_add_role_to_users_table', 1),
(9, '2022_10_03_120810_add_price_to_courses_table', 1),
(10, '2022_10_06_131735_create_course_users_table', 1),
(11, '2022_10_13_151241_create_stream_users_table', 1),
(12, '2022_10_13_152957_add_message_to_chats_table', 1),
(13, '2022_10_14_154701_add_stream_token_to_streams_table', 1),
(14, '2022_11_24_142232_add_subscribe_duration_to_courses_table', 1),
(15, '2022_11_26_124514_add_payment_id_to_course_users_table', 1),
(16, '2022_11_26_173214_add_paycheck_to_course_users_table', 1),
(17, '2022_11_26_173829_add_duration_to_course_users_table', 1),
(18, '2022_12_04_190102_change_video_column', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `streams`
--

CREATE TABLE `streams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_flow` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `streamtoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `stream_users`
--

CREATE TABLE `stream_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stream_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Александр', 'nfs2025@mail.ru', NULL, '$2y$10$Fmjh7Pn2nnaXo1JRem3.Cu8Af7qvhH28se5v1Zor06mwjb/czI.bm', NULL, '2022-12-03 20:02:46', '2022-12-03 20:02:46', 1),
(2, 'Александр', 'nfs2025@mail.ru1', NULL, '$2y$10$5M6nphO/hFR.BBzAODbLq.QJXGg89LBAU2k2bKnCFYmKR6ohz.m7C', NULL, '2022-12-04 18:48:51', '2022-12-04 18:48:51', 0),
(3, 'Мила', 'milatrukhanova@gmail.com', NULL, '$2y$10$4oEccfRCyq0JuxNH1HLbi.hpUneih6QNPb4BDMudA0kDoUnWYVaaG', NULL, '2022-12-05 13:03:28', '2022-12-05 13:03:28', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `stream_id_fk` (`stream_id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `course_users`
--
ALTER TABLE `course_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_users_course_id_foreign` (`course_id`),
  ADD KEY `course_users_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stream_users`
--
ALTER TABLE `stream_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_users_stream_id_foreign` (`stream_id`),
  ADD KEY `stream_users_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT для таблицы `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `course_users`
--
ALTER TABLE `course_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `streams`
--
ALTER TABLE `streams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stream_users`
--
ALTER TABLE `stream_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `stream_id_fk` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `course_users`
--
ALTER TABLE `course_users`
  ADD CONSTRAINT `course_users_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `stream_users`
--
ALTER TABLE `stream_users`
  ADD CONSTRAINT `stream_users_stream_id_foreign` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stream_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
