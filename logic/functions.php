<?php
function calculate_relative_path()
{
    $url = $_SERVER["REQUEST_URI"];
    $array_url = explode("/", $url);
    $array = array_slice($array_url, -2, 1);
    $pen_element = end($array);

    if ($pen_element == 'pages') {
        $path = '../../';
    } else {
        $path = '';
    }

    return $path;
}

function reg_check($regex, $input)
{
    $error = 0;
    if ($input == "") {
        $error++;
    } else if (!preg_match($regex, $input)) {
        $error++;
    }

    return $error;
}

function sign_in($username, $password)
{
    global $conn;
    $query = 'select * from user u inner join role r on u.role_id = r.role_id where u.username = :username and u.password = :password';
    $select = $conn->prepare($query);
    $select->bindParam(':username', $username);
    $select->bindParam(':password', $password);
    $select->execute();

    return $select->fetch();
}

function sign_up($fullName, $email, $username, $password, $roleId)
{
    global $conn;

    $query = 'insert into user (fullname, username, email, password, role_id) values (:fullName, :username, :email, :password, :roleId)';

    $insert = $conn->prepare($query);
    $insert->bindParam(':fullName', $fullName);
    $insert->bindParam(':username', $username);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':password', $password);
    $insert->bindParam(':roleId', $roleId);

    $insert->execute();
    return $insert;
}

function get_food()
{
    global $conn;
    $query = 'select * from food f inner join categories c on f.category_id = c.category_id order by c.category_id asc';

    return $conn->query($query)->fetchAll();
}

function get_food_by_filter($query)
{
    global $conn;
    $query = $query;
    return $conn->query($query)->fetchAll();
}

function get_food_by_id($id)
{
    global $conn;
    $query = 'select * from food f inner join categories c on f.category_id = c.category_id where food_id = :id';
    $select = $conn->prepare($query);
    $select->bindParam(':id', $id);
    $select->execute();
    return $select->fetch();
}

function get_categories()
{
    global $conn;
    $query = 'select * from categories';

    return $conn->query($query)->fetchAll();
}

function get_newsletter()
{
    global $conn;
    $query = 'select * from newsletter';
    $select = $conn->query($query)->fetchAll();

    return $select;
}

function post_newsletter($email)
{
    global $conn;
    $query = 'insert into newsletter (newsletter_email) values(:email)';

    $insert = $conn->prepare($query);
    $insert->bindParam(':email', $email);

    $insert->execute();

    return $insert;
}

function post_message($fullname, $email, $message)
{
    global $conn;
    $query = 'insert into message (message_fullname, message_email, message_text) values(:fullname, :email, :message)';

    $insert = $conn->prepare($query);
    $insert->bindParam(':fullname', $fullname);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':message', $message);

    $insert->execute();

    return $insert;
}

function get_message()
{
    global $conn;
    $query = 'select * from message';
    return $conn->query($query)->fetchAll();
}

function post_survey($user_id, $rating, $message)
{
    global $conn;
    $query = 'insert into survey (user_id, rating, message) values(:user_id, :rating, :message)';

    $insert = $conn->prepare($query);
    $insert->bindParam(':user_id', $user_id);
    $insert->bindParam(':rating', $rating);
    $insert->bindParam(':message', $message);

    $insert->execute();

    return $insert;
}

function get_survey()
{
    global $conn;
    $query = 'select * from survey s inner join user u on s.user_id = u.user_id inner join ratings r on s.rating_id = r.rating_id';
    return $conn->query($query)->fetchAll();
}

function update_survey($user_id, $rating, $message)
{
    global $conn;
    $query = 'update survey set rating = :rating, message = :message where user_id = :user_id';
    $update = $conn->prepare($query);
    $update->bindParam(':rating', $rating);
    $update->bindParam(':message', $message);
    $update->bindParam(':user_id', $user_id);
    $update->execute();
    return $update;
}

function get_survey_by_user($user_id)
{
    global $conn;
    $query = 'select * from survey where user_id = :user_id';

    $select = $conn->prepare($query);
    $select->bindParam(':user_id', $user_id);
    $select->execute();
    return $select->fetch();
}

function get_ratings()
{
    global $conn;
    $query = 'select * from ratings';
    return $conn->query($query)->fetchAll();
}

function get_all_ratings_count()
{
    global $conn;
    $query = 'select count(*) as rating_total from survey';
    return $conn->query($query)->fetch();
}

function get_rating_count($id)
{
    global $conn;
    $query = 'select count(*) as rating_count from survey where rating_id = :id';

    $select = $conn->prepare($query);
    $select->bindParam(':id', $id);
    $select->execute();
    return $select->fetch();
}