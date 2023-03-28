<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once '../Login&registration/dbconnect.php';

$sql = "DELETE FROM accounts WHERE user_id='".$_GET["id"]."'";
$res = $connection->query($sql) ;
if($res){
    header("location:/LaundryWebsite/Dashboard/viewUser.php?msg=<div class='alert alert-danger alert-dismissible fade show' role='alert'>Delete Succesfuly!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
}
else
{
    echo "Failed : " . mysqli_error($connection);
}

?>
