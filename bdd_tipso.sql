-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 25 Janvier 2017 à 10:25
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
(2, 'Andrew', 'Philippick', 'philippick.a@gmail.com', 'bc2fbc9d44f24849bc6922215a6be02fb6c2217e', 1, 'doud'),
(3, 'David', 'Feng', 'fyhdavid@gmail.com', '847df59f7b32f8c32be21b40e9fcead2da431b78', 1, 'feng');

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
  `mobilenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `lastname`, `firstname`, `mail`, `password`, `type`, `mobilenumber`) VALUES
(1, 'feng', 'david', 'fyhdavid@gmail.com', '847df59f7b32f8c32be21b40e9fcead2da431b78', 0, 0);

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
(1, 17, 1, 0, 23, '09:00:00', '2017-01-21'),
(2, 17, 1, 0, 20, '08:30:34', '2017-01-21'),
(3, 17, 1, 0, 19, '15:05:04', '2017-01-21'),
(4, 17, 1, 0, 21, '17:04:38', '2017-01-21'),
(5, 17, 1, 0, 18, '18:09:10', '2017-01-21'),
(6, 17, 1, 0, 20, '10:00:00', '2017-01-22'),
(7, 17, 1, 0, 17, '11:00:00', '2017-01-22'),
(8, 17, 1, 0, 15, '12:00:24', '2017-01-22'),
(9, 17, 1, 0, 25, '15:04:06', '2017-01-22'),
(10, 17, 1, 0, 21, '17:09:34', '2017-01-22'),
(11, 18, 1, 0, 17, '12:20:30', '2017-01-22'),
(12, 18, 1, 0, 18, '19:05:10', '2017-01-22'),
(13, 18, 1, 0, 19, '09:40:23', '2017-01-21'),
(14, 18, 1, 0, 20, '20:06:45', '2017-01-21'),
(15, 18, 1, 0, 19, '07:06:08', '2017-01-23'),
(16, 18, 1, 0, 21, '08:09:10', '2017-01-23'),
(17, 18, 1, 0, 17, '11:08:04', '2017-01-24'),
(18, 18, 1, 0, 16, '14:30:59', '2017-01-24'),
(19, 18, 1, 0, 18, '15:40:19', '2017-01-25'),
(20, 18, 1, 0, 23, '17:08:10', '2017-01-25');

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
  `roomname` text NOT NULL,
  `iddom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`idroom`, `roomname`, `iddom`) VALUES
(0, '0', 0),
(10, '0', 0),
(11, '0', 1),
(12, '0', 0),
(13, '0', 0),
(14, '0', 0),
(15, '0', 0),
(16, '0', 0);

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
('1000111', 7, 0, 0, '', 'Distance - 1 '),
('1000112', 8, 0, 0, '', 'Distance - 2 '),
('1000113', 9, 0, 0, '', 'Température'),
('1000114', 10, 0, 0, '', 'Humidité'),
('1000115', 11, 0, 0, '', 'Lumière'),
('1000116', 12, 0, 0, '', 'Couleur'),
('1000117', 13, 30, 0, 'test@gmail.com', 'Présence'),
('1000118', 14, 38, 0, 'philippick.a@gmail.com', 'Lumière - 2'),
('1000119', 15, 0, 0, '', 'Mouvement'),
('1000121', 16, 0, 0, '', 'Distance - 1 '),
('1000122', 17, 1, 0, 'fyhdavid@gmail.com', 'Distance - 2 '),
('1000124', 18, 0, 0, 'fyhdavid@gmail.com', 'Humidité'),
('1000123', 19, 0, 0, '', 'Température'),
('1000124', 20, 0, 0, '', 'Humidité'),
('1000125', 21, 0, 0, '', 'Lumière'),
('1000126', 22, 0, 0, '', 'Couleur'),
('1000127', 23, 0, 0, '', 'Présence'),
('1000128', 24, 0, 0, '', 'Lumière - 2'),
('1000129', 25, 0, 0, '', 'Mouvement'),
('1000131', 26, 0, 0, '', 'Distance - 1 '),
('1000132', 27, 0, 0, '', 'Distance - 2 '),
('1000133', 28, 0, 0, '', 'Température'),
('1000134', 29, 0, 0, '', 'Humidité'),
('1000135', 30, 0, 0, '', 'Lumière'),
('1000137', 32, 0, 0, '', 'Présence'),
('1000138', 33, 0, 0, '', 'Lumière - 2'),
('1000139', 34, 0, 0, '', 'Mouvement'),
('1000136', 35, 0, 0, '', 'Couleur'),
('1000137', 36, 0, 0, '', 'Présence'),
('1000138', 37, 0, 0, '', 'Lumière - 2'),
('1000139', 38, 0, 0, '', 'Mouvement');

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
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `idsens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;