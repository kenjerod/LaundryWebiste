<?php
require_once '../class/session.php';
require_once '../Login&registration/init.php';
require_once '../class/CustomerAddress.php';
require_once '../class/updateAddress.php';
require_once '../class/viewData.php';
require_once '../class/customerTransaction.php';




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
    <title>Booking</title>
</head>

<body>
    <div class="bg">
        <div class="nav">
            <div class="logo">
                <a href="/LaundryWebsite/home/home.php"><img src="/LaundryWebsite/Index/images/logo.png" alt="Logo"></a>
            </div>
            <div class="category">
                <span class="flexCategory">
                    <p id="book" class="active">Book</p>
                    <p >Category</p>
                    <p>Contact Us</p>
                    <img src="/LaundryWebsite/Index/images/user.png" alt="user">
                    <h6 id="log"><?php echo $_SESSION["username"] ?><i class="fa-solid fa-sort-down fa-lg"></i>
                        <div class="deliveryOffer" id="del">
                            <form action="/LaundryWebsite/Login&registration/logout.php" method="post">
                                <input id="logout" type="submit" value="Logout"></input>
                            </form>
                            <a href="">Account</a>
                            <a href="">Notification</a>
                        </div>
                    </h6>
                    <input type="text" placeholder="Search" id="search">
                    <i class="fa-solid fa-magnifying-glass" id="searchLogo"></i>
                </span>
            </div>
        </div>
        <div class="boook">
            <img src="/LaundryWebsite/Index/images/logo.png" alt="">
            <h1>Book</h1>
        </div>
        <!------For Address------->
        <div class="container-v">
            <div class="container-sm NxjxYL"></div>
            <div class="container-sm address">
                <p><i class="fa-solid fa-location-dot"></i> Delivery Address</p>
                <?php
                $view = new view();
                $view->viewAcc();
                ?>

                <span id="change">
                    <button>change</button>
                </span>
            </div>
        </div>
    </div>
    </div>
    <div class="formContainer" id="formCon">
        <div class="formAddress animate__animated animate__zoomIn" id="closeForm">
            <div class="myAddressHead">
                <h5>My Address</h5>
            </div>
            <div id="value" class='flexEdit'>
                <?php
                $view->viewAcc2();
                ?>
                <!-- <div class="flexEdit">
                <div class="defaultInfo">
                    <span class="dd">
                        <p class="fullname">Fullname</p>
                        <p class="cNumber">Contact Number</p>
                    </span>
                    <p>Address</p>
                </div>
                <div class="edit" id="edit">
                    <p>Edit</p>
                </div>
            </div> -->
            <!-- <div class="edit" id="edit">
                <p>edit</p>
            </div> -->
            </div>
            <div class="cancelButton">
                <button id="cancel">Cancel</button>
                <button id="add">Add Address</button>
            </div>
        </div>
        <div class="formCustomerAddress animate__animated animate__zoomIn" id="fca">
            <div class="CustomerAddress">
                <h5>My Address</h5>
                <form action="" class="ss" method="post">
                    <input type="text" name="fullname" placeholder="Fullname" required>
                    <input type="text" name="contact" placeholder="ContactNumber" required>
                    <input id="cAddr" type="text" name="address" placeholder="Complete Address" required>
                    <button>Add Address</button>
                </form>
                <div class="cancelButton2">
                    <button id="cancel2">Cancel</button>
                </div>
            </div>

        </div>
        <div class="formCustomerAddressEdit animate__animated animate__zoomIn" id="fcedit">
            <div class="CustomerAddressEdit">
                <h5>My Address</h5>
                <?php
                $view->viewAccEdit();
                ?>
                <!-- <form action="" class="ssEdit" method="post">
                    <input type="text" name="fullnameEdit" placeholder="Fullname" required>
                    <input type="text" name="contactEdit" placeholder="ContactNumber" required>
                    <input id="cAddrEdit" type="textEdit" name="address" placeholder="Complete Address" required>
                    <button>Edit</button>
                </form> -->
                <div class="cancelButton2Edit">
                    <button id="cancel2Edit">Cancel</button>
                </div>
            </div>

        </div>
    </div>

    <!------------Laundry PRoducs---------------->
    <form action="" method="post"> 
    <div class="typeContainer">
        <div class="productCleaning">
            <div class="typeCleaning">
                <h5>Laundry Products</h5>
       
        
            </div>

          
           
          
            
           
        <div class="total">
            <p id="typeClean">Book</p>
          
        </div>
       
    </div>
