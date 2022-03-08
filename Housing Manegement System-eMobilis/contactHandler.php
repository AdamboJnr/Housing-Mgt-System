<?php
//check whether button has been clicked
if(isset($_POST["snd_message"])){
    //fetching data
    $contactName=$_POST["name"];
    $contactEmail=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $postedTime=date("Y-m-d h:i:sa");
    //connect to datbase
    require_once "connection.php";
    //prepare query
    $contactQuery="INSERT INTO `contact_us`(`id`, `username`, `email`, `subject`, `message`, `time_posted`) VALUES (null,'$contactName','$contactEmail','$subject','$message','$postedTime')";
    //post into the database
    $postMessage=mysqli_query($connection,$contactQuery);
    //check if message was posted
    if(isset($postMessage)){
        header(header:"location:contact.php");
    }else{
        echo "Message was not posted succesfully";
    }
}