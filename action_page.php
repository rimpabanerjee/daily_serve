<?php 
 session_start(); 
 if(isset($_POST['read']))  
{     
    if (!isset($_SESSION['loggedin'])) 
        { 
                 header('Location: login.php'); 
            } 
        else
            {  
                 if (isset($_POST['read'])) 
                     { 
                         header('location:https://www.geeksforgeeks.org/about/');         
                         session_destroy(); 
                     } 
            }     
} 
?> 