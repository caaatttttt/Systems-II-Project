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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- fonts style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Gloria+Hallelujah&family=Mynerve&family=Poiret+One&family=Poppins&display=swap" rel="stylesheet">

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
            <img src="images/simple_logo.jpg" alt="image of logo" class="header_logo">
          </div>
        </div>
      </div>
        
        <!-- Navigation -->
        <div class="navigation">
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="https://bakery-105196.square.site" target="_blank">Shop Online</a></li>
            <li><a href="index.html">Wedding Cakes</a></li>

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
        <!-- Gallery Navigation Bar -->
      <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'Cakes')" id="defaultOpen">Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cupcakes')">Cupcakes</button>
      <button class="tablinks" onclick="openTab(event, 'Cookies')">Cookies</button>
      <button class="tablinks" onclick="openTab(event, 'Wedding_Cakes')">Wedding Cakes</button>
      <button class="tablinks" onclick="openTab(event, 'Other')">Other Goodies</button>
    </div>    
<?php
               
    $conn = new mysqli("localhost","root","","gallery");
    $cakes = $conn->query("SELECT file_name FROM cakes"); 
    $cupcakes = $conn->query("SELECT file_name FROM cupcakes");
    $cookies = $conn->query("SELECT file_name FROM cookies");
    $wedding_cakes = $conn->query("SELECT file_name FROM wedding_cake");
    $other = $conn->query("SELECT file_name FROM other");
        
        

    if (array_key_exists('delete_file', $_POST)) {
        echo "<meta http-equiv='refresh' content='0'>";
        $filename = $_POST['delete_file'];
        $conn->query("DELETE FROM cakes WHERE file_name = '$filename'");
        $conn->query("DELETE FROM cupcakes WHERE file_name = '$filename'");
        $conn->query("DELETE FROM cookies WHERE file_name = '$filename'");
        $conn->query("DELETE FROM wedding_cake WHERE file_name = '$filename'");
        $conn->query("DELETE FROM other WHERE file_name = '$filename'"); 
    }
        

?>
    <!-- Cakes Section -->
    <div id="Cakes" class="tabcontent ">
        <form class="file_upload" action="" method="post" enctype="multipart/form-data">
            <p>Cake Images:</p>
            <input type="file" name="file">
            <input type="submit" name="cake" value="Upload">
        </form>
        <?php
            $i = 0;
            foreach($cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
            <div class="gallery_display">
               <img src="images/<?= $row['file_name'] ?>">
                <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
                </form>
            </div>
        <?php $i++; } ?>
    </div>

    <!-- Cupcakes Section -->
    <div id="Cupcakes" class="tabcontent ">
        <form class="file_upload" action="" method="post" enctype="multipart/form-data">
            <p>Cupcake Images:</p>
            <input type="file" name="file">
            <input type="submit" name="cupcake" value="Upload">
        </form>
        <?php
            $i = 0;
            foreach($cupcakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
            <div class="gallery_display">
               <img src="images/<?= $row['file_name'] ?>"  height="400">
                <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
                </form>
            </div>
        <?php $i++; } ?>
    </div>
        
    <!-- Cookies Section -->
    <div id="Cookies" class="tabcontent ">
        <form class="file_upload" action="" method="post" enctype="multipart/form-data">
            <p>Cookie Images:</p>
            <input type="file" name="file">
            <input type="submit" name="cookie" value="Upload">
        </form>
        <?php
            $i = 0;
            foreach($cookies as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
            <div class="gallery_display">
               <img src="images/<?= $row['file_name'] ?>"  height="400">
                <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
                </form>
            </div>
        <?php $i++; } ?>
    </div>

    <!-- Wedding Cakes Section -->
    <div id="Wedding_Cakes" class="tabcontent ">
        <form class="file_upload" action="" method="post" enctype="multipart/form-data">
            <p>Cake Images:</p>
            <input type="file" name="file">
            <input type="submit" name="wedding_cake" value="Upload">
        </form>
        <?php
            $i = 0;
            foreach($wedding_cakes as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
            <div class="gallery_display">
               <img src="images/<?= $row['file_name'] ?>"  height="400">
                <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
                </form>
            </div>
        <?php $i++; } ?>
    </div>

    <!-- Other Gppdies Section -->
    <div id="Other" class="tabcontent ">
        <form class="file_upload" action="" method="post" enctype="multipart/form-data">
            <p>Cake Images:</p>
            <input type="file" name="file">
            <input type="submit" name="other" value="Upload">
        </form>
        <?php
            $i = 0;
            foreach($other as $row) {
                $actives = '';
                if($i ==0){
                    $actives = 'active';
                } ?>
            <div class="gallery_display">
               <img src="images/<?= $row['file_name'] ?>"  height="400">
                <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
                </form>
            </div>
        <?php $i++; } ?>
    </div>
        
<?php       
if(isset($_POST["cake"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into cakes (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
                        echo "<meta http-equiv='refresh' content='0'>";
                echo '<script>alert("Image added successfully to Cakes Gallery.")</script>';
            }else{
                echo '<script>alert("File upload failed, please try again.")</script>';
            } 
        }else{
        
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }else{
        echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")</script>';
    }
}
        
if(isset($_POST["cookie"]) && !empty($_FILES["file"]["name"])){
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into cookies (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
                         echo "<meta http-equiv='refresh' content='0'>";
                echo '<script>alert("Image added successfully to Cookies Gallery.")</script>';
            }else{
                echo '<script>alert("File upload failed, please try again.")</script>';
            } 
        }else{
        
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }else{
        echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")</script>';
    }
}

if(isset($_POST["cupcake"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into cupcakes (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
                         echo "<meta http-equiv='refresh' content='0'>";
                echo '<script>alert("Image added successfully to Cupcakes Gallery.")</script>';
            }else{
                echo '<script>alert("File upload failed, please try again.")</script>';
            } 
        }else{
        
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }else{
        echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")</script>';
    }
}
        
if(isset($_POST["wedding_cake"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into wedding_cake(file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
                         echo "<meta http-equiv='refresh' content='0'>";
                echo '<script>alert("Image added successfully to Wedding Cakes Gallery.")</script>';
            }else{
                echo '<script>alert("File upload failed, please try again.")</script>';
            } 
        }else{
        
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }else{
        echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")</script>';
    }
}
        
if(isset($_POST["other"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into other(file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
                         echo "<meta http-equiv='refresh' content='0'>";
                echo '<script>alert("Image added successfully to Other Goodies Gallery.")</script>';
            }else{
                echo '<script>alert("File upload failed, please try again.")</script>';
            } 
        }else{
        
            echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        }
    }else{
        echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")</script>';
    }
}
?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
