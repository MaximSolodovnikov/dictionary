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
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    
    return $data;
}