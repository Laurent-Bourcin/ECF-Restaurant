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
    <title>ECF_Restaurant_Admin_Heures_Ajouter</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<?php 
// Connection at db
require "../../Back/connexion_at_db.php";
?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Ajouter une horaire </h2>
    </div>
</div>

<!-- form -->
<section class="container-fluid mb-5">
    <form action="hours_add_process.php" method="post">
        <!-- Day choice -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="day_choice"> Choix du jour </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select menu -->
                <select name="day_choice" id="day_choice">
                    <option value="Lundi"> Lundi </option>
                    <option value="Mardi"> Mardi </option>
                    <option value="Mercredi"> Mercredi </option>
                    <option value="Jeudi"> Jeudi </option>
                    <option value="Vendredi"> Vendredi </option>
                    <option value="Samedi"> Samedi </option>
                    <option value="Dimanche"> Dimanche </option>
                </select>
            </div>
        </div>

        <!-- Title -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_title"> Moment de la journée </label>
            </div>
            <div class="col-6 text-start">
                <select name="hours_title" id="hours_title">
                    <option value="Midi"> Midi </option>
                    <option value="Soir"> Soir </option>
                </select>
            </div>
        </div>

        <!-- Form Hours start -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice_start"> Horaires de début </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select hours -->
                <select name="hours_choice_start" id="hours_choice_start" required>
                    <?php
                    // Loop for 24 hours
                    for($i=10; $i<22; $i++){
                    if(strlen($i) == 1) {
                        // Add a '0' before the hours to 1 at 9
                        $i = "0".$i;
                    }
                    ?>
                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                    <?php
                    };
                    ?>
                </select>
                <span> H </span>
                
                <!-- Select minutes start-->
                <select name="minutes_choice_start" id="minutes_choice_start" required>
                    <?php
                    // Loop for minutes
                    for($j=0; $j<60; $j+=10){
                    if(strlen($j) == 1) {
                        // Add a '0' before the hours to 1 at 9
                        $j = "0".$j;
                    }
                    ?>
                    <option value="<?php echo $j; ?>"> <?php echo $j; ?> </option>
                    <?php
                    };
                    ?>
                </select>
            </div>
        </div>

        <!-- Form Hours end -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice_end"> Horaires de fin </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select hours -->
                <select name="hours_choice_end" id="hours_choice_end" required>
                    <?php
                    // Loop for 24 hours
                    for($i=13; $i<24; $i++){
                    if(strlen($i) == 1) {
                        // Add a '0' before the hours to 1 at 9
                        $i = "0".$i;
                    }
                    ?>
                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                    <?php
                    };
                    ?>
                </select>
                <span> H </span>
                
                <!-- Select minutes end -->
                <select name="minutes_choice_end" id="minutes_choice_end" required>
                    <?php
                    // Loop for minutes
                    for($j=0; $j<60; $j+=10){
                    if(strlen($j) == 1) {
                        // Add a '0' before the hours to 1 at 9
                        $j = "0".$j;
                    }
                    ?>
                    <option value="<?php echo $j; ?>"> <?php echo $j; ?> </option>
                    <?php
                    };
                    ?>
                </select>
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
    onclick="window.location.href='../hours.php'">
    <span class="ff_arabic_btn"> Annuler </span>
</button>
</div>

<?php
    }
};
?>