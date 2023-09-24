<?php
include '../Databases_tier/dbh.php';
include_once  '../Application_tier/Gestion.php';

class Stagiaire extends Dbh {
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
}


?>