<?php
header('Content-type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'functions.php';
    include '../config/connection.php';

    $result = get_food();
    echo json_encode($result);
} else {
    http_response_code(404);
}
