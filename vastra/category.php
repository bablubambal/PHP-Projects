<?php

include 'components/connect.php';

session_start();
error_reporting(0);
$category = $_GET['category'];

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>


<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>



<!-- Featured Starts Here -->
<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Our Products <?= $category ?> </h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php
                              $category = $_GET['category'];
                              $select_products = $conn->prepare("SELECT * FROM `products` WHERE category LIKE '%{$category}%'"); 
                              $select_products->execute();
                              if($select_products->rowCount() > 0){
                                 while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
                              ?>
                    <a href="#">
                        <form action="" method="post" class="box">
                            <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                            <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                            <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                            <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                            <div class="featured-item">
                                <img src="uploaded_img/<?= $fetch_product['image_01'];   ?>" class="w-100 h-100"
                                    alt="Item 1">
                                <h4><?= $fetch_product['name']; ?></h4>
                                <h6><span>₹</span><?= $fetch_product['price']; ?></h6>
                                <div class="d-flex justify-content-between align-items-center my-3">
                                    <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                                    <a href="">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <input type="submit" value="" style="background: none; border: none;"
                                            class="fas fa-eye" name="add_to_cart">
                                    </a>

                                </div>

                                
                        </form>

                    </a>

                                                <?php
                                    }
                                 }else{
                                    echo '<p class="w-100 p-4 bg-secondary text-white m-5">No Products!</p>';
                                 }
                                 ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featred Ends Here -->












<?php include "templates/subs.php" ?>
<?php include "templates/footer.php" ?>