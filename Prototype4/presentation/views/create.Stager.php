<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <title>Create des stagiaire</title>
</head>
<body>

   <!-- include navbar -->
   <?php include '../../business_logic/navbar.php'; ?>
   
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
        <form action="../controllers/create_stagiaire.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom*:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="type">Type*:</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="personne">Personne</option>
                    <option value="Stagiaire">Stagiaire</option>
                    <option value="Formateur">Formateur</option>
                </select>


            </div>
            <div class="form-group">
                <label for="cne">CNE:</label>
                <input type="text" class="form-control" id="cne" name="cne">
            </div>
            <div class="form-group">
                <label for="ville">Ville*:</label>

                <select class="form-control" id="ville" name="ville" required>
                    <!--================== start get city in databases =====================-->
                    <?php
                    include "../../data_storage/Gestion_Ville.php";
                    $getVilles = new GestionVille();
                    $villes = $getVilles->getVill();
                    foreach ($villes as $ville) :
                        // $selected = ($ville->getId() == $villeId) ? "selected" : "";
                    ?>
                        <option value="<?php echo $ville->getIdVille(); ?>"> <?php echo $ville->getNomVille(); ?> </option>
                    <?php
                    endforeach;
                    ?>

                    <!--================== end get city in databases =====================-->
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="createStagiaire">ADD Personne</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
</body>

</html>