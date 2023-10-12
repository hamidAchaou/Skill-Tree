<?php include_once "../loader.php"; ?>

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
        <!-- Sidebar -->
        <?php include_once "./layouts/Sidebar.php" ?>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Skill</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">

                            <!-- Get competence -->
                            <?php
                            $Id = $_GET['Id'];
                            $competencesBLL = new CompetenceBLO();
                            $competence = $competencesBLL->getCompetence($Id);

                            $Id = $Id;
                            $Nom = $competence[0]->getNom();
                            $Code = $competence[0]->getCode();
                            $Reference = $competence[0]->getReference();
                            ?>
                            <form action="./includec/edit-competences.inc.php?Id=<?php echo $Id ?>" method="post">
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Enter code" value="<?php echo $Code ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="nom" placeholder="Enter name" value="<?php echo $Nom ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference" value="<?php echo $Reference ?>">
                                </div>
                                <button type="submit" class="btn btn-primary" name="editCompetences">Update Skill</button>
                            </form>
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