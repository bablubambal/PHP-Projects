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
    <link rel="stylesheet" href='help.css'>
    <!-- <link rel="stylesheet" href='index.css'> -->
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
<title>Connect with us </title>

<body>

    <header>
        <nav>
            <div class="header-logo"><a href="index.php">
            <img style="width: 80px;" src="./Images/bb_logo(white).png">
            </a></div>
            <div class="header-list">
                <ul>
                    <li><a href="help.html">Get Help</a></li>
                    <li><a href="index.php#search">Search Donor's</a></li>
                    <li><a href="index.php#vol-sect">Volunteer</a></li>
                    <li><a href="index.php#about-us">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>




<div class="container">


<section >
<section class="">
   <form action="" method="post">
      <input type="text" name="search_box" placeholder="search here..." maxlength="100" class="box" required>
      <button type="submit" class="fas fa-search" name="search_btn"></button>
   </form>
</section>

   <div class=''>

   <?php
     if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
     $search_box = $_POST['search_box'];
     $select_products = $conn->prepare("SELECT * FROM `users` WHERE name LIKE '%{$search_box}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="about-col">
                        <div class="image">
                            <img src="uploaded_img/<?= $fetch_product['profileimg']; ?>">
                        </div>
                        <h3><?= $fetch_product['name']; ?></h3>
                        <p> Blood Group<?= $fetch_product['bloodgroup']; ?></p>
                         <p> Phone<?= $fetch_product['phone']; ?></p>
                    </div>
   <!-- <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['profileimg']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form> -->
   <?php
         }
      }else{
         echo '<p class="empty">no products found!</p>';
      }
   }
   ?>

   </div>

</section>

</div>












<script src="js/script.js"></script>

</body>
</html>