<?php
 if (isset($_POST['competenceID'])) {
     $id = $_POST['Id_niveaux'];
     
     include_once "../../../loader.php";
     $competenceBLO = new NiveauxBLO();

     
    $competenceBLO->DeleteNiveaux($id);

    // header('Location: index.php');
    // exit; 
}

?>