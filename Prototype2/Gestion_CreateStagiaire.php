<?php
include "./Stagiaire.php";
include_once "./Gestion_Stagiaire.php";
  if(isset($_POST['btnCrateStagiaire'])) {
    $Nom = $_POST['nom'];
    $CNE = $_POST['cne'];

    // echo $Nom."<br>";
    // echo $CNE."<br>";
    // echo $Type . "<br>";
    // echo $Ville . "<br>";

    $stagiaireData = [];

    $GestionStagire = new Gestion();
    $GestionStagire->setNom($Nom);
    $GestionStagire->setCne($CNE);
    // $GestionStagire->setCne($Ville);
    array_push($stagiaireData, $GestionStagire);

    // print_r($stagiaireData);
    // echo $stagiaireData[0]->getCne();

    // Add data Stagiaire In Databases
    $stagiaires = new Stagiaire();
    $stagiaires->addStagiaire($stagiaireData[0]->getNom(), $stagiaireData[0]->getCne());
  }
?>