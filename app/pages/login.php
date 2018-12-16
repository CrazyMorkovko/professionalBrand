<?php
shouldBeGuests($USER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $errors = [];

    if (strlen($password) < 6 || strlen($password) > 32) {
        $errors[] = 'Wrong password!';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Wrong email!';
    }
    if (count($errors) === 0) {
        $user = loginByEmail($email, $connection);

        if (!$user || !password_verify($password, $user['password'])) {
            $errors[] = 'Wrong data!';
        } else {
            $_SESSION['user_id'] = $user['id'];

            header('Location: /?page=profile');
            exit;
        }
    }
}
include WORK_DIR . "/views/login.template.php";
