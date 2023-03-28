
<?php
    class insert extends config{
        public $name;
        public $email;
        public $password;

        public function __construct($name,$email,$password){
            $this->name= $name;
            $this->email= $email;
            $this->password= $password;
        }
        
        public function insertAccount(){
            $con = $this->con();
            $sql = "INSERT INTO `accounts`(`username`, `email`, `password`, `user_type`) VALUES ('$this->name','$this->email','$this->password','2')";
            $data = $con->prepare($sql);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
?>