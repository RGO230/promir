-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2022 г., 19:26
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `milarmony`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE `chats` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `stream_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `duration` int NOT NULL DEFAULT '0',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userdescr` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `descr`, `image`, `video`, `created_at`, `updated_at`, `price`, `course_id`, `duration`, `category`, `userdescr`) VALUES
(22, 'test', '<p>test</p>', '/uploads/639c853b77171.jpg', 'wedewd', '2022-12-16 11:48:27', '2022-12-16 11:48:27', 1000, NULL, 0, 'Ретрит', '<p>test</p>'),
(23, 'subtest', '<p>sefafe</p>', '/uploads/639c85511e165.jpg', 'wedewd', '2022-12-16 11:48:49', '2022-12-16 11:48:49', 1000, 22, 0, 'Ретрит', '<p>subtest</p>'),
(24, 'чя', '<p>явыс</p>', '/uploads/639c9df9536c7.jpg', 'ЫФВ', '2022-12-16 13:34:01', '2022-12-16 13:34:01', 1000, 22, 0, 'Ретрит', '<p>яыс</p>'),
(25, 'ыу', '<p>фыва</p>', '/uploads/639ca05fad894.jpg', 'фвыа', '2022-12-16 13:44:15', '2022-12-16 13:44:15', 1, 22, 0, 'Ретрит', '<p>фвыа</p>'),
(26, 'сч', '<p>фыав</p>', '/uploads/639ca078c8d25.webp', 'wedewd', '2022-12-16 13:44:40', '2022-12-16 13:44:40', 1000, NULL, 0, 'Ретрит', '<p>фвыа</p>'),
(27, 'фыва', '<p>ыфва</p>', '/uploads/639ca08485f6e.jpg', 'ыфва', '2022-12-16 13:44:52', '2022-12-16 13:44:52', 1000, 26, 0, 'Ретрит', '<p>фвыа</p>'),
(28, 'фыв', '<p>фыв</p>', '/uploads/639ca1a07c432.webp', 'wedewd', '2022-12-16 13:49:36', '2022-12-16 13:49:36', 1000, 22, 0, 'Ретрит', '<p>ыфв</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `course_users`
--

CREATE TABLE `course_users` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `payment_id` int DEFAULT NULL,
  `paychek` tinyint(1) NOT NULL DEFAULT '0',
  `duration` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_users`
--

INSERT INTO `course_users` (`id`, `created_at`, `updated_at`, `course_id`, `user_id`, `payment_id`, `paychek`, `duration`) VALUES
(7, '2022-12-17 13:35:42', '2022-12-17 13:35:42', 22, 1, 0, 0, 0),
(8, '2022-12-17 13:41:40', '2022-12-17 13:41:40', 22, 1, 0, 0, 0),
(9, '2022-12-17 13:41:40', '2022-12-17 13:41:40', 23, 1, 0, 0, 0),
(10, '2022-12-17 13:41:40', '2022-12-17 13:41:40', 24, 1, 0, 0, 0),
(11, '2022-12-17 13:41:40', '2022-12-17 13:41:40', 25, 1, 0, 0, 0),
(12, '2022-12-17 13:41:40', '2022-12-17 13:41:40', 28, 1, 0, 0, 0),
(13, '2022-12-17 13:50:08', '2022-12-17 13:50:08', 22, 1, 0, 0, 0),
(14, '2022-12-17 13:50:08', '2022-12-17 13:50:08', 23, 1, 0, 0, 0),
(15, '2022-12-17 13:50:08', '2022-12-17 13:50:08', 24, 1, 0, 0, 0),
(16, '2022-12-17 13:50:08', '2022-12-17 13:50:08', 25, 1, 0, 0, 0),
(17, '2022-12-17 13:50:08', '2022-12-17 13:50:08', 28, 1, 0, 0, 0),
(18, '2022-12-17 13:50:34', '2022-12-17 13:50:34', 22, 1, 0, 0, 0),
(19, '2022-12-17 13:50:34', '2022-12-17 13:50:34', 23, 1, 0, 0, 0),
(20, '2022-12-17 13:50:37', '2022-12-17 13:50:37', 22, 1, 0, 0, 0),
(21, '2022-12-17 13:50:37', '2022-12-17 13:50:37', 23, 1, 0, 0, 0),
(22, '2022-12-17 13:50:48', '2022-12-17 13:50:48', 22, 1, 0, 0, 0),
(23, '2022-12-17 13:50:48', '2022-12-17 13:50:48', 23, 1, 0, 0, 0),
(24, '2022-12-17 13:50:48', '2022-12-17 13:50:48', 24, 1, 0, 0, 0),
(25, '2022-12-17 13:50:48', '2022-12-17 13:50:48', 25, 1, 0, 0, 0),
(26, '2022-12-17 13:50:48', '2022-12-17 13:50:48', 28, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2022_09_11_184536_create_courses_table', 1),
(15, '2022_09_28_151432_create_stream_table', 1),
(16, '2022_09_30_113001_create_chats_table', 1),
(17, '2022_10_01_155021_add_role_to_users_table', 1),
(18, '2022_10_03_120810_add_price_to_courses_table', 1),
(19, '2022_12_12_114651_add_inner_course_id_to_courses_table', 1),
(20, '2022_10_06_131735_create_course_users_table', 2),
(21, '2022_10_13_151241_create_stream_users_table', 2),
(22, '2022_10_13_152957_add_message_to_chats_table', 2),
(23, '2022_10_14_154701_add_stream_token_to_streams_table', 2),
(24, '2022_11_24_142232_add_subscribe_duration_to_courses_table', 2),
(25, '2022_11_26_124514_add_payment_id_to_course_users_table', 2),
(26, '2022_11_26_173214_add_paycheck_to_course_users_table', 2),
(34, '2022_11_26_173829_add_duration_to_course_users_table', 3),
(35, '2022_12_04_190102_change_video_column', 3),
(36, '2022_12_12_135716_add_category_to_courses_table', 3),
(37, '2022_12_12_145612_add_audio_change_to_courses_table', 3);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `streams`
--

CREATE TABLE `streams` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `stream_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'wed', 'wed@mail.ru', NULL, '$2y$10$mml7cZuKi4XbbykcXG9hbuGrzCQHSSSW2TY7o4xU4fxvMVz9B0GDG', NULL, '2022-12-12 09:35:49', '2022-12-12 09:35:49', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_course_id_foreign` (`course_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `course_users`
--
ALTER TABLE `course_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `streams`
--
ALTER TABLE `streams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stream_users`
--
ALTER TABLE `stream_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

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
