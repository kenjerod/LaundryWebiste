<?php 
    
    require_once '../class/session.php';
    require_once '../Login&registration/dbconnect.php';
    require_once 'insertOrder.php';
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
        <a href="/LaundryWebsite/Dashboard/viewUser.php" >View User</a>
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
        <a href="/LaundryWebsite/Dashboard/addOrder.php"  id="active">Add Order</a>
        <a href="/LaundryWebsite/Dashboard/viewOrder.php">View Order</a>
        </div>
        <span class="dropdown-btn">
        <p>Reports <i class="fa fa-caret-down"></i></p> 
        </span>
        <div class="dropdown-container">
        <a href="/LaundryWebsite/Dashboard/viewPending.php">View Pending</a>
        </div>
        
    </div>
    <div class="contentFlex">
        <span class="contentName">
            <p>Order Management</p>
        </span>
<div class="form">
<form class="row g-3" method="post">
    <div class="col-9">
    <label for="inputState" class="form-label">Name</label>
    <select name="name" id="inputState" class="form-select" required="">
        <option selected>Choose...</option>
        <?php
             $sql = "SELECT * FROM customers_address";
                $result2 = $connection->query($sql); 
                while($row2= mysqli_fetch_array($result2)){
                ?>
            <option value ="<?php echo $row2['address_id'];?>"><?php echo $row2['fullname'];?> </option>
        <?php } ?> 
    </select>
                </div>
    <div class="col-5">
    <label for="clean" class="form-label">Kilograms</label>      
    <select name="typeClean" id="clean" class="form-select">
        <option id="select" value="0">Select to show the Price</option>
        <option value="75">Hand Wash & Hang Dry </option>
        <option value="50">Wash & Dry </option>
        <option value="100">Dry Cleaning </option>
     </select>
    </div>
     <div class="col-2">
    <label for="kg" class="form-label">Kilograms</label>              
    <input name="kg" type="text" class="form-control" id="kg" required>
    </div>
    <div class="col-2">
    <label for="costPrice" class="form-label">Service Total</label>          
    <input type="text" id="costPrice" class="form-control" name="costprice" readonly> 
    </div>
  <span class="specialItems">
                        <p>w/Special Items</p>
                    <span class="si">
                    <span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel" value="100" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel">
                            Bags P100
                        </label>
                    </span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel2" value="150" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel2">
                            Barong P150
                        </label>
                    </span>

                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel3" value="200" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel3">
                            Blanket P200
                        </label>
                    </span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel4" value="250" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel4">
                            Bed Sheets P250
                        </label>
                    </span>
                     
                    
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel5" value="350" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel5">
                            Comforter P350
                        </label>
                    </span>
                    </span> 
                    <span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel6" value="50" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel6">
                            Jackets P50
                        </label>
                    </span>
          
                  
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel7" value="150" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel7">
                            Rubber Shoes P150
                        </label>
                    </span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel8" value="150" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel8">
                            Cap P150
                        </label>
                    </span>
                   
                  
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel9" value="150" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel9">
                            Sneakers P150
                        </label>
                    </span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel10" value="300" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel10">
                            Stuffed Toys P300
                        </label>
                    </span>
                    
                </span>
                    </span>
                   
                    </span>
<div class="col-2">
<label for="specialPrice" class="form-label">Special Total</label>   
<input type="text" id="specialPrice" class="form-control" name="specialprice" readonly>
</div>

<div class="col-3">
<label for="specialPrice" class="form-label">Press Iron</label> 
<div class="form-check" >
    
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="150">
  <label class="form-check-label" for="flexRadioDefault1">
    Yes P150
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    No 0
  </label>
</div>

</div>
<div class="col-3">
    <label for="ironPrice" class="form-label">Press Iron Price</label>
    <input type="text" id="ironPrice" class="form-control" name="ironprice" readonly> 
  </div>


  
<label for="radioPayment" class="form-label">Payment Method</label>
<div class="form-check" id="radioPayment">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3"  value="Cash on Delivery or Pick up" checked>
  <label class="form-check-label" for="flexRadioDefault13">
  Cash on Delivery or Pick up
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4" value="E/wallet">
  <label class="form-check-label" for="flexRadioDefault24">
  e-Wallet
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5" value="Credit/Debit Card">
  <label class="form-check-label" for="flexRadioDefault25">
  Credit / Debit Card
  </label>
</div>
  
<div id="price">
            
            <p> Total : <input type="text" class="form-control" id="price1" name="totalprice" readonly> </p>
                
            </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Order</button>
  </div>
</form>
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
.specialItems
{
    width: 70%;
}
     .specialItems .si 
    {
       display: flex;
       justify-content: center;
        gap: 5rem;
    }
    .specialItemsPriceFlex
    {
        display: flex;
        gap: 2rem;

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
        height: 30px;
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
        margin-bottom: 50px;
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






<script>
      var dropdown = document.getElementById("clean");
      var kilo = document.getElementById("kg");
      var price = document.getElementById("price1");
    
      var costprice = document.getElementById("costPrice");
      var specialprice = document.getElementById("specialPrice");
      var ironprice = document.getElementById("ironPrice");
      var addOns = document.getElementsByName("special");
      var press = document.getElementsByName("flexRadioDefault");
      price.value = dropdown.value
      dropdown.addEventListener("change", function() {
        updateTotal1();
      });

      kilo.addEventListener("input", function() {
        updateTotal1();
      });

      for (var i = 0; i < addOns.length; i++) {
        addOns[i].addEventListener("change", function() {
          updateTotal1();
        });
    }  
        for (var i = 0; i < press.length; i++) {
            press[i].addEventListener("change", function() {
                updateTotal1();
        });
      }

      function updateTotal1() {
        var selectedValue = dropdown.value;
        var kiloValue = kilo.value;
        var addOnsValue = 0;
        var pressValue = 0;
       
        for (var i = 0; i < addOns.length; i++) {
          if (addOns[i].checked) {
            addOnsValue += parseFloat(addOns[i].value);
          }
        }
        for (var i = 0; i < press.length; i++) {
            if(press[i].checked) {
                pressValue = parseFloat(press[i].value);
            }
        }
        
        var cost = parseFloat(selectedValue) * parseFloat(kiloValue);
        costprice.value = cost;
        var total = parseFloat(selectedValue) * parseFloat(kiloValue) + addOnsValue + pressValue;
        price.value = total;
        var specialcost = addOnsValue;
        specialprice.value = specialcost;
        var ironcost = pressValue;
        ironprice.value = ironcost;
      }
    </script>