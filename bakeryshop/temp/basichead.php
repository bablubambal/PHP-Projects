<?php

include 'components/connect.php';

session_start();
error_reporting(0);


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title> Wefting Handlooms- Customized Handlooms</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="cassets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="cassets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="cassets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="cassets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="cassets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="cassets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="cassets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="cassets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="cassets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="cassets/css/responsive.css">
     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />      
<style>

.form-control{
  height: 47px;
    margin-bottom: 15px;
    border-radius: 18px
}

</style>


    </head>
	
	<body>
 <!-- Pre Header -->
 <!-- <div id="pre-header">
      <div class="container-fluid bg-warning text-center py-3">
        <div class="row">
          <div class="col-md-12">
            <span>Transform your outdoor space into a lush oasis with Garden of Dreams' wide variety of plants and flowers</span>
          </div>
        </div>
      </div>
    </div> -->

    <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="w-100  bg-secondary p-3 ">
            <span class="text-center text-white">'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>