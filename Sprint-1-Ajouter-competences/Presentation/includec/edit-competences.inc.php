<?php
    include_once "../../loader.php";

if (isset($_POST['editCompetences'])) {
    // get Value input
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference = $_POST['reference'];
    $Description = $_POST['description'];

    $competence = new Competences();

    $dataCompenent = [];
    $competence->setId($Id);
    $competence->setNom($Nom);
    $competence->setCode($Code);
    $competence->setReference($Reference);
    $competence->setDescription($Description);

    $dataCompenent[] = $competence;

    $CompetenceBLO = new CompetenceBLO();

    try {
        $AddCompetence = $CompetenceBLO->updateCompetence($dataCompenent);
    } catch (Exception $e) {
        header("location: ../edit-competences.php?error=" . $e->getMessage());
        die("An error occurred: " . $e->getMessage());
    }
}