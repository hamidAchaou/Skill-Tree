<?php
include_once "../../Entities/admin.php";
include_once "../../BLL/authBLO/loginBLO.php";

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $admin = new Admin();
    $infoAdmin = [];
    $infoAdmin['email'] = $admin->setEmail($email);
    $infoAdmin['password'] = $admin->setPassword($pass);

    $loginBLO = new CompetenceBLO();
    $loginBLO->AddCompetence($infoAdmin);
}
?>