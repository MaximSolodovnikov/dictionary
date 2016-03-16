<?php 

require_once 'fns.php';

$act = $_GET['act']?$_GET['act']:'login';

switch ($act) {
    case "login":
        db_connect();
        
        $eng_word = $translate = "";
        
        if ($_POST['login']) {
            if (empty($_POST['eng_word'])) {
                $engWordError = "You did not fill 'eng_word' field";
            } else {
                $eng_word = input_user($_POST['eng_word']);
            }
            
            if(empty($_POST['translate'])) {
                $translateError = "You did not fill 'translate' field";
            } else {
                $translate = input_user($_POST['translate']);
            }
            echo $eng_word . ' ' . $translate;
            /*add_word($eng_word, $translate);*/
        }
        
        require_once 'views/login.php';
        break;
}