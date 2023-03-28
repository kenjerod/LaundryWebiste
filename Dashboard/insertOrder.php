<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $name = $_POST['name'];
    $service = $_POST['typeClean'];
    $kilogram = $_POST['kg'];
    $serviceCost = $_POST['costprice'];
    $specialCost = $_POST['specialprice'];
    $pressCost = $_POST['flexRadioDefault'];
    $payment = $_POST['flexRadioDefault1'];
    $total = $_POST['totalprice'];
    $user = $_SESSION['user_id'];
    if(!empty($name) && !empty($service) && !empty($kilogram)){
    $stmt2 = $connection->prepare("INSERT INTO `customers_products`(`name`, `type_cleaning`, `kilograms`,`clean_price`,`special_item`,`press_iron`,`payment`,`total`,`status`, `user_id`) VALUES ('$name', '$service', '$kilogram', '$serviceCost', '$specialCost','$pressCost', '$payment', '$total ','0', '$user')");
    if($stmt2->execute())
    {
       
        header("location:/LaundryWebsite/Dashboard/viewOrder.php?msg=<div class='alert alert-success alert-dismissible fade show' role='alert'>Order Added!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    }else
    {
        echo "<script>alert('Adding Address Failed!');</script>";
    }
    $stmt2->close();
    $connection->close();

    }
    
?>