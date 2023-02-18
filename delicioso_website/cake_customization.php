<?php
 
    // Connect to database
    $con = mysqli_connect("localhost","root","","cake_testing");
     
    // mysqli_connect("servername","username","password","database_name")
  
    // Get all the categories from category table

    $fillings = "SELECT * FROM `fillings`";
    $all_fillings = mysqli_query($con,$fillings);

    $size = "SELECT * FROM `cake_prices`";
    $all_cake_sizes = mysqli_query($con,$size);

    if(isset($_GET["cake_ID"]))
    {
        $data = $_GET["cake_ID"];
    }

    // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($_POST['submit']))
    {
        // Store the Category ID in a "id" variable
     // $cake_name_var = mysqli_real_escape_string($con,$_POST['Cake_Name']);
        $cake_size_var = mysqli_real_escape_string($con,$_POST['Size_ID']);
        $fillings_var = mysqli_real_escape_string($con,$_POST['Fillings_ID']);
        
        
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert =
        "INSERT INTO `order_cakes`(`cake_id`, `filling_id`, `size_price_id`)
            VALUES ('$data', '$fillings_var', '$cake_size_var')";
          
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
    }
?>
  
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">   
</head>
<body>

    
    <form method="POST">    
        
        <p>Cake Filling</p>
        <select name="Fillings_ID">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_fillings,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["filling_id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["filling"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <p>Cake Size</p>
                <select name="Size_ID">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_cake_sizes,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["size_price_id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["size"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <br>
</body>
</html>