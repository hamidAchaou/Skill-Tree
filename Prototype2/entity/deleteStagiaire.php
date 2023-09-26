<?php
    include_once "../entity/Stagiaire.php";
    include_once "../Gestion/Gestion_Stagiaire.php";

if(isset($_POST['btn_Delete_Stagiaire'])){
    $Id =  $_POST['id_Confirmed'];

    $stgiaire = new Stagiaire();

    $stgiaire->setId($Id);

    $deleteStagiaire = new GestionStagiaire();

    $deleteStagiaire->deleteStagiaire($stgiaire->getId());

    header('Location: ../UI/index.php?delete=success');
    echo "HELLO WORLD";

}
?>