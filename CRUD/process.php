<?php
require_once 'db.php';
$id = 0;
session_start();

if (isset($_POST['add_product'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    
    $link->query("INSERT INTO products (name, description, price, category) VALUES('$name', '$description', '$price', '$category')") or
    die($link->error);

    $_SESSION['message'] = "Item added ";
    $_SESSION['msg_type'] = "success";

    header('location: create.php');
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $link->query("DELETE FROM products WHERE id=$id") or die($link->error());

    $_SESSION['message'] = "Item deleted";
    $_SESSION['msg_type'] = "danger";

    header('location: index.php');
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $link->query("SELECT * FROM products WHERE id=$id") or die($link->error());
    
        $row = $result->fetch_array();

        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $category = $row['category'];
}

if (isset($_POST['edit_product'])){
    
    $id = $_POST['id'];
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $link->query("UPDATE products SET name='$name', description='$description', price='$price', category='$category' WHERE id=$id") or die($link->error());
    header('location: index.php');
}
?>