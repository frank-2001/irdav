-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 août 2022 à 04:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `irdavid`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `names`, `mail`, `age`, `password`, `stamp`) VALUES
(1, 'Franky', '', 21, '12', '1661877363'),
(2, 'Franky', 'mister@gmail.com', 21, '12', '1661877430'),
(3, 'Cool', 'mister@gmail.com', 21, '23', '1661877539'),
(4, 'Franky', 'mister@gmail.com', 21, '1', '1661900970'),
(5, 'Jospin', 'jo@mail.com', 0, '12', '1661906452'),
(6, 'Frank', 'frank@mail.com', 0, 'Code', '1661907047'),
(7, 'Love', 'lolo@gmial.com', 1661908220, '123', '1661908252'),
(8, 'Beau', 'beau@gmail.com', 0, '22', '1661908375'),
(9, 'Dicaprio', 'dicap@mail.com', 32, '23', '1661909006'),
(10, 'jordan', 'jor@gmail.com', 12, 'de', '1661909310');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
