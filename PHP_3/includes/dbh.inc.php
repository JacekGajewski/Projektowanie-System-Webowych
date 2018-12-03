<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "tnt999";
$dbName = "loginSystem";

$connection = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, 3307);

if (!$connection){
    die("Conection failed: ".mysqli_connect_error());
}