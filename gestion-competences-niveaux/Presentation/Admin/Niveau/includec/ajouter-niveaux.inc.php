<?php
include_once "../../../loader.php";
if(isset($_POST['ajouterNiveaux'])) {
    $Nom = $_POST['nom'];
    $Description = $_POST['description'];

    // Regular expressions for validation
    $nameRegex = '/^[A-Za-z\s]+$/';       


    // validation Input
    if(empty($Nom || $Description)) {
        header("location: ../ajouter-niveaux.php?error=emptyinput");
        die("Please fill in all required fields.");
    }

    if (!validateWithRegex($Nom, $nameRegex)) {
        header("location: ../ajouter-niveaux.php?error=invalidinput");
        die("Invalid input. Please check the format of your data.");
    }
   
    // Function to validate a value against a regex pattern
    function validateWithRegex($value, $regex) {
        return preg_match($regex, $value) === 1;
    }

    $niveaux = new Niveaux();

    $niveaux->setNom($Nom);
    $niveaux->setDescription($Description);

    // print_r($infoCompetences);

    $CompetenceBLO = new NiveauxBLO();
    $AddCompetence = $CompetenceBLO->AddNiveaux($niveaux);
}