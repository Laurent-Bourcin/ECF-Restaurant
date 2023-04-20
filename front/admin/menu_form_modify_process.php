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
    <title>ECF_Restaurant_Admin_Menu_Formulaires_Modifier_Processus</title>
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
// Modify form
$form_title = $_POST['form_choice'];
$new_title = $_POST['new_title'];
$new_description = $_POST['new_description'];
$new_price = $_POST['new_price'];
if (!mysqli_query($mysqli,"UPDATE form SET 
    title='$new_title',
    description='$new_description',
    price='$new_price'
    WHERE title='$form_title'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "La formule a été modifiée !";
    }
?>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../menus.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
// End admin verification
    }
}
?>