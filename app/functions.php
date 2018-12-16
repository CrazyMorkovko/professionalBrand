<?php
function loginById($id, $connection) {
    $result = mysqli_query($connection, "SELECT * FROM users WHERE id = '$id'");
    return mysqli_fetch_assoc($result);
}

function loginByEmail($email, $connection) {
    $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    return mysqli_fetch_assoc($result);
}

function authorizationRequired($USER) {
    if ($USER === null) {
        header('Location: /?page=login');
        exit;
    }
}

function shouldBeGuests($USER) {
    if ($USER !== null) {
        header('Location: /?page=profile');
        exit;
    }
}

function logOut() {
    $_SESSION['user_id'] = null;
    header('Location: /');
    exit;
}
