<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>subject</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products h-100">

   <h1 class="heading">Tutor's by Subjects</h1>

     <div class="d-flex">

   <?php
     $category = $_GET['category'];
     $select_products = $conn->prepare("SELECT * FROM `users` WHERE mainsub LIKE '%{$category}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   
  
    
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="uploaded_img/<?= $fetch_product['profileimg']; ?>" class="rounded img-fluid h-50" style="width: 350px; " />
            </div>
            <h4 class="mb-2"><?=  $fetch_product['name']; ?></h4>
            <p class="text-muted mb-4"><?=  $fetch_product['email']; ?> <span class="mx-2"></span> </p>
           
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              Contact Now:  <?=  $fetch_product['phone']; ?>
            </button>
           
               
               <h3 class="border border-primary m-2" >Location: <?=  $fetch_product['location']; ?></h3>
            
            <h2>Subjects </h2>
            <div class="d-flex justify-content-between text-center  mb-2 me-3">
               
            <button type="button" class="btn btn-outline-success btn-rounded btn-lg">
                <?=  $fetch_product['mainsub']; ?>
            </button>
            <button type="button" class="btn btn-outline-warning btn-rounded btn-lg">
               <?=  $fetch_product['secondsub']; ?>
            </button>
            </div>
          </div>
        </div>

      </div>
   
 
  
   <?php
      }
   }else{
      echo '<p class=" empty border-danger bg-danger text-white">Tutor of That subject Not yet registered</p>';
   }
   ?>
  </div>

   </div>

</section>



 <!-- <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['email']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['profileimg']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form> -->









<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>


</body>
</html>