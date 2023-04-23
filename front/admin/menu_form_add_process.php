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
    <title>ECF_Restaurant_Admin_Menu_MFormules_Ajouter_Processus</title>
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
if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM form WHERE 
    title='".$_POST['form_title']."' AND
    menu='".$_POST['menu_choice']."'"))==1){
    echo "Cette formule est déjà enregistrée.";
    } else {
    // All form is ok, so registration
    if (!mysqli_query($mysqli,"INSERT INTO form SET 
    title='".$_POST['form_title']."',
    description='".$_POST['form_description']."',
    price='".$_POST['form_price']."',
    menu='".$_POST['menu_choice']."'")){
        echo "Une erreur s'est produite: ".mysqli_error($mysqli);
    } else {
        echo "La formule a été ajoutée !";
    }
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