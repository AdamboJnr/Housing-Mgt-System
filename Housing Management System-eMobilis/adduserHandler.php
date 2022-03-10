<?php
//check if button was clicked
if(isset($_POST["btn_update"])){
    //start fetching data
    $userId=$_POST["user_id"];
    $name=$_POST["client_name"];
    $idNumber=$_POST["id_number"];
    $phoneNumber=$_POST["phone_number"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $residence=$_POST["residence"];
    $userType=$_POST["user_type"];
    $cPassword=$_POST["client_pass"];
    //connection to the database
    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `Users`(`user_id`, `username`, `user_password`, `gender`, `email`, `contact`, `residence`, `user_type`, `id_number`) VALUES (null,'$name','$cPassword','$gender','$email','$phoneNumber','$residence','$userType','$idNumber')";
    //save to database
    $save=mysqli_query($connection,$insertQuery);
    //confirm registration
    if(isset($save)){
        header(header:"location:users.php");
    }else{
        echo "Update not succesful";
    }
}