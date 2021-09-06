-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Вер 06 2021 р., 12:57
-- Версія сервера: 10.3.13-MariaDB-log
-- Версія PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `ul`
--

-- --------------------------------------------------------

--
-- Структура таблиці `edituser`
--

CREATE TABLE `edituser` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `edituser`
--

INSERT INTO `edituser` (`id`, `first_name`, `last_name`, `username`) VALUES
(1, 'Mark', 'Otto', '@mdo'),
(2, 'Jacob', 'Thornton', '@fat'),
(3, 'Larry', 'the Bird', '@twitter'),
(4, 'Larry the Bird', 'Bird', '@twitter');

-- --------------------------------------------------------

--
-- Структура таблиці `usermessages`
--

CREATE TABLE `usermessages` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `usermessages`
--

INSERT INTO `usermessages` (`id`, `text`, `create_date`, `create_time`) VALUES
(1, 'test', '06.09.21', '12:38:28'),
(2, 'testyou', '06.09.21', '12:38:57'),
(3, 'testttt', '06.09.21', '12:50:13'),
(4, 'rwerwe', '06.09.21', '12:55:37'),
(5, '324234', '06.09.21', '12:56:11'),
(6, 'ets', '06.09.21', '12:56:31'),
(7, 'ewrew', '06.09.21', '12:57:02'),
(8, 'tes', '06.09.21', '12:57:09'),
(9, 'ewrwer', '06.09.21', '12:57:27');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrapbootstrap_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrapbootstrap_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrapbootstrap_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `image_url`, `image_alt`, `name`, `job`, `twitter_link`, `twitter_text`, `wrapbootstrap_link`, `wrapbootstrap_title`, `wrapbootstrap_text`, `banned`) VALUES
(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunny A. (UI/UX Expert)', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', 'Contact Sunny', '<i class=\"fal fa-envelope\"></i>', 0),
(2, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. (ASP.NET Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', 'Contact Jos', '<i class=\"fal fa-envelope\"></i>', 0),
(3, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@lodev09', '@lodev09', 'https://wrapbootstrap.com/user/lodev09', 'Contact Jovanni', '<i class=\"fal fa-envelope\"></i>', 1),
(4, 'img/demo/authors/roberto.png', 'Jovanni Lo', 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@sildur', '@sildur', 'https://wrapbootstrap.com/user/sildur', 'Contact Roberto', '<i class=\"fal fa-envelope\"></i>', 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `edituser`
--
ALTER TABLE `edituser`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `usermessages`
--
ALTER TABLE `usermessages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `edituser`
--
ALTER TABLE `edituser`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `usermessages`
--
ALTER TABLE `usermessages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
