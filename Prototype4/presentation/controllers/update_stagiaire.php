<?php
include_once "../Gestions/gestion_Stagiaire.php";
if(isset($_POST['updateStagiaire'])) {
    // get data input
    $Id = $_GET['Id'];
    $Type = $_POST['type'];
    $Nom = $_POST['nom'];
    $CNE = $_POST['cne'];
    $Ville_Id  = $_POST['ville'];

    // validation Data Update
    if(empty($Nom || $Type || $CNE)) {
        die("Please fill in all required fields.");
    }

    $UpdateStagiare = new GestionStagiaire(); //Create OBJECT UPDATE PERSONNE
    $UpdateStagiare->updateStagiaire($Nom, $Type, $CNE, $Ville_Id, $Id); // UPDATE DATA 

}