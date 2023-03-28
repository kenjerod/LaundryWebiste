<?php 
    
    require_once '../class/session.php';
    require_once '../Login&registration/dbconnect.php';
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
    <a href="#" id="active"><p id="dash"> <i class="fa-solid fa-gauge"></i> Dashboard</p></a>
        <h4>Owner</h4>
        <span class="dropdown-btn">
            <p> <i class="fa-solid fa-person-circle-plus"></i> User Management <i class="fa fa-caret-down"></i></p> 
        </span>
        <div class="dropdown-container">
            <a href="/LaundryWebsite/Dashboard/userManage.php">Add User</a>
            <a href="/LaundryWebsite/Dashboard/viewUser.php">View User</a>
        </div>
        <span class="dropdown-btn">
        <p><i class="fa-solid fa-users"></i> Customer Management  <i class="fa fa-caret-down"></i></p>
        </span>
        <div class="dropdown-container">
            <a href="/LaundryWebsite/Dashboard/addCustomer.php">Add Customer</a>
            <a href="/LaundryWebsite/Dashboard/viewCustomer.php">View Customer</a>
        </div>
        <span class="dropdown-btn">
        <p> <i class="fa-solid fa-folder-plus"></i> Order Management  <i class="fa fa-caret-down"></i></p>
        </span>
        <div class="dropdown-container">
            <a href="/LaundryWebsite/Dashboard/addOrder.php">Add Order</a>
            <a href="/LaundryWebsite/Dashboard/viewOrder.php">View Order</a>
        </div>
        <span class="dropdown-btn">
        <p><i class="fa-solid fa-paste"></i> Reports <i class="fa fa-caret-down"></i></p> 
        </span>
        <div class="dropdown-container">
        <a href="/LaundryWebsite/Dashboard/viewPending.php">View Pending</a>
        </div>
        
    </div>
    <div class="contentFlex">
        <span class="contentName">
            <p>Owner Dashboard</p>
        </span>
        <span class="contentBody">
            <span class="order">
            <i class="fa-solid fa-folder-open fa-2xl"></i>
            <span class="new">
                <?php 
                    $sql= "select * from `accounts`";
                    $result = mysqli_query($connection,$sql);
                    $num_rows = mysqli_num_rows($result);
                ?>
                <h3>
                    <?php
                        echo $num_rows;
                    ?>
                </h3>
                
                <p>Users</p>
            </span>
            </span>
            <span class="progress1">
            <i class="fa-solid fa-rotate-right fa-2xl"></i>
            <span class="new">
            <?php 
                    $sql= "select * from `customers_products` WHERE `status` = 0";
                    $result = mysqli_query($connection,$sql);
                    $num_rows = mysqli_num_rows($result);
                ?>
                <h3>
                    <?php
                        echo $num_rows;
                    ?>
                </h3>
                <p>Pending</p>
            </span>
            </span>
            <span class="complete">
            <i class="fa-solid fa-check-to-slot fa-2xl"></i>
            <span class="new">
            <?php 
                    $sql= "select * from `customers_products` WHERE `status` = 1";
                    $result = mysqli_query($connection,$sql);
                    $num_rows = mysqli_num_rows($result);
                ?>
                <h3>
                    <?php
                        echo $num_rows;
                    ?>
                </h3>
                <p>Completed</p>
            </span>
            </span>
        </span>
        <h2 class="statusOrder">Order Status</h2>
        <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-dark table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type of Service</th>
                                                 <th>Kilograms</th>
                                                <th>Payment</th>
                                                <th>Total</th>
                                                <th>Delivery Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                  
                                    $sql = "SELECT * FROM customers_products";
                                     $result = $connection->query($sql);

                                   while($row = $result->fetch_assoc()) { 
                                   $sql1 = "SELECT * FROM  customers_address where address_id  ='".$row['name']."'";
                                   $result1 = $connection->query($sql1);
                                    $row1 = $result1->fetch_assoc();
                                  
                                      ?>
                                            <tr>
                                                <td><?php echo $row1['fullname']; ?></td> 

                                                <?php if($row['type_cleaning']==75 )
                                                    { ?>
                                                        <td>Hand Wash & Hang Dry</td>    
                                                   <?php }
                                                   elseif($row['type_cleaning']==50)
                                                   { ?>
                                                        <td>Wash & Dry</td>
                                                  <?php }
                                                  else
                                                  { ?>
                                                        <td>Dry Cleaning</td>
                                                 <?php }
                                                ?>

                                                <td><?php echo $row['kilograms']; ?></td>
                                                <td><?php echo $row['payment']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <?php if($row['status']==0)
                                                { ?>
                                                    <td>Pending</td>
                                                 <?php } 
                                                 else 
                                                 { ?>
                                                    <td>Complete</td>
                                                 <?php }
                                                ?>

                                               
                                            </tr>
                                          <?php } ?> 
                                        </tbody>
                                    </table>
                           
                                </div>
    </div>
    
    


                                </div>
                                </div>
</body>
<style>
    *
{
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}
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
        padding-left: 20px;
        padding-right: 40px;
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
        height: auto;
    }
    #active
    {
        height: 50px;
        background-color: lightgreen;
        text-decoration: none;
        
    }
    .content .nav
    {
        display: flex;
        flex-direction: column;
        width: 25%;
        background-color: wheat;
       
        padding-top: 20px;
      

    }
    #dash
    {
        margin-top: 10px ;
        text-decoration: none;
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
    right: 90px;
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
    .statusOrder
    {
        margin-top: 30px;
        margin-left: 30px;
        font-weight: 600;
    }
    .contentBody
    {
        display: flex;
        justify-content: center;
        gap: 10rem;
    }
    .contentBody .order
    {
        width: 20%;
        height: auto;
        background-color: violet;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 20px;
        border-radius: 8px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .contentBody .progress1
    {
        width: 20%;
        height: auto;
        background-color: orange;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 20px;
        border-radius: 8px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .contentBody .complete
    {
        width: 20%;
        height: auto;
        background-color: #217f81;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 20px;
        border-radius: 8px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .contentBody .order i, .progress1 i, .complete i
    {
        color: white;
    }
    .contentBody ,.progress1 p,.complete p, .order p
    {
        margin-bottom: 0;
        font-size: 15px;
        font-weight: 600;
    }
    .contentBody .order .new 
    {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    .contentBody .progress1 .new 
    {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    .contentBody .complete .new 
    {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    .contentBody h3
    {
        font-weight: 600;
        color: #fff;
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
    .table-responsive
    {
        margin-bottom: 180px;
        margin-left: 50px;
        margin-right: 50px;
        margin-top: 20px;
       
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