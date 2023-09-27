<?php
include_once '../Gestions/dbh.php';
include_once  '../entity/stagiaire.php';   
include_once  '../entity/ville.php';   

class GestionStagiaire extends Dbh {

    /* ================================================================
     == // Connect Databases
    =================================================================*/
    public function getStagiaires() {
        $stmt = $this->connect()->prepare("SELECT personne.Id, personne.Nom, personne.Type, personne.CNE, personne.Ville_Id, ville.VilleNom, ville.Id AS Ville FROM personne JOIN ville ON personne.Ville_Id = ville.Id;");
        
        if (!$stmt->execute()) {
            // Handle the error or log it
            return [];
        }
    
        $stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stagiairesData = [];
    
        // set data in Array $stagiairesData;
        foreach ($stagiaires as $stagiaire) {
            $gestionStagiaire = new Stagiaire();
            $gestionStagiaire->setId($stagiaire['Id']);
            $gestionStagiaire->setNom($stagiaire['Nom']);
            $gestionStagiaire->setCne($stagiaire['CNE']);
            $gestionStagiaire->setVille_Id($stagiaire['Ville_Id']);
            $gestionStagiaire->setVille_Nom($stagiaire['VilleNom']);
            $stagiairesData[] = $gestionStagiaire;
        }
    
        return $stagiairesData;
    }

    /* ================================================================
     == // Get One Stagiaire
    =================================================================*/
    
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
        $GestionStagire->setVille_Id($stagiaire[0]['Ville_Id']);
        // $GestionStagire->setVille_Nom($stagiaire[0]['VilleNom']);
        array_push($stagiaireData, $GestionStagire);

        return $stagiaireData;
    }

    /* ================================================================
     == // Insert Data Stagiaire
    =================================================================*/
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

    /* ================================================================
     == // Updatee data stagiaire
    =================================================================*/
    public function updateStagiaire($Nom, $Type, $CNE, $VilleId, $Id) {
        $sql = "UPDATE personne SET Nom = ?, Type = ?, CNE = ?, Ville_Id = ? WHERE Id = ?";
        $stmt = $this->connect()->prepare($sql);
    
        if($stmt->execute([$Nom, $Type, $CNE, $VilleId,  $Id])) {
            header('Location: ../UI/index.php?UpdatePersonne=success');
            $stmt = null;
            exit();
        } else {
            header('Location: ../UI/index.php?UpdateStagiaire=success');
        }
    }

    /* ================================================================
     == // Delte Stagiaire
    =================================================================*/
    public function deleteStagiaire($Id) {
        // $Id = $stgiaire->getId();
        $sql = "DELETE FROM personne WHERE Id = ?";
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute([$Id])) {
            // header("location: ../"); 
            $stmt = null;
            exit();
        }else {
            header('Location: ../UI/index.php?deleteStagiaire=success');
        }
    }

    /*=======================================================================================
    == // get count ville
    =======================================================================================*/
    public function countTrainner(){
        $sql ="SELECT ville.Id, ville.VilleNom AS VilleNom, COUNT(personne.Id) AS TrainerCount
        FROM personne
        INNER JOIN ville ON personne.Ville_Id = ville.Id
        GROUP BY ville.Id, ville.VilleNom;";
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        $count = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $count;
    }
}


?>