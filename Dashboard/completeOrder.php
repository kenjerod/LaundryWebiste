<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';

 
 
    $stmt2 = $connection->prepare("UPDATE `customers_products` SET `status`= 1 WHERE `product_id`='".$_GET['id']."'");
    if($stmt2->execute())
    {
        

        header("location:/LaundryWebsite/Dashboard/viewOrder.php?msg=<div class='alert alert-info alert-dismissible fade show' role='alert'>Status Complete!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
       
    }else
    {
        echo "<script>alert('Update Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    
    
?>