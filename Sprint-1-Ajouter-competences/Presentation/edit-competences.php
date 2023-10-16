<?php
include_once "../loader.php"; // get loader links
include_once "./layouts/heade.php"; // get Head
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
        <?php include_once "./layouts/Sidebar.php" ?>
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

                            include_once "./layouts/flashbag.php"; // get Flashbag
                            ?>
                            <form action="./includec/edit-competences.inc.php?Id=<?php echo $Id ?>" method="post" id="myForm">
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference <span>*</span></label>
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrez le reference" value="<?php echo $Reference ?>" pattern=".{1,}" oninvalid="this.setCustomValidity('Veuillez entrer la référence (Ce champ est obligatoire)')" oninput="setCustomValidity('')">
                                    <div id="referenceError" class="text-danger"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Entrez le code" value="<?php echo $Code ?>">
                                    <div id="codeError" class="text-danger"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span>*</span></label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom" value="<?php echo $Nom ?>" pattern=".{1,}" oninvalid="this.setCustomValidity('Veuillez entrer le nom (Ce champ est obligatoire)')" oninput="setCustomValidity('')">
                                    <div id="nomError" class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea name="description" id="inputDescription" class="form-control" oninvalid="this.setCustomValidity('Ajouter ce champ s\'il vous plaît')" oninput="setCustomValidity('')">
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
    <?php include_once "./layouts/link.php"; ?>
    <script>
        tinymce.init({
            selector: '#inputDescription', // Use the textarea's ID
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar_mode: 'floating',
        });

        // Add a submit event listener to the form
        document.getElementById("myForm").addEventListener("submit", function (event) {
            // Initialize error flags
            let hasError = false;

            // Check if the required fields are empty
            if (document.getElementById("reference").value.trim() === "") {
                document.getElementById("reference").focus();
                document.getElementById("referenceError").innerHTML = "Veuillez entrer la référence (Ce champ est obligatoire)";
                hasError = true;
            }
            else {
                document.getElementById("referenceError").innerHTML = "";
            }

            if (document.getElementById("nom").value.trim() === "") {
                document.getElementById("nom").focus();
                document.getElementById("nomError").innerHTML = "Veuillez entrer le nom (Ce champ est obligatoire)";
                hasError = true;
            } else {
                document.getElementById("nomError").innerHTML = "";
            }

            // Prevent the form from submitting if there are errors
            if (hasError) {
                event.preventDefault();
            }
        });

// Add focus event listeners to clear error messages when input fields are focused
document.getElementById("reference").addEventListener("focus", function () {
    document.getElementById("referenceError").innerHTML = "";
});

document.getElementById("nom").addEventListener("focus", function () {
    document.getElementById("nomError").innerHTML = "";
});

    </script>
</body>
</html>
