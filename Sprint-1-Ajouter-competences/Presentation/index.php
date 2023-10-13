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
                            <h1 class="m-0">Compétences</h1>
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
                                        <th >Référence</th>
                                        <th >Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th style="width: 11%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les compétences -->
                                    <?php
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
                                                <a href="./edit-competences.php?Id=<?php echo $Id ?>" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                                <button onclick="setIdCompetences(<?php echo $Id ?>);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                                <!-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#morInfo" onclick="setDescriptionCompetences('<?php echo $Description ?>', '<?php echo $Code ?>')"> <input type="hidden" value="<?php echo $Description; ?>">
                                                    <i class="fas fa-info-circle"></i>
                                                </button> -->
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
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete competence</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Ar you sur delete this competence ?</h2>
                    </div>
                    <form action="./includec/delete-competence.inc.php" method="post" class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="competenceID" class="btn btn-danger">DELETE</button>
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