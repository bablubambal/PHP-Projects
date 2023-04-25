<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>

<body>
    <div id="topbanner" class="container-fluid h-25 w-100">

    </div>
    <?php require 'header.php'; ?>
    <div class="fluid-container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="600px" src="image/home-1.jpg" alt="">
                    <!-- <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Blood Bank</h1>
                            <p>DONATE BLOOD AND GET REAL BLESSINGS</p>
                            <p><a class="btn btn-lg btn-primary" href="register.php">Blood Life</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="600px" src="image/home-3.jpg" alt="">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg> -->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Donate Blood Save Life</h1>
                            <p>
                                Blood is the most precious gift that anyone can give to another person.
                                Donating blood not only saves the life also save donor's lives.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="register.php">Save Life</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="600px" src="image/home-2.jpg" alt="">

                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Give Life Donate Blood</h1>
                            <p>We have total sixty thousands donor centers and visit thousands of other venues on
                                various occasions</p>
                            <p><a class="btn btn-lg btn-primary" href="register.php">Join With Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>
    </div>



    <div class="container cont">

        <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            <!-- <div class="col-12">
                <div class="card">
                    <img src="image/bg.png" class="card-img-top">
                </div>
            </div> -->

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">A+</div>
                            <div class="card-body">
                                If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+
                                and O-
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">A-</div>
                            <div class="card-body">
                                If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A-
                                and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">B+</div>
                            <div class="card-body">
                                You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">B-</div>
                            <div class="card-body">
                                If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B-
                                and O-.You can give blood to B+ and AB+.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">AB+</div>
                            <div class="card-body">
                                People with AB+ blood can receive red blood cells from any blood type. This means that
                                demand for AB+ can donate with AB only.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">AB-</div>
                            <div class="card-body">
                                AB- patients can receive red blood cells from all negative blood types.
                                AB- can give red blood cells to both AB- and AB+ blood types.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">O+</div>
                            <div class="card-body">
                                Blood O+ can donate to A+, B+, AB+ and O+ Blood
                                Group O can donate red blood cells to anybody. It's the universal donor.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">O-</div>
                            <div class="card-body">
                                O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                                People with O negative blood can only receive red cell donations from O negative donors.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">Admin contact</div>
                            <div class="card-body">
                                <i class="fa fa-envelope"> </i> <a> bloodbank@gmail.com</a><br><br>
                                <i class="fa fa-mobile"> </i> <a> +91 999993343333</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Health tips</div>
                    <div class="card-body">
                        <dt>Eat a healthy diet</dt>
                        <dd>Eat a combination of different foods, including fruit, vegetables, legumes, nuts and whole
                            grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You
                            can improve your intake of fruits and vegetables by always including veggies in your meal;
                            eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables; and
                            eating them in season. By eating healthy, you will reduce your risk of malnutrition and
                            noncommunicable diseases (NCDs) such as diabetes, heart disease, stroke and cancer.</dd>
                        <dt> Consume less salt and sugar</dt>
                        <dd>On the other hand, consuming excessive amounts of sugars increases the risk of tooth decay
                            and unhealthy weight gain. In both adults and children, the intake of free sugars should be
                            reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12
                            teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for
                            additional health benefits. You can reduce your sugar intake by limiting the consumption of
                            sugary snacks, candies and sugar-sweetened beverages.</dd>
                        <dt>Be active</dt>
                        <dd>Physical activity is defined as any bodily movement produced by skeletal muscles that
                            requires energy expenditure. This includes exercise and activities undertaken while working,
                            playing, carrying out household chores, travelling, and engaging in recreational pursuits.
                            The amount of physical activity you need depends on your age group but adults aged 18-64
                            years should do at least 150 minutes of moderate-intensity physical activity throughout the
                            week. Increase moderate-intensity physical activity to 300 minutes per week for additional
                            health benefits.</dd>
                        <dt>Don’t smoke</dt>
                        <dd>Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills
                            not only the direct smokers but even non-smokers through second-hand exposure. Currently,
                            there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are
                            interested or plan to quit.
                            If you are currently a smoker, it’s not too late to quit. Once you do, you will experience
                            immediate and long-term health benefits. If you are not a smoker, that’s great! Do not start
                            smoking and fight for your right to breathe tobacco-smoke-free air.</dd>
                        <dt>Drink only safe water</dt>
                        <dt>Get tested</dt>
                        <dt>Follow traffic laws</dt>
                        <dt>Talk to someone you trust if you're feeling down</dt>
                        <dt>Clean your hands properly</dt>
                        <dt>Have regular check-ups</dt>
                        Visit here to get more health tips.
                        <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020"
                            target="_blank"> World Health Organisation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>

</html>