<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $arr = [];
    $result = mysqli_query($connection, 'SELECT * FROM reviews WHERE product_id = 1');
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }

    echo json_encode($arr);
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $review = json_decode(file_get_contents('php://input'), true);
    $text = mysqli_real_escape_string($connection, $review['review']);
    $name = mysqli_real_escape_string($connection, $review['name']);

    mysqli_query($connection, "INSERT INTO reviews (name, review, product_id) VALUES ('$name', '$text', 1)");

    $id = mysqli_insert_id($connection);
    $result = mysqli_query($connection, "SELECT * FROM reviews WHERE id = $id");
    $review = mysqli_fetch_assoc($result);

    echo json_encode([
        'result' => true,
        'review' => $review,
        'user_message' => 'Отзыв добавлен!'
    ]);
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = [];

    $id = mysqli_real_escape_string($connection, $_GET['id'] ?? null);
    if ($id) {
        $result = mysqli_query($connection, "SELECT * FROM reviews WHERE id = $id");
        if (mysqli_fetch_assoc($result)) {
            mysqli_query($connection, "UPDATE reviews SET state = 1 WHERE id = $id");
            $response['result'] = 1;
            echo json_encode($response);
            return;
        }
    }

    $response['error_message'] = 'Отзыв не найден.';
    echo json_encode($response);
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $response = [];

    $id = mysqli_real_escape_string($connection, $_GET['id'] ?? null);
    if ($id) {
        $result = mysqli_query($connection, "SELECT * FROM reviews WHERE id = $id");
        if (mysqli_fetch_assoc($result)) {
            mysqli_query($connection, "DELETE FROM reviews WHERE id = $id");
            $response['result'] = 1;
            echo json_encode($response);
            return;
        }
    }

    $response['error_message'] = 'Отзыв не найден.';
    echo json_encode($response);
}
