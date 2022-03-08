<?php
//check if link was clicked
if(isset($_GET["p_id"])){
    $propertyId=$_GET["p_id"];
    //connect to db
    require_once "connection.php";

    //prepare query
    $deleteQuery="DELETE FROM `booked_properties` WHERE p_id='$propertyId'";
    //connect to database
    $delete=mysqli_query($connection,$deleteQuery);
    //check if deleted
    if(isset($delete)){
        header(header:"location:booked.php");
    }else{
        echo "Booking not confirmed";
    }
}