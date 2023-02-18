<!DOCTYPE html>
<html>
    <head>
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo_favicon.jpg">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home | Delicioso Cupcakery & Coffee Shop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Poiret+One&display=swap" rel="stylesheet">
 <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
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

            <div class="user_option_box">
              <a href="login.html" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
              </a>
              <a href="" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
        
        <div id="navigation">
        <ul>
        <li><a href="index.html">Home</a></li>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Products</a>
            <div class="dropdown-content">
                <a href="cake_products_listing.php">Cakes</a>
                <a href="#">Cupcakes</a>
                <a href="#">Cookies</a>
                <a href="#">Wedding Cakes</a>
            </div>
        </li>
        <li><a href="display_gallery.php">Gallery</a></li>
        <li><a href="contact.html">Visit Us</a></li>
      </ul>
        
        
        
        </div>
    </header>
  </div>
        
        
        
        <?php
// Include the database configuration file
$con = mysqli_connect("localhost","root","","cake_testing");

// Get images from the database
$query = $con->query("SELECT * FROM gallery ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'images/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" width="20%" height="400px" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
    </body>
</html>
