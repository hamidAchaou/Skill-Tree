<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left Navbar Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
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
                            <h1 class="m-0">Skills</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Skills</h3>
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

                                    <!-- Obtenez toutes les compétences -->
                                    <tr>
                                        <td>Maquette</td>
                                        <td>C1</td>
                                        <td>Maquetter une application mobile</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=1" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(1);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Base Données</td>
                                        <td>C2</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=2" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(2);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>back-end</td>
                                        <td>C3</td>
                                        <td>Développer la partie back-end d'une application we</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=3" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(3);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>gestion</td>
                                        <td>C4</td>
                                        <td>Collaborer à la gestion d’un projet informatique e</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=4" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(4);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Mobile native</td>
                                        <td>C5</td>
                                        <td>Développer une application mobile native, avec And</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=5" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(5);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>tests</td>
                                        <td>C6</td>
                                        <td>Préparer et exécuter les plans de tests d’une appl</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=6" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(6);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>déploiement</td>
                                        <td>C7</td>
                                        <td>Préparer et exécuter le déploiement d’une applicat</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=7" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(7);" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
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