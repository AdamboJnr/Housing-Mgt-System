<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/custom.css"> 
    <!-- Connection to FontAwesomes-->
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
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
            <a class="navbar-brand" href="#"> <i class="fa fa-home fa-lg"></i> <span class="font-italic">Adambo Properties</span>  </a>
    </nav> 
    <!-- End of Navbar --> 
    <section class="container">
        
        <form action="loginHandler.php" method="post">
                <h3 class="text-center">Login</h3>

                <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required><br>

                <input type="password" name="client_pass" class="form-control" placeholder="Enter Your Password Here" required><br>
                
                <input type="submit" value="Login" name="btn_login" class="btn btn-outline-primary btn-block"><br>
                <p class="text-center">Don't Have an Account? <a href="register.php" class="btn btn-outline-secondary ml-1">Register</a></p>
        </form>
    </section>   
</body>
</html>