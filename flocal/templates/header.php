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
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Flocal - The Local Flower Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>

   <script>

   function removeElementClick(){
      alert("hi fun works")
      const element = document.getElementById("errorMessage");
       element.remove();
   }

 
</script>
   <!-- body -->
   <body class="main-layout">
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message w-100 border" id="errorMessage" >
            <span class="text-center fs-2">'.$message.'</span>
            <i class="fas fa-times" onclick="removeElementClick();"></i>
         </div>
         ';
      }
   }
?>  

      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.php"><img class="w-50 rounded" src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                              <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
                                 <li class="active"> <a href="index.php">Home</a> </li>
                                 <li> <a href="about.php">About</a> </li>
                                 <li><a href="shop.php">Shop</a></li>
                                 <li><a href="gallery.php">Gallery</a></li>
                                 <li><a href="contact.php">Contact Us</a></li>
                                 
                                 <!-- <li class="last"><a href="#"><img src="images/search_icon.png" alt="icon"/></a></li> -->
                                 <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <!-- <li>
                                 <a href="wishlist.php"><i class="fa-solid fa-heart-circle-check"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
        -->
                                 </li>
                                 <li>
                                 <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span>(<?= $total_cart_counts; ?>)</span></a>

                                 </li>
                                 <li>
                                 <a href="components/user_logout.php">Logout</a>

                                 </li>
         
         <?php
            }else{

         ?>
          <li>
                                 <a href="user_login.php">Login</a>

                                 </li>

         <?php
            }
         ?>  
                              </ul>
                              
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="icons">
        
         <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
         <!-- <a href="search_page.php"><i class="fas fa-search"></i></a> -->
           <!-- <div id="user-btn" class="fas fa-user"></div> -->
      </div>

     

               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>

   
            <!-- end header -->

           