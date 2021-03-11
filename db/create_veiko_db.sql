-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 nov. 2020 à 10:10
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `veiko`
--

-- --------------------------------------------------------

--
-- Structure de la table `parsec_id`
--

DROP TABLE IF EXISTS `parsec_id`;
CREATE TABLE IF NOT EXISTS `parsec_id` (
  `parsec_account` int(11) NOT NULL,
  `parsec_password` varchar(255) NOT NULL,
  `parsec_email` varchar(255) NOT NULL,
  PRIMARY KEY (`parsec_account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parsec_id`
--

INSERT INTO `parsec_id` (`parsec_account`, `parsec_password`, `parsec_email`) VALUES
(1, 'NORsam91!', 'veiko91400@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) NOT NULL,
  `users_address` varchar(50) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `users_password` varchar(50) NOT NULL,
  `users_birthday` date NOT NULL,
  `avatar_url` varchar(255) NOT NULL DEFAULT 'https://www.midlands4cities.ac.uk/wp-content/uploads/2019/04/student-profile-default.png',
  `user_group` varchar(255) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_address`, `users_email`, `users_password`, `users_birthday`, `avatar_url`, `user_group`) VALUES
(1, 'Rootkitty', '9 Bis rue de Palaiseau, 91400 Saclay', 'essainono1@gmail.com', '1234', '2001-06-09', 'https://www.midlands4cities.ac.uk/wp-content/uploads/2019/04/student-profile-default.png', 'administrateur'),
(2, 'Azerty', '9 Rue de l\'Azerty', 'azerty@azerty.com', 'azerty', '2020-10-08', 'https://www.midlands4cities.ac.uk/wp-content/uploads/2019/04/student-profile-default.png', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `vm`
--

DROP TABLE IF EXISTS `vm`;
CREATE TABLE IF NOT EXISTS `vm` (
  `vm_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID de la VM',
  `vm_name` varchar(50) NOT NULL COMMENT 'Nom de la VM',
  `vm_creationdate` date NOT NULL COMMENT 'Date de cr?ation (commande) de la VM',
  `vm_state` tinyint(1) NOT NULL COMMENT 'Etat de la VM',
  `vm_useStart` date NOT NULL COMMENT 'Date heure d?but d''utilisation de la VM',
  `vm_useEnd` date NOT NULL COMMENT 'Date heure fin d''utilisation de la VM',
  `id_vmproxmox` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vm_id`),
  KEY `VM_Users_FK` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vm`
--

INSERT INTO `vm` (`vm_id`, `vm_name`, `vm_creationdate`, `vm_state`, `vm_useStart`, `vm_useEnd`, `id_vmproxmox`, `users_id`) VALUES
(2, 'LAPTOP-2KCKHEPU', '2020-10-23', 0, '2020-10-23', '2020-10-23', 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vm`
--
ALTER TABLE `vm`
  ADD CONSTRAINT `VM_Users_FK` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
