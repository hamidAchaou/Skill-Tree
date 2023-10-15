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
        <?php include_once "../layouts/navbar.php"?>
        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/Sidebar.php" ?>
        <!-- Content Wrapper -->
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Arbre des Compétences</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">gestion des Compétences</h3>
                            <div class="card-tools">
                                <a href="./ajouter-competences.php" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                    <tr>
                                        <th >Référence</th>
                                        <th >Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th style="width: 12%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les compétences -->
                                    <tr>
                                        <td>C1</td>
                                        <td>Maquette</td>
                                        <td>Maquetter une application mobile</td>
                                        <td>Maquetter une application mobile</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=1" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(1);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C2</td>
                                        <td>Base Données</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=2" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(2);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C3</td>
                                        <td>back-end</td>
                                        <td>Développer la partie back-end d'une application we</td>
                                        <td>Développer la partie back-end d'une application we</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=3" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(3);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C4</td>
                                        <td>gestion</td>
                                        <td>Collaborer à la gestion d’un projet informatique e</td>
                                        <td>Collaborer à la gestion d’un projet informatique e</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=4" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(4);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C5</td>
                                        <td>Mobile native</td>
                                        <td>Développer une application mobile native, avec And</td>
                                        <td>Développer une application mobile native, avec And</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=5" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(5);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C6</td>
                                        <td>tests</td>
                                        <td>Préparer et exécuter les plans de tests d’une appl</td>
                                        <td>Préparer et exécuter les plans de tests d’une appl</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=6" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(6);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>C7</td>
                                        <td>déploiement</td>
                                        <td>Préparer et exécuter le déploiement d’une applicat</td>
                                        <td>Préparer et exécuter le déploiement d’une applicat</td>
                                        <td>
                                            <a href="./edit-competences.php?Id=7" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                            <button onclick="setIdCompetences(7);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
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

        <!-- main Js -->
        <script src="./asset/JS/main.js"></script>
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