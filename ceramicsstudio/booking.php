<?php 
// error_reporting(0);
 ?>
<?php include "templates/header.php" ?> 

<?php include "templates/nav.php" ?> 
<?php include "templates/banner.php" ?> 

<?php include "codes/bookingcode.php" ?>

<section class="contact">

   <form action="" method="post" class="mt-3" enctype="multipart/form-data">
      <h1 class="text-center my-5">Get Your Booking With Us</h1>
     <div class="container">
     <input type="text" name="name" placeholder="Name" required maxlength="20" class="form-control my-1"> 
      <input type="email" name="email" placeholder="Email" required maxlength="50" class="form-control my-1">
      <!-- onkeypress="if(this.value.length == 10) return false;" -->
      <input type="date" name="number" placeholder="" required  class="form-control my-1">
      <input name="msg" class="form-control my-1" type="file" ></input>
      <input type="submit" value="Get Your Booking Done.." name="send" class="form-control my-1 bg-primary text-center">
     </div>
   </form>

</section>


<section class="container" >
<div class="box-container">

<?php
   $select_messages = $conn->prepare("SELECT * FROM `bookings` where user_id = ?");
   $select_messages->execute([$user_id]);
   
//    $select_messages->execute();
   if($select_messages->rowCount() > 0){
      while($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)){
?>
<div class="box border border-outline-primary my-3 w-25">
<p> User id : <span><?= $fetch_message['user_id']; ?></span></p>
<img src="uploaded_img/<?= $fetch_message['message']; ?>" alt="">
<p> Name : <span><?= $fetch_message['name']; ?></span></p>
<p> Email : <span><?= $fetch_message['email']; ?></span></p>
<p> Booking Date : <span><?= $fetch_message['number']; ?></span></p>
<p> message : <span><?= $fetch_message['message']; ?></span></p>
<!-- <a href="messages.php??delete=<?= $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a> -->
</div>
<?php
      }
   }else{
      echo '<p class="empty">you have no messages</p>';
   }
?>

</div>

</section>
  


<?php include "templates/footer.php" ?>