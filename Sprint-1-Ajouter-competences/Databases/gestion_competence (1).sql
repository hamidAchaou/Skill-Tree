-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 oct. 2023 à 20:41
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
-- Base de données : `gestion_competence`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Reference` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`Id`, `Nom`, `Code`, `Reference`, `Description`) VALUES
(1, 'Maquetter une application mobile', 'Maquette', 'C1', 'Maquetter une application mobile'),
(2, 'Manipuler une base de données - perfectionnement', 'Base Données', 'C2', 'Manipuler une base de données - perfectionnement'),
(3, 'Développer la partie back-end d\'une application web', 'back-end', 'C3', 'Développer la partie back-end d\'une application web'),
(4, 'Collaborer à la gestion d\'un projet informatique', 'gestion', 'C4', 'Collaborer à la gestion d\'un projet informatique'),
(5, 'Développer une application mobile native, avec Android', 'Mobile native', 'C5', 'Développer une application mobile native, avec Android'),
(6, 'Préparer et exécuter les plans de tests d\'une application', 'tests', 'C6', 'Préparer et exécuter les plans de tests d\'une application'),
(7, 'Préparer et exécuter le déploiement d\'une application', 'déploiement', 'C7', 'Préparer et exécuter le déploiement d\'une application'),
(8, 'Jalil Betroji', 'C9', 'DEZ5665', '<p>zeiojzio</p>');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`Id`, `Nom`, `Description`) VALUES
(1, 'Niveau 1', 'Description 1'),
(2, 'Salah eghla', 'Warning: Undefined global variable $_SESSION in C:\\xampp\\htdocs\\__SoliCoders\\Brief-2\\Skill-Tree\\gestion-competences-niveaux\\Presentation\\Admin\\layouts\\Sidebar.php on line 10'),
(3, 'Salah eghla', 'Description');

-- --------------------------------------------------------

--
-- Structure de la table `niveau_competence`
--

CREATE TABLE `niveau_competence` (
  `id` int(11) NOT NULL,
  `id_competence` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `Nom`, `Prenom`, `Email`, `Password`, `Role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$kZnwkPAoWrm4lpjUSHUpCer4PG2ibvRKrJfMyTbdXK4MTDyl1.3li', 'admin'),
(2, 'Hamid', 'Achaou', 'hamid@gmail.com', 'password456', 'user'),
(3, 'betroji', 'jalil', 'jalil@gmail.com', 'password789', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `niveau_competence`
--
ALTER TABLE `niveau_competence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_competence` (`id_competence`),
  ADD KEY `id_niveau` (`id_niveau`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `niveau_competence`
--
ALTER TABLE `niveau_competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `niveau_competence`
--
ALTER TABLE `niveau_competence`
  ADD CONSTRAINT `niveau_competence_ibfk_1` FOREIGN KEY (`id_competence`) REFERENCES `competences` (`Id`),
  ADD CONSTRAINT `niveau_competence_ibfk_2` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
