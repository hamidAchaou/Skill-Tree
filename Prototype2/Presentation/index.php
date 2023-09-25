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
                        <a class="nav-link" href="../Presentation/index.php">Stagiaire</a>
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
        <div class="container mt-5">
            <!-- <h1 class="text-center title">Stagiaire Management</h1> -->

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
                        <th scope="col">Nom</th>
                        <th scope="col">Ville</th>
                        <th scope="col">CNE</th>
                        <th scope="col">DELETE & EDIT</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Show Stagiaire -->
                    <?php
                    // get Stagiaire
                    include "../Databases/Stagiaire.php";
                    $dataStage = new Stagiaire();
                    $info = $dataStage->getStagiare();

                    // Define the number of results per page and current page
                    $perPage = 6;
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    // Get the total number of stagiaires
                    $totalStagiaires = count($info);

                    // Calculate the total number of pages
                    $totalPages = ceil($totalStagiaires / $perPage);

                    $startSlice = ($currentPage - 1) * $perPage;
                    $dataRange = array_slice($info, $startSlice, $perPage );

                    // Loop for displaying stagiaire
                    foreach ($dataRange as $stagiaire) :
                    ?>

                        <tr>
                            <td scope="row"><?php echo $stagiaire->getId() ?></td>
                            <td scope="row"><?php echo $stagiaire->getNon() ?></td>
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

            <!-- Pagination -->
            <?php
            ?>
            <div class="pagination">
                <ul class="pagination justify-content-center">
                    <?php


                    // Generate pagination links
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li class="page-item';
                        if ($i == $currentPage) {
                            echo ' active';
                        }
                        echo '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>

    <!-- Link Bootstrap 4 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>