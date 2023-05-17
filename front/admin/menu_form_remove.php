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
    <title>ECF_Restaurant_Admin_Menu_Formules_Supprimer</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Supprimer une formule </h2>
    </div>
</div>

<?php 
// Connection at db
require "../../Back/connexion_at_db.php";
?>

<!-- Remove form -->
<section class="container-fluid mb-5">
    <form action="menu_form_remove_process.php" method="post">
        <!-- Choice menu -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="menu_choice"> Choix du menu </label>
            </div>
            <div class="col-6 text-start">
                <?php
                // Choice what to remove
                $result_menu = $mysqli->query("SELECT * FROM menu");
                ?>
                <select name="menu_choice" id="menu_choice">
                <?php while ($row = mysqli_fetch_array($result_menu)) { ?>
                    <option value="<?php echo $row['title'] ?>"> 
                        <?php echo $row['title'] ?> 
                    </option>
                <?php }; ?>
                </select>
            </div>
        </div>

        <!-- Choice form -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="form_choice"> Formule à supprimer </label>
            </div>
            <div class="col-6 text-start">
                <?php
                // Choice what to remove
                $result_form = $mysqli->query("SELECT * FROM form");
                ?>
                <select name="form_choice" id="form_choice">
                <?php while ($row = mysqli_fetch_array($result_form)) { ?>
                    <option value="<?php echo $row['title'] ?>"> 
                        <?php echo $row['title']. ' - '. $row['menu'] ?> 
                    </option>
                <?php }; ?>
                </select>
            </div>
        </div>

        <!-- Remove button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="remove" value="remove"> Supprimer </button>
            </div>
        </div>
    </form>
</section>

<!-- Back -->
<div class="col-6">
<button 
    class="btn btn-sm bcg_plt_golden px-md-5" 
    onclick="window.location.href='../menus.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>