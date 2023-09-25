<?php
include '../Databases/dbh.php';
include_once  '../Application/Gestion_Stagiaire.php';   

class Stagiaire extends Dbh {

    
    // get Data Stagiaire
    public function getStagiare() {
        $stmt = $this->connect()->prepare("SELECT * FROM personne WHERE Type = 'Stagiaire' ");
        if(!$stmt->execute()) {
            $stmt = null;
            exit();
        }

        $stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $stagiaire;

        $stagiairesData = [];

        foreach($stagiaires as $stagiaire) {
            $GestionStagire = new Gestion();
            $GestionStagire->setId($stagiaire['Id']);
            $GestionStagire->setNom($stagiaire['Nom']);
            $GestionStagire->setCne($stagiaire['CNE']);
            array_push($stagiairesData, $GestionStagire);
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

        $GestionStagire = new Gestion();
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
            header('Location: ../../Presentation/create.Stager.php?error=failde');
            exit();
        } else {
            header('Location: ../../Presentation/index.php?addPersonne=success');
        }
    }
}


?>