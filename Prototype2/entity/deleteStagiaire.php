<?php
    include "../Stagiaire.php";
    include_once "../Gestion_Stagiaire.php";
if(isset($_POST['btn_Delete_Stagiaire'])){
    $Id =  $_POST['id_Confirmed'];

    $stgiaire = new Gestion();

    $stgiaire->setId($Id);

    $deleteStagiaire = new Stagiaire();

    $deleteStagiaire->deleteStagiaire($stgiaire->getId());

    header('Location: ../index.php?delete=success');

}
?>