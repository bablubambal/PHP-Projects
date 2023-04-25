<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">
      <img src="https://cdn-icons-png.flaticon.com/512/46/46045.png" style="width:50px" alt="">   
      Tutor <span class="text-bold">Care..</span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <!-- <a href="about.php">about</a> -->
         <a href="subjects.php?category=maths">Subject</a>
         <a href="location.php?category=hyderabad">Location</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <!-- <a href="search_page.php"><i class="fas fa-search"></i></a> -->
         <!-- <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a> -->
         <!-- <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a> -->
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile border-none">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn"><i class="fa-sharp fa-solid fa-user"></i></a>
            <a href="user_login.php" class="option-btn"><i class="fa-solid fa-right-to-bracket"></i></a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');"><i class="fa-solid fa-arrow-up-left-from-circle"></i></a> 
         <?php
            }else{
         ?>
         <p>Tutor's Registration here...</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn"><i class="fa-sharp fa-solid fa-user"></i></a>
            <a href="user_login.php" class="option-btn"><i class="fa-solid fa-right-to-bracket"></i></a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>