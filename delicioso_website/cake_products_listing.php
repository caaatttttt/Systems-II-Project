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

</head>

    <body>
       
        <?php
// Include the database configuration file
$con = mysqli_connect("localhost","root","","cake_testing");

        
// Get images from the database
$query = $con->query("SELECT * FROM cake_products ORDER BY uploaded_on DESC");

$cake_name = $con->query("SELECT cake_id FROM cake_products");


if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'cake_products/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" width="20%" height="200px" />
        
    <a href="./cake_customization.php?cake_ID=<?php echo $row["cake_id"]?>" value="<?php echo $row["cake_id"];
          ?>">
        
         <?php echo $row["cake_name"];

        ?></a><br><br>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
    </body>
</html>
