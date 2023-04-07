<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ECF_Restaurant_Reservation</title>
</head>
<body>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-3">
            <h2> Réservation </h2>
        </div>
    </div>

    <!-- cutlery number -->
    <div class="row mb-2 text-center">
        <div class="col-6">
            <label for="cutlery_select"> Nombre de couverts </label>
        </div>
        <div class="col-6">
            <select name="cutlery" id="cutlery_select">
                <option value=""> Sélectionner </option>
            </select>
        </div>
    </div>

    <!-- date -->
    <div class="row mb-2  text-center">
        <div class="col-6">
            <label for="date_select"> Date </label>
        </div>
        <div class="col-6">
            <select name="date" id="date_select">
                <option value=""> Sélectionner </option>
            </select>
        </div>
    </div>

    <!-- hours -->
    <div class="row mb-2 text-center">
        <div class="col-6">
            <label for="hour_select"> Horaire souhaitée </label>
        </div>
        <div class="col-6">
            <select name="hour" id="hour_select">
                <option value=""> Sélectionner </option>
            </select>
        </div>
    </div>

    <!-- allergy -->
    <div class="row mb-4 mb-xl-5 text-center">
        <div class="col-6">
            <label for="alergy_select"> Spécifier des allergies (ctrl si plusieurs) </label>
        </div>
        <div class="col-6">
            <select name="alergy" id="alergy_select">
                <option value=""> Sélectionner </option>
            </select>
        </div>
    </div>

    <!-- envoyer / annuler -->
    <div class="row text-center">
        <div class="col-6">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                type="submit" 
                value ="submit"> 
                Réserver 
            </button>
        </div>
        <div class="col-6">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./index.php'"> 
                Annuler 
            </button>
        </div>
    </div>
</section>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>