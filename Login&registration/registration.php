<?php
    require_once 'init.php';
    insertAcc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/66562ef889.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Registration</title>

</head>
<body>
    <div class="responsiveLogin">
        <div class="goBack">
            <a href="/LaundryWebsite/Login&registration/login.php"><i class="fa-regular fa-circle-left"></i>Go back</a>
        </div> 
        <form class="resForm animate__animated animate__bounceInUp" method="post">
                <h3>CREATE ACCOUNT</h3>      
            <label for="username">Username</label>
            <input type="text" name="names" placeholder="Username" id="username" required>
            <label for="username">Email</label>
            <input type="text" name="emails" placeholder="Email" id="Email" required>
            <label for="password">Password</label>
            <input type="password" name="passwords" placeholder="Password" id="password" required>
        
            <div class="button">
                <button>Sign Up</button>
                <p class="Sup">Use your Email for Registration</p>
            </div>
            
            <div class="social">
                <div class="go"><i class="fab fa-google"></i>  Google</div>
                <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div>
        </form> 
        </div>  
</body>
</html>