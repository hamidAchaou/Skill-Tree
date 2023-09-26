<?php
include_once "../Gestions/gestion_Stagiaire.php";
include_once "../entity/stagiaire.php";
if(isset($_POST['createStagiaire'])) {
    $Nom = $_POST['nom'];
    $Type = $_POST['type'];
    $CNE = $_POST['cne'];
    $Ville_Id  = $_POST['ville'];

    echo $CNE;

    // validation Data create
    if(empty($Nom || $Type || $CNE)) {
        die("Please fill in all required fields.");
    }

    // Ad data in object 
    // $stagiaireInfo = [];
    $dataStagiaire = new Stagiaire();

    $dataStagiaire->setNom($Nom);
    $dataStagiaire->setType($Type);
    $dataStagiaire->setCne($CNE);
    $dataStagiaire->setVille_Id($Ville_Id);
    

    $AddStagiare = new GestionStagiaire();
    $AddStagiare->addStagiaire($dataStagiaire->getNom($Nom), $dataStagiaire->getType($Type), $dataStagiaire->getCne($CNE), $dataStagiaire->getVille_Id($Ville_Id));

}