<?php
include_once "../../loader.php";
if (isset($_POST['ajouterCompetences'])) {
    $Nom = $_POST['nom'];
    $Code = $_POST['code'];
    $Reference = $_POST['reference'];
    $Description = $_POST['description'];

    $admin = new Competences();
    $admin->setNom($Nom);
    $admin->setCode($Code);
    $admin->setReference($Reference);
    $admin->setDescription($Description); // Corrected this line

    $CompetenceBLO = new CompetenceBLO();
    try {
        $AddCompetence = $CompetenceBLO->AddCompetence($admin);
    } catch (Exception $e) {
        header("location: ../ajouter-competences.php?error=" . $e->getMessage());
        die("An error occurred: " . $e->getMessage());
    }
}
?>
