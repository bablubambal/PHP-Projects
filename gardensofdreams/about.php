

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
              <img src="assets/images/aboutimg.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Make Your Dream True with Us.</h4>
              <p>
              Garden of Dreams is a one-stop-shop for all your gardening needs, offering a wide range of high-quality plants, seeds, and pesticides. Our products are carefully selected to ensure that our customers receive the best possible value and quality for their money.
              </p>


<p>
Whether you're a seasoned gardener or just starting, our knowledgeable staff is always available to help you choose the right plants and products for your specific needs. We believe that gardening is not just a hobby, but a way of life, and we strive to share our passion and expertise with our customers.
</p>

<p>
Our selection of plants includes a wide variety of flowers, vegetables, herbs, and succulents, all grown using sustainable and environmentally friendly practices. We also offer a wide range of seeds, including heirloom and organic options, to help you grow your own garden from scratch.
</p>

             
              <div class="share">
                <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  


    <?php include "templates/subs.php" ?> 
<?php include "templates/footer.php" ?>

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
