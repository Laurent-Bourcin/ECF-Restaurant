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
    <title>ECF_Restaurant_Admin_Plat_Ajouter_Processus</title>
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
if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM food WHERE title=
    '".$_POST['food_title']."'"))==1){
    echo "Ce plat est déjà enregistré.";
    } else {
    // All form is ok, so registration
    if (!mysqli_query($mysqli,"INSERT INTO food SET title='".$_POST['food_title']."',
        description='".$_POST['food_description']."',
        price='".$_POST['food_price']."',
        type='".$_POST['food_type']."'
        ")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "Vous êtes inscrit avec succès!";
    }
}
?>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../index.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
// End admin verification
    }
}
?>