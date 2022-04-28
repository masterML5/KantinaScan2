-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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

CREATE TABLE `kantina_statistika` (
  `id` int(255) NOT NULL,
  `ime_prezime` text DEFAULT NULL,
  `broj_kartice` text DEFAULT NULL,
  `vrsta_obroka` text DEFAULT NULL,
  `ime_jela` varchar(232) NOT NULL,
  `vrsta_bona` enum('redovan','gosti','faktura') NOT NULL DEFAULT 'redovan',
  `datum` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantina_statistika`
--

INSERT INTO `kantina_statistika` (`id`, `ime_prezime`, `broj_kartice`, `vrsta_obroka`, `ime_jela`, `vrsta_bona`, `datum`, `timestamp`) VALUES
(3, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(4, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(5, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(6, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(7, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(8, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(9, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(10, '', '', 'hladni obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(11, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(12, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(13, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(14, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(15, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(16, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(17, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(18, 'milos', '123', 'hladni obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(19, '', '321', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(20, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(21, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(22, '', '321', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(23, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(24, '', '3421', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(25, '', '213', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(26, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(27, '', '321', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(28, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(29, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(30, '', '22', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(31, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(32, '', '321', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(33, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(34, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(35, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(36, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(37, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(38, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(39, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(40, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(41, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(42, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(43, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(44, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(45, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(46, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(47, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(48, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(49, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(50, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(51, '', '321', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(52, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(53, '', '', 'topli obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(54, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(55, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(56, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(57, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(58, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(59, '', '5555', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(60, 'milos', '123', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(61, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(62, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(63, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(64, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(65, 'Milos', '12332', 'topli obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(66, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(67, 'Milos', '123', 'topli obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(68, '', '', '', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(69, 'Milos', '123', 'hladan obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(70, 'milos', '123', 'hladan obrok', '', 'redovan', '2021-09-10', '2022-04-26 02:01:02'),
(71, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-17', '2022-04-26 02:01:02'),
(72, 'milos', '123', 'topli obrok', 'sarma', 'redovan', '2022-04-17', '2022-04-26 02:01:02'),
(73, 'milos', '123', 'hladni obroktopli obrok', 'tuna', 'redovan', '2022-04-17', '2022-04-26 02:01:02'),
(74, 'milos', '123', 'hladni obroktopli obrok', 'tunasarma', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(75, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(76, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(77, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(78, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(79, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(80, 'milos', '123', 'hladni obrok', 'tunasalama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(81, 'milos', '123', 'hladni obrok', 'tunaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(82, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(83, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(84, '', '', '', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(85, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(86, 'milos', '123', 'hladni obrok', 'tunasalamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(87, 'milos', '123', 'hladni obrok', 'tunasalamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(88, 'milos', '123', 'hladni obrok', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(89, 'milos', '123', 'hladni obrok', 'tunasalamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(90, 'milos', '123', 'hladni obrok', 'tunasalamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(91, 'milos', '123', 'hladni obrok', 'tunasalamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(92, 'milos', '123', 'hladni obrok', 'tunasalama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(93, 'milos', '123', 'hladni obrok', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(94, 'milos', '123', 'hladni obrok', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(95, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(96, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(97, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(98, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(99, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(100, 'milos', '123', 'topli obrok', 'sarma', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(101, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(102, 'milos', '123', 'topli obrok', 'sarma', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(103, '', '', '', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(104, '', '', '', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(105, '', '', '', '', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(106, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(107, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(108, 'milos', '123', 'hladni obrok', 'salamaslanina', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(109, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-25', '2022-04-26 02:01:02'),
(110, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(111, 'milos', '123', 'hladni obrok', 'tunasalama', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(112, 'milos', '123', 'hladni obrok', 'tunasalama', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(113, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(114, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(115, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(116, 'milos', '123', 'topli obrok', 'sarma', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(117, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(118, 'milos', '123', 'topli obrok', 'boranija', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(119, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-26', '2022-04-26 02:01:02'),
(120, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-26', '2022-04-26 02:01:13'),
(121, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-26', '2022-04-26 02:01:27'),
(122, 'milos', '123', 'hladni obrok', 'salama', 'redovan', '2022-04-26', '2022-04-26 02:05:03'),
(123, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 03:58:15'),
(124, 'milos', '123', 'topli obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 03:59:07'),
(125, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 03:59:48'),
(129, 'milos', '123', 'hladni obrok', 'tuna', '', '2022-04-26', '2022-04-26 04:22:09'),
(127, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 04:03:53'),
(128, 'milos', '123', 'topli obrok', 'salama', 'gosti', '2022-04-26', '2022-04-26 04:04:16'),
(130, 'milos', '123', 'hladni obrok', 'salama', 'faktura', '2022-04-26', '2022-04-26 04:22:29'),
(131, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-26', '2022-04-26 04:33:07'),
(132, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-27', '2022-04-27 15:07:19'),
(133, 'milos', '123', 'topli obrok', 'burek', 'redovan', '2022-04-27', '2022-04-27 21:12:43'),
(134, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:13:36'),
(135, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:05'),
(136, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:17'),
(137, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-29', '2022-04-28 13:47:51'),
(138, 'Milos', '213123', 'topli obrok', 'sarma', 'gosti', '2022-04-29', '2022-04-28 14:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `obroci`
--

CREATE TABLE `obroci` (
  `id_obroka` int(10) UNSIGNED NOT NULL,
  `ime_obroka` varchar(50) NOT NULL DEFAULT '0',
  `vrsta_obroka` enum('hladni_obrok','topli_obrok') NOT NULL,
  `slika_obroka` varchar(255) NOT NULL DEFAULT 'assets/images/obrok.jpg',
  `aktivan` enum('true','false') NOT NULL DEFAULT 'true',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obroci`
--

INSERT INTO `obroci` (`id_obroka`, `ime_obroka`, `vrsta_obroka`, `slika_obroka`, `aktivan`, `timestamp`) VALUES
(1, 'tuna', 'hladni_obrok', 'assets/images/tuna.jpg', 'true', '2022-04-27 21:34:22'),
(2, 'slanina', 'hladni_obrok', 'assets/images/slanina.jpg', 'true', '2022-04-27 21:34:22'),
(3, 'sarma', 'topli_obrok', 'assets/images/sarma.jpg', 'true', '2022-04-27 21:34:22'),
(4, 'kifla', 'hladni_obrok', 'assets/images/kifla.jpg', 'false', '2022-04-27 21:34:22'),
(5, 'pasulj', '', '', 'true', '2022-04-27 21:39:44'),
(6, 'gulas', '', '', 'true', '2022-04-27 21:40:32'),
(7, 'spagete', '', '', 'true', '2022-04-27 21:42:54'),
(10, 'pasteta', 'hladni_obrok', '', 'true', '2022-04-27 21:55:27'),
(12, 'burek', 'topli_obrok', 'assets/images/burek.jpg', 'true', '2022-04-27 22:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `ime_prezime` text DEFAULT NULL,
  `broj_kartice` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime_prezime`, `broj_kartice`, `image`) VALUES
(1, 'milos', '123', 'assets/images/topli.png');

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_jela`
--

CREATE TABLE `vrsta_jela` (
  `id_vrsta_jela` int(11) NOT NULL,
  `ime_jela` varchar(200) NOT NULL,
  `tip_jela` varchar(200) NOT NULL,
  `datum` date NOT NULL,
  `slika` varchar(255) DEFAULT 'assets/images/obrok.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vrsta_jela`
--

INSERT INTO `vrsta_jela` (`id_vrsta_jela`, `ime_jela`, `tip_jela`, `datum`, `slika`) VALUES
(1, 'sarma', 'topli', '2022-04-26', 'assets/images/sarma.jpg'),
(2, 'tuna', 'hladan', '2022-04-26', 'assets/images/tuna.jpg'),
(3, 'salama', 'hladan', '2022-04-26', 'assets/images/tuna.jpg'),
(4, 'slanina', 'hladan', '2022-04-26', 'assets/images/tuna.jpg'),
(5, 'pasulj', 'topli', '2022-04-26', 'assets/images/pasulj.jpg'),
(6, 'boranija', 'topli', '2022-04-26', 'assets/images/boranija.jpg'),
(7, 'karfiol', 'topli', '2022-04-25', 'assets/images/karfiol.jpg'),
(41, 'tuna', 'hladan', '2022-04-21', '\'assets/images/tuna.jpg\''),
(78, 'tuna', 'hladan', '2022-04-27', 'assets/images/tuna.jpg'),
(79, 'slanina', 'hladan', '2022-04-27', 'assets/images/slanina.jpg'),
(80, 'sarma', 'topli', '2022-04-27', 'assets/images/sarma.jpg'),
(81, 'tuna', 'hladan', '2022-05-07', 'assets/images/tuna.jpg'),
(82, 'tuna', 'hladan', '2022-05-05', 'assets/images/tuna.jpg'),
(83, 'tuna', 'hladan', '2022-04-28', 'assets/images/tuna.jpg'),
(84, 'tuna', 'hladan', '2022-05-02', 'assets/images/tuna.jpg'),
(85, 'sarma', 'topli', '2022-05-02', 'assets/images/sarma.jpg'),
(86, 'tuna', 'hladan', '2022-04-25', 'assets/images/tuna.jpg'),
(87, 'burek', 'topli', '2022-04-27', 'assets/images/burek.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantina_statistika`
--
ALTER TABLE `kantina_statistika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obroci`
--
ALTER TABLE `obroci`
  ADD PRIMARY KEY (`id_obroka`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vrsta_jela`
--
ALTER TABLE `vrsta_jela`
  ADD PRIMARY KEY (`id_vrsta_jela`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantina_statistika`
--
ALTER TABLE `kantina_statistika`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `obroci`
--
ALTER TABLE `obroci`
  MODIFY `id_obroka` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vrsta_jela`
--
ALTER TABLE `vrsta_jela`
  MODIFY `id_vrsta_jela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
