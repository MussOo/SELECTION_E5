-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 déc. 2021 à 12:38
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `selection`
--

-- --------------------------------------------------------

--
-- Structure de la table `grille`
--

CREATE TABLE `grille` (
  `id` smallint(6) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `point_bac` text DEFAULT NULL,
  `point_travail_serieux` text DEFAULT NULL,
  `point_absence` text DEFAULT NULL,
  `point_attitude` text DEFAULT NULL,
  `point_etude_superieure` text DEFAULT NULL,
  `point_avis_PP` text DEFAULT NULL,
  `point_avis_proviseur` text DEFAULT NULL,
  `point_lettre_motivation` text DEFAULT NULL,
  `remarque` varchar(50) DEFAULT NULL,
  `point_remarque` smallint(6) DEFAULT NULL,
  `statut_dossier` varchar(50) DEFAULT NULL,
  `total_point` smallint(6) DEFAULT NULL,
  `Numero_Candidat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `grille`
--

INSERT INTO `grille` (`id`, `Nom`, `Prenom`, `point_bac`, `point_travail_serieux`, `point_absence`, `point_attitude`, `point_etude_superieure`, `point_avis_PP`, `point_avis_proviseur`, `point_lettre_motivation`, `remarque`, `point_remarque`, `statut_dossier`, `total_point`, `Numero_Candidat`) VALUES
(52, 'foucault', 'Matheo', 'L (09)', 'OUI (+1)', 'NON (-1)', 'OUI (Dossier refusé)', 'OUI (+1)', 'insuffisant (-1)', 'Bien (+2)', 'Assez Bien (+1)', 'oujighuohopi', 3, 'Dossier_a_ré-examiner', 10, 'fefjioy78789YD');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` tinyint(4) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `type_de_compte` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `identifiant`, `mdp`, `type_de_compte`) VALUES
(22, 'administrateur', 'administrateur', 'administrateur'),
(47, 'secretaire', 'secretaire', 'secretaire'),
(49, 'evaluateur', 'evaluateur', 'evaluateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `grille`
--
ALTER TABLE `grille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identifiant` (`identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `grille`
--
ALTER TABLE `grille`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;