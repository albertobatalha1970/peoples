-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Jan-2024 às 11:51
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `peoples`
--
CREATE DATABASE IF NOT EXISTS `peoples` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `peoples`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=238 ;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id`, `nome`, `foto`) VALUES
(135, 'giovana', 'albuns/menina.jpg'),
(133, 'rildo', 'albuns/mina1.jpg'),
(134, 'giovana', 'albuns/images (6).jpg'),
(131, 'rildo', 'albuns/images (16).jpg'),
(132, 'rildo', 'albuns/mina7.jpg'),
(130, 'rildo', 'albuns/images (1).jpg'),
(237, 'Elma Alessandra', 'albuns/608272-900x895-1.jpeg'),
(129, 'regina', 'albuns/images (27).jpg'),
(225, 'bira', 'albuns/bitmap.jpg'),
(224, 'bira', 'albuns/1675dd5.jpg'),
(231, 'Elma Alessandra', 'albuns/images (1).jpg'),
(124, 'flania', 'albuns/images (22).jpg'),
(123, 'flania', 'albuns/menina.jpg'),
(122, 'regina', 'albuns/img8.jpg'),
(120, 'regina', 'albuns/images (5).jpg'),
(121, 'regina', 'albuns/images (4).jpg'),
(119, 'simone', 'albuns/download (2).jpg'),
(118, 'simone', 'albuns/download (1).jpg'),
(117, 'simone', 'albuns/h2.jpg'),
(116, 'simone', 'albuns/hm6.jpg'),
(115, 'natalia', 'albuns/images (14).jpg'),
(114, 'natalia', 'albuns/download.jpg'),
(113, 'natalia', 'albuns/images (4).jpg'),
(112, 'natalia', 'albuns/images (5).jpg'),
(222, 'zeca', 'albuns/tablet.jpg'),
(110, 'anita', 'albuns/CAM00262.jpg'),
(109, 'anita', 'albuns/CAM00273.jpg'),
(108, 'anita', 'albuns/CAM00261.jpg'),
(107, 'aline', 'albuns/images (39).jpg'),
(106, 'aline', 'albuns/images (34).jpg'),
(105, 'aline', 'albuns/images (31).jpg'),
(104, 'aline', 'albuns/images (29).jpg'),
(103, 'aline', 'albuns/images (8).jpg'),
(102, 'aline', 'albuns/images (5).jpg'),
(101, 'aline', 'albuns/download (3).jpg'),
(100, 'aline', 'albuns/amigo-e-igual-parafuso.jpg'),
(99, 'giovana', 'albuns/mina3.jpg'),
(98, 'giovana', 'albuns/images1.jpg'),
(97, 'giovana', 'albuns/images (3).jpg'),
(96, 'natalia', 'albuns/mina1.jpg'),
(95, 'natalia', 'albuns/mina9.jpg'),
(94, 'natalia', 'albuns/mina2.jpg'),
(93, 'natalia', 'albuns/images.jpg'),
(92, 'cesar', 'albuns/mina9.jpg'),
(91, 'cesar', 'albuns/mina8.jpg'),
(90, 'cesar', 'albuns/images (1).jpg'),
(89, 'cesar', 'albuns/images1.jpg'),
(197, 'albertobatalha', 'albuns/IMG-20150319-WA0007.jpg'),
(196, 'encostada', 'albuns/IMG-20150316-WA0000.jpg'),
(136, 'nirvana', 'albuns/images (1).jpg'),
(198, 'albertobatalha', 'albuns/CAM00262.jpg'),
(138, 'nirvana', 'albuns/images (24).jpg'),
(139, 'nirvana', 'albuns/images (37).jpg'),
(199, 'albertobatalha', 'albuns/CAM00270.jpg'),
(143, 'valeria', 'albuns/hm.jpg'),
(221, 'zeca', 'albuns/celular.jpg'),
(145, 'valeria', 'albuns/hm6.jpg'),
(146, 'valeria', 'albuns/download.jpg'),
(147, 'albertobatalha', 'albuns/download (2).jpg'),
(148, 'programador', 'albuns/images (1).jpg'),
(149, 'programador', 'albuns/images (20).jpg'),
(150, 'programador', 'albuns/images (14).jpg'),
(151, '', 'albuns/download (1).jpg'),
(203, 'albertobatalha', 'albuns/CAM00278.jpg'),
(202, 'albertobatalha', 'albuns/CAM00277.jpg'),
(201, 'albertobatalha', 'albuns/CAM00263.jpg'),
(200, 'albertobatalha', 'albuns/CAM00265.jpg'),
(156, 'anita', 'albuns/00002.jpg'),
(157, 'anita', 'albuns/00004.jpg'),
(158, 'anita', 'albuns/00005.jpg'),
(159, 'anita', 'albuns/00006.jpg'),
(160, 'anita', 'albuns/00008.jpg'),
(161, 'anita', 'albuns/00009.jpg'),
(162, 'anita', 'albuns/digitalizar0009.jpg'),
(163, 'anita', 'albuns/karla.jpg'),
(164, 'anita', 'albuns/mina.jpg'),
(165, 'anita', 'albuns/moça.jpg'),
(166, 'severino', 'albuns/00024.jpg'),
(167, 'severino', 'albuns/00002.jpg'),
(168, 'severino', 'albuns/00001.jpg'),
(169, 'severino', 'albuns/00011.jpg'),
(170, 'severino', 'albuns/00013.jpg'),
(171, 'severino', 'albuns/00014.jpg'),
(172, 'severino', 'albuns/00019.jpg'),
(173, 'severino', 'albuns/00015.jpg'),
(174, 'severino', 'albuns/00016.jpg'),
(175, 'severino', 'albuns/00018.jpg'),
(176, 'severino', 'albuns/00012.jpg'),
(177, 'severino', 'albuns/00006.jpg'),
(178, 'severino', 'albuns/00006.jpg'),
(179, 'severino', 'albuns/00009.jpg'),
(180, 'severino', 'albuns/00003.jpg'),
(181, 'severino', 'albuns/00004.jpg'),
(182, 'severino', 'albuns/00009.jpg'),
(183, 'severino', 'albuns/00010.jpg'),
(184, 'severino', 'albuns/00013.jpg'),
(215, 'fabi', 'albuns/9ae2a4831a3ca5e95285cf0421c776d2.jpg'),
(216, 'fabi', 'albuns/1675dd5.jpg'),
(217, 'marcos', 'albuns/9ae2a4831a3ca5e95285cf0421c776d2.jpg'),
(219, 'zeca', 'albuns/9ae2a4831a3ca5e95285cf0421c776d2.jpg'),
(220, 'zeca', 'albuns/1675dd5.jpg'),
(214, 'encostada', 'albuns/Fabiana_e_Fabio0001[1].jpg'),
(212, 'encostada', 'albuns/1.jpg'),
(213, 'encostada', 'albuns/IMG-20150929-WA0010.jpg'),
(207, 'albertobatalha', 'albuns/CAM00285.jpg'),
(208, 'valeria', 'albuns/menina.jpg'),
(205, 'albertobatalha', 'albuns/CAM00280.jpg'),
(206, 'albertobatalha', 'albuns/CAM00287.jpg'),
(204, 'albertobatalha', 'albuns/CAM00279.jpg'),
(227, 'bira', 'albuns/mulheres-lindas-mundo.jpg'),
(228, 'bira', 'albuns/59f44e533a3a20fa513d7268d4e08cc3.jpg'),
(229, 'bira', 'albuns/mulheres-lindas-do-brasil1537.jpg'),
(230, 'bira', 'albuns/608272-900x895-1.jpeg'),
(233, 'Elma Alessandra', 'albuns/transferir (4).jpg'),
(234, 'Elma Alessandra', 'albuns/maxresdefault.jpg'),
(236, 'Elma Alessandra', 'albuns/mulheres-lindas-do-brasil1537.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE IF NOT EXISTS `amigos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234 ;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id`, `nome`, `url`, `foto`) VALUES
(70, 'flania', '/q.php?nome=natalia', ''),
(69, 'flania', '/q.php?nome=simone', ''),
(68, 'flania', '/q.php?nome=valeria', ''),
(67, 'flania', '/q.php?nome=rildo', ''),
(171, 'albertobatalha', '/q.php?nome=regina', ''),
(62, 'giovana', '/q.php?nome=lana', ''),
(63, 'flavio', '/q.php?nome=natalia', ''),
(58, 'giovana', '/q.php?nome=simone', ''),
(112, 'giovana', '/q.php?nome=nirvana', ''),
(64, 'flania', '/q.php?nome=encostada', ''),
(53, 'natalia', '/q.php?nome=simone', ''),
(52, 'natalia', '/q.php?nome=cesar', ''),
(51, 'natalia', '/q.php?nome=regina', ''),
(65, 'flania', '/q.php?nome=regina', ''),
(55, 'natalia', '/q.php?nome=encostada', ''),
(131, 'programador', '/q.php?nome=natalia', ''),
(172, 'albertobatalha', '/q.php?nome=Nayara', ''),
(48, 'regina', '/q.php?nome=simone', ''),
(47, 'regina', '/q.php?nome=encostada', ''),
(46, 'regina', '/q.php?nome=rildo', ''),
(45, 'simone', '/q.php?nome=rildo', ''),
(44, 'simone', '/q.php?nome=encostada', ''),
(61, 'encostada', '/q.php?nome=natalia', ''),
(71, 'flania', '/q.php?nome=Giovana', ''),
(75, 'aline', '/q.php?nome=simone', ''),
(73, 'flania', '/q.php?nome=natalia', ''),
(74, 'flania', '/q.php?nome=Flavio', ''),
(76, 'aline', '/q.php?nome=encostada', ''),
(77, 'aline', '/q.php?nome=cesar', ''),
(78, 'anita', '/q.php?nome=Aline', ''),
(79, 'lana', '/q.php?nome=encostada', ''),
(80, 'lana', '/q.php?nome=natalia', ''),
(82, 'cesar', '/q.php?nome=rildo', ''),
(83, 'cesar', '/q.php?nome=encostada', ''),
(84, 'cesar', '/q.php?nome=valeria', ''),
(85, 'cesar', '/q.php?nome=nirvana', ''),
(86, 'cesar', '/q.php?nome=Nayara', ''),
(87, 'cesar', '/q.php?nome=simone', ''),
(88, 'simone', '/q.php?nome=cesar', ''),
(89, 'simone', '/q.php?nome=natalia', ''),
(90, 'simone', '/q.php?nome=lana', ''),
(91, 'simone', '/q.php?nome=Flania', ''),
(92, 'simone', '/q.php?nome=Aline', ''),
(93, 'aline', '/q.php?nome=Anita', ''),
(94, 'nayara', '/q.php?nome=encostada', ''),
(95, 'nayara', '/q.php?nome=regina', ''),
(96, 'nayara', '/q.php?nome=cesar', ''),
(97, 'nayara', '/q.php?nome=valeria', ''),
(98, 'nayara', '/q.php?nome=natalia', ''),
(99, 'nayara', '/q.php?nome=natalia', ''),
(100, 'regina', '/q.php?nome=natalia', ''),
(101, 'rildo', '/q.php?nome=encostada', ''),
(102, 'rildo', '/q.php?nome=natalia', ''),
(105, 'rildo', '/q.php?nome=cesar', ''),
(104, 'rildo', '/q.php?nome=regina', ''),
(106, 'rildo', '/q.php?nome=nirvana', ''),
(107, 'rildo', '/q.php?nome=valeria', ''),
(108, 'valeria', '/q.php?nome=encostada', ''),
(109, 'valeria', '/q.php?nome=natalia', ''),
(110, 'valeria', '/q.php?nome=cesar', ''),
(111, 'valeria', '/q.php?nome=nirvana', ''),
(113, 'giovana', '/q.php?nome=natalia', ''),
(116, 'giovana', '/q.php?nome=rildo', ''),
(115, 'giovana', '/q.php?nome=encostada', ''),
(159, 'nirvana', '/q.php?nome=programador', ''),
(152, 'severino', '/q.php?nome=lana', ''),
(120, 'fernanda', '/q.php?nome=encostada', ''),
(121, 'fernanda', '/q.php?nome=natalia', ''),
(122, 'fernanda', '/q.php?nome=cesar', ''),
(123, 'fernanda', '/q.php?nome=rildo', ''),
(124, 'fernanda', '/q.php?nome=nirvana', ''),
(125, 'regina', '/q.php?nome=Flavio', ''),
(162, 'encostada', '/q.php?nome=valeria', ''),
(161, 'encostada', '/q.php?nome=lana', ''),
(132, 'programador', '/q.php?nome=cesar', ''),
(133, 'programador', '/q.php?nome=valeria', ''),
(134, 'programador', '/q.php?nome=encostada', ''),
(135, 'programador', '/q.php?nome=regina', ''),
(136, 'programador', '/q.php?nome=rildo', ''),
(137, 'programador', '/q.php?nome=nirvana', ''),
(139, 'programador', '/q.php?nome=Nayara', ''),
(163, 'valeria', '/q.php?nome=Nayara', ''),
(169, 'flania', '/q.php?nome=cesar', ''),
(167, 'pedromelo', '/q.php?nome=Flania', ''),
(168, 'pedromelo', '/q.php?nome=valeria', ''),
(166, 'pedromelo', '/q.php?nome=simone', ''),
(164, 'albertobatalha', '/q.php?nome=encostada', ''),
(174, 'albertobatalha', '/q.php?nome=nirvana', ''),
(150, 'fernandinha', '/q.php?nome=Anita', ''),
(151, '698dc19d489c4e4db73e28a713eab07b', '/q.php?nome=rildo', ''),
(153, 'severino', '/q.php?nome=valeria', ''),
(154, 'severino', '/q.php?nome=Aline', ''),
(155, 'encostada', '/q.php?nome=regina', ''),
(158, 'nirvana', '/q.php?nome=encostada', ''),
(160, 'nirvana', '/q.php?nome=valeria', ''),
(173, 'albertobatalha', '/q.php?nome=simone', ''),
(175, 'encostada', '/q.php?nome=cesar', ''),
(176, 'encostada', '/q.php?nome=encostada', ''),
(178, 'albertobatalha', '/q.php?nome=cesar', ''),
(179, 'neto', '/q.php?nome=cesar', ''),
(180, 'neto', '/q.php?nome=natalia', ''),
(181, 'neto', '/q.php?nome=encostada', ''),
(182, 'encostada', '/q.php?nome=Fernandinha', ''),
(183, 'encostada', '/q.php?nome=Aline', ''),
(184, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=encostada', ''),
(185, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=regina', ''),
(186, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=albertobatalha', ''),
(187, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=albertobatalha', ''),
(188, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=albertobatalha', ''),
(189, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nbira', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=nirvana', ''),
(190, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nlana', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=cesar', ''),
(191, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nlana', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=valeria', ''),
(192, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nlana', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=regina', ''),
(193, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nlana', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=simone', ''),
(194, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>11</b><br />\r\nlana', '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootmaisamigo.php</b> on line <b>10</b><br />\r\n/q.php?nome=Nayara', ''),
(195, 'lana', '/q.php?nome=cesar', ''),
(220, 'bira', '/q.php?nome=encostada', ''),
(211, 'zeca', '/q.php?nome=Leticia', ''),
(200, 'fabi', '/q.php?nome=Aline', ''),
(201, 'fabi', '/q.php?nome=encostada', ''),
(202, 'marcos', '/q.php?nome=fabi', ''),
(203, 'marcos', '/q.php?nome=encostada', ''),
(221, 'bira', '/q.php?nome=natalia', ''),
(205, 'marcos', '/q.php?nome=natalia', ''),
(222, 'Elma Alessandra', '/q.php?nome=bira', ''),
(223, 'Elma Alessandra', '/q.php?nome=natalia', ''),
(209, 'marcos', '/q.php?nome=neto', ''),
(227, 'Elma Alessandra', '/q.php?nome=Anita', ''),
(225, 'Elma Alessandra', '/q.php?nome=encostada', ''),
(226, 'Elma Alessandra', '/q.php?nome=Aline', ''),
(228, 'Elma Alessandra', '/q.php?nome=rildo', ''),
(230, 'Elma Alessandra', '/q.php?nome=nirvana', ''),
(231, 'Elma Alessandra', '/q.php?nome=programador', ''),
(232, 'Elma Alessandra', '/q.php?nome=regina', ''),
(233, 'Elma Alessandra', '/q.php?nome=lana', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `audiencia`
--

CREATE TABLE IF NOT EXISTS `audiencia` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `visitou` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=535 ;

--
-- Extraindo dados da tabela `audiencia`
--

INSERT INTO `audiencia` (`id`, `nome`, `visitou`) VALUES
(523, 'bira', 'encostada'),
(522, 'bira', 'encostada'),
(521, 'bira', 'encostada'),
(520, 'bira', 'encostada'),
(519, 'bira', 'encostada'),
(518, '', 'encostada'),
(517, '', 'encostada'),
(516, '', 'encostada'),
(515, '', 'encostada'),
(514, 'bira', 'encostada'),
(513, 'bira', 'regina'),
(512, 'bira', 'natalia'),
(511, 'bira', 'regina'),
(510, 'bira', 'encostada'),
(509, 'simone', 'cesar'),
(508, 'simone', 'rildo'),
(507, 'simone', 'lana'),
(506, 'simone', 'encostada'),
(505, 'simone', 'Aline'),
(504, 'albertobatalha', 'encostada'),
(503, 'albertobatalha', 'cesar'),
(502, 'albertobatalha', 'cesar'),
(501, 'albertobatalha', 'cesar'),
(500, 'encostada', 'Aline'),
(499, 'encostada', 'Aline'),
(498, 'encostada', 'Aline'),
(497, 'encostada', 'Aline'),
(496, 'encostada', 'Fernandinha'),
(495, 'encostada', 'natalia'),
(494, 'encostada', 'natalia'),
(493, 'encostada', 'natalia'),
(492, 'encostada', 'natalia'),
(491, 'encostada', 'albertobatalha'),
(490, 'encostada', 'albertobatalha'),
(489, 'albertobatalha', 'simone'),
(488, 'albertobatalha', 'encostada'),
(487, 'albertobatalha', 'neto'),
(486, 'neto', 'encostada'),
(485, 'neto', 'encostada'),
(484, 'neto', 'natalia'),
(483, 'neto', 'valeria'),
(482, 'neto', 'cesar'),
(481, 'neto', 'cesar'),
(480, 'albertobatalha', 'simone'),
(479, 'albertobatalha', 'encostada'),
(478, 'albertobatalha', 'encostada'),
(477, 'albertobatalha', 'cesar'),
(476, 'albertobatalha', 'cesar'),
(475, 'albertobatalha', 'Nayara'),
(474, 'albertobatalha', 'simone'),
(473, 'albertobatalha', 'nirvana'),
(472, 'encostada', 'cesar'),
(471, 'encostada', 'natalia'),
(470, 'lana', 'cesar'),
(469, 'encostada', 'cesar'),
(468, 'encostada', 'encostada'),
(467, 'encostada', 'cesar'),
(466, 'encostada', 'cesar'),
(465, 'encostada', 'cesar'),
(464, 'encostada', 'cesar'),
(463, 'encostada', 'cesar'),
(462, 'encostada', 'cesar'),
(461, 'encostada', 'encostada'),
(460, 'encostada', 'encostada'),
(459, 'encostada', 'encostada'),
(458, 'encostada', 'encostada'),
(457, 'lana', 'encostada'),
(456, 'encostada', 'encostada'),
(455, 'encostada', 'lana'),
(454, 'encostada', 'cesar'),
(453, 'albertobatalha', 'encostada'),
(452, 'albertobatalha', 'albertobatalha'),
(451, 'albertobatalha', 'encostada'),
(450, 'albertobatalha', 'encostada'),
(449, 'albertobatalha', 'encostada'),
(445, 'encostada', 'nirvana'),
(444, 'encostada', 'valeria'),
(443, 'encostada', 'encostada'),
(442, 'encostada', 'lana'),
(441, 'encostada', 'cesar'),
(440, 'encostada', 'cesar'),
(439, 'encostada', 'lana'),
(438, 'encostada', 'cesar'),
(437, 'encostada', 'lana'),
(436, 'encostada', 'regina'),
(435, 'encostada', 'valeria'),
(434, 'encostada', 'valeria'),
(433, 'encostada', 'regina'),
(432, 'encostada', 'natalia'),
(431, 'encostada', 'natalia'),
(524, 'bira', 'encostada'),
(525, 'bira', 'encostada'),
(526, 'bira', 'encostada'),
(527, 'bira', 'encostada'),
(528, 'bira', 'encostada'),
(529, 'bira', 'encostada'),
(530, 'lana', ''),
(531, 'lana', ''),
(532, '', 'regina'),
(533, '', 'regina'),
(534, '', 'regina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `background`
--

CREATE TABLE IF NOT EXISTS `background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Extraindo dados da tabela `background`
--

