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
    <title>ECF_Restaurant_Reservation_Hours</title>
</head>
<body>

<?php 
// Connection at db
require "../Back/connexion_at_db.php";
// Know number of seats reserved
require "../Back/seats_reserved.php";
// know max seats
require "../Back/max_seats.php";
// know day name of reservation
$day_french = '';
$dateChoice = $_POST['date_select'];
require "../Back/day_French.php";
// know hours start
require "../Back/Hours_start.php";
$moment_select = $_POST['moment_select'];
HoursStart ($day_french, $mysqli, $moment_select);
// know hours end
require "../Back/Hours_end.php";
HoursEnd ($day_french, $mysqli, $moment_select);
// know diff between start hours and start end
require "../Back/hours_diff_start_end.php";
?>

<section class="container-fluid">
    <form action="reservation-process.php" method="post">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2> Réservation </h2>
            </div>
        </div>

        <?php
        // Variables from POST
        $date_select = $_POST['date_select'];

        // Add for finalization
        ?>
        <input type="hidden" name="date_select" value="<?php echo "".$date_select."" ?>">
        </input>
        <input type="hidden" name="moment_select" value="<?php echo "".$moment_select."" ?>">
        </input>

        <!-- Name -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="name_input"> Prénom </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="name_input" id="name_input" 
                <?php
                if(isset($_SESSION['name'])){
                    echo 'value="'. $_SESSION['name']. '"';
                } ?>
                required>
            </div>
        </div>

        <!-- Surname -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="surname_input"> Nom </label>
            </div>
            <div class="col-6 text-start">
                <input type="text" name="surname_input" id="surname_input" 
                <?php
                if(isset($_SESSION['surname'])){
                    echo 'value="'. $_SESSION['surname']. '"';
                } ?>
                required>
            </div>
        </div>

        <!-- Seats  -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="seats_select"> Nombre de couvert </label>
            </div>
            <div class="col-6 text-start">
                <select name="seats_select" id="seats_select" required>
                    <option value=""> Sélectionner </option>
                <?php
                switch($moment_select){
                    case 'Midi':
                        seatsReservedLunch($date_select, $mysqli, $seats_reserved_lunch);
                        $seats_available = $max_seats - $seats_reserved_lunch;
                        for($i=1; $i<$seats_available+1; $i++){
                            if($i == $_SESSION['seats']){
                                echo '<option value='. $i. ' selected>'. $i. '</option>';
                            } else {
                            echo '<option value='. $i. '> '. $i. '</option>';
                            }
                        };
                        break;
                    case 'Soir':
                        seatsReservedLunch($date_select, $mysqli, $seats_reserved_dinner);
                        $seats_available = $max_seats - $seats_reserved_dinner;
                        for($i=1; $i<$seats_available+1; $i++){
                            if($i == $_SESSION['seats']){
                                echo '<option value='. $i. ' selected>'. $i. '</option>';
                            } else { 
                            echo '<option value='. $i. '> '. $i. '</option>';
                            }
                        };
                        break;
                };
                ?>
                </select>
            </div>
        </div>

        <!-- Allergies -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="allergy_input"> Allergies (optionnel) </label>
            </div>
            <div class="col-6 text-start">
                <textarea name="allergy_input" id="allergy_input"><?php
                    if(isset($_SESSION['allergy'])){
                        echo $_SESSION['allergy'];
                    } ?>
                </textarea>
            </div>
        </div>

        <!-- Hours -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="hours_input"> Heure d'arrivée </label>
            </div>
            <div class="col-6 text-start">
                <select name="hours_input" id="hours_input" required>
                    <option value=""> Sélectionner </option>
                    <?php
                    diffStartEnd($hours_start, $hours_end);
                    for($i=0; $i<$diff-1; $i++){
                        $substr_start_minutes += 15;
                        if ($substr_start_minutes >59){
                            $substr_start_minutes -= 60;
                            $substr_start_hours +=1;
                        }
                        if(strlen($substr_start_minutes) == 1) {
                            // Add a '0' before the hours to 1 at 9
                            $substr_start_minutes = "0".$substr_start_minutes;
                        }
                        echo '<option value="'. $substr_start_hours. 'h'. $substr_start_minutes.
                        '">' . $substr_start_hours. 'h'. $substr_start_minutes.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <!-- envoyer / annuler -->
        <div class="row text-center">
            <div class="col-12">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    type="submit" 
                    value ="submit"> 
                    Réserver 
                </button>
            </div>
        </div>
    </form>
        <div class="row text-start">
            <div class="col-12">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    onclick="window.location.href='./index.php'"> 
                    Annuler 
                </button>
            </div>
        </div>
</section>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>