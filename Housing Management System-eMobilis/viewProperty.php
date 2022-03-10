<?php
session_start();
// if(!isset($_SESSION["user_id"])){
//     //Redirect to login page
//     header(header:"location:login.php");
// }else{
    //check if link was clicked
    if(isset($_GET["p_id"])){
        $propertyId=$_GET["p_id"];
        $propertyImage=$_GET["p_image"];
        $propertyOwner=$_GET["p_owner"];
        $propertyLocation=$_GET["p_location"];
        $propertyKitchens=$_GET["p_kitchen"];
        $propertyAmount=$_GET["p_amount"];
        $propertyBedrooms=$_GET["p_bedrooms"];
    }else{
        //Redirect back
        header(header:"location:properties.php");
    }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Property</title>
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
            <a class="navbar-brand" href="index.php"> <i class="fa fa-home fa-lg"></i> <span class="font-italic">Adambo Properties</span> </a>
                            
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
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="properties.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <input type="button" value="<?php if(isset($_SESSION["user_id"])){echo "Log Out";}else{echo "Log In";}?>" class="btn btn-outline-primary" onclick="window.location.href='logout.php'">               
                </ul>
            </div>
        </div>     
    </nav> 
    <!-- End of Navbar --> 
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center font-italic">View Property</h1>
                <h5><span class="font-italic font-weight-bold">Owner :</span><?php echo "$propertyOwner"; ?></h5>
                <h5><span class="font-italic font-weight-bold">Location :</span><?php echo "$propertyLocation";?></h5>
                <h5><span class="font-italic font-weight-bold">Amount :</span><?php echo "$propertyAmount";?></h5>
                <img src="images/<?php echo "$propertyImage";?>" alt="" style="height:400px; width:800px;" class="img-fluid rounded"> 
                <h5 class="mt-3 font-italic">Property Description</h5>
                <p>Did you play off any hot home styles this year to improve your listingâ€™s appearance? These were some of the top home design fads.</p>
                
                <h5 class="mt-2 font-italic">Features</h5>
                <div class="row">
                    <div class="col-md-4">
                        <p class="small"><i class="fas fa-wind"></i> Air conditioning</p>
                        <p class="small"><i class="fas fa-swimming-pool"></i> Swimming Pool</p>
                        <p class="small"><i class="fas fa-wifi"></i> Wifi</p>
                        <p class="small"><i class="fas fa-bed"></i> Double Bed</p>
                    </div>

                    <div class="col-md-4">
                        <p class="small"><i class="fas fa-phone"></i> Telephone</p>
                        <p class="small"><i class="fas fa-car-alt"></i> Parking</p>
                        <p class="small"><i class="fas fa-tv"></i> TV</p>
                        <p class="small"><i class="fas fa-music"></i> Home Theater</p>
                    </div> 
                    
                    <div class="col-md-4">
                        <p class="small"><i class="fas fa-bell"></i> Alarm</p>
                        <p class="small"><i class="fas fa-lock"></i> Security</p>
                        <p class="small"><i class="fas fa-dumbbell"></i> Gym</p>
                        <p class="small"><i class="fas fa-bath"></i> Shower</p>
                    </div> 
                </div> 
                <!-- Button to book property -->
                <a href="book.php?p_id=<?php echo  $propertyId; ?>" class="btn btn-outline-primary btn-block">Book Property</a>
            </div>
            <div class="col-md-4 mt-5">
                <h3>Related Properties</h3>
                <?php
                    //fetch value
                    $propertyType=$_GET['p_type'];
                    //connect to database
                    require_once "connection.php";
                    //prepare query
                    $selectQuery="SELECT * FROM `properties` WHERE property_type='$propertyType' AND status='Available'" ;
                    //fetch from db
                    $fetch=mysqli_query($connection,$selectQuery);

                    //fetch the properties
                    $properties=mysqli_query($connection,$selectQuery);
                    while($prop=mysqli_fetch_assoc($properties)){
                        $propertyId=$prop['property_id'];
                        $propertyImage=$prop['property_image_name'];
                        $propertyOwner=$prop['owner_name'];
                        $propertyLocation=$prop['loacation'];
                        $propertyAmount=$prop['p_amount'];
                        $propertyKitchens=$prop['P_no_kitchen'];
                        $propertyBedrooms=$prop['p_no_bedrooms'];
                        $propertyType=$prop['property_type'];
                        echo "
                            <div class='ml-2'>
                                <img src='images/$propertyImage'  class='rounded p-2' style='float: left; width: 100px; height: 100px;'>
                                <h6 class='font-weight-bold'>$propertyOwner</h6>
                                <p class='font-italic'> $propertyLocation <br> Ksh $propertyAmount</p>
                            </div><br>                            
                        ";
                    }
                ?>
                <h3 class="text-center">Follow Us</h3>
                <div class="d-flex justify-content-center">
                        <i class="fab fa-twitter fa-lg "></i>
                        <i class="fab fa-facebook-f fa-lg ml-1"></i>
                        <i class="fab fa-linkedin fa-lg ml-1"></i>
                        <i class="fab fa-google-plus fa-lg ml-1"></i>                    
                </div>
            </div>
        </div>
        <!-- Comment Section -->
        <div class="container mt-5">
            <h2 class="text-center font-italic">Comment Section</h2>
            <div>
                <img src="Assets/Images/avatar-13.jpg" alt="" class="rounded-circle p-2" style="float: left; width: 100px; height: 100px;"> 
                <h4 class="mt-2">John Kenga</h4>
                <p> "So priviledged to work with this company offers the best quality services. I would recommend working with them to anyone"
                <div class="d-flex justify-content-end mr-5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></p><br>
            </div>

            <div>
                <img src="Assets/Images/avatar-13.jpg" alt="" class="rounded-circle p-2" style="float: left; width: 100px; height: 100px;"> 
                <h4 class="">Jane Ndirangu</h4>
                <p>"After going through the hassle of trying a property I found this property company and my life was made easier"
                <div class="d-flex justify-content-end mr-5 ">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div></p><br>
            </div>            
        </div>
    </section>

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
</body>
</html>