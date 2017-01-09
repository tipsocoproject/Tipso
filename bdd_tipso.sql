-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Janvier 2017 à 15:08
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
-- Structure de la table `maintenance`
--

CREATE TABLE `maintenance` (
  `mail` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `country` text NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `city` text NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `cocount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `lastname`, `firstname`, `username`, `mail`, `password`, `country`, `address`, `postcode`, `city`, `mobilenumber`, `cocount`) VALUES
(1, 'Philippick', 'Andrew', 'doooud', 'philippick.isep@gmail.com', 'eeb29b724bc484bbc0e77f319178b3ac46628d5f', 'FR', '6 rue de la cure', '75016', 'Paris', '0638197527', 0),
(2, 'Ruyer', 'Jorel', 'jojo', 'jorel@live.ovh', '8603a129b920fa5714e29a1c0ce697de9992e2b6', 'FR', '22 henri regnault', '75014', 'Paris', '0636751075', 0),
(7, 'Feng', 'David', 'favid', 'fyhdavid@gmail.com', '4f92cea32512d6dbb18dc47a6f2f37596d82ee53', 'CN', '11 rue lulli', '75013', 'Paris', '0610141010', 0),
(9, 'Lucas', 'Pierre', 'plucas', 'pierrelucas75@hotmail.fr', '50f243b21e3a8cb1a39b1c6714c355104f2e82a4', 'FR', '36 avenue Jean Moulin', '75014', 'Paris', '0610341373', 0),
(10, 'Philippick', 'Andrew', 'doud', 'philippick.a@gmail.com', 'bc2fbc9d44f24849bc6922215a6be02fb6c2217e', 'FR', '6 rue de la cure', '75016', 'Paris', '0638197527', 0),
(11, 'Stephlu', 'Stephlu', 'stephir', 'stephlu@gmail.com', 'b4fe22a219b2750de840cc89e58de90235715a70', 'FR', 'Stephir', '0', 'Stephir', '0', 0),
(12, 'tibi', 'tibi', 'tibi', 'tibi@gmail.com', '200d14be5ee62ba601782157630e5ca8753f0559', 'FR', 'tibi', '0', 'tibi', '0', 0),
(13, 'kipi', 'kipi', 'kipi', 'kipi@gmail.com', '3c01253c24783ac54d2496d7548084c1abb71403', 'FR', 'kipi', '0', 'kipi', '0', 0),
(14, 'Bone', 'Ken', 'kenbone', 'kenbone@gmail.com', '345889cc3341f0d0a27ed537c434e461a3e266a4', 'FR', 'kenbone', '0', 'kenbone', '0', 0),
(15, 'Plucas', 'Plucas', 'pplucas', 'plucas@gmail.com', 'b7d681d12e3fe553c37c48c5ecda689ae8912990', 'FR', 'plucas', '0', 'plucas', '0', 0),
(16, 'Bone', 'Ken', 'bone', 'boneken@gmail.com', 'ffdf4ccbf050a0f315f056807b46fac95f616c6b', 'FR', 'boneken', '0', 'Paris', '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `numtel` int(11) NOT NULL,
  `numrue` int(11) NOT NULL,
  `nomrue` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pays` varchar(20) CHARACTER SET utf8 NOT NULL,
  `numappart` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `comments` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `dimension` int(11) NOT NULL,
  `numroom` int(11) NOT NULL,
  `numdiningroom` int(11) NOT NULL,
  `numlivingroom` int(11) NOT NULL,
  `numentrance` int(11) NOT NULL,
  `numbathroom` int(11) NOT NULL,
  `numkitchen` int(11) NOT NULL,
  `numpatio` int(11) NOT NULL,
  `numoffice` int(11) NOT NULL,
  `numlaundry` int(11) NOT NULL,
  `numother` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`id`, `dimension`, `numroom`, `numdiningroom`, `numlivingroom`, `numentrance`, `numbathroom`, `numkitchen`, `numpatio`, `numoffice`, `numlaundry`, `numother`) VALUES
(0, 90, 1, 1, 1, 1, 1, 1, 2, 1, 0, 0),
(10, 90, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0),
(11, 50, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1),
(12, 50, 1, 1, 2, 1, 1, 1, 1, 1, 0, 0),
(13, 80, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0),
(14, 70, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(15, 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(16, 50, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

CREATE TABLE `sensors` (
  `id` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `humidite` int(11) NOT NULL,
  `mouvement` int(11) NOT NULL,
  `pression` int(11) NOT NULL,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `serviceclient`
--

CREATE TABLE `serviceclient` (
  `phonenumber` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `mail` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
