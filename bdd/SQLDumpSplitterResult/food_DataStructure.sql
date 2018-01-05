-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 jan. 2018 à 12:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentsrecette`
--

DROP TABLE IF EXISTS `commentsrecette`;
CREATE TABLE IF NOT EXISTS `commentsrecette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments_user_recette`
--

DROP TABLE IF EXISTS `comments_user_recette`;
CREATE TABLE IF NOT EXISTS `comments_user_recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_recette` (`id_recette`),
  KEY `id_comment` (`id_comment`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text,
  `generic_name` text,
  `quantity` text,
  `brands` text,
  `brands_tags` text,
  `categories_fr` text,
  `labels_fr` text,
  `countries_fr` text,
  `ingredients_text` text,
  `allergens_fr` text,
  `traces_fr` text,
  `additives_n` text,
  `additives_fr` text,
  `nutrition_grade_fr` text,
  `states_fr` text,
  `main_category_fr` text,
  `image_url` text,
  `image_small_url` text,
  `energy_100g` text,
  `energy-from-fat_100g` text,
  `fat_100g` text,
  `saturated-fat_100g` text,
  `cholesterol_100g` text,
  `carbohydrates_100g` text,
  `sugars_100g` text,
  `sucrose_100g` text,
  `glucose_100g` text,
  `fructose_100g` text,
  `lactose_100g` text,
  `maltose_100g` text,
  `fiber_100g` text,
  `proteins_100g` text,
  `salt_100g` text,
  `sodium_100g` text,
  `alcohol_100g` text,
  `vitamin-a_100g` text,
  `vitamin-d_100g` text,
  `vitamin-e_100g` text,
  `vitamin-k_100g` text,
  `vitamin-c_100g` text,
  `vitamin-b1_100g` text,
  `vitamin-b2_100g` text,
  `vitamin-pp_100g` text,
  `vitamin-b6_100g` text,
  `vitamin-b9_100g` text,
  `vitamin-b12_100g` text,
  `calcium_100g` text,
  `magnesium_100g` text,
  `zinc_100g` text,
  `caffeine_100g` text,
  `taurine_100g` text,
  `nutrition-score-fr_100g` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23126 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `product_name`, `generic_name`, `quantity`, `brands`, `brands_tags`, `categories_fr`, `labels_fr`, `countries_fr`, `ingredients_text`, `allergens_fr`, `traces_fr`, `additives_n`, `additives_fr`, `nutrition_grade_fr`, `states_fr`, `main_category_fr`, `image_url`, `image_small_url`, `energy_100g`, `energy-from-fat_100g`, `fat_100g`, `saturated-fat_100g`, `cholesterol_100g`, `carbohydrates_100g`, `sugars_100g`, `sucrose_100g`, `glucose_100g`, `fructose_100g`, `lactose_100g`, `maltose_100g`, `fiber_100g`, `proteins_100g`, `salt_100g`, `sodium_100g`, `alcohol_100g`, `vitamin-a_100g`, `vitamin-d_100g`, `vitamin-e_100g`, `vitamin-k_100g`, `vitamin-c_100g`, `vitamin-b1_100g`, `vitamin-b2_100g`, `vitamin-pp_100g`, `vitamin-b6_100g`, `vitamin-b9_100g`, `vitamin-b12_100g`, `calcium_100g`, `magnesium_100g`, `zinc_100g`, `caffeine_100g`, `taurine_100g`, `nutrition-score-fr_100g`) VALUES
(1, 'Crème dessert chocolat', '', '', 'Ferme De La Frémondière', 'ferme-de-la-fremondiere', '', '', 'France', 'Lait entier, sucre, amidon de maïs, cacao, Agar agar.', '', '', '1', 'E406 - Agar-agar', 'b', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '0', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(2, 'Compote de poire', '', '', 'Crous', 'crous', '', '', 'France', 'Glucid08 (g) 24,0 Sucrag Simplo (g) Sodium (mg)', '', '', '0', '', 'b', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '657', '', '0', '0', '', '36', '27', '', '', '', '', '', '3.6', '0.6', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(3, 'Farine de blé noir', '', '1kg', 'Ferme ty Rnao', 'ferme-t-y-r-nao', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'BAguette bressan', '', '', 'Crousresto', 'crousresto', '', '', 'France', 'Bâguette Bressan Pain baguette 46,2%, fqrine de BLÉ, eau, sel, levure, GLUTEN, farine de BLE malté, levure désactivée, acide ascorbique, Garniture 53,8%: filet de poulet braisé 34,3% (filet de poulet 82%, eau, acidifiant : lactate de potassium et acétate de sodium, amidon modifié de manioc, sel, dextrose glucose, arômes, gélifiants E407ayaM$xydant : érythèfbate de sodium, colorant : grafnel • origine UE), tomateN25x8%, OEUF dur 22,70/ , salade 17,20/ O', '', '', '4', 'E14XX - Amidons modifiés,E270 - Acide lactique,E300 - Acide ascorbique,E326 - Lactate de potassium', 'a', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '669', '', '2.2', '0.5', '', '25.2', '0.6', '', '', '', '', '', '1.6', '9.5', '0.358', '0.140944881889764', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-5'),
(5, 'Salade fraîcheur 3 fromages ', '', '', 'Crous de nantes', 'crous-de-nantes', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'NaturaBlue Original', '', '250 ml', 'Natura4Ever', 'natura4ever', 'Compléments alimentaires', 'Fabriqué en France', 'France', 'Glycérine dorigine naturelle (stabilisant), spiruline (Spirulina maxima) dorigine naturelle, extrait de fruits de Camu Camu (Myrciaria dubia), arôme naturel de citron vert.', '', '', '1', 'E422 - Glycérol', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Compléments alimentaires', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.5', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Filet de bœuf', '', '2.46 kg', '', '', 'Filet-de-boeuf', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite complétée,Caractéristiques à compléter,Catégories complétées,Marques à compléter,Emballage complété,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', 'Filet-de-boeuf', 'http://fr.openfoodfacts.org/images/products/000/000/002/4600/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/000/002/4600/front.3.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Naturakrill original', '', '60 capsules', 'Natura4ever', 'natura4ever', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Twix x2', '', '', '', '', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,Caractéristiques à compléter,Catégories à compléter,Marques à compléter,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à envoyer', '', 'http://fr.openfoodfacts.org/images/products/000/000/003/9259/front.6.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/000/003/9259/front.6.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Raviolini au Fromage de chèvre et Pesto', '', '300g ', 'Comme J’Aime', 'comme-j-aime', 'Plats préparés,Plats préparés à réchauffer au micro-ondes', '', 'France', '', '', '', '', '', 'b', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', 'Plats préparés', '', '', '455', '', '4.2', '2.1', '', '12.5', '1.4', '', '', '', '', '', '1.8', '4.4', '0.6', '0.236220472440945', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(12, 'Bledine', '', '', 'Bledina', 'bledina', '', '', 'France', 'Céréales 93,4% (Farine de blé (gluten), Farine de blé hydrolysée (gluten), Farine de seigle 5,0% (gluten), Farine de riz Sucre Antioxydant: Acide ascorbique Vitamine BI. Traces de soia, lait', '', '', '1', 'E300 - Acide ascorbique', 'a', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos validées,Photos envoyées', '', '', '', '1640', '', '1.4', '0.2', '', '82.7', '20.5', '', '', '', '', '', '3.4', '10.4', '0.01', '0.00393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-1'),
(13, 'lentilles vertes ', '', '1 kg ', 'Bertrand Lejeune', 'bertrand-lejeune', 'Aliments et boissons à base de végétaux,Aliments dorigine végétale,Céréales et pommes de terre,Légumineuses et dérivés,Légumineuses,Graines,Graines de légumineuses,Légumes secs,Lentilles,Lentilles vertes', 'Bio,Bio européen,AB Agriculture Biologique', 'France', 'lentilles vertes', '', '', '0', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', 'Aliments et boissons à base de végétaux', 'http://fr.openfoodfacts.org/images/products/000/000/520/0016/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/000/520/0016/front.3.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Root Beer', '', '33 cl e', 'A&W', 'a-w', 'Boissons,Boissons gazeuses,Sodas,Boissons sucrées,Root-beers', 'Kascher,Contient-des-ogm', 'France', 'Eau gazéifiée, sirop de maïs à haute teneur en fructose, colorant : caramel, conservateur : E211, arômes naturels et artificiels, moussant : E999.', '', '', '3', 'E150 - Caramel,E211 - Benzoate de sodium,E999 - Extraits de quillaia', 'e', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Sodas', 'http://fr.openfoodfacts.org/images/products/000/000/702/0254/front.16.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/000/702/0254/front.16.200.jpg', '215', '', '0', '0', '', '14.2', '13.6', '', '', '', '', '', '0', '0', '0.0616', '0.0242', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '18'),
(15, 'Biscuits sablés fourrage au cacao', 'Biscuits sablés déclassés fourrage au cacao', '1 kg', 'St Michel', 'st-michel', 'Snacks sucrés,Biscuits et gâteaux,Biscuits,Sablés', 'Point Vert', 'France', 'Sucre, farine de _Blé_, graisse et huiles végétales (karité, colza et tournesol), cacao maigre en poudre 7%, sirop de glucose, dextrine, _Beurre_ concentré, _Oeufs_, pâte de _Noisette_, pâte de cacao, émulsifiants : lécithines (colza et tournesol), sel, poudre à lever : carbonates dammonium, arômes.', '', 'Fruits à coque,Graines de sésame,Soja', '3', 'E1400 - Dextrines,E322 - Lécithines,E503 - Carbonates dammonium', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Sablés', 'http://fr.openfoodfacts.org/images/products/000/000/773/0009/front.6.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/000/773/0009/front.6.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'Gotta-have grape, seriously strawberry flavor', 'Bonbons acidulés Raisin Fraise', '46,7 g', 'Nerds', 'nerds', 'Snacks sucrés,Confiseries,Bonbons', 'Sans arômes artificiels,Contient-des-ogm', 'France', 'Dextrose, sucre, sirop de glucose, acidifiant : acide malique, arômes artificiels, agent denrobage : E903, colorants : E133, E132, E129, E102, E110.', '', 'Œufs', '7', 'E102 - Tartrazine,E110 - Jaune orangé S,E129 - Rouge allura AC,E132 - Indigotine carmin dindigo,E133 - Bleu brillant FCF,E296 - Acide malique,E903 - Cire de carnauba', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Bonbons', '', '', '1667', '', '0', '0', '', '93.3', '93.3', '', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14'),
(17, 'Thé noir aromatisé violette et fleurs', '', '', 'Alice Délice', 'alice-delice', 'Boissons,Boissons non sucrées', '', 'France', 'Thé noir aromatisé à la fleur de violette et parsemé de bleuets', '', '', '0', '', 'c', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories complétées,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos validées,Photos envoyées', 'Boissons', '', '', '17', '', '0.1', '0.1', '', '0.1', '0.1', '', '', '', '', '', '', '0.1', '0.001', '0.000393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
(18, 'Thé de Noël aromatisé orange-cannelle', '', '75 g', 'Alice Délice', 'alice-delice', 'Aliments et boissons à base de végétaux,Boissons,Aliments dorigine végétale,Boissons chaudes,Boissons à base de végétaux,Infusions,Thés,Thés noirs,Thés aromatisés,Thés noirs aromatisés,Boissons non sucrées', '', 'France', 'Thé noir de Chine, zestes doranges 7,5 %, arômes naturels (cannelle 4,7 %, orange 4,7 %, poudre de cannelle 3,9 %).', '', 'Œufs,Gluten,Lait,Moutarde,Fruits à coque,Graines de sésame,Soja,Anhydride sulfureux et sulfites', '0', '', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Thés', 'http://fr.openfoodfacts.org/images/products/000/001/009/0206/front.5.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/001/009/0206/front.5.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Sirops pour ganache macarons', '', '4 x 5 cl', 'Alice Délice', 'alice-delice', 'Sirops,Sirops-pour-ganache', '', 'France', 'Sirop saveur pistache 5 cl : sirop 99,16 % (sucre cristallisé, eau), arôme, acidifiant : acide citrique E330, denrée alimentaire colorante (concentrés de carthame, pomme), colorant : mélange dadditifs : E171, E211, E131. Sirop saveur framboise 5 cl : sirop 93,98 % (sucre, eau), denrée alimentaire colorante (concentrés de patate douce, cerise, pomme, radis, carthame), arôme naturel, acidifiant : acide citrique E330, colorant : mélange dadditifs : E171, E211. Sirop saveur citron 5 cl : sirop 98,86 % (sucre cristallisé, eau), arôme naturel, acidifiant : acide citrique E330, denrée alimentaire colorante (concentré de pomme, carthame), colorant : mélange dadditifs : E171, E211. Sirop saveur violette 4 cl : sirop 88,40 % (sucre, eau), arôme, acidifiant : acide citrique E330, denrée alimentaire colorante (concentré de cassis, carotte, pomme), colorant : mélange dadditifs : E131, E211, E171.', '', '', '4', 'E131 - Bleu patenté V,E171 - Oxyde de titane,E211 - Benzoate de sodium,E330 - Acide citrique', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Sirops', 'http://fr.openfoodfacts.org/images/products/000/001/012/7735/front.7.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/001/012/7735/front.7.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'Preparation mug cake chocolat-caramel au beurre salé', '', '', 'Alice Délice', 'alice-delice', '', '', 'France', 'farine de blé (gluten), sucre de canne, pépites de chocolat n Ir à 50 % de cacao minimum 19,9 % (pâte de cacao, sucre de canne, beurre de cacao, émulsifiant : lécithine de soja), cacao biologique en poudre 7,9 0%, caramel tendre dIsigny au beurre salé 5,9 % (sirop de glucose, sucre, lait entier en salé Isigny AOP (lait), eau, sel de Guérande, arôme naturel vanille, poudre à lever : bicarbonate de soude, émulsifiant : sucroesters dacides gras), bicarbonate de soude, diphosphate dissodique. Peut contenir des traces de fruits à coques moutjrde, sésame, gluten, lait, œuf, soja et sulfites.', '', '', '4', 'E322 - Lécithines,E322i - Lécithine,E450 - Sels métalliques de diphosphates,E473 - Sucroester,E500 - Carbonates de sodium,E500ii - Carbonate acide de sodium', 'e', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1632', '', '7', '4.5', '', '70', '42', '', '', '', '', '', '0', '7', '0.975', '0.383858267716535', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '21'),
(21, 'Mini Confettis', '', '', 'Alice Délice', 'alice-delice', '', '', 'France', '', '', '', '', '', 'd', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1753', '', '', '0.8', '', '', '87.7', '', '', '', '', '', '0.9', '0.6', '0.01', '0.00393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14'),
(22, 'Pâte à Sucre', 'Pâte à Sucre - Fondant', '250 g', 'Alice Délice', 'alice-delice', 'Snacks sucrés,Confiseries,en:Decorations,en:Pates-a-sucre', 'Sans gluten', 'France', 'Sucre (74 %), sirop de glucose, huiles et graisses végétales (palme, tournesol, illipé), sirop de sucre inverti, stabilisant : E420ii, eau, humectant : E422, épaississant : E415, émulsifiant : E471, acidifiant : E330, arôme, conservateur.', '', 'Lait,Fruits à coque,Soja', '5', 'E330 - Acide citrique,E415 - Gomme xanthane,E420 - Sorbitol,E420ii - Sirop de sorbitol,E422 - Glycérol,E471 - Mono- et diglycérides dacides gras alimentaires', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Snacks sucrés', '', '', '1720', '', '6.42', '3.53', '', '87.86', '81.67', '', '', '', '', '', '0', '0.03', '0.1', '0.0393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '18'),
(23, 'Praliné Amande Et Noisette', '', '', 'Alice Délice', 'alice-delice', '', '', 'France', '', '', '', '', '', 'd', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '2406', '', '', '2.9', '', '', '50.3', '', '', '', '', '', '3.9', '9.5', '0.003', '0.00118110236220472', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14'),
(24, 'Preparation biscuits cacao/noisette', '', '', 'Alice Delices', 'alice-delices', '', '', 'France', 'farine de riz, sucre, amidon de maïs, cacao (4.8%), farine de noisette arômes, émulsifiants esters polyglycériques dacides gras, monooléate de polyoxyéthylène de sorbitane ; épaississants : gomme guar, carboxyméthylcellu- lose ; poudre à lever : carbonate de sodium; correcteur dacidité . glucono-delta-lactine, sel. Peut contenir des traces de lait œufs, soja et autres fruits à coque.', '', '', '4', 'E412 - Gomme de guar,E433 - Monooléate de polyoxyéthylène de sorbitane,E475 - Esters polyglycériques dacides gras,E500 - Carbonates de sodium,E500i - Carbonate de sodium', 'e', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos validées,Photos envoyées', '', '', '', '1803', '', '24', '13', '', '49', '20', '', '', '', '', '', '', '3.6', '0.4', '0.15748031496063', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20'),
(25, 'Chocolat noir amandes caramelisées', '', '', 'Cyril Lignac', 'cyril-lignac', '', '', 'France', 'DARK CHOCOLATE 61% COCOA MINIMUM (80%) (COCOA BEANS, SUGAR/ COCOA BUTTER, EMULS/FIER[SOYA LECITHIN], NATURAL VANILLA EXTRACT), CARAMELIZED ALMONDS (20%) (ALMONDS (14%)/ SUGAR, WATER/ FLEUR DE SEL). DÉCLARATION NUTRITIONELLE POUR 100g / NUTRITION DECLARATION PER 100g: ENERGIE/ENERGY: 2286KJ/549KCAL MATIÈRES GRASSES/FATS:37g - DONT ACIDES GRAS SATURÉS /OF WICH SATURATED:20g - GLUCIDES/CARBOHYDRATES:39g DONTSUCRES/OF SUGARS.?36g - PROTÉINES/PROTEINS: 9g SEL/SALT.?O/06g Traces possibles dallergènes à déclaration obligatoire excepté céleri, crustacé, mollusque et moutarde. May contain traces of reportable allergens except celery, crustacean, mollusc and mustard. À consommer de préférence avant le:', '', '', '0', '', 'e', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '2297', '', '37', '20', '', '39', '36', '', '', '', '', '', '', '9', '0.06', '0.0236220472440945', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '23'),
(26, 'Côtes du Rhône Villages 2014', '', '75 cl e', 'Union des Vignerons des Cotes du Rhône', 'union-des-vignerons-des-cotes-du-rhone', 'Boissons,Boissons alcoolisées,Vins,Vins français,Vins rouges,Côtes du Rhône,Côtes du Rhône Villages', 'Déconseillé à certaines catégories de personnes,AOP,Fabriqué en France,Déconseillé aux femmes enceintes,Contient des sulfites,Origine France,Triman', 'France', 'Vin rouge, sec. Contient des _sulfites_.', '', '', '0', '', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Boissons', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'Pastilles Vichy Sans Sucres', 'Bonbon Vichy avec édulcorants, parfum menthe', '19 g e', 'Vichy', 'vichy', 'Snacks sucrés,Confiseries,Bonbons,Bonbons-sans-sucres,Pastilles', 'Peu ou pas de sucre,Point Vert,Sans sucre,Avec édulcorants', 'France', 'Édulcorants (Sorbitol, Aspartame), agent denrobage (Sels de magnésium dacides), Extraits des eaux de Vichy (0,3 %), Arôme. consommation excessive peut avoir des effets laxatifs. Contient une source de phénylalanine.', '', '', '2', 'E420 - Sorbitol,E420i - Sorbitol,E951 - Aspartame', 'c', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Bonbons', 'http://fr.openfoodfacts.org/images/products/000/003/005/3014/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/003/005/3014/front.3.200.jpg', '1046', '', '0', '0', '', '95', '0', '', '', '', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3'),
(29, 'M&ms peanut butter', '', '46.2gr', 'M&ms ', 'm-m-s', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'Pepsi, Nouveau goût !', 'Boisson gazeuse rafraîchissante aux extraits naturels de végétaux', '15 cl', 'Pepsi', 'pepsi', 'Boissons,Boissons gazeuses,Sodas,Sodas au cola,Boissons sucrées', '', 'France', 'Eau gazéifiée, sucre, colorant caramel E150d, acidifiant : acide phosphorique, arômes (dont : extraits naturels de végétaux, caféine)', '', '', '2', 'E150d - Caramel au sulfite dammonium,E338 - Acide orthophosphorique', 'e', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Sodas', 'http://fr.openfoodfacts.org/images/products/000/004/060/8754/front.5.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/004/060/8754/front.5.200.jpg', '177', '', '0', '0', '', '10.4', '10.4', '', '', '', '', '', '0', '0', '0.0254', '0.01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13'),
(31, 'Salad Cream Original', '', '425 g', 'Heinz', 'heinz', 'Epicerie,Sauces', 'Végétarien,Sans conservateurs,Sans colorants artificiels,Sans arômes ajoutés', 'France', 'Vinaigre dalcool, eau, huile de pépins de raisin 22%, sucre, farine de maïs, _moutarde_, jaune d’_œuf_ pasteurisé 3%, sel, colorant : riboflavine.', '', '', '1', 'E101 - Riboflavine,E101i - Riboflavine', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Epicerie', '', '', '1215', '', '23.8', '1.8', '', '18.5', '17', '', '', '', '', '', '', '1.3', '1.7', '0.669291338582677', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14'),
(32, 'Ginger Extra Jam Robertsons', '', '', 'Robertson s', 'robertson-s', '', '', 'France', 'Gluc?e-Fructose Syrup CIV, Gerng Aaent. Pectin Acid Gtri Acidity kegulator: Sodium Citrates Prepared With 25g of Fruit Per 1009 Total Sugar content 66g per 100g. NUTRITION INFORMATION', '', '', '1', 'E331 - Citrates de sodium', 'd', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1113', '', '0', '0', '', '65.9', '59', '', '', '', '', '', '', '0.1', '0.1', '0.0393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13'),
(33, 'Duerrs Marmelade Morceaux Fins Orange', '', '', 'Duerr s', 'duerr-s', '', '', 'France', 'Sucre, orahges agent ,llfiant : egulateur citrique, citrate de .mdiurn ; huile dorange douce. Proté ttnsommer de preiÇtt1ite avant l&quot; Voir Sir te A endroit frais et x, à labri de la lumière. AUès ouverture : A au refrigerateur et à conmmmer dans les 6 emaines qui 100g) : Energie : 1265kJ/2%kcal, matière gras : O.lg dont %turees? glucides : 71.9g dont wcre 67.4g ; fibre 3.9g ; Protéine : 0.6g , : Convient aux végetarlens vegans et coeliaques Produit gluten Olttrlbué par ?.IJS NDUKMABKE', '', '', '1', 'E330 - Acide citrique', 'c', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1247', '', '0.1', '0', '', '71.9', '65', '', '', '', '', '', '3.9', '0.5', '0.03', '0.0118110236220472', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8'),
(34, 'Blle Pet 50CL Coca Cola Cherry', '', '', 'Coca-Cola', 'coca-cola', 'Boissons,Boissons sucrées', '', 'France', 'eau azéifiée ; sucre : colorant : acidifiant : E338 ; arômes naturels (dont extraits végétau et caféine). A consommer de préférence avant le : voir', '', '', '1', 'E338 - Acide orthophosphorique', 'e', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories complétées,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', 'Boissons', '', '', '180', '', '0.1', '0.0001', '', '10.7', '10.7', '', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14'),
(35, 'Galette de Pommes de Terre', '', '', 'Bofrost', 'bofrost', 'Surgelés,Plats préparés,Plats préparés surgelés,Rostis', '', 'France', 'Pomme de terre 83 %, amidon de pomme de terre, huile de palme, _œuf_, épices (oignon, curcuma), farine de riz, sel, farine de _blé_, dextrose.', '', '', '0', '', 'b', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories complétées,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos validées,Photos envoyées', 'Surgelés', '', '', '573', '', '3.1', '1.6', '', '24', '0.8', '', '', '', '', '', '2.2', '2.2', '1', '0.393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
(36, 'BoFrost Nudelpfanne', '', '', '', '', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques à compléter,Emballage complété,Quantité à compléter,Nom du produit complete,Photos à envoyer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Crêpes jambon fromage', '', '', 'Bo Frost', 'bo-frost', '', '', 'France', 'Garniture sauce béchamel 60% (eau, jam- bon cuit supérieur 24% (jambon de porc, sel, sirop de glucose, dextrose, antioxydant (ascorbate de sodium), conservateur (nitrite de sodium)), farine de blé, Lait écrémé en poudre, huile de tournesol, emmental 4% (Lait, sel, ferments, coagulant), crème fraîche, comté 0,6% (Lait, ferments, sel, présure), sel, poivre blanc, muscade), pâte 40% (eau, farine de blé, oeuf, lait écrémé en poudre, huile de tournesol, dextrose, sel, sucre). Viande de porc : Origine : France. (Traces de céleri).', '', '', '2', 'E250 - Nitrite de sodium,E301 - Ascorbate de sodium', 'b', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos validées,Photos envoyées', '', '', '', '678', '', '6.6', '1.7', '', '17', '3.7', '', '', '', '', '', '0.9', '8.2', '0.73', '0.28740157480315', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(38, 'Tarte Poireaux Et Lardons', '', '', 'Bo Frost', 'bo-frost', '', '', 'France', '', '', '', '', '', 'd', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1079', '', '', '11', '', '', '1', '', '', '', '', '', '1.4', '7.5', '0.8', '0.31496062992126', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15'),
(39, 'Bresaola', '', '', 'Citterio', 'citterio', '', '', 'France', 'RESAOLA DELI.A VALTELLINA I.G. DE BOEUF SECHEE EN VALTELLLNA INGREDIENTS viande de boeuf, sel, arômes naturels, conservateurs (E250, emballé sous atmosphère protectrice 70g e Valeur S NUtriti0nnelles moyennes pour 100g 652kJ•154kcal Energie A consommer de', '', '', '1', 'E250 - Nitrite de sodium', 'c', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '8', '', '2', '1', '', '0.5', '0.5', '', '', '', '', '', '', '34', '4.3', '1.69291338582677', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5'),
(40, 'Marmite Original Pate A Tartiner 125G', '', '', 'Marmite', 'marmite', '', '', 'France', '40 Ivlarmite original - extrait de levu\\e ,édientg: Extrait de levure, acl. extrait de végétaux,niacine flamine (vitamine BI). dépices (céleri). riboflavine acide folique (Vitamino B9), vitamino B12. tonditions de congervation dutiligatlon: A consommer de préférence AVRIL 2018 N LOT L6281A17S5 A conget-vor dang un t*ndroit frais et aec, Déclaration nutritionnelle (pour 100ml) : Valeur éneraétlque,: 110010-250kc! Xipldeg: 0,1g dont acides qrag gaturég: tracec IGlucideg. 24q dont 395 Fibreg. sel: 9,8g/thiamine: : 0 28mg (500% RDA)/ Niacine: ue: (1250% Vitamine B12: O.015mg = Apporte journaliers recommandé. 000 04370', '', '', '1', 'E375 - Acide nicotinique', 'c', 'A compléter,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1046', '', '1', '0.1', '', '24', '1', '', '', '', '', '', '3.5', '39', '9.8', '3.85826771653543', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9'),
(41, '7Up', 'Boisson gazeuse aux extraits naturels de citron et de citron vert', '33 cl', '7Up,Pepsico', '7up,pepsico', 'Aliments et boissons à base de végétaux,Boissons,Boissons à base de végétaux,Boissons gazeuses,Boissons aux fruits,Sodas,Sodas aux fruits,Sodas au citron,Boissons sucrées', '', 'France', 'Eau gazéifiée, sucre, acidifiants (acide citrique, acide malique), arômes (extraits naturels de citron et de citron vert), correcteur dacidité (citrate de sodium)', '', '', '3', 'E296 - Acide malique,E330 - Acide citrique,E331 - Citrates de sodium', 'e', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Sodas aux fruits', 'http://fr.openfoodfacts.org/images/products/000/008/717/7756/front.5.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/008/717/7756/front.5.200.jpg', '177', '', '0', '0', '', '10.4', '10.4', '', '', '', '', '', '', '0', '0.1', '0.0393700787401575', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13'),
(42, 'Madeleines nature', '', '880 g', 'Bijou', 'bijou', 'Snacks sucrés,Biscuits et gâteaux,Desserts,Gâteaux,Madeleines', '', 'France', 'Farine de _blé_, huile de colza, sucre, _oeufs_ frais 18%, sirop de glucose-fructose, stabilisant : glycérol, poudres à lever : carbonates dammonium, carbonates de sodium, diphosphates (_blé_), sel, émulsifiants : mono et diglycérides dacides gras, _lait_ écrémé en poudre, arôme.', '', 'Fruits à coque,Soja', '5', 'E422 - Glycérol,E450 - Sels métalliques de diphosphates,E471 - Mono- et diglycérides dacides gras alimentaires,E500 - Carbonates de sodium,E503 - Carbonates dammonium', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Gâteaux', '', '', '1900', '', '23', '2.5', '', '55', '26', '', '', '', '', '', '1.5', '6', '0.66', '0.259842519685039', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12'),
(43, 'Terrine de campagne', '', '', '', '', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques à compléter,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à envoyer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Cakes Raisins', 'Pâtisseries aux raisins secs.', '900 g', 'Bijou', 'bijou', 'Snacks sucrés,Biscuits et gâteaux,Desserts,Gâteaux,Cakes-aux-raisins', 'Point Vert,Fabriqué en France', 'France', 'Farine de _blé_, _œufs_ frais, huile de colza, sucre, raisins secs 13% (raisins, huile de colza, dextrose), sirop de glucose-fructose, stabilisant : glycérol, poudres à lever : carbonates d’ammonium - carbonates de sodium - diphosphates (_blé_), sel, _lait_ écrémé en poudre, émulsifiants : mono et diglycérides d’acides gras, arôme naturel dorange.', '', 'Fruits à coque,Soja', '5', 'E422 - Glycérol,E450 - Sels métalliques de diphosphates,E471 - Mono- et diglycérides dacides gras alimentaires,E500 - Carbonates de sodium,E503 - Carbonates dammonium', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Gâteaux', '', '', '1768', '', '19', '2.5', '', '56', '28', '', '', '', '', '', '1.8', '5.8', '0.65', '0.255905511811024', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13'),
(46, 'Cakes aux Fruits', 'Pâtisseries aux fruits confits et aux raisins secs au rhum', '600 g', 'Bijou', 'bijou', 'Snacks sucrés,Biscuits et gâteaux,Desserts,Gâteaux,Pâtisseries,Cakes aux fruits', 'Point Vert,Fabriqué en France', 'France', 'Fruits 37.4% [fruits confits 21,5% [fruits (pastèque, bigarreaux, écorce d’orange), sirop de glucose-fructose, sucre, conservateurs : sorbate de potassium - anhydride sulfureux, colorants : caramel ordinaire - E120, E133, correcteur d’acidité : acide citrique], raisins secs au rhum 15.9%, farine de blé, huile de colza, œufs frais, sucre, sirop de glucose-fructose, stabilisant : glycérol, poudres à lever : carbonates d’ammonium - carbonates de sodium - diphosphates (blé), sel, émulsifiants : mono et diglycérides d’acides gras, lait écrémé en poudre, arôme naturel d’orange. ', '', 'Fruits à coque,Soja', '11', 'E120 - Acide carminique,E133 - Bleu brillant FCF,E150a - Caramel E150a,E202 - Sorbate de potassium,E220 - Anhydride sulfureux,E330 - Acide citrique,E422 - Glycérol,E450 - Sels métalliques de diphosphates,E471 - Mono- et diglycérides dacides gras alimentaires,E500 - Carbonates de sodium,E503 - Carbonates dammonium', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Pâtisseries', '', '', '1670', '', '15', '2', '', '60', '34', '', '', '', '', '', '1.5', '4.9', '0.6', '0.236220472440945', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12'),
(47, 'Chair à saucisse', '', '792 g', 'Sovivo', 'sovivo', 'Viandes,Porc', '', 'France', 'Viandes de porc (86%), eau, acidifiant (E326), sel, dextrose, acidifiant (E263), exhausteur de goût (E621), antioxygène (E316), colorants (E120, E150c), arômes.', '', '', '6', 'E120 - Acide carminique,E150c - Caramel ammoniacal,E263 - Acétate de calcium,E316 - Erythorbate de sodium,E326 - Lactate de potassium,E621 - Glutamate monosodique', '', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Viandes', 'http://fr.openfoodfacts.org/images/products/00003100/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/00003100/front.3.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'Pure Whey Protein Berries & Cream', '', '1 kg', 'Bulk Powders', 'bulk-powders', 'Compléments alimentaires,Compléments pour le Bodybuilding,Protéines en poudre', 'Végétarien,Sans gluten,Sans OGM,Riche en protéines,Qualité supérieure,Triman', 'France', 'Concentré de protéine de _lait_ non dénaturée 82 %, arôme (fruits rouges & crème), stabilisant (gomme xanthane), colorant naturel (rouge betterave), édulcorant (Sucralose), agent dinstantanéisation (lécithine de _soja_ 0.4%).', '', '', '4', 'E162 - Rouge de betterave,E322 - Lécithines,E322i - Lécithine,E415 - Gomme xanthane,E955 - Sucralose', 'd', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Compléments alimentaires', '', '', '1740', '', '8.33', '5', '', '8.67', '8.67', '', '', '', '', '', '0.333', '76.3', '0.37', '0.146', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11'),
(49, 'Financiers aux Amandes', 'Pâtisseries fondantes à la poudre damande.', '660 g (30 pâtisseries)', 'Bijou', 'bijou', 'Snacks sucrés,Biscuits et gâteaux,Desserts,Gâteaux,Pâtisseries,Financiers', 'Point Vert,Fabriqué en France', 'France', 'Sucre, blanc d’_œufs_ frais, poudre d’_amande_ 16.5%, _beurre_ pâtissier, farine de _blé_, _œufs_ frais, sirop de glucose-fructose, stabilisant : glycérol, sel, poudres à lever : carbonates de sodium - diphosphates (_blé_), arôme.', '', 'Fruits à coque,Soja', '3', 'E422 - Glycérol,E450 - Sels métalliques de diphosphates,E500 - Carbonates de sodium', 'e', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Pâtisseries', '', '', '1868', '', '23', '10', '', '51', '39', '', '', '', '', '', '1.7', '8', '0.55', '0.216535433070866', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '22'),
(50, 'Fondants Citron', 'Pâtisseries fondantes à la poudre d’amande et aux pépites au citron.', '660 g (30 étuis individuels)', 'Bijou', 'bijou', 'Snacks sucrés,Biscuits et gâteaux,Desserts,Gâteaux,Pâtisseries,Gateaux-au-citron', 'Point Vert,Fabriqué en France', 'France', 'Sucre, blanc d’_œufs_ frais, poudre d’_amande_ 16.5%, _beurre_ pâtissier, farine de _blé_, pépites au citron 7% (sucre, pomme, pulpe de citron 18.1%*, dextrose, fibres d’ananas, gélifiant : alginate de sodium, correcteurs d’acidité : acide citrique - citrates de potassium, stabilisant : phosphates de calcium, arôme naturel de citron, colorant : curcumine), _œufs_ frais, sirop de glucose-fructose, stabilisant : glycérol, poudre de citron 0.9 % (équivalent à 5% de jus de citron) (jus concentré de citron, maltodextrine), sel, poudres à lever : carbonates de sodium - diphosphates (_blé_), arôme naturel de citron. *% exprimé sur les pépites équivalent à 1.2% sur l’ensemble du produit.', '', 'Fruits à coque,Soja', '8', 'E100 - Curcumine,E330 - Acide citrique,E332 - Citrates de potassium,E341 - Phosphate de calcium dhydrogène,E401 - Alginate de sodium,E422 - Glycérol,E450 - Sels métalliques de diphosphates,E500 - Carbonates de sodium', 'e', 'A vérifier,Complet,Informations nutritionnelles complétées,Ingrédients complétés,Date limite complétée,en:Packaging-code-to-be-completed,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos validées,Photos envoyées', 'Pâtisseries', '', '', '1896', '', '24', '10', '', '50', '37', '', '', '', '', '', '2.5', '8.1', '0.78', '0.307086614173228', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '22'),
(51, 'Beignets framboises', '', '', 'Intermarché', 'intermarche', '', '', 'France', '', '', '', '', '', 'c', 'A compléter,Informations nutritionnelles complétées,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', '', '', '', '1272', '', '', '1.7', '', '', '12.7', '', '', '', '', '', '0', '5.8', '0.7', '0.275590551181102', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6'),
(53, 'Pepsi', '', '33cl', 'Pepsi', 'pepsi', 'Boissons,Boissons gazeuses,Sodas,Boissons sucrées', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,Caractéristiques complétées,Catégories complétées,Marques complétées,Emballage complété,Quantité complétée,Nom du produit complete,Photos à valider,Photos envoyées', 'Sodas', 'http://fr.openfoodfacts.org/images/products/000/088/610/0252/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/088/610/0252/front.3.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'Crème de marrons', '', '', 'Angelina', 'angelina', 'Aliments et boissons à base de végétaux,Aliments dorigine végétale,Produits à tartiner,Pâtes à tartiner végétaux,Fruits à coques et dérivés,Crèmes de marrons', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories complétées,Marques complétées,Emballage à compléter,Quantité à compléter,Nom du produit complete,Photos à valider,Photos envoyées', 'Produits à tartiner', 'http://fr.openfoodfacts.org/images/products/000/100/000/4005/front.3.400.jpg', 'http://fr.openfoodfacts.org/images/products/000/100/000/4005/front.3.200.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'Pates Langue doiseau', '', '500 g', '', '', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite complétée,Caractéristiques à compléter,Catégories à compléter,Marques à compléter,Emballage à compléter,Quantité complétée,Nom du produit complete,Photos à envoyer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'Huile dolive Monini', '', '1 l.', '', '', '', '', 'France', '', '', '', '', '', '', 'A compléter,Informations nutritionnelles à compléter,Ingrédients à compléter,Date limite à compléter,en:Packaging-code-to-be-completed,Caractéristiques à compléter,Catégories à compléter,Marques à compléter,Emballage à compléter,Quantité complétée,Nom du produit complete,Photos à envoyer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_recette` (`id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id_recette` int(11) NOT NULL AUTO_INCREMENT,
  `preparation` text NOT NULL,
  `nom_recette` text NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `time_prep` varchar(50) NOT NULL,
  `person_for` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `photo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_recette`, `preparation`, `nom_recette`, `difficulty`, `time_prep`, `person_for`, `category`, `photo`) VALUES
