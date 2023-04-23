

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
<?php
//  include "templates/header.php"; 
  ?>
<?php include "temp/hero.php"; ?> 
<?php 
// include "templates/nav.php";
 ?> 



    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="about-page my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>About Us</h1>
            </div>
          </div>
          <div class="col-md-6 w-100">
            <div class="left-image w-100">
              <img src="./cassets/images/populer-products/p2.png" style="width:100%; height:600px" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>About Us .</h4>
              <p>
              WEFTING Handloom Company is a unique and innovative brand that combines the art of handloom with the modern technique of wefting to create custom-made hair extensions. Their products are crafted with care and precision, using high-quality natural hair and traditional weaving techniques to create seamless and natural-looking extensions.
              <br>
              With a focus on sustainability and ethical practices, WEFTING Handloom Company works with local communities and artisans to source their materials and support traditional craftsmanship. Their team of skilled artisans is dedicated to providing their customers with personalized service and creating custom-fit extensions that match the client's hair texture and color. WEFTING Handloom Company is the perfect choice for anyone looking for high-quality, sustainable, and ethical hair extensions that are both beautiful and natural-looking
              </p>
             

             
              <!-- <div class="share">
                <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <?php include "temp/newsletter.php" ; ?>	

<?php include "temp/footer.php" ; ?>	



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
