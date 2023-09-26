<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="./asset/style.css">

    <title>Create des stagiaire</title>
</head>

<body>

    <!-- =========================== start NavBar ==================== -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Stagiaire Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../UI/index.php">Stagiaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../UI/">Show Stagiaire</a>
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

    // Get ID Stagiaire
    $Id = $_GET['Id'];

    // declaration Stagire and Gestion 
    include "../entity/Stagiaire.php";
    include_once "../Gestion/Gestion_Stagiaire.php";
    
    // get One Stagiaire
    $dataStage = new GestionStagiaire();    
    $dataSta = new Stagiaire();    
    $stagiaireData = $dataStage->getOneStagiaire($Id);

    // Access the retrieved data
    $id = $stagiaireData[0]->getId();
    $nom = $stagiaireData[0]->getNom();
    $cne = $stagiaireData[0]->getCNE();

    ?>

        <h1>Add Personne</h1>
        <form action="../entity/update_stagiaire.php?Id=<?php echo $_GET['Id'] ?>" method="POST">
            <div class="form-group">
                <label for="nom">Nom*:</label>
                <input type="text" class="form-control" id="nom" value="<?php echo $nom; ?>" name="nom" required>
            </div>
            <div class="form-group">
                <label for="cne">CNE:</label>
                <input type="text" class="form-control" value="<?php echo $cne; ?>" id="cne" name="cne">
            </div>
            <button type="submit" class="btn btn-primary" name="updateStagiaire">Update</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>