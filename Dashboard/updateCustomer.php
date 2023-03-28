<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $name = $_POST['nameEdit'];
    $contact = $_POST['contactEdit'];
    $address = $_POST['addressEdit'];
 
    

    if(!empty($name) && !empty($contact) && !empty($address)){
    $stmt2 = $connection->prepare("UPDATE `customers_address` SET `fullname`='$name',`contact`='$contact ',`address`='$address' WHERE `address_id` = '".$_GET['id']."'");
    if($stmt2->execute())
    {
        

        header("location:/LaundryWebsite/Dashboard/viewCustomer.php?msg=<div class='alert alert-warning alert-dismissible fade show' role='alert'>Customer Update Succesfuly!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
       
    }else
    {
        echo "<script>alert('Update Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>