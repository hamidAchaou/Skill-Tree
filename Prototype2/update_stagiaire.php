<?php
include_once "../Databases/Stagiaire.php";
if(isset($_POST['updateStagiaire'])) {
    $Id = $_GET['Id'];
    $Type = $_POST['type'];
    $Nom = $_POST['nom'];
    $CNE = $_POST['cne'];
    $Ville_Id  = $_POST['ville'];

    echo $Id;
    // echo $Type;
    // echo $Nom;
    // echo $CNE;
    // echo $Ville_Id;


    // validation Data create
    if(empty($Nom || $Type || $CNE)) {
        die("Please fill in all required fields.");
    }

    // $AddStagiare = new Stagiaire();
    // $AddStagiare->addStagiaire($Nom, $Type, $CNE, $Ville_Id);

}