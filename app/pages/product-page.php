<?php
$id = mysqli_real_escape_string($connection, $_GET['id'] ?? null);

if (!$id) {
    die('Page not found!');
}

$result = mysqli_query($connection, "SELECT products.id, products.name, products.image, products.price, 
       products.description, products.category_id, categories.name AS category_name FROM products LEFT JOIN categories 
         ON category_id = categories.id WHERE products.id= $id");
$product = mysqli_fetch_assoc($result);

if (!$product) {
    die('Page not found!');
}
include WORK_DIR . "/views/product-page.template.php";
