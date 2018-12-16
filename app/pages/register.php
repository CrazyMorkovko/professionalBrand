<?php
shouldBeGuests($USER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $passwordConf = mysqli_real_escape_string($connection, $_POST['password_confirmation']);
    $errors = [];

    if (strlen($name) < 1 || strlen($name) > 200) {
        $errors[] = 'Wrong name!';
    }

    if (strlen($password) < 6 || strlen($password) > 32) {
        $errors[] = 'Wrong password!';
    }

    if ($passwordConf !== $password) {
        $errors[] = 'Wrong password confirmation!';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Wrong email!';
    } else {
        $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            $errors[] = 'User already exists!';
        }
    }

    if (count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($connection,
            "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

        $_SESSION['user_id'] = mysqli_insert_id($connection);

        header('Location: /?page=profile');
        exit;
    }
}

include WORK_DIR . "/views/register.template.php";
