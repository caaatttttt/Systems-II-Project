
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">   
</head>
<body>
    <form action="cake_products_db.php" method="POST" enctype="multipart/form-data">
        <label>Name of Cake:</label>
        <input type="text" name="Cake_name" required><br>
        
        Select Image File to Upload:
        <input type="file" name="file">
        
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>