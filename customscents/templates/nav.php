<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
            CUSTOM SCENTS
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <!-- <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
              <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
                <!-- <a class="text-decoration-none" href="wishlist.php"><i class="fa-solid fa-heart-circle-check"></i><span>(<?= $total_wishlist_counts; ?>)</span></a> -->
         
              <a class="text-decoration-none"  href="cart.php">

                <img src="images/bag.png" alt="">
                <span>(<?= $total_cart_counts; ?>)</span>
              </a>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="shop.php">Products</a>
                <a href="orders.php">My Orders</a>
                <a href="update_user.php">My Profile</a>
                <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 


                <!-- <a href="blog.html">Blog</a> -->
                <a href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>