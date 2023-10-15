<?php
include_once "../layouts/heade.php";
session_start();
// include_once "../BLL/CompetencesBLL.php";
include_once __DIR__ . "../../../loader.php";

// Check if Admin is not logged in
if (!isset($_SESSION['Nom'])) {
    header("Location: ../../Admin/auth/login.php?login=none");
    exit();
}

?>

<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once "../layouts/Navbar.php"; ?>
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

                    <?php
                    // get flashbag
                    include_once "../layouts/flashbag.php";
                    ?>
                </div>

            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">gestion des niveaux</h3>
                            <div class="card-tools">
                                <a href="./ajouter-niveaux.php" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th style="width: 18%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les Niveaux -->
                                    <?php
                                    $competencesBLL = new NiveauxBLO();
                                    $competences = $competencesBLL->getAllNiveaux();

                                    foreach ($competences as $competence) :
                                        $Id =  $competence->getId();
                                        $Nom =  $competence->getNom();
                                        $Description =  $competence->getDescription();
                                    ?>
                                        <tr>
                                            <td><?php echo $Nom ?></td>
                                            <td><?php echo $Description ?></td>
                                            <td class="text-center">
                                                <a href="./edit-niveaux.php?Id=<?php echo $Id ?>" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                                <button onclick="setIdNiveaux(<?php echo $Id ?>);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                            </td>
                                        </tr>

                                    <?php
                                    endforeach; //end Foreache
                                    ?>

                                    <!-- en skills -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!-- Modal DElete Competences -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white" id="exampleModalLabel">
                            <i class="fas fa-exclamation-triangle"></i> Delete Competence
                        </h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Êtes-vous sûr de vouloir supprimer cette Niveaux ?</h4>
                    </div>
                    <form action="./includec/delete-niveaux.inc.php" method="post" class="modal-footer">
                        <input type="hidden" name="Id_niveaux" id="Id_niveaux">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="competenceID" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- main Js -->
        <script src="./asset/JS/main.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    </div>
    <!-- /.wrapper -->
</body>

</html>