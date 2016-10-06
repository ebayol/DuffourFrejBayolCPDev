-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 06 Octobre 2016 à 12:19
-- Version du serveur: 5.5.47-0ubuntu0.14.04.1
-- Version de PHP: 5.5.32-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `CDP`
--

-- --------------------------------------------------------

--
-- Structure de la table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id_workshop` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `theme` varchar(80) NOT NULL,
  `type` varchar(80) NOT NULL,
  `laboratory` varchar(80) NOT NULL,
  `place` varchar(80) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `capicity` int(10) unsigned NOT NULL,
  `animator` varchar(80) NOT NULL,
  `contents` varchar(80) NOT NULL,
  PRIMARY KEY (`id_workshop`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `workshop`
--

INSERT INTO `workshop` (`id_workshop`, `title`, `theme`, `type`, `laboratory`, `place`, `time`, `capicity`, `animator`, `contents`) VALUES
(8, 'Atelier 1 ', 'Mars', 'Physique', 'Nasa', 'USA', 80, 30, 'Hawking', 'Divers'),
(9, 'Atelier 2', 'Galaxy', 'Astro', 'Nasa', 'USA', 90, 20, 'Stephan', 'Divers');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
