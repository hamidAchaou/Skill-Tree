<?php
include_once "../../loader.php";
if(isset($_POST['ajouterCompetences'])) {
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];

    // validation Input
    if(empty($Nom || $Reference)) {
        header("location ../ajouter-competences.php?error=emptyinput");
        // die("Please fill in all required fields.");
    }

    $admin = new Competences();
    $admin->setNom($Nom);
    $admin->setCode($Code);
    $admin->setReference($Reference);

    $CompetenceBLO = new CompetenceBLO();
    $AddCompetence = $CompetenceBLO->AddCompetence($admin);
}