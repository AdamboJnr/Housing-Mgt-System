<?php
$host="localhost";
$user="root";
$password="";
$db_name="housing_management_system";
//connection to database
$connection=mysqli_connect($host,$user,$password,$db_name);

if(!isset($connection)){
    die("Database connection failed");
}