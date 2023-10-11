<?php
include_once "../../Entities/admin.php";
include_once "../../BLL/authBLO/loginBLO.php";

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $admin = new Admin();
    $admin->setEmail($email);
    $admin->setPassword($pass);
    $admin->setRole($role);

    echo $admin->getEmail();

    $loginBLO = new LoginBLO($admin);
    $loginBLO->loginAdmin();
}
?>