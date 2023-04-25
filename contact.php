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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <div class="hero_area">
    <!-- Header Section -->
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
  </div>
    
    <!-- Hero Image --> 
    <div class="hero_div">
        <img src="images/building.jpg" alt="Banner image of front of bakery shop" class="hero-img">
    </div>
    
    <!-- Contact -->
    <div class="gallery_page">
    <div class="container-fluid contact_area">
    <div class="col-md-6">
        <div class="contact_text">
            <p>Not sure about what you want? Need something custom made just for you? Want to just hang out and enjoy a cupcake and coffee? Come on by! We strive to bring you the best-tasting custom cakes, cupcakes, and specialty desserts! We are located at <a href=" http://maps.google.com/?q=1001 W Main St, Clarksville AR 72830" target="_blank">1001 W Main St, Clarkville AR 72830.</a></p>
            <p>You can also reach us through text or call: text or call us at<a href="tel:4792142537" target="_blank"> (479) 214-2537</a>!</p>
             <p>We are also very active on <a href="https://www.facebook.com/calicaliclark/" target="_blank">Facebook</a>, give us a follow!</p>
        </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="md-col-4">
        <div class="contact_image">
            <img src="images/other8.jpg" alt="image of cup of coffee">
        </div>
    </div>
    </div>
    
    <!-- Mobile-Device Contact -->
    <div class="mobile-contact">
        <section class="contact-area-mobile">
            <div class="container">
            <div class="contact-text-mobile">
                <p>Not sure about what you want? Need something custom made just for you? Want to just hang out and enjoy a cupcake and coffee? Come on by! We strive to bring you the best-tasting custom cakes, cupcakes, and specialty desserts! We are located at <a href=" http://maps.google.com/?q=1001 W Main St, Clarksville AR 72830" target="_blank">1001 W Main St, Clarkville AR 72830.</a></p>
                <p>You can also reach us through text or call: text or call us at<a href="tel:4792142537" target="_blank"> (479) 214-2537</a>!</p>
                 <p>We are also very active on <a href="https://www.facebook.com/calicaliclark/" target="_blank">Facebook</a>, give us a follow!</p>
            </div>
            </div>
        </section>
        <section class="business-hours-mobile">
            <div class="container-fluid">
                <div class="hours-mobile">
                <div class="top-hours-mobile>"><h4>Shop Hours</h4></div><hr>      
                <div class="bottom-hours-mobile">
                    <ul class="list-unstyled ">
                        <li>Sunday <span class="pull-right">Closed</span></li>
                        <li>Monday <span class="pull-right">7am-11am</span></li>
                        <li>Tuesday - Saturday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
                    </ul>
                </div>
                </div>
          </div>
      </section>
      
      <section class="map-mobile">
        <div class="container-fluid mobile-map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.3526627064616!2d-93.47525184880442!3d35.470817348992625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87cc6ba70d2eeea1%3A0x179e67437a28f3a6!2s1001%20W%20Main%20St%2C%20Clarksville%2C%20AR%2072830!5e0!3m2!1sen!2sus!4v1676434844454!5m2!1sen!2sus" class="mobile-map"></iframe>
          </div>
      </section>
      </div>
      
    <!-- Business Hours -->
    <div class="container demo-bg">
        <div class="row">
            <div class="col-sm-4">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.3526627064616!2d-93.47525184880442!3d35.470817348992625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87cc6ba70d2eeea1%3A0x179e67437a28f3a6!2s1001%20W%20Main%20St%2C%20Clarksville%2C%20AR%2072830!5e0!3m2!1sen!2sus!4v1676434844454!5m2!1sen!2sus" class="map"></iframe>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
    
            <div class="business-hours">
            <h2 class="title">Shop Hours</h2>
            <ul class="list-unstyled opening-hours ">
                <li>Sunday <span class="pull-right">Closed</span></li>
                <li>Monday <span class="pull-right">7am-11am</span></li>
                <li>Tuesday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
                <li>Wednesday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
                <li>Thursday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
                <li>Friday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
                <li>Saturday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
            </ul>    
            <ul class="list-unstyled opening-hours_tablet">
                <li>Sunday <span class="pull-right">Closed</span></li>
                <li>Monday <span class="pull-right">7am-11am</span></li>
                <li>Tuesday - Saturday <span class="pull-right">7am-1pm, 3pm-5:30pm</span></li>
            </ul>
            </div>
            </div>
        </div>
    </div>
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