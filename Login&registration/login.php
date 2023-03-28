<?php
   
    require_once 'init.php';
    require_once 'loginAcc.php';
    insertAcc();

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/66562ef889.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Login</title>
     
</head>
<body>
<div class="loginRegistration">
   <div class="background">
        <img src="/LaundryWebsite/Index/images/bubbles.png" class="shape">
        <img src="/LaundryWebsite/Index/images/bubbles.png" class="shape">
        <img src="/LaundryWebsite/Index/images/bubbles.png" class="shape"> 
   </div>
   <div class="goBack">
    <a href="/LaundryWebsite/Index/index.html"><i class="fa-regular fa-circle-left"></i>Go back</a>
</div> 
<div class="container animate__animated animate__bounceInDown" id="container">
	<div class="form-container sign-up-container">
		<form action="/LaundryWebsite/Login&registration/login.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
            <div class="upSign">
                <input type="text" name="names" placeholder="Username" required >
                <input type="email" name="emails" placeholder="Email" required >
                <input type="password" name="passwords" placeholder="Password" required >
                <button>Sign Up</button>
            </div>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="/LaundryWebsite/Login&registration/login.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
        <div class="inSign">
			<input type="text" name="username" placeholder="Username" required/>
			<input type="password" name="password" placeholder="Password" id="password" required/>
			<a href="#">Forgot your password?</a>
			<button name="sign-in">Sign In</button>
        </div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Ma'am/Sir!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
<!----Responsive Login------>
<div class="responsiveLogin">
<div class="goBack">
    <a href="/LaundryWebsite/Index/index.html"><i class="fa-regular fa-circle-left"></i>Go back</a>
</div> 
<form action="/LaundryWebsite/Login&registration/login.php" class="resForm animate__animated animate__bounceInUp" method="post">
        <h3>SIGN IN</h3>      
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password">

    <div class="button">
        <button name="sign-in">Log In</button>
        <p class="Sup"><a href="/LaundryWebsite/Login&registration/registration.php">Sign Up here</a> or Sign Up via </p>
    </div>
    
    <div class="social">
        <div class="go"><i class="fab fa-google"></i>  Google</div>
        <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
    </div>
</form> 
</div>
<script src="login.js"></script> 
</body>  
</html>