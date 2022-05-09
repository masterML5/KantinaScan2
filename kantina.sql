-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 12:13 PM
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
  `vreme_obroka` timestamp NOT NULL DEFAULT current_timestamp(),
  `smena` enum('prva','druga','treca') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantina_statistika`
--

INSERT INTO `kantina_statistika` (`id`, `ime_prezime`, `broj_kartice`, `vrsta_obroka`, `ime_jela`, `vrsta_bona`, `datum`, `vreme_obroka`, `smena`) VALUES
(140, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-28', '2022-04-28 21:32:54', 'prva'),
(143, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-30', '2022-04-30 03:06:38', 'prva'),
(144, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-30', '2022-04-30 15:51:55', 'prva'),
(145, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-05-02', '2022-05-02 16:13:02', 'prva'),
(146, 'Milos Jelic', '555', 'hladni obrok', 'tuna', 'redovan', '2022-05-02', '2022-05-02 16:15:35', 'prva'),
(148, 'aki', '321', 'topli obrok', 'sarma', 'redovan', '2022-05-02', '2022-05-02 16:16:17', 'prva'),
(149, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-05-03', '2022-05-03 15:21:21', 'prva'),
(152, 'aki', '321', 'topli obrok', 'burek', 'redovan', '2022-05-03', '2022-05-03 16:30:29', 'prva'),
(151, 'milos', '123', 'topli obrok', 'burek', 'redovan', '2022-07-02', '2022-07-01 22:00:00', 'prva'),
(154, 'milos', '123', 'topli obrok', 'pohovani sir', 'redovan', '2022-05-23', '2022-05-23 18:47:42', 'prva'),
(153, 'Milos Jelic', '555', 'hladni obrok', 'tuna', 'redovan', '2022-05-03', '2022-05-03 16:46:58', 'prva'),
(134, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:13:36', 'prva'),
(135, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:05', 'prva'),
(136, 'milos', '123', 'hladni obrok', 'slanina', 'redovan', '2022-04-27', '2022-04-27 21:15:17', 'prva'),
(137, 'milos', '123', 'hladni obrok', 'tuna', 'redovan', '2022-04-29', '2022-04-28 13:47:51', 'prva'),
(138, 'Milos', '21312', 'topli obrok', 'sarma', 'gosti', '2022-04-29', '2022-04-28 14:04:58', 'prva'),
(139, 'aki', '989', 'topli obrok', 'sarma', 'redovan', '2022-04-28', '2022-04-28 18:20:41', 'prva'),
(155, 'Milos Jelic', '555', 'topli obrok', 'burek', 'redovan', '2022-05-04', '2022-05-04 09:32:56', 'prva'),
(156, 'Joker', '1', 'hladni obrok', 'pasteta', 'gosti', '2022-05-04', '2022-05-04 10:05:03', 'prva'),
(157, 'Joker', '1', 'topli obrok', 'burek', 'gosti', '2022-05-04', '2022-05-04 10:06:56', 'prva'),
(158, 'Joker', '1', 'hladni obrok', 'pasteta', 'redovan', '2022-05-04', '2022-05-04 10:06:59', 'prva'),
(159, 'Joker', '1', 'topli obrok', 'burek', 'gosti', '2022-05-04', '2022-05-04 10:07:10', 'prva'),
(160, 'Joker', '1', 'topli obrok', 'burek', 'faktura', '2022-05-04', '2022-05-04 10:07:13', 'prva'),
(161, 'Joker', '1', 'topli obrok', 'burek', 'faktura', '2022-05-04', '2022-05-04 10:07:16', 'prva'),
(162, 'Joker', '1', 'hladni obrok', 'pasteta', 'faktura', '2022-05-04', '2022-05-04 10:07:20', 'prva'),
(163, 'aki', '321', 'topli obrok', 'burek', 'redovan', '2022-05-04', '2022-05-04 12:49:15', 'prva'),
(164, 'Milos Jelic', '1171743294', 'hladni obrok', 'pasteta', 'redovan', '2022-05-06', '2022-05-06 13:47:29', 'prva'),
(165, 'Milan Tosic', '1697418828', 'topli obrok', 'spagete', 'redovan', '2022-05-09', '2022-05-09 09:45:54', 'prva');

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
(1, 'Zdravko Jevic', '1169760110', 'assets/users/Photo1.jpg'),
(2, 'Katica Katancic', '804898526', 'assets/users/Photo10.jpg'),
(3, 'Ivana Zdrnja', '1171630686', 'assets/users/Photo100.jpg'),
(4, 'Milan Tosic', '1697418828', 'assets/users/Photo101.jpg'),
(5, 'Svetlana Nisevic', '1171704126', 'assets/users/Photo102.jpg'),
(6, 'Hermina Katona', '3123308986', 'assets/users/Photo103.jpg'),
(7, 'Silvia Sinkovic', '3134447226', 'assets/users/Photo104.jpg'),
(8, 'Robert Terkelj', '1171761854', 'assets/users/Photo105.jpg'),
(9, 'Julijana Sabo', '804843246', 'assets/users/Photo106.jpg'),
(10, 'Josip Vukovic', '3024589740', 'assets/users/Photo107.jpg'),
(11, 'Bogdan Sarac', '3831338622', 'assets/users/Photo108.jpg'),
(12, 'Ivica Kujundzic', '3123433354', 'assets/users/Photo109.jpg'),
(13, 'Slavica Jovanovic Kunji', '3459179612', 'assets/users/Photo11.jpg'),
(14, 'Zuzana Klickovic', '804814814', 'assets/users/Photo110.jpg'),
(15, 'Roza Pisar', '1700291868', 'assets/users/Photo111.jpg'),
(16, 'Silvia Peic', '3277896218', 'assets/users/Photo112.jpg'),
(17, 'Branislav Bozinoski', '556422479', 'assets/users/Photo113.jpg'),
(18, 'Zvonko Patarcic', '808745710', 'assets/users/Photo114.jpg'),
(19, 'Vesna Trbojevic', '808914478', 'assets/users/Photo115.jpg'),
(20, 'Jelena Bagavac', '3731713196', 'assets/users/Photo116.jpg'),
(21, 'Caba Katona', '91504104', 'assets/users/Photo117.jpg'),
(22, 'Darko Vert', '2050820554', 'assets/users/Photo118.jpg'),
(23, 'Ildiko Suknovic', '688380110', 'assets/users/Photo119.jpg'),
(24, 'Edit Horvat', '1700251452', 'assets/users/Photo12.jpg'),
(25, 'Nebojsa Jelic', '1171752190', 'assets/users/Photo120.jpg'),
(26, 'Snezana Dulanovic', '3296330954', 'assets/users/Photo121.jpg'),
(27, 'Toldi Robert', '2687711620', 'assets/users/Photo122.jpg'),
(28, 'Ljiljana Jokic', '3295736506', 'assets/users/Photo123.jpg'),
(29, 'Tunde Fero', '688392494', 'assets/users/Photo124.jpg'),
(30, 'Sasa Ivazovic', '1171734174', 'assets/users/Photo125.jpg'),
(31, 'Aleksandar Radulovic', '91528677', 'assets/users/Photo126.jpg'),
(32, 'Nevenka Secerov', '3123432650', 'assets/users/Photo127.jpg'),
(33, 'Jozef Kermec', '808888462', 'assets/users/Photo128.jpg'),
(34, 'Erzebet Seiler', '3294401418', 'assets/users/Photo129.jpg'),
(35, 'Marika Vizin', '3833322542', 'assets/users/Photo13.jpg'),
(36, 'Tivadar Tot', '250348999', 'assets/users/Photo130.jpg'),
(37, 'Magdalena Mesaros', '3456547628', 'assets/users/Photo131.jpg'),
(38, 'Maria Negeli', '2052545338', 'assets/users/Photo132.jpg'),
(39, 'Robert Olajos', '2688232212', 'assets/users/Photo133.jpg'),
(40, 'Branko Kacmarac', '2052577306', 'assets/users/Photo134.jpg'),
(41, 'Balaz Varga', '2050249418', 'assets/users/Photo135.jpg'),
(42, 'Branislav Grgic', '1896440250', 'assets/users/Photo136.jpg'),
(43, 'Judit Fulop', '860315826', 'assets/users/Photo137.jpg'),
(44, 'Miroslav Radojicic', '30885536', 'assets/users/Photo138.jpg'),
(45, 'Dario Vidakovic', '2053714970', 'assets/users/Photo139.jpg'),
(46, 'Ksenija Vukovic', '53229222', 'assets/users/Photo14.jpg'),
(47, 'Iboja Pertic', '3123463002', 'assets/users/Photo140.jpg'),
(48, 'Djurdjina Kujundzic', '3278015290', 'assets/users/Photo141.jpg'),
(49, 'Marijana Hupko', '1902798586', 'assets/users/Photo142.jpg'),
(50, 'Brigita Lasanc', '688609630', 'assets/users/Photo143.jpg'),
(51, 'Marina Sokcic', '688444062', 'assets/users/Photo144.jpg'),
(52, 'Marija Covic', '3295932474', 'assets/users/Photo145.jpg'),
(53, 'Tereza Bubori', '1700055612', 'assets/users/Photo146.jpg'),
(54, 'Zolt Simic', '3327049418', 'assets/users/Photo147.jpg'),
(55, 'Ivan Mezei', '688396142', 'assets/users/Photo148.jpg'),
(56, 'Petar Jezevic', '4221497294', 'assets/users/Photo149.jpg'),
(57, 'Magda Sabo Handja', '3487151092', 'assets/users/Photo15.jpg'),
(58, 'Sandra Bajic', '3295770058', 'assets/users/Photo150.jpg'),
(59, 'Goran Knezevic', '3024147996', 'assets/users/Photo151.jpg'),
(60, 'Marija Nisic', '70288963', 'assets/users/Photo152.jpg'),
(61, 'Marica Remes', '3277750586', 'assets/users/Photo153.jpg'),
(62, 'Ljiljana Vojnic', '2859355492', 'assets/users/Photo154.jpg'),
(63, 'Marija Kutuzov', '2050216506', 'assets/users/Photo155.jpg'),
(64, 'Katarina Moravcic', '1700220652', 'assets/users/Photo156.jpg'),
(65, 'Tomislav Stantic', '1902492826', 'assets/users/Photo157.jpg'),
(66, 'Sabolc Pinter', '1171266238', 'assets/users/Photo158.jpg'),
(67, 'Dzenifer Elek', '3458644332', 'assets/users/Photo159.jpg'),
(68, 'Milan Tatalovic', '808997934', 'assets/users/Photo16.jpg'),
(69, 'Ivica Stantic', '1171272814', 'assets/users/Photo160.jpg'),
(70, 'Jasmina Temesvari', '1171265278', 'assets/users/Photo161.jpg'),
(71, 'Laura Miklenovic', '688638558', 'assets/users/Photo162.jpg'),
(72, 'Mario Sarcevic', '84155876', 'assets/users/Photo163.jpg'),
(73, 'Dragana Miljkovic', '2863689908', 'assets/users/Photo164.jpg'),
(74, 'Dejan Majski', '849334481', 'assets/users/Photo165.jpg'),
(75, 'Marija Polovina', '840674769', 'assets/users/Photo166.jpg'),
(76, 'Branislav Grgic', '3327001370', 'assets/users/Photo167.jpg'),
(77, 'Dejan Varga', '1171269118', 'assets/users/Photo168.jpg'),
(78, 'Tibor Levai', '3024147916', 'assets/users/Photo169.jpg'),
(79, 'Robert Kasa', '854056401', 'assets/users/Photo17.jpg'),
(80, 'Elvira Patyi', '3295855738', 'assets/users/Photo170.jpg'),
(81, 'Marina Panic', '3123343594', 'assets/users/Photo171.jpg'),
(82, 'Ivan Jandric', '1700064860', 'assets/users/Photo172.jpg'),
(83, 'Ibolja Guganovic', '4185065613', 'assets/users/Photo173.jpg'),
(84, 'Sladjan Bosnjak', '2863221124', 'assets/users/Photo174.jpg'),
(85, 'Eva Vujovic', '2688102308', 'assets/users/Photo175.jpg'),
(86, 'Endre Bickei', '3456785772', 'assets/users/Photo176.jpg'),
(87, 'Ratko Malinovic', '2053521642', 'assets/users/Photo177.jpg'),
(88, 'Aleksandar Savevski', '1700055548', 'assets/users/Photo178.jpg'),
(89, 'Ibolja Milovanovic', '28781642', 'assets/users/Photo179.jpg'),
(90, 'Nada Lukin', '688387758', 'assets/users/Photo18.jpg'),
(91, 'Erika Bencik', '3028997948', 'assets/users/Photo180.jpg'),
(92, 'Dario Glavcic', '842544337', 'assets/users/Photo181.jpg'),
(93, 'Erzebet Jenei', '1700256972', 'assets/users/Photo182.jpg'),
(94, 'Silvija Mandaric', '2688188036', 'assets/users/Photo183.jpg'),
(95, 'Tibor Makai', '31952292', 'assets/users/Photo184.jpg'),
(96, 'Djerdjike Marinkovic', '3296172122', 'assets/users/Photo185.jpg'),
(97, 'Jelena Bagavac', '68215880', 'assets/users/Photo186.jpg'),
(98, 'Katalin Veres', '1700032588', 'assets/users/Photo187.jpg'),
(99, 'Klaudia Balint', '3295854538', 'assets/users/Photo188.jpg'),
(100, 'Ljiljana Stipic', '3169089866', 'assets/users/Photo189.jpg'),
(101, 'Roza Franciskovic', '1700251532', 'assets/users/Photo190.jpg'),
(102, 'Nikola Skenderovic', '1700030076', 'assets/users/Photo191.jpg'),
(103, 'Jadranka Bukvic', '3456540860', 'assets/users/Photo192.jpg'),
(104, 'Lidija Molnar', '3326841546', 'assets/users/Photo193.jpg'),
(105, 'Jovanka Grgic', '834538323', 'assets/users/Photo194.jpg'),
(106, 'Monika Erdelji', '4104783389', 'assets/users/Photo195.jpg'),
(107, 'Eleonora Salma', '3463459532', 'assets/users/Photo196.jpg'),
(108, 'Kristina Kovac', '3462328636', 'assets/users/Photo197.jpg'),
(109, 'Ana Vidakovic', '583807859', 'assets/users/Photo198.jpg'),
(110, 'Debora Medjesi', '2687550388', 'assets/users/Photo199.jpg'),
(111, 'Dejana Tikvicki', '1171276910', 'assets/users/Photo2.jpg'),
(112, 'Natasa Vasovic', '613479005', 'assets/users/Photo20.jpg'),
(113, 'Zorica Sotic', '853474257', 'assets/users/Photo200.jpg'),
(114, 'Dragana Dakic', '92702158', 'assets/users/Photo201.jpg'),
(115, 'Daniela Markovic', '2860002196', 'assets/users/Photo202.jpg'),
(116, 'Sanela Zarkovic', '688682382', 'assets/users/Photo203.jpg'),
(117, 'Marina Klecin', '3294277978', 'assets/users/Photo204.jpg'),
(118, 'Larisa Igracev', '1907512458', 'assets/users/Photo205.jpg'),
(119, 'Ivana Mandic', '2056227418', 'assets/users/Photo206.jpg'),
(120, 'Robert Mahalik', '76425189', 'assets/users/Photo207.jpg'),
(121, 'Ana Tinka', '3123308506', 'assets/users/Photo208.jpg'),
(122, 'Tibor Sic', '3296293674', 'assets/users/Photo209.jpg'),
(123, 'Ksenija Petrovic', '2857271348', 'assets/users/Photo21.jpg'),
(124, 'Dragisa Dulic', '1700374172', 'assets/users/Photo210.jpg'),
(125, 'Bobana Katancic', '690856670', 'assets/users/Photo211.jpg'),
(126, 'Darko Tomasek', '2863454180', 'assets/users/Photo212.jpg'),
(127, 'Igor Nemet', '688394814', 'assets/users/Photo213.jpg'),
(128, 'Vanesa Aradski', '1983004586', 'assets/users/Photo214.jpg'),
(129, 'Marta Aradski', '851320273', 'assets/users/Photo215.jpg'),
(130, 'Snezana Dulanovic', '3730571308', 'assets/users/Photo216.jpg'),
(131, 'Andjelko Cvik', '3833646446', 'assets/users/Photo217.jpg'),
(132, 'Marin Margetic', '3452913548', 'assets/users/Photo218.jpg'),
(133, 'Andrea Oravec', '2053207626', 'assets/users/Photo219.jpg'),
(134, 'Boglarka Molnar Medjeri', '3123382730', 'assets/users/Photo22.jpg'),
(135, 'Marija Ujvari Vasanta', '69066942', 'assets/users/Photo220.jpg'),
(136, 'Dejan Djordjevic', '3456535004', 'assets/users/Photo221.jpg'),
(137, 'Bojan Basic', '2862573124', 'assets/users/Photo222.jpg'),
(138, 'Blazenka Kolar', '1982543898', 'assets/users/Photo223.jpg'),
(139, 'Zoran Mesaros', '850031082', 'assets/users/Photo224.jpg'),
(140, 'Krsto Kerlec', '1697501388', 'assets/users/Photo225.jpg'),
(141, 'Zoran Camilovic', '2052966602', 'assets/users/Photo226.jpg'),
(142, 'Stipan Stefkovic', '1171319278', 'assets/users/Photo227.jpg'),
(143, 'Vera Patarcic', '3296165098', 'assets/users/Photo228.jpg'),
(144, 'Adrijana Babic', '1697420524', 'assets/users/Photo229.jpg'),
(145, 'Zorica Muncan', '661995646', 'assets/users/Photo23.jpg'),
(146, 'Roza Djeri', '3117954538', 'assets/users/Photo230.jpg'),
(147, 'Marinko Juric', '1700091388', 'assets/users/Photo231.jpg'),
(148, 'Mario Casar', '828682579', 'assets/users/Photo232.jpg'),
(149, 'Milovan Radanovic', '3462296428', 'assets/users/Photo233.jpg'),
(150, 'Ana Jukic', '1143922016', 'assets/users/Photo234.jpg'),
(151, 'Darko Vert', '3291194602', 'assets/users/Photo235.jpg'),
(152, 'Jelena Tatalovic', '3123392250', 'assets/users/Photo236.jpg'),
(153, 'Ana Kulundzic', '843814865', 'assets/users/Photo237.jpg'),
(154, 'Jasna Perkucin', '176658090', 'assets/users/Photo238.jpg'),
(155, 'Bojana Franciskovic', '69220942', 'assets/users/Photo239.jpg'),
(156, 'Snezana Kalancev', '662072222', 'assets/users/Photo24.jpg'),
(157, 'Alisa Crnkovic', '3728497516', 'assets/users/Photo240.jpg'),
(158, 'Antun Irsevic', '70566510', 'assets/users/Photo241.jpg'),
(159, 'Aljosa Milidrag', '1171632574', 'assets/users/Photo242.jpg'),
(160, 'Dragan Jankovic', '850785530', 'assets/users/Photo243.jpg'),
(161, 'Nebojsa Terzija', '2052631514', 'assets/users/Photo244.jpg'),
(162, 'Miroslav Katancic', '1902799434', 'assets/users/Photo245.jpg'),
(163, 'Helena Vojnic Tunic', '688386974', 'assets/users/Photo246.jpg'),
(164, 'Biljana Bajic', '1700064236', 'assets/users/Photo247.jpg'),
(165, 'Hajnalka File', '662016126', 'assets/users/Photo248.jpg'),
(166, 'Dejan Mitic', '71730484', 'assets/users/Photo249.jpg'),
(167, 'Veronika Saric', '1171226206', 'assets/users/Photo25.jpg'),
(168, 'Mira Milanovic', '171418542', 'assets/users/Photo250.jpg'),
(169, 'Josip Mackovic', '662018238', 'assets/users/Photo251.jpg'),
(170, 'Ladislav Horvat', '2050333258', 'assets/users/Photo252.jpg'),
(171, 'Ruza Rafai', '2823085002', 'assets/users/Photo253.jpg'),
(172, 'Stevica Kiza', '688461566', 'assets/users/Photo254.jpg'),
(173, 'Ildiko Rekli', '1697501948', 'assets/users/Photo255.jpg'),
(174, 'Eduard Bajzak', '849603025', 'assets/users/Photo256.jpg'),
(175, 'Caba Berenji', '570176831', 'assets/users/Photo257.jpg'),
(176, 'Silvija Nemedi', '2052603754', 'assets/users/Photo258.jpg'),
(177, 'Robert Balog', '2050380746', 'assets/users/Photo259.jpg'),
(178, 'Melinda Mikovic', '662074334', 'assets/users/Photo26.jpg'),
(179, 'Arpad Katona', '2050747418', 'assets/users/Photo260.jpg'),
(180, 'Ivana Vukov', '1171644014', 'assets/users/Photo261.jpg'),
(181, 'Ivan Gadzur', '865152178', 'assets/users/Photo262.jpg'),
(182, 'Gabor Nanasi', '121784303', 'assets/users/Photo263.jpg'),
(183, 'Borislavka Basic', '3730527468', 'assets/users/Photo264.jpg'),
(184, 'Dragan Katancic', '688685742', 'assets/users/Photo265.jpg'),
(185, 'Aron Borbelj', '807478702', 'assets/users/Photo266.jpg'),
(186, 'Katalin Babijanovic', '1700289932', 'assets/users/Photo267.jpg'),
(187, 'Vesna Dimitrijevic', '88507840', 'assets/users/Photo268.jpg'),
(188, 'Branimir Vukovic', '1171264638', 'assets/users/Photo269.jpg'),
(189, 'Dusan Miocinovic', '688510286', 'assets/users/Photo27.jpg'),
(190, 'Karolina Toldi', '1171658686', 'assets/users/Photo270.jpg'),
(191, 'Svetlana Hankic', '1700299324', 'assets/users/Photo271.jpg'),
(192, 'Miomir Ikic', '1888462474', 'assets/users/Photo272.jpg'),
(193, 'Caba Pastor', '78399392', 'assets/users/Photo273.jpg'),
(194, 'Robert Horvat', '1171282750', 'assets/users/Photo274.jpg'),
(195, 'Erika Cvik', '3123255034', 'assets/users/Photo275.jpg'),
(196, 'Klara Hodos', '1697539196', 'assets/users/Photo276.jpg'),
(197, 'Dragan Lulic', '1171633134', 'assets/users/Photo277.jpg'),
(198, 'Danilo Koruga', '4221676606', 'assets/users/Photo278.jpg'),
(199, 'Elizabeta Paci', '3462297388', 'assets/users/Photo279.jpg'),
(200, 'Nenad Kolar', '804756590', 'assets/users/Photo28.jpg'),
(201, 'Gabrijela Horvat Akastai', '1912575514', 'assets/users/Photo280.jpg'),
(202, 'Zeljko Vojnic Tunic', '809036910', 'assets/users/Photo281.jpg'),
(203, 'Marina Gabric', '2053580538', 'assets/users/Photo282.jpg'),
(204, 'Nikola Vojnic Purcar', '2059138154', 'assets/users/Photo283.jpg'),
(205, 'Iboja Pinter', '1700363436', 'assets/users/Photo285.jpg'),
(206, 'Antun Vereb', '1700132556', 'assets/users/Photo286.jpg'),
(207, 'Jasna Vereb', '1697576044', 'assets/users/Photo288.jpg'),
(208, 'Julijana Veres', '181054031', 'assets/users/Photo289.jpg'),
(209, 'Monika Flajsman', '852044753', 'assets/users/Photo29.jpg'),
(210, 'Nenad Romic', '804632606', 'assets/users/Photo290.jpg'),
(211, 'Snezana Djuric', '2050457914', 'assets/users/Photo291.jpg'),
(212, 'Atila Kalamica', '1912570842', 'assets/users/Photo292.jpg'),
(213, 'Ivana Mackovic', '3296166858', 'assets/users/Photo293.jpg'),
(214, 'Branko Kovacic', '3123462522', 'assets/users/Photo294.jpg'),
(215, 'Predrag Preradovic', '688598718', 'assets/users/Photo295.jpg'),
(216, 'Anastazija Kekenj', '1171731198', 'assets/users/Photo296.jpg'),
(217, 'Rebeka Martonka', '850252762', 'assets/users/Photo297.jpg'),
(218, 'Krsto Kerlec', '182500525', 'assets/users/Photo298.jpg'),
(219, 'Jasna Miletic', '3220088932', 'assets/users/Photo299.jpg'),
(220, 'Eva Kisak', '1885938780', 'assets/users/Photo3.jpg'),
(221, 'Petar Kosanovic', '801015422', 'assets/users/Photo30.jpg'),
(222, 'Danijel Pal', '831011923', 'assets/users/Photo300.jpg'),
(223, 'Bela Kopilovic', '688386878', 'assets/users/Photo301.jpg'),
(224, 'Nikola Ilijin', '1171746158', 'assets/users/Photo302.jpg'),
(225, 'Elizabeta Korcoljas', '3123503322', 'assets/users/Photo303.jpg'),
(226, 'Milan Mihajlovic', '808916062', 'assets/users/Photo304.jpg'),
(227, 'Dragan Vojnic', '828310627', 'assets/users/Photo305.jpg'),
(228, 'Goran Pavlic', '2052614106', 'assets/users/Photo306.jpg'),
(229, 'Laura Juric', '688640302', 'assets/users/Photo307.jpg'),
(231, 'Biljana Sojic', '3326842330', 'assets/users/Photo310.jpg'),
(230, 'Vereb Jasna', '2862960084', 'assets/users/Photo309.jpg'),
(232, 'Ibolja Njilas', '3455229340', 'assets/users/Photo311.jpg'),
(233, 'Leposava Jezevic', '3294406602', 'assets/users/Photo312.jpg'),
(234, 'Caba Pastor', '2057116186', 'assets/users/Photo313.jpg'),
(235, 'Gabi Salata', '847760849', 'assets/users/Photo314.jpg'),
(236, 'Vesna Nimcevic Mamuzic', '864434481', 'assets/users/Photo315.jpg'),
(237, 'Snezana Sabo', '860238002', 'assets/users/Photo316.jpg'),
(238, 'Vladimir Vasic', '1697577196', 'assets/users/Photo317.jpg'),
(239, 'Bojana Curic', '2053688490', 'assets/users/Photo318.jpg'),
(240, 'Kajica Tomic', '3154669546', 'assets/users/Photo319.jpg'),
(241, 'Snezana Guganovic', '1171653982', 'assets/users/Photo32.jpg'),
(242, 'Mirko Gabric', '1700300060', 'assets/users/Photo320.jpg'),
(243, 'Boris Sifer', '1171726446', 'assets/users/Photo321.jpg'),
(244, 'Ivan Vidakovic', '3216334170', 'assets/users/Photo323.jpg'),
(245, 'Goran Andjelkovic', '690863406', 'assets/users/Photo324.jpg'),
(246, 'Caba Seres', '1171267550', 'assets/users/Photo325.jpg'),
(247, 'Biljana Bajic', '1902778778', 'assets/users/Photo326.jpg'),
(248, 'Ivica Vojnic', '1057136628', 'assets/users/Photo327.jpg'),
(249, 'Svetlana Bukvic', '3455099004', 'assets/users/Photo328.jpg'),
(250, 'Milorad Katancic', '804723566', 'assets/users/Photo329.jpg'),
(251, 'Verica Bedic', '841819089', 'assets/users/Photo33.jpg'),
(252, 'Jasmina Markovic', '1813930100', 'assets/users/Photo330.jpg'),
(253, 'Zorica Dulic', '3296296586', 'assets/users/Photo332.jpg'),
(254, 'Dragana Dobric', '662281950', 'assets/users/Photo333.jpg'),
(255, 'Ivan Piukovic', '73452996', 'assets/users/Photo334.jpg'),
(256, 'Ljubica Virag', '3187228794', 'assets/users/Photo335.jpg'),
(257, 'Zaklina Poljakovic', '72737700', 'assets/users/Photo336.jpg'),
(258, 'Zoltan Jenei', '662256062', 'assets/users/Photo337.jpg'),
(259, 'Vukasin Cecovic', '3296255050', 'assets/users/Photo338.jpg'),
(260, 'Ilona Soltes', '688744814', 'assets/users/Photo339.jpg'),
(261, 'Ljubica Selak', '3730550556', 'assets/users/Photo34.jpg'),
(262, 'Valerija Kaposta', '839754193', 'assets/users/Photo340.jpg'),
(263, 'Jasna Radulovic', '1700093500', 'assets/users/Photo341.jpg'),
(264, 'Ivan Skenderovic', '1057354212', 'assets/users/Photo342.jpg'),
(265, 'Zoran Nikolic', '32989089', 'assets/users/Photo343.jpg'),
(266, 'Arpad Hubai', '1171704110', 'assets/users/Photo344.jpg'),
(267, 'Robert Toldi', '1171892878', 'assets/users/Photo345.jpg'),
(268, 'Josip Loncarevic', '4271597422', 'assets/users/Photo346.jpg'),
(269, 'Igor Stoisavljevic', '807457342', 'assets/users/Photo347.jpg'),
(270, 'Senad Simic', '1278954', 'assets/users/Photo348.jpg'),
(271, 'Svetlana Bojanic Bogosavljev', '841459409', 'assets/users/Photo349.jpg'),
(272, 'Danijela Bogdanovic', '808388062', 'assets/users/Photo35.jpg'),
(273, 'Sinisa Zarkovic', '1171726574', 'assets/users/Photo350.jpg'),
(274, 'Nenad Kopunovic', '2052660634', 'assets/users/Photo351.jpg'),
(275, 'Ruza Tikvicki', '3294442122', 'assets/users/Photo352.jpg'),
(276, 'Dragan Selimovic', '3296101930', 'assets/users/Photo353.jpg'),
(277, 'Tamara Banjanin', '688476846', 'assets/users/Photo355.jpg'),
(278, 'Ildiko Sugyi', '3216660586', 'assets/users/Photo356.jpg'),
(279, 'Caba Urban', '3296101754', 'assets/users/Photo357.jpg'),
(280, 'Robert Sakmanj', '3454385612', 'assets/users/Photo358.jpg'),
(281, 'Sladjan Skenderovic', '3326396650', 'assets/users/Photo359.jpg'),
(282, 'Marija Urosevic', '780213572', 'assets/users/Photo36.jpg'),
(283, 'Ferenc Losonci', '803182030', 'assets/users/Photo360.jpg'),
(284, 'Vesna Lukic', '2687515476', 'assets/users/Photo361.jpg'),
(285, 'Dejan Markovic', '804686270', 'assets/users/Photo362.jpg'),
(286, 'Marina Milunovic', '3456562396', 'assets/users/Photo363.jpg'),
(287, 'Stipan Stantic', '3462296556', 'assets/users/Photo364.jpg'),
(288, 'Zoran Pejic', '3296098506', 'assets/users/Photo365.jpg'),
(289, 'Svjetlana Tomasev', '805111534', 'assets/users/Photo366.jpg'),
(290, 'Marija Novak', '661993134', 'assets/users/Photo367.jpg'),
(291, 'Vojin Vidovic', '1057304212', 'assets/users/Photo368.jpg'),
(292, 'Antun Irsevic', '804537406', 'assets/users/Photo369.jpg'),
(293, 'Zoltan Virag', '3730426140', 'assets/users/Photo37.jpg'),
(294, 'Marija Subotic', '1169797182', 'assets/users/Photo370.jpg'),
(295, 'Nikola Vujkovic Lamic', '804720030', 'assets/users/Photo371.jpg'),
(296, 'Milenko Vasic', '688433326', 'assets/users/Photo372.jpg'),
(297, 'Sanja Rastovac', '688712558', 'assets/users/Photo375.jpg'),
(298, 'Sanela Virag', '1171714910', 'assets/users/'),
(299, 'Snezana Tot', '807374446', 'assets/users/'),
(300, 'Nebojsa Tumbas', '3730578540', 'assets/users/'),
(301, 'Danijela Kovacevic', '3728610492', 'assets/users/'),
(302, 'Mirsad Husar', '1171718622', 'assets/users/Photo38.jpg'),
(303, 'Aleksandar Radulovic', '3326411098', 'assets/users/'),
(304, 'Jelena Tot', '3833160030', 'assets/users/'),
(305, 'Tilka Vasic', '1700289740', 'assets/users/Photo382.jpg'),
(306, 'Zorana Medic', '1697654748', 'assets/users/'),
(307, 'Vanesa Vanka', '688646238', 'assets/users/'),
(308, 'Jasmina Nikolic', '72372356', 'assets/users/Photo386.jpg'),
(309, 'Antun Simic', '688556446', 'assets/users/Photo387.jpg'),
(310, 'Dejana Stojanovic', '2688328148', 'assets/users/Photo388.jpg'),
(311, 'Antun Irsevic', '91536870', 'assets/users/'),
(312, 'Eva Fejes', '1700301932', 'assets/users/Photo39.jpg'),
(313, 'Aleksandar Miletic', '2863595076', 'assets/users/'),
(314, 'Milorad Stojanovic', '661940814', 'assets/users/'),
(315, 'Ognjen Zdrnja', '3626715294', 'assets/users/'),
(316, 'Dvornic Boris', '3730580444', 'assets/users/'),
(317, 'Kristina Covcic', '1902707338', 'assets/users/Ph395.jpg'),
(318, 'Igor Momcilov', '840044513', 'assets/users/'),
(319, 'Karolina Golic', '91528675', 'assets/users/'),
(320, 'Silvia Barat', '808687790', 'assets/users/'),
(321, 'Marko Rapaic', '1171756222', 'assets/users/'),
(322, 'Mihajlo Tabori', '2050576058', 'assets/users/Photo4.jpg'),
(323, 'Marica Tucic', '3294203018', 'assets/users/Photo40.jpg'),
(324, 'Milos Jelic', '1171743294', 'assets/users/Photo400.jpg'),
(325, 'Zeljko Srednik', '1906975386', 'assets/users/'),
(326, 'Damir Ivic', '3709171198', 'assets/users/'),
(327, 'Vanka Vanesa', '82728416', 'assets/users/'),
(328, 'Manuela Calic', '106701993', 'assets/users/Photo404.jpg'),
(329, 'Marina Pecaric', '1171747182', 'assets/users/'),
(330, 'Slavica Facol', '3295732154', 'assets/users/'),
(331, 'Agnes Boldizar', '1700133500', 'assets/users/'),
(332, 'Davor Baclija', '615641437', 'assets/users/'),
(333, 'Marina Prokic', '3123283018', 'assets/users/Photo409.jpg'),
(334, 'Andrea Kosojevic', '2688056916', 'assets/users/Photo41.jpg'),
(335, 'Erika Kopunovic', '1171635822', 'assets/users/'),
(336, 'Ivana Ivic', '1697499036', 'assets/users/'),
(337, 'Tamara Salata', '266510311', 'assets/users/Photo412.jpg'),
(338, 'Kermeci Jozef', '3833152510', 'assets/users/'),
(339, 'Tomislav Horvacki', '1171734222', 'assets/users/Photo414.jpg'),
(340, 'Danijela Lazic', '3294806730', 'assets/users/'),
(341, 'Branislav Grgic', '1700045260', 'assets/users/Photo416.jpg'),
(342, 'Matuska Caba', '1700304124', 'assets/users/Photo417.jpg'),
(343, 'Mackovic Vedran', '3294402442', 'assets/users/Photo418.jpg'),
(344, 'Juric Kornelija', '1171746606', 'assets/users/Photo419.jpg'),
(345, 'Vesna Radujko', '662072190', 'assets/users/Photo42.jpg'),
(346, 'Nisevic Jelena', '1700292252', 'assets/users/'),
(347, 'Vanka Vanesa', '1171752734', 'assets/users/'),
(348, 'Nada Lukin', '3833407934', 'assets/users/'),
(349, 'Pardic Tatjana', '3728511004', 'assets/users/'),
(350, 'Penzes Leontina', '72411748', 'assets/users/'),
(351, 'Gvero Mirjana', '1815110564', 'assets/users/'),
(352, 'Kolar Marinko', '1171643566', 'assets/users/'),
(353, 'Dulic Zorica', '2863294804', 'assets/users/'),
(354, 'Hajnalka File', '3460043852', 'assets/users/'),
(355, 'Edit Horvat', '3728479964', 'assets/users/'),
(356, 'Zaklina Molnar', '870651842', 'assets/users/Photo43.jpg'),
(357, 'Milorad Stojanovic', '2050307786', 'assets/users/'),
(358, 'Antun Vereb', '3729626828', 'assets/users/'),
(359, 'Dejan Suknovic', '3731786060', 'assets/users/'),
(360, 'Zvonko Skenderovic', '3731504076', 'assets/users/'),
(361, 'Danijela Lazic', '3462329884', 'assets/users/'),
(362, 'Dragan Selimovic', '14916768', 'assets/users/'),
(363, 'Anica Gurinovic', '250398151', 'assets/users/'),
(364, 'Mihajlo Vasilic', '3460041772', 'assets/users/'),
(365, 'Goran Lekic', '3048074218', 'assets/users/'),
(366, 'Tibor Farago', '3024588716', 'assets/users/'),
(367, 'Silvija Der', '3296290490', 'assets/users/Photo44.jpg'),
(368, 'Magdolna Gros', '606361437', 'assets/users/'),
(369, 'Aleksandar Andjelkovic', '1700328780', 'assets/users/'),
(370, 'Igor Mehinagic', '91500002', 'assets/users/'),
(371, 'Branislav Grbic', '1171747630', 'assets/users/'),
(372, 'Aleksandar Savevski', '1171890990', 'assets/users/'),
(373, 'Monika Vincer', '159568098', 'assets/users/'),
(374, 'Suncica Bjelobrk', '1171895342', 'assets/users/'),
(375, 'Sonja Nimcevic', '1171892462', 'assets/users/'),
(376, 'Igor Nemet', '1171890350', 'assets/users/'),
(377, 'Dragana Miljkovic', '114066596', 'assets/users/'),
(378, 'Zoran Milojica', '688540638', 'assets/users/Photo45.jpg'),
(379, 'Aleksandra Jakovcevic', '1171753758', 'assets/users/'),
(380, 'Bojan Banjanin', '809051646', 'assets/users/Photo46.jpg'),
(381, 'Sanja Ostrogonac', '1171247726', 'assets/users/Photo47.jpg'),
(382, 'Dragan Baralic', '91549152', 'assets/users/Photo48.jpg'),
(383, 'Monika Siveri', '3456763420', 'assets/users/Photo49.jpg'),
(384, 'Izabella Nemeth', '3280016442', 'assets/users/Photo5.jpg'),
(385, 'Jelena Pejic Tukuljac', '2052644682', 'assets/users/Photo50.jpg'),
(386, 'Melinda Madjar', '2053597578', 'assets/users/Photo51.jpg'),
(387, 'Djordje Medic', '2050895738', 'assets/users/Photo52.jpg'),
(388, 'Boris Dimitrijevic', '3294573146', 'assets/users/Photo53.jpg'),
(389, 'Mirjana Janecic', '2250736794', 'assets/users/Photo54.jpg'),
(390, 'Atila Gergelj', '2862736692', 'assets/users/Photo55.jpg'),
(391, 'Hajnalka Vojnic', '3295931418', 'assets/users/Photo56.jpg'),
(392, 'Marija Balaz', '808715342', 'assets/users/Photo57.jpg'),
(393, 'Darko Suknovic', '688527230', 'assets/users/Photo58.jpg'),
(394, 'Stevica Zukan', '2050573402', 'assets/users/Photo59.jpg'),
(395, 'Sasa Stojkov', '3730569052', 'assets/users/Photo6.jpg'),
(396, 'Drita Dzambazoski', '1700171484', 'assets/users/Photo60.jpg'),
(397, 'Dusan Stevanov', '3024589788', 'assets/users/Photo61.jpg'),
(398, 'Silvia Muratovic', '3296402362', 'assets/users/Photo62.jpg'),
(399, 'Laslo Beckei', '1909307818', 'assets/users/Photo63.jpg'),
(400, 'Justina Horvat', '851835690', 'assets/users/Photo64.jpg'),
(401, 'Zdravko Sivic', '180028067', 'assets/users/Photo65.jpg'),
(402, 'Branka Cvetic', '1700362412', 'assets/users/Photo66.jpg'),
(403, 'Lidija Maletic', '1700226956', 'assets/users/Photo67.jpg'),
(404, 'Sanela Pinter', '690777214', 'assets/users/Photo68.jpg'),
(405, 'Ivica Sekeres', '688705870', 'assets/users/Photo69.jpg'),
(406, 'Sanja Vince', '688601038', 'assets/users/Photo7.jpg'),
(407, 'Zlatko Sitaric', '688557886', 'assets/users/Photo70.jpg'),
(408, 'Aleksandar Milodanovic', '1700222268', 'assets/users/Photo71.jpg'),
(409, 'Istvan Tot', '1902799514', 'assets/users/Photo72.jpg'),
(410, 'Jozef Kabai', '2930395125', 'assets/users/Photo73.jpg'),
(411, 'Krsto Kerlec', '804805502', 'assets/users/Photo74.jpg'),
(412, 'Marija Temunovic', '3295737290', 'assets/users/Photo75.jpg'),
(413, 'Dejan Bukvic', '1700266236', 'assets/users/Photo76.jpg'),
(414, 'Ivica Temunovic', '1697588076', 'assets/users/Photo77.jpg'),
(420, 'Mario Tot', '1907700810', 'assets/users/Photo84.jpg'),
(415, 'Rastko Randjic', '608129885', 'assets/users/Photo79.jpg'),
(416, 'Laslo Lacko', '662143806', 'assets/users/Photo8.jpg'),
(417, 'Zvonko Prcic', '3024147884', 'assets/users/Photo80.jpg'),
(418, 'Ervin Gubi', '1700031900', 'assets/users/Photo81.jpg'),
(419, 'Radmila Zmaher', '3731280876', 'assets/users/Photo82.jpg'),
(421, 'Andrea Engi Varga', '3295930106', 'assets/users/Photo85.jpg'),
(436, 'Dusanka Raguz', '11', 'assets/users/Photo322.jpg'),
(422, 'Ruza Pelesic', '662056750', 'assets/users/Photo87.jpg'),
(423, 'Silvia Tot', '688387150', 'assets/users/Photo88.jpg'),
(424, 'Marinko Jaramazovic', '741979289', 'assets/users/Photo89.jpg'),
(425, 'Ildiko Kovac', '3463371932', 'assets/users/Photo9.jpg'),
(426, 'Zolt Adam', '1902804634', 'assets/users/Photo90.jpg'),
(427, 'Lazar Lulic', '688633006', 'assets/users/Photo91.jpg'),
(428, 'Magdolna Deak', '1700333612', 'assets/users/Photo92.jpg'),
(429, 'Snezana Vojnovic', '3123341674', 'assets/users/Photo93.jpg'),
(430, 'Novak Romek', '1053418900', 'assets/users/Photo94.jpg'),
(431, 'Mirjana Tikvicki', '808961726', 'assets/users/Photo95.jpg'),
(432, 'Bela Kadar', '688683822', 'assets/users/Photo96.jpg'),
(433, 'Damir Lesic', '2687745508', 'assets/users/Photo97.jpg'),
(434, 'Nada Bundalo', '2055940890', 'assets/users/Photo98.jpg'),
(435, 'Barakovic Suzana', '780160724', 'assets/users/Photo99.jpg');

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
(105, 'pohovani sir', 'topli', '2022-05-03', 'assets/images/pohovani sir.jpg'),
(106, 'pasteta', 'hladan', '2022-05-04', 'assets/images/pasteta.png'),
(107, 'burek', 'topli', '2022-05-04', 'assets/images/burek.jpg'),
(108, 'haringa', 'hladan', '2022-05-04', 'assets/images/haringa.png'),
(109, 'pasteta', 'hladan', '2022-05-06', 'assets/images/pasteta.png'),
(110, 'spagete', 'topli', '2022-05-06', ''),
(111, 'slanina', 'hladan', '2022-05-09', 'assets/images/slanina.jpg'),
(112, 'spagete', 'topli', '2022-05-09', '');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `broj_kartice` (`broj_kartice`) USING HASH;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `obroci`
--
ALTER TABLE `obroci`
  MODIFY `id_obroka` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `vrsta_jela`
--
ALTER TABLE `vrsta_jela`
  MODIFY `id_vrsta_jela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
