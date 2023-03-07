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

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<?php include "templates/header.php"; ?>
<?php include "templates/nav.php"; ?>

<section class="contact_section layout_padding">
    <div class="container ">
      <h2 class="">
        Login Now
      </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <form action=""  method="post">
            
            <div>
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div>
              <input type="password" placeholder="Password" name="pass" required />
            </div>
            
            <div class="d-flex justify-content-center">
              <button type="submit" value="Login" class="btn" name="submit">
              Login
              </button>
            </div>
            <p>Don't Have Account</p>
      <a href="user_register.php" class="option-btn">Create Account</a>
          </form>
        </div>

      </div>
    </div>
  </section>

<!-- <section class="form-container">


   <form action="">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" class="btn" name="submit">
      <p>don't have an account?</p>
      <a href="user_register.php" class="option-btn">register now</a>
   </form>

</section> -->













<?php include 'templates/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>