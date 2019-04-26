-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 11:51
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marmite`
--

-- --------------------------------------------------------

--
-- Structure de la table `experts`
--

CREATE TABLE `experts` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `specialiste` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experts`
--

INSERT INTO `experts` (`id`, `nom`, `specialiste`, `description`, `image`) VALUES
(1, 'Yves Spenser', 'architecte ', '	\r\ntechnicien spécialisé dans l\'art de la conception des bâtiments', 'ar.jpg'),
(2, 'Novak Kenett', 'géotechnicien', 'Un géotechnicien teste la résistance des sols avant la construction d\'un bâtiment ou d\'un port. Une reconnaissance du terrain qui permet d\'éviter les risques d\'écroulement dûs aux glissements de sol', 'g.jpg'),
(3, 'Archile de la Monture', 'Maçon', 'professionnel en maçonnerie', 'mac.jpg'),
(4, 'Jules Leroy', 'Ingenieur en bâtiments', 'L\'ingénieur en bâtiment conçoit l\'avant-projet, le prédimensionnement ainsi que le projet, son dimensionnement définitif et ses variantes, dans le respect des normes en vigueur. Il procède également à des tests sur les différents éléments et détermine les procédés techniques à utiliser', 'po.jpg'),
(10, 'Genevièvre de La Toure', 'Décoratrice', 'Pour toutes vos décorations de chaque pièce, nous sommes disponibles pour vous', 'dec.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`id`, `comment`, `photo`) VALUES
(1, '                      \r\n                    ', ''),
(2, '                      \r\n  bbbbbbbbbbbbbbb                  ', 'Capture d’écran (10).png'),
(3, '                      \r\n                 nnnnnnnnnnnnnnnnnnn   ', 'Capture d’écran (6).png');

-- --------------------------------------------------------

--
-- Structure de la table `maquette`
--

CREATE TABLE `maquette` (
  `id` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `commune` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `contact`, `commune`, `email`, `password`) VALUES
(1, 'yohou', 'eunice', '78596325', 'baby', 'eunice.touto@gmail.com', 'jojo'),
(2, 'jojo', 'Paghj', '85969685', 'baby', 'eunice.priscille@gmail.co5585', 'lom'),
(3, 'yohou', 'eunice', '78596325', 'baby', 'eunice.priscille@gmail.com', 'mpmp'),
(4, 'yohou', 'eunice', '78596325', 'baby', 'eunice.priscille@gmail.com', 'mpmp'),
(5, 'yohou', 'eunice', '78596325', 'baby', 'eunice.priscille@gmail.com', 'jojo'),
(6, 'yohou', 'eunice', '78596325', 'baby', 'eunice.priscille@gmail.com', 'jojo'),
(7, 'yohou', 'eunice', '78596325', 'baby', 'eunice.touto@gmail.com', 'jojo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maquette`
--
ALTER TABLE `maquette`
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
-- AUTO_INCREMENT pour la table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `maquette`
--
ALTER TABLE `maquette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
