<?php

require "connexion_at_db.php";

// Function for select moment
function selectMoment($mysqli, $day_french, $dateChoice, $seats_available_lunch, 
$seats_reserved_dinner) {
    $req_moment_lunch = $mysqli->query("SELECT title FROM hours WHERE day='$day_french' AND
    title='Midi'");
    $req_moment_dinner = $mysqli->query("SELECT title FROM hours WHERE day='$day_french' AND
    title='Soir'");
    echo
        '<div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="moment_select"> Choix du moment </label>
            </div>
            <div class="col-6 text-start">
                <select name="moment_select" id="moment_select" required>
                    <option value=""> Selectionner </option>';
                if($seats_available_lunch > 0){
                    while($moment = mysqli_fetch_array($req_moment_lunch)) {
                        echo
                        '<option value="'. $moment["title"]. '">'. $moment["title"]. '</option>';
                    }
                }
                if($seats_reserved_dinner > 0){
                    while($moment = mysqli_fetch_array($req_moment_dinner)) {
                        echo
                        '<option value="'. $moment["title"]. '">'. $moment["title"]. '</option>';
                    }
                }
                echo
                '</select>
            </div>
        </div>';
};