<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "root";

// $mysqli = mysqli_connect($servername, $username, $password, $dbname);

$mysqli = new mysqli($host, $username, $password, $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
} 

return $mysqli;
