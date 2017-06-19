-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 19 Juin 2017 à 16:15
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_tipso`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE `administrator` (
  `idadmin` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL,
  `adminkey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`idadmin`, `firstname`, `lastname`, `mail`, `password`, `type`, `adminkey`) VALUES
(3, 'Andrew', 'Philippick', 'philippick.a@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'superuser'),
(4, '', '', '', '', 0, 'superuser2'),
(5, '', '', '', '', 0, 'SuperKey');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `lastname`, `firstname`, `mail`, `password`, `type`, `country`, `city`, `postcode`, `mobilenumber`, `adresse`) VALUES
(38, 'Philippick', 'Andrew', 'philippick.a@gmail.com', 'bc2fbc9d44f24849bc6922215a6be02fb6c2217e', 0, 'France', 'Paris', '75016', '0638197527', '6 rue de la cure'),
(44, 'Tipso', 'Tipso', 'lambda@gmail.com', '482fbdf656c5a7b9f6d7767c7ead2574b914aaff', 0, 'FR', 'Paris', '75006', '0638197527', '28 rue Notre Dame Des Champs');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `iddata` int(11) NOT NULL,
  `idsens` int(11) NOT NULL,
  `typetram` int(11) NOT NULL,
  `datanumber` int(11) NOT NULL,
  `datasent` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `data`
--

INSERT INTO `data` (`iddata`, `idsens`, `typetram`, `datanumber`, `datasent`, `time`, `date`) VALUES
(264, 41, 5, 0, 1, '14:38:38', '2017-02-07'),
(265, 0, 5, 0, 1, '14:38:38', '2017-02-07'),
(266, 45, 5, 0, 0, '14:38:38', '2017-02-07'),
(267, 0, 5, 0, 1, '14:38:40', '2017-02-07'),
(268, 0, 5, 0, 1, '14:38:40', '2017-02-07'),
(269, 41, 5, 0, 0, '14:38:40', '2017-02-07'),
(270, 45, 5, 0, 0, '14:38:40', '2017-02-07'),
(271, 41, 5, 0, 1, '14:39:10', '2017-02-07'),
(272, 0, 5, 0, 1, '14:39:10', '2017-02-07'),
(273, 45, 5, 0, 0, '14:39:10', '2017-02-07'),
(274, 0, 5, 0, 1, '14:39:11', '2017-02-07'),
(275, 0, 5, 0, 1, '14:39:11', '2017-02-07'),
(276, 41, 5, 0, 0, '14:39:11', '2017-02-07'),
(277, 45, 5, 0, 0, '14:39:11', '2017-02-07'),
(278, 41, 5, 0, 1, '14:39:13', '2017-02-07'),
(279, 0, 5, 0, 1, '14:39:13', '2017-02-07'),
(280, 45, 5, 0, 0, '14:39:13', '2017-02-07'),
(281, 0, 5, 0, 1, '14:39:15', '2017-02-07'),
(282, 0, 5, 0, 1, '14:39:15', '2017-02-07'),
(283, 41, 5, 0, 0, '14:39:15', '2017-02-07'),
(284, 45, 5, 0, 0, '14:39:15', '2017-02-07'),
(285, 41, 5, 0, 1, '14:39:16', '2017-02-07'),
(286, 0, 5, 0, 1, '14:39:16', '2017-02-07'),
(287, 45, 5, 0, 0, '14:39:16', '2017-02-07'),
(288, 0, 5, 0, 1, '14:39:17', '2017-02-07'),
(289, 0, 5, 0, 1, '14:39:17', '2017-02-07'),
(290, 41, 5, 0, 0, '14:39:17', '2017-02-07'),
(291, 45, 5, 0, 0, '14:39:17', '2017-02-07'),
(292, 41, 5, 0, 1, '14:39:18', '2017-02-07'),
(293, 0, 5, 0, 1, '14:39:18', '2017-02-07'),
(294, 45, 5, 0, 0, '14:39:18', '2017-02-07'),
(295, 63, 20, 0, 20, '16:54:50', '2017-02-08'),
(296, 63, 20, 0, 22, '22:32:36', '2017-02-08'),
(297, 63, 20, 0, 25, '18:52:47', '2017-02-08'),
(298, 63, 20, 0, 22, '17:27:16', '2017-02-08'),
(299, 63, 20, 0, 23, '05:02:55', '2017-02-08'),
(300, 63, 20, 0, 20, '09:41:37', '2017-02-08'),
(301, 63, 20, 0, 18, '22:40:15', '2017-02-08'),
(302, 63, 20, 0, 20, '16:30:40', '2017-02-08'),
(303, 63, 20, 0, 24, '10:59:45', '2017-02-08'),
(304, 63, 20, 0, 21, '19:09:24', '2017-02-08'),
(305, 63, 20, 0, 25, '17:16:27', '2017-02-08'),
(306, 63, 20, 0, 15, '10:52:48', '2017-02-08'),
(307, 63, 20, 0, 22, '04:45:20', '2017-02-08'),
(308, 63, 20, 0, 23, '20:55:55', '2017-02-08'),
(309, 63, 20, 0, 21, '20:41:25', '2017-02-08'),
(310, 63, 20, 0, 15, '18:33:43', '2017-02-08'),
(311, 63, 20, 0, 24, '04:19:40', '2017-02-08'),
(312, 63, 20, 0, 23, '09:01:11', '2017-02-08'),
(313, 63, 20, 0, 25, '02:55:07', '2017-02-08'),
(314, 63, 20, 0, 18, '09:33:21', '2017-02-08'),
(315, 63, 20, 0, 16, '03:42:45', '2017-02-08'),
(316, 63, 20, 0, 19, '01:25:12', '2017-02-08'),
(317, 63, 20, 0, 25, '05:57:35', '2017-02-08'),
(318, 63, 20, 0, 20, '01:51:45', '2017-02-08'),
(319, 63, 20, 0, 19, '20:54:36', '2017-02-09'),
(320, 63, 20, 0, 18, '16:07:59', '2017-02-09'),
(321, 63, 20, 0, 16, '23:48:48', '2017-02-09'),
(322, 63, 20, 0, 19, '13:28:54', '2017-02-09'),
(323, 63, 20, 0, 17, '01:55:10', '2017-02-09'),
(324, 63, 20, 0, 19, '23:09:31', '2017-02-09'),
(325, 63, 20, 0, 19, '02:28:45', '2017-02-09'),
(326, 63, 20, 0, 23, '14:24:48', '2017-02-09'),
(327, 63, 20, 0, 20, '12:44:31', '2017-02-09'),
(328, 63, 20, 0, 17, '16:29:47', '2017-02-09'),
(329, 63, 20, 0, 19, '07:57:28', '2017-02-09'),
(330, 63, 20, 0, 18, '22:39:27', '2017-02-09'),
(331, 63, 20, 0, 25, '23:22:37', '2017-02-09'),
(332, 63, 20, 0, 22, '14:08:48', '2017-02-09'),
(333, 63, 20, 0, 24, '10:14:56', '2017-02-09'),
(334, 63, 20, 0, 24, '08:12:51', '2017-02-09'),
(335, 63, 20, 0, 18, '03:49:26', '2017-02-09'),
(336, 63, 20, 0, 20, '10:06:35', '2017-02-09'),
(337, 63, 20, 0, 22, '03:21:08', '2017-02-09'),
(338, 63, 20, 0, 15, '13:05:00', '2017-02-09'),
(339, 63, 20, 0, 17, '20:05:02', '2017-02-09'),
(340, 63, 20, 0, 19, '22:23:06', '2017-02-09'),
(341, 63, 20, 0, 20, '05:16:06', '2017-02-09'),
(342, 63, 20, 0, 23, '07:15:53', '2017-02-09'),
(343, 11, 5, 0, 1, '15:07:24', '2017-06-12'),
(344, 0, 5, 0, 1, '15:07:24', '2017-06-12'),
(345, 0, 5, 0, 1, '15:07:24', '2017-06-12'),
(346, 30, 5, 0, 0, '15:07:24', '2017-06-12'),
(347, 49, 5, 0, 0, '15:07:24', '2017-06-12');

