<?php
header('Content-type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../config/connection.php';
    include 'functions.php';

    try {

        $responseMessage = [];

        $rating = $_POST['rating'];
        $message = $_POST['message'];
        $user_id = $_POST['user_id'];
        $regMessage = '/^.{15,}$/';

        $error = 0;

        $error += reg_check($regMessage, $message);
        if ($rating == 0) {
            $error++;
        }

        if ($error != 0) {
            http_response_code(422);
        } else {
            $insert = post_survey($user_id, $rating, $message);
            if ($insert) {
                $responseMessage = ['message' => 'Hvala vam što ste posvetili vreme da nam pružite povratne informacije.'];
                echo json_encode($responseMessage);
                http_response_code(200);
            }
        }

    } catch (PDOException $e) {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}
?>