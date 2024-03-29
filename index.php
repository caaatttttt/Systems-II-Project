<?php 

session_start();

	include("connection.php");
	include("functions.php");
	
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
            <li><a href="index.php">Home</a></li>
            <li><a href="https://bakery-105196.square.site" target="_blank">Shop Online</a></li>
            <li><a href="admin.php">Admin Dashboard</a></li>
            <li><a href="testing_remove_gallery.php">Gallery Update</a></li>
            <li><a href="contact.php">Visit Us</a></li>
            </ul>        
        </div>
        
        <!-- Mobile Navigation -->
        <div class="mobile_navigation">
        <div class="mobile-container">
        <div class="topnav">
          <a href="admin.php" class="active_">
              <span>
                Admin Dashboard
              </span>
            </a>
          <div id="myLinks">
            <a href="index.php">Home</a>
            <a href="https://bakery-105196.square.site" target="_blank">Shop Online</a>
            <a href="admin.php">Admin Dashboard</a>
            <a href="testing_remove_gallery.php">Gallery Update</a>
            <a href="contact.php">Visit Us</a>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars hamburger"></i>
          </a>
        </div>
        </div> 
        </div>
      </header>
      <!-- Hero Banner Image -->
      <div class="hero_div">
        <img src="images/banner.png" alt="Banner Image of cake with logo" class="hero-img">
      </div>
      
    </div>
    
    <div class="home_page">
    <section class="specialties">
      <section class="product_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Our Specialties<hr>
            </h2>         
              <p>We strive to provide the community with the best-tasting speciality desserts</p>
          </div>
          <div class="row">
            <div class="col-sm-3 col-lg-3">
              <div class="box">
                <div class="img-box">
                  <img src="images/cake.jpg" alt="image of a cake">
                </div>
                <div class="detail-box">
                 <a href="https://bakery-105196.square.site/#3"  target="_blank"><h5>Cakes</h5></a>
                  </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
              <div class="box">
                <div class="img-box">
                  <img src="images/cupcake17.jpg" alt="image of a cupcake">
                </div>
                <div class="detail-box">
                    <a href="https://bakery-105196.square.site/#2"  target="_blank"><h5>Cupcakes</h5></a>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-lg-3">
              <div class="box">
                <div class="img-box">
                  <img src="images/cookie1.jpg" alt="image of a cookie">
                </div>
                <div class="detail-box">
                 <a href="https://bakery-105196.square.site/#4"  target="_blank"><h5>Cookies</h5></a>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-lg-3">
              <div class="box">
                <div class="img-box">
                  <img src="images/wedding_cake14.jpg" alt="image of a wedding cake">
                </div>
                <div class="detail-box">
                 <a href="#"><h5>Wedding Cakes</h5></a>
                </div>
              </div>
            </div>
          </div>
        </div> 
       </section>
    </section> 

    <div class="mobile_specialties">
        <div class="heading_container heading_center">
            <h2>
              Our Specialties
            </h2>         
        </div>
        <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-dark slider-nav-visible slider-nav-autoplay  slider-nav-autopause">
        <ul class="slider-container py-4">
            <li class="slide-visible">
                <div class="top_img">
                    <div class="ratio start_img">
                        <img src="images/cake.jpg" class="card-img-top start" loading="lazy" alt="image of a cake">
                    </div>
                    <div class="card-body p-3 p-xl-5 start_body">
                        <div><a href="https://bakery-105196.square.site/#3" class="btn btn-primary home_btns">Cakes</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="top_img">
                    <div class="ratio">
                        <img src="images/cupcake2.jpg" class="card-img-top" loading="lazy" alt="Image of a cupcake">
                    </div>
                    <div class="card-body p-3 p-xl-5">
                        <a href="https://bakery-105196.square.site/#2" class="btn btn-primary home_btns">Cupcakes</a>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="top_img">
                    <div class="ratio">
                        <img src="images/cookie13.jpg" class="card-img-top" loading="lazy" alt="image of a cookie">
                    </div>
                    <div class="card-body p-3 p-xl-5">
                        <a href="https://bakery-105196.square.site/#4" class="btn btn-primary home_btns">Cookies</a>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="top_img">
                    <div class="ratio end_img">
                        <img src="images/wedding_cake14.jpg" class="card-img-top" loading="lazy" alt="image of a wedding cake">
                    </div>
                    <div class="card-body  end_body p-3 p-xl-5">
                        <a href="#" class="btn btn-primary home_btns">Wedding Cakes</a>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="slider-nav" aria-label="Go left"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
    </div>
    </div>

    <!-- About Us -->
    <section class="about-us">
        <div class="about">
          <img src="images/owners.jpg" class="pic" alt="image of owners Maria Torres and Otilia Espinoza">
          <div class="text">
            <h2>Who We Are</h2>
              <h5><span class="owner_name">Maria Torres</span> & <span class="owner_name">Otilia Espinoza</span></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
          </div>
        </div>
      </section>

    <!-- About Us Mobile -->
    <section class="about-us-mobile">
        <div class="container">
        <div class="text">
            <h2>Who We Are</h2>
              <h5><span class="owner_name">Maria Torres</span> & <span class="owner_name">Otilia Espinoza</span></h5>
               <img src="images/owners.jpg" alt="image of owners Maria Torres and Otilia Espinoza" class="pic">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
        </div>
        </div>
    </section>
    
    <!-- Reviews -->
    <section class="reviews">
        <div class="heading_container heading_center">
            <h2>
                What Our Customers Say
            </h2>
        </div>
        <div class="container-fluid">
            <iframe src='https://widgets.sociablekit.com/google-reviews/iframe/120956' ></iframe>
        </div>
    </section>
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
                <a href="index.php">
                  Home
                </a>
              </li>
              <li>
                <a href="https://bakery-105196.square.site">
                  Shop our Menu
                </a>
              </li>
              <li>
                <a href="admin.php">
                  Admin Dashboard
                </a>
              </li>
              <li>
                <a href="testing_remove_gallery.php">
                  Gallery Update
                </a>
              </li>
              <li>
                <a href="contact.php">
                  Contact
                </a>
              </li>
              <li>
                <a href="index.html">
                  Logout
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