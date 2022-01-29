<?php
require_once 'db.php';
require_once 'process.php';
$result = '';
if(isset($_POST['sort'])){
    $sort_category = $_POST['sort_category'];
    $result = $link->query("SELECT * FROM products WHERE category='$sort_category'") or die($link->error());
}else{
    $result = $link->query("SELECT * FROM products") or die($link->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Index Page</title>
</head>
<body>
<?php 
    if (isset($_SESSION['message'])):
?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php 
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif ?>
<div class="container p-5 my-5 border">
<p class="h1">Item list</p>
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
            <form action="index.php" method="POST">            
    <select class="form-select" id="category" name="sort_category">
    <option value="phone">phone</option>
    <option value="computer">computer</option>
    <option value="tablet">tablet</option>
    </select>
    <button type="submit" class="btn btn-primary" name="sort">Show only this category</button>
    </form>
</tr>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
            <?php 
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']." €"; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td>
                    <a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                    <a href="show.php?show=<?php echo $row['id'];?>" class="btn btn-danger">Show</a>
                </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>
<div class="d-grid">
    <button type="submit" class="btn btn-primary" onClick="document.location.href='create.php'">Add a product</button>
</div>
</div>
</body>
</html>