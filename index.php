<?php 

require_once 'fns.php';

$act = $_GET['act'] ? $_GET['act'] : 'login';

switch ($act) {
    case "login":
     
        if ($_POST['login']) {
            
            $eng_word = input_user($_POST['eng_word']);
            $translate = input_user($_POST['translate']);
            
            if (empty($eng_word) && empty($translate)) {
                $totalError = "Заполните все поля";
            } elseif (empty($eng_word)) {
                $userNameError = "Не заполнено поле 'Ваше имя'";
            } elseif (empty($translate)) {
                $userSurnameError = "Не заполнено поле 'Ваше фамилия'";
            } else {
                add_word($eng_word, $translate);
                header("Location: index.php?act=main");
            }
        }
        
        require_once "views/login.php";
        break;
        
    case "main":
        require_once "views/main.php";
        break;
}