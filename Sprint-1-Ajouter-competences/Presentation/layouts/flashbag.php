<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<div class="alert alert-danger text-center">Please fill in all fields.</div>';
        } elseif ($_GET['error'] == "usernotfoundEmail") {
            echo '<div class="alert alert-danger text-center">User not found.</div>';
        } elseif ($_GET['error'] == "worningpassword") {
            echo '<div class="alert alert-danger text-center" role="alert">Incorrect password.</div>';
        } elseif ($_GET['error'] == "stmtfailed") {
            echo '<div class="alert alert-danger text-center">Something went wrong. Please try again.</div>';
        }
    } elseif (isset($_GET['login'])) {
        if ($_GET['login'] == "success") {
            echo '<div class="alert alert-success text-center">Login successful.</div>';
        }
    } elseif (isset($_GET['success'])) {
        if ($_GET['success'] == "addCompetencesSuccess") {
            echo '<div class="alert alert-success text-center mt-4">La compétence a été ajoutée.</div>';
        } elseif ($_GET['success'] == "deleteSuccess") {
            echo '<div class="alert alert-info text-center mt-4">La compétence a été suprimie.</div>';
        } elseif ($_GET['success'] == "updateSuccess") {
            echo '<div class="alert alert-info text-center mt-4 ">La compétence a été modifier.</div>';
        }
    }
?>