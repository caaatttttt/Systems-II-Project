<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from adminlogin where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: admin.php");
						die;
					}
				}
			}
			
			echo "Wrong Username or Password!";
		}else
		{
			echo "Wrong Username or Password!";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- Site Metas -->
  <link rel="icon" href="images/logo_favicon.jpg">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home | Delicioso Cupcakery & Coffee Shop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- fonts style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Gloria+Hallelujah&family=Mynerve&family=Poiret+One&family=Poppins&display=swap" rel="stylesheet">
 
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/login_style.css" rel="stylesheet">
</head>

<body>

  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
               <a class="navbar-brand" href="index.html">
              <span>
                Delicioso Cupcakery & Coffee Shop
              </span>
            </a>
            <img src="images/simple_logo.jpg" alt="logo image" class="header_logo">
          </div>
        </div>
      </div>
        
        <!-- Navigation -->
        <div class="navigation">
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="https://bakery-105196.square.site" target="_blank">Shop Online</a></li>
            <li><a href="wedding.php">Wedding Cakes</a></li>

            <li><a href="testing_gallery_display.php">Gallery</a></li>
            <li><a href="contact.html">Visit Us</a></li>
            </ul>        
        </div>
        
        <!-- Mobile Navigation -->
        <div class="mobile_navigation">
        <div class="mobile-container">
        <div class="topnav">
          <a href="#home" class="active_">
              <span>
                Delicioso Cupcakery & Coffee Shop
              </span>
            </a>
          <div id="myLinks">
            <a href="index.html">Home</a>
            <a href="https://bakery-105196.square.site" target="_blank">Shop Online</a>
            <a href="wedding.php">Wedding Cakes</a>
            <a href="testing_gallery_display.php">Gallery</a>
            <a href="contact.html">Visit Us</a>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars hamburger"></i>
          </a>
        </div>
        </div> 
        </div>
      </header>
      
      <!-- Hero Banner Image 
      <div class="hero_div">
        <img src="images/banner.png" alt="Banner Image of cake with logo" class="hero-img">
      </div>-->

    </div>
        
  <div class="main">
    <p class="signin" align="center">Admin Sign In </p>
    <form class="signin_form" method="post">
      <input class="username" name = "username" type="email" placeholder="Email">
      <input class="password" name= "password" type="password" placeholder="Password">
    <input class="submit_btn" type="submit" placeholder="Sign In"> 

        
        <p class="forgot_pass" align="center">Forgot Password?<a href="reset_pass.html">  Reset Password</a></p>

        </form>
    </div>
        
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>    

</body>
    
<!-- Footer -->
<footer>
  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>Contact Us
 
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <a href=" http://maps.google.com/?q=1001 W Main St, Clarksville AR 72830">1001 W Main St, Clarkville AR 72830</a>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
             <a href="tel:4792142537"> (479) 214-2537</a>
            <p>
              <i class="fa fa-envelope desktop" aria-hidden="true"></i>
              <a href="mailto:deliciosoandc@gmail.com">deliciosoandc@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              We are a small bakery and coffee shop located in downtown Clarksville, AR. We strive to bring the community the best-tasting speciality desserts! Come on by!
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_links">
            <h5>
              Links
            </h5>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="https://bakery-105196.square.site">
                  Shop our Menu
                </a>
              </li>
              <li>
                <a href="testing_gallery_display.php">
                  Gallery
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact
                </a>
              </li>
              <li>
                <a href="login.php">
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
  </section>
</footer>
</html>