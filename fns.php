<?php
function db_connect()
{
    $host = "localhost";
    $user = "salomuG";
    $pswd = "salomuG";
    $db = "dictionary";
    
    // Create connection
    $connect = mysqli_connect($host, $user, $pswd, $db);
    
    if (!$connect) {
        die("Connection failed <br>" . mysqli_connect_error());
    }
}

function input_user($data)
{
    /*$data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);*/
    $data = htmlspecialchars($data);

    return $data;
}

function add_word()
{
    
}