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
    <title>ECF_Restaurant_Admin_Menu_Formules_Ajouter</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<?php 
// Connection at db
require "./Back/connexion_at_db.php"
?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Ajouter une formule </h2>
    </div>
</div>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="menu_form_add_process.php" method="post">
        <!-- Menu choice -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="menu_choice"> Choix du menu </label>
            </div>
            <div class="col-6 text-start">
                <?php
                // Select menu
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

        <!-- Title -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="form_title"> Nom de la formule </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="form_title" id="form_title" required>
            </div>
        </div>

        <!-- Description -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="form_description"> Description </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="form_description" id="form_description" required>
            </div>
        </div>

        <!-- Price -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="form_price"> Prix </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="form_price" id="form_price" required>
            </div>
        </div>

        <!-- Add button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="add" value="add"> Ajouter </button>
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