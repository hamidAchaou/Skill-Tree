<?php
include_once "./layouts/heade.php";
session_start();
// include_once "../BLL/CompetencesBLL.php";
include_once "../loader.php";

// Check if Admin is not logged in
if (!isset($_SESSION['Nom'])) {
    header("Location: ./auth/login.php?login=none");
    exit();
}

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
                                        <th>Référence</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Actions</th>
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
                                            <td>
                                                <a href="./edit-competences.php?Id=<?php echo $Id ?>" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                                <button onclick="setIdCompetences(<?php echo $Id ?>);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i> </button>
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#morInfo" onclick="setDescriptionCompetences('<?php echo $Description ?>')">                                                  <input type="text" value="<?php echo $Description; ?>">
                                                  <i class="fas fa-info-circle"></i>
                                                </button>
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

        <!-- modal more info -->
        <div class="modal fade" id="morInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete competence</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="modaldescription" >hh</p>
                    </div>
                    <form action="./includec/delete-competence.inc.php" method="post" class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="competenceID" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
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