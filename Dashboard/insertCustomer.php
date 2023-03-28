<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $username = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $user = $_SESSION['user_id'];
    if(!empty($username) && !empty($contact) && !empty($address)){
    $stmt2 = $connection->prepare("INSERT INTO `customers_address`(`fullname`, `contact`, `address`, `user_id`) VALUES ('$username', '$contact', '$address', '$user')");
    if($stmt2->execute())
    {
       
        header("location:/LaundryWebsite/Dashboard/viewCustomer.php?msg=<div class='alert alert-success alert-dismissible fade show' role='alert'>Customer Added!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    }else
    {
        echo "<script>alert('Adding Address Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>