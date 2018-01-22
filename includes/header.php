<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");

//session_destroy(); MANUAL LOGOUT UNTIL IMPLEMENTATION OF LOGOUT BUTTON

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Welcome to LiveMusic!</title>
</head>

<body>
	
    <div id="mainContainer">
    
        
        <div id="topContainer">
        
<!--        Houses the navigation and the main content-->
 
            <?php  include("includes/navBarContainer.php"); ?>
            
            <div id="mainViewContainer">
                
                
                <div id="mainContent">
                