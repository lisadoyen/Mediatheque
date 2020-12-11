-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 11:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediatheque`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `type_action_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `tranche_age_id` int(11) DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `action_id` int(11) NOT NULL,
  `gencode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vignette` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `montant_obtention` decimal(6,2) NOT NULL,
  `montant_caution` decimal(6,2) DEFAULT NULL,
  `montant_vente` decimal(6,2) NOT NULL,
  `observation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerique` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_entite`
--

CREATE TABLE `article_entite` (
  `article_id` int(11) NOT NULL,
  `entite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_rubrique`
--

CREATE TABLE `article_rubrique` (
  `article_id` int(11) NOT NULL,
  `rubrique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` decimal(2,1) DEFAULT NULL,
  `signale` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree_emprunt_max` int(11) NOT NULL,
  `duree_emprunt_max_nouveaute` int(11) NOT NULL,
  `nb_emprunt_max` int(11) NOT NULL,
  `nb_emprunt_max_nouveaute` int(11) NOT NULL,
  `duree_nouveaute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `duree_emprunt_max`, `duree_emprunt_max_nouveaute`, `nb_emprunt_max`, `nb_emprunt_max_nouveaute`, `duree_nouveaute`) VALUES
(1, 'livre', 10, 7, 15, 2, 14),
(2, 'video', 10, 7, 15, 2, 14),
(3, 'jeu', 10, 7, 15, 2, 14),
(4, 'musique', 10, 7, 15, 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_genre`
--

