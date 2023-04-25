
<?php include "codes/checkoutcode.php"; ?>
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>
<section class="checkout-orders">

   <form action="" method="POST">

   <h3 class="text-center mt-2">Place Your Order</h3>

      <div class="display-orders mt-3">
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
      <div class="d-flex w-50 mx-auto p-2">
         <h3 class="name w-50 bg-secondary"><?= $fetch_cart['name']; ?></h3>
         <h3 class="price w-50 bg-secondary"> <?= '$'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?></h3>
      </div>
         <!-- <p> <?= $fetch_cart['name']; ?> <span>(<?= '$'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?>)</span> </p> -->
      <?php
            }
         }else{
            echo '<p class="empty">your cart is empty!</p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <h3 class="text-info text-center">Total Amount : <span>₹<?= $grand_total; ?>/-</span></h3>
      </div>

     

      <div class="flex container w-75">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" name="name" placeholder="enter your name" class="form-control my-2" maxlength="20" required>
         </div>
         <div class="inputBox">
            <span>Number:</span>
            <input type="number" name="number" placeholder="enter your number" class="form-control my-2" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" name="email" placeholder="enter your email" class="form-control my-2" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Your Payment Mode:</span>
            <select name="method" class="form-control my-2" required>
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
               <option value="paytm">paytm</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address:</span>
            <textarea type="text" name="flat" placeholder="e.g. flat number" class="form-control my-2" maxlength="50" required>
      </textarea>
         </div>
         <!-- <div class="inputBox">
            <span>address line 02 :</span>
            <input type="text" name="street" value="new street" placeholder="e.g. street name" class="form-control my-2" maxlength="50" required>
         </div> -->
         <div class="inputBox">
            <span>City :</span>
            <input type="text" name="city" placeholder="e.g. mumbai" class="form-control my-2" maxlength="50" required>
         </div>
         <!-- <div class="inputBox">
            <span>state :</span>
            <input type="text" name="state" placeholder="e.g. Hyderabad" class="form-control my-2" maxlength="50" required>
         </div> -->
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" name="country" value="India" placeholder="e.g. India" class="form-control my-2" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Pin:</span>
            <input type="number" min="0" name="pin_code" placeholder="e.g. 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="form-control my-2" required>
         </div>
         <div class="inputBox my-3">
         <input type="submit" name="order" class="btn form-control bg-primary text-white py-2 <?= ($grand_total > 1)?'':'disabled'; ?>" value="Order Now !">
         </div>
      </div>

     

   </form>

</section>













<?php include "templates/subs.php" ?> 
<?php include "templates/footer.php" ?>