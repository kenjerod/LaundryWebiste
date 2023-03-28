<?php
        error_reporting (E_ALL ^ E_NOTICE);
        require_once 'dbconnect.php';
        session_start();
       
         if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
         $_SESSION['status'] ='invalid';
         }
         if($_SESSION['status'] == 'valid'){
         header("location:/LaundryWebsite/home/home.php");
         }

         if(isset($_POST["sign-in"])){
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            if(!empty($username) || !empty($password)) {
            $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
            $data = mysqli_query($connection,$sql);
            $rowvalidate = mysqli_fetch_array($data);

            if(mysqli_num_rows($data) > 0) {
               $_SESSION['status'] = 'valid';
               $_SESSION['username'] = $rowvalidate['username'];
               $_SESSION['user_id'] = $rowvalidate['user_id'];
               $_SESSION['user_type'] = $rowvalidate['user_type'];

               if($_SESSION['user_type'] == "customer" || $_SESSION['user_type'] == "2"){
                  header("location:/LaundryWebsite/home/home.php");
               }
              
               if($_SESSION['user_type'] == "admin" || $_SESSION['user_type'] == "1"){
                  header("location:/LaundryWebsite/Dashboard/dashboardHome.php");
               }
            }else{
               $_SESSION['status'] = 'invalid';
               echo "<script>alert('Username or Password is Wrong!');</script>";
            }
            } 
         } 
         
      
   
?>