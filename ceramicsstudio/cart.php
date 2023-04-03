<?php include "codes/cartcode.php"; ?>
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>






<h3 class="heading">Shopping Cart</h3>

<div class="container d-flex">

    <?php
      $grand_total = 0;
      $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
   ?>
    <form action="" method="post" class="box">
        <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
        <!-- <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a> -->
        <div class="featured-item">
            <img src="uploaded_img/<?= $fetch_cart['image']; ?>" class="w-100" style="height:300px !important;"
                alt="Item 1">
            <h4><?= $fetch_cart['name']; ?></h4>
            <h6>₹<?= $fetch_cart['price']; ?>/-</h6>
            <table>
                <!-- <tr>
                    <td>Customization</td>
                    <td>Value</td>
                </tr> -->
                <tbody>
                    <tr>
                        <td>Qty:</td>
                        <td> <input type="number" name="qty" class="qty w-100" min="1" max="99"
                                onkeypress="if(this.value.length == 2) return false;"
                                value="<?= $fetch_cart['quantity']; ?>"> <br>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Custom Size</td>
                        <td> <input type="text" name="Size" class="qty w-100" value="<?= $fetch_cart['size']; ?>"> </td>

                    </tr> -->
                    <!-- <tr>
                        <td> Custom Color</td>
                        <td> <input type="text" name="color" class="qty w-100" value="<?= $fetch_cart['color']; ?>">
                        </td>

                    </tr> -->
                    <!-- <tr>
                        <td> Other Customization</td>
                        <td>
                            <input type="text" name="customization" class="w-100 fs-2"
                                value="<?= $fetch_cart['customization']; ?>" placeholder="Your customization here...">
                        </td>
                    <tr> -->
                        <td >
                            Sub Total :
                           
                        </td>
                        <td>
                        <span>₹<?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Update</td>
                        <td><button type="submit" class="btn btn-outline-warning" name="update_qty">Update</button></td>
                    </tr>
                </tbody>
            </table>
            <!-- <div class="d-flex justify-content-between align-items-center my-3">
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                        <a href="">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <input type="submit" value="" style="background: none; border: none;" class="fas fa-eye"
                                name="add_to_cart">
                        </a>

                    </div> -->


        </div>
        <!-- <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
      <div class="name"><?= $fetch_cart['name']; ?></div>
      <div class="flex" style="flex-direction:column; width:100%;">
         <div  class="price  form">₹<?= $fetch_cart['price']; ?>/-</div>
        
<div class="fs-2 text-center">
   <label for="Size" class="fs-4">Select Size:</label> <?php echo $fetch_cart['size']; ?> <br>
<input type="radio" name="Size" value="S" id="">S
<input type="radio" name="Size" value="M" id="">M
<input type="radio" name="Size" value="L" id="">L
<input type="radio" name="Size" value="XL" id="">XL
</div>
<div class="fs-2 text-center">
   <label for="Size" class="fs-4">Select Color: </label> <?php echo $fetch_cart['color']; ?> <br>
<input type="radio" name="color" value="Red" id="">R
<input type="radio" name="color" value="Blue" id="">B
<input type="radio" name="color" value="Green" id="">G
<input type="radio" name="color" value="Yellow" id="">Y
</div>
         <input type="text" name="customization" class="w-100 fs-2"   value="<?= $fetch_cart['customization']; ?>" placeholder="Your customization here...">
         <input type="file" name="customizationphoto" id="">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
      </div>
      <div class="sub-total"> Sub Total : <span>₹<?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</span> </div>
      <input type="submit" value="delete item" onclick="return confirm('delete this from cart?');" class="delete-btn" name="delete"> -->
    </form>
    <?php
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="w-100 p-4 bg-secondary text-white m-5">Cart is Empty!</p>';
   }
   ?>
</div>

<div class="container mx-auto border p-3  my-3 text-center">
    <h3>Grand Total : <span>₹<?= $grand_total; ?>/-</span></h3>
    <a href="shop.php" class="btn btn-outline-warning">Continue Shopping</a>
    <a href="cart.php?delete_all" class="btn btn-outline-danger <?= ($grand_total > 1)?'':'disabled'; ?>"
        onclick="return confirm('delete all from cart?');">Clear Your Cart</a>
    <a href="checkout.php" class="btn btn-outline-primary <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to Checkout</a>
</div>

</section>






<?php include 'templates/footer.php' ;?>