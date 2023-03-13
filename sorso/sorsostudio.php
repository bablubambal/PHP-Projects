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

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<!-- bootstrap css  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- bootstrap js   -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="container my-4">
    <h1 class="text-center">Sorso Studio (Our Happy Customer)</h1>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-1.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-2.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-3.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-4.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-5.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-6.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-7.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-8.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-9.webp" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card m-3">
                <img  src="images/s-10.webp" alt="">
            </div>
        </div>
       
    </div>
</div>




<!-- 
<section class="category">

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=dress" class="swiper-slide slide ">
      <img src="images/icon-1.webp" alt="">
      <h3>Dress</h3>
   </a>

   <a href="category.php?category=shirts" class="swiper-slide slide">
      <img src="images/icon-2.webp" alt="">
      <h3>Shirt</h3>
   </a>

   <a href="category.php?category=wedding" class="swiper-slide slide">
      <img src="images/icon-3.webp" alt="">
      <h3>Wedding</h3>
   </a>

   <a href="category.php?category=hoddie" class="swiper-slide slide">
      <img src="images/icon-4.webp" alt="">
      <h3>Hoddie</h3>
   </a>

   <a href="category.php?category=jackets" class="swiper-slide slide">
      <img src="images/icon-5.webp" alt="">
      <h3>Jackets</h3>
   </a>

   <a href="category.php?category=slippers" class="swiper-slide slide">
      <img src="images/icon-9.png" alt="">
      <h3>Slippers</h3>
   </a>

   

   
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">Our Products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section> -->









<?php include 'components/footer.php'; ?>

<!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

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
        slidesPerView: 5,
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
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html> -->