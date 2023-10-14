<?php
include_once "../../loader.php";
if(isset($_POST['editCompetences'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference  = $_POST['reference'];
    $Description  = $_POST['description'];


    // Regular expressions for validation
    $codeRegex = '/^[A-Za-z0-9]+$/';     
    $nameRegex = '/^[A-Za-z\s]+$/';       
    $referenceRegex = '/^[A-Za-z0-9]+$/'; 

    // Function to validate a value against a regex pattern
    function validateWithRegex($value, $regex) {
        return preg_match($regex, $value) === 1;
    }

    // Validation Input
    if (empty($Nom) || empty($Reference)) {
        header("location: ../edit-competences.php?error=emptyinput");
        die("Please fill in all required fields.");
    }

    if (!validateWithRegex($Nom, $nameRegex) || !validateWithRegex($Code, $codeRegex) || !validateWithRegex($Reference, $referenceRegex)) {
        header("location: ../edit-competences.php?error=invalidinput");
        die("Invalid input. Please check the format of your data.");
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