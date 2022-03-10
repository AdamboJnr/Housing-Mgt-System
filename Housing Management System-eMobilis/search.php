<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="properties.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <input type="button" value="<?php if(isset($_SESSION["user_id"])){echo "Log Out";}else{echo "Log In";}?>" class="btn btn-outline-primary" onclick="window.location.href='logout.php'">
                </ul>
            </div> <!-- Toggler/collapsibe Button -->        
    </nav> 
   
    <div class="container">
        <?php
            if(isset($_POST["search_btn"])){
                //fetch data
                $propertyType=$_POST["p_type"];
                $startAmount=$_POST["from"];
                $location=$_POST["location"];
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `properties` WHERE loacation='$location' AND p_amount>='$startAmount' AND property_type='$propertyType' ";
                //fetch from db
                $fetch=mysqli_query($connection,$selectQuery);
                //check if any property was fetched
                $count=mysqli_num_rows($fetch);
        
                if($count>0){
                    while($prop=mysqli_fetch_assoc($fetch)){
                        $propertyId=$prop['property_id'];
                        $propertyImage=$prop['property_image_name'];
                        $propertyOwner=$prop['owner_name'];
                        $propertyLocation=$prop['loacation'];
                        $propertyAmount=$prop['p_amount'];
                        $propertyKitchens=$prop['P_no_kitchen'];
                        $propertyBedrooms=$prop['p_no_bedrooms'];
                        echo "
                            <h1 class='text-center'>Properties Found</h1>
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
                                    <p><a href='viewProperty.php?p_id=$propertyId&p_image=$propertyImage&p_owner=$propertyOwner&p_location=$propertyLocation&p_kitchen=$propertyKitchens&p_amount=$propertyAmount&p_bedrooms=$propertyBedrooms'>View Details</a></p>
                                </div>
                            </div>                     
                            ";    
                    }                   
                }else{
                    echo "<h1 class='text-center'>No Properties Found</h1>";
                }
            }   
        ?>
    </div>

</body>
</html>