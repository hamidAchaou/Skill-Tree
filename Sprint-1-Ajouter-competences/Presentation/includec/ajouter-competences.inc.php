<?php
include_once "../../loader.php";
if (isset($_POST['ajouterCompetences'])) {
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference = $_POST['reference'];
    $Description = $_POST['description'];

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
        header("location: ../ajouter-competences.php?error=emptyinput");
        die("Please fill in all required fields.");
    }

    if (!validateWithRegex($Nom, $nameRegex) || !validateWithRegex($Code, $codeRegex) || !validateWithRegex($Reference, $referenceRegex)) {
        header("location: ../ajouter-competences.php?error=invalidinput");
        die("Invalid input. Please check the format of your data.");
    }

    $admin = new Competences();
    $admin->setNom($Nom);
    $admin->setCode($Code);
    $admin->setReference($Reference);
    $admin->setDescription($Description); // Corrected this line

    $CompetenceBLO = new CompetenceBLO();
    $AddCompetence = $CompetenceBLO->AddCompetence($admin);
}
?>
