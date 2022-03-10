<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    </nav> 
    <!-- End of Navbar --> 
    <section class="container">
        
        <form action="registerHandler.php" method="post">
                <h3 class="text-center">Register Here</h3>

                <input type="text" name="client_name" class="form-control" placeholder="Enter Your Names" required><br>

                <input type="number" name="id_number" class="form-control" placeholder="ID Number" required><br>

                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number" required><br>

                <select class="form-control" name="gender" id="" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>

                <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required><br>

                <input type="password" name="client_pass" class="form-control" placeholder="Enter Your Password Here" required><br>               

                <input type="text" name="residence" class="form-control" placeholder="Residence" required><br>
                
                <input type="submit" value="Register" name="btn_register" class="btn btn-outline-primary btn-block"><br>
                <p class="text-center">Already Have an Account? <a href="login.php" class="btn btn-outline-secondary ml-1">Login</a></p>
        </form>
    </section>   
</body>
</html>