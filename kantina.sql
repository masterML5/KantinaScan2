-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 11:24 AM
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
  `vreme_obroka` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantina_statistika`
--

INSERT INTO `kantina_statistika` (`id`, `ime_prezime`, `broj_kartice`, `vrsta_obroka`, `ime_jela`, `vrsta_bona`, `datum`, `vreme_obroka`) VALUES
(140, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-28', '2022-04-28 21:32:54'),
(143, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-30', '2022-04-30 03:06:38'),
(144, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-30', '2022-04-30 15:51:55'),
(145, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-05-02', '2022-05-02 16:13:02'),
(146, 'Milos Jelic', '555', 'hladni obrok', 'tuna', 'redovan', '2022-05-02', '2022-05-02 16:15:35'),
(148, 'aki', '321', 'topli obrok', 'sarma', 'redovan', '2022-05-02', '2022-05-02 16:16:17'),
(149, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-05-03', '2022-05-03 15:21:21'),
(152, 'aki', '321', 'topli obrok', 'burek', 'redovan', '2022-05-03', '2022-05-03 16:30:29'),
(151, 'milos', '123', 'topli obrok', 'burek', 'redovan', '2022-07-02', '2022-07-01 22:00:00'),
(154, 'milos', '123', 'topli obrok', 'pohovani sir', 'redovan', '2022-05-23', '2022-05-23 18:47:42'),
(153, 'Milos Jelic', '555', 'hladni obrok', 'tuna', 'redovan', '2022-05-03', '2022-05-03 16:46:58'),
(134, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:13:36'),
(135, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:05'),
(136, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:17'),
(137, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-29', '2022-04-28 13:47:51'),
(138, 'Milos', '21312', 'topli obrok', 'sarma', 'gosti', '2022-04-29', '2022-04-28 14:04:58'),
(139, 'aki', '989', 'topli obrok', 'sarma', 'redovan', '2022-04-28', '2022-04-28 18:20:41');

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
(5, 'pasulj', 'topli_obrok', '', 'true', '2022-04-27 21:39:44'),
(6, 'gulas', 'topli_obrok', '', 'true', '2022-04-27 21:40:32'),
(7, 'spagete', 'topli_obrok', '', 'true', '2022-04-27 21:42:54'),
(10, 'pasteta', 'hladni_obrok', 'assets/images/pasteta.png', 'true', '2022-04-27 21:55:27'),
(12, 'burek', 'topli_obrok', 'assets/images/burek.jpg', 'true', '2022-04-27 22:50:13'),
(16, 'haringa', 'hladni_obrok', 'assets/images/haringa.png', 'true', '2022-05-03 19:25:20'),
(17, 'pohovani sir', 'topli_obrok', 'assets/images/pohovani sir.jpg', 'true', '2022-05-03 19:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `ime_prezime` text DEFAULT NULL,
  `broj_kartice` text DEFAULT NULL,
  `image` text DEFAULT 'assets/images/profile.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime_prezime`, `broj_kartice`, `image`) VALUES
(1, 'milos', '123', 'assets/images/topli.png'),
(2, 'aki', '321', 'assets/images/profile.png'),
(3, 'Milos Jelic', '555', 'assets/images/profile.png'),
(4, 'Joker', '1', 'assets/images/profile.png');

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
(87, 'burek', 'topli', '2022-04-27', 'assets/images/burek.jpg'),
(88, 'slanina', 'hladan', '2022-04-29', 'assets/images/slanina.jpg'),
(89, 'pasteta', 'hladan', '2022-04-29', 'assets/images/pasteta.jpg'),
(90, 'sarma', 'topli', '2022-04-29', 'assets/images/sarma.jpg'),
(91, 'slanina', 'hladan', '2022-04-30', 'assets/images/slanina.jpg'),
(92, 'burek', 'topli', '2022-04-30', 'assets/images/burek.jpg'),
(93, 'slanina', 'hladan', '2022-05-03', 'assets/images/slanina.jpg'),
(94, 'burek', 'topli', '2022-05-03', 'assets/images/burek.jpg'),
(95, 'tuna', 'hladan', '2022-05-03', 'assets/images/tuna.jpg'),
(102, 'pasteta', 'hladan', '2022-05-03', 'assets/images/pasteta.png'),
(103, 'sarma', 'topli', '2022-05-03', 'assets/images/sarma.jpg'),
(104, 'haringa', 'hladan', '2022-05-03', 'assets/images/haringa.png'),
(105, 'pohovani sir', 'topli', '2022-05-03', 'assets/images/pohovani sir.jpg');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `obroci`
--
ALTER TABLE `obroci`
  MODIFY `id_obroka` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vrsta_jela`
--
ALTER TABLE `vrsta_jela`
  MODIFY `id_vrsta_jela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
