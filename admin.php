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
  <link href="css/login_style.css" rel="stylesheet">
</head>

<body>

  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
               <a class="navbar-brand" href="admin.php">
              <span>
                Admin Dashboard
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
      <!-- Hero Banner Image 
      <div class="hero_div">
        <img src="images/wedding_banner.jpg" alt="Banner Image of cake with logo" class="hero-img" >
      </div>
      -->

    </div>
        
    <div class="home_page">
        
        
        
        <div class="row">
			<div class="col-lg-12">
				<div class="card card-default rounded-0 shadow">
                    <div class="card-header">
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="card-title">To Do List</h3>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-end">
                                <form method="POST"  action="form/add_task.php">
					                <input type="text" class="form-control" name="task" required/>
					                <button  name="add">Add Task</button>
				                </form>                            
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table id="orderList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>#</th>      
									<th>Task</th>	
									<th>Status</th> 
									<th>Action</th> 									
                                </tr></thead>
                                <tbody>
				    <?php
					

	                    include("connection.php");
	                    
					    $query = $con->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
					    $count = 1;
					    while($fetch = $query->fetch_array()){
				    ?>
				    <tr>
					    <td><?php echo $count++?></td>
					    <td><?php echo $fetch['task']?></td>
					    <td><?php echo $fetch['status']?></td>
					    <td colspan="2">
						    <center>
							    <?php
								    if($fetch['status'] != "Done"){
									    echo 
									    '<a href="form/update_task.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';
								    }
							    ?>
							     <a href="form/delete_task.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the task?');"><span class="glyphicon glyphicon-remove"></span></a>
						    </center>
					    </td>
				    </tr>
				    <?php
					    }
				    ?>
			    </tbody>
                            </table>
                        </div></div>
                    </div>
                </div>
			</div>
		</div>

        <div class="row">
			<div class="col-lg-12">
				<div class="card card-default rounded-0 shadow">
                    <div class="card-header">
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="card-title">Wedding Orders</h3>
                            </div>
                        
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table id="orderList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>First Name</th>      
									<th>Last Name</th>	
									<th>Phone Number</th> 
									<th>Email</th>
                                    <th>Date</th>
                                    <th># of Tiers</th>
                                    <th>Flavor</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr></thead>
                                <tbody>
				    <?php
					

	                    include("connection.php");
	                    
					    $query = $con->query("SELECT * FROM `wedding` ORDER BY `date` ASC");
					    $count = 1;
					    while($fetch = $query->fetch_array()){
				    ?>
				    <tr>
					    <td><?php echo $fetch['fname']?></td>
					    <td><?php echo $fetch['lname']?></td>
                        <td><?php echo $fetch['phone']?></td>
					    <td><?php echo $fetch['email']?></td>
                        <td><?php echo $fetch['date']?></td>
					    <td><?php echo $fetch['tier']?></td>
					    <td><?php echo $fetch['flavor']?></td>
					    <td><?php echo $fetch['comments']?></td>
					    <td colspan="2">
						    <center>
							    <?php
								    if($fetch['status'] != "Done"){
									    echo 
									    '<a href="form/update_cake.php?wedding_id='.$fetch['wedding_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';
								    }
							    ?>
							     <a href="form/delete_cake.php?wedding_id=<?php echo $fetch['wedding_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the task?');"><span class="glyphicon glyphicon-remove"></span></a>

						    </center>
					    </td>
				    </tr>
				    <?php
					    }
				    ?>
			    </tbody>
                            </table>
                        </div></div>
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