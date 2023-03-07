<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>
<?php include "templates/header.php" ?> 
<?php include "templates/nav.php" ?> 

<section class="orders">

   <h1 class="text-center">Your Orders</h1>

   <div class="container mx-3 d-flex ">

   <?php
      if($user_id == ''){
         echo '<p class="w-100 p-4 bg-secondary text-white m-5">Login Now to see Orders..</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box-shadow border p-2 m-3">
      <!-- <p>placed on : <span><?= $fetch_orders['placed_on']; ?></span></p> -->
      <p>Name : <span><?= $fetch_orders['name']; ?></span></p>
      <p>Email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>Number : <span><?= $fetch_orders['number']; ?></span></p>
      <!-- <p>address : <span><?= $fetch_orders['address']; ?></span></p> -->
      <p>Payment Method : <span><?= $fetch_orders['method']; ?></span></p>
      <p>Orders : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>Price : <span>₹<?= $fetch_orders['total_price']; ?>/-</span></p>
      <p>Payment <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="w-100 p-4 bg-secondary text-white m-5">No Order Place Now!</p>';
      }
      }
   ?>

   </div>

</section>





<?php include "templates/subs.php" ?> 
<?php include "templates/footer.php" ?>








