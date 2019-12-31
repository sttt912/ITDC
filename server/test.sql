-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 22:02
-- Версия сервера: 5.7.15
-- Версия PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `transport`
--

CREATE TABLE `transport` (
  `ID` int(11) NOT NULL,
  `numbers` text NOT NULL,
  `driver` text NOT NULL,
  `spu` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `transport`
--

INSERT INTO `transport` (`ID`, `numbers`, `driver`, `spu`, `status`) VALUES
(1, 'dfgdcfgfd', 'fdgdfgdf  dfgfdg fdg dfgfdg', 'fgdfgfd', 'gfdgfdgfdgd'),
(2, 'Номер', 'Волитель', 'ЗПУ', 'Статус2'),
(3, 'Номер', 'fdgdfgdf  dfgfdg fdg dfgfdg', 'ЗПУ', 'gfdgfdgfdgd'),
(4, 'Просто', 'куекуек', 'кусммчс', 'ваапвсапв'),
(5, 'Номер', 'авпавпавпав', 'павпвапав', 'вп піиіавпаіпівя');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `transport`
--
ALTER TABLE `transport`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
