<?php
    include_once "../entity/Stagiaire.php";
    include_once "../Gestions/Gestion_Stagiaire.php";

    if(isset($_POST['btn_Delete_Stagiaire'])){
        $Id =  $_POST['id_Confirmed'];

        $deleteStagiaire = new GestionStagiaire();
        $deleteStagiaire->deleteStagiaire($Id);

        header('Location: ../UI/index.php?delete=success');
        exit();
    }
?>
?>