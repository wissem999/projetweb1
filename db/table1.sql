-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 09 mars 2024 à 21:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `table1`
--

CREATE TABLE `table1` (
  `code` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `competence1` varchar(30) NOT NULL,
  `competence2` varchar(30) NOT NULL,
  `competence3` varchar(30) NOT NULL,
  `competence4` varchar(30) NOT NULL,
  `nomentreprise` varchar(30) NOT NULL,
  `posteoccupe` varchar(30) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `descriptiontaches` varchar(1000) NOT NULL,
  `nomecole` varchar(30) NOT NULL,
  `diplomeobtenu` varchar(30) NOT NULL,
  `anneedebut` varchar(30) NOT NULL,
  `anneefin` varchar(30) NOT NULL,
  `domaineetude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `table1`
--
ALTER TABLE `table1`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
