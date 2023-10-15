<?php
include_once "../../Entities/admin.php";
include_once "../../BLL/authBLO/loginBLO.php";

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    if ($role !== "admin") {
        header("location: ../../Presentation/auth/login.php?error=worningAdmin");
        exit();
    } else {
        $admin = new Admin();
        $admin->setEmail($email);
        $admin->setPassword($pass);
        $admin->setRole($role);


        $loginBLO = new LoginBLO($admin);
        $loginBLO->loginAdmin();
    }
}
?>