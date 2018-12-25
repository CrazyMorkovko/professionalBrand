<?php
authorizationRequired();

if (!\App\AuthManager::get()->user()->isAdmin()) {
    die("You are not authorized");
}
include WORK_DIR . "/views/admin.template.php";
