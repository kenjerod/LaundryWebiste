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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="Mainsystem.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Categoty</title>
</head>

<body>
    <div class="bg">
        <div class="nav">
            <div class="logo">
                <a href="/LaundryWebsite/home/home.php"><img src="/LaundryWebsite/Index/images/logo.png" alt="Logo"></a>
            </div>
            <div class="category">
                <span class="flexCategory">
                    <a href="/LaundryWebsite/LDsystem/Mainsystem.php"><p>Book</p></a>
                    <p id="book" class="active">Category</p>
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