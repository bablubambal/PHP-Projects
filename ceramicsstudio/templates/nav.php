  
  
  <!-- header section start -->
  <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.php">Home</a>
                  <a href="shop.php">Products</a>
                  <a href="about.php">About</a>
                  <!-- <a href="cart.php">Cart</a> -->
                  <a href="contact.php">Contact</a>
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
           
        
        


            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <a class="logo" href="index.php">
               <h1>CERAMIC  STUDIO</h1>
                <!-- <img src="images/logo.png"> -->
            </a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="booking.php" class="text-danger btn-outline-danger">
                           <!-- <img src="images/user-icon.png"> -->
                           Book Now
                        </a></li>
                        <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <li  >
         <a href="update_user.php" class="text-success" >Update</a>
         </li>
         <li  >
         <a href="components/user_logout.php" class="text-success"  onclick="return confirm('logout from the website?');">logout</a> 
 
         </li>

         <?php
            }else{
         ?>

<li  >
         <a href="user_login.php" class="text-danger">Login</a>
         </li>
<?php
            }
         ?> 
                        <!-- <li><a href="#"><img src="images/bag-icon.png"></a></li> -->
                        <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <!-- header section end -->