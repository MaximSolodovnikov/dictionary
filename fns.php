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
            WHERE `id` = '$user_id' AND `user_name` = '$user_name'
            AND `user_surname` = '$user_surname'";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        return $user_id;
    } else {
        return false;
    }
    $connect->close();
}

function get_user_id()
{
     $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    $sql = "SELECT `id` FROM `users`";
    $result = $connect->query($sql);
}

function add_user($user_name, $user_surname, $user_email)
{
   $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    //Prepare and bind
    if ($stmt = $connect->prepare("INSERT INTO `users` (`user_name`, `user_surname`, `email`) VALUES (?, ?, ?)")) {
        $stmt->bind_param("sss", $user_name, $user_surname, $user_email);
    } else {
        printf("Errormessage: %s\n", $mysqli->error);
    }
    $stmt->execute();
    $connect->close();
}

function check_login($user_name, $user_surname)
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
        while($row = $result->fetch_assoc()) {
            return $row["id"];
        }
    } else {
        return false;
    }
    $connect->close();
}

function check_email($user_email)
{
   $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_email` = '$user_email'";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        return false;
    } else {
        return true;
    }
    $connect->close();
}

function exit_user($user_name, $user_surname)
{
    $user = session_unset();
    $user_surname = session_unset();
}

function profile_recovery($user_email)
{
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_email` = '$user_email'";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo $row['user_email'];
        }
    } else {
        return false;
    }
    $connect->close();
}



function add_word($eng_word, $translate, $user_id)
{
    $connect = new mysqli(HOST, USER, PSWD, DB);
    
    //Check connection
    if ($connect->connect_error) {
        die("Connection failed <br>" . $connect->mysqli_error);
    }
    
    //Prepare and bind
    if ($stmt = $connect->prepare("INSERT INTO `dictionary` (`eng_word`, `translate`, `user_id`) VALUES (?, ?, ?)")) {
        $stmt->bind_param("ssi", $eng_word, $translate, $user_id);
    } else {
        printf("Errormessage: %s\n", $mysqli->error);
    }
    $stmt->execute();
    $connect->close();
}