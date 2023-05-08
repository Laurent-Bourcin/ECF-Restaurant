<?php 
require "../connexion_at_db.php";
$dateChoice = $_POST['date'];
require "../max_seats.php";
require "../seats_reserved.php";
seatsReservedLunch($dateChoice, $mysqli, $seats_reserved_lunch);
seatsReservedDinner($dateChoice, $mysqli, $seats_reserved_dinner);
require "../day_French.php";
require "../select_moment.php";
require "../display_seats_available.php";

// Day choice is an open day for restaurant ?
$restaurant_open = '';
// Search days in db hours table and create a new array with them
$days_db = $mysqli->query("SELECT day FROM hours ORDER BY field(day, 
'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche')");
$days_exist = [];
while($days_array = mysqli_fetch_array($days_db)) {
    if(!in_array($days_array['day'], $days_exist)){
        array_push($days_exist, $days_array['day']);
    }
};

// Compare date choice and date in db when restaurant is open
if(in_array($day_french, $days_exist)){
    // If restaurant open
    $restaurant_open = true;
    displaySeatsAvailable($seats_available_lunch, $seats_available_dinner, $is_lunch_day_open, 
    $is_dinner_day_open);
    selectMoment($mysqli, $day_french, $dateChoice, $seats_available_lunch, 
    $seats_available_dinner);
} else {
    // If restaurant is closed
    $restaurant_open = false;
    echo 'Le restaurant n\'est pas ouvert le '. $day_french;
};