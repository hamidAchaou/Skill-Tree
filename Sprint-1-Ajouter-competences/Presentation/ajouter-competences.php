<?php
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
        <?php include_once "./layouts/Navbar.php"?>
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
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php
                    include_once "./layouts/flashbag.php"; // Include Flashbag
                ?>
                <form action="./includec/ajouter-competences.inc.php" method="post" id="myForm">
                    <div class="mb-3">
                        <label for="reference" class="form-label">Reference <span>*</span></label>
                        <input type="text" class="form-control" id="reference" name="reference" placeholder="Entrez le reference"  pattern=".{1,}" oninvalid="this.setCustomValidity('Veuillez entrer la référence (Ce champ est obligatoire)')" oninput="setCustomValidity('')">
                        <div id="referenceError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Entrez le code">
                        <div id="codeError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span>*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom"  pattern=".{1,}" oninvalid="this.setCustomValidity('Veuillez entrer le nom (Ce champ est obligatoire)')" oninput="setCustomValidity('')">
                        <div id="nomError" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea name="description" id="inputDescription" class="form-control" oninvalid="this.setCustomValidity('Ajouter ce champ s\'il vous plaît')" oninput="setCustomValidity('')"></textarea>
                    </div>
                    <button type="submit" name="ajouterCompetences" class="btn btn-primary" id="ajouterCompetences">Ajouter Compétences</button>
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

    // Add a submit event listener to the form
    document.getElementById("myForm").addEventListener("submit", function (event) {
        // Initialize error flags
        let hasError = false;

        // Check if the required fields are empty
        if (document.getElementById("reference").value.trim() === "") {
            document.getElementById("reference").focus();
        
            document.getElementById("referenceError").innerHTML = "Veuillez entrer la référence (Ce champ est obligatoire)";
            hasError = true;
        } else {
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
</script>
</body>

</html>