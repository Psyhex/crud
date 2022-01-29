<?php
require_once 'db.php';
$id = (int)$_GET['show'];

$result = $link->query("SELECT * FROM products WHERE id=$id") or die($link->error());
$row = $result->fetch_array();
$name = $row['name'];
$description = $row['description'];
$price = $row['price'];
$category = $row['category'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Product <?php echo $name;?></title>
</head>
<body>  
        <div class="container p-5 my-5 bg-dark text-white">
        <h1>Item Name: <?php echo $name;?></h1>
        </div>
        <div class="container">
        <p>Item Description: <?php echo $description;?></p>
        <p>Item Price: <?php echo $price." €";?></p>
        <p>Item Category: <?php echo $category;?></p>
        <div class="d-grid">
<button type="submit" class="btn btn-secondary" name="back" onClick="document.location.href='index.php'">Back to product list</button> 
</div>
</div>
        

</body>
</html>