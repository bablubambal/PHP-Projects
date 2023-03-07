<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header('location:cart.php');
}

if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $size = $_POST['Size'];
   $color = $_POST['color'];
   // $customizationphoto = $_POST['customizationphoto'];
   $customization = $_POST['customization'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? , customization = ?, size = ?,color = ?  WHERE id = ?");
   $update_qty->execute([$qty,$customization,$size,$color, $cart_id],);
   // $update_qty = $conn->prepare("UPDATE `cart` SET customization = ? WHERE id = ?");
   // $update_qty->execute([$customization, $cart_id]);
   $message[] = 'cart quantity updated';
}

?>

<?php include "templates/header.php"; ?>

<?php include "templates/nav.php"; ?>




<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Your Cart..
            </h2>
        </div>
        <div class="product_container">
        <?php
      $grand_total = 0;
      $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
   ?>

        <div class="box border p-2 m-2 box-shadow">
            <form action="" method="post">
                <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
                <div class="img-box">
                    <img width="100%" height="300px" src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        <?php echo $fetch_product['name'] ?>
                    </h5>
                    <h4>
                        <span>₹</span><?= $fetch_cart['price']; ?>/-
                    </h4>
                    Qty:
                    <input type="number" name="qty" class="qty w-50" min="1" max="99"
                        onkeypress="if(this.value.length == 2) return false;" value="<?= $fetch_cart['quantity']; ?>">
                    <br>
                    <div>
                        <div class="fs-2 text-center">
                            <label for="Size" class="fs-4">Select Fragnace:</label>
                            <?php echo $fetch_cart['size']; ?> <br>
                            <input type="radio" name="Size" value="Lemon" id=""><img width="60px" src="images/t1.webp"
                                alt="">
                            <input type="radio" name="Size" value="Chandan" id=""><img width="60px" src="images/t2.jpg"
                                alt="">
                            <input type="radio" name="Size" value="Mint" id=""><img width="60px" src="images/t3.jpg"
                                alt="">
                            <input type="radio" name="Size" value="Pink Pepper" id=""><img width="60px"
                                src="images/t4.webp" alt="">
                        </div>
                        <div class="fs-2 text-center">
                            <label for="Size" class="fs-4">Select Type: </label> <?php echo $fetch_cart['color']; ?>
                            <br>
                            <input type="radio" name="color" value="Strong" id="">Strong
                            <input type="radio" name="color" value="Medium" id="">Medium
                            <input type="radio" name="color" value="Light" id="">Light

                        </div>
                        Customization: <input type="text" name="customization" class="w-50 fs-2"
                            value="<?= $fetch_cart['customization']; ?>">
                        <!-- <input type="file" name="customizationphoto" id=""> -->
                        <button type="submit" name="update_qty">
                            <i class="fa-solid fa-pen-to-square">

                            </i>
                        </button>



                    </div>
                    <div class="sub-total"> Sub Total :
                        <span>₹<?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</span>
                    </div>
                    <input type="submit" value="delete item" onclick="return confirm('delete this from cart?');"
                        class="btn btn-danger p-1" name="delete">
                </div>
            </form>
        </div>

     
        

    <!-- </div>
    </div> -->




    <?php
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="btn p-3 bg-danger"> Cart is Empty!!</p>';
   }
   ?>


    </div>
    <div class="btn-box">
        <!-- <a href="">
          See More
        </a> -->
        <div class="cart-total mx-auto ">
            <p>Grand Total : <span>₹<?= $grand_total; ?>/-</span></p>
            <a href="shop.php" class="option-btn">Continue Shopping</a>
            <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>"
                onclick="return confirm('delete all from cart?');">Delete All Items</a>
            <a href="checkout.php" class="btn btn-primary <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to
                Checkout</a>
        </div>
    </div>
    </div>


</section>



<!-- <section class="products shopping-cart">

   <h3 class="heading">Shopping Cart</h3>

   <div class="box-container">

   <?php
      $grand_total = 0;
      $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
      <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
      <img width="200px" src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
      <div class="name"><?= $fetch_cart['name']; ?></div>
      <div class="flex" style="flex-direction:column; width:100%;">
         <div  class="price  form">₹<?= $fetch_cart['price']; ?>/-</div>
         <input type="number" name="qty" class="qty w-100" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="<?= $fetch_cart['quantity']; ?>"> <br>
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
      <input type="submit" value="delete item" onclick="return confirm('delete this from cart?');" class="delete-btn" name="delete">
   </form>
   <?php
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="empty border bg-danger"> Cart is Empty!!</p>';
   }
   ?>
   </div>

   <div class="cart-total mx-auto ">
      <p>Grand Total : <span>₹<?= $grand_total; ?>/-</span></p>
      <a href="shop.php" class="option-btn">Continue Shopping</a>
      <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all item</a>
      <a href="checkout.php" class="btn btn-primary <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to Checkout</a>
   </div>

</section> -->












<?php include "templates/footer.php"; ?>