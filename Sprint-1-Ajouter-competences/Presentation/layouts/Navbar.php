<nav class="main-header navbar navbar-expand navbar-white navbar-light position-fixed w-100" style="top: 0;">
    <!-- Left Navbar Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right Navbar Links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION['Nom']; ?></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="../Presentation/asset/images/logo.png" class="img-circle elevation-2" alt="User Image" style="width: 30px; height: 30px;">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><?php echo $_SESSION['Nom']; ?></a>
                <div class="dropdown-divider"></div>
                <a href="../BLL/authBLO/logoute.php" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>
</nav>