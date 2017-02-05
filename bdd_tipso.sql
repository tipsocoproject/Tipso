-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 05 Février 2017 à 13:29
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
(97, 11, 5, 0, 1, '13:01:37', '2017-02-07'),
(98, 11, 5, 0, 1, '22:47:14', '2017-02-07'),
(99, 11, 5, 0, 1, '11:51:50', '2017-02-07'),
(100, 11, 5, 0, 1, '07:09:47', '2017-02-07'),
(101, 11, 5, 0, 1, '01:50:28', '2017-02-07'),
(102, 11, 5, 0, 1, '21:18:17', '2017-02-07'),
(103, 11, 5, 0, 1, '21:12:34', '2017-02-07'),
(104, 11, 5, 0, 0, '01:27:42', '2017-02-07'),
(105, 11, 5, 0, 1, '00:13:05', '2017-02-07'),
(106, 11, 5, 0, 1, '15:53:05', '2017-02-07'),
(107, 11, 5, 0, 0, '01:07:03', '2017-02-07'),
(108, 11, 5, 0, 0, '00:49:23', '2017-02-07'),
(109, 11, 5, 0, 0, '02:09:27', '2017-02-07'),
(110, 11, 5, 0, 1, '00:31:38', '2017-02-07'),
(111, 11, 5, 0, 1, '17:35:18', '2017-02-07'),
(112, 11, 5, 0, 1, '23:14:50', '2017-02-07'),
(113, 11, 5, 0, 1, '01:39:34', '2017-02-07'),
(114, 11, 5, 0, 0, '17:13:57', '2017-02-07'),
(115, 11, 5, 0, 0, '16:37:18', '2017-02-07'),
(116, 11, 5, 0, 0, '14:44:00', '2017-02-07'),
(117, 11, 5, 0, 1, '16:43:27', '2017-02-07'),
(118, 11, 5, 0, 1, '12:00:00', '2017-02-07'),
(119, 11, 5, 0, 1, '16:13:02', '2017-02-07'),
(120, 11, 5, 0, 1, '17:16:56', '2017-02-07'),
(121, 11, 5, 0, 0, '17:21:04', '2017-02-08'),
(122, 11, 5, 0, 1, '02:49:48', '2017-02-08'),
(123, 11, 5, 0, 1, '10:22:32', '2017-02-08'),
(124, 11, 5, 0, 1, '00:53:36', '2017-02-08'),
(125, 11, 5, 0, 1, '21:32:26', '2017-02-08'),
(126, 11, 5, 0, 1, '07:43:21', '2017-02-08'),
(127, 11, 5, 0, 0, '17:05:47', '2017-02-08'),
(128, 11, 5, 0, 1, '07:34:02', '2017-02-08'),
(129, 11, 5, 0, 1, '23:17:33', '2017-02-08'),
(130, 11, 5, 0, 0, '20:40:40', '2017-02-08'),
(131, 11, 5, 0, 0, '06:22:46', '2017-02-08'),
(132, 11, 5, 0, 0, '07:18:13', '2017-02-08'),
(133, 11, 5, 0, 1, '16:36:25', '2017-02-08'),
(134, 11, 5, 0, 1, '11:41:43', '2017-02-08'),
(135, 11, 5, 0, 1, '20:13:31', '2017-02-08'),
(136, 11, 5, 0, 1, '18:06:09', '2017-02-08'),
(137, 11, 5, 0, 0, '19:29:02', '2017-02-08'),
(138, 11, 5, 0, 1, '22:46:32', '2017-02-08'),
(139, 11, 5, 0, 0, '04:38:00', '2017-02-08'),
(140, 11, 5, 0, 1, '09:57:50', '2017-02-08'),
(141, 11, 5, 0, 0, '01:55:24', '2017-02-08'),
(142, 11, 5, 0, 1, '23:55:05', '2017-02-08'),
(143, 11, 5, 0, 0, '01:36:14', '2017-02-08'),
(144, 11, 5, 0, 1, '00:53:15', '2017-02-08');

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
(12, 41, 'Chambre Test', 'Chambre', 39, 0),
(13, 38, 'Bureau Victor', 'Bureau', 11, 0);

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
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
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
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `idsens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
