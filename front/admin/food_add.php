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
    <title>ECF_Restaurant_Admin_Carte_Ajouter</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Ajouter sur la carte </h2>
    </div>
</div>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="food_add_process.php" method="post">
        <!-- Type -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="food_type"> Type de plat </label>
            </div>
            <div class="col-6 text-start">
                <select name="food_type" id="food_type">
                    <option value="starter"> Entrée </option>
                    <option value="main"> Plat </option>
                    <option value="dessert"> Dessert </option>
                </select>
            </div>
        </div>

        <!-- Title -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="food_title"> Nom du plat </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="food_title" id="food_title" required>
            </div>
        </div>

        <!-- Description -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="food_description"> Description </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="food_description" id="food_description" required>
            </div>
        </div>

         <!-- Price -->
         <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="food_price"> Prix </label>
            </div>
            <div class="col-6 text-start">
                <input type="number" name="food_price" id="food_price" min="0" step="0.01" required>
            </div>
        </div>

        <!-- Add button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="add" value="add"> Ajouter </button>
            </div>
        </div>
    </form>
</section>

<!-- Back -->
<div class="col-6">
<button 
    class="btn btn-sm bcg_plt_golden px-md-5" 
    onclick="window.location.href='../food_list.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>