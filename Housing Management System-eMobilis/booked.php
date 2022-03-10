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

                    <li class="active">
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


        <h1 class="text-info text-center">Booked Properties</h1>        
          <table class="table table-dark table-hover table-responsive mt-2">
              <!-- Table for displaying all booked properties  -->
              <tr>
                <th>Booked Id</th>
                <th>User Id</th>
                <th>User Name</th>
                <th>Property Id</th>
                <th>Property Amount</th>
                <th>Date Booked</th>
                <th>Confirm</th>
                <th>Reject</th>
              </tr>
              <?php
                //connect to db
                require_once "connection.php";
                //prepare select query
                $selectQuery="SELECT * FROM `booked_properties` WHERE 1";
                //grab voters
                $fetched=mysqli_query($connection,$selectQuery);
                //use loop to print
                foreach($fetched as $fetch){
                  $propertyId=$fetch['p_id'];
                  $bookId=$fetch['book_id'];
                  $clientName=$fetch['username'];
                  $userId=$fetch['user_id'];
                  $propertyAmount=$fetch['p_amount'];
                  $dateBooked=$fetch['date_booked'];
                  echo "<tr>
                        <td>$bookId</td>
                        <td>$userId</td>
                        <td>$clientName</td>
                        <td>$propertyId</td>
                        <td>$propertyAmount</td>
                        <td>$dateBooked</td>
                        <td><a name='btn_del' class='btn btn-primary' href='confirmbooking.php?p_id=$propertyId'>Confirm</a></td>
                        <td><a name='btn_del' class='btn btn-danger' href='rejectbooking.php?p_id=$propertyId'>Reject</a></td>
                        </tr>";                
                    }
                ?>
        </table> 
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