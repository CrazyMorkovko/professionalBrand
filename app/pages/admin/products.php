<?php

use App\DB;
use App\Entities\Product;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $products = DB::get()->query("SELECT * FROM products")
        ->fetchAll(PDO::FETCH_CLASS, Product::class);
    echo json_encode($products);
}
