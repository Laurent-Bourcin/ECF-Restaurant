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
    <title>ECF_Restaurant_Admin_Carte_Modifier_Processus</title>
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
// Remove food
$new_description = $_POST['new_description'];
$food_title = $_POST['food_title'];
$new_price = $_POST['new_price'];
$new_title = $_POST['new_title'];
if (!mysqli_query($mysqli,"UPDATE food SET 
    title='$new_title',
    description='$new_description',
    price='$new_price'
    WHERE title='$food_title'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "Le plat a été modifié !";
    }
?>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../food_list.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
// End admin verification
    }
}
?>