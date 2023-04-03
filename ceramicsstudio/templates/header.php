<?php

include 'components/connect.php';

session_start();


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>


 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Ceramic Studio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  <style>
    .form-control {
      display: block;
    width: 100%;
    padding: 1.5rem 1.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    height: calc(4.25rem + 2px);
    border: 1px solid #ced4da;
    border-radius: 1.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
  </style>
<?php include "head.php"; ?>
<style>
    .form-control {
      display: block;
    width: 100%;
    padding: 1.5rem 1.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    height: calc(4.25rem + 2px);
    border: 1px solid #ced4da;
    border-radius: 1.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
  </style>
  <body>
 
    <!-- Pre Header -->
    <!-- <div id="pre-header">
      <div class="container">
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
         <div class="w-100 d-flex  bg-primary p-3 ">
            <span class="text-center text-white">'.$message.'</span>
            <i class="fas fa-times text-white" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

