<?php
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        include '../config/connection.php';
        include 'functions.php';

        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $responseMessage = [];

        $regFullName = '/^[A-ZŽČĆŠĐ][a-zžčćšđ]{3,}(\s[A-ZŽČĆŠĐ][a-zžčćšđ]{3,})+$/';
        $regEmail = '/^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/';
        $regMessage = '/^.{8,}$/';

        $error = 0;

        $error += reg_check($regFullName, $fullName);
        $error += reg_check($regEmail, $email);
        $error += reg_check($regMessage, $message);

        if ($error == 0) {
            $insert = post_message($fullName, $email, $message);
            if ($insert) {
                $responseMessage = ['message' => 'Poruka je uspešno poslata.'];
                echo json_encode($responseMessage);
                http_response_code(201);
            } else {
                http_response_code(500);
            }
        }
    } catch (PDOException $exception) {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}