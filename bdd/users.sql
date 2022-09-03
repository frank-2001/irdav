-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 sep. 2022 à 11:06
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
  `stamp` varchar(50) NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `names`, `mail`, `age`, `password`, `stamp`, `sexe`, `localisation`, `profile`, `description`) VALUES
(1, 'Franky', '', 21, '12', '1661877363', '', '', '', '0'),
(2, 'Franky', 'mister@gmail.com', 21, '12', '1661877430', '', '', '', '0'),
(3, 'Cool', 'mister@gmail.com', 21, '23', '1661877539', '', '', '', '0'),
(4, 'Franky', 'mister@gmail.com', 21, '1', '1661900970', '', '', '', '0'),
(5, 'Jospin', 'jo@mail.com', 0, '12', '1661906452', '', '', '', '0'),
(6, 'Frank', 'frank@mail.com', 0, 'Code', '1661907047', '', '', '', '0'),
(7, 'Love', 'lolo@gmial.com', 1661908220, '123', '1661908252', '', '', '', '0'),
(8, 'Beau', 'beau@gmail.com', 0, '22', '1661908375', '', '', '', '0'),
(9, 'Dicaprio', 'dicap@mail.com', 32, '23', '1661909006', '', '', '', '0'),
(10, 'jordan', 'jor@gmail.com', 12, 'de', '1661909310', '', '', '', '0'),
(11, 'jolie', 'jolie@jolie.com', 1000245600, '2', '1662046482', 'H', 'RDC', '', '0'),
(12, 'blackm', 'black@mail.com', 982796400, '3', '1662177390', 'Masculin', 'paris', 'photo1.jpg', 'Cool bro');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
