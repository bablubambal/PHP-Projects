<?php
//<!--========== PHP CONNECTION TO DATABASE ==========-->
    $host = "localhost";
    $username = "root";
    // $pass = "malako123";
    $pass = "";

    $dbname = "cakeshopsite";
    $port = 3307;
    //create connection
    $conn = mysqli_connect($host, $username, $pass, $dbname,$port);
    //check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>