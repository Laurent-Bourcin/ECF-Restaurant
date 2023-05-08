<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../Back/javascript/script_hours.js"></script> 
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ECF_Restaurant_Hours</title>
</head>
<body>

<?php
// Get variables from post
$date_select = $_POST['date_select'];
$moment_select = $_POST['moment_select'];
$name_input = $_POST['name_input'];
$surname_input = $_POST['surname_input'];
$seats_select = $_POST['seats_select'];
$allergy_input = $_POST['allergy_input'];
$hours_input = $_POST['hours_input'];

// Connect to db
require "../Back/connexion_at_db.php";

// Put into db the reservation
if (!mysqli_query($mysqli,"INSERT INTO table_reservation SET 
    date='$date_select',
    moment='$moment_select',
    name='$name_input',
    surname='$surname_input',
    seats='$seats_select',
    allergy='$allergy_input',
    hours='$hours_input'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "La réservation a été enregistrée !";
    };

?>

<div class="row text-start">
    <div class="col-12">
        <button 
            class="btn btn-sm bcg_plt_golden px-md-5" 
            onclick="window.location.href='./index.php'"> 
            Retour 
        </button>
    </div>
</div>