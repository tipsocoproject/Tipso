-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Janvier 2017 à 12:31
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `petites_annonces`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `texte`, `date`, `idUtilisateur`) VALUES
(1, 'Winter is Coming', 'Cherche vêtement chaud en poils de loups pour hiver long froid à venir', '1996-08-01', 5),
(2, 'Camping car', 'A vendre : camping car pouvant faire office de maison, très bon état, quelques traces liées à des expériences de chimie.', '2008-01-20', 6),
(3, 'Deux Roues', 'Recherche désespérément moto volée à proximité d''Alexandria', '2016-10-23', 7),
(4, 'Guillaume Tell', 'Recherche arbalète perdue aux abords d''Alexandria.', '2016-12-11', 7),
(5, 'Lucille', 'A vendre : batte de baseball très usée mais toujours utilisable.', '2016-10-23', 8);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'Immobilier', 'Maisons et appartements à louer ou acheter'),
(2, 'Véhicules', 'Voitures, camions, vélos, ...'),
(3, 'Animaux', 'Des chats, des chiens, voire plus exotiques'),
(4, 'Sport', 'Tous les sports, pour tous les âges'),
(5, 'Mode', 'Il en faut pour tous les goûts');

-- --------------------------------------------------------

--
-- Structure de la table `classement`
--

CREATE TABLE `classement` (
  `id` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `classement`
--

INSERT INTO `classement` (`id`, `idAnnonce`, `idCategorie`) VALUES
(1, 1, 3),
(2, 1, 5),
(3, 2, 1),
(4, 2, 2),
(5, 3, 2),
(6, 4, 4),
(7, 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
(6, 'WalterWhite', 'dd1a432d5aff5b1c4a8d45207d49e9fcfccff8c5'),
(5, 'JohnSnow', 'a24836c226a625a4f2f7bbfeaeb283e4f227095e'),
(7, 'DarylDixon', '4207665616570d86a8e50eb374dec4086747cc98'),
(8, 'Negan', '21ee35473f990e54c12651ff06eedb6906ed6ae5'),
(9, 'pikpik', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(13, 'douddoudd', 'bc2fbc9d44f24849bc6922215a6be02fb6c2217e');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classement`
--
ALTER TABLE `classement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `classement`
--
ALTER TABLE `classement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
