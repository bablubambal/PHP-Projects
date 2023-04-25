<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";
$port = 3307;
$conn = new mysqli($servername, $username, $password, $dbname,$port);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>