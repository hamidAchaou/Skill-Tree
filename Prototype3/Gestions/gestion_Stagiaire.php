<?php
include '../Gestions/dbh.php';
include_once  '../entity/stagiaire.php';   

class GestionStagiaire extends Dbh {

    // get Data Stagiaire
    public function getStagiaires() {
        $stmt = $this->connect()->prepare("SELECT personne.Id, personne.Nom, personne.CNE, ville.Nom AS VilleNom
            FROM personne
            INNER JOIN ville ON personne.Ville_Id = ville.Id 
            WHERE personne.Type = 'Stagiaire'");
        
        if (!$stmt->execute()) {
            // Handle the error or log it
            return [];
        }
    
        $stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stagiairesData = [];
    
        foreach ($stagiaires as $stagiaire) {
            $gestionStagiaire = new Stagiaire();
            $gestionStagiaire->setId($stagiaire['Id']);
            $gestionStagiaire->setNom($stagiaire['Nom']);
            $gestionStagiaire->setCne($stagiaire['CNE']);
            $gestionStagiaire->setVilleNom($stagiaire['VilleNom']);
            $stagiairesData[] = $gestionStagiaire;
        }
    
        return $stagiairesData;
    }

    // Get One Stagiaire
    public function getOneStagiaire($Id) {
        $stmt = $this->connect()->prepare('SELECT * FROM personne WHERE Id = ?');
        if(!$stmt->execute([$Id])) {
            header("location: ../Application/Gestion_Stagiaire.php");
            $stmt = null;
            exit();
        }

        $stagiaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stagiaireData = [];

        include_once "../entity/stagiaire.php";
        $GestionStagire = new Stagiaire();
        $GestionStagire->setId($stagiaire[0]['Id']);
        $GestionStagire->setNom($stagiaire[0]['Nom']);
        $GestionStagire->setCne($stagiaire[0]['CNE']);
        array_push($stagiaireData, $GestionStagire);

        return $stagiaireData;
    }

    // insert data stagiaire
    public function addStagiaire($Nom, $Type, $CNE, $Ville_Id) {
        $sql = "INSERT INTO personne (Nom, Type, CNE, Ville_Id) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$Nom, $Type, $CNE, $Ville_Id])) {
            header('Location: ../UI/create.Stager.php?error=failde');
            exit();
        } else {
            header('Location: ../UI/index.php?addPersonne=success');
        }
    }

    // Update Stagiaire
    public function update() {
        $sql = "UPDATE ";
    }
}


?>