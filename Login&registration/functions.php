<?php
    function insertAcc(){
        if(!empty($_POST['names']) && !empty($_POST['emails']) && !empty($_POST['passwords'])){
            $insert = new insert($_POST['names'],$_POST['emails'],$_POST['passwords']);
            if($insert->insertAccount()){
                echo "<script>alert('Registered Succesfully!');</script>";
            }else{
                echo "<script>alert('Registered Failed!');</script>";
            }
        }
    }

   
           
?>