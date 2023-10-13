-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 oct. 2023 à 01:26
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
-- Base de données : `arbre_competence`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `Nom`, `Prenom`, `Email`, `Password`, `Role`) VALUES
(1, 'admin', 'admin', 'jadmin@admin.com', 'password123', 'admin'),
(2, 'Hamid', 'Achaou', 'hamid@gmail.com', 'password456', 'user'),
(3, 'betroji', 'jalil', 'jalil@gmail.com', 'password789', 'user');


--
-- CREATE COMPETENCE 
--

CREATE TABLE Competences (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255) NOT NULL,
    Code VARCHAR(255),
    Reference VARCHAR(255) NOT NULL,
    Description TEXT
);


-- Insert data into the `Competences` table
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Maquetter une application mobile','Maquette', 'C1','Maquetter une application mobile' );
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ( 'Manipuler une base de données - perfectionnement', 'Base Données', 'C2', 'Manipuler une base de données - perfectionnement');
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Développer la partie back-end d''une application web', 'back-end', 'C3', 'Développer la partie back-end d''une application web');
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Collaborer à la gestion d''un projet informatique', 'gestion', 'C4', 'Collaborer à la gestion d''un projet informatique');
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Développer une application mobile native, avec Android', 'Mobile native', 'C5', 'Développer une application mobile native, avec Android');
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Préparer et exécuter les plans de tests d''une application', 'tests', 'C6', 'Préparer et exécuter les plans de tests d''une application');
INSERT INTO Competences (`Nom` ,`code`, `Reference`, `Description`) VALUES ('Préparer et exécuter le déploiement d''une application', 'déploiement', 'C7', 'Préparer et exécuter le déploiement d''une application');

