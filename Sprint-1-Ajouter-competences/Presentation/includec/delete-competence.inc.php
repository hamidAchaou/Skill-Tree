<?php
 if (isset($_GET['competenceID'])) {
    $competenceBLO = new CompetenceBLO();
    $id = $_GET['competenceID'];

    $competenceBLO->DeleteCompetence($id);

    header('Location: index.php');
    exit; 
}

?>