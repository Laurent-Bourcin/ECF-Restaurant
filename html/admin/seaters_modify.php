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
    <title>ECF_Restaurant_Admin_Places_Modifier</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<?php
// code à ajouter
echo 'Modifier nombre de places';
?>

<!-- Cancel -->
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