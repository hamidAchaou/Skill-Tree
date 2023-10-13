<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <script src="https://cdn.tiny.cloud/1/olc58yk4u06dizq9mfugzr102xtf2bbtrfh77s54c087gtv7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                            <form action="./includec/ajouter-competences.inc.php" method="post">
                            <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrez la référence" required>
                                    <div id="reference-error" class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Entrez la code" required>
                                    <div id="code-error" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez la name" required>
                                    <div id="nom-error" class="invalid-feedback"></div>
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="reference" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Entrez la description" required>
                                    <div id="reference-error" class="invalid-feedback"></div>
                                </div> -->
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

     

        <!-- main Js -->
        <script src="./asset/JS/main.js"></script>
        <!-- jQuery -->     
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <!-- /.wrapper -->

    <script>
  tinymce.init({
    selector: '#inputDescription', // Use the textarea's ID
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar_mode: 'floating',
  });
</script>
</body>

</html>