-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 24 2022 р., 20:03
-- Версія сервера: 10.1.48-MariaDB
-- Версія PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `php_project`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `url`, `title`, `description`) VALUES
(1, 'garry-potter', 'Гарри Поттер', 'Все шутки о сабже'),
(2, 'angry', 'Бесят', 'Шутки о том, что все бесят');

-- --------------------------------------------------------

--
-- Структура таблиці `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `cid` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descr_min` varchar(1024) NOT NULL,
  `description` text,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `info`
--

INSERT INTO `info` (`id`, `cid`, `title`, `url`, `descr_min`, `description`, `image`) VALUES
(1, 1, 'Как меня унизили в geek-shope', 'geek-shope', 'Зашел как-то после работы в магазин Geek атрибутики. На кассе нахожу Карту Мародеров из Гарри Поттера. Стою рассматриваю:', 'Зашел как-то после работы в магазин Geek атрибутики. На кассе нахожу Карту Мародеров из Гарри Поттера. Стою рассматриваю:\r\n- Это Карта Мародеров.\r\n- Да, я знаю. На ней что то проявляется/меняется?\r\nКассир на полном серьёзе:\r\n- Нет конечно. Вы же МАГЛ!', '1599657993162221197.webp'),
(2, 1, 'Маркетинг уровень \"Гарри Поттер\"', 'marketing', 'Мантия неведимка из Гарри Поттера. Стоимость 25.000$\r\n\r\n', NULL, '1599721350195723123.webp'),
(3, 1, 'ГП и ко', 'gp-ko', 'Никакой смысловой нагрузки. Просто фото моих работ\r\n', NULL, '1599597586181144142.webp'),
(4, 2, 'Это бесит', 'angry-1', 'В аптеке', NULL, '159930306711734667.jpg'),
(5, 2, 'Если кто-то бесит', 'angry-2', 'План действий', NULL, '1594813802136529252.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) NOT NULL DEFAULT '',
  `ip` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `info`
--
ALTER TABLE `info`
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
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
