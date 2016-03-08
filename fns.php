<?php require_once 'db_config.php';

function db()
{
    $connect = mysql_connect(HOST, USER, PSWD) || die("Can not connect to DB<br />" . mysql_error());
    if(!$connect || !mysql_select_db(DB)) {
        return die("Error with connection or selection of Database <br />" . mysql_error());
    }
    else {
        return $connect;
    }
}

function clear_data($data)
{
    $data = strip_tags(htmlspecialchars(trim($data)));
    return $data;
}

function add_word($eng_word, $ru_word)
{
    mysql_query("INSERT INTO `dictionary` (`eng_word`, `ru_word`) VALUES ('$eng_word', '$ru_word')");
    return mysql_insert_id();
}

function get_word()
{
    $sel = "SELECT * FROM `dictionary` ORDER BY `id` DESC LIMIT 5";
    $res = mysql_query($sel);
    
    while ($row = mysql_fetch_array($res)) {
        $words[] = $row;
    }
    return $words;
}


