<?php
$hours_start_array = [];
$hours_start = '';
function HoursStart ($day_french, $mysqli, $moment){
    $req_hours_start = $mysqli->query("SELECT hours_start FROM hours WHERE
    day='$day_french' AND title='$moment'");
    global $hours_start_array;
    global $hours_start;
    $hours_start_array = mysqli_fetch_all($req_hours_start);
    $hours_start = $hours_start_array[0][0];
}

?>