-- --------------------------------------------------------

--
-- Structure de la table `dataflow`
--

CREATE TABLE `dataflow` (
  `id` int(255) NOT NULL,
  `tramtype` int(255) NOT NULL,
  `groupe` varchar(255) NOT NULL,
  `tramstate` int(11) NOT NULL,
  `sensortype` varchar(255) NOT NULL,
  `sensornumber` varchar(255) NOT NULL,
  `sensorvalue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dataflow`
--

INSERT INTO `dataflow` (`id`, `tramtype`, `groupe`, `tramstate`, `sensortype`, `sensornumber`, `sensorvalue`, `date`, `time`) VALUES
(171, 1, '004D', 1, 'A', '01', '0001', '2017-06-12', '16:25:14'),
(172, 1, '004D', 1, 'A', '01', '0001', '2017-06-12', '16:25:14'),
(173, 1, '004D', 1, 'A', '01', '0001', '2017-06-12', '16:25:14'),
(174, 1, '004D', 1, 'A', '01', '0001', '2017-06-12', '16:25:14'),
(175, 1, '004D', 1, 'A', '01', '0001', '2017-06-12', '16:25:14');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idevent` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `idsens` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(15) NOT NULL,
  `room` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`idevent`, `idc`, `idsens`, `date`, `time`, `room`, `action`) VALUES
(33, 38, 49, '02/17/2017', '11:11', 'Chambre Andrew', '0'),
(35, 38, 49, '02/18/2017', '22:30', 'Chambre Andrew', '1'),
(40, 38, 9, '02/10/2017', '03:40', 'Salon jeux', '18°C'),
(41, 38, 30, '02/16/2017', '21:03', 'Entrée principale', '1'),
(42, 38, 30, '02/16/2017', '21:03', 'Entrée principale', '1'),
(43, 38, 11, '02/07/2017', '22:22', 'Bureau Victor', '0'),
(44, 44, 41, '02/08/2017', '20:30', 'Chambre Tipso', '0'),
(45, 38, 49, '06/13/2017', '21:40', 'Chambre Andrew', '0');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `idhome` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `dimension` int(11) NOT NULL,
  `roomnumb` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `home`
--

INSERT INTO `home` (`idhome`, `idc`, `dimension`, `roomnumb`, `address`, `postcode`, `city`, `country`) VALUES
(1, 30, 0, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `idm` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `subject` text NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idm`, `idc`, `subject`, `comment`, `date`) VALUES
(11, 39, 'synchronisation', 'je constate des temps de latences pour l\\''activation de mes volets.', '2017-02-05 12:46:36'),
(12, 39, 'synchronisation', ' je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets. je constate des temps de latences pour lactivation de mes volets.', '2017-02-05 13:03:42'),
(13, 44, ' Capteur Lumière', 'J\\''ai un problème ve cmon cpateur est-ce que vous pouvez envoyer quelqu\\''un s\\''il vous plait\\r\\n\\r\\nCordialement, \\r\\n\\r\\nLambda', '2017-02-07 13:40:03');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `idroom` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `idsens` int(11) NOT NULL,
  `iddom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`idroom`, `idc`, `roomname`, `type`, `idsens`, `iddom`) VALUES
(4, 38, 'Chambre Andrew', 'Chambre', 10, 0),
(7, 38, 'Entrée principale', 'Entrée', 30, 0),
(10, 38, 'Bureau chambre Andrew', 'Bureau', 25, 0),
(11, 38, 'Chambre Andrew', 'Chambre', 49, 0),
(12, 41, 'Chambre Test', 'Chambre', 39, 0),
(13, 38, 'Bureau Victor', 'Bureau', 11, 0),
(14, 38, 'Patio balcon Papa', 'Terrasse', 43, 0),
(20, 44, 'Chambre Tipso', 'Chambre', 41, 0),
(21, 44, 'Salon principale', 'Salon', 45, 0),
(22, 44, 'SDB Tips', 'Salle de Bain', 44, 0),
(23, 44, 'Salon principale', 'Salon', 47, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

CREATE TABLE `sensors` (
  `sensorserial` varchar(20) NOT NULL,
  `idsens` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `idroom` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `sensortype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sensors`
--

INSERT INTO `sensors` (`sensorserial`, `idsens`, `idc`, `idroom`, `mail`, `sensortype`) VALUES
('1000113', 9, 0, 0, '', 'Température'),
('1000114', 10, 38, 0, 'philippick.a@gmail.com', 'Humidité'),
('1000115', 11, 38, 0, 'philippick.a@gmail.com', 'Lumière'),
('1000119', 15, 0, 0, '', 'Mouvement'),
('1000124', 20, 0, 0, '', 'Humidité'),
('1000129', 25, 38, 0, 'philippick.a@gmail.com', 'Mouvement'),
('1000134', 29, 0, 0, '', 'Humidité'),
('1000135', 30, 38, 0, 'philippick.a@gmail.com', 'Lumière'),
('1000139', 34, 0, 0, '', 'Mouvement'),
('1000139', 38, 0, 0, '', 'Mouvement'),
('1000151', 39, 41, 0, 'test@gmail.com', 'Température'),
('1000152', 40, 0, 0, '', 'Humidité'),
('1000153', 41, 44, 0, 'lambda@gmail.com', 'Lumière'),
('1000154', 42, 0, 0, '', 'Mouvement'),
('1000161', 43, 38, 0, 'philippick.a@gmail.com', 'Température'),
('1000162', 44, 44, 0, 'lambda@gmail.com', 'Humidité'),
('1000163', 45, 44, 0, 'lambda@gmail.com', 'Lumière'),
('1000164', 46, 0, 0, '', 'Mouvement'),
('1000171', 47, 44, 0, 'lambda@gmail.com', 'Température'),
('1000172', 48, 0, 0, '', 'Humidité'),
('1000173', 49, 38, 0, 'philippick.a@gmail.com', 'Lumière'),
('1000174', 50, 0, 0, '', 'Mouvement');

-- --------------------------------------------------------

--
-- Structure de la table `userservice`
--

CREATE TABLE `userservice` (
  `idsc` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mail` int(11) NOT NULL,
  `password` text NOT NULL,
  `keyservice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`iddata`);

--
-- Index pour la table `dataflow`
--
ALTER TABLE `dataflow`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idhome`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idm`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idroom`);

--
-- Index pour la table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`idsens`);

--
-- Index pour la table `userservice`
--
ALTER TABLE `userservice`
  ADD PRIMARY KEY (`idsc`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;
--
-- AUTO_INCREMENT pour la table `dataflow`
--
ALTER TABLE `dataflow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `idsens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
