<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $message[] = 'registered successfully, login now please!';
      }
   }

}

?>

<?php include "templates/header.php"; ?>



<section class="contact_section layout_padding">
    <div class="container ">
      <h2 class="mt-5 text-center">
        Register Now
      </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <form action=""  method="post">
          <div>
              <input  class="form-control"  type="text" placeholder="Name" name="name" required />
            </div>
            
            <div>
              <input  class="form-control"  type="email" placeholder="Email" name="email" required />
            </div>
            <div>
              <input  class="form-control"  type="password" placeholder="Password" name="pass" required />
            </div>
            <div>
              <input  class="form-control"  type="password" placeholder=" Confirm Password" name="cpass" required />
            </div>
           
            
            <div class="d-flex justify-content-center">
              <button  class="form-control btn btn-info"  type="submit" value="Login" class="btn" name="submit">
              Register
              </button>
            </div>
            <p class="text-white" >Already  Have Account</p>
      <a href="user_login.php" class="btn btn-sm btn-warning">Login Now</a>
          </form>
        </div>

      </div>
    </div>
  </section>

<!-- <section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box">
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="btn" name="submit">
      <p>already have an account?</p>
      <a href="user_login.php" class="option-btn">login now</a>
   </form>

</section> -->













<?php include 'templates/footer.php'; ?>

