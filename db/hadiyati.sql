-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:4408
-- Généré le : lun. 06 juin 2022 à 10:42
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hadiyati`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `quantity`, `ordering`) VALUES
(1, 'anniversaire', 'anniversaire', 'bestBirthday.svg', 0, 1),
(2, 'flowers', 'flowers', 'betFlowers.svg', 0, 2),
(3, 'copines', 'copines', 'bestCopines.svg', 0, 0),
(4, 'mariage', 'mariage', 'bestMariage.svg', 0, 0),
(5, 'personnalisé', 'personnalisé', 'bestPersonnalise.svg', 0, 0),
(6, 'l\'amour', 'l\'amour', 'betLove.svg', 0, 0),
(8, 'all', 'all', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `localisation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cities`
--

INSERT INTO `cities` (`id`, `name`, `image`, `localisation`) VALUES
(1, 'Agadir', 'agadirCity.svg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55066.31061772116!2d-9.57715666875!3d30.389453600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c9eb2db04747%3A0x918fcf764734ce42!2sSela%20Park%20Agadir!5e0!3m2!1sfr!2sma!4v1654433652263!5m2!1sfr!2sma'),
(2, 'Tanger', 'tangerCity.svg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25894.03203859625!2d-5.8732779843750045!3d35.78141860000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c789bd618661d%3A0x87aff69d2a2c175f!2sSocco%20Alto%20mall!5e0!3m2!1sfr!2sma!4v1654434112562!5m2!1sfr!2sma'),
(3, 'Rabat', 'rabatCity.svg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52930.88164748947!2d-6.895806082964373!3d33.98790740786691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c89d87752c9%3A0xfa1d80a264d4ba2b!2sArribat%20Center!5e0!3m2!1sfr!2sma!4v1654434161492!5m2!1sfr!2sma'),
(4, 'Casa', 'casaCity.svg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106400.6737978885!2d-7.6840190536631345!3d33.5528292455049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd6a62883565%3A0x3b082eb3bec7552a!2sTachfine%20Center!5e0!3m2!1sfr!2sma!4v1654434198673!5m2!1sfr!2sma'),
(5, 'Marakech', 'marakech.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54357.54258840451!2d-8.057717549790347!3d31.624364358360758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeef0dcc23d91%3A0x735474c845c84dbd!2sM%C3%A9nara%20Mall!5e0!3m2!1sfr!2sma!4v1654434252167!5m2!1sfr!2sma');

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'orange'),
(4, 'yellow'),
(5, 'black'),
(6, 'white');

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `state` enum('enCoureF','confirmer','enCoure','livraison') NOT NULL DEFAULT 'enCoureF',
  `total` float NOT NULL,
  `tel` varchar(30) NOT NULL,
  `adress` text NOT NULL,
  `ville` varchar(100) NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`id`, `id_user`, `state`, `total`, `tel`, `adress`, `ville`, `updated_at`, `created_at`) VALUES
(25, 3, 'enCoureF', 15, '0343949302', 'r12 D12', 'El Jadida', '2022-06-04', '2022-06-04');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(160) NOT NULL,
  `object` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `type_contact` int(11) NOT NULL,
  `send_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `name`, `description`, `image`, `quantity`, `ordering`) VALUES
