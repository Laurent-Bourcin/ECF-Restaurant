<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>ECF_Restaurant_Admin_Plats_ASupprimer</title>
</head>

<body>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Supprimer un plat </h2>
        </div>
    </div>

<!-- form -->
    <section class="container-fluid mb-5">
        <form action="image_add.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3 text-center">
                <div class="col-12 text-center">
                    <label for="file">Fichier</label>
                    <input type="file" name="file">
                        <button type="submit">Enregistrer</button>
                </div>
            </div>

            <div class="row mb-3 text-center">
                <div class="col-12 text-center">
                    <?php
                    if (isset($image_upload)) {
                        echo "Votre image a bien été ajoutée sur la page principale";
                    }
                    ?>
                </div>
            </div>
        </form>
    </section>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../index.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
    }
};
?>

</body>