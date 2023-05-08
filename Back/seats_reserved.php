<?php

require "connexion_at_db.php";

// Put seats reserved for the day into variable (seats_reserved)
$seats_reserved_lunch = 0;
$seats_reserved_dinner = 0;
function seatsReservedLunch($dateChoice, $mysqli, $seats_reserved_lunch) {
    global $seats_reserved_lunch;
    $req_seats_reserved = $mysqli->query("SELECT seats FROM table_reservation 
    WHERE date='$dateChoice' AND moment='Midi'");
    while ($row = mysqli_fetch_array($req_seats_reserved)) { 
        $seats_reserved_lunch = $seats_reserved_lunch + $row['seats'];
    }
}

function seatsReservedDinner($dateChoice, $mysqli, $seats_reserved_dinner) {
    global $seats_reserved_dinner;
    $req_seats_reserved = $mysqli->query("SELECT seats FROM table_reservation 
    WHERE date='$dateChoice' AND moment='Soir'");
    while ($row = mysqli_fetch_array($req_seats_reserved)) { 
        $seats_reserved_Dinner = $seats_reserved_dinner + $row['seats'];
    }
};