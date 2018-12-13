<?php
$result = mysqli_query($connection, "SELECT * FROM products LIMIT 8");
$products = [];

while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
include WORK_DIR . "/views/index.template.php";
