<?php
include_once "../loader.php"; // get loader links
session_start(); // start session

// Check if Admin is not logged in
if (!isset($_SESSION['Nom'])) {
    header("Location: ./auth/login.php?login=none");
    exit();
}

include_once "./layouts/heade.php"; // get Head
?>

<body class="sidebar-mini">
    <div class="wrapper">
        <!-- get Navbar -->
        <?php include_once "./layouts/Navbar.php"; ?>
        <!-- get Sidebar  -->
        <?php include_once "./layouts/Sidebar.php" ?>
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
                    include_once "./layouts/flashbag.php";
                    ?>
                </div>

            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <div class="container-fluid">
                    <?php if (isset($error_message)) : ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <!-- ... other content ... -->
                </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Arbre des Compétences</h2>
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
                                        <th>Description</th>
                                        <th style="width: 12%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les compétences -->
                                    <?php
                                    try {
                                        $competencesBLL = new CompetenceBLO();
                                        $competences = $competencesBLL->getAllCompetences();

                                        foreach ($competences as $competence) :
                                            $Id =  $competence->getId();
                                            $Nom =  $competence->getNom();
                                            $Code =  $competence->getCode();
                                            $Reference =  $competence->getReference();
                                            $Description =  $competence->getDescription();
                                    ?>
                                            <tr>
                                                <td><?php echo $Reference ?></td>
                                                <td><?php echo $Code ?></td>
                                                <td><?php echo $Nom ?></td>
                                                <td><?php echo $Description ?></td>
                                                <td>
                                                    <a href="./edit-competences.php?Id=<?php echo $Id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <button onclick="setIdCompetences(<?php echo $Id ?>);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                    <?php
                                        endforeach; //end Foreach
                                    } catch (Exception $e) {
                                        echo "An error occurred: " . $e->getMessage();
                                        // You can handle the exception here as needed.
                                    }
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
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title"><i class="fas fa-exclamation-triangle"></i> Supprimer la compétence</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Etes-vous sûr de supprimer cette compétence ?</h4>
                    </div>
                    <form action="./includec/delete-competence.inc.php" method="post" class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="competenceID" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.wrapper -->
    <?php include_once "./layouts/link.php" ?>
</body>


</html>