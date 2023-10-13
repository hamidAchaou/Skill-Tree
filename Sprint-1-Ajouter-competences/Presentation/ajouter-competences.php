<?php
include_once "./layouts/heade.php"; // get Head
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
        <?php include_once "../Presentation/layouts/Sidebar.php" ?>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ajouter une compétence</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <?php
                                include_once "./layouts/flashbag.php"; // get Flashbag
                            ?>
                            <form action="./includec/ajouter-competences.inc.php" method="post">
                            <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrez la référence" required>
                                    <div id="reference-error" class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Entrez la code">
                                    <div id="code-error" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez la name" required>
                                    <div id="nom-error" class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea name="description" id="inputDescription" class="form-control" required oninvalid="this.setCustomValidity('Ajouter ce champ s\'ils vous plait')" oninput="setCustomValidity('')"></textarea>
                                </div>
                                <button type="submit" name="ajouterCompetences" class="btn btn-primary" id="ajouterCompetences">Ajouter Competences</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

     

<?php include_once "./layouts/link.php"; ?>
    <script>
tinymce.init({
    selector: '#inputDescription', // Use the textarea's ID
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar_mode: 'floating',
  });
</script>
</body>

</html>