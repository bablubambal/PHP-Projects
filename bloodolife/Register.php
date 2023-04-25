<?php
// echo "hi i works";
include 'components/connect.php';

session_start();

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
   $bloodgroup = $_POST['bloodgroup'];
   $gender = $_POST['gender'];
   $location ="India";
   $phone = $_POST['phone'];
 

//    $image_01 = $_FILES['image_01']['name'];
//    $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
//    $image_size_01 = $_FILES['image_01']['size'];
//    $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
//    $image_folder_01 = './uploaded_img/'.$image_01;
   if(strtolower($gender) == "male"){
    $image_01 = "boy.png";
   }
   else{
    $image_01 ="girl.png";
   }
  

   
   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email already exists!';
     
      echo '<script language="javascript">';
echo 'alert("Mail Already Registered !!")';
echo '</script>';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
         echo "message not found";
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password,bloodgroup,gender,location,profileimg,phone) VALUES(?,?,?,?,?,?,?,?)");
         $insert_user->execute([$name, $email, $cpass,$bloodgroup,$gender,$location,$image_01,$phone]);
        //  move_uploaded_file($image_tmp_name_01, $image_folder_01);
         $message[] = 'registered successfully, login now please!';
        
         echo '<script language="javascript">';
echo 'alert("Donor Account Registered !!")';
echo '</script>';
header("Location:index.php");
      }
   }
//    echo $name,$email,$pass,$bloodgroup,$gender,$image_01,$phone;
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
        <form form action="" method="post" >
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name" name="name" required>
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="email" required>
            <br>
            <i class="fas fa-phone icon"></i>
            <input type="text" placeholder="Phone" name="phone" required>
            <br>
            <i class="fas fa-venus-mars  "></i>
          
            <input type="text" placeholder="Gender" name="gender" required>
            
            <br>
            <i class="fas fa-heart  gender"></i>
          
            <input type="text" placeholder="Blood Group" name="bloodgroup" required>
            
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data"  name="pass" required>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" id="password_data"  name="cpass"  required>
          
           
            <div class="action-btn">
                <button class="btn primary" type="submit" value="Create Your Account" class="btn" name="submit">Register as Donor..</button>
                <button class="btn"> <a href="index.php">Login</a> </button>
            </div>
        </form>
    </div>
</div>
<script src="./Register.js"></script>
</body>
</html>