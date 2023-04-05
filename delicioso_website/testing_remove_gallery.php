<!DOCTYPE html>
<html lang="en">

<head>

  <link href="css/style.css" rel="stylesheet">
  <!-- fonts style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Gloria+Hallelujah&family=Mynerve&family=Poiret+One&family=Poppins&display=swap" rel="stylesheet">

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
    <div id="Cakes" class="tabcontent remove">
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

        <div  class="carousel-item <?= $actives; ?> remove_display">
           <img src="images/<?= $row['file_name'] ?>"  height="400">
           <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
           </form>
        </div>
        <?php $i++; } ?>
    </div>

    <div id="Cupcakes" class="tabcontent remove">
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

        <div class="carousel-item <?= $actives; ?> remove_display">
           <img src="images/<?= $row['file_name'] ?>"  height="400">
           <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
           </form>
        </div>
 

        <?php $i++; } ?>
    </div>
        
    <div id="Cookies" class="tabcontent remove">
    <form class="file_upload" action="" method="post" enctype="multipart/form-data">
        <p> Cookie Images:</p>
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
        <div class="carousel-item <?= $actives; ?> remove_display">
           <img src="images/<?= $row['file_name'] ?>"  height="400">
           <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
           </form>
        </div>
        <?php $i++; } ?>
    </div>

    <div id="Wedding_Cakes" class="tabcontent remove">
    <form class="file_upload" action="" method="post" enctype="multipart/form-data">
        <p> Wedding Cake Images:</p>
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
        <div class="carousel-item <?= $actives; ?> remove_display">
           <img src="images/<?= $row['file_name'] ?>"  height="400">
           <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
           </form>
        </div>
        <?php $i++; } ?>
    </div>

    <div id="Other" class="tabcontent remove">
    <form class="file_upload" action="" method="post" enctype="multipart/form-data">
        <p>Other Goodies Images:</p>
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
        <div class="carousel-item <?= $actives; ?> remove_display">
           <img src="images/<?= $row['file_name'] ?>"  height="400">
           <form method="post">                       
               <input type="hidden" value="<?php echo $row['file_name']?>" name="delete_file" >
               <input type="submit" value="Delete image" onclick="return confirm('Are you sure you want to delete the photo?');">
           </form>
        </div>
        <?php $i++; } ?>
    </div>

    <a href="testing_gallery_display.php" class="button large hpbottom goto_button">Go to Gallery</a>
        
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
            $insert = $con->query("INSERT into cookies (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
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
            $insert = $con->query("INSERT into cupcakes (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
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
            $insert = $con->query("INSERT into wedding_cake(file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
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
            $insert = $con->query("INSERT into other(file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
        
             if($insert){
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
    <script src="js/testing.js"></script>
    </body>
</html>
