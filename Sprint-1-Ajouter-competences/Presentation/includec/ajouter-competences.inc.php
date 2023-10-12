<?php
include_once "../../loader.php";
if(isset($_POST['ajouterCompetences'])) {
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];



    // validation Input
    if(empty($Nom || $Code || $Reference)) {
        die("Please fill in all required fields.");
    }

    $admin = new Competences();

    $admin->setNom($Nom);
    $admin->setCode($Code);
    $admin->setReference($Reference);

    // print_r($infoCompetences);

    $CompetenceBLO = new CompetenceBLO();
    $AddCompetence = $CompetenceBLO->AddCompetence($admin);
}