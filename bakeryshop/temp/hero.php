<?php include "basichead.php"; ?>


<!--welcome-hero start -->
<header id="home" class="welcome-hero">
<?php include "temp/carasoul.php"; ?>

<!-- top-area Start -->
<div class="top-area">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">            
              
                <!-- <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li>
                       
                        <li class="nav-setting">
                            <a href="#"><span class="lnr lnr-cog"></span></a>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <span class="lnr lnr-cart"></span>
                                <span class="badge badge-bg-1">2</span>
                            </a>
                            <ul class="dropdown-menu cart-list s-cate">
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">arm <br> chair</a></h6>
                                        <p>1 x - <span class="price">$180.00</span></p>
                                    </div>
                                    
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                    
                                </li>
                               
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">single <br> armchair</a></h6>
                                        <p>1 x - <span class="price">$180.00</span></p>
                                    </div>
                                   
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                   
                                </li>
                               
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">wooden arn <br> chair</a></h6>
                                        <p>1 x - <span class="price">$180.00</span></p>
                                    </div>
                                   
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                    
                                </li>
                               
                                <li class="total">
                                    <span>Total: $0.00</span>
                                    <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div> -->
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">WEFT<span>ING</span>.</a>

                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
          <!-- <li class="nav-item">
              <a class="nav-link" href="wishlist.php" >
              Wishlist<span>(<?= $total_wishlist_counts; ?>)</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link"  href="cart.php" >
              Cart<span>(<?= $total_cart_counts; ?>)</span>
              </a>
            </li>
            <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <li class="nav-item">
         <a href="update_user.php" class="nav-link">Update</a>
         </li>
         <li class="nav-item">
         <a href="components/user_logout.php" class="nav-link" onclick="return confirm('logout from the website?');">logout</a> 

         </li>

         <?php
            }else{
         ?>

<li class="nav-item">
         <a href="user_login.php" class="nav-link">Login</a>
         </li>
<?php
            }
         ?> 
        
        


            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
                        <!-- <li class=" scroll active"><a href="#home">home</a></li>
                        <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
                        <li class="scroll"><a href="#feature">features</a></li>
                        <li class="scroll"><a href="#blog">blog</a></li>
                        <li class="scroll"><a href="#newsletter">contact</a></li> -->
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</div><!-- /.top-area-->
<!-- top-area End -->

</header><!--/.welcome-hero-->
<!--welcome-hero end -->