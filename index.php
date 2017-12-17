<?php
include("includes/config.php");


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
	
    <div id="nowPlayingBarContainer">
        
        <div id="nowPlayingBar">
        
            <div id="nowPlayingLeft">
            
                
                <div class="content">
                
                    <span class="albumLink">
                        
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Minutes_to_Midnight_cover.jpg/220px-Minutes_to_Midnight_cover.jpg" class="albumArtwork">
                        
                    </span>
                
                    <div class="trackInfo">
                    
                        <span class="trackName">
                        
                             <span>Leave out all the rest</span>
                        
                        </span>
                       
                        
                        <span class="artistName">
                        
                        <span>Linkin Park</span>
                            
                            
                        </span>
                            
                    </div>
                    
                    
                    
                
                
                </div>
                
                
                
            
            </div>
               
            
            
            
            
            
            
                
            <div id="nowPlayingCenter">
            
                
                <div class="content playerControls">
                
                    
                    <div class="buttons">
                    
                      <button class="controlButton shuffle"  title="Shuffle Button">  
                        <img src="assets/images/icons/shuffle.png" alt="Shuffle Button">                         
                      </button>
                    
                         <button class="controlButton previous"  title="Previous Button">  
                        <img src="assets/images/icons/previous.png" alt="Previous Button">                         
                      </button>
                        
                         <button class="controlButton play"  title="Play Button">  
                        <img src="assets/images/icons/play.png" alt="Play Button">                         
                      </button>
                        
                        <button class="controlButton pause"  title="Pause Button" style="display: none">  
                        <img src="assets/images/icons/pause.png" alt="Pause Button">                         
                      </button>
                        
                         <button class="controlButton next"  title="Next Button">  
                        <img src="assets/images/icons/next.png" alt="Next Button">                         
                      </button>
                        
                         <button class="controlButton repeat"  title="Repeat Button">  
                        <img src="assets/images/icons/repeat.png" alt="Repeat Button">                         
                      </button>
                    </div>
                    
                    
                    
                    <div class="playbackBar">
                    
                    
                        <span class="progressTime current">0.00</span>
                        
                        
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <span class="progressTime remaining">0.00</span>
                    
                    
                    </div>
                    
                    
                    
                
                </div>
                
            
            </div>
            
            
            <div id="nowPlayingRight">
            
                <div class="volumeBar">
                
                    <button class="controlButton volume" title="Volume Button">
                        <img src="assets/images/icons/volume.png"alt="Volume">
<!--
                        
                         <img src="assets/images/icons/volume-mute.png"alt="Volume" style="display:none">
-->
                        
                    </button>
                    
                    
                      <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                
                </div>
                
                
                
                
                
                
                
                
            
            </div>
            
        
            
        
        </div>
        
    
    </div>
    
    
    
    
    
    
    
    
    
</body>

</html>