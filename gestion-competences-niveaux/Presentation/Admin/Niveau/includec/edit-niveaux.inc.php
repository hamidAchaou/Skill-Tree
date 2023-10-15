<?php
include_once "../../../loader.php";
if(isset($_POST['editCompetences'])) {
    $Id = $_GET['Id'];
    $Nom = $_POST['nom'];
    $Description = $_POST['description'];

    // Regular expressions for validation
    $nameRegex = '/^[A-Za-z\s]+$/';     
    
    // Function to validate a value against a regex pattern
    function validateWithRegex($value, $regex) {
        return preg_match($regex, $value) === 1;
    }

    // validation Input
    if(empty($Nom || $Description)) {
        header("location: ../edit-niveaux.php?error=emptyinput");

        die("Please fill in all required fields.");
    }

    if (!validateWithRegex($Nom, $nameRegex)) {
        header("location: ../edit-niveaux.php?error=invalidinput");
        die("Invalid input. Please check the format of your data.");
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