</div>   
                



<div class="formContainerProducts" id="formConProd">
        <div class="formProducts animate__animated animate__zoomIn" id="closeProd">
            <div class="myProductsHead">
                <h5>Laundry Products</h5>
            </div>
            <div class="Items">
                <div class="flexEdit1">
                    <p>Products</p>
                    <span class="typeKg">
                      
                        <p class="kilo">Kg</p> 
                        <p>Cost</p>
                    </span>
                </div>
                <form action="" method="post">
                    <span class="basicItems">
                        <p>Type of Cleaning</p>
                        <span class="bk">
                        <select name="name" id="inputState" class="form-select" required="">
                        
                        <?php  
                         $id = $_SESSION['user_id'];
                          $sql = "SELECT * FROM customers_address WHERE user_id = $id";
                          $result2 = $connection->query($sql); 
                          while($row2= mysqli_fetch_array($result2)){
                        ?>
                        <option value ="<?php echo $row2['address_id'];?>"><?php echo $row2['fullname'];?> </option>
                      <?php } ?> 
                      </select>        
                            <select name="typeClean" id="clean" class="form-select">
                                <option id="select" value="0">Select to show the Price</option>
                                <option value="75">Hand Wash & Hang Dry P75</option>
                                <option value="50">Wash & Dry P50</option>
                                <option value="100">Dry Cleaning P100</option>
                            </select>
                            <input name="kg" type="text" id="kg" required>
                            <input type="text" id="costPrice" name="costprice" readonly> 
                        </span>
                      
                    </span>
