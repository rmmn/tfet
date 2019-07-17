-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Времясоздания: Июл17 2019 г., 22:05
-- Версиясервера: 5.7.25-log
-- ВерсияPHP: 7.3.2
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- Базаданных: `tfet`
  --
  -- --------------------------------------------------------
  --
  -- Структуратаблицы`books`
  --
  CREATE TABLE `books` (
    `id` int(255) NOT NULL,
    `title` text NOT NULL,
    `author_id` int(15) NOT NULL,
    `coauthor` text,
    `book_id` int(11) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
  -- Дампданныхтаблицы`books`
  --
INSERT INTO
  `books` (
    `id`,
    `title`,
    `author_id`,
    `coauthor`,
    `book_id`
  )
VALUES
  (1, 'LoremIpsum', 1, NULL, 1),
  (2, 'LoremIpsum2', 2, '3', 2),
  (3, 'LoremIpsum3', 2, NULL, 3),
  (4, 'LoremIpsum4', 2, NULL, 4),
  (5, 'LoremIpsum5', 3, NULL, 5),
  (6, 'LoremIpsum6', 4, '5', 6),
  (7, 'LoremIpsum7', 2, NULL, 7),
  (8, 'LoremIpsum8', 2, NULL, 8),
  (9, 'LoremIpsum9', 2, NULL, 9),
  (10, 'LoremIpsum10', 5, NULL, 10),
  (11, 'LoremIpsum11', 2, '5', 11),
  (12, 'LoremIpsum12', 2, NULL, 12);
--
  -- Индексысохранённыхтаблиц
  --
  --
  -- Индексытаблицы`books`
  --
ALTER TABLE
  `books`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT длясохранённыхтаблиц
  --
  --
  -- AUTO_INCREMENT длятаблицы`books`
  --
ALTER TABLE
  `books`
MODIFY
  `id` int(255) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;