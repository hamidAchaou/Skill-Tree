<?php
include "../entity/Stagiaire.php";
include_once "../Gestion/Gestion_Stagiaire.php";
  if(isset($_POST['btnCrateStagiaire'])) {
    $Nom = $_POST['nom'];
    $CNE = $_POST['cne'];

    $stagiaireData = [];

    $GestionStagire = new Stagiaire();
    $GestionStagire->setNom($Nom);
    $GestionStagire->setCne($CNE);
    // $GestionStagire->setCne($Ville);
    array_push($stagiaireData, $GestionStagire);

    // Add data Stagiaire In Databases
    $stagiaires = new GestionStagiaire();
    $stagiaires->addStagiaire($stagiaireData[0]->getNom(), $stagiaireData[0]->getCne());
  }
?>