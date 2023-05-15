<?php 
// Connection at db
//connexion at db:
// if heroku
if(getenv('JAWSDB_URL')!== false) {
    $dbparts = parse_url(getenv('JAWSDB_URL'));
    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    $mysqli = mysqli_connect($hostname, $username, $password, $database);
} else {
    // local
    $BDD = array();
    $BDD['host'] = "localhost:3307";
    $BDD['user'] = "root";
    $BDD['pass'] = "";
    $BDD['db'] = "restaurant";
    $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
}
if(!$mysqli) {
    echo "Connexion non établie". $mysqli_connect_error();
    exit;
}
?>