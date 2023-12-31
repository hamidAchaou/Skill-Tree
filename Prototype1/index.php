<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style CSS -->
    <link rel="stylesheet" href="./css//style.css">

    <title>affichage des stagiaire</title>
</head>

<body>

    <main>
        <!-- Table show Stager -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">CNE</th>
                </tr>
            </thead>
            <tbody>

                <!-- show Stagiaire -->
                <?php
                include "./Gestion_Stagiaire.php";
                // get Stagiaire
                $dataStage = new Stagiaire();
                $dataStagiaire = $dataStage->getStagiare();


                // loop for display stagiaire
                foreach ($dataStagiaire as $stagiaire) :
                ?>

                    <tr>
                            <td scope="row"><?php echo $stagiaire->getNon() ?></td>
                            <td scope="row"><?php echo $stagiaire->getNon() ?></td>
                            <td scope="row"><?php echo $stagiaire->getCNE() ?></td>
                    </tr>

                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>

</body>

</html>