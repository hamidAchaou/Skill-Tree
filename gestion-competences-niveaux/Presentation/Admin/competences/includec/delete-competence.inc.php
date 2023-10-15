<?php
 if (isset($_POST['competenceID'])) {
     $id = $_POST['id'];
     echo $id;
     include_once "../../../loader.php";
     $competenceBLO = new CompetenceBLO();

     
    $competenceBLO->DeleteCompetence($id);

    // header('Location: index.php');
    // exit; 
}

?>