(69, '    Préchauffez votre four à 200 °C. Portez la crème à ébullition dans une petite casserole puis réservez-la. Pelez et ciselez finement la gousse d\'ail.\r\n    Faites cuire les pâtes dans un grand volume d\'eau selon les indications du sachet, pour les garder \"al dente\". Egouttez-les et versez-les dans un grand plat à gratin.\r\n    Versez la crème sur les pâtes puis parsemez de petits morceaux d\'ail, de fromage râpé, et enfin de copeaux de beurre fins.\r\n    Enfournez pour 20 min et servez bien chaud.\r\n\r\nAstuces et conseils pour Gratin de pâtes\r\n\r\nA partir de cette base, ajoutez les ingrédients de votre choix : dés de jambon, herbes de Provence, tomates séchées...', 'Gratin de pâtes', 'Facile', '5 mn', 4, 'Plats', '1514985273'),
(70, '    Versez le sel et la farine dans un saladier, et creusez-y un puits. Cassez-y les œufs et versez l’huile. Avec une spatule, mélangez doucement, en formant des cercles du centre vers l’extérieur pour incorporer petit à petit la farine sur les côtés du saladier.\r\n    Faites tiédir le lait à la casserole ou au micro-ondes.\r\n    Lorsque la pâte est homogène, versez-y la moitié du lait tiédi et mélangez doucement avec un fouet. Quand la pâte est bien lisse, versez le reste du lait et mélangez. Si la pâte contient quelques grumeaux, utilisez un mixeur plongeant quelques secondes pour la fluidifier.\r\n    Beurrez une poêle anti-adhésive et placez-la sur feu vif. Lorsqu’elle est bien chaude, versez une louche de pâte à crêpe et répartissez-la sur toute la surface en bougeant la poêle. Lorsque les bords commencent à se détacher de la poêle, passez une spatule sous la crêpe et retournez-la sur l’autre face. Laissez encore cuire 2 à 3 minutes puis réservez entre 2 assiettes.\r\n\r\nAstuces et conseils pour Pâte à crêpe sans repos\r\n\r\nConseil : pour des crêpes sucrées, ajoutez 2 cuil. à soupe de sucre en même temps que la farine et le sel.', 'Pâte à crêpe sans repos', 'Facile', '5 mn', 4, 'Dessert', '1514986366'),
(71, '    Préchauffez le four à 220 °C.\r\n    Étalez la pâte à pizza et déposez-la sur une plaque allant au four recouverte de papier sulfurisé.\r\n    Nappez de coulis de tomates et étalez.\r\n    Coupez le jambon en carrés et disposez-les sur la pizza.\r\n    Parsemez de gruyère râpé.\r\n    Salez, poivrez et enfournez durant 15 à 20 min.', 'Pizza jambon fromage', 'Facile', '10 mn', 4, 'Plats', '1514986962'),
(72, '    Pelez et coupez les carottes et l’oignon en gros dés. Détaillez le sauté de boeuf en gros morceaux.\r\n    Dans une grande cocotte à fond épais, faites-le dorer de tous les côtés avec 2 cuil. à soupe d’huile sur feu très vif. Ajoutez ensuite les dés de carotte et d’oignon, et faites rissoler le tout quelques instants, sans cesser de mélanger.\r\n    Versez la farine et mélangez pour qu’elle recouvre à peu près tous les morceaux. Versez le fond de veau (1 litre d’eau + 6 cuil. à café de fond de veau du commerce) et le concentré de tomate. Mélangez bien pour que celui-ci se dilue.\r\n    Hachez les gousses d’ail, et ajoutez-les dans la cocotte, avec le bouquet garni ( vous pouvez attacher ensemble les herbes du bouquet garni, il sera plus facile de les retirer ensuite ).\r\n    Otez la partie verte des oignons nouveaux. Dans une poêle bien chaude avec le reste d’huile, faites dorer les oignons de tous les côtés. Réservez-les. Placez les lardons dans la poêle et faites-les rendre leur graisse sur feu vif. Egouttez-la et replacez les lardons sur feu vif jusqu’à ce qu’ils commencent à dorer. Réservez-les. Faites dorer à leur tour les champignons de Paris, préalablement lavés et coupés en gros dés.\r\n    Versez les champignons, les lardons et les oignons dans la cocotte de bœuf. Baissez le feu, couvrez, et laissez mijoter 1h30 en mélangeant une ou deux fois.\r\n    Servez bien chaud avec des pommes de terre vapeur.\r\n\r\nAstuces et conseils pour Boeuf bourguignon sans vin\r\n\r\n Conservez la partie verte des oignons nouveaux pour une autre recette, sa saveur est similaire à celle de la ciboulette.', 'Boeuf bourguignon sans vin', 'Normal', '20 mn', 4, 'Viande', '1514987621'),
(73, '    Faites bouillir le lait avec le sucre en poudre et le sucre vanillé. Dès l\'ébullition, jetez le riz en pluie, baissez le feu puis laissez cuire doucement 20 min environ.\r\n    Versez dans des verrines ou dans un grand bol et laissez refroidir.\r\n    Au moment de servir, décorez avec une pincée de vanille.', 'Riz au lait', 'Facile', '10 mn', 4, 'Dessert', '1514988071'),
(74, '    Rincez le riz à l’eau froide. Plongez-le 2 min dans une casserole d’eau bouillante, puis égouttez-le.\r\n    Portez le lait de coco et 25 cl d’eau à ébullition dans la casserole. Ajoutez la gousse de vanille fendue puis le riz. Mélangez. Couvrez aux deux tiers, laissez cuire 25 min à feu doux. Quand le liquide est presque totalement absorbé, ajoutez le sucre, remuez délicatement, poursuivez la cuisson 2 à 3 min.\r\n    Hors du feu, incorporez les fruits secs et 1 cuil. à soupe de noix de coco râpée.\r\n    Servez bien frais, parsemé du reste de noix de coco.', 'Riz au lait de coco', 'Normal', '10 mn', 4, 'Dessert', '1514988862'),
(75, '    Fouettez le beurre dans un bol avec les portion de fromage aux herbes. Garnissez une poche à douille munie d\'une douille cannelée du mélange.\r\n    Faites griller les tranches de pain et laissez-les refroidir. Coupez-les en 2 ou en 4 ou à l\'aide d\'emporte-pièces. \r\n    Garnissez les toasts du mélange au fromage aux herbes puis parsemez d\'oeufs de saumon.\r\n    Poivrez, décorez avec quelques feuilles de cerfeuil et servez. \r\n\r\nAstuces et conseils pour Toast aperitif\r\n\r\nÇa marche aussi avec des oeufs de lump. ', 'Toast aperitif', 'Facile', '15 mn', 4, 'Apéritifs', '1514990337'),
(76, '    Nettoyez les champignons. Pelez et hachez l\'oignon.\r\n    Faites fondre dans une grande casserole 25 g de beurre. Ajoutez l\'oignon avec les champignons de Paris coupés en morceaux, sauf 5-6 réservés pour le décor. Salez, poivrez. Mélangez bien. Couvrez et laissez cuire à feu doux 15 min environ.\r\n    Ajoutez 2 cuil. à soupe de farine en remuant sans cesse, puis mélangez avec le bouillon et le lait. Laissez cuire à feu doux en remuant souvent. Dès que le mélange commence à frémir, baissez le feu et laissez cuire 15 min.\r\n    Laissez refroidir puis, mixez pour obtenir une consistance onctueuse. 5 Ajoutez le jus du citron et la crème fraîche avant de réchauffer quelques minutes. Servez chaud, décoré des petits champignons réservés.', 'Velouté de champignons de Paris', 'Normal', '15 mn', 4, 'Soupes', '1514990779'),
(77, '    Rincez le radis noir et les concombres. Coupez-les en lamelles dans la longueur avec une mandoline. Pelez et coupez l’avocat en bâtonnets.\r\n    Rincez le saumon, épongez-le et coupez-le en gros cubes.\r\n    Posez 1 lanière de radis sur 1 lanière de concombre. Déposez 1 cube de saumon à l’une des extrémités avec 1 bâtonnet d’avocat. Roulez les lanières autour du saumon et de l’avocat en serrant bien. Maintenez fermé avec une pique en bois.\r\n    Au moment de servir, surmontez d’une noisette de caviar.', 'Sushis chics', 'Normal', '30 mn', 4, 'Entrée', '1514991148'),
(78, '    Rincez le brocoli, pelez les carottes, l’oignon et l’ail. Emincez finement tous les légumes.\r\n    Faites chauffer 1 cuil. d’huile dans un wok. Ajoutez les légumes et la sauce soja. Faites revenir à feu vif.\r\n    Coupez les blancs de poulet en lamelles. Faites chauffer l’huile restante dans une poêle et faites cuire les lamelles de poulet. Salez, poivrez.\r\n    Pendant ce temps, faites cuire les nouilles en suivant les indications du paquet. Egouttez-les.\r\n    Ajoutez le poulet dans le wok avec les légumes, puis les nouilles. Mélangez bien et servez sans attendre.', 'Nouilles sautées au poulet', 'Facile', '15 mn', 4, 'Plats', '1514991520'),
(79, '    Epluchez et ciselez les échalotes.\r\n    Dans une cocotte, faites dorer dans un peu d\'huile le filet mignon sur toutes les faces.\r\n    Ajoutez les échalotes, salez, poivrez et couvrez.\r\n    Laissez mijoter la viande pendant 30 min en la retournant de temps en temps.\r\n    Au bout de 30 min, retirez le filet mignon et gardez-le au chaud.\r\n    Versez 1/2 verre d\'eau ou de vin blanc dans la cocotte, grattez bien les sucs du fond de la cocotte.\r\n    Portez à ébullition et faites réduire le jus de moitié.\r\n    Incorporez le beurre en fouettant la sauce.\r\n    Pour servir, découpez le filet en tranches et nappez-le avec la sauce.', 'Filet mignon de porc rôti aux échalotes en cocotte', 'Normal', '20 mn', 4, 'Viande', '1514991705'),
(80, '    Entaillez la peau des magrets en croisillons à l\'aide d\'un couteau.\r\n    Faites chauffer une grande poêle et déposez-y les magrets côté peau. Laissez cuire jusqu\'à ce que presque toute la graisse du canard soit fondue, tout en l\'éliminant au fur et à mesure. Saisissez quelques instants l\'autre côté du magret.\r\n    Salez, poivrez et servez.', 'Magret de canard à la poêle', 'Facile', '5 mn', 4, 'Viande', '1514991979'),
(81, '    Lavez les courgettes sans les peler, ôtez les extrémités puis coupez-les en rondelles de 5 mm d’épaisseur environ.\r\n    Pelez les oignons, émincez-les. Faites chauffer l’huile d\'olive dans une casserole, ajoutez les oignons et faites-les suer 5 min à feu moyen.\r\n    Préchauffez le four à 180 °C (th. 6). Versez les oignons sués dans un plat à gratin, ajoutez les rondelles de courgette.\r\n    Battez les œufs en omelette, incorporez la crème fraîche, salez et poivrez. Versez cette préparation dans le plat, puis parsemez d’emmental. Enfournez pour 35 min minimum selon votre four.\r\n\r\nAstuces et conseils pour Gratin de courgettes\r\n\r\nEn saison (début de l’automne), utilisez des oignons roses de Roscoff, qui sont parfaits pour cette recette.', 'Gratin de courgettes', 'Normal', '20 mn', 4, 'Plats', '1514992381'),
(82, '    Rincez les aubergines, coupez-les en petits cubes. Faites-les dorer 5 min à la poêle dans 4 cuil. d’huile. Egouttez-les sur du papier absorbant. Salez, poivrez. Préchauffez le four th. 6-7 (200 °C).\r\n    Battez les œufs avec la Maïzena et la crème, sel, poivre et thym.\r\n    Répartissez les aubergines dans des ramequins, ajoutez le fromage de chèvre en petits morceaux. Versez la préparation par-dessus. Enfournez 10 à 15 min.\r\n    Servez le clafoutis chaud, tiède ou froid, accompagné d’une salade aux herbes.', 'Clafoutis d’aubergine', 'Facile', '5 mn', 4, 'Plats', '1514992876'),
(83, '    Préchauffez le four à 180 °C.\r\n    Dans un saladier, mélangez fortement le beurre mou avec le sucre et le sel.\r\n    Séparez les jaunes des blancs d’œufs, puis incorporez les jaunes un à un au mélange. Ajoutez la farine et la levure, et incorporez-les délicatement.\r\n    Montez les blancs en neige, et ajoutez-les avec une spatule.\r\n    Beurrez et farinez un moule à manqué, et versez-y la préparation.\r\n    Enfournez pour 45 min (piquez avec la lame d’un couteau, elle doit ressortir sèche).\r\n    Préparez le glaçage en mélangeant le sucre glace avec un peu d’eau. Une fois le gâteau froid, le répartir sur le dessus.\r\n\r\nAstuces et conseils pour Gâteau Nature Moelleux Sans Yaourt\r\n\r\nPour un gâteau coloré pour les gouters de vos enfants, ajoutez une goutte de colorant dans votre glaçage...', 'Gâteau Nature Moelleux Sans Yaourt', 'Facile', '10 mn', 4, 'Dessert', '1514993936'),
(84, '    Dans une casserole, versez l’eau et le sucre, et portez à ébullition. Retirez ensuite du feu et laissez refroidir.\r\n    Pendant ce temps, séparez vos blancs des jaunes, et faites fondre le chocolat au bain marie. Une fois votre chocolat fondu, ajoutez vos jaunes hors du feu et mélangez. Montez vos blancs en neige bien fermes avec une pincée de sel. Ajoutez les délicatement au mélange chocolat/jaunes d\'œufs.\r\n    Trempez les boudoirs dans le sirop de sucre et tapisser le fond de votre moule ainsi que les parois. Versez une première couche de mousse au chocolat puis recouvrez de biscuits. Renouvelez l\'opération et terminez par une couche de boudoirs.\r\n    Fermez votre moule et mettez au frais au moins 6 heures. Démoulez votre charlotte avant de servir.\r\n\r\nAstuces et conseils pour Charlotte au Chocolat Tupperware\r\n\r\nServez la charlotte avec de la crème anglaise pour encore plus de gourmandise !', 'Charlotte au Chocolat ', 'Facile', '25 mn', 8, 'Dessert', '1514994520'),
(85, '    Versez le sucre et 20 cl d’eau dans une casserole, et mélangez tout en portant à ébullition. Laissez refroidir.\r\n    Placez les framboises dans un blender et mixez pour obtenir une purée. Passez au chinois et mélangez avec le sirop de sucre. Réservez au réfrigérateur pendant au moins 2 h.\r\n    Faites prendre en sorbetière et servez.\r\n\r\nAstuces et conseils pour Sorbet framboise avec sorbetière\r\n\r\nAccompagnez de sablés ou de tuiles. Lorsque le sorbet est presque « pris », incorporez quelques framboises fraîches.', 'Sorbet framboise avec sorbetière', 'Facile', '10 mn', 4, 'Dessert', '1514994752'),
(86, '    Versez le vin et le jus de pamplemousse dans un grand plat à gratin (ou un bac peu profond), mélangez bien\r\n    Placez au congélateur pendant 4-6h\r\n    Rassemblez de temps en temps les paillettes déjà prises en grattant avec une fourchette\r\n    Environ 1h avant de servir, placez les verres au congélateur\r\n    Au moment de servir, rassemblez les paillettes et versez dans les verres\r\n    Ajoutez un trait de jus de citron\r\n    Dégustez immédiatement !\r\n\r\nAstuces et conseils pour Frosé pamplemousse\r\n\r\nVous pouvez utiliser aussi du sirop de fruits rouges ou de pastèque !', 'Frosé pamplemousse', 'Facile', '1mn', 1, 'Dessert', '1514995184');

