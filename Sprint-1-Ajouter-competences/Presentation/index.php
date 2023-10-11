<?php include_once "./layouts/heade.php";
// session_start();
?>
<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light position-fixed w-100" style="top: 0;">
            <!-- Left Navbar Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right Navbar Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="../Asset/images/" class="img-circle elevation-2" alt="User Image" style="width: 30px; height: 30px;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <?php include_once "./layouts/Sidebar.php" ?>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Compétences</h1>
                        </div>
                    </div>

                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyinput") {
                            echo '<div class="alert alert-danger text-center">Please fill in all fields.</div>';
                        } elseif ($_GET['error'] == "usernotfoundEmail") {
                            echo '<div class="alert alert-danger text-center">User not found.</div>';
                        } elseif ($_GET['error'] == "worningpassword") {
                            echo '<div class="alert alert-danger text-center" role="alert">Incorrect password.</div>';
                        } elseif ($_GET['error'] == "stmtfailed") {
                            echo '<div class="alert alert-danger text-center">Something went wrong. Please try again.</div>';
                        }
                    } elseif (isset($_GET['login'])) {
                        if ($_GET['login'] == "success") {
                            echo '<div class="alert alert-success text-center">Login successful.</div>';
                        }
                    }
                    ?>
                </div>
            
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Compétences</h3>
                            <div class="card-tools">
                                <a href="./ajouter-competences.php" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Référence</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>C1</td>
                                    <td>Maquette</td>
                                    <td>Maquetter une application mobile</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C2</td>
                                        <td>Base Données</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C3</td>
                                        <td>Base Données</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C4</td>
                                        <td>gestion</td>
                                        <td>Collaborer à la gestion d’un projet informatique et à l’organisation de<br>l’environnement de développement - perfectionnement</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C5</td>
                                        <td>Mobile native</td>
                                        <td>Développer une application mobile native, avec Android et React Native</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C6</td>
                                        <td>tests</td>
                                        <td>Préparer et exécuter les plans de tests d’une application</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C7</td>
                                        <td>déploiement</td>
                                    <td>Préparer et exécuter le déploiement d’une application web et mobile - perfectionnement</td>
                                    <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <!-- en skills -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    </div>
    <!-- /.wrapper -->
</body>
</html>