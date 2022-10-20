<?php

$host = "mysql";
$dbname = "park_db";
$username = "php";
$password = "php";



$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
} 

$sql = "CREATE TABLE IF NOT EXISTS `park_db`.`user` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(128) NOT NULL , `email` VARCHAR(255) NOT NULL , `password_hash` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;";

if ($conn->query($sql) == TRUE){
    echo"";
}else{
    echo"error creating table: " . $conn->error;
}
return $mysqli;
