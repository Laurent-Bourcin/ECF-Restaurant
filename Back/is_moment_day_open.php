<?php 
require "connexion_at_db.php";

// Search in db if lunch at day choice is open
$req_lunch_day_open = $mysqli->query("SELECT * FROM hours WHERE
day='$day_french' AND title='Midi'");
$lunch_day_open = mysqli_fetch_all($req_lunch_day_open);

// Search in db if dinner at day choice is open
$req_dinner_day_open = $mysqli->query("SELECT * FROM hours WHERE
day='$day_french' AND title='Soir'");
$dinner_day_open = mysqli_fetch_all($req_dinner_day_open);

// Create a variable for lunch
if(isset($lunch_day_open[0][0])) {
    $is_lunch_day_open = true;
} else {
    $is_lunch_day_open = false;
}

// Create a variable for dinner
if(isset($dinner_day_open[0][0])) {
    $is_dinner_day_open = true;
} else {
    $is_dinner_day_open = false;
};