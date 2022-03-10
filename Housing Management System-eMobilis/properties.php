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
                    <li class="nav-item active">
                        <a class="nav-link" href="properties.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <!-- Dynamic log in/out button checking if logged in/out -->
                    <input type="button" value="<?php if(isset($_SESSION["user_id"])){echo "Log Out";}else{echo "Log In";}?>" class="btn btn-outline-primary" onclick="window.location.href='logout.php'">               
                </ul>
            </div> 
    </nav> 
    <!-- End of Navbar --> 
    <!-- Start of banner -->
    <div class="bg-img body">
        <div class="b-text">
            <h4><a href="index.html" class="text-white">Home</a>/Property</p></h4>
            <h1 class="text-center about">PROPERTY GRID</h1>                  
        </div>
    </div>
    <!-- End of banner -->


    <section class="container mt-3">

        <h1 class=" text-center ">Villas</h1>
        <div class="row">            
            <?php
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `properties` WHERE status='Available' AND property_type='Villa' ";
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
                        <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                            <div>
                            <div class='property-photo'>
                            <a href='#'>
                                <img src='images/".$prop['property_image_name']."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                            </div>
                            <div class='agent-details mt-3'>
                                <h5>".$prop['owner_name']."</h5>
                                <p><span class='font-weight-bold font-italic'>location:</span> ".$prop['loacation']." <span class='font-italic font-weight-bold ml-3'>Price:</span> Ksh ".$prop['p_amount']."  </p>
                               
                                <div class='d-flex'>
                                    <i class='fas fa-coffee'> : ".$prop['P_no_kitchen']."</i>
                                    <i class='fas fa-bed ml-2'> : ".$prop['p_no_bedrooms']."</i>
                                </div>
                            </div><br>
                            <p><a href='viewProperty.php?p_id=$propertyId&p_type=$propertyType&p_image=$propertyImage&p_owner=$propertyOwner&p_location=$propertyLocation&p_kitchen=$propertyKitchens&p_amount=$propertyAmount&p_bedrooms=$propertyBedrooms'>View Details</a></p>
                        </div>
                    </div>                     
                    ";    
                }
            ?>    
        </div>
        <!-- End First Row -->
        <h1 class=" text-center ">Appartments</h1>
        <div class="row">            
        <?php
            //connect to db
            require_once "connection.php";
            //prepare query
            $selectQuery="SELECT * FROM `properties` WHERE status='Available' AND property_type='Appartment' ";
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
                    <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                        <div>
                        <div class='property-photo'>
                            <a href='#'>
                                <img src='images/".$prop['property_image_name']."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                        </div>
                        <div class='agent-details mt-3'>
                            <h5>".$prop['owner_name']."</h5>
                            <p><span class='font-weight-bold font-italic'>location:</span> ".$prop['loacation']." <span class='font-italic font-weight-bold ml-3'>Price:</span> Ksh ".$prop['p_amount']."  </p>
                               
                            <div class='d-flex'>
                                <i class='fas fa-coffee'> : ".$prop['P_no_kitchen']."</i>
                                <i class='fas fa-bed ml-2'> : ".$prop['p_no_bedrooms']."</i>
                            </div>
                            </div><br>
                            <p><a href='viewProperty.php?p_id=$propertyId&p_type=$propertyType&p_image=$propertyImage&p_owner=$propertyOwner&p_location=$propertyLocation&p_kitchen=$propertyKitchens&p_amount=$propertyAmount&p_bedrooms=$propertyBedrooms'>View Details</a></p>
                        </div>
                    </div>                     
                    ";    
            }
            ?>    
        </div>
        <!-- End of Second Row        -->
        <h1 class=" text-center ">Building</h1>
        <div class="row">            
        <?php
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `properties` WHERE status='Available' AND property_type='Building' ";
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
                        <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                            <div>
                            <div class='property-photo'>
                            <a href='#'>
                                <img src='images/".$prop['property_image_name']."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                            </div>
                            <div class='agent-details mt-3'>
                                <h5>".$prop['owner_name']."</h5>
                                <p><span class='font-weight-bold font-italic'>location:</span> ".$prop['loacation']." <span class='font-italic font-weight-bold ml-3'>Price:</span> Ksh ".$prop['p_amount']."  </p>
                               
                                <div class='d-flex'>
                                    <i class='fas fa-coffee'> : ".$prop['P_no_kitchen']."</i>
                                    <i class='fas fa-bed ml-2'> : ".$prop['p_no_bedrooms']."</i>
                                </div>
                            </div><br>
                            <p><a href='viewProperty.php?p_id=$propertyId&p_type=$propertyType&p_image=$propertyImage&p_owner=$propertyOwner&p_location=$propertyLocation&p_kitchen=$propertyKitchens&p_amount=$propertyAmount&p_bedrooms=$propertyBedrooms'>View Details</a></p>
                        </div>
                    </div>                     
                    ";    
                }
            ?>    
        </div>
        <!-- End of Third row -->
        <!-- button opens a modal form for searching property -->
        <button type="button" class="btn btn-primary btn-block mb-4" data-toggle="modal" data-target="#myModal">
            Search Property
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Search Property</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                 
                <form action="search.php" method="post">
   
                    <select name="p_type" id="" class="form-control">
                        <option value="">Property Type</option>
                        <option value="Villa">Villa</option>
                        <option value="Appartment">Appartment</option>
                        <option value="Building">Building</option>
                        <option value="bungalow">Bungalow</option>
                    </select><br>

                    <label for="">Starting Amount:</label><br>

                    <input type="number" name="from" id="" class="form-control" placeholder="Amount"><br>

                    <input type="text" name="location" id="" placeholder="Location" class="form-control"><br>

                    <input type="submit" name="search_btn" value="Search" class="btn btn-primary btn-block" data-dismiss="">
                </form>        
                
            </div>
            </div>
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