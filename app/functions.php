<?php

function loginByEmail($email, $connection) {
    $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    return mysqli_fetch_assoc($result);
}

function authorizationRequired() {
    if (\App\AuthManager::get()->guest()) {
        header('Location: /?page=login');
        exit;
    }
}

function shouldBeGuests() {
    if (!\App\AuthManager::get()->guest()) {
        header('Location: /?page=profile');
        exit;
    }
}

function logOut() {
    $_SESSION['user_id'] = null;
    header('Location: /');
    exit;
}
