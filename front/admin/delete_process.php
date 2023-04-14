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

<!-- remove img -->
<div class="row mb-3 text-center">
    <div class="col-12 text-center">
        <?php if(isset($_POST['delete'])) {
            if ($_POST['delete'] == "delete"){
                $scandir = scandir("../../Images/carousel/");
                $file_to_delete = $_POST['image_remove'];
                if(unlink("../../Images/carousel/$file_to_delete")) {
                    echo "Votre image a bien été supprimée de la page principale";
                } else {
                    echo 'erreur';
                }
            } 
        } else {
            echo 'prblm';
        }?>
    </div>
</div>

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