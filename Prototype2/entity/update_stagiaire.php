<?php
include_once "../Gestion/Gestion_Stagiaire.php";
include_once "../entity/Stagiaire.php";
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

    $GestionStagire = new Stagiaire();
    $GestionStagire->setNom($Nom);
    $GestionStagire->setCne($CNE);
    $GestionStagire->setCne($Id);

    array_push($stagiaireDataUpdate, $GestionStagire);


    $AddStagiare = new GestionStagiaire();
    $AddStagiare->update($Nom, $CNE, $Id);

}