INSERT INTO `background` (`id`, `nome`, `color`) VALUES
(1, 'Alberto', '#ff0000'),
(122, 'encostada', '#cc9'),
(105, 'regina', '#cc9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE IF NOT EXISTS `cadastros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fone` varchar(15) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `fone`, `senha`, `nome`, `apelido`) VALUES
(149, '35-999345567', 'mariazelia', 'albertobatalha', ''),
(146, '9999999', 'neto', 'neto', ''),
(139, '35-92334470', 'fernandinha', 'Fernandinha', ''),
(147, '35 9 3558 5915', 'bira', 'bira', ''),
(148, '992083760', 'fabi', 'fabi', ''),
(134, '92050231', 'programador', 'programador', ''),
(133, '35-9237-2673', 'mariazelia', 'albertobatalha', ''),
(131, '35-92334470', 'fernanda', 'Fernanda', ''),
(130, '35-92334470', 'leticia', 'Leticia', ''),
(0, '3531-2596', '', '', ''),
(128, '35 9233-4470', 'aline', 'Aline', ''),
(126, '3531-2596', 'flavio', 'Flavio', ''),
(127, '3531-2596', 'flania', 'Flania', ''),
(124, '3531-2596', 'nayara', 'Nayara', ''),
(123, '35 9233-4455', 'giovana', 'Giovana', ''),
(122, '3531-2596', 'nirvana', 'Nirvana', ''),
(121, '3531-2596', 'lana', 'Lana', ''),
(120, '3531-2596', 'valeria', 'Valeria', ''),
(119, '3531-2596', 'natalia', 'Natalia', ''),
(118, '3531-2596', 'Cesar', 'Cesar', ''),
(117, '35 8884-5687', 'regina', 'Regina', ''),
(114, '3531-2596', 'rildo', 'rildo', ''),
(116, '3531-2596', 'simone', 'Simone', ''),
(144, '3531-1234', 'encostada', 'encostada', ''),
(145, '35911111111', 'pedromelo', 'pedromelo', ''),
(143, '00000000', 'severino', 'Severino', ''),
(150, '333333', 'marcos', 'marcos', ''),
(151, '', 'zeca', 'zeca', ''),
(152, '35955648956', 'alexandro', 'alexandro', ''),
(153, 'alexandro', 'elma', 'Elma Alessandra', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadproduct`
--

CREATE TABLE IF NOT EXISTS `cadproduct` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nameproduto` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `cadproduct`
--

INSERT INTO `cadproduct` (`id`, `nome`, `nameproduto`, `preco`, `descricao`, `data`, `hora`, `image`) VALUES
(4, 'albertobatalha', 'Tv antiga', '120,00', 'tv antiga', '10 - 08 - 2015', '21:40:33', 'publicidade/tv1.jpg'),
(5, 'albertobatalha', 'Refrigerador', '800,00', 'Refrigerador', '10 - 08 - 2015', '21:41:53', 'publicidade/arcondicionado.jpg'),
(6, 'regina', 'Televisão', '50,00', 'Esta tv é de estima da família.', '10 - 08 - 2015', '23:11:05', 'publicidade/tv2.jpg'),
(7, 'regina', 'Ar condicionado', '90,00', 'Este ar condicionado está semi-novo. Era de minha mãe. Também estou desapegando. Quem se interessar, envie uma mensagem reservada.', '11 - 08 - 2015', '09:51:20', 'publicidade/arcondicionado.jpg'),
(8, 'albertobatalha', 'Unodata', '', 'Agora você tem um orgão de pesquisa para suprir suas necessidades.', '28 - 09 - 2015', '09:07:56', 'publicidade/unodata-portal.jpg'),
(9, 'albertobatalha', '', '', '', '28 - 09 - 2015', '09:27:01', 'publicidade/uol3.jpg'),
(11, 'neto', 'Carro', '2.00', 'Vendo este produto ai', '29 - 03 - 2016', '21:06:26', 'publicidade/IMG-20151002-WA0003.jpg'),
(15, 'bira', 'Vendo Fiat Uno', '8000,00', 'Por motivo de viagem, vendo meu querido fiat, Interessados entrar em contato inbox ou pelo fone.', '25 - 08 - 2017', '18:59:20', 'publicidade/transferir (1).jpg'),
(14, 'bira', 'Box Tv Smart Tv', '100,00', 'Box Tv Smart Tv Android Netflix Youtube Mini Pc Hdmi USB Sd\r\n\r\n', '25 - 08 - 2017', '16:30:03', 'publicidade/transferir.jpg'),
(17, 'cesar', 'Vendo Fiat Uno', '8000,00', 'tem desconto!', '25 - 08 - 2017', '19:58:13', 'publicidade/transferir (1).jpg'),
(18, 'Elma Alessandra', 'Vendo Fiat Uno', '8000,00', 'Gente, preciso vender meu carrão!', '25 - 08 - 2017', '20:35:11', 'publicidade/transferir (1).jpg'),
(19, 'Elma Alessandra', 'Box Tv Smart Tv', '50,00', 'Vendo Box Smart Android', '25 - 08 - 2017', '20:35:56', 'publicidade/transferir.jpg'),
(20, 'Elma Alessandra', 'Tablet', '80,00', 'Vendo por um precinho super-camarada!', '25 - 08 - 2017', '20:37:00', 'publicidade/tablet.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `capa`
--

CREATE TABLE IF NOT EXISTS `capa` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `imagecapa` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `capa`
--

INSERT INTO `capa` (`id`, `nome`, `imagecapa`) VALUES
(15, 'regina', 'capa/regina.jpg'),
(16, 'regina', 'capa/regina.jpg'),
(17, 'regina', 'capa/regina.jpg'),
(18, 'regina', 'capa/regina.jpg'),
(19, 'nirvana', 'capa/nirvana.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentados`
--

CREATE TABLE IF NOT EXISTS `comentados` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `comentou` varchar(255) NOT NULL,
  `imgcomentou` varchar(255) NOT NULL,
  `comentado` varchar(255) NOT NULL,
  `imgcomentado` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Extraindo dados da tabela `comentados`
--

INSERT INTO `comentados` (`id`, `comentou`, `imgcomentou`, `comentado`, `imgcomentado`, `comentario`, `data`, `hora`) VALUES
(42, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'Bom, dia programador. Posso te enviar um video?', '10:02:41', '06 - 08 - 2015'),
(41, 'programador', 'perfil/programador.jpg', '', 'perfil/.jpg', 'Alberto, eu to muito bem.', '09:57:03', '06 - 08 - 2015'),
(40, 'albertobatalha', 'perfil/albertobatalha.jpg', 'programador', 'perfil/programador.jpg', 'olá', '08:36:06', '06 - 08 - 2015'),
(39, 'programador', 'perfil/programador.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Bom dia, Alberto!', '08:25:04', '06 - 08 - 2015'),
(38, 'cesar', 'perfil/cesar.jpg', 'valeria', 'perfil/valeria.jpg', 'Valeria, vc é o máximo! Uma pessoa especial.', '01:04:31', '05 - 08 - 2015'),
(37, 'nayara', 'perfil/nayara.jpg', 'cesar', 'perfil/cesar.jpg', 'Recebi sua mensagem, Cesar.', '00:54:38', '05 - 08 - 2015'),
(36, 'cesar', 'perfil/cesar.jpg', 'Nayara', 'perfil/Nayara.jpg', 'Olá, Nayara!', '00:53:35', '05 - 08 - 2015'),
(35, 'rildo', 'perfil/rildo.jpg', 'cesar', 'perfil/cesar.jpg', 'olá cesar!', '00:51:30', '05 - 08 - 2015'),
(34, 'simone', 'perfil/simone.jpg', 'rildo', 'perfil/rildo.jpg', 'olá Cesar.', '00:48:26', '05 - 08 - 2015'),
(31, 'aline', 'perfil/aline.jpg', 'valeria', 'perfil/valeria.jpg', 'oi Valeria.', '23:35:54', '04 - 08 - 2015'),
(32, 'aline', 'perfil/aline.jpg', 'valeria', 'perfil/valeria.jpg', 'Tudo bem?', '23:36:47', '04 - 08 - 2015'),
(33, 'flania', 'perfil/flania.jpg', 'encostada', 'perfil/encostada.jpg', 'E amiga, encostada...', '23:37:29', '04 - 08 - 2015'),
(43, 'programador', 'perfil/programador.jpg', '', 'perfil/.jpg', 'oi', '10:04:09', '06 - 08 - 2015'),
(44, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', '', '10:04:34', '06 - 08 - 2015'),
(45, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'tudo bem?', '10:04:42', '06 - 08 - 2015'),
(46, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'eita', '10:06:43', '06 - 08 - 2015'),
(47, 'albertobatalha', 'perfil/albertobatalha.jpg', 'programador', 'perfil/programador.jpg', 'Tudo bem amigo programador?', '10:13:45', '06 - 08 - 2015'),
(48, 'programador', 'perfil/programador.jpg', '', 'perfil/.jpg', 'tudo, Alberto', '10:16:01', '06 - 08 - 2015'),
(49, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'Bom dia Amigao', '10:17:17', '06 - 08 - 2015'),
(50, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', '', '10:17:35', '06 - 08 - 2015'),
(51, 'programador', 'perfil/programador.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Eita amigo Alberto', '10:18:41', '06 - 08 - 2015'),
(52, 'albertobatalha', 'perfil/albertobatalha.jpg', 'programador', 'perfil/programador.jpg', 'Teste', '10:26:02', '06 - 08 - 2015'),
(53, 'programador', 'perfil/programador.jpg', '', 'perfil/.jpg', 'teste tambem', '10:26:20', '06 - 08 - 2015'),
(54, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'diz ai, programador', '10:26:49', '06 - 08 - 2015'),
(55, 'programador', 'perfil/programador.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'tttt', '10:33:50', '06 - 08 - 2015'),
(56, 'albertobatalha', 'perfil/albertobatalha.jpg', '', 'perfil/.jpg', 'ooooo', '10:34:03', '06 - 08 - 2015'),
(57, 'albertobatalha', 'perfil/albertobatalha.jpg', 'programador', 'perfil/programador.jpg', 'Legal', '10:35:22', '06 - 08 - 2015'),
(58, 'albertobatalha', 'perfil/albertobatalha.jpg', 'programador', 'perfil/programador.jpg', 'Amigo Programador, este site tá ficando o máximo!', '22:52:34', '10 - 08 - 2015'),
(59, 'programador', 'perfil/programador.jpg', 'regina', 'perfil/regina.jpg', 'Olá, amiga Regina. Vc é muito gostosa!', '23:01:05', '10 - 08 - 2015'),
(60, 'anita', 'perfil/anita.jpg', 'Aline', 'perfil/Aline.jpg', 'Olá, Aline!', '23:46:03', '13 - 08 - 2015'),
(61, 'aline', 'perfil/aline.jpg', 'Anita', 'perfil/Anita.jpg', 'Olá, Anita!', '23:47:01', '13 - 08 - 2015'),
(62, 'encostada', 'perfil/encostada.jpg', 'Anita', 'perfil/Anita.jpg', 'Olá!', '23:48:48', '13 - 08 - 2015'),
(63, 'albertobatalha', 'perfil/albertobatalha.jpg', 'Anita', 'perfil/Anita.jpg', 'tudo bem Anita?', '23:50:07', '13 - 08 - 2015'),
(64, 'encostada', 'perfil/encostada.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Legal, hein!', '11:59:00', '26 - 09 - 2015'),
(65, 'albertobatalha', 'perfil/albertobatalha.jpg', 'nirvana', 'perfil/nirvana.jpg', 'Olá, Nirvana. Vc é linda!', '00:06:37', '27 - 09 - 2015'),
(66, 'nirvana', 'perfil/nirvana.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'oi', '00:49:51', '27 - 09 - 2015'),
(67, 'albertobatalha', 'perfil/albertobatalha.jpg', 'Anita', 'perfil/Anita.jpg', 'Anita, sinto muito a sua falta.', '11:41:24', '28 - 09 - 2015'),
(68, 'anita', 'perfil/anita.jpg', 'encostada', 'perfil/encostada.jpg', 'oi', '11:42:43', '28 - 09 - 2015'),
(69, 'albertobatalha', 'perfil/albertobatalha.jpg', 'valeria', 'perfil/valeria.jpg', 'Olá Alberto', '15:02:15', '28 - 09 - 2015'),
(70, 'albertobatalha', 'perfil/albertobatalha.jpg', 'valeria', 'perfil/valeria.jpg', 'Olá, Valeria!', '15:02:39', '28 - 09 - 2015'),
(71, 'valeria', 'perfil/valeria.jpg', 'Nayara', 'perfil/Nayara.jpg', 'Nayara, amanhã dá uma passadinha por aqui para conversarmos, ok?', '23:03:59', '28 - 09 - 2015'),
(72, 'nayara', 'perfil/nayara.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Alberto, vc precisa horar mais!', '23:11:00', '28 - 09 - 2015'),
(73, 'albertobatalha', 'perfil/albertobatalha.jpg', 'Anita', 'perfil/Anita.jpg', 'Filhinha, eu te amo muito!', '23:28:00', '28 - 09 - 2015'),
(74, 'albertobatalha', 'perfil/albertobatalha.jpg', 'Anita', 'perfil/Anita.jpg', 'Fabiana, você é a mulher de minha vida!', '00:05:24', '29 - 09 - 2015'),
(75, 'pedromelo', 'perfil/pedromelo.jpg', 'lana', 'perfil/lana.jpg', 'Lana, tô afim de vc! Liga pra mim.', '19:49:50', '29 - 09 - 2015'),
(76, 'flania', 'perfil/flania.jpg', 'pedromelo', 'perfil/pedromelo.jpg', 'Olá, Pedro Mello...vc é um gatinho!', '21:15:33', '29 - 09 - 2015'),
(77, 'albertobatalha', 'perfil/albertobatalha.jpg', 'Flania', 'perfil/Flania.jpg', 'oi', '22:41:20', '29 - 09 - 2015'),
(78, 'flania', 'perfil/flania.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'oi', '22:42:25', '29 - 09 - 2015'),
(79, 'albertobatalha', 'perfil/albertobatalha.jpg', 'encostada', 'perfil/encostada.jpg', 'Que linda vc é, Encostada!', '00:21:32', '04 - 10 - 2015'),
(80, 'flania', 'perfil/flania.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Alberto, vc tá com cara de quem não dormiu ontem!', '00:42:34', '05 - 10 - 2015'),
(81, 'flania', 'perfil/flania.jpg', 'natalia', 'perfil/natalia.jpg', 'oi', '23:44:35', '11 - 10 - 2015'),
(82, 'albertobatalha', 'perfil/albertobatalha.jpg', 'encostada', 'perfil/encostada.jpg', 'Olá, amiga. Quero comprar o celular. Qual o preço?', '21:34:47', '03 - 11 - 2015'),
(83, 'encostada', 'perfil/encostada.jpg', 'albertobatalha', 'perfil/albertobatalha.jpg', 'Teste em Março de 2016', '23:19:53', '29 - 03 - 2016'),
(84, 'fabi', 'perfil/fabi.jpg', 'bira', 'perfil/bira.jpg', 'ola bira, meu nome é Fabi', '13:18:34', '18 - 08 - 2017'),
(85, 'bira', 'perfil/bira.jpg', 'Fernandinha', 'perfil/Fernandinha.jpg', 'Despacito é uma palavra do idioma espanhol e significa literalmente "devagarinho", em português. ... Este termo ganhou destaque mundial em 2017 por causa da música "Despacito", autoria do cantor porto-riquenho Luis Fonsi com a participação do rapper Daddy', '13:20:43', '18 - 08 - 2017'),
(86, 'bira', 'perfil/bira.jpg', 'fabi', 'perfil/fabi.jpg', 'Despacito é uma palavra do idioma espanhol e significa literalmente "devagarinho", em português. ... Este termo ganhou destaque mundial em 2017 por causa da música "Despacito", autoria do cantor porto-riquenho Luis Fonsi com a participação do rapper Daddy', '13:21:38', '18 - 08 - 2017'),
(87, 'marcos', 'perfil/marcos.jpg', 'fabi', 'perfil/fabi.jpg', 'Olá, amiga!', '13:36:23', '18 - 08 - 2017'),
(88, 'Elma Alessandra', 'perfil/Elma Alessandra.jpg', 'bira', 'perfil/bira.jpg', 'Olá, Bira, gostaria de falar contigo pelo zap. Manda uma mensagem pra mim, ok?', '20:27:46', '25 - 08 - 2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentar`
--

CREATE TABLE IF NOT EXISTS `comentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `mandante` varchar(128) NOT NULL,
  `coments` varchar(255) NOT NULL,
  `data` varchar(64) NOT NULL,
  `hora` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

--
-- Extraindo dados da tabela `comentar`
--

INSERT INTO `comentar` (`id`, `nome`, `mandante`, `coments`, `data`, `hora`) VALUES
(184, 'aline', '', 'Bom dia a todos', '29 - 07 - 2015', '09:58:44'),
(196, 'flavio', '', 'Minha vida é um mar de ilusão', '03 - 08 - 2015', '09:13:02'),
(185, 'encostada', '', 'Bom dia todos!', '29 - 07 - 2015', '09:59:28'),
(164, 'lana', '', 'Ola. me chamo Lana Guimarães. Estou aqui para conhecer novos amigos!', '28 - 07 - 2015', '09:38:51'),
(163, 'giovana', '', 'Aqui é tudo de bom!', '28 - 07 - 2015', '09:27:32'),
(167, 'natalia', '', 'Tô passando por pra deixar um abraço!', '28 - 07 - 2015', '09:51:16'),
(191, 'anita', '', 'Me chamo, Anita do show das poderosas', '31 - 07 - 2015', '12:09:13'),
(158, 'cesar', '', 'Agora, vamos testar a variavel data!', '28 - 07 - 2015', ''),
(186, 'nayara', '', 'Que ótimo! este site é maravilhoso.', '29 - 07 - 2015', '10:30:45'),
(159, 'cesar', '', 'Deu certo, sim. A inserção da data na mensagem, obteve sucesso.', '28 - 07 - 2015', ''),
(160, 'cesar', '', 'Agora vou testar a inserção da hora na hora do envio da mensagem.', '28 - 07 - 2015', '08:43:32'),
(161, 'cesar', '', 'Yes! hora inserida com sucesso!', '28 - 07 - 2015', '08:45:02'),
(162, 'cesar', '', 'Esta rede social tá ficando nota dez!', '28 - 07 - 2015', '09:12:35'),
(165, 'lana', '', 'Achei maravilhoso este espaço, onde podemos compartilhar nossas emoções e nossos sentimentos.', '28 - 07 - 2015', '09:40:12'),
(166, 'lana', '', 'Vou ficar muito tempo, por aqui.', '28 - 07 - 2015', '09:41:11'),
(168, 'natalia', '', 'Ontem cheguei de uma viagem do nordeste. Depois vejam as fotos da viagem no meu álbum.', '28 - 07 - 2015', '09:52:36'),
(171, 'natalia', '', 'Tô passando por pra deixar um abraço!', '28 - 07 - 2015', '10:22:01'),
(172, 'natalia', '', 'Apesar de ser um espaço para vendas, também podemos fazer novas amizades! Amei.', '28 - 07 - 2015', '10:35:08'),
(173, 'natalia', '', 'Por falar nisso, tenho algumas coisas que preciso desapegar. Tenho três celulares. Pra quê tanto celular, né? Vou postar brevemente as fotos dele em minha vitrine. Aguardem!!', '28 - 07 - 2015', '10:37:44'),
(174, 'natalia', '', 'O meu irmão também tem um perfil aqui no Peoples!', '28 - 07 - 2015', '10:39:14'),
(175, 'simone', '', 'Vou fazer minha primeira postagem no Peoples!', '28 - 07 - 2015', '10:57:28'),
(176, 'simone', '', 'Me falaram maravilhas desta rede social. Meus amigos da Faculdade de falaram que muita gente tá migrando de outras para cá. Eu que não sou boba, já tô por aqui também!!!!!', '28 - 07 - 2015', '10:59:02'),
(177, 'simone', '', 'Doa em quem doer, mas este é meu pedaço!', '28 - 07 - 2015', '11:11:27'),
(178, 'simone', '', 'Vou convidar outras pessoas para participar do Peoples!', '28 - 07 - 2015', '11:12:10'),
(179, 'simone', '', 'Hoje eu tive vendo outros perfis aqui. Gostei muito do nível!', '28 - 07 - 2015', '11:22:27'),
(180, 'simone', '', 'Me falaram maravilhas desta rede social. Meus amigos da Faculdade de falaram que muita gente tá migrando de outras para cá. Eu que não sou boba, já tô por aqui também!!!!!', '28 - 07 - 2015', '11:25:13'),
(197, 'fernanda', '', 'Boa tarde, pessoal. Este é meu perfil de negócios, mas estou a disposição para fazermos também, novas amizades!', '03 - 08 - 2015', '11:04:29'),
(187, 'regina', '', 'Gente, aqui é meu cantinho! é onde eu me divirto!', '29 - 07 - 2015', '10:56:32'),
(188, 'regina', '', 'Felicidade não existe, o que existe na vida são momentos felizes', '29 - 07 - 2015', '10:57:35'),
(189, 'regina', '', 'Só tenho que falar a verdade. Preciso fazer novas amizades.', '30 - 07 - 2015', '12:59:57'),
(190, 'regina', '', 'Bom dia, geeente!', '30 - 07 - 2015', '11:10:09'),
(192, 'giovana', '', 'Aqui é tudo de bom!', '31 - 07 - 2015', '01:03:44'),
(193, 'rildo', '', 'Boa noite.', '01 - 08 - 2015', '12:02:14'),
(194, 'valeria', '', 'oi', '01 - 08 - 2015', '12:06:39'),
(237, 'flania', '', 'Amo de mais este portal', '05 - 10 - 2015', '23:41:16'),
(199, 'fernanda', '', 'Felicidade não existe, o que existe na vida são momentos felizes', '03 - 08 - 2015', '11:46:16'),
(200, 'encostada', '', 'Só tenho que falar a verdade. Preciso fazer novas amizades.', '03 - 08 - 2015', '11:49:49'),
(201, 'nirvana', '', 'Olá. Meu nome é Nirvana!', '04 - 08 - 2015', '22:41:08'),
(224, 'valeria', '', 'Meu nome é Valéria!', '28 - 09 - 2015', '15:05:13'),
(203, 'albertobatalha', '', 'Boa noite. Já tô indo dormir. ', '05 - 08 - 2015', '01:15:36'),
(204, 'albertobatalha', '', 'Finalizando mais uma noite programando em php. Posso dizer que foi uma noite muito proveitosa!', '05 - 08 - 2015', '01:16:36'),
(205, 'albertobatalha', '', 'Abração a todos!', '05 - 08 - 2015', '01:16:57'),
(206, 'albertobatalha', '', 'Bom dia!', '05 - 08 - 2015', '09:25:47'),
(209, 'programador', '', 'Isto é bom demais', '06 - 08 - 2015', '10:40:27'),
(211, 'albertobatalha', '', 'Hoje é segunda-feira, dia de descansar um pouco, e vou ter que participar de um treinamento de brigadas contra incendio da empresa Ipiranga!', '10 - 08 - 2015', '11:27:03'),
(210, 'programador', '', 'Felicidade não existe, o que existe na vida são momentos felizes', '08 - 08 - 2015', '00:07:47'),
(212, 'albertobatalha', '', 'Gente, estou trabalhando nas páginas de anúncios de cada usuário.', '10 - 08 - 2015', '20:29:19'),
(213, 'albertobatalha', '', 'Ontem foi uma maravilha, o trenamento dado pela empresa em que trabalho. Muito proveitoso, mesmo!', '11 - 08 - 2015', '23:20:38'),
(214, 'albertobatalha', '', 'Cheguei as 22 horas e 15, do trabalho.', '13 - 08 - 2015', '23:36:17'),
(215, 'anita', '', 'Acabamos de chegar. Fomos levar a Clara e a Lalá na escola.Aproveitamos e fizemos um passeio.', '18 - 08 - 2015', '15:37:05'),
(216, 'severino', '', 'Oi!', '19 - 09 - 2015', '09:50:44'),
(217, 'severino', '', 'Sinto muito prazer em ter construido esta rede!', '19 - 09 - 2015', '09:52:13'),
(218, 'severino', '', 'Vale adiantado:200\r\nbrumar:100\r\ngasolina:74\r\nvale:50\r\nvale:40\r\ngasolina:15\r\ncasa:394\r\ncarro:600\r\noutros:25', '19 - 09 - 2015', '10:20:27'),
(219, 'encostada', '', 'Uau!!!!!!!!', '26 - 09 - 2015', '09:36:27'),
(220, 'encostada', '', 'Maravilha!', '26 - 09 - 2015', '11:48:18'),
(221, 'albertobatalha', '', 'Ontem foi uma maravilha, o trenamento dado pela empresa em que trabalho. Muito proveitoso, mesmo!', '26 - 09 - 2015', '11:15:34'),
(222, 'albertobatalha', '', 'Nossa! trabalhei bastante esta noite, neste site. Desde as 22 e 50 que tô programando!', '27 - 09 - 2015', '01:26:22'),
(223, 'albertobatalha', '', 'Preciso dar uma paradinha, volto a noite!', '27 - 09 - 2015', '10:16:45'),
(225, 'nayara', '', 'Uau! Chegou mais uma mensagem inbox!', '28 - 09 - 2015', '23:08:04'),
(226, 'nayara', '', 'Ou seja; depoimentos...kkkkkkkk', '28 - 09 - 2015', '23:08:25'),
(227, 'nayara', '', 'Uau! Chegou mais uma mensagem inbox!', '28 - 09 - 2015', '11:08:42'),
(228, 'nayara', '', 'Ou seja; depoimentos...kkkkkkkk', '28 - 09 - 2015', '11:08:53'),
(229, 'albertobatalha', '', 'Apresentando o projeto', '29 - 09 - 2015', '13:16:04'),
(240, 'flania', '', 'Olá!', '10 - 10 - 2015', '09:18:12'),
(238, 'flania', '', 'Só me traz alegrias', '05 - 10 - 2015', '23:41:31'),
(234, 'albertobatalha', '', 'Que legal, tá ficando!', '03 - 10 - 2015', '00:48:09'),
(235, 'albertobatalha', '', 'Tirar uma soneca, que amanhã é mais um dia de trabalho! Boa noite a todos. Chega de programar por hoje.', '04 - 10 - 2015', '00:21:25'),
(239, 'flania', '', 'Tá de parabens!', '05 - 10 - 2015', '23:41:47'),
(241, 'albertobatalha', '', 'Hoje acrescentei mais uma funcionalidade muito conhecida nas redes socias: ao entrar em seu perfil, o usuário fica sabendo, quem e quantas pessoas visitaram seu perfil.', '12 - 10 - 2015', '01:00:40'),
(242, 'albertobatalha', '', 'Procurei deixar que o sistema mostre apenas 14 ocorrências para não tomar muito espaço na página!', '12 - 10 - 2015', '01:06:46'),
(244, 'encostada', '', 'Preciso vender um celular. Quem se interessar, favor mandar mensagem privativa!', '03 - 11 - 2015', '21:33:36'),
(245, 'encostada', '', 'Maravilha!', '29 - 03 - 2016', '20:25:48'),
(246, 'albertobatalha', '', 'Hoje, volto a programar.', '29 - 03 - 2016', '20:31:46'),
(247, 'neto', '', 'Bom dia!!!!!!', '29 - 03 - 2016', '20:57:21'),
(248, 'neto', '', 'Hoje o Alberto voltou a trabalhar com programação!!!!!', '29 - 03 - 2016', '20:58:00'),
(255, '', '', 'Teste de msg', '17 - 08 - 2017', '12:10:20'),
(271, 'marcos', '', 'Despacito é uma palavra do idioma espanhol e significa literalmente "devagarinho", em português. ... Este termo ganhou destaque mundial em 2017 por causa da música "Despacito", autoria do cantor porto-riquenho Luis Fonsi com a participação do rapper Daddy', '18 - 08 - 2017', '13:33:18'),
(256, '', '', 'Teste de msg', '17 - 08 - 2017', '12:11:08'),
(257, '', '', 'Teste de msg', '17 - 08 - 2017', '12:11:58'),
(258, '', '', 'bbbbbb', '17 - 08 - 2017', '12:12:44'),
(259, '', '', 'bbbbbb', '17 - 08 - 2017', '12:14:20'),
(260, '', '', 'bbbbbb', '17 - 08 - 2017', '12:14:39'),
(270, 'fabi', '', 'oi', '18 - 08 - 2017', '13:12:32'),
(263, 'lana', '', 'Ola. me chamo Lana Guimarães. Estou aqui para conhecer novos amigos!', '17 - 08 - 2017', '01:01:22'),
(267, 'bira', '', 'Olá, esta é uma mensagem teste!', '18 - 08 - 2017', '10:42:24'),
(272, 'marcos', '', 'O termo retórica deriva do latim rhetor&#301;ca embora a sua origem mais remota nos remeta para a língua grega. Trata-se da capacidade de facultar à linguagem.', '18 - 08 - 2017', '13:34:21'),
(273, 'marcos', '', 'Significado de introspectivo. O que é introspectivo: Pessoa retraida, que na maioria das vezes, fecha-se em seu mundo, deixando de interagir com o ambiente.', '18 - 08 - 2017', '13:35:42'),
(274, 'bira', '', 'Esta rede social foi criada por Alberto Batalha, desenvolvedor web auto-didata.', '25 - 08 - 2017', '12:11:29'),
(275, 'Elma Alessandra', '', 'Olá, esta é minha primeira mensagem na rede!', '25 - 08 - 2017', '20:25:19'),
(276, 'Elma Alessandra', '', 'Espero compartilhar muitas idéias com vcs e vcs comigo, ok?', '25 - 08 - 2017', '20:26:05'),
(277, 'Elma Alessandra', '', 'Vamos continuar lado a lado nesta caminhada aqui no peoples!', '25 - 08 - 2017', '20:26:48'),
(278, 'Elma Alessandra', '', 'oi', '', ''),
(280, 'bira', '', 'oi', '2023-09-23', '09:49:05'),
(281, 'encostada', '', 'Vc notou que a última mensagem foi enviada em 2016?', '2023-09-23', '10:29:39'),
(282, 'bira', '', 'Bom dia.\r\n', '2024-01-31', '11:06:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE IF NOT EXISTS `cores` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cor` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=825 ;

--
-- Extraindo dados da tabela `online`
--

INSERT INTO `online` (`id`, `url`, `nome`) VALUES
(756, '/q.php?nome=simone', 'simone'),
(757, '/q.php?nome=simone', 'simone'),
(758, '/q.php?nome=simone', 'simone'),
(759, '/q.php?nome=simone', 'simone'),
(755, '/q.php?nome=simone', 'simone'),
(754, '/q.php?nome=simone', 'simone'),
(249, '/q.php?nome=flavio', 'flavio'),
(821, '/q.php?nome=Elma Alessandra', 'Elma Alessandra'),
(800, '/q.php?nome=zeca', 'zeca'),
(822, '/q.php?nome=bira', 'bira'),
(823, '/q.php?nome=bira', 'bira'),
(824, '/q.php?nome=bira', 'bira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=445 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `foto`) VALUES
(288, 'neto', 'perfil/neto.jpg.'),
(308, 'albertobatalha', 'perfil/albertobatalha.jpg.'),
(276, 'programador', 'perfil/programador.jpg.'),
(291, 'neto', 'perfil/neto.jpg'),
(295, 'bira', 'perfil/bira.jpg.'),
(287, 'pedromelo', 'perfil/pedromelo.jpg.'),
(273, 'Fernanda', 'perfil/Fernanda.jpg.'),
(271, 'Anita', 'perfil/Anita.jpg.'),
(272, 'Leticia', 'perfil/Leticia.jpg.'),
(270, 'Aline', 'perfil/Aline.jpg.'),
(265, 'Giovana', 'perfil/Giovana.jpg.'),
(268, 'Flavio', 'perfil/Flavio.jpg.'),
(259, 'valeria', 'perfil/valeria.jpg'),
(255, 'natalia', 'perfil/natalia.jpg'),
(286, 'encostada', 'perfil/encostada.jpg.'),
(269, 'Flania', 'perfil/Flania.jpg.'),
(266, 'Nayara', 'perfil/Nayara.jpg.'),
(237, 'simone', 'perfil/simone.jpg'),
(244, 'cesar', 'perfil/cesar.jpg'),
(240, 'regina', 'perfil/regina.jpg'),
(264, 'nirvana', 'perfil/nirvana.jpg'),
(261, 'lana', 'perfil/lana.jpg'),
(234, 'encostada', 'perfil/encostada.jpg'),
(231, 'rildo', 'perfil/rildo.jpg'),
(281, 'Fernandinha', 'perfil/Fernandinha.jpg.'),
(309, 'marcos', 'perfil/marcos.jpg.'),
(307, 'fabi', 'perfil/fabi.jpg'),
(412, 'alexandro', 'perfil/alexandro.jpg'),
(299, 'fabi', 'perfil/fabi.jpg.'),
(294, 'albertobatalha', 'perfil/albertobatalha.jpg'),
(285, 'Severino', 'perfil/Severino.jpg.'),
(310, 'marcos', 'perfil/marcos.jpg'),
(313, 'zeca', 'perfil/zeca.jpg.'),
(325, 'zeca', 'perfil/zeca.jpg'),
(411, 'alexandro', 'perfil/alexandro.jpg.'),
(413, 'Elma Alessandra', 'perfil/Elma Alessandra.jpg.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titular` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `get` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `titular`, `nome`, `email`, `endereco`, `bairro`, `cidade`, `estado`, `get`) VALUES
(9, 'natalia', 'Natalia Francisco de Oliveira', 'nataliafrancisco.22@gmail.com', 'Rua dos Italianos, 67', 'Jaragua', 'Tubarão', 'Santa catarina', ''),
(8, 'fernanda', 'Fernanda Ribeiro Gonsalves', 'fernanda.ribeiro@gmail.com', 'Rua Sergipe, 12', 'Veneziana', 'Itaim Paulista', 'São Paulo', 'encostada'),
(7, 'encostada', 'Mariana Encostada Vieira', 'mariana.viana@gmail.com', 'Rua Americana, 526', 'Feitosa', 'Maceió', 'Alagoas', 'regina'),
(10, 'anita', 'Fabiana Santos Azevedo', 'fabianasantosazevedo@gmail.com', 'Rua Dinamarca, 302', 'Jardim Europa', 'Sao Sebastiao do Paraiso', 'Minas Gerais', 'Aline'),
(11, 'anita', 'Fabiana Azevedo', '', '', '', '', '', ''),
(12, 'albertobatalha', 'Alberto Batalha', 'pcformate.albertobatalha@gmail.com', 'Rua Dinamarca, 302', 'Jardim Europa', 'São Sebastião do Paraiso', 'Minas Gerais', ''),
(13, 'pedromelo', 'Pedro Melo Rangel', 'pcformate.albertobatalha@gmail.com', 'Rua Dinamarca, 302', 'Jardim Europa', 'São Sebastião do Paraiso', 'Minas Gerais', ''),
(14, 'flania', 'Flania Pereira Matoso', '', '', '', '', '', ''),
(15, 'neto', 'severino dos santos', 'fabianasantosazevedo@gmail.com', 'rua dinamarca 302', 'Jardim europa', 'sao sebastiao do paraiso', 'MG', 'encostada'),
(16, '<br />\r\n<b>Notice</b>:  A session had already been started - ignoring session_start() in <b>C:peoples\rootsettings.php</b> on line <b>179</b><br />\r\nbira', 'Marcela      soares', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `nome`, `status`) VALUES
(5, 'encostada', 'Sou alagoana'),
(4, 'natalia', 'Sou deboxada'),
(6, 'encostada', 'oi'),
(7, 'encostada', 'Amigo, é pra todas as horas!'),
(8, 'encostada', 'Cheguei, chegandoo!'),
(9, 'giovana', 'Amo a natureza e tudo que nela há!'),
(10, 'giovana', 'Hoje está uma maravilha o sol!'),
(11, 'giovana', 'Sou assim mesmo'),
(12, 'flavio', 'Hello mundo!'),
(13, 'flania', 'Hoje não tô legal!'),
(14, 'aline', 'Me chamo Aline, só isso'),
(15, 'giovana', 'Amo a natureza e tudo que nela há!'),
(16, 'lana', 'Me amarreeeeeei'),
(17, 'simone', 'Simone: simples, mas prudente!'),
(18, 'nayara', 'Amiga dos amigos'),
(19, 'regina', 'Felicidade não existe, o que existe na vida são momentos felizes'),
(20, 'anita', 'Me chamo Anita'),
(21, 'valeria', 'Assanhada!'),
(22, 'encostada', 'oi'),
(23, 'encostada', 'Hoje não tô legal!'),
(24, 'encostada', 'Hoje está uma maravilha o sol!'),
(25, 'natalia', 'Hello mundo!'),
(26, 'albertobatalha', 'O senhor é meu Pastor, e nada me faltará.'),
(27, 'programador', 'Olá, sou programador!'),
(28, 'regina', 'Sou assim, é minha vida, o que é que vou fazer?'),
(29, 'pedromelo', 'O mais importante, é o verdadeiro amor!'),
(30, 'encostada', 'Que esta noite seja a mais maravilhosa de nossas vidas!'),
(31, 'bira', 'oi'),
(32, 'bira', 'Um cavalo morto, é um cavalo sem vida.'),
(33, 'alexandro', 'Brasil, um país de tolos!'),
(34, 'Elma Alessandra', 'Brasil, um país de tolos!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `video` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `nome`, `video`) VALUES
(2, 'aline', 'videos/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE IF NOT EXISTS `visitantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `visitante` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
