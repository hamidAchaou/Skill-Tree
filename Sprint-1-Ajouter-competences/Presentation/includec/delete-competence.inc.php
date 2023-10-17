<?php
if (isset($_POST['competenceID'])) {
    $id = $_POST['id'];

    include_once "../../loader.php";
    $competenceBLO = new CompetenceBLO();

    try {
        $competenceBLO->DeleteCompetence($id);
    } catch (Exception $e) {
        header("location: your_error_page.php?error=" . $e->getMessage());
        die("An error occurred: " . $e->getMessage());
    }
}


?>