<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="product_container">
      <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
        <div class="box">
          <div class="img-box">
            <img  src="uploaded_img/<?php echo $fetch_product['image_01']; ?>" alt="">
          </div>
          <div class="detail-box">
            
            <h5>
             <?php echo $fetch_product['name']; ?>
            </h5>
            <h4>
              <span>₹</span> <?php echo $fetch_product['price'] ?>  
            </h4>
            <a href="shop.php">
              Buy Now
            </a>
          </div>
        </div>
        <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

      
      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section>