<?php
include_once "../../loader.php"; // get loader links
include_once "../layouts/heade.php"; // get Head
session_start(); // start session

// Check if Admin is not logged in
if (!isset($_SESSION['Nom'])) {
    header("Location: ../../Admin/auth/login.php?login=none");
    exit();
}
?>

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
        <?php include_once "../layouts/Sidebar.php" ?>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Modifier la compétence</h1>
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
                            $Description = $competence[0]->getDescription();

                            include_once "../layouts/flashbag.php"; // get Flashbag
                            ?>
                            <form action="./includec/edit-competences.inc.php?Id=<?php echo $Id ?>" method="post">
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference" value="<?php echo $Reference ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Enter code" value="<?php echo $Code ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="nom" placeholder="Enter name" value="<?php echo $Nom ?>" required title="Please enter a name">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea name="description" id="inputDescription" class="form-control" required oninvalid="this.setCustomValidity('Ajouter ce champ s\'il vous plaît')" oninput="setCustomValidity('')">
        <?php echo $Description ?>
        </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="editCompetences">Modifier compétence</button>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.wrapper -->
    <?php include_once "../layouts/link.php"; ?>
    <script>
        tinymce.init({
            selector: '#inputDescription', // Use the textarea's ID
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar_mode: 'floating',
        });
    </script>
</body>

</html>