<?php
$pass = "admin";
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
echo $hashedPassword;
?>