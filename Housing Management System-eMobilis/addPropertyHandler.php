<?php
//check if button was clicked
if(isset($_POST["btn_add"])){
    //pick the details
    $ownerName=$_POST["owner_name"];
    $ownerContact=$_POST["owner_phone_number"];
    $propertyType=$_POST["p_type"];
    $propertyImage=$_FILES["p_image"]["name"];
    $tempImgName=$_FILES["p_image"]["tmp_name"];
    $location=$_POST["p_location"];
    $propertyAmount=$_POST["p_amount"];
    $propertyBedrooms=$_POST["p_bedrooms"];
    $propertyKitchens=$_POST["p_kitchens"];
    $status="Available";
    //folder where uploaded images would be stored
    $folder="images/".$propertyImage;
    //connect to database
    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `properties`(`property_id`, `owner_name`, `owner_contact`, `property_image_name`, `status`, `property_type`, `loacation`, `p_amount`, `p_no_bedrooms`, `P_no_kitchen`) VALUES (null,'$ownerName','$ownerContact','$propertyImage','$status','$propertyType','$location','$propertyAmount','$propertyBedrooms','$propertyKitchens')";
    //save to db
    $save=mysqli_query($connection,$insertQuery);
    //function to upload image to folder
    if(move_uploaded_file($tempImgName,$folder)){
        if(isset($save)){
            // echo "Property upload succesfull";
            header(header:"location:properties.php");
        }else{
            echo "Property upload not succesfull";
        }
    }else{
        echo "Failed to upload image";
    }
}