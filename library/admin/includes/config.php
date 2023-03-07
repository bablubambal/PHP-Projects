<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_PORT','3307');
define('DB_NAME','library');
$db_name = 'mysql:host=localhost;dbname=library;port=3307;';
// Establish database connection.
try
{
$dbh = new PDO($db_name,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>