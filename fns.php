<?php

require_once 'db_config.php';

function input_user($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function check_user($user_name, $user_surname)
{
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_name` = '$user_name'
            AND `user_surname` = '$user_surname'";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $connect->close();
}

function add_user($user_name, $user_surname)
{
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    //Prepare and bind
    $stmt = $connect->prepare("INSERT INTO `users` (`user_name`, `user_surname`) VALUES (?, ?)");
    $stmt->bind_param("ss", $user_name, $user_surname);
    $stmt->execute();
    $connect->close();
}