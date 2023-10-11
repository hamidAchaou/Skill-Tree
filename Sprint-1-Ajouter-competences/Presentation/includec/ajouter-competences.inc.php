<?php
if(isset($_POST['ajouterCompetences'])) {
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];



    // validation Input
    if(empty($Nom || $Code || $Reference)) {
        die("Please fill in all required fields.");
    }

    include_once "../../loader.php";
    $admin = new Competences();
    $infoCompetences = [];
    $infoCompetences['Nom'] = $admin->setNom($Nom);
    $infoCompetences['Code'] = $admin->setCode($Code);
    $infoCompetences['Reference'] = $admin->setReference($Reference);

    print_r($infoCompetences);


}