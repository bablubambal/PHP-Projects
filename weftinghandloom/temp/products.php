<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Our Latest Products</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
                    <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 4"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
						<div class=" col-lg-3 col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img height="300px" src="uploaded_img/<?= $fetch_product['image_01'];   ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<!-- <div class="sale bg-1">
										<p>sale</p>
									</div> -->
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="shop.php">Bu<span>y N</span>ow</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#"><?= $fetch_product['name']; ?></a></h4>
								<p class="arrival-product-price"><span>₹</span><?= $fetch_product['price']; ?></p>
							</div>
						</div>

                        <?php
      }
   }else{
      echo '<p class="w-100 p-4 bg-secondary text-white m-5" >No Products!</p>';
   }
   ?>    
						
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->