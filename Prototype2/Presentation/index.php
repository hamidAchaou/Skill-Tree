<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./asset/style.css">

    <title>affichage des stagiaire</title>
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
                        <a class="nav-link" href="../Presentation/index.php">Show Stagiaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-light create-stagiaire" href="../Presentation/create.Stager.php">Create Stagiaire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- =========================== END NavBar ==================== -->


    <main>
        <div class="container">
            <h1 class="text-center title">Stagiaire Management</h1>

            <?php
            if (isset($_GET['addPersonne']) && $_GET['addPersonne'] == "success") {
                echo '
                <div class="alert alert-success h4 text-center" role="alert">
                    Add Person successful.
                </div>';
            }
            ?>

            <!-- Table show Stagiaire -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">CNE</th>
                        <th scope="col">More Details</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Show Stagiaire -->
                    <?php
                    // get Stagiaire
                    include "../Databases/Stagiaire.php";
                    $dataStage = new Stagiaire();
                    $info = $dataStage->getStagiare();

                    // Loop for displaying stagiaire
                    foreach ($info as $stagiaire) :
                    ?>

                        <tr>
                            <td scope="row"><?php echo $stagiaire->getId() ?></td>
                            <td scope="row"><?php echo $stagiaire->getNon() ?></td>
                            <td scope="row"><?php echo $stagiaire->getCNE() ?></td>
                            <td scope="row" class="d-flex justify-content-center gap-3">
                                <a class="nav-link btn btn-danger text-center text-light create-stagiaire ml-3" href="">DELETE</a>
                                <a class="nav-link btn btn-info text-center text-light create-stagiaire ml-3" href="./edit.Stager.php?Id=<?php echo $stagiaire->getId() ?>">EDIT</a>
                            </td>
                        </tr>

                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Link Bootstrap 4 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>