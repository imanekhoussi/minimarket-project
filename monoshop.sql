-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 06:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catégorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catégorie`) VALUES
(1, 'beauty&makeup'),
(2, 'men'),
(3, 'accessories'),
(5, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
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
-- Dumping data for table `produits`
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
(10, 'https://n.nordstrommedia.com/id/sr3/0e6fa481-0aa1-46a8-9ec3-b5bb02a7b468.jpeg?h=365&amp;w=240&amp;dpr=2', 'sunglasses for women', 8, 'sunglasses for women\r\nAn eye-catching silhouette defines sweet sunglasses with retro appeal.', 3),
(11, 'prodles bagues6.jpg', 'Bague ouverte à détail cœur', 1, 'Sexe:	Femme,Couleur:	Or jaune,Tissu/matériel:	Alliage de zinc,Style:	À la mode,détails:Cœur', 3),
(12, '-0', 'Bague avec strass et infini', 1, 'Sexe:	Femme,Couleur:	Argent,Tissu/matériel:	Cuivre', 3),
(13, 'prodles bagues4.jpg', 'Bague ouverte avec strass', 1, 'Sexe: Femme,Couleur:	Argent,Tissu/matériel:	Cuivre,détails:	Strass', 3),
(14, 'prodles bagues1.jpg', 'Bague ouverte ajouré', 2, 'Sexe:	Femme,Couleur:Argent,Tissu/matériel:Acier inoxydableStyle:	À la modedétails:	maille', 3),
(15, 'prodles bagues2.jpg', 'Bague ouverte en alliage', 3, 'Sexe:	Femme, Couleur:	Blanc, Tissu/matériel:	plastique ,Style:	À la mode', 3),
(16, 'prodles bagues3.jpg', 'Bague ouverte rectangle', 3, 'Sexe:	Femme ,Couleur:	Multicolore ,Tissu/matériel:	Alliage de zinc ,Style:	À la mode ,détails:	Géométrique', 3),
(17, 'prodles bagues7.jpg', 'Bague ouverte minimaliste', 4, 'Couleur:	Argent , Tissu/matériel:	Fer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `billing_info` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `role` enum('admin','client') NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nom`, `prenom`, `email`, `motdepasse`, `shipping_address`, `billing_info`, `phone_number`, `role`) VALUES
(1, 'sara', 'wardi', 'sara@admin.com', 'sara', '', NULL, NULL, 'admin'),
(3, 'sara', 'wardi', 'sara@mail.com', 'sara123', '', NULL, NULL, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `test` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
