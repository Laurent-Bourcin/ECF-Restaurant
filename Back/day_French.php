<?php

require "connexion_at_db.php";

$day_french ='';

function dayFrench ($dateChoice, $day_french) {
    // day into variable
    $tabDate = explode('-', $dateChoice);
    $timestamp = mktime(0, 0, 0, $tabDate[1], $tabDate[2], $tabDate[0]);
    $day_english = date('D', $timestamp);
    global $day_french;
    // Trad in french
    switch($day_english) {
        case 'Mon':
            $day_french = 'Lundi';
            break;
        case 'Tue':
            $day_french = 'Mardi';
            break;
        case 'Wed':
            $day_french = 'Mercredi';
            break;
        case 'Thu':
            $day_french = 'Jeudi';
            break;
        case 'Fri':
            $day_french = 'Vendredi';
            break;
        case 'Sat':
            $day_french = 'Samedi';
            break;
        case 'Sun':
            $day_french = 'Dimanche';
            break;
    };
};

dayFrench ($dateChoice, $day_french);