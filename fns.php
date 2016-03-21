<?php

require_once 'db_config.php';

function db_connect()
{
    // Create connection
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
}

function input_user($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function add_word($eng_word, $translate)
{
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Prepare and bind
    $stmt = $connect->prepare("INSERT INTO `users` (`user_name`, `user_surname`) VALUES (?, ?)");
    $stmt->bind_param("ss", $eng_word, $translate);
    $stmt->execute();
}