-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Mars 2015 à 22:18
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `visioplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
`id` int(11) NOT NULL,
  `libelle` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `libelle`) VALUES
(3, 'AMAZAN'),
(4, 'ARGENTI'),
(2, 'BET'),
(5, 'BLAKE'),
(6, 'BRILLE'),
(7, 'CAROLINE'),
(8, 'CHAMPAGNE'),
(9, 'CHEZ COLETTE'),
(10, 'COLLECTION CREATIV'),
(11, 'COSMOPLITAIN'),
(12, 'DERAPAGE'),
(13, 'EAGLE'),
(14, 'ERIC FORSANS'),
(15, 'EVA MINCE'),
(16, 'FREE LAND'),
(17, 'GUCCI'),
(1, 'TOMMY FASHION');

-- --------------------------------------------------------

--
-- Structure de la table `monture`
--

CREATE TABLE IF NOT EXISTS `monture` (
`id` int(11) NOT NULL,
  `marque_id` int(11) DEFAULT NULL,
  `reference` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `prix_vente` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `datecreation_at` datetime NOT NULL,
  `datemodification_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `monture`
--

INSERT INTO `monture` (`id`, `marque_id`, `reference`, `genre`, `prix_vente`, `stock`, `datecreation_at`, `datemodification_at`) VALUES
(1, 3, 'YE2027 52-17', 'FEMME', 50000, 1, '2015-03-02 01:30:30', '2015-03-02 01:30:30'),
(2, 2, 'BT2038 53-17', 'MIXTE', 85000, 1, '2015-03-02 02:02:02', '2015-03-02 02:02:02'),
(3, 7, 'MOD OT 023 53-16', 'ENFANT', 55000, 5, '2015-03-02 02:33:49', '2015-03-02 02:33:49'),
(4, 1, 'MALVA 546', 'SOLAIRE', 150000, 2, '2015-03-02 02:45:57', '2015-03-02 02:45:57'),
(5, 16, 'FL70526 222 49 18-140', 'MIXTE', 60000, 1, '2015-03-02 16:42:05', '2015-03-02 16:42:05'),
(6, 3, 'FTR 524 PLM 965', 'HOMME', 75000, 2, '2015-03-03 03:20:02', '2015-03-03 03:20:02');

-- --------------------------------------------------------

--
-- Structure de la table `typeverre`
--

CREATE TABLE IF NOT EXISTS `typeverre` (
`id` int(11) NOT NULL,
  `libelle` varchar(75) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `typeverre`
--

INSERT INTO `typeverre` (`id`, `libelle`) VALUES
(1, 'DOUBLE FOYER MINERAL'),
(2, 'DOUBLE FOYER ORGANIQUE'),
(3, 'DOUBLE FOYER POLYCARBONATE'),
(4, 'PROGRESSIF MINERAL'),
(5, 'PROGRESSIF ORGANIQUE'),
(6, 'PROGRESSIF POLYCARBONATE'),
(7, 'UNIFOCAL MINERAL'),
(8, 'UNIFOCAL ORGANIQUE'),
(9, 'UNIFOCAL POLYCARBONATE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'infos@abloqov-group.com', 'infos@abloqov-group.com', 1, 'qygra4rwtvk4404kgkok8w4ckwk4k04', 'IIXdpbZCZjjkg6mHibGUZ5h+vgQuK2yIyRzaHsYxk27iZTy593IAq4sax1SbOcGqLBM8wsTIZCAPEGyxlW8yHg==', '2015-03-20 14:15:44', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(2, 'pelagie', 'pelagie', 'pelagie@vision-originale.net', 'pelagie@vision-originale.net', 1, 'c7mfa0aby680g4w0c48koow8gw00s04', 'RRlu4pNPzsugcCAk40pgKG7JqbImFE78C1D3P9h2bEU0HBV/0pIGN3F9ZkQ/dAZnPHuRF6dkdR3QqtNKyHeALQ==', '2015-03-10 16:32:26', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_5DC394F8A4D60759` (`libelle`);

--
-- Index pour la table `monture`
--
ALTER TABLE `monture`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_F1A6ACB7AEA34913` (`reference`), ADD KEY `IDX_F1A6ACB74827B9B2` (`marque_id`);

--
-- Index pour la table `typeverre`
--
ALTER TABLE `typeverre`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_C337E06EA4D60759` (`libelle`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_9B80EC6492FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_9B80EC64A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `monture`
--
ALTER TABLE `monture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `typeverre`
--
ALTER TABLE `typeverre`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `monture`
--
ALTER TABLE `monture`
ADD CONSTRAINT `FK_F1A6ACB74827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
