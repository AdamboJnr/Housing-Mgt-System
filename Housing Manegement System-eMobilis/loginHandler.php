<?php
session_start();
//check if login button was clicked
if(isset($_POST["btn_login"])){
    //fetch data
    $email=$_POST["email"];
    $client_password=$_POST["client_pass"];

    //connect to database
    require_once "connection.php";
    //prepare Query
    $loginQuery="SELECT * FROM `Users` WHERE email='$email' AND user_password='$client_password' ";
    //fetch the user details
    $user=mysqli_query($connection,$loginQuery);

    // check if credentials matched any users
    $count=mysqli_num_rows($user);

    if($count>0){
        // 
        foreach($user as $client){
            $userType=$client["user_type"];
            $userId=$client["user_id"];
            $userName=$client["username"];
            $userType=$client["user_type"];
        }
        //Assigning Sessions
        $_SESSION["user_id"]= $userId;
        $_SESSION["username"]=$userName;
        $_SESSION["email"]=$email;
        $_SESSION["user_type"]=$userType;

        //Checking type of user to land on specific pages
        if($userType=="User"){
            header(header:"location:index.php");
            
        }elseif($userType=="Admin"){
            header(header:"location:dashboard.php");
            
        } 
    }else{
        header(header:"location:login.php");
    }
}