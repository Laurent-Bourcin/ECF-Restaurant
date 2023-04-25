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
    <title>ECF_Restaurant_Admin_Horaires_Modifier</title>
</head>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<main class="container-fluid">
<div class="row">
    <div class="col-12 text-center mb-5">
        <h2> Modifier une horaire </h2>
    </div>
</div>

<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<!-- Form modify hours -->
<section class="container-fluid mb-5">
    <form action="hours_modify_process.php" method="post">
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
                <label for="hours_choice"> Horaire à modifier </label>
            </div>
            <div class="col-6 text-start">
                <select name="hours_choice" id="hours_choice">
                    <option value='-1'>Choisir une horaire</option>
                </select>
            </div>
        </div>

        <!-- FNew Hours start -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice_start"> Nouvelles horaires de début </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select hours -->
                <select name="hours_choice_start" id="hours_choice_start" required>
                    <?php
                    // Loop for 24 hours
                    for($i=0; $i<25; $i++){
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

        <!-- New Hours end -->
        <div class="row mb-3 text-center">
            <div class="col-6 text-end">
                <label for="hours_choice_end"> Nouvelles Horaires de fin </label>
            </div>
            <div class="col-6 text-start">
                <!-- Select hours -->
                <select name="hours_choice_end" id="hours_choice_end" required>
                    <?php
                    // Loop for 24 hours
                    for($i=0; $i<25; $i++){
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

        <!-- Remove button -->
        <div class="row mb-3 text-center">
            <div class="col-12 text-center">
                <button type="submit" name="modify" value="modify"> Modify </button>
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