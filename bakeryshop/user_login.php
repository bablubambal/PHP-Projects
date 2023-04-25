<?php include "codes/userlogincode.php"; ?>

<?php include "templates/header.php" ?> 
<?php include "templates/nav.php" ?> 

<section class="container w-50 my-5">

   <form action="" method="post" >
      <h3 class="mt-5 text-center" >Login Now</h3>
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="form-control my-1" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="form-control my-1" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" class="form-control my-1 bg-primary text-white text-center" name="submit">
      <p>don't have an account?</p>
      <a href="user_register.php" class="btn btn-outline-primary">Register Now</a>
   </form>

</section>





<?php include "templates/subs.php" ?> 
<?php include "templates/footer.php" ?> 







