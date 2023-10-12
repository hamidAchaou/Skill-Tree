<?php
include_once "../../loader.php";
if(isset($_POST['ajouterNiveaux'])) {
    $Nom = $_POST['nom'];
    $Description = $_POST['description'];



    // validation Input
    if(empty($Nom || $Description)) {
        die("Please fill in all required fields.");
    }

    $niveaux = new Niveaux();

    $niveaux->setNom($Nom);
    $niveaux->setDescription($Description);

    // print_r($infoCompetences);

    $CompetenceBLO = new NiveauxBLO();
    $AddCompetence = $CompetenceBLO->AddNiveaux($niveaux);
}