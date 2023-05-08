<?php
$hours_end_array = [];
$hours_end = '';
function HoursEnd ($day_french, $mysqli, $moment){
    $req_hours_end = $mysqli->query("SELECT hours_end FROM hours WHERE
    day='$day_french' AND title='$moment'");
    global $hours_end_array;
    global $hours_end;
    $hours_end_array = mysqli_fetch_all($req_hours_end);
    $hours_end = $hours_end_array[0][0];
}

?>