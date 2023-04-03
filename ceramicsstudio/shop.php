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


<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>




<div class="product_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="product_taital">Our Products</h1>
                <p class="product_text">See Our Products</p>
            </div>
        </div>
        <div class="product_section_2 layout_padding">
            <div class="row">
                <?php
     $select_products = $conn->prepare("SELECT * FROM `products` "); 
    
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
       
   ?>
                <div class="col-lg-3 col-sm-6">
                <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                <div class="featured-item">
                    <img src="uploaded_img/<?= $fetch_product['image_01'];   ?>" class="w-100 h-100" alt="Item 1">
                    <h4><?= $fetch_product['name']; ?></h4>
                    <h6><span>₹</span><?= $fetch_product['price']; ?></h6>
                    <div class="d-flex justify-content-between align-items-center my-3">
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye text-success"></a>
                        <div>
                        <i class="fa-solid fa-cart-shopping text-success">
                            <input type="submit" value="" style="background: none; border: none;" class="fas fa-eye btn btn-outline-success text-success"
                                name="add_to_cart">
                            </i>
                        </div>
                        
                            
                           
                        

                    </div>


                </div>

            </form>

                    <!-- <a href="shop.php">
                        <div class="product_box">


                            <h4 class="bursh_text"><?= $fetch_product['name']; ?></h4>
                            <p class="lorem_text"><span>₹</span><?= $fetch_product['price']; ?></p>
                            <img src="uploaded_img/<?= $fetch_product['image_01'];   ?>" class="image_1">

                        </div>
                    </a> -->
                </div>


                <?php
      }
   }else{
      echo '<p class="w-100 p-4 bg-secondary text-white m-5" >No Products!</p>';
   }
   ?>

            </div>

        </div>
    </div>
</div>


















<?php include "templates/subs.php" ?>
<?php include "templates/footer.php" ?>