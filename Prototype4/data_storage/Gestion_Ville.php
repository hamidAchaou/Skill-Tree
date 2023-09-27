<?php
include_once "dbh.php";
include __DIR__ . "/../business_logic/ville.php";

class GestionVille extends Dbh {

    /*=============================================================
    == // get Data Ville
    =============================================================*/
    public function getVill() { 
        $stmt = $this->connect()->prepare('SELECT Id, VilleNom FROM ville');

        if(!$stmt->execute()) {
            header("location: ../Presentation/create.Stager.php?error=cityNotfound");
            exit();
        }

        $Vills = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $Vills;
        $dataVills = [];

        foreach($Vills as $Vill) {
            $gestionVill = new Ville();
            $gestionVill->setIdVille($Vill['Id']);
            $gestionVill->setNomVille($Vill['VilleNom']);
            array_push($dataVills, $gestionVill);
        }

        return $dataVills;
    }
}