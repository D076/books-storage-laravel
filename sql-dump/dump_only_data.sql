-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 23 2022 г., 06:25
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books_storage_laravel`
--

-- --------------------------------------------------------

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Голдфингер', 2, '2022-09-22 21:12:22', '2022-09-22 21:12:22'),
(2, 'Дикость', 2, '2022-09-22 21:13:04', '2022-09-22 21:13:04'),
(3, 'Ложный узел', 2, '2022-09-22 21:14:11', '2022-09-22 21:14:11'),
(4, 'Разрушенный трон', 3, '2022-09-22 21:14:37', '2022-09-22 21:14:37'),
(5, 'Элириен', 3, '2022-09-22 21:15:07', '2022-09-22 21:15:07'),
(6, 'Химера', 3, '2022-09-22 21:15:44', '2022-09-22 21:15:44'),
(7, 'Шкатулка', 4, '2022-09-22 21:16:07', '2022-09-22 21:16:07'),
(8, 'Морские рассказы', 4, '2022-09-22 21:17:09', '2022-09-22 21:17:09'),
(9, 'Защитник', 4, '2022-09-22 21:17:58', '2022-09-22 21:17:58');

-- --------------------------------------------------------

--
-- Дамп данных таблицы `book_genres`
--

INSERT INTO `book_genres` (`id`, `book_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 4, 1, NULL, NULL),
(8, 4, 3, NULL, NULL),
(9, 4, 5, NULL, NULL),
(10, 5, 1, NULL, NULL),
(11, 5, 2, NULL, NULL),
(12, 5, 5, NULL, NULL),
(13, 6, 2, NULL, NULL),
(14, 6, 6, NULL, NULL),
(15, 7, 4, NULL, NULL),
(16, 7, 6, NULL, NULL),
(17, 8, 1, NULL, NULL),
(18, 8, 3, NULL, NULL),
(19, 8, 5, NULL, NULL),
(20, 9, 1, NULL, NULL),
(21, 9, 3, NULL, NULL),
(22, 9, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Приключения', '2022-09-22 21:08:46', '2022-09-22 21:08:46'),
(2, 'Детектив', '2022-09-22 21:08:54', '2022-09-22 21:08:54'),
(3, 'Роман', '2022-09-22 21:09:07', '2022-09-22 21:09:07'),
(4, 'Фантастика', '2022-09-22 21:09:17', '2022-09-22 21:09:17'),
(5, 'Фэнтези', '2022-09-22 21:10:26', '2022-09-22 21:10:26'),
(6, 'Мистика', '2022-09-22 21:10:35', '2022-09-22 21:10:35');

-- --------------------------------------------------------

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@admin.ru', NULL, '$2y$10$CvtvBg8UnJPsZOvRYR2UMeXv91j.KfgPkBEF7iRzEPK.S8t7uBEGi', NULL, '2022-09-22 21:03:36', '2022-09-22 21:03:36', 0),
(2, 'Васильев Илья', 'autor1@mail.ru', NULL, '$2y$10$HBwUGA3ep8HDQgRUVpNUt.ivxkAxRdDId3wzHjsz9uN7SwiXV9L8i', NULL, '2022-09-22 21:05:25', '2022-09-22 21:05:25', 1),
(3, 'Фаустов Игорь', 'autor2@mail.ru', NULL, '$2y$10$xOqux3kWyDsGljBc.L.zoe7oDQJ4thB94afAHH24eD6e8yGhhixEm', NULL, '2022-09-22 21:06:35', '2022-09-22 21:06:35', 1),
(4, 'Седых Иван', 'autor3@mail.ru', NULL, '$2y$10$o5zl6aD1c4rt.oP9zv4HJOhblo9pffBcHy9B2SapX/mLRXVHVDqMi', NULL, '2022-09-22 21:07:23', '2022-09-22 21:07:23', 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
