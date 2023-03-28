<?php 
    session_start();
   session_destroy();
    $_SESSION_['status'] = 'invalid';


   header("location:/LaundryWebsite/Login&registration/login.php");
?>