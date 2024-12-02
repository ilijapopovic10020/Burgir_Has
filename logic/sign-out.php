<?php
session_start();
if (isset($_SESSION['user'])) {
    try {
        unset($_SESSION['user']);
        header('Location: ../index.php');
    } catch (PDOException $exception) {
        http_response_code(500);
    }
}
?>