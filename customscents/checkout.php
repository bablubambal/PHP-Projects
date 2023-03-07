<?php

include 'components/connect.php';
error_reporting(0);

session_start();
// error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['order'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $method = filter_var($method, FILTER_SANITIZE_STRING);
   $address = 'flat no. '. $_POST['flat'] .', '. $_POST['street'] .', '. $_POST['city'] .', '. $_POST['state'] .', '. $_POST['country'] .' - '. $_POST['pin_code'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if($check_cart->rowCount() > 0){

      $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

      $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);

      $message[] = 'order placed successfully!';
   }else{
      $message[] = 'your cart is empty';
   }

}

?>

<?php include "templates/header.php"; ?>

<?php include "templates/nav.php"; ?>



<section class="contact_section layout_padding">
    <div class="container ">
      <h2 class="">
        Place Order
      </h2>
      <p>
      <form action="" method="POST">
      <div class=" w-100  d-flex border p-3  justify-content-center">
      <?php
         $grand_total = 0;
         $cart_items[] = '';
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
      ?>
         <p> <?= $fetch_cart['name']; ?> <span>(<?= '$'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?>)</span> </p>
      <?php
            }
         }else{
            echo '<p class="empty">your cart is empty!</p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <div class="grand-total text-warning">grand total : <span>₹<?= $grand_total; ?>/-</span></div>
      </div>
         
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
        <form action="" method="POST">



   



   <div class="flex">
      <div class="inputBox">
        
         <input type="text" name="name" placeholder="enter your name" class="box" maxlength="20" required>
      </div>
      <div class="inputBox">
        
         <input type="number" name="number" placeholder="enter your number" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
      </div>
      <div class="inputBox">
        
         <input type="email" name="email" placeholder="enter your email" class="box" maxlength="50" required>
      </div>
      <div class="inputBox ">
       <!-- <span>Payment Mode</span> -->
         <select name="method" class="box w-100  bg-white my-2 p-3  border-0" required>
            <option value="cash on delivery">--Select Payment Mode--</option>
            <option value="cash on delivery">cash on delivery</option>
            <option value="credit card">credit card</option>
            <option value="paytm">paytm</option>
            <option value="paypal">paypal</option>
         </select>
      </div>
      <div class="inputBox">
       
         <div>

            <input type="text" name="flat" placeholder="e.g. flat number" class="box" maxlength="50" required>
         </div>
      </div>
      <div class="inputBox">
         
         <input type="text" name="street" placeholder="e.g. street name" class="box" maxlength="50" required>
      </div>
      <div class="inputBox">
       
         <input type="text" name="city" placeholder="e.g. mumbai" class="box" maxlength="50" required>
      </div>
      <div class="inputBox">
       
         <input type="text" name="state" placeholder="e.g. maharashtra" class="box" maxlength="50" required>
      </div>
      <div class="inputBox">
         
         <input type="text" name="country" placeholder="e.g. India" class="box" maxlength="50" required>
      </div>
      <div class="inputBox">
        
         <input type="number" min="0" name="pin_code" placeholder="e.g. 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
      </div>
   </div>

   <div class="d-flex justify-content-center">
              <button type="submit" name="order" class="btn option-btn <?= ($grand_total > 1)?'':'disabled'; ?>" value="place order">
                Place Order
              </button>
            </div>
   <!-- <input type="submit" name="order" class="btn option-btn <?= ($grand_total > 1)?'':'disabled'; ?>" value="place order"> -->

</form>
          
        </div>

      </div>
    </div>
  </section>














<?php include "templates/footer.php"; ?>