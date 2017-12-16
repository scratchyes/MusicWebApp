$(document).ready(function(){
    
//    to keep one form visible when site loaded
//    $("#registerForm").show();
//    $("#loginForm").hide();
//    
//    
    
    
    
    
    
   $("#hideLogin").click(function(){
       
       $("#loginForm").hide();
       $("#registerForm").show();
      
       
       
       
   });
    
    
    $("#hideRegister").click(function(){
        
        $("#loginForm").show();
        $("#registerForm").hide();
        
        
        
    });
    
    
    
    
    
});