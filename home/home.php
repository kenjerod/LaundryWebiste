
<?php 
    
    require_once '../class/session.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="bg">
        <div class="nav">
            <div class="logo">
                <img src="/LaundryWebsite/Index/images/logo.png" alt="Logo">
            </div>
            <div class="category">
                <span class="flexCategory">
                    <a href="/LaundryWebsite/LDsystem/Mainsystem.php"><p id="book">Book</p></a>
                    <a href=""><p>Category</p></a>
                    <a href=""><p>Contact Us</p></a>
                    <img src="/LaundryWebsite/Index/images/user.png" alt="user" >
                    <h6 id="log"><?php echo $_SESSION["username"] ?><i class="fa-solid fa-sort-down fa-lg"></i>
                        <div class="deliveryOffer"  id="del">
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
            <h1>Home</h1>
        </div>

        <!-------------------------------Popular Services---------------------------------->
<div class="container-sm">
    <div class="box"> 
      <div class="bubble">
        <img src="/LaundryWebsite/Index/images/bubbles.png" id="bubble1">
        <img src="/LaundryWebsite/Index/images/bubbles.png" id="bubble2">
        <img src="/LaundryWebsite/Index/images/bubbles.png" id="bubble3">
        <img src="/LaundryWebsite/Index/images/bubbles.png" id="bubble4">
      </div>
        <div class="pService">
            <h1>Popular Services</h1>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <div class="card" data-aos="zoom-in-right" data-aos-duration="2000">
                <img src="/LaundryWebsite/Index/images/sort.png" class="card-img-top" alt="Sorting Clothes" >
                <div class="card-body">
                  <h4 class="card-title">Hand Wash & Hand Dry</h4>
                  <p class="card-text">Hand washing is often used for delicate or specialty items such as silk, wool, or other sensitive fabrics that may be damaged by machine washing. It is also used for items that are heavily soiled or stained, as hand washing allows for more precise and thorough cleaning. Hand drying is an important step in the hand wash process, as it helps to prevent shrinkage, distortion, and other damage to the fabric. It is typically done by gently pressing a towel or other absorbent material against the wet fabric to remove excess water, and then allowing the item to air dry.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" data-aos="zoom-in-left" data-aos-duration="2000">
                <img src="/LaundryWebsite/Index/images/wash&dry.jpg" class="card-img-top" alt="Wash & Dry">
                <div class="card-body">
                  <h4 class="card-title">Carefully Wash & Dry</h4>
                  <p class="card-text">Machine washing and drying is the most common method for laundering clothing and other household items. It involves using a washing machine and dryer to clean and dry the items. Machine washing is typically done using a detergent and water, and the items are agitated in the machine to help remove dirt and stains. Machine drying is typically done using heat and a tumbling motion to remove moisture from the fabric.</p>               
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" data-aos="zoom-in-right" data-aos-duration="2000">
                <img src="/LaundryWebsite/Index/images/Fold.png" class="card-img-top" alt="fold and Pack">
                <div class="card-body">
                  <h4 class="card-title">Press/Iron</h4>
                  <p class="card-text">An iron, also known as a pressing iron or a steam iron, is a household appliance used to press clothing and other textiles to remove wrinkles and give them a smooth, neat appearance. Irons are typically used on garments after they have been laundered and dried, and are often used in conjunction with an ironing board, a special table or platform designed specifically for ironing clothes.</p>                  
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" data-aos="zoom-in-left" data-aos-duration="2000">
                <img src="/LaundryWebsite/Index/images/pickup.jpg" class="card-img-top" alt="Pick-up and Delivery">
                <div class="card-body">
                  <h4 class="card-title">Pick-up & Delivery</h4>
                  <p class="card-text">Using pick up and delivery service can also reduce the amount of driving and fuel consumption associated with transporting your laundry to and from a laundromat or dry cleaner, which can have environmental benefits. Overall, pick up and delivery service is a convenient and time-saving option that can be beneficial for busy individuals, those with mobility issues, and those who value the convenience and quality of professional laundry services.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------Looking For Pickup and Delivery---------------------------------->
<div class="pdBox">
    <div class="container-sm">
        <div class="smallcon">
            <h2>Looking for Pickup and Delivery Service?</h2> 
            <h2>Come & try our Services</h2> 
            <a href="/LaundryWebsite/LDsystem/Mainsystem.php" class="btn btn-primary">BOOK NOW</a>
        </div>
    </div>
