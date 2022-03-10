<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- connection to CSS -->
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="properties.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li> 
                    <!-- Dynamic Log in/out button checking if logged in/out -->
                    <input type="button" name="logout_btn" value="<?php if(isset($_SESSION["user_id"])){echo "Log Out";}else{echo "Log In";}?>" class="btn btn-outline-primary" onclick="window.location.href='logout.php'">
                </ul>
                
            </div> <!-- Toggler/collapsibe Button -->
            
    </nav> 
    <!-- End of Navbar --> 
        
    <div class="bg-img banner">
        <div class="animated">
            <div class="bg-text text1">
                <h1 class="font-italic">WELCOME TO ADAMBO PROPERTIES</h1>  
            </div>
    
            <div class="bg-text text2">
                <h1 class="font-italic">FIND YOUR DREAM PROPERTY</h1>  
            </div>
        </div>  
    </div>
    
    <!-- Start of section -->
    <section class="container-fluid">
        <div class="container">
            <h1 class="text-center mt-5">Why Choose Us</h1>
            <div class="p-3">
                <h4 class="font-italic">Impeccable Customer Service</h4>
                <p>Adambo Properties is committed to providing impeccable service focused on the individual needs of every client.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Affordable Rates</h4>
                <p>One of the main aims here, indeed perhaps the main aim, is to offer quality properties at an affordable prices.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Honesty And Integrity</h4>
                <p>As a company we believe in Honesty and integrity, this brings trust between us and the clients and create better relationships for doing business.</p>
            </div>           
        </div>
        <div class="container p-3">
            <h1 class="mb-3 text-center">Featured Properties</h1>            
            <div class="row">
                <div class="card col-md-3 col-xs-6">
                    <img class="card-img-top image" src="Assets/Images/property-9.jpg" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Corporate Building</h5>
                      <p class="card-text">Location:Nyali</p>
                      <p class="card-text">Price: 50,000, 000</p>
                    </div>
                </div>
    
                <div class="card col-md-3 col-xs-6">
                    <img class="card-img-top image" src="Assets/Images/property-3.jpg" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Relaxing Appartment</h5>
                      <p class="card-text">Location:Ukunda</p>
                      <p class="card-text">Price:5,000,000</p>
                    </div>
                </div>
                
                <div class="card col-md-3 col-xs-6">
                    <img class="card-img-top image" src="Assets/Images/blog.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Buliding</h5>
                        <p class="card-text">Location:Malindi</p>
                        <p class="card-text">Price:30,000,000</p>
                    </div>
                </div>

                <div class="card col-md-3 col-xs-6">
                    <img class="card-img-top image" src="Assets/Images/property-1.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Villa</h5>
                        <p class="card-text">Location:Ukunda</p>
                        <p class="card-text">Price:20,000,000</p>
                    </div>
                </div>                
            </div>              
        </div>            
    </section><br><br>

    <!-- Testimonials  -->
    <div class="crsl container-fluid mb-5 overflow-hidden">
        <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
            <h3 class="text-center font-italic">TESTIMONIALS</h3>
            <div class="container-fluid">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
                </ul>
            
                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="Assets/Images/black-women-g9d67d0fcf_1920.jpg" alt="" class="float-left rounded-circle">
                    <div class="">
                        <h5 class="">Anna Smith</h5>
                        <p class="">"Staff at the company addressed my questions proffessionally and in a very timely manner. Working with them was a pleasure and would come with my recommendations."</p>
                    </div>      
                </div>
                <div class="carousel-item ">
                    <img src="Assets/Images/male-portrait-10618123.jpg" alt="" class="float-left rounded-circle">
                    <div class="">
                        <h5>Ngolo Kante</h5>
                        <p>"The staff were friendly, proffessional and approachable from the minute we called asking for a property. As first time sellers they made the process fast and simple, any questions we had they were happy ton answer. When the process was getting slowed.."</p>
                    </div>                    
                </div>
                <div class="carousel-item ">
                    <img src="Assets/Images/modern-african-businesswoman-working-tablet-computer-isolated-white-background-cut-out-48247299.jpg" alt="New York" class="float-left rounded-circle">
                    <div class="ml-2">
                        <h5>Mercy Madam</h5>
                        <p>"Just to say thanks to you and all the staff for your efforts. We are delighted with the sale price. It was a pleasure dealing with you and recommend your company to family and friends."</p>
                    </div>                   
                </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- Contact us section -->
    <div class="container mt-5 contact-form">
        <h3 class="text-center">Contact Us</h3>
        <form action="contactHandler.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" class="form-control" placeholder="Enter Name" name="name"><br>

            <label for="email">Email:</label><br>
            <input type="email" class="form-control" placeholder="Enter Email" name="email"><br>

            <label for="subject">Subject:</label><br>
            <input type="text" class="form-control" placeholder="Subject" name="subject"><br>

            <label for="message">Message</label><br>
            <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea><br>
            
            <input type="submit" value="Leave Message" class="btn btn-outline-primary btn-block">
        </form>
    </div>
    <!-- Start of footer -->
    <footer class="bg-dark mt-5">
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
</body>
</html>