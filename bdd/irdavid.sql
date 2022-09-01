-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 06:25
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
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `stamp` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`id`, `title`, `description`, `image`, `stamp`, `link`) VALUES
(1, 'NRA', 'Vente produit', 'photo2.png', '1662002272', 'http://localhost/irdav/'),
(2, 'Lorem ipsum dolor, s', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste, reiciendis, repellendus ill', 'IMG_1117_by_CedricMuteya.jpg', '1662002634', 'http://localhost/irdav/'),
(5, 'John ripper', 'Vente produit', 'photo1.png', '1662005398', 'http://localhost/irdav/');

-- --------------------------------------------------------

--
-- Structure de la table `site_infos`
--

CREATE TABLE `site_infos` (
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `stamp` varchar(50) NOT NULL,
  `slogan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `site_infos`
--

INSERT INTO `site_infos` (`name`, `logo`, `id`, `stamp`, `slogan`) VALUES
('There are', 'IMG_3376.JPG', 1, '1661999663', 'Merci pour votre soutien'),
('Franky', 'IMG_3376.JPG', 2, '1661999984', 'Merci pour votre soutien'),
('Lover', 'IMG_3276.JPG', 3, '1662000063', 'Lade'),
('FollowMe', 'IMG_3376.JPG', 4, '1662000271', 'Merci pour votre soutien'),
('MeetMe', 'AdminLTELogo.png', 5, '1662001828', 'Take over'),
('JoinUs', 'avatar.png', 6, '1662004204', 'Think big and you\'ll be biggest one day');

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
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
