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
    <title>ECF_Restaurant_Admin_CMenu_Menu_Modifier</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Modifier un menu </h2>
    </div>
</div>

<?php 
// Connection at db
require "../../Back/connexion_at_db.php";
?>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="menu_menu_modify_process.php" method="post">
        <!-- Type -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="menu_choice"> Menu à modifier </label>
            </div>
            <div class="col-6 text-start">
                <?php
                // Choice what to modify
                $result = $mysqli->query("SELECT title FROM menu");
                ?>
                <select name="menu_choice" id="menu_choice">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['title'] ?>"> 
                        <?php echo $row['title'] ?> 
                    </option>
                <?php }; ?>
                </select>
            </div>
        </div>

        <!-- New entries -->
        <div class="row mb-3 text-center">
            <!-- New title -->
            <div class="col-12 text-center">
                <label for="new_title"> Nouveau nom: </label>
                <input type="text" id="new_title" name="new_title">
            </div>
        </div>

        <!-- Modify button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="modify" value="modify"> Modifier </button>
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