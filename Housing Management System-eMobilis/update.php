<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header(header:"location:login.php");
}else{
    if(isset($_GET["u_id"])){
        $getUserId=$_GET["u_id"];
        $getUserName=$_GET["u_name"];
        $getPassword=$_GET["u_pass"];
        $getGender=$_GET["u_gender"];
        $getEmail=$_GET["u_email"];
        $getContact=$_GET["u_contact"];
        $getResidence=$_GET["u_residence"];
        $getUserType=$_GET["u_type"];
        $getIdNumber=$_GET["u_id_number"];
    }else{
        header(header:"location:users.php");
    }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
  <!-- CSS Files -->
  <link href="Assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="Assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Adambo Properties
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="dashboard.php">
              <p>Dashboard</p>
            </a>
          </li>



          <li class="">
                <a href="#propertiesSubMenu" data-toggle="collapse" class="dropdown-toggle" aria-expanded="false" class="">Properties</a>
                <ul class="collpse lisst-unstyled" id="propertiesSubMenu">
                    <li>
                        <a href="addProperty.php">Add Property</a>
                    </li>

                    <li>
                        <a href="booked.php">Booked Properties</a>
                    </li>                    

                    <li>
                        <a href="allproperties.php">All Properties</a>
                    </li>                        
                </ul>
            </li>          

          <li>
            <a href="users.php">
              <p>Users</p>
            </a>
          </li>

          <li>
            <a href="login.php">
              <p>LogOut</p>
            </a>
          </li> 

        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
            <a class="navbar-brand" href="javascript:;">Admin Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content bg-light">

        <form action="updateHandler.php" method="post">
                <h3 class="text-center">Update User</h3>

                <input type="hidden" name="user_id" class="form-control" value="<?php echo $getUserId;?>" placeholder=""><br>

                <input type="text" name="client_name" class="form-control" value="<?php echo $getUserName;?>" placeholder="Enter Your Names" required><br>

                <input type="number" name="id_number" class="form-control" value="<?php echo $getIdNumber;?>" placeholder="ID Number" required><br>

                <input type="number" name="phone_number" class="form-control" value="<?php echo $getContact;?>" placeholder="Phone Number" required><br>

                <select class="form-control" name="gender" id="" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>

                <input type="text" name="email" class="form-control" value="<?php echo $getEmail; ?>" placeholder="Enter Your Email" required><br>

                <input type="password" name="client_pass" class="form-control" value="<?php echo $getPassword; ?>" placeholder="Enter Your Password Here" required><br>
                
                <select class="form-control" name="user_type" id="" required>
                    <option value="">Choose Type of User</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select><br>                

                <input type="text" name="residence" class="form-control" value="<?php echo $getResidence; ?>" placeholder="Residence" required><br>
                
                <input type="submit" value="Update" name="btn_update" class="btn btn-outline-primary btn-block"><br>
            </form>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="Assets/js/core/jquery.min.js"></script>
  <script src="Assets/js/core/popper.min.js"></script>
  <script src="Assets/js/core/bootstrap.min.js"></script>
  <script src="Assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="Assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>
</html>