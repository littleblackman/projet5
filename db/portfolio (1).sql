-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 05 nov. 2018 à 17:38
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `missions` text NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleProject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `techno` enum('HTML5','CSS3','WordPress','JavaScript','PHP','MySQL','Bootstrap') NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `techno` (`techno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `skill` (`skill`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `level`) VALUES
(1, 'test', 2);

-- --------------------------------------------------------

--
-- Structure de la table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `graduate` varchar(100) NOT NULL,
  `date` year(4) NOT NULL,
  `institution` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `training`
--

INSERT INTO `training` (`id`, `graduate`, `date`, `institution`) VALUES
(1, 'Baccalauréat Sciences Médico-Sociales', 1999, 'Lycée Blaise Pascal');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'member',
  `email` varchar(50) NOT NULL,
  `inscription_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
