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
    <title>ECF_Restaurant_Admin_Horaires_Ajouter_Processus</title>
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

<?php
// verification
// title
if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM hours WHERE 
title='".$_POST['hours_title']."' AND
day='".$_POST['day_choice']."'"))==1){
    echo "Ce moment de journée est déjà enregistré.";
    } else {
    // All form is ok, so registration
    $hours_choice_start = $_POST['hours_choice_start'];
    $minutes_choice_start = $_POST['minutes_choice_start'];
    $hours_start = "$hours_choice_start$minutes_choice_start";
    $hours_choice_end = $_POST['hours_choice_end'];
    $minutes_choice_end = $_POST['minutes_choice_end'];
    $hours_end = "$hours_choice_end$minutes_choice_end";
    if (!mysqli_query($mysqli,"INSERT INTO hours SET 
    day='".$_POST['day_choice']."',
    title='".$_POST['hours_title']."',
    hours_start='$hours_start',
    hours_end='$hours_end'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "L'horaire a été ajoutée !";
    }
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