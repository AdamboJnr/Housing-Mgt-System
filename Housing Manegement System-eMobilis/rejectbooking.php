<?php
//check if link was clicked
if(isset($_GET["p_id"])){
    $propertyId=$_GET["p_id"];
    //connect to db
    require_once "connection.php";
    //prepare query
    //$getQuery="SELECT * FROM `properties` WHERE property_id='$propertyId' ";
    $updateQuery="UPDATE `properties` SET `status` = 'Available' WHERE `properties`.`property_id` = $propertyId ";
    
    $update=mysqli_query($connection,$updateQuery);

    //prepare query
    $deleteQuery="DELETE FROM `booked_properties` WHERE p_id='$propertyId'";

    $delete=mysqli_query($connection,$deleteQuery);

    if(isset($update)){
        header(header:"location:booked.php");
    }else{
        echo "Could not cancel property booking";
    }
}