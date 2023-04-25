<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>
<?php include "templates/header.php" ?> 
<?php include "templates/nav.php" ?> 
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>About Us</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-image">
              <img src="assets/images/download.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Indulge in artisanal bliss at MANNA Bakery - where freshly baked treats are crafted with love and care, satisfying your cravings with every bite</h4>
           

<p>
MANNA Bakery is a charming, artisanal bakery located in the heart of a bustling city. The aroma of freshly baked goods wafts through the air, inviting passersby to step inside and indulge in a world of delightful treats. The shop is adorned with rustic decor, featuring exposed brick walls, warm wooden accents, and soft, warm lighting that creates a cozy and welcoming ambiance.
</p>
<p>As customers enter MANNA Bakery, they are greeted by friendly and knowledgeable staff who are passionate about their craft. 
<br>  
The bakers work tirelessly in an open kitchen, kneading dough, shaping loaves, and carefully crafting pastries with precision and care. The air is filled with the sound of baking, from the hum of the ovens to the rhythmic tapping of dough being shaped.</p>
             
              <div class="share">
                <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

    <!-- Subscribe Form Starts Here -->
    <?php include "templates/subs.php"; ?>
 
    <!-- Subscribe Form Ends Here -->


 

    
   <?php include "templates/footer.php"; ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
