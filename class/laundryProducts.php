<?php
    error_reporting (E_ALL ^ E_NOTICE);
    require_once '../Login&registration/dbconnect.php';
    $offer = $_POST['typeClean'];
    

    if(!empty($username) && !empty($contact) && !empty($address)){
        if($offer == $handwashId){
            // $subtotal = $handwashId + $specialId + $radiosId;
            // $stmt2 = $connection->prepare("INSERT INTO item_customers (`offer`, `special_item`, `w/press_iron`, `kilograms`,`subtotal`,`offer_id`,`special_id`,`iron_id`,`address_id`) VALUES ('$offer', '$specialItems', '$radio', '$kg','$subtotal','$handwashId','$specialId','$specialId','$specialId')");
            // if($stmt2->execute())
            // {
            //     echo "<script>alert('Adding Address Succesfully!');</script>";
            // }else
            // {
            //     echo "<script>alert('Adding Address Failed!');</script>";
            // }

            // $stmt2->close();
            // $connection->close();

            $con = $this->con();
            $sql = "INSERT INTO item_customers (`offer`, `special_item`, `w/press_iron`, `kilograms`,`subtotal`,`offer_id`,`special_id`,`iron_id`,`address_id`) VALUES ('$offer', '$specialItems', '$radio', '$kg','$subtotal','$handwashId','$specialId','$specialId','$specialId')";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll();
            foreach($result as $data){
               echo "<option>".$data['type']."</option> ";     
        
        }     
    
    }
}
?>