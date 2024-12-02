<?php
header("Content-type: application/json");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config/connection.php";
    include "functions.php";

    try {
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $popular = isset($_POST['popular']) ? $_POST['popular'] : 0;

        $query = "SELECT * FROM food f INNER JOIN categories c ON f.category_id = c.category_id";

        $conditions = [];

        if (!empty($keyword)) {
            $conditions[] = "(LOWER(f.food_name) LIKE LOWER('%$keyword%'))";
        }
        if (!empty($category)) {
            $conditions[] = "c.category_id = $category";
        }
        if (!empty($popular)) {
            $conditions[] = "f.food_popular = 1";
        }
        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }
        $foods = get_food_by_filter($query);

        echo json_encode($foods);
        http_response_code(200);
    } catch (PDOException $exception) {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}
?>