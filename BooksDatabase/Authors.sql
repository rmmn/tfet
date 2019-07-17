-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 17 2019 г., 21:54
-- Версия сервера: 5.7.25-log
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tfet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(12) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `nickname` text,
  `books_id` varchar(15) NOT NULL,
  `author_id` int(15) NOT NULL,
  `books_count` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `firstname`, `lastname`, `nickname`, `books_id`, `author_id`, `books_count`) VALUES
(1, 'John', 'Doe', NULL, '[1]', 1, 1),
(2, 'wqdwqd', 'efwfe', NULL, '[2, 3, 4, 7, 8, 9, 11]', 2, 7),
(3, 'ewqeweqwqweq', 'ertergfd', NULL, '[2, 5]', 3, 2),
(4, 'fddsfgsdg', '2112', NULL, '[6]', 4, 1),
(5, 'qwq', 'qwq', NULL, '[6, 10]', 5, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
