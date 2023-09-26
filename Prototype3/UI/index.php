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


    <main>
        <div class="container mt-5">
            <!-- <h1 class="text-center title">Stagiaire Management</h1> -->

            <?php
            if (isset($_GET['addPersonne']) && $_GET['addPersonne'] == "success") {
                echo '
                    <div class="alert alert-success h4 text-center" role="alert">
                        Add Person successful.
                    </div>';
            } elseif (isset($_GET['UpdatePersonne']) && $_GET['UpdatePersonne'] == "success") {
                echo '
                    <div class="alert alert-success h4 text-center" role="alert">
                        Update Person successful.
                    </div>';
            }
            ?>

            <!-- Table show Stagiaire -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">CNE</th>
                        <th scope="col">City</th>
                        <th scope="col">DELETE & EDIT</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Show Stagiaire -->
                    <?php
                    // get Stagiaire
                    include "../Gestions/gestion_Stagiaire.php";
                    $dataStage = new GestionStagiaire();
                    $stagiaireInfo = $dataStage->getStagiaires();

                    // Define the number of results per page and current page
                    $perPage = 6;
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    // Get the total number of stagiaires
                    $totalStagiaires = count($stagiaireInfo);

                    // Calculate the total number of pages
                    $totalPages = ceil($totalStagiaires / $perPage);

                    $startSlice = ($currentPage - 1) * $perPage;
                    $dataRange = array_slice($stagiaireInfo, $startSlice, $perPage);

                    // Loop for displaying stagiaire
                    foreach ($dataRange as $stagiaire) :
                    ?>

                        <tr>
                            <td scope="row"><?php echo $stagiaire->getId() ?></td>
                            <td scope="row"><?php echo $stagiaire->getNom() ?></td>
                            <td scope="row"><?php echo $stagiaire->getCNE() ?></td>
                            <td scope="row"><?php echo $stagiaire->getVilleNom() ?></td>
                            <td scope="row" class="d-flex justify-content-center gap-3">
                                <a class="nav-link btn btn-info ml-3 text-center text-light create-stagiaire ml-3" href="./edit.Stager.php?Id=<?php echo $stagiaire->getId() ?>">EDIT</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger ml-3" onclick="openDeleteModal(<?php echo $stagiaire->getId() ?>)" data-toggle="modal" data-target="#deleteModal">Delete</button>
                            </td>
                        </tr>

                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

            <!-- Hidden input field for stagiaire ID -->
            <input type="hidden" id="grtIdStagiaire" value="">
            <!-- Pagination -->
            <?php
            ?>
            <div class="pagination">
                <ul class="pagination justify-content-center">
                    <?php
                    // Display pagination links
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '"><a class="page-link" href="./index.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>


    <!-- =========================== Start Delete Modal ==================== -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Stagiaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../entity/deleteStagiaire.php" method="POST">
                    <input type="hidden" id='confirm_Delete' name="id_Confirmed">
                    <div class="modal-body">
                        Are you sure you want to delete this stagiaire?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" name='btn_Delete_Stagiaire'>Delete</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- =========================== END Delete Modal ==================== -->

    <!-- Link Bootstrap 4 JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="./asset/js/main.js"></script>

</body>

</html>