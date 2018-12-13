<?php
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js'></script>";
// PHP
// - интерактивность

// HTTP
// GET /google.com?id=carrot -> $_GET (огранич. 1000 сим) - (CRUD: Read)
// POST -> $_POST - (CRUD: Update)
// PUT -> $_POST - (CRUD: Create)
// DELETE -> $_GET - (CRUD: Delete)
// OPTIONS -> Проверка доступности
// $_REQUEST ($_REQUEST == $_POST)

var_dump($_REQUEST);
var_dump($_GET);
var_dump($_POST);

$JSON_RESPONSE = json_decode(file_get_contents("php://input"), true);

var_dump($JSON_RESPONSE);

var_dump($_SERVER['REQUEST_METHOD']);




