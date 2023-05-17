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
    <title>ECF_Restaurant_Admin_Reservation_Supprimer_Processus</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
?>

<?php 
// Connection at db
require "./Back/connexion_at_db.php"
?>

<?php
// Get Post
$value = $_POST['select_reservation'];
// Explode Post into 5 variables
list($date, $name, $surname, $moment, $hours) = explode("/", $value);

//remove
if (!mysqli_query($mysqli,"DELETE FROM table_reservation WHERE 
date='$date' AND name='$name' AND surname='$surname' AND moment='$moment' AND hours='$hours'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "La réservation a été supprimée !";
    }
?>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='./reservation_display.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
// End admin verification
    }
}
?>