(1, 'packages', 'packages', '', 0, 0),
(2, 'casing', 'casing', '', 0, 0),
(3, 'produit', 'produit', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `src` varchar(200) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `src`, `id_produit`) VALUES
(1, 'Santa-HAt-Lights 1.png', 1),
(2, '217b4_512 1.png', 2),
(3, 'images - 2022-03-23T100525.918.png', 3),
(4, 'papier_cadeau_faites_votre_propre_personnalisat.png', 4),
(5, 'm_big_110-03-626-08 1.png', 5),
(6, '0148196_heart-shape-.png', 6),
(7, 'national-day-delight-with-roses_1 1.png', 7),
(8, 'a-vase-arrangement-of-red-roses-with-baby-breath-fa21618-004 1.png', 8),
(9, 'clock-R.png', 9),
(10, 'me-you-romantic-teddy-.png', 10),
(11, 'Custom-Logo-PrintedPackage-Boxes (1).png', 3),
(12, '719HSE3ogML.png', 6),
(13, 'heart-baby-pillow-500x500.png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `modes`
--

CREATE TABLE `modes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modes`
--

INSERT INTO `modes` (`id`, `name`) VALUES
(1, 'Maroc'),
(2, 'Espana'),
(3, 'France'),
(4, 'American');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descritpion` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `id_color` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_country_mode` tinyint(4) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `num_love` int(11) NOT NULL,
  `old_price` float NOT NULL DEFAULT 0,
  `background` varchar(10) NOT NULL DEFAULT 'red'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `descritpion`, `price`, `id_color`, `created_at`, `id_country_mode`, `id_group`, `id_categorie`, `num_love`, `old_price`, `background`) VALUES
(1, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 5, 1, '2022-05-15 15:46:56', 1, 3, 1, 0, 0, '#C32429'),
(2, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 15, 2, '2022-05-15 15:49:24', 2, 3, 1, 0, 0, '#E1555B'),
(3, 'Bloss 1 om Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 150, 3, '2022-05-15 15:49:24', 3, 1, 8, 0, 0, '#CDAB84'),
(4, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 153, 3, '2022-05-15 15:49:24', 1, 2, 8, 0, 0, '#EDB9B5'),
(5, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 40, 4, '2022-05-15 15:49:24', 2, 3, 8, 0, 0, '#FEE7AE'),
(6, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 15, 2, '2022-05-15 15:49:47', 1, 3, 8, 0, 0, '#E82830'),
(7, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 150, 3, '2022-05-15 15:49:47', 1, 3, 2, 0, 0, '#72910A'),
(8, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 153, 3, '2022-05-15 15:49:47', 2, 3, 2, 0, 0, '#ED042F'),
(9, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 40, 4, '2022-05-15 15:49:47', 1, 3, 8, 0, 0, '#A4B39A'),
(10, 'Blossom Gloss à lèvres hydratant en tube, parfum cerise', 'Blossom Gloss à lèvres hydratant en tube, parfum cerise Blossom Gloss à lèvres hydratant en tube, parfum cerise', 15, 2, '2022-05-15 15:50:10', 1, 3, 1, 0, 0, '#F9DBEB');

-- --------------------------------------------------------

--
-- Structure de la table `productscommands`
--

CREATE TABLE `productscommands` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `command_id` int(11) NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `productscommands`
--

INSERT INTO `productscommands` (`id`, `id_product`, `quantity`, `price`, `command_id`, `updated_at`, `created_at`) VALUES
(15, 2, 1, 15, 25, '2022-06-04', '2022-06-04');

-- --------------------------------------------------------

--
-- Structure de la table `type_contacts`
--

CREATE TABLE `type_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(20) NOT NULL,
  `actived` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `salary_level` float NOT NULL,
  `ville` varchar(100) NOT NULL,
  `adress` text NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `birthday`, `tel`, `actived`, `created_at`, `salary_level`, `ville`, `adress`, `firstname`, `lastname`, `updated_at`) VALUES
(3, 'idrissaithadou@gmail.com', '$2y$10$5iDHZr87cdfUBHD57WMBsuNA9RkUb/Q9A8OVrZkZ5hhyyMfsH9SXe', 'idrissfg ait haddou', '2022-06-29', '0343949302', 0, '2022-06-03 22:01:21', 0, '', '', 'idrissfg', 'ait haddou', '2022-06-04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modes`
--
ALTER TABLE `modes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productscommands`
--
ALTER TABLE `productscommands`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_contacts`
--
ALTER TABLE `type_contacts`
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
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `modes`
--
ALTER TABLE `modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `productscommands`
--
ALTER TABLE `productscommands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `type_contacts`
--
ALTER TABLE `type_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
