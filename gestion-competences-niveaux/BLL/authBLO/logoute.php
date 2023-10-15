<?php
session_start();
session_unset();
session_destroy();

// include "../../Presentation/Admin/auth/login.php";
header('location: ../../Presentation/Admin/auth/login.php?error=none');