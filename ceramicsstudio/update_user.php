

<?php include "codes/registercode.php"; ?>

<?php include "templates/header.php" ?> 
<?php include "templates/nav.php" ?> 

<section class="container w-75 mt-5">

   <form action="" method="post">
      <h3 class="text-center">Update Your Profile</h3>
      <input type="hidden" name="prev_pass" value="<?= $fetch_profile["password"]; ?>">
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="form-control my-2" value="<?= $fetch_profile["name"]; ?>">
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="form-control my-2" oninput="this.value = this.value.replace(/\s/g, '')" value="<?= $fetch_profile["email"]; ?>">
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20"  class="form-control my-2" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="enter your new password" maxlength="20"  class="form-control my-2" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" placeholder="confirm your new password" maxlength="20"  class="form-control my-2" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" class="btn btn-primary my-4" name="submit">
   </form>

</section>



<?php include 'templates/footer.php' ;?>









