<?php
header('Content-type: application/json');
if (isset($_POST['fullName'])) {
    include '../config/connection.php';
    include 'functions.php';

    try {
        $responseMessage = [];

        //inputs
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['passwordConfirm'];

        //regExp
        $regFullName = '/^[A-ZŽČĆŠĐ][a-zžčćšđ]{3,}(\s[A-ZŽČĆŠĐ][a-zžčćšđ]{3,})+$/';
        $regEmail = '/^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/';
        $regUsername = '/^[A-Za-z0-9]{8,}$/';
        $regPassword = '/^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

        $errors = 0;

        $errors += reg_check($regFullName, $fullName);
        $errors += reg_check($regEmail, $email);
        $errors += reg_check($regUsername, $username);
        $errors += reg_check($regPassword, $password);

        if ($passwordConfirm == "") {
            $errors++;
        } else if (!preg_match($regPassword, $passwordConfirm)) {
            $errors++;
        } else if (!($password == $passwordConfirm)) {
            $errors++;
        }

        $passwordHas = md5($password);

        $roleId = 1;

        echo $passwordHas;
        if ($errors != 0) {
            http_response_code(422);
        } else {
            $insertUser = sign_up($fullName, $email, $username, $passwordHas, $roleId);
            if ($insertUser) {
                $responseMessage = ['message' => 'Uspesno kreiran korisnik.'];
                echo json_encode($responseMessage);
                http_response_code(201);
            }
        }
    } catch (PDOException $exception) {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}
