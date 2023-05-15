<?php

// Connection at db
require "connexion_at_db.php";

date_default_timezone_set('Europe/Paris');

$date_english = date("l");
$date_french = '';
// Date in french
switch($date_english) {
    case 'Monday':
        $date_french = 'Lundi';
        break;
    case 'Tuesday':
        $date_french = 'Mardi';
        break;
    case 'Wednesday':
        $date_french = 'Mercredi';
        break;
    case 'Thursday':
        $date_french = 'Jeudi';
        break;
    case 'Friday':
        $date_french = 'Vendredi';
        break;
    case 'Saturday':
        $date_french = 'Samedi';
        break;
    case 'Sunday':
        $date_french = 'Dimanche';
        break;
}

// Search days in db hours
$footer_days_db = $mysqli->query("SELECT day FROM hours");
$footer_days_exist = [];
while($footer_days_array = mysqli_fetch_array($footer_days_db)) {
    if(!in_array($footer_days_array['day'], $footer_days_exist)){
        array_push($footer_days_exist, $footer_days_array['day']);
    }
};