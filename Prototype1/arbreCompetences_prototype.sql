CREATE DATABASE 'arbreCompetences_prototype' 

use arbreCompetences_prototype;

CREATE TABLE `personne` (
    Id int AUTO_INCREMENT PRIMARY KEY;
    Nom VARCHAR(50);
    Type VARCHAR(50);
    CNE VARCHAR;
    Vill_Id int;
    CONSTRAINT fk_(Vill_Id)
    FOREIGN KEY (Vill_Id)
    REFERENCES ville (Id)

)

INSERT INTO `Ville` (`Id`, `Nom`)
VALUES
    (1, 'Tetouan'),
    (2, 'Tanger'),
    (3, 'Casablanca'),
    (4, 'Rabat'),
    (5, 'Larache'),
    (6, 'Khouribga'),
    (7, 'El Kelaa des Sraghna'),
    (8, 'Khenifra'),
    (9, 'Beni Mellal'),
    (10, 'Tiznit'),
    (11, 'Errachidia'),
    (12, 'Taroudant'),
    (13, 'Ouarzazate'),
    (14, 'Safi'),
    (15, 'Lahraouyine'),
    (16, 'Berrechid'),
    (17, 'Fkih Ben Salah'),
    (18, 'Taourirt'),
    (19, 'Sefrou'),
    (20, 'Youssoufia');
    INSERT INTO `Personne` (`Id`, `Nom`, `Type`, `CNE`, `Ville_Id`)
VALUES
    (1, 'Jalil Betroji', 'Stagiaire', 'G19010027', '1'),
    (2, 'Hamid Achauo' ,'Stagiaire', 'G190134327', '1'),
    (3, 'Amine Lamchatab', 'Stagiaire', 'G134344', '1'),
    (4, 'Adnane Benasar', 'Stagiaire', 'G193347', '1'),
    (5, 'Mohamed-Amine Bkhit' ,'Stagiaire', 'G190134327', '1'),
    (6, 'Imrane Sarsri', 'Stagiaire', 'G190134327', '1'),
    (7, 'Amina Assaid', 'Stagiaire', 'G19010343', '1'),
    (8, 'Yassmine Daifane', 'Stagiaire', 'G1340027', '3'),
    (9, 'Hussein Bouik', 'Stagiaire', 'G1656727', '3'),
    (10, 'Adnane Lharrak', 'Stagiaire', 'G189810027', '3'),
    (11, 'Hamza zaani', 'Stagiaire', 'G19010897', '3'),
    (12, 'Mohamed Baqqali', 'Stagiaire', 'G118927', '6'),
    (13, 'Soufian Boukhal', 'Stagiaire', 'G166027', '6'),
    (14, 'Mohamed Aymane', 'Stagiaire', 'G004457', '5'),
    (15, 'Ayman Alli', 'personne', NULL, '11');
    (16, 'khlid Reda', 'personne', NULL, '11');
    (17, 'Mohamed Ali', 'personne', NULL, '11');
    (18, 'Ayman Asri', 'personne', NULL, '11');
    (19, 'Fouad Essarje', 'Formateur', NULL, '1');