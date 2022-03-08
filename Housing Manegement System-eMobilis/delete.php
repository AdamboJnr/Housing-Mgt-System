<?php
//check if link has been clicked
if (isset($_GET["u_id"])){
    //get the id
    $userId=$_GET["u_id"];
    //connect to database
    require_once "connection.php";
    // prepare delete query
    $deleteQuery="DELETE FROM `Users` WHERE user_id='$userId'";
    //delete the record from db
    $delete=mysqli_query($connection,$deleteQuery);
    //check if record has been deleted
    if (isset($delete)){
        header(header:"location:users.php");
    }else{
        die("Record Deletion Failed");
    }
}