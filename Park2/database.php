<?php

$host = "mysql";
$dbname = "park_db";
$username = "php";
$password = "php";



$mysqli = new mysqli($host, $username, $password, $dbname);



if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
} 

return $mysqli;
