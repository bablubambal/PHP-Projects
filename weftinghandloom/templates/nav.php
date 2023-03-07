
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto w-100">
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
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->