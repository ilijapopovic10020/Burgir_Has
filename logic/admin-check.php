<?php
if ($_SESSION['user']->role_id == 2) {
    http_response_code(404);
    header('location: 404.php');
    die();
}