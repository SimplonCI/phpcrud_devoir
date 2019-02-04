-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 04 Février 2019 à 18:04
-- Version du serveur :  5.7.25-0ubuntu0.18.10.2
-- Version de PHP :  7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `users_crud`
--

CREATE TABLE `users_crud` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datepost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_crud`
--

INSERT INTO `users_crud` (`id`, `nom`, `prenom`, `sexe`, `password`, `datepost`) VALUES
(8, 'Dicko', 'Assita', 'feminin', 'edf8cc04132876ec9a3c434d1cbe5cd4', '2019-02-04'),
(9, 'Oupo', 'firmin', 'masculin', 'd41d8cd98f00b204e9800998ecf8427e', '2019-02-04');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users_crud`
--
ALTER TABLE `users_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users_crud`
--
ALTER TABLE `users_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
