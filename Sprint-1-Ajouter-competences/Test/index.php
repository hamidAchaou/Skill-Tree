<?php
$pass = "SoliCoders2023";
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
echo $hashedPassword;
?>