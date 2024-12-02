<?php
session_start();
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../config/connection.php';
    include 'functions.php';

    try {

        $responseMessage = [];
        //inputs
        $username = $_POST['username'];
        $password = $_POST['password'];

        //regExp
        $regUsername = '/^[A-Za-z0-9]{8,}$/';
        $regPassword = '/^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

        $errors = 0;

        $errors += reg_check($regUsername, $username);
        $errors += reg_check($regPassword, $password);

        $passwordHas = md5($password);

        $userObj = sign_in($username, $passwordHas);
        if ($errors != 0) {
            http_response_code(422);
        } else {
            if ($userObj) {
                $_SESSION['user'] = $userObj;
                $responseMessage = ['message' => 'Usesno ste se ulogovali'];
                echo json_encode($responseMessage);
                http_response_code(200);
            }
        }
    } catch (PDOException $exception) {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}
