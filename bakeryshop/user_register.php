
<?php include "codes/registercode.php"; ?>

<!-- php 
include "templates/header.php" ?> 
php include "templates/nav.php" ?>  -->
<?php include "temp/basichead.php" ; ?>	
	<?php include "temp/hero.php" ; ?>
<section class="container w-75 mt-5" style="width:50%;">

   <form action="" method="post">
      <h3 class="text-center ">Join With Us Now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="form-control my-1">
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="form-control my-1" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="form-control my-1" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="form-control my-1" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="form-control my-1 bg-primary text-white" name="submit">
      <p>Sign In </p>
      <a href="user_login.php" class=" my-3 btn btn-outline-primary">Login Here..</a>
   </form>

</section>




<?php include "temp/newsletter.php" ; ?>	

<?php include "temp/footer.php" ; ?>
<!-- 
php include "templates/subs.php" ?> 
php include "templates/footer.php" ?> -->






