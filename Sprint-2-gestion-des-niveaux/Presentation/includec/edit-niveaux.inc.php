<?php
include_once "../../loader.php";
if(isset($_POST['editCompetences'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Description = $_POST['description'];



    // validation Input
    if(empty($Nom || $Description)) {
        die("Please fill in all required fields.");
    }

    include_once "../../loader.php";
    $niveaux = new Niveaux();

    $dataNiveaux = [];
    $niveaux->setNom($Nom);
    $niveaux->setDescription($Description);
    $niveaux->setId($Id);

    $dataNiveaux[] = $niveaux;
    var_dump($dataNiveaux);

    $CompetenceBLO = new NiveauxBLO();
    $AddCompetence = $CompetenceBLO->updateNiveaux($dataNiveaux);
}