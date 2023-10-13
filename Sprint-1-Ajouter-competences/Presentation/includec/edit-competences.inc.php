<?php
include_once "../../loader.php";
if(isset($_POST['editCompetences'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];
    $Description  = $_POST['description'];



    // validation Input
    if(empty($Nom || $Code || $Reference || $Description)) {
        die("Please fill in all required fields.");
    }

    include_once "../../loader.php";
    $competence = new Competences();

    $dataCompenent = [];
    $competence->setId($Id);
    $competence->setNom($Nom);
    $competence->setCode($Code);
    $competence->setReference($Reference);
    $competence->setDescription($Description);

    $dataCompenent[] = $competence;

    $CompetenceBLO = new CompetenceBLO();
    $AddCompetence = $CompetenceBLO->updateCompetence($dataCompenent);
}