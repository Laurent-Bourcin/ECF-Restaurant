<?php 
require "connexion_at_db.php";

// Put max seats into variable
$req_max_seats = $mysqli->query("SELECT seats FROM max_seats");
$max_seats_array = mysqli_fetch_all($req_max_seats);
$max_seats = $max_seats_array[0][0];