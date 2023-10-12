<?php
session_start();
session_unset();
session_destroy();

header('location: ../../Presentation/auth/login.php?error=none');