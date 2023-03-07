<?php

include 'components/connect.php';

session_start();
error_reporting(0);

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
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>

<?php include "templates/header.php"; ?>
<section class="about_section layout_padding">
   <?php include "templates/nav.php"; ?>
  </section>


  <section class="contact_section layout_padding">
    <div class="container ">
      <h2 class="text-center">
        Get Connected With Us..
      </h2>
    </div>
    <div class="container w-100">
      <div class="row ">
        <div class="col-md-8 col-lg-6 mx-auto">
          <form action="" class="w-100" method="post">
            <div>
              <input class="form-control" type="text" placeholder="Name" name="name" />
            </div>
            <div>
              <input class="form-control"  type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <input class="form-control"  type="text" placeholder="Phone Number" name="number" />
            </div>
            <div>
              <input class="form-control"  type="text" class="message-box" placeholder="Message" name="msg" />
            </div>
           
              <button  class="form-control btn btn-outline-success" type="submit" value="send message" name="send" >
                SEND
              </button>
            
          </form>
        </div>

      </div>
    </div>
  </section>
















<?php include 'templates/footer.php'; ?>
