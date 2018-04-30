-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 30 avr. 2018 à 15:55
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `content` longtext NOT NULL,
  `summary` text NOT NULL,
  `is_published` tinyint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `category_id`, `title`, `created_at`, `content`, `summary`, `is_published`, `image`) VALUES
(1, 1, 'NIKE AIR ZOOM PEGASUS ', '2018-03-22', 'Parfaite pour les novices comme pour les coureurs expérimentés, la chaussure de running Nike Air Zoom Pegasus  pour Homme incorpore une version revisitée et légère du Flymesh, qui permet d\'empêcher la surchauffe lorsque vous courez.', 'Chaussure de running pour Homme', 1, '6bbadcbccd7d4225b4012122b7ba24ff.jpg'),
(2, 1, 'NIKE AIR ZOOM PEGASUS ', '2018-03-23', 'Parfaite pour les novices comme pour les coureurs expérimentés, la chaussure de running Nike Air Zoom Pegasus  pour Homme incorpore une version revisitée et légère du Flymesh, qui permet d\'empêcher la surchauffe lorsque vous courez.', ' Chaussure de running pour Homme', 1, 'a629203aa06ed57e31cacba62307b5e0.jpg'),
(3, 2, 'NIKE SPORTSWEAR ICONIC ', '2018-03-23', 'Le tee-shirt Jordan Sportswear Iconic Jumpman pour Homme arbore des détails distinctifs sur un tissu 100 % coton pour un confort longue durée.\r\n\r\n', 'Tee-shirt pour Homme', 1, '1013eb3020a76ffe47673a04a9979d31.jpeg'),
(4, 3, ' SURVETEMENT NIKE ', '2018-03-26', 'Survêtement Nike Sportwear', 'Survêtement Homme', 1, '1cf64fbbb363c0c99fbcc249b3db331a.jpg'),
(5, 1, 'NIKE AIR ZOOM PEGASUS ', '2018-03-26', 'Basket Nike très confortable', 'Chaussure de running pour Homme', 1, 'ecceb470db4ebb9230199425e15d2af9.jpg'),
(6, 1, 'Basket nike', '2018-04-12', 'va vous rendre très confortable', '', 1, '357a55386eb213a02a36fff132d2d494.jpg'),
(7, 4, 'Canada Goosse', '2018-04-30', 'bonnet 100%cotton GRIS', '', 1, '3a5c9d9e8f5c62c5509c6285cce5f2ad.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(1, 'Basket', '', ''),
(2, 'Haut', '', ''),
(3, 'Bas', '', ''),
(4, 'Accessoire', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'tourelle', 150),
(2, 'tourelle 2', 200);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  `adresse` text NOT NULL,
  `mobile` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `is_admin`, `adresse`, `mobile`) VALUES
(1, 'nabil', 'nabil', 'nabil@hotmail.fr', 'azertyuiop', 1, '', '0'),
(3, 'dada', 'dada', 'dada@hotmail.fr', 'azerty', 0, '12 rue micheline paris 75001', '0'),
(5, 'a', 'a', 'a@z', 'a', 0, 'a', '0'),
(6, 'titi', 'titi', 'a@z.com', 'aaa', 0, 'AZERTGGHSJNSBH', ''),
(7, 'a', 'a', 'a@com', 'a', 0, 'aaa', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
