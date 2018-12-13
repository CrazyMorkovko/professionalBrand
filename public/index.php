<?php
$page = $_GET['page'] ?? 'index';

define("WORK_DIR", __DIR__ . "/../");

if (file_exists(WORK_DIR . "app/pages/" . $page .  ".php")) {
    include WORK_DIR . "app/pages/" . $page .  ".php";
}
