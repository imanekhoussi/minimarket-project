-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 24 jan. 2023 à 16:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monoshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(33, 'sara', 'sara@admin.com', 'sara123');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catégorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `catégorie`) VALUES
(1, 'beauty&makeup'),
(2, 'men'),
(3, 'accessories'),
(5, 'women');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`, `cat_id`) VALUES
(1, 'https://www.mid-jp.com/imgs/d/p/itemPhoto/resize.810xa&quality.60&preset.drawing/580847b54005739c11799db1f92e2fee.webp', ' Cargo Pants', 45, 'Cargo Pants\r\nShort or long: which do you prefer? Enjoy both styles with these two way easy cargo pants, which feature a zip around each knee that allow you to lengthen or shorten as you see fit. Lined with breathable mesh, these big and tall cargo pants also offer pockets on both the sides and back as well as an adjustable drawcord hem that allows for easy resizing.', 2),
(2, 'https://sites.create-cdn.net/siteimages/28/4/9/284928/15/7/9/15798435/919x1208.jpg?1505296014', 'red dress', 20, 'red dress\r\nSarin Mathews Womens Off The Shoulder Short Sleeve High Low Cocktail Skater Dress', 5),
(3, 'http://cdn.shopify.com/s/files/1/1417/8980/products/Full-Grain-leather-shoes.jpg?v=1664179085', ' Leather Formal Shoes For Men', 40, 'Leather Formal Shoes For Men\r\nArticle - Lars Black\r\nOutside - Full Grain Leather\r\nInside - Pure Leather\r\nStyle - Lace up Derby\r\nWarranty - Six Months against Manufacturing defect\r\nColor - Black\r\nSole - TPR \r\nHeel Height - 2 cm\r\nInsole - Very Soft (Memory Foam)\r\nCare - Use normal black polish to clean your shoes\r\nWeight - Approx 800 Grams (Light weight)\r\nMade in India', 2),
(5, 'https://cdn.shopify.com/s/files/1/0671/0621/products/Oxford_Cava_Front_75135244-b6a8-44d0-98f6-902e1e76139d_1200x.jpg?v=1661424891', 'SLIM FIT CASUAL SHIRT', 10, 'SLIM FIT CASUAL Shirt\r\nSlim fit\r\nLong sleeves\r\nSolid design\r\nDurable and comfortable stitching\r\nFabric: 100% Cotton', 2),
(6, 'https://clutchtotebags.com/wp-content/uploads/2018/04/The-Circle-Bag-Clutch-Leather-HandBag-Crossbody-Leather-Bags-for-Women-Shoulder-bag-leather-with-circle-handle-zipper-WINE-RED-.jpg\r\n\r\n', 'hand bag', 59, 'red hand bag...', 3),
(7, 'https://www.zinabel.ma/5863-home_default/mascara-lash-princess-false-lash-effect-waterproof-essence.jpg', 'Mascara Lash Princess', 8, 'Mascara Lash Princess\r\n12 ml\r\nLe mascara idéal pour tous les modes de vie hyperactifs. Le sport, la piscine, les larmes, ce mascara peut tout endurer et votre maquillage restera absolument impeccable.', 1),
(8, 'https://i.insider.com/59aebd71b065da3b008b4ab7?width=1000&format=jpeg&auto=webp', 'Hills Stick Foundation', 25, 'Hills Stick Foundation\r\nThe Anastasia Beverly Hills Stick Foundation is a no-mess alternative for those who don\'t want to bother with liquid.', 1),
(9, 'https://n.nordstrommedia.com/id/3e8ec79f-0d4b-40d2-a619-62a28c7a9fe7.jpeg?h=472&w=308', 'gold necklace', 12, 'gold necklace\r\nTreat yourself or someone special to 18-karat gold necklaces and bracelets personalized with up to five diamond-encrusted charms.', 3),
(10, 'https://n.nordstrommedia.com/id/sr3/0e6fa481-0aa1-46a8-9ec3-b5bb02a7b468.jpeg?h=365&w=240&dpr=2', 'sunglasses for women', 8, 'sunglasses for women\r\nAn eye-catching silhouette defines sweet sunglasses with retro appeal.', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`cat_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `test` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
