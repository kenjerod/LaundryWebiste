<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $name = $_POST['nameEdit'];
    $service = $_POST['typeCleanEdit'];
    $kilogram = $_POST['kgEdit'];
    $serviceCost = $_POST['costpriceEdit'];
    $specialCost = $_POST['specialpriceEdit'];
    $pressCost = $_POST['flexRadioDefaultEdit'];
    $payment = $_POST['flexRadioDefault1Edit'];
    $total = $_POST['totalpriceEdit'];

    

    if(!empty($name) && !empty($service) && !empty($kilogram)){
    $stmt2 = $connection->prepare("UPDATE `customers_products` SET `name`='$name',`type_cleaning`='$service',`kilograms`='$kilogram',`clean_price`='$serviceCost',`special_item`='$specialCost',`press_iron`='$pressCost',`payment`='$payment',`total`='$total' WHERE `product_id` = '".$_GET['id']."'");
    if($stmt2->execute())
    {
        

        header("location:/LaundryWebsite/Dashboard/viewOrder.php?msg=<div class='alert alert-warning alert-dismissible fade show' role='alert'>Order Update Succesfully!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
       
    }else
    {
        echo "<script>alert('Update Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>