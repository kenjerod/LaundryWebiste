<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $fullname = $_POST['fullnameEdit'];
    $contact = $_POST['contactEdit'];
    $address = $_POST['addressEdit'];
    $id = $_SESSION['user_id']; 

    if(!empty($fullname) && !empty($contact) && !empty($address)){
    $stmt2 = $connection->prepare("UPDATE `customers_address` SET `fullname`='$fullname',`contact`='$contact',`address`='$address' WHERE `user_id`='$id'");
    if($stmt2->execute())
    {
        echo "<script>alert('Update Succesfully!');</script>";
    }else
    {
        echo "<script>alert('Update Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>