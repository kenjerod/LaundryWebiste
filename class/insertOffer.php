<!-- <?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $kilograms = $_POST['kg'];
    $offer = $_POST['typeClean'];
    $offerId = $_SESSION['handwash_id'];
    $subtotal = $_POST['price'];
    
    if(!empty($offer) && !empty($kilograms)){
      
    $stmt2 = $connection->prepare("INSERT INTO `offer_subtotal`(`offer`,`kilograms`) VALUES ('$offer','$kilograms')");
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



    
?> -->