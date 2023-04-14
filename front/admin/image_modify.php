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
    <title>ECF_Restaurant_Admin_Image_Modifier</title>
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
            <h2> Modifier une image </h2>
        </div>
    </div>


<!-- form -->
<section class="container-fluid mb-5">
    <form action="modify_process.php" method="post">
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <!-- Select image to modify -->
                <label for="image_modify">Choisissez l'image à modifier: </label>
                <select id="image_modify" name="image_modify">
                    <?php 
                    // Loop img
                    $scandir = scandir("../../Images/carousel/");
                    foreach($scandir as $file){
                        if(preg_match("#\.(jpg|jpeg|png)$#",strtolower($file))){
                            $name = pathinfo($file);?>
                            <option value="<?php echo $file; ?>">
                                <?php echo $name['filename']; ?>
                            </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <label for="new_name"> Nouveau nom: </label>
                <input type="text" id="new_name" name="new_name">
                <button type="submit" name="modify" value="modify"> Modifier </button>
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