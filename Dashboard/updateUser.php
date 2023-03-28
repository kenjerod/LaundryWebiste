<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $username = $_POST['usernameEdit'];
    $password = $_POST['passwordEdit'];
    $email = $_POST['emailEdit'];
    $userType = $_POST['user_typeEdit']; 
    

    if(!empty($username) && !empty($password) && !empty($email)){
    $stmt2 = $connection->prepare("UPDATE `accounts` SET `username`='$username',`password`='$password',`email`='$email',`user_type`='$userType' WHERE `user_id` = '".$_GET['id']."'");
    if($stmt2->execute())
    {
        

        header("location:/LaundryWebsite/Dashboard/viewUser.php?msg=<div class='alert alert-warning alert-dismissible fade show' role='alert'>User Update Succesfully!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
       
    }else
    {
        echo "<script>alert('Update Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>