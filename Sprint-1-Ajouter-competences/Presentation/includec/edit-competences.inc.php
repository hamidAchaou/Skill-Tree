<?php
include_once "../../loader.php";
if(isset($_POST['editCompetences'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];



    // validation Input
    if(empty($Nom || $Code || $Reference)) {
        die("Please fill in all required fields.");
    }

    include_once "../../loader.php";
    $competence = new Competences();

    $dataCompenent = [];
    $competence->setId($Id);
    $competence->setNom($Nom);
    $competence->setCode($Code);
    $competence->setReference($Reference);

    $dataCompenent[] = $competence;
    var_dump($dataCompenent);

    $CompetenceBLO = new CompetenceBLO();
    $AddCompetence = $CompetenceBLO->updateCompetence($dataCompenent);
}