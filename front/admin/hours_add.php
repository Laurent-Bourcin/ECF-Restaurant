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
    <title>ECF_Restaurant_Admin_Heures_Ajouter</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Ajouter une horaire </h2>
    </div>
</div>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="hours_add_process.php" method="post">
        <!-- Day choice -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="day_choice"> Choix du jour </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select menu -->
                <select name="day_choice" id="day_choice">
                    <option value="Lundi"> Lundi </option>
                    <option value="Mardi"> Mardi </option>
                    <option value="Mercredi"> Mercredi </option>
                    <option value="Jeudi"> Jeudi </option>
                    <option value="Vendredi"> Vendredi </option>
                    <option value="Samedi"> Samedi </option>
                    <option value="Dimanche"> Dimanche </option>
                </select>
            </div>
        </div>

        <!-- Title -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_title"> Moment de la journée (midi, soir ou autre) </label>
            </div>
            <div class="col-6 text-start">
                <select name="hours_title" id="hours_title">
                    <option value="Midi"> Midi </option>
                    <option value="Soir"> Soir </option>
                </select>
            </div>
        </div>

        <!-- Hours -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice"> Horaires ('11h30-14h30' par exemple) </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="hours_choice" id="hours_choice" required>
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
    onclick="window.location.href='../hours.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>