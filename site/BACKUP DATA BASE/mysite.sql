-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 01 2017 р., 20:13
-- Версія сервера: 10.1.26-MariaDB
-- Версія PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `introtext` text NOT NULL,
  `fulltext` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `articles`
--

INSERT INTO `articles` (`id`, `title`, `introtext`, `fulltext`) VALUES
(1, 'ITSF Ð²Ð¸Ð·Ð½Ð°Ð»Ð° Ð½Ð¾Ð²Ñƒ Ð°Ð¼ÐµÑ€Ð¸ÐºÐ°Ð½ÑÑŒÐºÑƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ ÑÑ‚Ð¾Ð»Ñƒ', 'ÐœÑ–Ð¶Ð½Ð°Ñ€Ð¾Ð´Ð½Ð° Ð¤ÐµÐ´ÐµÑ€Ð°Ñ†Ñ–Ñ Ð½Ð°ÑÑ‚Ñ–Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ñ„ÑƒÑ‚Ð±Ð¾Ð»Ñƒ (ITSF) Ð²Ð¸Ð·Ð½Ð°Ð»Ð° Ð½Ð¾Ð²Ñƒ Ð°Ð¼ÐµÑ€Ð¸ÐºÐ°Ð½ÑÑŒÐºÑƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ ÑÑ‚Ð¾Ð»Ñƒ - \"Warrior\". Ð¢ÐµÐ¿ÐµÑ€ Ð½Ð° Ñ‚Ð°ÐºÐ¸Ñ… ÑÑ‚Ð¾Ð»Ð°Ñ… Ð¼Ð¾Ð¶Ð½Ð° Ð¿Ñ€Ð¾Ð²Ð¾Ð´Ð¸Ñ‚Ð¸ Ð¾Ñ„Ñ–Ñ†Ñ–Ð¹Ð½Ñ– Ñ‚ÑƒÑ€Ð½Ñ–Ñ€Ð¸ Ð·Ñ– ÑÑ‚Ð°Ñ‚ÑƒÑÐ¾Ð¼ International Series, Master Series Ñ– Pro Tour ÐžÐ´Ð¸Ð½ Ñ–Ð· Ð¿Ñ€Ñ–Ð¾Ñ€Ð¸Ñ‚ÐµÑ‚Ñ–Ð² Ñ†Ñ–Ñ”Ñ— Ð¼Ð¾Ð´ÐµÐ»Ñ– - Ð´Ð¸Ð²Ð½Ð¾Ð³Ð¾ Ð²Ð¸Ð³Ð»ÑÐ´Ñƒ ÐºÐ¾Ð»Ð±Ð¸ Ð½Ð° Ð´Ð°Ð»ÐµÐºÐ¸Ñ… ÐºÑ–Ð½Ñ†ÑÑ… Ð²ÑÑ–Ñ… ÑˆÑ‚Ð°Ð½Ð³.', 'ÐœÑ–Ð¶Ð½Ð°Ñ€Ð¾Ð´Ð½Ð° Ð¤ÐµÐ´ÐµÑ€Ð°Ñ†Ñ–Ñ Ð½Ð°ÑÑ‚Ñ–Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ñ„ÑƒÑ‚Ð±Ð¾Ð»Ñƒ (ITSF) Ð²Ð¸Ð·Ð½Ð°Ð»Ð° Ð½Ð¾Ð²Ñƒ Ð°Ð¼ÐµÑ€Ð¸ÐºÐ°Ð½ÑÑŒÐºÑƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ ÑÑ‚Ð¾Ð»Ñƒ - \"Warrior\". Ð¢ÐµÐ¿ÐµÑ€ Ð½Ð° Ñ‚Ð°ÐºÐ¸Ñ… ÑÑ‚Ð¾Ð»Ð°Ñ… Ð¼Ð¾Ð¶Ð½Ð° Ð¿Ñ€Ð¾Ð²Ð¾Ð´Ð¸Ñ‚Ð¸ Ð¾Ñ„Ñ–Ñ†Ñ–Ð¹Ð½Ñ– Ñ‚ÑƒÑ€Ð½Ñ–Ñ€Ð¸ Ð·Ñ– ÑÑ‚Ð°Ñ‚ÑƒÑÐ¾Ð¼ International Series, Master Series Ñ– Pro Tour ÐžÐ´Ð¸Ð½ Ñ–Ð· Ð¿Ñ€Ñ–Ð¾Ñ€Ð¸Ñ‚ÐµÑ‚Ñ–Ð² Ñ†Ñ–Ñ”Ñ— Ð¼Ð¾Ð´ÐµÐ»Ñ– - Ð´Ð¸Ð²Ð½Ð¾Ð³Ð¾ Ð²Ð¸Ð³Ð»ÑÐ´Ñƒ ÐºÐ¾Ð»Ð±Ð¸ Ð½Ð° Ð´Ð°Ð»ÐµÐºÐ¸Ñ… ÐºÑ–Ð½Ñ†ÑÑ… Ð²ÑÑ–Ñ… ÑˆÑ‚Ð°Ð½Ð³. Ð—Ñ€Ð¾Ð±Ð»ÐµÐ½Ð° Ñ‚Ð°ÐºÐ° ÐºÐ¾Ð½ÑÑ‚Ñ€ÑƒÐºÑ†Ñ–Ñ Ð´Ð»Ñ Ð±ÐµÐ·Ð¿ÐµÐºÐ¸: Ð· Ð½Ð¸Ð¼Ð¸ Ð½Ðµ Ð²Ð¸Ð¹Ð´Ðµ Ð²Ð¸Ð¿Ð°Ð´ÐºÐ¾Ð²Ð¾ Ñ‚Ñ€Ð°Ð²Ð¼ÑƒÐ²Ð°Ñ‚Ð¸ ÑÑƒÐ¿ÐµÑ€Ð½Ð¸ÐºÐ° ÑÐ²Ð¾Ñ”ÑŽ ÑˆÑ‚Ð°Ð½Ð³Ð¾ÑŽ Ñ– Ð½Ð°Ð²Ð¿Ð°ÐºÐ¸ ÑÑƒÐ¿ÐµÑ€Ð½Ð¸Ðº Ð½Ðµ Ð·Ð¼Ð¾Ð¶Ðµ Ð¿ÐµÑ€ÐµÑˆÐºÐ¾Ð´Ð¸Ñ‚Ð¸ Ñ…Ð¾Ð´Ñƒ Ð³Ñ€Ð¸ ÑÑ…Ð¾Ð¿Ð¸Ð²ÑˆÐ¸ÑÑŒ Ð½Ð°Ð²Ñ–Ñ‚ÑŒ Ð²Ð¸Ð¿Ð°Ð´ÐºÐ¾Ð²Ð¾ Ð·Ð° Ñ–Ð½ÑˆÐ¸Ð¹ ÐºÑ–Ð½ÐµÑ†ÑŒ ÑˆÑ‚Ð°Ð½Ð³Ð¸.'),
(2, 'The End', '20 ÑÑ–Ñ‡Ð½Ñ 2015 Ñ€Ð¾ÐºÑƒ Ð·Ð°Ð²ÐµÑ€ÑˆÐ¸Ð²ÑÑ Ñ‡ÐµÑ€Ð³Ð¾Ð²Ð¸Ð¹ Ð’ÑÐµÑƒÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ¸Ð¹ Ñ‚ÑƒÑ€Ð½Ñ–Ñ€ Ð· Ñ„ÑƒÑÐ±Ð¾Ð»Ñƒ.', '20 ÑÑ–Ñ‡Ð½Ñ 2015 Ñ€Ð¾ÐºÑƒ Ð·Ð°Ð²ÐµÑ€ÑˆÐ¸Ð²ÑÑ Ñ‡ÐµÑ€Ð³Ð¾Ð²Ð¸Ð¹ Ð’ÑÐµÑƒÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ¸Ð¹ Ñ‚ÑƒÑ€Ð½Ñ–Ñ€ Ð· Ñ„ÑƒÑÐ±Ð¾Ð»Ñƒ. Ð’ Ð½ÑŒÐ¾Ð¼Ñƒ Ð¿Ñ€Ð¸Ð¹Ð¼Ð°Ð»Ð¾ ÑƒÑ‡Ð°ÑÑ‚ÑŒ 32 ÑƒÑ‡Ð°ÑÐ½Ð¸ÐºÐ¸ . ÐŸÐµÑ€ÐµÐ¼Ð¾Ð¶ÐµÑ†ÑŒ Ð¾Ñ‚Ñ€Ð¸Ð¼Ð°Ð² Ð¿Ñ€Ð¸Ð·Ð¸ Ð²Ñ–Ð´ ÑÐ¿Ð¾Ð½ÑÐ¾Ñ€Ñ–Ð². Ð§ÐµÐºÐ°Ñ”Ð¼Ð¾ Ð±Ð°Ð¶Ð°ÑŽÑ‡Ð¸Ñ… Ð½Ð° Ð½Ð°ÑÑ‚ÑƒÐ¿Ð½Ð¸Ñ… Ð·Ð¼Ð°Ð³Ð°Ð½Ð½ÑÑ…'),
(6, 'lorem', 'Lorem ipsum', 'Lorem ipsum full text!');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `login`, `password`, `admin`, `avatar`) VALUES
(1, 'Ð Ð¾ÑÑ‚Ð¸ÑÐ»Ð°Ð²', 'ÐŸÑ‚Ð°ÑˆÐ¸Ð½ÑÑŒÐºÐ¸Ð¹', 'ptashinskij.rostik@yandex.ua', 'rostik1410', 'b0ed80b63b217b7a71948b76f94310d4', 0, 'b58fcde3220a2894c1c0d49b2debf102.jpeg'),
(2, 'admin', 'admin', 'admin@yandex.ua', 'admin', 'c33367701511b4f6020ec61ded352059', 1, ''),
(3, 'Ð’Ð¾Ð»Ð¾Ð´Ð¸Ð¼Ð¸Ñ€', 'ÐžÐ²Ñ‡Ð°Ñ€ÑƒÐº', 'vova@yandex.ua', 'vova', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(4, 'User11', 'user11', 'user@gmail.com', 'user11', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(5, 'user1', '', 'user1', 'user1', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '5caafcaff152bedd4e8007538db5be80.jpeg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
