-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 05 Février 2017 à 12:24
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.5.38

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
(4, '', '', '', '', 0, 'superuser2');

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
(1, 'Philippick', 'Andrew', 'philippick.isep@gmail.com', 'eeb29b724bc484bbc0e77f319178b3ac46628d5f', 0, '', '', '', '0', ''),
(38, 'Philippick', 'Andrew', 'philippick.a@gmail.com', 'bc2fbc9d44f24849bc6922215a6be02fb6c2217e', 0, 'France', 'Paris', '75016', '0638197527', '6 rue de la cure'),
(41, 'Test', 'Test', 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 0, '', '', '', '', '');

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
(1, 17, 1, 0, 23, '03:38:24', '2017-01-01'),
(2, 17, 1, 0, 22, '15:10:54', '2017-01-01'),
(3, 17, 1, 0, 15, '23:17:23', '2017-01-01'),
(4, 17, 1, 0, 19, '00:52:12', '2017-01-01'),
(5, 17, 1, 0, 26, '07:04:46', '2017-01-01'),
(6, 17, 1, 0, 25, '13:19:27', '2017-01-01'),
(7, 17, 1, 0, 19, '17:15:37', '2017-01-01'),
(8, 17, 1, 0, 15, '12:47:38', '2017-01-01'),
(9, 17, 1, 0, 29, '08:04:53', '2017-01-01'),
(10, 17, 1, 0, 22, '19:31:46', '2017-01-01'),
(11, 17, 1, 0, 20, '17:47:37', '2017-01-01'),
(12, 17, 1, 0, 20, '17:46:49', '2017-01-01'),
(13, 17, 1, 0, 27, '00:38:45', '2017-01-01'),
(14, 17, 1, 0, 24, '03:47:48', '2017-01-01'),
(15, 17, 1, 0, 30, '18:53:21', '2017-01-01'),
(16, 17, 1, 0, 28, '09:49:45', '2017-01-01'),
(17, 17, 1, 0, 16, '02:46:22', '2017-01-01'),
(18, 17, 1, 0, 29, '08:07:37', '2017-01-01'),
(19, 17, 1, 0, 28, '14:32:51', '2017-01-01'),
(20, 17, 1, 0, 20, '06:56:25', '2017-01-01'),
(21, 17, 1, 0, 23, '08:27:45', '2017-01-01'),
(22, 17, 1, 0, 16, '02:31:10', '2017-01-01'),
(23, 17, 1, 0, 28, '22:46:05', '2017-01-01'),
(24, 17, 1, 0, 24, '03:06:51', '2017-01-01'),
(25, 17, 1, 0, 29, '11:42:52', '2017-01-02'),
(26, 17, 1, 0, 28, '04:58:28', '2017-01-02'),
(27, 17, 1, 0, 24, '13:33:05', '2017-01-02'),
(28, 17, 1, 0, 20, '16:21:02', '2017-01-02'),
(29, 17, 1, 0, 30, '06:31:43', '2017-01-02'),
(30, 17, 1, 0, 30, '09:29:32', '2017-01-02'),
(31, 17, 1, 0, 29, '04:53:49', '2017-01-02'),
(32, 17, 1, 0, 19, '16:38:58', '2017-01-02'),
(33, 17, 1, 0, 23, '10:54:21', '2017-01-02'),
(34, 17, 1, 0, 18, '10:04:20', '2017-01-02'),
(35, 17, 1, 0, 23, '14:48:19', '2017-01-02'),
(36, 17, 1, 0, 19, '22:00:39', '2017-01-02'),
(37, 17, 1, 0, 17, '18:50:43', '2017-01-02'),
(38, 17, 1, 0, 20, '00:42:53', '2017-01-02'),
(39, 17, 1, 0, 18, '13:16:33', '2017-01-02'),
(40, 17, 1, 0, 30, '02:26:04', '2017-01-02'),
(41, 17, 1, 0, 27, '00:20:49', '2017-01-02'),
(42, 17, 1, 0, 16, '23:25:12', '2017-01-02'),
(43, 17, 1, 0, 25, '18:18:33', '2017-01-02'),
(44, 17, 1, 0, 18, '23:55:16', '2017-01-02'),
(45, 17, 1, 0, 16, '21:24:42', '2017-01-02'),
(46, 17, 1, 0, 18, '00:11:15', '2017-01-02'),
(47, 17, 1, 0, 26, '23:54:18', '2017-01-02'),
(48, 17, 1, 0, 25, '08:28:11', '2017-01-02'),
(49, 18, 1, 0, 0, '02:32:16', '2017-01-01'),
(50, 18, 1, 0, 1, '02:33:56', '2017-01-01'),
(51, 18, 1, 0, 1, '22:44:17', '2017-01-01'),
(52, 18, 1, 0, 0, '16:05:10', '2017-01-01'),
(53, 18, 1, 0, 1, '18:53:29', '2017-01-01'),
(54, 18, 1, 0, 0, '00:41:05', '2017-01-01'),
(55, 18, 1, 0, 1, '02:14:52', '2017-01-01'),
(56, 18, 1, 0, 1, '09:36:42', '2017-01-01'),
(57, 18, 1, 0, 0, '20:03:27', '2017-01-01'),
(58, 18, 1, 0, 0, '12:06:59', '2017-01-01'),
(59, 18, 1, 0, 0, '11:34:12', '2017-01-01'),
(60, 18, 1, 0, 0, '13:26:58', '2017-01-01'),
(61, 18, 1, 0, 0, '00:02:09', '2017-01-01'),
(62, 18, 1, 0, 1, '06:51:38', '2017-01-01'),
(63, 18, 1, 0, 1, '20:42:18', '2017-01-01'),
(64, 18, 1, 0, 1, '21:36:00', '2017-01-01'),
(65, 18, 1, 0, 0, '00:49:36', '2017-01-01'),
(66, 18, 1, 0, 1, '02:55:02', '2017-01-01'),
(67, 18, 1, 0, 0, '23:39:08', '2017-01-01'),
(68, 18, 1, 0, 0, '04:03:46', '2017-01-01'),
(69, 18, 1, 0, 0, '16:25:50', '2017-01-01'),
(70, 18, 1, 0, 1, '18:17:11', '2017-01-01'),
(71, 18, 1, 0, 1, '14:24:43', '2017-01-01'),
(72, 18, 1, 0, 1, '02:50:17', '2017-01-01'),
(73, 18, 1, 0, 0, '16:50:47', '2017-01-02'),
(74, 18, 1, 0, 0, '22:58:05', '2017-01-02'),
(75, 18, 1, 0, 0, '10:59:03', '2017-01-02'),
(76, 18, 1, 0, 1, '11:55:34', '2017-01-02'),
(77, 18, 1, 0, 1, '20:04:30', '2017-01-02'),
(78, 18, 1, 0, 1, '10:57:44', '2017-01-02'),
(79, 18, 1, 0, 1, '07:22:08', '2017-01-02'),
(80, 18, 1, 0, 1, '01:19:35', '2017-01-02'),
(81, 18, 1, 0, 0, '20:06:58', '2017-01-02'),
(82, 18, 1, 0, 0, '00:16:07', '2017-01-02'),
(83, 18, 1, 0, 0, '21:33:59', '2017-01-02'),
(84, 18, 1, 0, 0, '13:02:22', '2017-01-02'),
(85, 18, 1, 0, 1, '10:58:10', '2017-01-02'),
(86, 18, 1, 0, 1, '08:53:16', '2017-01-02'),
(87, 18, 1, 0, 1, '23:34:34', '2017-01-02'),
(88, 18, 1, 0, 1, '17:03:53', '2017-01-02'),
(89, 18, 1, 0, 0, '10:38:08', '2017-01-02'),
(90, 18, 1, 0, 0, '06:49:10', '2017-01-02'),
(91, 18, 1, 0, 0, '07:23:53', '2017-01-02'),
(92, 18, 1, 0, 1, '07:24:09', '2017-01-02'),
(93, 18, 1, 0, 1, '13:06:50', '2017-01-02'),
(94, 18, 1, 0, 0, '12:03:49', '2017-01-02'),
(95, 18, 1, 0, 0, '15:01:59', '2017-01-02'),
(96, 18, 1, 0, 1, '02:03:10', '2017-01-02');

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
(42, 38, 30, '02/16/2017', '21:03', 'Entrée principale', '1');

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
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subject` text NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idm`, `idc`, `nom`, `email`, `subject`, `comment`) VALUES
(1, 0, '', 'philippick.a@gmail.com', 'problem', 'odjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfoodjfsjfdsdjfo');

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
(12, 41, 'Chambre Test', 'Chambre', 39, 0);

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
('1000115', 11, 0, 0, '', 'Lumière'),
('1000119', 15, 0, 0, '', 'Mouvement'),
('1000124', 20, 0, 0, '', 'Humidité'),
('1000129', 25, 38, 0, 'philippick.a@gmail.com', 'Mouvement'),
('1000134', 29, 0, 0, '', 'Humidité'),
('1000135', 30, 38, 0, 'philippick.a@gmail.com', 'Lumière'),
('1000139', 34, 0, 0, '', 'Mouvement'),
('1000139', 38, 0, 0, '', 'Mouvement'),
('1000151', 39, 41, 0, 'test@gmail.com', 'Température'),
('1000152', 40, 0, 0, '', 'Humidité'),
('1000153', 41, 0, 0, '', 'Lumière'),
('1000154', 42, 0, 0, '', 'Mouvement'),
('1000161', 43, 0, 0, '', 'Température'),
('1000162', 44, 0, 0, '', 'Humidité'),
('1000163', 45, 0, 0, '', 'Lumière'),
('1000164', 46, 0, 0, '', 'Mouvement'),
('1000171', 47, 0, 0, '', 'Température'),
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
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `idsens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
