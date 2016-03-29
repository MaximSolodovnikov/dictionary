<?php  require_once 'db_config.php';

function db_connect()
{
    $connect = mysqli_connect(HOST, USER, PSWD, DB);
    if (!$connect) {
        return die("Error to connect to DB <br>" . mysqli_error());
    } else {
        return $connect;
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

function check_user($user_name, $user_surname)
{
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_name` = '$user_name'
            AND `user_surname` = '$user_surname'";
    $result = mysqli_query(db_connect(), $sql);
    
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function add_user($user_name, $user_surname, $user_email)
{ 
    $ins = "INSERT INTO `users` (`user_name`, `user_surname`, `email`)
            VALUES ('$user_name', '$user_surname', '$user_email')";
    $result = mysqli_query(db_connect(), $ins);
}

function check_login($user_name, $user_surname)
{
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_name` = '$user_name'
            AND `user_surname` = '$user_surname'";
    $result = mysqli_query(db_connect(), $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            return $row["id"];
        }
    } else {
        return false;
    }
}

function check_email($user_email)
{
    $sql = "SELECT `user_name`, `user_surname`, `email`
            FROM `users`
            WHERE `email` = '$user_email'";
    $result = mysqli_query(db_connect(), $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $data_user[] = $row;
        }
        return $data_user;
    } else {
        return false;
    }
}

function exit_user($user_name, $user_surname)
{
    $user = session_unset();
    $user_surname = session_unset();
}
/*
function profile_recovery($user_email)
{
    db_connect();
    
    $sql = "SELECT * 
            FROM `users` 
            WHERE `user_email` = '$user_email'";
    $result = mysqli_query($sql);
    
    if (mysqli_num_rows($result) > 0) {
        $user_email = 0;
        while ($row = mysqli_fetch_assoc($result)) { // ???? //
            $row['user_email'] = $user_email;
            return $user_email;
        }
    } else {
        return false;
    }
}
*/
function add_word($eng_word, $translate, $user_id)
{
    $ins = "INSERT INTO `dictionary` (`eng_word`, `translate`, `user_id`) VALUES ('$eng_word', '$translate', '$user_id')"; 
	$result = mysqli_query(db_connect(), $ins);
}

function get_words()
{
    $sql = "SELECT * FROM `dictionary` ORDER BY id DESC LIMIT 5";
    $result = mysqli_query(db_connect(), $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $data_dictionary[] = $row;
    }
        return $data_dictionary;
    }
}