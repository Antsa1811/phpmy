-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 27 Janvier 2019 à 14:26
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE IF NOT EXISTS phpmy;
use phpmy;


-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL,
  `destinataire` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `text` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `email`
--

INSERT INTO `email` (`id`, `destinataire`, `sujet`, `text`) VALUES
(1, 'dsq', 'dsq', 'dsq'),
(2, 'dsq', 'dsq', 'dsq'),
(3, 'dsq', 'dsq', 'dsq'),
(4, 'sdq', 'dsq', 'dsq'),
(5, 'dsq', 'ds', 'sqdqsdsq'),
(6, 'mofo', 'akondro', 'jkjkljkdsqdq'),
(7, 'mofo', 'akondro', 'jkjkljkdsqdq'),
(8, 'dqs', 'ds', 'sdqdsqdsq'),
(9, 'dsqsqd', 'dsqsqd', 'sdqsqd'),
(10, 'dsq', 'dsqsqd', 'dsqsd');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `auteur` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `auteur`, `description`) VALUES
(1, 'Paranaormal activity', 'Miazato Ryakato', 'Film de frisson de fantome'),
(2, 'Feu de l\'amour', 'Miliano Rodriguez', 'serie dramatiques et amour '),
(3, 'Bon homme', 'Ralita', 'Filmn de comedie pour jeunes'),
(4, 'The last naruto', 'Miazato riukary', 'Mangas , guerre de ninja et fin du monde des ninjas'),
(5, 'yao', 'Imar soa', 'Film de petit enfants perdue'),
(6, 'dbz', 'dbz', 'dbz super guerier');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(150) NOT NULL,
  `commentaire` varchar(250) NOT NULL,
  `dateInsert` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `commentaire`, `dateInsert`) VALUES
(1, 'Antsa', 'teste', '2019-01-24 00:00:00'),
(2, 'ralita', 'teste 2', '2019-01-24 18:38:21'),
(3, 'eric45', 'Truque de ouf', '2019-01-26 18:19:44'),
(4, 'antsa', 'le chose', '2019-01-27 12:43:12'),
(5, 'Antsa', 'le deuxieme chose', '2019-01-27 12:44:18'),
(6, 'Antsa', 'troiscieme mots', '2019-01-27 12:46:15');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
