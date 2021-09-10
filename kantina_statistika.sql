-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2021 at 12:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantina`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantina_statistika`
--

DROP TABLE IF EXISTS `kantina_statistika`;
CREATE TABLE IF NOT EXISTS `kantina_statistika` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `broj_kartice` text,
  `ime_prezime` varchar(50) DEFAULT NULL,
  `datum` text,
  `vrsta_obroka` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantina_statistika`
--

INSERT INTO `kantina_statistika` (`id`, `broj_kartice`, `ime_prezime`, `datum`, `vrsta_obroka`) VALUES
(1, '6', 'aaaaaaaa', '2021-08-24', 'hladan obrok'),
(2, 'asdasdasda', 'asdasd', '2021-08-23', 'topli obrok'),
(3, 'adaa', 'asda', '2021-08-24', 'topli obrok'),
(4, 'asda', 'asda', '2021-08-24', 'topli obrok'),
(5, 'asdasdasd', 'asdasd', '2021-08-24', 'topli obrok'),
(6, 'asdasda', 'sadasdad', '2021-08-24', 'topli obrok'),
(7, '58', 'sadasd', '2021-08-24', 'topli obrok'),
(8, 'asdasdada', 'asdasdas', '2021-08-24', 'topli obrok'),
(9, '12312', 'asdasdasd', '2021-08-24', 'topli obrok'),
(10, 'jhfgjfghj', 'jfhjg', '2021-08-24', 'topli obrok'),
(11, 'test', 'test', '2021-08-24', 'topli obrok'),
(12, '123123131313113131', 'asdasds', '2021-08-25', 'topli obrok'),
(13, 'asdasd', 'asdasd', '2021-08-24', 'topli obrok'),
(91, '1171752190', 'tomo', '2021-09-08', 'topli obrok'),
(92, '1171752190', 'tomo', '2021-09-08', 'hladan obrok'),
(93, '1171752190', 'nenad', '2021-09-08', 'hladan obrok'),
(94, '1', '1', '2021-09-08', 'topli obrok'),
(95, '123', 'milos', '2021-09-08', 'topli obrok'),
(123, '123', 'milos', '2021-09-09', 'hladni obrok'),
(173, '123', 'milos', '2021-09-10', 'hladni obrok'),
(172, '123', 'milos', '2021-09-10', 'hladni obroktopli obrok'),
(171, '123', 'milos', '2021-09-10', 'hladni obrok');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
