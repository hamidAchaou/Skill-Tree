<?php
session_start();
session_unset();
session_destroy();

header('location: ../pages/user/homePage.php?error=none');