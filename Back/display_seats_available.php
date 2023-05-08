<?php

require "connexion_at_db.php";
require "max_seats.php";
require "is_moment_day_open.php";

// Seats availables
$seats_available_lunch = $max_seats - $seats_reserved_lunch;
$seats_available_dinner = $max_seats - $seats_reserved_dinner;

// Display number of seats available
function displaySeatsAvailable($seats_available_lunch, $seats_available_dinner, 
$is_lunch_day_open, $is_dinner_day_open) {
    echo 
    '<div class="row mb-2 text-center">
        <div class="col-6 text-end">';
            // if restaurant open for lunch
            if($is_lunch_day_open == true){
                if($seats_available_lunch == 0){
                    echo '<p> Midi: le restaurant est complet </p>';
                } else{
                echo '<p> Midi: il reste '. $seats_available_lunch. 
                ' places disponibles </p>';
                echo '<input type="hidden" name="seats_available_lunch" 
                value="'. $seats_available_lunch. '">
                </input>';
                }
            // if restaurant close for lunch
            } else {
                echo '<p> Midi: le restaurant est fermé </p>';
            };
        echo
        '</div>
        <div class="col-6 text-start">';
            // if restaurant open for dinner
            if($is_dinner_day_open == true){
                if($seats_available_dinner == 0){
                    echo '<p> Soir: le restaurant est complet </p>';
                } else{
                    echo '<p> Soir: il reste '. $seats_available_dinner. 
                ' places disponibles </p>';
                }
            // if restaurant close for dinner
            } else {
                echo '<p> Soir: le restaurant est fermé </p>';
            };
        echo
        '</div>
    </div>';
};