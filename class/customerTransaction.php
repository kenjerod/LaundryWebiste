<?php
   error_reporting (E_ALL ^ E_NOTICE);

   require_once '../Login&registration/dbconnect.php';

   if(isset($_POST['submit'])){
    $name = $_POST['name'];
   $offer = $_POST['typeClean'];
   $kilograms = $_POST['kg'];
   $offerId = $_POST['costprice'];
   $special = $_POST['specialprice'];
   $iron = $_POST['ironprice'];
   $payment = $_POST['payment'];
   $total = $_POST['totalprice'];
   $addressid = $_SESSION['user_id'];

   if(!empty($offer) && !empty($kilograms)){
     
   $stmt2 = $connection->prepare("INSERT INTO `customers_products`(`name`,`type_cleaning`,`kilograms`,`clean_price`,`special_item`,`press_iron`,`payment`,`total`,`status`,`user_id`) VALUES ('$name','$offer','$kilograms',' $offerId','$special','$iron',' $payment','$total','0','$addressid')");
   if($stmt2->execute())
   {
       echo "<script>alert('Booking Succesfully!  Please wait to Pick up your clothes!');</script>";
   }else
   {
       echo "<script>alert('Adding booking Failed!');</script>";
   }
   $stmt2->close();
   $connection->close();

}
   }
?>