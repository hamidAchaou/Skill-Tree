<?php
include_once "../../Entities/admin.php";
include_once "../../BLL/authBLO/loginBLO.php";

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $admin = new Admin();
    $infoAdmin = [];
    $infoAdmin['email'] = $admin->setEmail($email); // Make sure setEmail() returns the email value
    $infoAdmin['password'] = $admin->setPassword($pass);
    // print_r($infoAdmin);
    // echo $admin->getEmail(); // Use $admin instead of $infoAdmin
    // echo $admin->getPassword(); // Use $admin instead of $infoAdmin

    $loginBLO = new LoginBLO($admin);
}
?>