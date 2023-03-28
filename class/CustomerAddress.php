<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $username = $_POST['fullname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $id = $_SESSION['user_id']; 

    if(!empty($username) && !empty($contact) && !empty($address)){
    $stmt2 = $connection->prepare("INSERT INTO `customers_address`(`fullname`, `contact`, `address`, `user_id`) VALUES ('$username', '$contact', '$address', '$id')");
    if($stmt2->execute())
    {
        echo "<script>alert('Adding Address Succesfully!');</script>";
    }else
    {
        echo "<script>alert('Adding Address Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>