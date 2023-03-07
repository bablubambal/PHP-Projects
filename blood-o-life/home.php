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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
  
   <!-- bootstap  -->
    
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


   


</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="home-bg">

<section class="home">
<div class="d-flex align-items-start mt-5 ms-5 justify-content-end text-white flex-column mt50" style="    margin-top: 286px !important;" >
   <h1 class="lg-font mt50 mt-5 mb-3">Tutor <a href=""><span class="text-bold">Care..</span></a></h1>
   <h2>We care for you!</h2>
   <h3>Best Tutor's</h3>
</div>
   <!-- <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest smartphones</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest watches</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest headsets</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div> -->

</section>

</div>

<!-- via location  -->
<section class="category">

   <h1 class="heading">Find Tutor's by <i class="fa-solid fa-location-dot"></i> Location</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="location.php?category=hyderabad" class="swiper-slide slide">
      <img src="images/hyderabad-charminar.png" alt="">
      <h3>Hyderabad</h3>
   </a>

   <a href="location.php?category=chenna" class="swiper-slide slide">
      <img src="images/chennai.png" alt="">
      <h3>Chennai</h3>
   </a>

   <a href="location.php?category=delhi" class="swiper-slide slide">
      <img src="images/india-gate.png" alt="">
      <h3>Delhi</h3>
   </a>

   <a href="location.php?category=mumbai" class="swiper-slide slide">
      <img src="images/gate-of-india.png" alt="">
      <h3>Mumbai</h3>
   </a>

   

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>


<section class="about">
   <h2 class="text-center">About Tutor Care..</h2>
   <div class="">
     <div class="row">
      <div class="col-lg-6 col-sm-12">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4g5B6MbtYX_YPWgwbZZrj5mAfeT462cwjFz17n7I6Hw&usqp=CAU&ec=48600112" class="img-fluid w-100 h-100 rounded" alt="">
      </div>
      <div class="col-lg-5 col-sm-12 mx-2">
         <h1>Tutor Care</h1>
         <p class="fs-2" style="font-family:Arial">Tutor Care is a professional tutoring company that helps students of all ages and levels to achieve their academic goals.

With a team of highly experienced and qualified tutors, Tutor Care offers personalized one-on-one tutoring services in a wide range of subjects, including math, science, English, history, and more.

The company is dedicated to providing quality tutoring that is tailored to each student's unique learning style, needs, and goals. Tutors work closely with students to identify areas of difficulty and develop customized lesson plans that address those challenges.</p>
      </div>
     </div>
   </div>
</section>

<!-- via subjects  -->
<section class="category">

   <h1 class="heading">Find Tutor's By Subject</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="subjects.php?category=math" class="swiper-slide slide">
      <img src="images/maths.png" alt="">
      <h3>Maths</h3>
   </a>

   <a href="subjects.php?category=science" class="swiper-slide slide">
      <img src="images/chemistry.png" alt="">
      <h3>Science</h3>
   </a>

   <a href="subjects.php?category=english" class="swiper-slide slide">
      <img src="images/blackboard.png" alt="">
      <h3>English</h3>
   </a>

   <a href="subjects.php?category=social" class="swiper-slide slide">
      <img src="images/geography.png" alt="">
      <h3>Social</h3>
   </a>

   

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">Recently Registerd Tutor's</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `users` LIMIT 3"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="col-md-12 col-xl-4 m-3">

<div class="card" style="border-radius: 15px;">
  <div class="card-body text-center">
    <div class="mt-3 mb-4">
      <img src="uploaded_img/<?= $fetch_product['profileimg']; ?>" class="rounded img-fluid h-50 w-100"  />
    </div>
    <h4 class="mb-2"><?=  $fetch_product['name']; ?></h4>
    <p class="text-muted mb-4"><?=  $fetch_product['email']; ?> <span class="mx-2"></span> </p>
   
    <button type="button" class="btn btn-secondary btn-rounded btn-lg">
    <i class="fa-solid fa-phone"></i>  &nbsp;&nbsp;&nbsp; <?=  $fetch_product['phone']; ?>
    </button>
   
       
       <h3 class="border border-primary m-2" ><i class="fa-solid fa-location-dot"></i> <?=  $fetch_product['location']; ?></h3>
    
    <h2>Subjects </h2>
    <div class="d-flex justify-content-between text-center  mb-2 me-3">
       
    <button type="button" class="btn btn-success btn-rounded btn-lg">
        <?=  $fetch_product['mainsub']; ?>
    </button>
    <button type="button" class="btn btn-warning btn-rounded btn-lg">
       <?=  $fetch_product['secondsub']; ?>
    </button>
    </div>
  </div>
</div>

</div>
   <?php
      }
   }else{
      echo '<p class="btn btn-lg btn-primary">No Tutors Registered Yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 4,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
   },
});

</script>

</body>
</html>