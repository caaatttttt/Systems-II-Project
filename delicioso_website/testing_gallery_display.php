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
    </header>     
  </div>    
    <!-- Gallery Navigation Bar -->
    <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'Cakes')" id="defaultOpen">Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cupcakes')">Cupcakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cookies')">Cookies</button>
      <button class="tablinks" onclick="openTab(event, 'Wedding_Cakes')">Wedding Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Other')">Other Goodies</button>
    </div>

    <!-- Cake Carousel Section -->
    <div id="Cakes" class="tabcontent">
    <div class="container-fluid">
    <div class="row justify-content-center mb-2 " >
    <div class="col-lg-3">
        <!-- Pull Images From Database and Display in Bootstrap Carousel -->
        <div id="cakes" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <?php
                $i = 0;
                foreach($cakes as $row) {
                    $actives = '';
                    if($i ==0){
                        $actives = 'active';
                    }?>
                    <div  class="carousel-item <?= $actives; ?>">
                        <img src="images/<?= $row['file_name'] ?>">
                    </div>
                    <?php $i++;
                } ?>
        </div>

        <!-- Left and Right Controls -->
        <a class="carousel-control-prev" href="#cakes" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#cakes" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </div>
        <div class="col-lg-1"></div>
    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="col-lg-3">
    <div class="heading_container heading_center">
        <h2 id="cakes">Cakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
    </div>
    </div>
    </div>
    <div class="gallery_display">
        <?php
            $i = 0;
            foreach($cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>"  height="400">
        <?php $i++; } ?>
    </div>
    </div>

    <!-- Cupcake Carousel Section -->
    <div id="Cupcakes" class="tabcontent">
    <!--<div class="container-fluid">
    <div class=" row justify-content-center mb-2" >
    <div class="col-lg-3">
        <!-- Pull Images From Database and Display in Bootstrap Carousel -->
        <div id="cupcakes" class="carousel slide" data-ride="carousel">
       <!-- <div class="carousel-inner" >
            <?php
                $i = 0;
                foreach($cupcakes as $row) {
                    $actives = '';
                    if($i ==0){
                        $actives = 'active';
                    }?>
                    <div  class="carousel-item <?= $actives; ?>">
                        <img src="images/<?= $row['file_name'] ?>">
                    </div>
                    <?php $i++;
                } ?> 
        </div> -->

        <!-- Left and Right Controls -->
       <!-- <a class="carousel-control-prev" href="#cupcakes" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#cupcakes" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div> 
    </div> -->
        
     <!-- Text Section --> 
    <!-- <div style="word-wrap:break-word" class="col-lg-3"> -->
    <div style="word-wrap:break-word" class="gallery_text">
    <div class="heading_container heading_center">
        <h2 id="cakes">Cupcakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
  <!--  </div>
    </div> -->
        <div class="gallery_display">
        <?php
            $i = 0;
            foreach($cupcakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>"  height="400">
        <?php $i++; } ?>
    </div>
        </div> 
    </div>

    <!-- Cookies Carousel Section -->
    <div id="Cookies" class="tabcontent">
    <div class="container-fluid">
    <div class=" row justify-content-center mb-2 carousel_section" >
    <div class="col-lg-3">
        <!-- Pull Images From Database and Display in Bootstrap Carousel -->
        <div id="cookies" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <?php
                $i = 0;
                foreach($cookies as $row) {
                    $actives = '';
                    if($i ==0){
                        $actives = 'active';
                    }?>
                <div class="carousel-item <?= $actives; ?>">
                  <img src="images/<?= $row['file_name'] ?>" width="100%" height="400">
                </div>
                <?php $i++;
                } ?>
        </div>

        <!-- Left and Right Controls -->
        <a class="carousel-control-prev" href="#cookies" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#cookies" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </div>

    <!-- Text Section --> 
    <div style="word-wrap:break-word" class="col-lg-3">
    <div class="heading_container heading_center">
        <h2 id="cakes">Cookies</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
    </div>
    </div>
    </div>
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


    <!-- Wedding Cake Carousel Section -->
    <div id="Wedding_Cakes" class="tabcontent">
    <div class="container-fluid">
    <div class=" row justify-content-center mb-2 carousel_section" >
    <div class="col-lg-3">
        <!-- Pull Images From Database and Display in Bootstrap Carousel -->
        <div id="wedding_cakes" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <?php
                $i = 0;
                foreach($wedding_cakes as $row) {
                    $actives = '';
                    if($i ==0){
                        $actives = 'active';
                    }?>
                <div  class="carousel-item <?= $actives; ?>">
                  <img src="images/<?= $row['file_name'] ?>" width="100%" height="400">
                </div>
                <?php $i++;
                } ?>
        </div>

        <!-- Left and Right Controls -->
        <a class="carousel-control-prev" href="#wedding_cakes" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#wedding_cakes" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </div>
        
    <!-- Text Section -->    
    <div style="word-wrap:break-word" class="col-lg-3">
    <div class="heading_container heading_center">
        <h2 id="cakes">Wedding Cakes</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    </div>
    </div>
     <!--   <div class="gallery_display">
        <?php
            $i = 0;
            foreach($wedding_cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
               <img src="images/<?= $row['file_name'] ?>"  height="400">
        <?php $i++; } ?>
    </div> -->
    </div>

    <!-- Other Carousel Section -->
    <div id="Other" class="tabcontent">
    <div class="container-fluid">
    <div class=" row justify-content-center mb-2 carousel_section" >
    <div class="col-lg-3">
        <!-- Pull Images From Database and Display in Bootstrap Carousel -->
        <div id="other" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <?php
                $i = 0;
                foreach($other as $row) {
                    $actives = '';
                    if($i ==0){
                        $actives = 'active';
                    }?>
                <div  class="carousel-item <?= $actives; ?>">
                  <img src="images/<?= $row['file_name'] ?>" width="100%" height="400">
                </div>
                <?php $i++;
                } ?>
        </div>

        <!-- Left and Right Controls -->
        <a class="carousel-control-prev" href="#other" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#other" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </div>
    
    <!-- Text Section -->      
    <div style="word-wrap:break-word" class="col-lg-3">
    <div class="heading_container heading_center">
        <h2 id="cakes">Other Goodies</h2>
    </div><hr><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
    </div>
    </div>
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

    
        
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/testing.js"></script>
</body>
  
</html>
