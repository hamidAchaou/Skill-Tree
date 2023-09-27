<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <title>affichage des stagiaire</title>
</head>

<body>
    <!-- include navbar -->
    <?php include '../../business_logic/navbar.php'; ?>

    <main>
        <!--  table stagiaire -->
        <section class="container mt-5">
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
                    include_once "../../data_storage/gestion_Stagiaire.php";
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
                            <td scope="row"><?php echo $stagiaire->getNom() ?></td>
                            <td scope="row"><?php echo $stagiaire->getCNE() ?></td>
                            <td scope="row"><?php echo $stagiaire->getVille_Nom() ?></td>
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
            <div class="pagination justify-content-center">
                <ul class="pagination justify-content-center">
                    <?php
                    // Display pagination links
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '">
                            <a class="page-link" href="./index.php?page=' . $i . '">' . $i . '</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </section>

        <!-- display chart -->
        <section class="container">
            <h1 class="text-center">Number of people in each city</h1>
            <?php
            // include "../Gestions/gestion_Stagiaire.php";
            $getVilles = new GestionStagiaire();
            $villes = $getVilles->countTrainner();
            $jsonData = json_encode($villes);

            ?>
            <div>
                <canvas id="myChart" class="pt-5"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                var jsonData = <?php echo $jsonData; ?>;

                // console.log(jsonData);
                const ctx = document.getElementById('myChart');
                city = []
                personCount = []
                for(let i= 0; i< jsonData.length; i++) {
                    city.push(jsonData[i]['VilleNom']);
                    personCount.push(jsonData[i]['TrainerCount']);
                }
                console.log(city,personCount)
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                    labels: city,
                    datasets: [{
                        label: '# of Votes',
                        data: personCount,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });
            </script>
        </section>
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

    <!-- link chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="./asset/js/chart.js"></script>

</body>

</html>