</div>
<!-------------------------------gallery slide show---------------------------------->
<div class="container-sm">
  <div class ="slider">
      <div class="gallery">
        <h1>Gallery</h1>
      </div>
      <div class="sliderBox"  data-aos="zoom-in-up" data-aos-duration="3000">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
             <img src="/LaundryWebsite/Index/images/sort.png">
            </div>
            <div class="swiper-slide">
              <img src="/LaundryWebsite/Index/images/wash&dry.jpg">
            </div>
            <div class="swiper-slide">
              <img src="/LaundryWebsite/Index/images/pickup.jpg">
            </div>
            <div class="swiper-slide">
              <img src="/LaundryWebsite/Index/images/Fold.png">
            </div>
            <div class="swiper-slide">
              <img src="/LaundryWebsite/Index/images/bgImage.jpg">
            </div>
            <div class="swiper-slide">
              <img src="/LaundryWebsite/Index/images/bgImage1.jpg">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
</div>
<!-------------------------------Why you choose us---------------------------------->
<div class="container3">
  <div class="choose">
    <h1>Why you choose Us</h1>
    <div class="container-fluid mt-3" id="chooseUS">
      <div class="row">
        <div class="col-sm-4 p-3 ">
          <h2><img src="/LaundryWebsite/index/images/Experience.gif">Personalized Experience</h2>
          <p>You can always reach us for your laundry concerns. Call us and we are happy to help.</p>
        </div>
        <div class="col-sm-4 p-3">
          <h2><img src="/LaundryWebsite/index/images/pricing.gif">Pricing</h2>
          <p>The quality and cost of our service determine the price. Trust our pricing is reasonable and affordable.</p>
        </div>
        <div class="col-sm-4 p-3">
          <h2><img src="/LaundryWebsite/index/images/convenience.gif">Convenience</h2>
          <p>We simplify the booking request. Simply book through our Website for pick up request. Our friendly staff will contact you to confirm your request.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 p-3 ">
          <h2><img src="/LaundryWebsite/index/images/quality.gif">Quality</h2>
          <p>We take utmost care of your clothes, segregating the whites and colored clothes, as well as the dark colored ones to light. We use gentle yet effective cleaning detergents to ensure that it will not damage your clothes especially the delicates.</p>
        </div>
        <div class="col-sm-4 p-3">
          <h2><img src="/LaundryWebsite/index/images/Delivery.gif">Express Delivery</h2>
          <p>We offer a rush laundry service if required. We can deliver within 8-24 hours. However, due to the current Covid-19 pandemic, an additional 2 days added to the time frame for the isolation of clothes before washing.</p>
        </div>
        <div class="col-sm-4 p-3">
          <h2><img src="/LaundryWebsite/index/images/updated.gif">Order Update</h2>
          <p>We immediately notify you once the laundry is done and ready for delivery. Let us know your convenient time to accept the laundry so we can schedule accordingly.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-------------------------------Promo---------------------------------->
<div class="container2">
  <div class="promo">
    <div class="custom-shape-divider-top-1668047149">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <h1>More about our Delivery Services</h1>
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-sm-4 p-3 ">
          <h2><i class="fa-solid fa-shirt"></i>Apartment Delivery</h2>
          <p>Superior Laundry services apartments so you can save time using our pickup & delivery service for laundry and dry cleaning. We're the apartment amenity you never knew you had!</p>
          <a href="/LaundryWebsite/Delivery/ApartmentDelivery.html">Apartment Delivery<i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="col-sm-4 p-3">
          <h2><i class="fa-solid fa-house-chimney"></i>Home Delivery</h2>
          <p>Home laundry delivery is a service that allows individuals to have their laundry picked up from their home, cleaned and ironed, and then delivered back to their home at a later time. Home laundry delivery can be a convenient option for people who do not have the time or inclination to do their own laundry, It can also be a good choice for people with mobility issues or disabilities that make it difficult for them to do their own laundry. Overall, home laundry delivery can save time, reduce stress, and free up more time for other activities.</p>
          <a href="/LaundryWebsite/Delivery/HomeDelivery.html">Home Delivery<i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="col-sm-4 p-3">
          <h2><i class="fa-solid fa-building"></i>Office Delivery</h2>
          <p>Superior Laundry offers office delivery laundry and dry cleaning service so you can be more productive. You already work hard, so work smart to save time on laundry and dry cleaning</p>
          <a href="/LaundryWebsite/Delivery/OfficeDelivery.html">Office Delivery<i class="fa-solid fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
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
<!-------------------------------Scroll to top---------------------------------->
<div class="scrollTop" onclick="scrollToTop()"><i class="fa-solid fa-angles-up fa-2xl"></i></div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/66562ef889.js" crossorigin="anonymous"></script>
<script src="home.js"></script>
<script>
    AOS.init();
</script>
</html>