<?php
include_once "../../data_storage/gestion_Stagiaire.php";

if(isset($_POST['btn_Delete_Stagiaire'])){
    $Id =  $_POST['id_Confirmed'];
        $deleteStagiaire = new GestionStagiaire();
        $deleteStagiaire->deleteStagiaire($Id);

        header('Location: ../views/index?delete=success');
        exit();
    } else {
        header('Location: ../views/index?delete=failde');
        echo "failde";
    }
?>
