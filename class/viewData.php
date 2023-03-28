<?php
     class view extends config{
        
        public function viewAcc(){
    
            $id = $_SESSION['user_id']; 
    
            $con = $this->con();
            $sql = "SELECT * FROM `customers_address` WHERE user_id = $id";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll();
            foreach($result as $data){
            echo "<div class ='addr'>
                    <span class='num'>
                        <p>". $data['fullname'] ."</p>
                       <p>". $data['contact'] ."</p>
                    </span>
                    <span class='adres'>
                        <p>". $data['address'] ."</p>
                    </span>";
                      
            }
        }
        
        public function viewAcc2(){
          
            $id = $_SESSION['user_id']; 
    
            $con = $this->con();
            $sql = "SELECT * FROM `customers_address` WHERE user_id = $id";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll();
            foreach($result as $data){
            
            echo "<div class='defaultInfo'>
                <span class='dd'>
                    <p  class='fullname'>". $data['fullname'] . "</p>
                    <p class='cNumber'>". $data['contact'] . "</p>
                </span>
                <p>". $data['address'] ."</p>
            </div>
            <div class='edit' id='edit'>
            <p>edit</p>
        </div>";
           
      
                      
            }
        } 

        public function viewAccEdit(){
          
            $id = $_SESSION['user_id']; 
    
            $con = $this->con();
            $sql = "SELECT * FROM `customers_address` WHERE user_id = $id";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll();
            foreach($result as $data){
               echo "<form action='' class='ssEdit' method='post'>
                <input type='text' name='fullnameEdit' placeholder='Fullname' value='". $data['fullname'] ."' required>
                <input type='text' name='contactEdit' placeholder='ContactNumber' value='". $data['contact'] ."' required>
                <input id='cAddrEdit' type='text' name='addressEdit' placeholder='Complete Address' value='". $data['address'] ."' required>
                <button>Edit</button>
            </form>";
                    
            }
        } 

        // public function viewOffer(){
          
        //     $con = $this->con();
        //     $sql = "SELECT * FROM `handwash_name`";
        //     $data = $con->prepare($sql);
        //     $data->execute();
        //     $result = $data->fetchAll();
        //     foreach($result as $data){
        //        echo "<option value='".$data['type']."'>".$data['type']."</option> ";     
        //     }
        // } 

       

        // public function viewPressIron(){
           
        //     $con = $this->con();
        //     $sql = "SELECT * FROM `press_iron`";
        //     $data = $con->prepare($sql);
        //     $data->execute();
        //     $result = $data->fetchAll();
        //     foreach($result as $data){
        //         echo "<span class='radio'>
        //     <label class='container'>".$data['w/press_iron'].
        //         "<input type='radio' checked='checked' name='radio' value =>
        //         <span class='checkmark'></span>
        //     </label>
        // </span>";
        //     }
        // }  


 public function viewKilo(){
            $kg = $_POST['kg'];
            $offer = $_POST['typeClean'];

            if($offer == "Hand Wash & Hang Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `handwash_prices` WHERE `handprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    echo "<input type='text' id='hand' name='type' value='".$data['handwashing']."' >
                     <input type='text' name='kilo' value='".$data['kilograms']."' >
                     <input  type='text' name='price' id='subtotalp' value='P".$data['price']."' >";
                }
            }
            if($offer == "Wash & Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `wash_price` WHERE `washprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    echo "<input type='text' id='hand' name='type' value='".$data['wash_name']."' >
                    <input type='text' name='kilo' value='".$data['kilograms']."' >
                    <input  type='text' name='price' id='subtotalp' value='P".$data['price']."'>";
                }
            }
            if($offer == "Dry Cleaning"){
                $con = $this->con();
                $sql = "SELECT * FROM `drycleaning_prices` WHERE `dryprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    echo "<input type='text' id='hand' name='type' value='".$data['dry_name']."'>
                    <input type='text' name='kilo' value='".$data['kilograms']."'>
                    <input  type='text' name='price' id='subtotalp' value='P".$data['price']."'>";
                }
            }
        }  
                
        public function viewSpecial(){
            $sum = 0;
                if(isset($_POST['special'])) {
                    $items = $_POST['special'];
                        foreach($items as $item) {
                            $sum += $item;
                            }
                        }
                        // echo "The sum is: " . $sum;
                     echo "<input type='text' name='special' id='subtotal2' value=$sum disabled>";
                    }


                    
        public function viewRadioButton(){
            if(isset($_POST['radio'])) {
                $selected_color = $_POST['radio'];
                    echo "<input type='text' name='press' id='subtotal2' value=P$selected_color>";
                            }        
                        }
         
            
        public function viewTotalProducts(){
           
            $kg = $_POST['kg'];
            $offer = $_POST['typeClean'];

            if($offer == "Hand Wash & Hang Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `handwash_prices` WHERE `handprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
                
            }
            if($offer == "Wash & Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `wash_price` WHERE `washprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
               
            }
            if($offer == "Dry Cleaning"){
                $con = $this->con();
                $sql = "SELECT * FROM `drycleaning_prices` WHERE `dryprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
            }

            $sum = 0;
                if(isset($_POST['special'])) {
                    $items = $_POST['special'];
                        foreach($items as $item) {
                            $sum += $item;
                            }
                        }

            
            if(isset($_POST['radio'])) {
                            $selected_color = $_POST['radio'];
            
                                        }        
                                    
           $total = $data['price'] + $sum + $selected_color;

           echo "<p>P".$total;"</p>";
        }

     
        



        public function viewTotalPrice(){
           
            $kg = $_POST['kg'];
            $offer = $_POST['typeClean'];
          

            if($offer == "Hand Wash & Hang Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `handwash_prices` WHERE `handprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
                
            }
            if($offer == "Wash & Dry"){
                $con = $this->con();
                $sql = "SELECT * FROM `wash_price` WHERE `washprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
               
            }
            if($offer == "Dry Cleaning"){
                $con = $this->con();
                $sql = "SELECT * FROM `drycleaning_prices` WHERE `dryprice_id` = '$kg'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll();
                foreach($result as $data){
                    $data['price'];
                }
            }

            $sum = 0;
                if(isset($_POST['special'])) {
                    $items = $_POST['special'];
                        foreach($items as $item) {
                            $sum += $item;
                            }
                        }

            
            if(isset($_POST['radio'])) {
                            $selected_color = $_POST['radio'];

                           
                
                                    
           $totals = $data['price'] + $sum + $selected_color + 150;

           echo "<input type='text' name='totalPrice' id='priceTotal' value=P$totals>";
        }
    
    }

}    
?>