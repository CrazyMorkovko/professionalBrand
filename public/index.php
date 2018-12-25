<?php
session_start();
define("WORK_DIR", __DIR__ . "/../");

include WORK_DIR . "vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(WORK_DIR);
$dotenv->load();
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

include_once WORK_DIR . "app/config.php";
include_once WORK_DIR . "app/functions.php";

\App\DB::setConfig($config);

$connection = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
mysqli_set_charset($connection, 'utf8');

$page = $_GET['page'] ?? 'index';

if (file_exists(WORK_DIR . "app/pages/" . $page .  ".php")) {
    include WORK_DIR . "app/pages/" . $page .  ".php";
}
