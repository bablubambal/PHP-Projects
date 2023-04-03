<?php

include 'components/connect.php';

session_start();
// error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
   
if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   // $msg = $_POST['msg'];
   $msg = $_FILES["msg"]["name"]; 
        // filter_var($msg, FILTER_SANITIZE_STRING);
   // $msg = "Defau";
   // echo $msg;
   // $msg = "Defaultmsg";

   move_uploaded_file($_FILES["msg"]["tmp_name"],"uploaded_img/".$msg);
   $select_message = $conn->prepare("SELECT * FROM `bookings` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'Already Have a Booking';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `bookings`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'Your Booking is Confimed';

   }

}


?>
