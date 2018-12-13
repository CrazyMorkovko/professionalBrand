<?php
define("WORK_DIR", __DIR__ . "/../");
include_once WORK_DIR . "app/config.php";

$connection = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
$page = $_GET['page'] ?? 'index';

if (file_exists(WORK_DIR . "app/pages/" . $page .  ".php")) {
    include WORK_DIR . "app/pages/" . $page .  ".php";
}
