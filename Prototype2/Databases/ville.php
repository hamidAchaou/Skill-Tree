<?php
include "../Databases/dbh.php";
include "../Application/Gestion_vill.php";

class Ville extends Dbh {

    // get Data Ville
    public function getVill() { 
        $stmt = $this->connect()->prepare('SELECT Id, Nom FROM ville');

        if(!$stmt->execute()) {
            header("location: ../Presentation/create.Stager.php?error=cityNotfound");
            exit();
        }

        $Vills = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $Vills;
        $dataVills = [];

        foreach($Vills as $Vill) {
            $gestionVill = new GestionVill();
            $gestionVill->setId($Vill['Id']);
            $gestionVill->setNom($Vill['Nom']);
            array_push($dataVills, $gestionVill);
        }

        return $dataVills;
    }
}