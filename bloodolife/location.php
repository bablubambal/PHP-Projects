<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./Images/bb_logo(white).png' type="image/png">
    <link rel="stylesheet" href='index.css'>
    <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<title>Blood O Life</title>
<div class="preloader">
    <img src="pre-loader.svg" alt="spinner">
</div>

<body>
    <!--Scroll to top button-->
  
 

    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <div>
    <nav  style="display: flex;
    justify-content: space-between;">
    <div class="header-logo">
      <a href="index.php">

         <img style="width:60px;" src="./Images/bb_logo(white).png">
      </a>
   </div>
    <div class="header-list">
        <ul>
            <li><a href="user_login.php">Login </li></a>
            <!-- <li><a href="donate.html">Donate</li></a> -->
            <li><a href="index.php#vol-sect">Our Donors</li></a>
            <li><a href="index.php#about-us">About Us</a></li>
            <li><a href="index.php">Home</li></a>
            </ul>
    </div>
    </nav>
</div>
   

    <!--ABOUT US -->

    <main>
    <section id="about-us ">
            <div class="about">
                <h1 class="heading">Blood Donor's</h1> <br>
                <p class="head-des" class="text">Search Blood Donors by Category<span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                  
                        
                        <?php
     $category = $_GET['category'];
     $select_products = $conn->prepare("SELECT * FROM `users` WHERE bloodgroup LIKE '%{$category}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
                        
                    
                    
                    <div class="about-col">
                        <div class="image">
                        <img width="30px" src="uploaded_img/<?= $fetch_product['profileimg']; ?>">
                        </div>
                        <h2> <?= $fetch_product['name']; ?></h2>
                        <span></span>
                        <p>Blood Group: <?= $fetch_product['bloodgroup']; ?></p>
                        <p >Phone Number: <?= $fetch_product['phone']; ?></p>
                        
                        
                    </div>

<?php 
  }
}else{
   // echo '<p class="empty">no products found!</p>';
   echo '<p class=" empty text-white border-danger bg-danger">No Donor with this Blood Group</p>';
}

?>
                    
                   
                    
                </div>
            </div>
        </section>
    </main>

    
    <!--REVIEW-->
    <section class="customer-review">
        <div class="row-customer">
            <h2>Testimonials<br>See what our users have to say</h2>
        </div>
        <div class="row-customer">
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    Blood O Life is just awesome! I just donated for the first time and it could not have been
                    easier.Blood O Life is doing a very important work and I'm happy that I could contribute . It's
                    hygienic,safe and convenient, I recommend it to everyone!
                </div>
                <div class="customer">
                    <img src="Images/review-3.PNG" alt="Customer photo">
                    <p>Esha Puri </p>
                </div>
            </div>

            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I found Blood O Life at a time that my mother was in urgent need of blood. Blood O Life arranged the
                    required amount in no time. It saved us a lot of hassle and worry especially in such a trying
                    time.<br> Thank you Blood O Life!
                </div>
                <div class="customer">
                    <img src="Images/review-2.PNG" alt="Customer photo">
                    <p>Amit Mangal</p>
                </div>
            </div>
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I have been a part of this organization for quite some time and each time I'm amazed by the seamless
                    and efficient system in place.The importance of timely care especially in the recent times is known
                    and having Blood O Life takes a load off my mind.
                </div>
                <div class="customer">
                    <img src="Images/review-1.PNG" alt="Customer photo">
                    <p>Dr.Kabir Khatri</p>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2023 © All rights reserved.</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations
                and
                fears
                aside. Learn from Blood O Life and platelet donors how simple and easy it is to roll up a
                sleeve
                and help
                save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/#" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/#" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fas fa-globe"></i></a>
                    </li>
                </ul>
            </div>
        </div>


    </footer>
    <!--Javascript for pre-loader-->

    <script>
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 1.5;
            } else {
                clearInterval(fadeEffect);
            }
        }, 1500);
        window.addEventListener('load', fadeEffect);
    </script>
    <!--js for scroll to top-->
    <script src="up.js"></script>

    <!--JAVASCRIPT FOR TOGGLE MENU -->
    <script>
        var headerl = document.getElementById("headerl");

        function showMenu() {
            headerl.style.right = "0";
        }

        function hideMenu() {
            headerl.style.right = "-210px";
        }
    </script>


    <!--js for scroll effects-->
    <script src="scroll.js"></script>

</body>

</html>







