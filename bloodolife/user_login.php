<?php

include 'components/connect.php';

session_start();

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
      echo "<script> alert('Error in Login');</script>";
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img style="width:60px;" src="./Images/bb_logo(white).png"></div>
    <div class="header-list">
        <ul>
            <li><a href="user_login.php">Login </li></a>
            <!-- <li><a href="donate.html">Donate</li></a> -->
            <li><a href="index.php#vol-sect">Our Donors</li></a>
            <li><a href="index.php#about-us">About Us</a></li>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img height="150%" src="./Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <h2>Login Now</h2>
        <form form action="" method="post" >
            <!-- <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name" name="name" required>
            <br> -->
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="email" required>
            <br>
            <!-- <i class="fas fa-phone icon"></i>
            <input type="text" placeholder="Phone" name="phone" required>
            <br>
            <i class="fas fa-venus-mars  "></i>
          
            <input type="text" placeholder="Gender" name="gender" required>
            
            <br>
            <i class="fas fa-heart  gender"></i>
          
            <input type="text" placeholder="Blood Group" name="bloodgroup" required>
            
            <br> -->
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data"  name="pass" required>
            <!-- <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" id="password_data"  name="cpass"  required>
           -->
           
            <div class="action-btn">
                <button class="btn primary" ype="submit" value="login now" class="btn" name="submit">Login Donor..</button>
                <button class="btn"> <a href="Register.php">Create  Donor Account</a> </button>
            </div>
        </form>
    </div>
</div>
<script src="./Register.js"></script>
</body>
</html>




















<script src="js/script.js"></script>

</body>
</html>