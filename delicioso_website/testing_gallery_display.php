<?php
    $conn = new mysqli("localhost","root","","gallery");
    $cakes = $conn->query("SELECT file_name FROM cakes");
    $cupcakes = $conn->query("SELECT file_name FROM cupcakes");
    $cookies = $conn->query("SELECT file_name FROM cookies");
    $wedding_cakes = $conn->query("SELECT file_name FROM wedding_cake");
    $other = $conn->query("SELECT file_name FROM other");
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

  
<!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- fonts style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Gloria+Hallelujah&family=Mynerve&family=Poiret+One&family=Poppins&display=swap" rel="stylesheet">


 <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet">

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
               <a class="navbar-brand" href="index.html">
              <span>
                Delicioso Cupcakery & Coffee Shop
              </span>
            </a>
           <img src="images/simple_logo.jpg" class="header_logo">
          </div>

        </div>
      </div>
        
        <div class="navigation">
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">Shop Online</a></li>
            <li><a href="index.html">Wedding Cakes</a></li>

            <li><a href="testing_gallery_display.php">Gallery</a></li>
            <li><a href="contact.html">Visit Us</a></li>
            </ul>
        </div>
        <div class="mobile_navigation">
        <!-- Simulate a smartphone / tablet -->
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
            <a href="#wedding_cakes">Wedding Cakes</a>
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
  </div>    
    <div class="gallery_page">
    <!-- Gallery Navigation Bar -->
    <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'Cakes')" id="defaultOpen">Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cupcakes')">Cupcakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cookies')">Cookies</button>
      <button class="tablinks" onclick="openTab(event, 'Wedding_Cakes')">Wedding Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Other')">Other Goodies</button>
    </div>

    
    <!-- Cakes Section -->
    <div id="Cakes" class="tabcontent">
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
    <h2 id="cakes">Cakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    <!-- Gallery Display -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>" >
        <?php $i++; } ?>
    </div>
    </div>

    <!-- Cupcake Section -->
    <div id="Cupcakes" class="tabcontent">
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
    <h2 id="cupcakes">Cupcakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    <!-- Gallery Display -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($cupcakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>" >
        <?php $i++; } ?>
    </div>
    </div>

    <!-- Cookie Section -->
    <div id="Cookies" class="tabcontent">
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
    <h2 id="cookies">Cookies</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    <!-- Gallery Display -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($cookies as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>"  height="400">
        <?php $i++; } ?>
    </div>
    </div>

    <!-- Wedding Cake Section -->
    <div id="Wedding_Cakes" class="tabcontent">
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
    <h2 id="wedding_cakes">Wedding Cakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    <!-- Gallery Display -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($wedding_cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>">
        <?php $i++; } ?>
    </div>
    </div>

    <!-- Other Goodies Section -->
    <div id="Other" class="tabcontent">
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
    <h2 id="other">Other Goodies</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    <!-- Gallery Display -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($other as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>"  height="400">
        <?php $i++; } ?>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/testing.js"></script>
    
      <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
<footer>
  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
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
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              We are a small bakery and coffee shop located in downtown Clarksville, AR. We strive to bring the community the best-tasting speciality desserts! Come on by!
            </p>
          </div>
        </div>
        <div class="col-md-3">
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
                <a href="about.html">
                  Shop our Menu
                </a>
              </li>
              <li>
                <a href="product.html">
                  Gallery
                </a>
              </li>
              <li>
                <a href="why.html">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box"><a href="https://www.facebook.com/calicaliclark/" target="_blank">Connect With Us on Facebook!
                </a>
              <a href="https://www.facebook.com/calicaliclark/" target="_blank">
                <i class="fa fa-facebook facebook" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->
    </footer>
</html>
