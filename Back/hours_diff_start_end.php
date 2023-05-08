<?php

function diffStartEnd($hours_start, $hours_end){
    global $substr_start_hours;
    global $substr_end_hours;
    global $substr_start_minutes;
    global $substr_end_minutes;
    global $diff;
    $substr_start_hours = substr($hours_start, 0, -2);
    $substr_end_hours = substr($hours_end, 0, -2);
    $substr_start_minutes = substr($hours_start, 2);
    $substr_end_minutes = substr($hours_end, 2);
    $diff_hours = $substr_end_hours - $substr_start_hours;
    $diff_hours = $diff_hours * 60;
    $diff_minutes = $substr_end_minutes - $substr_start_minutes;
    $diff = $diff_hours + $diff_minutes;
    $diff = $diff / 15;
}

?>