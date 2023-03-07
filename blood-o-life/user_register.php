<?php

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
   $mainsub = $_POST['mainsub'];
   $secondsub = $_POST['secondsub'];
   $location = $_POST['location'];
   $phone = $_POST['phone'];

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = './uploaded_img/'.$image_01;
   

   
   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password,mainsub,secondsub,location,profileimg,phone) VALUES(?,?,?,?,?,?,?,?)");
         $insert_user->execute([$name, $email, $cpass,$mainsub,$secondsub,$location,$image_01,$phone]);
         move_uploaded_file($image_tmp_name_01, $image_folder_01);
         $message[] = 'registered successfully, login now please!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Register as Tutor</h3>
      <input type="text" name="name" required placeholder=" Username...." maxlength="20"  class="form-control p-3 bg-light fs-4 rounded mb-2" >
      <input type="email" name="email" required placeholder="Email..." maxlength="50"   oninput="this.value = this.value.replace(/\s/g, '')" class="form-control p-3 bg-light fs-4 rounded  mb-2" >
      <input type="file"  name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp"  required id="" class="form-control p-3 bg-light fs-4 rounded  mb-2">
      <input type="password" name="pass" required placeholder=" your password" maxlength="20"  class="form-control p-3 bg-light fs-4 rounded mb-2" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="form-control p-3 bg-light fs-4 rounded mb-2 " oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="text" name="phone" required placeholder="Phone..." maxlength="20"  class="form-control p-3 bg-light fs-4 rounded mb-2 " oninput="this.value = this.value.replace(/\s/g, '')">

      <select name="mainsub" id="" class="form-control p-3 bg-light fs-4 mb-2"  >
         <option value="maths ">--Select Primary Subject --</option>
         <option value="maths">Maths</option>
         <option value="science">Science</option>
         <option value="english">English</option>
         <option value="social">Social</option>
      </select>
      <select name="secondsub" id="" class="form-control p-3 bg-light fs-4 mb-2"  >
         <option value="science  ">--Select Secondary Subject --</option>
         <option value="maths">Maths</option>
         <option value="science">Science</option>
         <option value="english">English</option>
         <option value="social">Social</option>
      </select>
      <select name="location" id=""  class="form-control p-3 bg-light fs-4 mb-3 " >
      <option class="text-muted" value="maths  ">--Select Your Location --</option>
         <option value="hyderabad">Hyderabad</option>
         <option value="mumbai">Mumbai</option>
         <option value="chennai">Chennai</option>
         <option value="delhi">Delhi</option>

      </select>
      <input type="submit" value="Create Your Account" class="btn" name="submit">
      <p>already have an account?</p>
      <a href="user_login.php" class="option-btn">login now</a>
   </form>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>