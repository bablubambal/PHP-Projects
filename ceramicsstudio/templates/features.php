   
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
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 4"); 
    
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
       
   ?>
                  <div class="col-lg-3 col-sm-6">
                    <a href="shop.php">
                    <div class="product_box">
                    
                              
                    <h4 class="bursh_text"><?= $fetch_product['name']; ?></h4>
                    <p class="lorem_text"><span>₹</span><?= $fetch_product['price']; ?></p>
                    <img src="uploaded_img/<?= $fetch_product['image_01'];   ?>" class="image_1">
                   
                 </div>
                    </a>
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
   
   
 