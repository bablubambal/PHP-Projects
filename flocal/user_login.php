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
      header('location:index.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<?php include "templates/header.php"; ?>


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
              <input class="form-control" type="email" placeholder="Email" name="email" required />
            </div>
            <div>
              <input class="form-control" type="password" placeholder="Password" name="pass" required />
            </div>
            
            
              <button class="form-control text-info" type="submit" value="Login"  name="submit">
              Login
              </button>
           
            <p class="text-center text-white" >Don't Have Account</p>
      <a href="user_register.php" class="btn btn-sm">Create Account</a>
          </form>
        </div>

      </div>
    </div>
  </section>















<?php include 'templates/footer.php'; ?>

