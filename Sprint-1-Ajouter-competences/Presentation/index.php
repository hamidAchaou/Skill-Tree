<?php include_once "./layouts/heade.php" ?>
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
                                        <th>Code</th>
                                        <th>Nom</th>
                                        <th>Référence</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SK001</td>
                                        <td>HTML</td>
                                        <td>REF001</td>
                                        <td>HyperText Markup Language</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SK002</td>
                                        <td>CSS</td>
                                        <td>REF002</td>
                                        <td>Cascading Style Sheets</td>
                                        <td>
                                            <a href="./edit-competences.php" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <!-- Add more rows for additional skills -->
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