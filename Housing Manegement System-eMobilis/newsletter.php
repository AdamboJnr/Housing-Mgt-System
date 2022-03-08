<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header(header:"location:login.php");
}else{
    //check if button was clicked
    if(isset($_POST["btn_subscribe"])){
        $userName=$_SESSION["username"];
        $email=$_POST["email"];
        //connecting to db
        require_once "connection.php";
        //prepare query
        $insertQuery="INSERT INTO `newsletter`(`id`, `username`, `email`) VALUES (null,'$userName','$email')";
        //insert to table
        $save=mysqli_query($connection,$insertQuery);
        //check if saved
        if(isset($save)){
            echo "Succesfuly subcribed to our newsletter";
        }else{
            echo "Failed to subscribe to our newsletter";
        }
    }
}
