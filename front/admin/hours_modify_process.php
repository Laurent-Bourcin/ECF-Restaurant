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
    <title>ECF_Restaurant_Admin_Horaires_Modifier_Processus</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
?>

<?php 
// Connection at db
require "../../Back/connexion_at_db.php";
?>

<?php
// Modify form
$day = $_POST['day_choice'];
$hours = $_POST['hours_choice'];
$new_hours_start = $_POST['hours_choice_start'];
$new_minutes_start = $_POST['minutes_choice_start'];
$hours_start = "$new_hours_start$new_minutes_start";

$new_hours_end = $_POST['hours_choice_end'];
$new_minutes_end = $_POST['minutes_choice_end'];
$hours_end = "$new_hours_end$new_minutes_end";
if (!mysqli_query($mysqli,"UPDATE hours SET 
    hours_start='$hours_start',
    hours_end='$hours_end'
    WHERE day='$day' AND
    hours_start='$hours'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "L'horaire a été modifiée !";
    }
?>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../hours.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
// End admin verification
    }
}
?>