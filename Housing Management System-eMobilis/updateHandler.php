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
    $updateQuery="UPDATE `Users` SET `user_id`='$userId',`username`='$name',`user_password`='$cPassword',`gender`='$gender',`email`='$email',`contact`='$phoneNumber',`residence`='$residence',`user_type`='$userType',`id_number`='$idNumber' WHERE user_id='$userId'";
    //save to database
    $save=mysqli_query($connection,$updateQuery);
    //confirm registration
    if(isset($save)){
        header(header:"location:users.php");
    }else{
        echo "Update not succesful";
    }
}