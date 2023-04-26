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
    <title>ECF_Restaurant_Admin_NombreClient_Modifier</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Modifier le nombre maximal de client </h2>
    </div>
</div>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="seaters_modify_process.php" method="post">
        <!-- Title -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="seaters_max"> Nombre de clients maximal </label>
            </div>
            <div class="col-6 text-start">
                <input type="number" name="seaters_max" id="seaters_max" min="0" required>
            </div>
        </div>

        <!-- Modify button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="modify" value="modify"> Modifier </button>
            </div>
        </div>
    </form>
</section>

<!-- Back -->
<div class="col-6">
<button 
    class="btn btn-sm bcg_plt_golden px-md-5" 
    onclick="window.location.href='../hours.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>