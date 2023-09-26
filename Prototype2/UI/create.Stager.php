<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="./asset//style.css">

    <title>Create des stagiaire</title>
</head>
<body>

    <!-- =========================== Start NavBar ==================== -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Stagiaire Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Stagiaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-light create-stagiaire" href="./create.Stager.php">Create Stagiaire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- =========================== END NavBar ==================== -->
    
    <!-- =============== Form Add Stagers ===================-->
    <div class="container createStagiaire my-5 card pb-3">

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "stmtfailed") {
            echo '<p class="text-danger text-center error-message pt-2 pb-2">Something went wrong. Please try again.</p>';
        }
    }
    ?>

        <h1>Add Personne</h1>
        <form action="../entity/CreateStagiaire.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom*:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="cne">CNE:</label>
                <input type="text" class="form-control" id="cne" name="cne">
            </div>
            <button type="submit" class="btn btn-primary" name="btnCrateStagiaire">Create</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
</body>

</html>