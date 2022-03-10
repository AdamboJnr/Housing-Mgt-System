<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/custom.css"> 
    <!-- Connection to FontAwesomes-->
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <!-- carousel -->
    <link rel="stylesheet" href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script> 
    <script src="Assets/js/jquery.countdown.js"></script>   
</head>
<body>
    <!-- Start of Navbar -->
    <nav class="navbar navbar-expand-md Navigation bg-dark navbar-dark sticky-top">
        <div class="container">                
            <!-- Brand -->
            <a class="navbar-brand" href="index.php"> <i class="fa fa-home fa-lg"></i> <span class="font-italic">Adambo Properties</span>  </a>
                            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="About.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="properties.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <!-- Log In/Log Out Dynamic better showing if logged in/out -->
                    <input type="button" value="<?php if(isset($_SESSION["user_id"])){echo "Log Out";}else{echo "Log In";}?>" class="btn btn-outline-primary" onclick="window.location.href='logout.php'">               
                </ul>
            </div> 
        </div>
    </nav> 
    <!-- End of Navbar -->

    <!-- Start of homepage banner -->
    <div class="bg-img body">
        <div class="b-text">
            <h4><a href="index.html" class="text-white">Home</a>/About</p></h4>
            <h1 class="text-center about">ABOUT US</h1>                  
        </div>
    </div>
    <!-- End of banner -->


    <!-- About us start -->
    <div class="about-us content-area-8 bg-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="properties-service-v">
                        <img src="Assets/Images/modern-african-businesswoman-working-tablet-computer-isolated-white-background-cut-out-48247299.jpg" alt="admin" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-text more-info">
                        <h3>Why Choose Us?</h3>
                        <div id="faq" class="faq-accordion">
                            <div class="card m-b-0">
                                <div class="card-header">
                                    <a class="card-title collapsed text-dark" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                        <i class="fas fa-angle-down"></i>  
                                        Impeccable Customer Service
                                    </a>
                                </div>
                                <div id="collapse1" class="card-block collapse p-3">
                                    <p>Adambo Properties is committed to providing impeccable service focused on the individual needs of every client.</p>
                                </div>

                                <div class="card-header">
                                    <a class="card-title collapsed text-dark" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                        <i class="fas fa-angle-down"></i> 
                                        Worldwide charity programs
                                    </a>
                                </div>
                                <div id="collapse2" class="card-block collapse p-3">
                                    <p>We as a Company try to give back to the community by offering charitable programs to help the vulnerable in the society.</p>
                                </div>

                                <div class="card-header">
                                    <a class="card-title collapsed text-dark" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                        <i class="fas fa-angle-down"></i> 
                                        Honesty and integrity
                                    </a>
                                </div>
                                <div id="collapse3" class="card-block collapse p-3">
                                    <p>As a company we believe in Honesty and integrity, this brings trust between us and the clients and create better relationships for doing business.</p>
                                </div>

                                <div class="card-header bd-none">
                                    <a class="card-title collapsed text-dark" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                        <i class="fas fa-angle-down"></i> 
                                        Affordable Rates
                                    </a>
                                </div>
                                <div id="collapse4" class="card-block collapse p-3">
                                    <p>One of the main aims here, indeed perhaps the main aim, is to offer quality properties at an affordable prices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us end -->

    <!-- Counters showing our achievements -->
    <!-- <div class="counters" style=" background-color: whitesmoke;">
        <div class="container-fluid">
            <h1 class="text-center">Our Success Rate</h1>
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-box text-center">
                        <i class="fas fa-briefcase fa-lg"></i>
                        <h1 class="counter ">500</h1>
                        <h5>Lines of Sale</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box text-center">
                        <i class="fas fa-tasks fa-lg"></i>
                        <h1 class="counter ">254</h1>
                        <h5>Listings For Rent</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box text-center">
                        <i class="fas fa-user-tie fa-lg"></i>
                        <h1 class="counter">510</h1>
                        <h5>Agents</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box text-center">
                        <i class="fas fa-users fa-lg"></i>
                        <h1 class="counter ">94</h1>
                        <h5>Brokers</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Counters end --> 



    <!-- agent Area start -->
    <div class="agent content-area-2 mt-5">
        <div class="container">
            <div class="main-title text-center">
                <h1>Meet Our Team</h1>
                <p>Our Young and energetic team which ensures you find you dream property</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="#">
                                <img src="Assets/Images/male-portrait-10618123.jpg" alt="avatar-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details mt-3">
                            <h5><a href="#" class="text-dark">Levis Ndago</a></h5>
                            <p>Web Developer</p>
                            <div class="d-flex">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter ml-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="instagram ml-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="linkedin ml-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="#">
                                <img src="Assets/Images/black-man-g86a6e6f97_1920.jpg" alt="avatar-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details mt-3">
                            <h5><a href="#" class="text-dark">Brayan Tuju</a></h5>
                            <p>Creative Director</p>
                            <div class="d-flex">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter ml-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="instagram ml-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="linkedin ml-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="#">
                                <img src="Assets/Images/black-women-g9d67d0fcf_1920.jpg" alt="avatar-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details mt-3">
                            <h5><a href="#" class="text-dark">Mercy Madam</a></h5>
                            <p>Office Manager</p>
                            <div class="d-flex">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter ml-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="instagram ml-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="linkedin ml-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="#">
                                <img src="Assets/Images/man.jpg" alt="avatar-11" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details mt-3">
                            <h5><a href="#" class="text-dark">Silvanus Oriama</a></h5>
                            <p>Marketing Manager</p>
                            <div class="d-flex ">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter ml-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="instagram ml-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="linkedin ml-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div >
    <!-- agent end --> 
   
    <!-- Our partners    -->
    <div class="mt-5 text-center">
        <h1>Our Partners</h1>

        <div class="owl-carousel owl-theme" id="owl-demo">
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/fort-awesome.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/galactic-republic.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/galactic-senate.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/slack-hash.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/deezer.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/critical-role.svg" alt="" class="item crsl-item"> </div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/fort-awesome-alt.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/sketch.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/houzz.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/atlassian.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/laravel.svg" alt="" class="item crsl-item"></div>
            <div><img src="Assets/fontawesome-free-5.15.4-web/svgs/brands/whmcs.svg" alt="" class="item crsl-item"></div>
        </div>
    </div>
    <!-- End of our patners -->
    <!-- Footer -->
    <footer class="bg-dark mt-1">
        <div class="container">

            <div class="row p-5">
                <div class="col-md-4 col-xs-12">
                    <h4 class="text-white font-italic">Company</h4>
                    <address class="font-italic">
                        <a href="#" class="text-white">About Us</a><br>
                        <a href="#" class="text-white">Contact</a><br>
                        <a href="#" class="text-white">Properties</a><br>
                    </address>
                </div>

                <div class="col-md-4 col-xs-12">
                    <h4 class="text-white font-italic">Contact Us</h4>
                    <address class="text-white font-italic">
                        Adress: 80100,Mombasa
                        Email:  Adambo@gmail.com
                        Mobile Number: 0713728748
                        <div class="icons">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-google-plus"></i>
                        </div>
                    </address>
                </div>
                <div class="col-md-4 col-xs-12"> 
                    <h4 class="text-white text-center">Subscribe to Our Newsletter</h4>                   
                    <form action="newsletter.php" method="post">                       
                        <label for="email" class="text-white">Email</label><br>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email"><br>
                        <input type="submit" value="Subscribe" name="btn_subscribe" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of footer -->
    <script src="Assets/js/jquery-3.6.0.js"></script>
    <script src="Assets/js/jquery.counterup.min.js"></script>
    <script src="Assets/js/jquery.waypoints.min.js"></script>
    <script src="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
    <!-- jquery code for carousel -->
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            stagePadding:50,
            loop:true,
            nav:true,
            margin:10,
            autoplay:500,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })
        });
    </script>
    <script>
            jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>