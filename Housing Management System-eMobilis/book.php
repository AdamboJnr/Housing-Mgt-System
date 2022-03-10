<?php
session_start();
if(!isset($_SESSION["user_id"])){
    //Redirect to login page
    header(header:"location:login.php");
}else{
    //check if button was clicked
    if(isset($_GET["p_id"])){
        $propertyId=$_GET["p_id"];
        //connect to database
        require_once "connection.php";
        //prepare query
        $fetchQuery="SELECT * FROM `properties` WHERE property_id='$propertyId' ";
        //fetch
        $fetched=mysqli_query($connection,$fetchQuery);
        foreach($fetched as $fetch){
            $propertyId=$fetch['property_id'];
            $propertyImage=$fetch['property_image_name'];
            $propertyOwner=$fetch['owner_name'];
            $propertyLocation=$fetch['loacation'];
            $propertyAmount=$fetch['p_amount'];
            $propertyKitchens=$fetch['P_no_kitchen'];
            $propertyBedrooms=$fetch['p_no_bedrooms']; 
            $propertyOwnerContact=$fetch['owner_contact'];
            $propertyType=$fetch['property_type'];
                
        }
        $status="Booked";
        //update query
        $updateQuery="UPDATE `properties` SET `property_id`='$propertyId',`owner_name`='$propertyOwner',`owner_contact`='$propertyOwnerContact',`property_image_name`='$propertyImage',`status`='$status',`property_type`='$propertyType',`loacation`='$propertyLocation',`p_amount`='$propertyAmount',`p_no_bedrooms`='$propertyBedrooms',`P_no_kitchen`='$propertyKitchens' WHERE property_id='$propertyId' ";
        //update
        $update=mysqli_query($connection,$updateQuery);
        if(isset($update)){
            $userId=$_SESSION["user_id"];
            $userName=$_SESSION["username"];
            $dateBooked=date("Y-m-d h:i:sa");
            //Save booked property
            $insertQuery="INSERT INTO `booked_properties`(`book_id`, `user_id`, `username`, `p_id`, `p_amount`, `date_booked`) VALUES (null,'$userId','$userName','$propertyId','$propertyAmount','$dateBooked')";
            $insert=mysqli_query($connection,$insertQuery);
            if(isset($insert)){
                header(header:"location:properties.php");
            }else{
                echo "Property Not Booked!";
            }
        }else{
            echo "Record not updated";
        }

    }
}