<!-- <script>
      var dropdown = document.getElementById("clean");
      var kilo = document.getElementById("kg");
      var price = document.getElementById("price");
      price.value = dropdown.value
      dropdown.addEventListener("change", function() {
        var selectedValue = this.value;
        var kiloValue = kilo.value;
        var total = parseFloat(selectedValue) * parseFloat(kiloValue);
        price.value = total;
      });

      kilo.addEventListener("input", function() {
        var selectedValue = dropdown.value;
        var kiloValue = this.value;
        var total = parseFloat(selectedValue) * parseFloat(kiloValue);
        price.value= total;
      });
    </script> -->
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
    </span>
    <span>
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
                    </span>  
                    <span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel5" value="350" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel5">
                            Comforter P350
                        </label>
                    </span>
                    <span class="specialItemsPriceFlex">
                        <input class="form-check-input" name="special" type="checkbox" id="checkboxNoLabel6" value="50" aria-label="...">
                        <label class="form-check-label" for="checkboxNoLabel6">
                            Jackets P50
                        </label>
                    </span>
                    </span>
                    <span>
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
                    </span>
                    <span>
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
                    <input type="text" id="specialPrice" name="specialprice" readonly>
                    </span>
                   
                    </span>
                   
            
                    <span class="pressIron" >
                        <p>w/Press Iron</p>
                       
                        <span class="radio">
                            <label class="container">Yes P150
                                <input type="radio"  name="radio" value="150">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">No P0
                                <input type="radio" name="radio" value="0">
                                <span class="checkmark"></span>
                            </label>
                        </span>
                        <input type="text" id="ironPrice" name="ironprice" readonly> 
                    </span>
          
                    <div class="paymentMethod">
            <div class="payment">
                <p class="pm">Payment Method</p>
                <span class="cash">
                    <span class="radio">
                            <label class="container">Cash on Delivery or Pick up
                                <input type="radio" checked="checked" name="payment" value="Cash on Delivery or Pick up">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">e-Wallet
                                <input type="radio" name="payment" value="e-Wallet">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Credit / Debit Card
                                <input type="radio" name="payment" value="Credit / Debit Card">
                                <span class="checkmark"></span>
                            </label>
                    </span>
                </span>
            </div>
            <div id="price">
            <p> SubTotal : <input type="text" id="price2" name="price" readonly> </p>
            <p>Delivery Fee : P50</p>
            <p> Total : <input type="text" id="price1" name="totalprice" readonly> </p>
                
            </div>
        </div>
       
                    <button id="submitSpecial" name="submit">Sumbit</button>
                </form>
            </div>
            <div class="cancelButtonProducts">
                <button id="cancelProducts">Cancel</button>
          
            </div>
        </div>
       
        <script>
      var dropdown = document.getElementById("clean");
      var kilo = document.getElementById("kg");
      var price = document.getElementById("price1");
      var price2 = document.getElementById("price2");
      var costprice = document.getElementById("costPrice");
      var specialprice = document.getElementById("specialPrice");
      var ironprice = document.getElementById("ironPrice");
      var addOns = document.getElementsByName("special");
      var press = document.getElementsByName("radio");
      price.value = dropdown.value
      dropdown.addEventListener("change", function() {
        updateTotal();
      });

      kilo.addEventListener("input", function() {
        updateTotal();
      });

      for (var i = 0; i < addOns.length; i++) {
        addOns[i].addEventListener("change", function() {
          updateTotal();
        });
    }  
        for (var i = 0; i < press.length; i++) {
            press[i].addEventListener("change", function() {
                updateTotal();
        });
      }

      function updateTotal() {
        var selectedValue = dropdown.value;
        var kiloValue = kilo.value;
        var addOnsValue = 0;
        var pressValue = 0;
        var deliveryFee = 50;
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
        var total = parseFloat(selectedValue) * parseFloat(kiloValue) + addOnsValue + pressValue + deliveryFee;
        price.value = total;
        var subtotal = parseFloat(selectedValue) * parseFloat(kiloValue) + addOnsValue + pressValue;
        price2.value = subtotal;
        var cost = parseFloat(selectedValue) * parseFloat(kiloValue);
        costprice.value = cost;
        var specialcost = addOnsValue;
        specialprice.value = specialcost;
        var ironcost = pressValue;
        ironprice.value = ironcost;
      }
    </script>
        <!-- -----------------------------specialItems--------------------------------
        <div class="specialItemsProducts animate__animated animate__zoomIn" id="sItems">
            <div class="specialItemsHead">
                <h5>Choose your Special Item/s</h5>
            </div>
            <div class="specialPrice">
                <form class="specialItemsPrice" method="post">
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

                </form>
            </div>
            <div class="cancelButtonSpecial">
                <button id="cancelSpecial">Cancel</button>
                <button id="submitSpecial">Sumbit</button>
            </div>
        </div> -->

    </div>
    <!-------------------------------Footer---------------------------------->
    <div class="footer">
        <div class="container-sm">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-sm-4 p-3" id="washup">
                        <img src="/LaundryWebsite/Index/images/logo.png" alt="LaunDryver">
                        <h5><i class="fa-solid fa-shirt" style="padding-right: 10px;"></i>WASH UP NOW!</h5>
                        <p><i class="fa-solid fa-phone" style="padding-right: 10px;"></i>0943545657</p>
                        <p><i class="fa-solid fa-location-dot" style="padding-right: 10px;"></i>Dasmariñas city, Cavite</p>
                        <p><i class="fa-regular fa-clock" style="padding-right: 10px;"></i>Open 24 Hours</p>
                    </div>
                    <div class="col-sm-4 p-3">
                        <div class="servicefooter">
                            <h5>Services</h5>
                            <p>Sort Clothes</p>
                            <p>Fold Clothes</p>
                            <p>Wash and Dry</p>
                            <p>Dry Cleaning</p>
                            <p>Pickup and Delivery</p>
                        </div>
                    </div>
                    <div class="col-sm-4 p-3">
                        <h5><i class="fa-solid fa-phone" style="padding-right: 10px;"></i>Contact us</h5>
                        <p>kenjerod@gmail.com</p>
                        <p>kenjerodgutierrez</p>
                        <p><i class="fa-solid fa-phone" style="padding-right: 10px;"></i>0943545657</p>
                        <div class="contactfooter">
                            <img src="/LaundryWebsite/Index/images/fb-logo.png" alt="LaunDryver">
                            <img src="/LaundryWebsite/Index/images/gmail-logo.png" alt="LaunDryver">
                        </div>
                        <h6 class="term">Terms and Conditon</h6>
                        <h6>Privacy Policy</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>

</style>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/66562ef889.js" crossorigin="anonymous"></script>
<script src="Mainsystem.js"></script>
<script>
    AOS.init();
</script>

</html>