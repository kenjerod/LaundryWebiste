<?php 
    
    require_once '../class/session.php';
  
    require_once 'updateUser.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="Mainsystem.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="container1">
    <div class="header">
        <div class="logo"><img src="/LaundryWebsite/Index/images/logo.png"></div>
        <div class="user"><img src="/LaundryWebsite/Index/images/user.png" alt="user">
        <p>Welcome Admin <?php echo $_SESSION["username"] ?></p>
            <div class="deliveryOffer" id="del">
                <form action="/LaundryWebsite/Login&registration/logout.php" method="post">
                     <input id="logout" type="submit" value="Logout"></input>
                </form>                
            </div>
        </div>
    </div>
  
 
    <div class="content">
    <div class="nav">
        <a href="/LaundryWebsite/Dashboard/dashboardHome.php" ><p id="dash">Dashboard</p></a>
        <h4>Owner</h4>
        <span class="dropdown-btn">
            <p>User Management <i class="fa fa-caret-down"></i></p> 
        </span>
        <div class="dropdown-container">
        <a href="/LaundryWebsite/Dashboard/userManage.php" >Add User</a>
        <a href="/LaundryWebsite/Dashboard/viewUser.php">View User</a>
        </div>
        <span class="dropdown-btn">
        <p>Customer Management  <i class="fa fa-caret-down"></i></p>
        </span>
        <div class="dropdown-container">
        <a href="/LaundryWebsite/Dashboard/addCustomer.php">Add Customer</a>
        <a href="/LaundryWebsite/Dashboard/viewCustomer.php">View Customer</a>
        </div>
        <span class="dropdown-btn">
        <p>Order Management  <i class="fa fa-caret-down"></i></p>
        </span>
        <div class="dropdown-container">
        <a href="/LaundryWebsite/Dashboard/addOrder.php">Add Order</a>
        <a href="#">View Order</a>
        </div>
        <span class="dropdown-btn">
        <p>Services  <i class="fa fa-caret-down"></i></p> 
        </span>
        <div class="dropdown-container">
        <a href="#">Add Services</a>
        <a href="#">View Services</a>
        </div>
        
    </div>
    <div class="contentFlex">
        <span class="contentName">
            <p>Update User</p>
        </span>
        <?php
  require_once '../Login&registration/dbconnect.php';


$que="SELECT * FROM `accounts` WHERE user_id = '".$_GET['id']."'";
$result= mysqli_query($connection,$que);
if($row = mysqli_fetch_assoc($result)){
 
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];

}

?>        
        <div class="form">
        <form class="row g-3" method="post">

  
  <div class="col-md-6">
    <label for="inputUsername" class="form-label">Username</label>
    <input name="usernameEdit" type="text" class="form-control" id="inputUsername" value="<?php echo  $username ?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input name="passwordEdit" type="password" class="form-control" id="inputPassword4" value="<?php echo  $password ?>" required>
  </div>
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name="emailEdit" type="email" class="form-control" id="inputEmail4" value="<?php echo $email ?>" required>
  </div>
  

  <div class="col-md-4">
    <label for="inputState" class="form-label">User Type</label>
    <select name="user_typeEdit" id="inputState" class="form-select" required="">
      <option selected>Choose...</option>
       <?php  
                          $sql = "SELECT * FROM tbl_usertype";
                          $result2 = $connection->query($sql); 
                          while($row2= mysqli_fetch_array($result2)){
                        ?>
                        <option value ="<?php echo $row2['usertype_id'];?>"><?php echo $row2['name'];?> </option>
                      <?php } ?> 
    </select>
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
                          
        </div>
    </div>
        
    </div>
</div>

    
</body>
<style>
    .container1
    {
        height: auto;
    }
    .header
    {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: auto;
        background-color: #217f81;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .header .logo img
    {
        width: 45%;
        margin-left: 20px;
    }
    .header .user img
    {
        width: 30%;
    }
    .header .user
    {
        text-align: center;
        color: #fff;
        transition: .3s ease-in;
    }
    .header .user:hover
    {
        cursor: pointer;
         color: black;  
    }
    .content
    {
        display: flex;
        height: 85vh;

    }
    #active
    {
        height: 30px;
        background-color: lightgreen;
        text-decoration: none;
        
    }
    .content .nav
    {
        display: flex;
        flex-direction: column;
        width: 20%;
        background-color: wheat;
        padding-top: 20px;
    }
    .content .nav a
    {
      text-decoration: none;
    }
    #dash
    {
        margin-top: 10px ;
       
    }
    .content .nav p
    {
        font-size: 18px;
        color: grey;
        transition: .3s ease-in;
        margin-left: 20px;
    }
    .content .nav p:hover
    {
       cursor: pointer;
       color: black;

    }
    .content .nav h4
    {
        font-size: 30px;
        margin-bottom: 20px;
        margin-left: 20px;
        
    }
    .deliveryOffer
{
    display: none;
    position: absolute;
    width: 7%;
    background-color: wheat;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
#logout
{
    width: 100%;
    height: 50px;
    margin-left: 0;
    text-align: center;
    background-color: wheat;
    color: rgba(0, 0, 0, 0.598);
    border-radius: 0;
    transition: .3s ease-in-out ;
}
#logout:hover
{
    background-color:#217f81;
    color: #fff;  
}
.user:hover .deliveryOffer
{
    display: block;
}


.header .deliveryOffer
{
    right: 40px;
    top: 105px;
    animation: growDown3 .4s ease-in-out;
    transform-origin: top center;
}

@keyframes growDown3
{
        0% {transform: scaleY(0)}
        80% {transform: scaleY(1.1)}
        100% {transform: scaleY(1)}
     
}
    .contentFlex
    {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    
    .contentName 
    {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .contentName p
    {
        margin-top: 15px;
        margin-left: 20px;
        font-size: 20px;
        font-weight: 600;
    }
    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container 
    {
        display: none;
        flex-direction: column;
        padding-left: 40px;
        padding-bottom: 10px;
    
    }
   
    .dropdown-container a
    {
        text-decoration: none;
        color: grey;
        transition: .3s ease-in;
    }
    .dropdown-container a:hover
    {
        color: black;
    
    }
    .form
    {
        max-width: 800px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 8px;
        margin: 0 auto;
        margin-top: 30px;
        padding: 50px;
    }

</style>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "flex") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "flex";
    }
  });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/66562ef889.js" crossorigin="anonymous"></script>
<script src="Mainsystem.js"></script>
<script>
    AOS.init();
</script>
</html>