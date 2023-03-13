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

<?php 
// include "templates/header.php"
 ?>
<?php 
// include "templates/nav.php"
 ?>

<?php include "temp/basichead.php" ; ?>	
	<?php include "temp/hero.php" ; ?>
 <!-- Additional CSS Files -->
 <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">



<!-- Single Starts Here -->
<?php
     $pid = $_GET['pid'];
     $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>

<form action="" method="post" class="box">
    <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
    <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
    <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
    <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
    <div class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Product Details</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                <img  src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                                </li>
                                <li>
                                <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="">
                                </li>
                                <li>
                                <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="">
                                </li>
                                <li>
                                <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                <img width="100px" height="100px" src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                                </li>
                                <li>
                                <img width="100px" height="100px" src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="">
                                </li>
                                <li>
                                <img width="100px" height="100px" src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="">
                                </li>
                                <!-- <li>
                                    <img src="assets/images/thumb-04.jpg" />
                                </li> -->
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4><?= $fetch_product['name']; ?></h4>
                        <h6><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></h6>
                        <p><?= $fetch_product['details']; ?>. </p>
                        <!-- <span>7 left on stock</span> -->
                        <!-- <form action="" method="get"> -->
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="qty" class="qty" min="1" max="99"
                onkeypress="if(this.value.length == 2) return false;" value="1">
                            <input name="quantity" type="quantity" class="quantity-text" id="quantity"
                                onfocus="if(this.value == '1') { this.value = ''; }"
                                onBlur="if(this.value == '') { this.value = '1';}" value="1">
                            <!-- <input type="submit" class="button" value="Order Now!"> -->
                            <input type="submit" value="Shop Now" class="button" name="add_to_cart">
                        <!-- </form> -->
                        <div class="down-content">
                            <div class="categories">
                                <!-- <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a
                                            href="#">Lifestyle</a></span></h6>
                            </div> -->
                            <div class="share">
                                <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                                class="fa fa-linkedin"></i></a><a href="#"><i
                                                class="fa fa-twitter"></i></a></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
      }
   }else{
      echo '<p class="w-100 p-4 bg-secondary text-white m-5">No Such Product Found!</p>';
   }
   ?>
<!-- Single Page Ends Here -->




<!-- <div class="row">
    <div class="image-container">
        <div class="main-image">
            <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
        </div>
        <div class="sub-image">
            <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
            <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="">
            <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="">
        </div>
    </div>
    <div class="content">
        <div class="name"><?= $fetch_product['name']; ?></div>
        <div class="flex">
            <div class="price"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99"
                onkeypress="if(this.value.length == 2) return false;" value="1">
        </div>
        <div class="details"><?= $fetch_product['details']; ?></div>
        <div class="flex-btn">
            <input type="submit" value="add to cart" class="btn" name="add_to_cart">
            <input class="option-btn" type="submit" name="add_to_wishlist" value="add to wishlist">
        </div>
    </div>
</div> -->











<?php include "temp/newsletter.php" ; ?>	

<?php include "temp/footer.php" ; ?>


<!-- php include "templates/subs.php" ?>
php include "templates/footer.php" ?> -->

   

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>