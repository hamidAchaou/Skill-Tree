<?php
include_once "../Databases/Stagiaire.php";
if(isset($_POST['createStagiaire'])) {
    $Nom = $_POST['nom'];
    $Type = $_POST['type'];
    $CNE = $_POST['cne'];
    $Ville_Id  = $_POST['ville'];

    // validation Data create
    if(empty($Nom || $Type || $CNE)) {
        die("Please fill in all required fields.");
    }

    $AddStagiare = new Stagiaire();
    $AddStagiare->addStagiaire($Nom, $Type, $CNE, $Ville_Id);

}