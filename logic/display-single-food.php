<?php
header('Content-type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'functions.php';
    include '../config/connection.php';
    $food_id = $_POST["food_id"];

    $result = get_food_by_id($food_id);
    echo json_encode($result);
} else {
    http_response_code(404);
}
