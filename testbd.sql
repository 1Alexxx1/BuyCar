-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 12 2013 г., 07:04
-- Версия сервера: 5.5.24-log
-- Версия PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `testbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `testbd`
--

CREATE TABLE IF NOT EXISTS `testbd` (
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `data3` text NOT NULL,
  `data4` text NOT NULL,
  `data5` text NOT NULL,
  `data6` text NOT NULL,
  `data7` text NOT NULL,
  `data8` text NOT NULL,
  `data9` text NOT NULL,
  `data10` text NOT NULL,
  `data11` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `testbd`
--

INSERT INTO `testbd` (`data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`) VALUES
('', '', '100', '100', '100', '1000', '100', '100', 'Ê ïîäåçäó', '1', ''),
('', '', '100', '100', '100', '1000', '100', '100', 'Ê ïîäåçäó', '1', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