CREATE TABLE `categorie_genre` (
  `categorie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie_genre`
--

INSERT INTO `categorie_genre` (`categorie_id`, `genre_id`) VALUES
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201211093901', '2020-12-11 10:39:41', 1507);

-- --------------------------------------------------------

--
-- Table structure for table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `id` int(11) NOT NULL,
  `type_enregistrement_id` int(11) NOT NULL,
  `statut_enregistrement_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `no_commande` int(11) NOT NULL,
  `date_preparation_fini` datetime DEFAULT NULL,
  `date_enregistrement` datetime NOT NULL,
  `date_rendu` datetime DEFAULT NULL,
  `date_rendu_theorique` datetime NOT NULL,
  `note_communication` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enregistrement_user`
--

CREATE TABLE `enregistrement_user` (
  `enregistrement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entite`
--

CREATE TABLE `entite` (
  `id` int(11) NOT NULL,
  `type_entite_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entite`
--

INSERT INTO `entite` (`id`, `type_entite_id`, `nom`, `prenom`) VALUES
(1, 16, 'DVD', NULL),
(2, 16, 'Blu-ray', NULL),
(3, 16, 'CD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`) VALUES
(1, 'Thales');

-- --------------------------------------------------------

--
-- Table structure for table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id`, `libelle`) VALUES
(1, 'salarie'),
(2, 'prestataire'),
(3, 'retraite');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `libelle`) VALUES
(1, 'comedie'),
(2, 'documentaire');

-- --------------------------------------------------------

--
-- Table structure for table `lien`
--

CREATE TABLE `lien` (
  `id` int(11) NOT NULL,
  `type_lien_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `adresse` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `type_enregistrement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rubrique`
--

CREATE TABLE `rubrique` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rubrique`
--

INSERT INTO `rubrique` (`id`, `genre_id`, `libelle`) VALUES
(1, 1, 'romantique'),
(2, 2, 'animalier');

-- --------------------------------------------------------

--
-- Table structure for table `rubrique_tag`
--

CREATE TABLE `rubrique_tag` (
  `rubrique_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE `statut` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`id`, `libelle`) VALUES
(1, 'empruntable'),
(2, 'vendable'),
(3, 'perdu'),
(4, 'donne'),
(5, 'vendu'),
(6, 'emprunte');

-- --------------------------------------------------------

--
-- Table structure for table `statut_enregistrement`
--

CREATE TABLE `statut_enregistrement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statut_enregistrement`
--

INSERT INTO `statut_enregistrement` (`id`, `libelle`) VALUES
(1, 'en attente'),
(2, 'pret'),
(3, 'perdu'),
(4, 'telecharge'),
(5, 'emprunte'),
(6, 'achete'),
(7, 'rendu');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tranche_age`
--

CREATE TABLE `tranche_age` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_min` int(11) DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tranche_age`
--

INSERT INTO `tranche_age` (`id`, `libelle`, `age_min`, `age_max`) VALUES
(1, 'autre', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_action`
--

CREATE TABLE `type_action` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_action`
--

INSERT INTO `type_action` (`id`, `libelle`) VALUES
(1, 'obtention'),
(2, 'creation'),
(3, 'modification'),
(4, 'declassement'),
(5, 'reclassement');

-- --------------------------------------------------------

--
-- Table structure for table `type_enregistrement`
--

CREATE TABLE `type_enregistrement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_enregistrement`
--

INSERT INTO `type_enregistrement` (`id`, `libelle`) VALUES
(1, 'achat'),
(2, 'emprunt');

-- --------------------------------------------------------

--
-- Table structure for table `type_entite`
--

CREATE TABLE `type_entite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_entite`
--

INSERT INTO `type_entite` (`id`, `libelle`) VALUES
(1, 'auteur'),
(2, 'chanteur'),
(3, 'musicien'),
(4, 'realisateur'),
(5, 'producteur'),
(6, 'acteur'),
(7, 'compositeur'),
(8, 'editeur'),
(9, 'collection'),
(10, 'album'),
(11, 'groupe'),
(12, 'serie'),
(13, 'compilation'),
(14, 'live'),
(15, 'console'),
(16, 'support');

-- --------------------------------------------------------

--
-- Table structure for table `type_lien`
--

CREATE TABLE `type_lien` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_lien`
--

INSERT INTO `type_lien` (`id`, `libelle`) VALUES
(1, 'autre'),
(2, 'amazon'),
(3, 'ebay'),
(4, 'youtube'),
(5, 'wikipedia'),
(6, 'allocine');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  `fonction_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_perso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_perso` int(11) DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `matricule` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_perso2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_perso` tinyint(1) NOT NULL,
  `tel_pro` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_pro2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_pro` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_pro` tinyint(1) NOT NULL,
  `email_recup` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_rue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_rue_complement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `droit_emprunt` tinyint(1) NOT NULL,
  `droit_achat` tinyint(1) NOT NULL,
  `commentaire_utilisateur` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire_staff` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` date NOT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_47CC8C9229F4B125` (`type_action_id`),
  ADD KEY `IDX_47CC8C92D4D57CD` (`staff_id`);

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F65593E5D4D57CD` (`staff_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66BCF5E72D` (`categorie_id`),
  ADD KEY `IDX_23A0E66A43AD6F0` (`tranche_age_id`),
  ADD KEY `IDX_23A0E66F6203804` (`statut_id`),
  ADD KEY `IDX_23A0E664296D31F` (`genre_id`),
  ADD KEY `IDX_23A0E669D32F035` (`action_id`);

--
-- Indexes for table `article_entite`
--
ALTER TABLE `article_entite`
  ADD PRIMARY KEY (`article_id`,`entite_id`),
  ADD KEY `IDX_70EE8FA77294869C` (`article_id`),
  ADD KEY `IDX_70EE8FA79BEA957A` (`entite_id`);

--
-- Indexes for table `article_rubrique`
--
ALTER TABLE `article_rubrique`
  ADD PRIMARY KEY (`article_id`,`rubrique_id`),
  ADD KEY `IDX_DA4CFD177294869C` (`article_id`),
  ADD KEY `IDX_DA4CFD173BD38833` (`rubrique_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`article_id`,`tag_id`),
  ADD KEY `IDX_919694F97294869C` (`article_id`),
  ADD KEY `IDX_919694F9BAD26311` (`tag_id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F91ABF07294869C` (`article_id`),
  ADD KEY `IDX_8F91ABF0FB88E14F` (`utilisateur_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_genre`
--
ALTER TABLE `categorie_genre`
  ADD PRIMARY KEY (`categorie_id`,`genre_id`),
  ADD KEY `IDX_7628DE28BCF5E72D` (`categorie_id`),
  ADD KEY `IDX_7628DE284296D31F` (`genre_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_15FA02FBCB228FB` (`type_enregistrement_id`),
  ADD KEY `IDX_15FA02FEBA1EB09` (`statut_enregistrement_id`),
  ADD KEY `IDX_15FA02FFB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_15FA02F7294869C` (`article_id`);

--
-- Indexes for table `enregistrement_user`
--
ALTER TABLE `enregistrement_user`
  ADD PRIMARY KEY (`enregistrement_id`,`user_id`),
  ADD KEY `IDX_A0B75F4E833460` (`enregistrement_id`),
  ADD KEY `IDX_A0B75F4EA76ED395` (`user_id`);

--
-- Indexes for table `entite`
--
ALTER TABLE `entite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1A2918272F2CD46A` (`type_entite_id`);

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8933C4327294869C` (`article_id`),
  ADD KEY `IDX_8933C432FB88E14F` (`utilisateur_id`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lien`
--
ALTER TABLE `lien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A532B4B5C58BACA7` (`type_lien_id`),
  ADD KEY `IDX_A532B4B57294869C` (`article_id`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_24CC0DF2FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_24CC0DF27294869C` (`article_id`),
  ADD KEY `IDX_24CC0DF2BCB228FB` (`type_enregistrement_id`);

--
-- Indexes for table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FA4097C4296D31F` (`genre_id`);

--
-- Indexes for table `rubrique_tag`
--
ALTER TABLE `rubrique_tag`
  ADD PRIMARY KEY (`rubrique_id`,`tag_id`),
  ADD KEY `IDX_D7B66D8E3BD38833` (`rubrique_id`),
  ADD KEY `IDX_D7B66D8EBAD26311` (`tag_id`);

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statut_enregistrement`
--
ALTER TABLE `statut_enregistrement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tranche_age`
--
ALTER TABLE `tranche_age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_action`
--
ALTER TABLE `type_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_enregistrement`
--
ALTER TABLE `type_enregistrement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_entite`
--
ALTER TABLE `type_entite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_lien`
--
ALTER TABLE `type_lien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D93D649A4AEAFEA` (`entreprise_id`),
  ADD KEY `IDX_8D93D64957889920` (`fonction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entite`
--
ALTER TABLE `entite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lien`
--
ALTER TABLE `lien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statut`
--
ALTER TABLE `statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statut_enregistrement`
--
ALTER TABLE `statut_enregistrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tranche_age`
--
ALTER TABLE `tranche_age`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_action`
--
ALTER TABLE `type_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type_enregistrement`
--
ALTER TABLE `type_enregistrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_entite`
--
ALTER TABLE `type_entite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `type_lien`
--
ALTER TABLE `type_lien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `FK_47CC8C9229F4B125` FOREIGN KEY (`type_action_id`) REFERENCES `type_action` (`id`),
  ADD CONSTRAINT `FK_47CC8C92D4D57CD` FOREIGN KEY (`staff_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_F65593E5D4D57CD` FOREIGN KEY (`staff_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E664296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `FK_23A0E669D32F035` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `FK_23A0E66A43AD6F0` FOREIGN KEY (`tranche_age_id`) REFERENCES `tranche_age` (`id`),
  ADD CONSTRAINT `FK_23A0E66BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_23A0E66F6203804` FOREIGN KEY (`statut_id`) REFERENCES `statut` (`id`);

--
-- Constraints for table `article_entite`
--
ALTER TABLE `article_entite`
  ADD CONSTRAINT `FK_70EE8FA77294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_70EE8FA79BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_rubrique`
--
ALTER TABLE `article_rubrique`
  ADD CONSTRAINT `FK_DA4CFD173BD38833` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DA4CFD177294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `FK_919694F97294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_919694F9BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF07294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_8F91ABF0FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `categorie_genre`
--
ALTER TABLE `categorie_genre`
  ADD CONSTRAINT `FK_7628DE284296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7628DE28BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD CONSTRAINT `FK_15FA02F7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_15FA02FBCB228FB` FOREIGN KEY (`type_enregistrement_id`) REFERENCES `type_enregistrement` (`id`),
  ADD CONSTRAINT `FK_15FA02FEBA1EB09` FOREIGN KEY (`statut_enregistrement_id`) REFERENCES `statut_enregistrement` (`id`),
  ADD CONSTRAINT `FK_15FA02FFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `enregistrement_user`
--
ALTER TABLE `enregistrement_user`
  ADD CONSTRAINT `FK_A0B75F4E833460` FOREIGN KEY (`enregistrement_id`) REFERENCES `enregistrement` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A0B75F4EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `entite`
--
ALTER TABLE `entite`
  ADD CONSTRAINT `FK_1A2918272F2CD46A` FOREIGN KEY (`type_entite_id`) REFERENCES `type_entite` (`id`);

--
-- Constraints for table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_8933C4327294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_8933C432FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `lien`
--
ALTER TABLE `lien`
  ADD CONSTRAINT `FK_A532B4B57294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_A532B4B5C58BACA7` FOREIGN KEY (`type_lien_id`) REFERENCES `type_lien` (`id`);

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_24CC0DF27294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_24CC0DF2BCB228FB` FOREIGN KEY (`type_enregistrement_id`) REFERENCES `type_enregistrement` (`id`),
  ADD CONSTRAINT `FK_24CC0DF2FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `rubrique`
--
ALTER TABLE `rubrique`
  ADD CONSTRAINT `FK_8FA4097C4296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Constraints for table `rubrique_tag`
--
ALTER TABLE `rubrique_tag`
  ADD CONSTRAINT `FK_D7B66D8E3BD38833` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D7B66D8EBAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64957889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_8D93D649A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
