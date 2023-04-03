

<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>
<?php include "templates/header.php" ?> 
<?php include "templates/nav.php" ?> 
<?php include "templates/about.php" ?>



    



   
<?php include "templates/footer.php" ?>


