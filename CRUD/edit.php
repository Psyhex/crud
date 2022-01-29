<?php
require_once 'process.php';
require_once 'db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Update item page</title>
</head>
<body>

<div class="container p-5 my-5 border">
    <h1>Edit product</h1>
    <form action="process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name?>">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <input type="description" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo $description?>">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="price" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $price?>">
  </div>
  <label for="category" class="form-label">Select Category:</label>
    <select class="form-select" id="category" name="category">
      <option value="phone" <?php if($category == "phone"){echo "selected";}?>>phone</option>
      <option value="computer"<?php if($category == "computer"){echo "selected";}?>>computer</option>
      <option value="tablet" <?php if($category == "tablet"){echo "selected";}?>>tablet</option>
    </select>
    <br>
    
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="edit_product">Edit</button>
    </div>
</form>


</div>
</body>
</html>