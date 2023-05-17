<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../Back/javascript/script_hours.js"></script> 
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>ECF_Restaurant_Admin_Horaires_Supprimer</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Supprimer une horaire </h2>
    </div>
</div>

<?php 
// Connection at db
require "./Back/connexion_at_db.php"
?>

<!-- Form remove hours -->
<section class="container-fluid mb-5">
    <form action="hours_remove_process.php" method="post">
        <!-- Choice day -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="day_choice"> Choix du jour </label>
            </div>
            <div class="col-6 text-start">
                <?php
                // Search days in db hours table and create a new array with them
                $days_db = $mysqli->query("SELECT day FROM hours ORDER BY field(day, 
                'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche')");
                $days_exist = [];
                while($days_array = mysqli_fetch_array($days_db)) {
                    if(!in_array($days_array['day'], $days_exist)){
                        array_push($days_exist, $days_array['day']);
                    }
                }
                ?>
                <select name="day_choice" id="day_choice" onchange="go()">
                    <option value=-1> Choisir un jour </option>
                <?php
                // Loop for each days in days_exist array
                foreach($days_exist as $day) { 
                ?>
                    <option value="<?php echo $day ?>"> 
                        <?php echo $day ?> 
                    </option>
                <?php }; ?>
                </select>
            </div>
        </div>

        <!-- Choice hours -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice"> Horaire à supprimer </label>
            </div>
            <div class="col-6 text-start">
                <select name="hours_choice" id="hours_choice">
                    <option value='-1'>Choisir une horaire</option>
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
    onclick="window.location.href='../hours.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>