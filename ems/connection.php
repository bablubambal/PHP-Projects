<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "employee_management";
$port = 3307;

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname,$port);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>