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
    <style>
        a{
            text-decoration:none;
        }
    </style>
</head>
<title>Blood O Life</title>
<div class="preloader">
    <img src="pre-loader.svg" alt="spinner">
</div>

<body>
    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <header>
        <video autoplay muted loop plays-inline id="homevideo">
            <source src="./video/homevideo1.mp4" type="video/mp4">
        </video>
        <div id="logo"> <a href="index.php"><img style="width:70px" src="./Images/bb_logo(white).png"></a>
        </div>
        <div id="nav">
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a class="scroll" href="index.php">Home</a></li>
                    <li><a class="scroll" href="#about-us">About Us</a></li>
                    <li><a class="scroll" href="#vol-sect">Our Donors</a></li>
                    <li><a href="Register.php">Donor Registration</a></li>
                    <li><a href="help.html" >Get Help</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="text-box">
            <h1> Start </h1>
            <h1>Saving Lives </h1>
            <p>Become a donor or request for blood And help save lives</p>
            <a href='Register.php' class="hero-btn" target="_blank">Register </a>
        </div>
    </header>

    <!--ABOUT US -->

    <main>
        <?php include "./components/aboutussection.php"; ?>
    </main>

    <!-- Volunteer Section -->

    <div class="volunteer" section id="vol-sect">
        <div class="title-head">
            <h1 class="title">Our super heroes </h1>
        </div>
        <p class="content">We depend on volunteers! Volunteers make up 96% of our total<span class="line"><br></span>
            workforce and carry on our humanitarian work. Blood donation is healthy,<span class="line"><br></span> our
            volunteers are available 24/7 to help and donate
            blood. Blood banks store blood<span class="line"><br></span> bags but our volunteers are there with you in
            an emergency for a blood transfusion real time.</p>
        <ul class="volunt">
        


       

            <li class="vol">
                <span class=" vol-i number">1 </span>
                <span class=" vol-i name">Garvit</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group">O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">2</span>
                <span class=" vol-i name">Mehere kaur</span>
                <span class=" vol-i location">Female</span>
                <span class=" vol-i blood group">B+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">3</span>
                <span class=" vol-i name">Kenny</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group">AB+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">4</span>
                <span class=" vol-i name">Sarah</span>
                <span class=" vol-i location">Female</span>
                <span class=" vol-i blood group">A+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">5</span>
                <span class=" vol-i name">Kenneth</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group"> O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">6</span>
                <span class=" vol-i name">Ritika</span>
                <span class=" vol-i location">Female</span>
                <span class=" vol-i blood group">O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">7</span>
                <span class=" vol-i name">Krish Maurya</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group">O- <i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">8</span>
                <span class=" vol-i name">Tushkar</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group">AB+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">9</span>
                <span class=" vol-i name">Nitin</span>
                <span class=" vol-i location">Male</span>
                <span class=" vol-i blood group">AB-<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">10</span>
                <span class=" vol-i name">Riya</span>
                <span class=" vol-i location">Female</span>
                <span class=" vol-i blood group">B+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

        </ul>
    </div>


    <!-- donor category  -->
    <section id="about-us">
            <div class="about">
                <h1 class="heading">Blood Donor's</h1> <br>
                <p class="head-des" class="text">Search Blood Donors by Category<span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                       
                        
                    
                    <a href="location.php?category=A%2B">
                    <div class="about-col">
                        <div class="image">
                            <img width="30px" src="./Images/drop.png">
                        </div>
                        <h3>A+</h3>
                        
                    </div>

</a>
                    <a href="location.php?category=A-">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>A-</h3>
                    </div> 
                    </a>
                        
                   <a href="location.php?category=B%2B">
                  
                   <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>B+</h3>
                 
                        
                    </div>
                    </a>
                    
                    <a href="location.php?category=B-">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>B-</h3>
</div>
                    </a>
                        
                   <a href="location.php?category=AB%2B">
                  
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>AB+</h3>
                        
                    </div>
                   </a>
                     <a href="location.php?category=AB-">
                     <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>AB-</h3>
                        
                    </div>
                     </a>

                    <a href="location.php?category=O%2B">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>O+</h3>
                        
                    </div>
                    </a>
                   <a href="location.php?category=O-">
                   <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>O-</h3>
                        
                    </div>
                   </a>
                   
                    
                </div>
            </div>
        </section>
    </main>
    <!-- donor category  -->
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