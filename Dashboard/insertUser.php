<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $userType = $_POST['user_type']; 

    if(!empty($username) && !empty($password) && !empty($email)){
    $stmt2 = $connection->prepare("INSERT INTO `accounts`(`username`, `password`, `email`, `user_type`) VALUES ('$username', '$password', '$email', '$userType')");
    if($stmt2->execute())
    {
        header("location:/LaundryWebsite/Dashboard/viewUser.php?msg=<div class='alert alert-success alert-dismissible fade show' role='alert'>New User Added!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    }else
    {
        echo "<script>alert('Adding Address Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>