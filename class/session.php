<?php 
   
    session_start();
        
    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        
        $_SESSION['status'] ='invalid';
       
     
        header("location:/LaundryWebsite/home/home.php");
    }
?>