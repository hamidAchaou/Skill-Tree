<?php
include_once "./Stagiaire.php";
include_once "./Gestion_Stagiaire.php";
if(isset($_POST['updateStagiaire'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $CNE = $_POST['cne'];

    echo $Id;

    // validation Data create
    if(empty($Nom || $Type || $CNE)) {
        die("Please fill in all required fields.");
    }

    
    $stagiaireDataUpdate = [];

    $GestionStagire = new Gestion();
    $GestionStagire->setNom($Nom);
    $GestionStagire->setCne($CNE);
    $GestionStagire->setCne($Id);

    array_push($stagiaireDataUpdate, $GestionStagire);


    $AddStagiare = new Stagiaire();
    $AddStagiare->update($Nom, $CNE, $Id);

}