-- --------------------------------------------------------

--
-- Structure de la table `recette_food`
--

DROP TABLE IF EXISTS `recette_food`;
CREATE TABLE IF NOT EXISTS `recette_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recette` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_recette` (`id_recette`),
  KEY `id_food` (`id_food`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette_food`
--

INSERT INTO `recette_food` (`id`, `id_recette`, `id_food`) VALUES
(19, 69, 2659),
(20, 69, 4403),
(21, 70, 519),
(22, 70, 4170),
(23, 70, 4134),
(24, 70, 779),
(25, 70, 12127),
(26, 71, 1174),
(27, 71, 4403),
(28, 71, 5355),
(29, 71, 4824),
(30, 72, 2443),
(31, 72, 4463),
(32, 72, 16630),
(33, 72, 16360),
(34, 72, 8976),
(35, 72, 4383),
(36, 72, 4170),
(37, 73, 5075),
(38, 73, 11441),
(39, 73, 12127),
(40, 74, 2688),
(41, 74, 15606),
(42, 74, 12778),
(43, 74, 14757),
(44, 74, 4913),
(45, 74, 9735),
(46, 75, 5218),
(47, 75, 1399),
(48, 75, 186),
(49, 76, 16630),
(50, 76, 186),
(51, 76, 4383),
(52, 76, 4132),
(53, 76, 16723),
(54, 76, 12069),
(55, 76, 2597),
(56, 76, 9341),
(57, 76, 10447),
(58, 77, 2054),
(59, 77, 20659),
(60, 77, 4453),
(61, 77, 5933),
(62, 78, 5841),
(63, 78, 720),
(64, 78, 2117),
(65, 78, 4464),
(66, 78, 4383),
(67, 78, 9015),
(68, 78, 4170),
(69, 78, 18626),
(70, 79, 1248),
(71, 79, 4386),
(72, 80, 2099),
(73, 81, 5789),
(74, 81, 4383),
(75, 81, 9341),
(76, 81, 2506),
(77, 81, 1654),
(78, 82, 5833),
(79, 82, 5226),
(80, 82, 9169),
(81, 82, 20813),
(82, 82, 14548),
(83, 83, 3717),
(84, 83, 15997),
(85, 83, 4132),
(86, 83, 5075),
(87, 83, 186),
(88, 83, 5078),
(89, 84, 3117),
(90, 84, 3717),
(91, 84, 14757),
(92, 84, 2118),
(93, 84, 872),
(94, 85, 3827),
(95, 85, 5075),
(96, 86, 15490),
(97, 86, 3676),
(98, 86, 2597);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pseudo`, `date_naissance`, `email`, `mdp`) VALUES
(1, 'Villard', 'Kevin', 'kalivins', '1995-01-30', 'kevillard@hotmail.fr', 'a611e58490e1cf681f0dd17f6c76bf98537da365464f3327a6d08fb91777cd0d'),
(2, 'Tharradin', 'Romain', 'Ro.tha', '1996-12-13', 'machintruc@machin.fr', 'machin'),
(3, 'Roberts', 'Julia', 'JR', '1980-01-11', 'machintruc@machin.com', 'a611e58490e1cf681f0dd17f6c76bf98537da365464f3327a6d08fb91777cd0d');

-- --------------------------------------------------------

--
-- Structure de la table `user_recette`
--

DROP TABLE IF EXISTS `user_recette`;
CREATE TABLE IF NOT EXISTS `user_recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_recette` (`id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_recette`
--

INSERT INTO `user_recette` (`id`, `id_user`, `id_recette`) VALUES
(69, 3, 69),
(70, 3, 70),
(71, 3, 71),
(72, 3, 72),
(73, 3, 73),
(74, 3, 74),
(75, 3, 75),
(76, 3, 76),
(77, 3, 77),
(78, 3, 78),
(79, 3, 79),
(80, 3, 80),
(81, 3, 81),
(82, 3, 82),
(83, 3, 83),
(84, 3, 84),
(85, 3, 85),
(86, 3, 86);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments_user_recette`
--
ALTER TABLE `comments_user_recette`
  ADD CONSTRAINT `comments_user_recette_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comments_user_recette_ibfk_2` FOREIGN KEY (`id_recette`) REFERENCES `recette` (`id_recette`),
  ADD CONSTRAINT `comments_user_recette_ibfk_3` FOREIGN KEY (`id_comment`) REFERENCES `commentsrecette` (`id`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`id_recette`) REFERENCES `recette` (`id_recette`);

--
-- Contraintes pour la table `recette_food`
--
ALTER TABLE `recette_food`
  ADD CONSTRAINT `recette_food_ibfk_1` FOREIGN KEY (`id_recette`) REFERENCES `recette` (`id_recette`),
  ADD CONSTRAINT `recette_food_ibfk_2` FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);

--
-- Contraintes pour la table `user_recette`
--
ALTER TABLE `user_recette`
  ADD CONSTRAINT `user_recette_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_recette_ibfk_2` FOREIGN KEY (`id_recette`) REFERENCES `recette` (`id_recette`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
