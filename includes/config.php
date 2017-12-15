<?php

ob_start(); // to start ouput buffering data to database
session_start(); // to start a session


$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root", "", "musicwebsite");

if(mysqli_connect_errno()){
    
    echo "Failed to connect: " . mysqli_connect_errno();
    
    
}



?>
