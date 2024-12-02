<?php
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        include '../config/connection.php';
        include 'functions.php';

        $emails = get_newsletter();
        var_dump($emails);
        $email = $_POST['email'];
        $regEmail = '/^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/';
        $error = 0;

        $error += reg_check($regEmail, $email);

        if (in_array($email, $emails))
            $error++;

        if ($error != 0) {
            http_response_code(422);
        } else {
            $insert = post_newsletter($email);
            if ($insert) {
                $responseMessage = ['message' => 'Uspešno poslato.'];
                echo json_encode($responseMessage);
                http_response_code(201);
            } else {
                http_response_code(500);
            }
        }
    } catch (PDOException $exception) {
        http_response_code(500);
    }
}
