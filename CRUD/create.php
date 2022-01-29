<?php
require_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Create page</title>
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
    <h1>Add a product</h1>
    <form action="process.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <input type="description" class="form-control" id="description" placeholder="Enter description" name="description">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
  </div>
  <label for="category" class="form-label">Select Category:</label>
    <select class="form-select" id="category" name="category">
      <option value="phone">phone</option>
      <option value="computer">computer</option>
      <option value="tablet">tablet</option>
    </select>
    <br>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
    </div>
</form>

<div class="d-grid">
<button type="submit" class="btn btn-secondary" name="back" onClick="document.location.href='index.php'">Back to product list</button> 
</div>
</div>
</body>
</html>