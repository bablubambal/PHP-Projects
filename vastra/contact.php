<?php include "codes/contactcode.php"; ?>
<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<section class="contact">

   <form action="" method="post" class="mt-3">
      <h3 class="text-center mt-5">Get In Touch</h3>
     <div class="container">
     <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="form-control my-1"> 
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="form-control my-1">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="form-control my-1">
      <textarea name="msg" class="form-control my-1" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="form-control my-1 bg-primary text-center">
     </div>
   </form>

</section>







<?php include "templates/subs.php" ?> 
<?php include "templates/footer.php" ?>






