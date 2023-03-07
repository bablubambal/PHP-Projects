   <!-- Featured Starts Here -->
   <div class="featured-items">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="section-heading">
                       <div class="line-dec"></div>
                       <h1>Our Latest Products</h1>
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="owl-carousel owl-theme">
                       <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
                       <a href="shop.php">
                           <div class="featured-item">
                               <img src="uploaded_img/<?= $fetch_product['image_01'];   ?>" class="w-100 h-100" alt="Item 1">
                               <h4><?= $fetch_product['name']; ?></h4>

                               <h6><span>₹</span><?= $fetch_product['price']; ?></h6>
                               <p> <?= $fetch_product['details']; ?></p>
                           </div>
                       </a>

                       <?php
      }
   }else{
      echo '<p class="w-100 p-4 bg-secondary text-white m-5" >No Products!</p>';
   }
   ?>
                       <!-- <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-01.jpg" alt="Item 1">
                  <h4>Proin vel ligula</h4>
                  <h6>$15.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-02.jpg" alt="Item 2">
                  <h4>Erat odio rhoncus</h4>
                  <h6>$25.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-03.jpg" alt="Item 3">
                  <h4>Integer vel turpis</h4>
                  <h6>$35.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-04.jpg" alt="Item 4">
                  <h4>Sed purus quam</h4>
                  <h6>$45.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-05.jpg" alt="Item 5">
                  <h4>Morbi aliquet</h4>
                  <h6>$55.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-06.jpg" alt="Item 6">
                  <h4>Urna ac diam</h4>
                  <h6>$65.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-04.jpg" alt="Item 7">
                  <h4>Proin eget imperdiet</h4>
                  <h6>$75.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-05.jpg" alt="Item 8">
                  <h4>Nullam risus nisl</h4>
                  <h6>$85.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-06.jpg" alt="Item 9">
                  <h4>Cras tempus</h4>
                  <h6>$95.00</h6>
                </div>
              </a> -->
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Featred Ends Here -->