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
    <title>ECF_Restaurant_logout</title>
</head>

<?php
echo "Vous êtes  déconnecté !";
session_destroy();
?>

<div class="row mt-2 mb-5">
    <div class="col-12 text-center">
        <button class="btn bcg_plt_beige plt_golden" 
        onclick="window.location.href='./index.php'"> 
        Accueil 
        </button>
    </div>
</div>