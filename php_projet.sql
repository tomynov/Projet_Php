-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 14:40
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id_about` int(3) NOT NULL,
  `title` varchar(40) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  `texte` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `title`, `info`, `texte`) VALUES
(1, 'Tom COUSDIKIAN', 'CHATOU 78400 - Yvelynes', 'Je m\'appelle Tom COUSDIKIAN. Je suis passionné par l\'informatique et les mathématiques ainsi, avec un Bac Scientifique option Science de la Vie et de la Terre, j\'ai poursuis mes études en cycle préparatoire d\'ingénieur à ESIEE Paris. Je me suis ensuite redirigé en école d\'Informatique à Ynov Paris.');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id_experiences` int(3) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `texte` varchar(1000) DEFAULT NULL,
  `date_redaction` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id_experiences`, `title`, `texte`, `date_redaction`) VALUES
(10, 'Ynov Paris', 'Actuellement en première année en Bachelor Informatique.\r\nAu cours de cette première année, j\'ai étudié (en développement les algorithmes en python et C, ainsi que le C#, Javascript et Php', '2020-05-15'),
(11, 'ESIEE Paris', '1er année en cycle préparatoire d\'ingénieurs.\r\n\r\nDans le domaine de l\'informatique, j\'ai pu étudié la programmation d\'algorithme et orienté objet en Java', '2020-05-16'),
(13, 'Lycée Alain', 'Parcours scolaire de la seconde à la Terminale S', '2020-05-18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experiences`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experiences` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
