<?php

class GestionStagiaire {

    /* ================================================================
     == // Connect Databases
    =================================================================*/
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbName = 'arbrecompetences_prototype2';

    private function connect() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            echo 'connect is error' . $e->getMessage();
        }
    }

    /* ================================================================
     == // get Stagire
    =================================================================*/
    
    public function getStagiare() {
        $stmt = $this->connect()->prepare("SELECT * FROM personne");
        if(!$stmt->execute()) {
            $stmt = null;
            exit();
        }

        $stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stagiairesData = [];
        include "../entity/Stagiaire.php";

        foreach($stagiaires as $stagiaire) {
            $GestionStagire = new Stagiaire();
            $GestionStagire->setId($stagiaire['Id']);
            $GestionStagire->setNom($stagiaire['Nom']);
            $GestionStagire->setCne($stagiaire['CNE']);
            array_push($stagiairesData, $GestionStagire);
        }

        return $stagiairesData;
    }

    /* ================================================================
     == // Get One Stagire
    =================================================================*/
    // Get One Stagiaire
    public function getOneStagiaire($Id) {
        $stmt = $this->connect()->prepare('SELECT * FROM personne WHERE Id = ?');
        if(!$stmt->execute([$Id])) {
            header("location: ./Gestion_Stagiaire.php?error=faile");
            $stmt = null;
            exit();
        }

        $stagiaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stagiaireData = [];

        $GestionStagire = new Stagiaire();
        $GestionStagire->setId($stagiaire[0]['Id']);
        $GestionStagire->setNom($stagiaire[0]['Nom']);
        $GestionStagire->setCne($stagiaire[0]['CNE']);
        array_push($stagiaireData, $GestionStagire);

        return $stagiaireData;
    }

    /* ================================================================
     == // insert data Persone
    =================================================================*/
    
    public function addStagiaire($Nom, $CNE) {
        $sql = "INSERT INTO personne (Nom, CNE) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$Nom, $CNE])) {
            header('Location: ./create.Stager.php?error=failde');
            exit();
        }
        header('Location: ../UI/index.php?addPersonne=success');
    }

    /* ================================================================
     == // Updatee data stagiaire
    =================================================================*/
    public function update($Nom, $CNE, $Id) {
        $sql = "UPDATE personne SET Nom = ?, CNE = ? WHERE Id = ?";
        $stmt = $this->connect()->prepare($sql);
    
        if($stmt->execute([$Nom, $CNE, $Id])) {
            header('Location: ../UI/index.php?UpdatePersonne=success');
            $stmt = null;
            exit();
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
        }


    }
}


?>