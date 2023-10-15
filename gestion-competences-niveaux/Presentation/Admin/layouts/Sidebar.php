<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed" style="top: 0;">
    <!-- Brand Logo -->
    <a href="./index.php" class="brand-link">
        <img src="../../asset/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle bg-white">
        <span class="brand-text font-weight-light">SoliCoders</span>
    </a>
    <div class="brand-link text-center">
        <p>
            <?php
            echo $_SESSION['Nom'];
            ?>
        </p>
    </div>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column h-100">
        <!-- Sidebar Menu -->
        <nav class="mt-2 flex-grow-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Skills Management -->
                <li class="nav-item">
                    <a href="../competences/index.php" class="nav-link">
                        <i class="fa-solid fa-list-check"></i>
                        <p>
                            Gestion des compétences
                        </p>
                    </a>
                </li>
                <!-- Niveau Management -->
                <li class="nav-item">
                    <a href="../Niveau/index.php" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Gestion des niveaux
                        </p>
                    </a>
                </li>
                <!-- Interns Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Gestion des stagiaires
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Logout Button -->
        <div class="p-3 d-flex align-items-end">
            <a href="../../../BLL/authBLO/logoute.php" class="btn btn-danger w-100">
                <i class="nav-icon fas fa-sign-out-alt me-2"></i>
                Logout
            </a>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
