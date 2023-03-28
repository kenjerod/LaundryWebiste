<?php 

    $host = 'localhost';
    $user= 'root';
    $password= '';
    $database = 'laundry_system';
   
    $connection = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo 'error';
    }              
?>