<?php 

require_once 'fns.php';

$act = $_GET['act'] ? $_GET['act'] : 'login';

switch ($act) {
    case "login":
     
        if ($_POST['login']) {
            
            $user_name = input_user($_POST['user_name']);
            $user_surname = input_user($_POST['user_surname']);
            
            if (empty($user_name) && empty($user_surname)) {
                $totalError = "Заполните все поля";
            } elseif (empty($user_name)) {
                $userNameError = "Не заполнено поле 'Ваше имя'";
            } elseif (empty($user_surname)) {
                $userSurnameError = "Не заполнено поле 'Ваше фамилия'";
            } else {
                add_word($user_name, $user_surname);
                header("Location: index.php?act=main");
            }
        }
        
        require_once "views/login.php";
        break;
        
    case "main":
        require_once "views/main.php";
        break;
}