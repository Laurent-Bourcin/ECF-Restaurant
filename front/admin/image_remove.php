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
    <title>ECF_Restaurant_Admin_Image_Supprimer</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
?>

<!-- Title -->
<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Supprimer une image </h2>
        </div>
    </div>


<!-- form -->
<section class="container-fluid mb-5">
    <form action="delete_process.php" method="post">
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <!-- Select image to remove -->
                <label for="image_remove">Choisissez l'image à supprimer: </label>
                <select id="image_remove" name="image_remove">
                    <?php 
                    // Loop img
                    $scandir = scandir("../../Images/carousel/");
                    foreach($scandir as $file){
                        if(preg_match("#\.(jpg|jpeg|png)$#",strtolower($file))){
                    ?>
                        <option value="<?php echo $file; ?>"><?php echo $file; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <button type="submit" name="delete" value="delete"> Supprimer </button>
            </div>
        </div>
    </form>

    <!-- Cancel -->
    <div class="col-6 mt-3">
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    onclick="window.location.href='../index.php'">
                    <span class="ff_arabic_btn"> Annuler </span>
                </button>
            </div>
        </div>
    </div>
</section>

<?php
    }
};
?>