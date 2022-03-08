<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header(header:"location:login.php");
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
        <a href="#" class="simple-text logo-normal">
          Adambo Properties
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="">
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

          <li class="active">
            <a href="users.php">
              <p>Users</p>
            </a>
          </li>

          <li>
            <a href="messages.php">
              <p>Contacted Messages</p>
            </a>
          </li>

          <li>
            <a href="index.php">
              <p>Move  Home Page</p>
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


     <h1 class="text-info text-center">All Users</h1>        
        <table class="table table-dark table-hover table-responsive mt-2">
            <tr>
                <th>UserName</th>
                <th>Id Number</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Residence</th>
                <th>User Type</th>
                <th>User Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
                //connect to db
                require_once "connection.php";
                //prepare select query
                $selectQuery="SELECT * FROM `Users` WHERE 1";
                //grab voters
                $fetched=mysqli_query($connection,$selectQuery);
                //use loop to print
                foreach($fetched as $fetch){
                    $userId=$fetch['user_id'];
                    $userName=$fetch['username'];
                    $userPassword=$fetch['user_password'];
                    $gender=$fetch['gender'];
                    $email=$fetch['email'];
                    $contact=$fetch['contact'];
                    $residence=$fetch['residence']; 
                    $userType=$fetch['user_type'];
                    $idNumber=$fetch['id_number'];
                    echo "<tr>
                    <td>$userName</td>
                    <td>$idNumber</td>
                    <td>$contact</td>
                    <td>$gender</td>
                    <td>$residence</td>
                    <td>$userType</td>
                    <td>$userPassword</td>
                    <td><a name='btn_del' class='btn btn-danger' href='delete.php?u_id=$userId'>Delete</a></td>
                    <td><a name='btn_update' class='btn btn-primary' href='update.php?u_id=$userId&u_name=$userName&u_pass=$userPassword&u_gender=$gender&u_email=$email&u_contact=$contact&u_residence=$residence&u_type=$userType&u_id_number=$idNumber'>Update</a></td>
                    </tr>";                
                }
            ?>
        </table>
        <a href="adduser.php" class="btn btn-primary" >Add User</a>
        <a href="newletter.php" class="btn btn-outline-secondary" >Newsletter Members</a>
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