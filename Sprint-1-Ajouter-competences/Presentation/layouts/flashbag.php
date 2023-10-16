<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<div class="alert alert-danger text-center">Veuillez remplir tous les champs.</div>';
        }elseif ($_GET['error'] == "invalidinput") {
            echo '<div class="alert alert-danger text-center">Entrée invalide. Veuillez vérifier le format de vos données..</div>';
        } elseif ($_GET['error'] == "usernotfoundEmail") {
            echo '<div class="alert alert-danger text-center">votre email est incorrect.</div>';
        } elseif ($_GET['error'] == "worningpassword") {
            echo '<div class="alert alert-danger text-center" role="alert">Mot de passe incorrect.</div>';
        } elseif ($_GET['error'] == "stmtfailed") {
            echo '<div class="alert alert-danger text-center">Quelque chose s\'est mal passé. Veuillez réessayer.</div>';
        }
    } elseif (isset($_GET['login'])) {
        if ($_GET['login'] == "success") {
            echo '<div class="alert alert-success text-center">Connexion réussie.</div>';
        }
    } elseif (isset($_GET['success'])) {
        if ($_GET['success'] == "addCompetencesSuccess") {
            echo '<div class="alert alert-success text-center mt-4">La compétence a été ajoutée.</div>';
        } elseif ($_GET['success'] == "deleteSuccess") {
            echo '<div class="alert alert-info text-center mt-4">La compétence a été suprimie.</div>';
        } elseif ($_GET['success'] == "updateSuccess") {
            echo '<div class="alert alert-info text-center mt-4 ">La compétence a été modifier.</div>';
        } elseif ($_GET['success'] == "addNiveauxsSuccess") {
            echo '<div class="alert alert-success text-center mt-4">Le Niveaux a été ajoutée.</div>';
        } elseif ($_GET['success'] == "deleteNiveauSuccess") {
            echo '<div class="alert alert-info text-center mt-4">Le Niveaux a été suprimie.</div>';
        } elseif ($_GET['success'] == "updateNiveauSuccess") {
            echo '<div class="alert alert-info text-center mt-4 ">Le Niveaux a été modifier.</div>';
        }
    }
?>