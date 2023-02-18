<!DOCTYPE html>
<html>
<head>
</head>

    <body>
    
<?php
// Database configuration
$con = mysqli_connect("localhost","root","","cake_testing");


?>


<?php

// File upload path
$targetDir = "cake_products/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    
    $name = mysqli_real_escape_string($con,$_POST['Cake_name']);
    
    
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $con->query("INSERT into cake_products (`cake_name`, file_name, uploaded_on) VALUES ('$name', '".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
    
    
}

// Display status message
echo $statusMsg;
?>

        
<a href="testing_product.php">Return to Cake Listing Upload Page</a>
    
    </body>
</html>
