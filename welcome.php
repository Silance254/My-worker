<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
       body{
            background-image: url(images/mboch.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <script src="javascript.js"></script>
    <i><h1 class="my-5">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>, Welcome to our site.</h1></i>
    <br><br>
   <center>
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/mboch.jpg" style="width:30%">
    <div class="text" style="color:white">Proceed and enroll yourself as a worker/employer or to choose a worker of your choice.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/mboch1.jpg" style="width:30%">
    <div class="text">Find your worker of choice with a few clicks!!</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/mboch2.jpg" style="width:30%">
    <div class="text">Find your employer of choice with a few clicks!!</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div><br><br><br>
    <h3 style="color:white;"><i>Click "Home" to proceed:</i></h3>
    <a href="Home.html" class="btn-btn-warning" style="color:blue;"><h3>Home</h3></a>
    <p style="color:white;">
        <i>You can always reset your password anytime.</i><br> <i>Click on...</i><a href="reset-password.php" class="btn btn-warning">Reset Password</a><i>...to reset your password.</i>
        <br><br>
        <p style="color:white"><i>You can sign out of your account when done.<br> Click...</i>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a> <i>...to sign out of your account.</i>
    </p>

</center>
<p><i>@SilaKibet<i></p>
</body>
</html>